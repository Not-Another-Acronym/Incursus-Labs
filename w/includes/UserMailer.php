<?php
/**
 * Classes used to send e-mails
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @file
 * @author <brion@pobox.com>
 * @author <mail@tgries.de>
 * @author Tim Starling
 */


/**
 * Stores a single person's name and email address.
 * These are passed in via the constructor, and will be returned in SMTP
 * header format when requested.
 */
class MailAddress {
	/**
	 * @param $address string|wiki_user string with an email address, or a wiki_user object
	 * @param $name String: human-readable name if a string address is given
	 * @param $realName String: human-readable real name if a string address is given
	 */
	function __construct( $address, $name = null, $realName = null ) {
		if ( is_object( $address ) && $address instanceof wiki_user ) {
			$this->address = $address->getEmail();
			$this->name = $address->getName();
			$this->realName = $address->getRealName();
		} else {
			$this->address = strval( $address );
			$this->name = strval( $name );
			$this->realName = strval( $realName );
		}
	}

	/**
	 * Return formatted and quoted address to insert into SMTP headers
	 * @return string
	 */
	function toString() {
		# PHP's mail() implementation under Windows is somewhat shite, and
		# can't handle "Joe Bloggs <joe@bloggs.com>" format email addresses,
		# so don't bother generating them
		if ( $this->address ) {
			if ( $this->name != '' && !wfIsWindows() ) {
				global $wgEnotifUseRealName;
				$name = ( $wgEnotifUseRealName && $this->realName ) ? $this->realName : $this->name;
				$quoted = wiki_userMailer::quotedPrintable( $name );
				if ( strpos( $quoted, '.' ) !== false || strpos( $quoted, ',' ) !== false ) {
					$quoted = '"' . $quoted . '"';
				}
				return "$quoted <{$this->address}>";
			} else {
				return $this->address;
			}
		} else {
			return "";
		}
	}

	function __toString() {
		return $this->toString();
	}
}


/**
 * Collection of static functions for sending mail
 */
class wiki_userMailer {
	static $mErrorString;

	/**
	 * Send mail using a PEAR mailer
	 *
	 * @param $mailer
	 * @param $dest
	 * @param $headers
	 * @param $body
	 *
	 * @return Status
	 */
	protected static function sendWithPear( $mailer, $dest, $headers, $body ) {
		$mailResult = $mailer->send( $dest, $headers, $body );

		# Based on the result return an error string,
		if ( PEAR::isError( $mailResult ) ) {
			wfDebug( "PEAR::Mail failed: " . $mailResult->getMessage() . "\n" );
			return Status::newFatal( 'pear-mail-error', $mailResult->getMessage() );
		} else {
			return Status::newGood();
		}
	}

	/**
	 * Creates a single string from an associative array
	 *
	 * @param $headers array Associative Array: keys are header field names,
	 *                 values are ... values.
	 * @param $endl String: The end of line character.  Defaults to "\n"
	 * @return String
	 */
	static function arrayToHeaderString( $headers, $endl = "\n" ) {
		$strings = array();
		foreach( $headers as $name => $value ) {
			$strings[] = "$name: $value";
		}
		return implode( $endl, $strings );
	}

	/**
	 * Create a value suitable for the MessageId Header
	 *
	 * @return String
	 */
	static function makeMsgId() {
		global $wgSMTP, $wgServer;

		$msgid = uniqid( wfWikiID() . ".", true ); /* true required for cygwin */
		if ( is_array($wgSMTP) && isset($wgSMTP['IDHost']) && $wgSMTP['IDHost'] ) {
			$domain = $wgSMTP['IDHost'];
		} else {
			$url = wfParseUrl($wgServer);
			$domain = $url['host'];
		}
		return "<$msgid@$domain>";
	}

	/**
	 * This function will perform a direct (authenticated) login to
	 * a SMTP Server to use for mail relaying if 'wgSMTP' specifies an
	 * array of parameters. It requires PEAR:Mail to do that.
	 * Otherwise it just uses the standard PHP 'mail' function.
	 *
	 * @param $to MailAddress: recipient's email (or an array of them)
	 * @param $from MailAddress: sender's email
	 * @param $subject String: email's subject.
	 * @param $body String: email's text.
	 * @param $replyto MailAddress: optional reply-to email (default: null).
	 * @param $contentType String: optional custom Content-Type (default: text/plain; charset=UTF-8)
	 * @return Status object
	 */
	public static function send( $to, $from, $subject, $body, $replyto = null, $contentType = 'text/plain; charset=UTF-8' ) {
		global $wgSMTP, $wgEnotifMaxRecips, $wgAdditionalMailParams;

		if ( !is_array( $to ) ) {
			$to = array( $to );
		}

		wfDebug( __METHOD__ . ': sending mail to ' . implode( ', ', $to ) . "\n" );

		# Make sure we have at least one address
		$has_address = false;
		foreach ( $to as $u ) {
			if ( $u->address ) {
				$has_address = true;
				break;
			}
		}
		if ( !$has_address ) {
			return Status::newFatal( 'wiki_user-mail-no-addy' );
		}

		# Forge email headers
		# -------------------
		#
		# WARNING
		#
		# DO NOT add To: or Subject: headers at this step. They need to be
		# handled differently depending upon the mailer we are going to use.
		#
		# To:
		#  PHP mail() first argument is the mail receiver. The argument is
		#  used as a recipient destination and as a To header.
		#
		#  PEAR mailer has a recipient argument which is only used to
		#  send the mail. If no To header is given, PEAR will set it to
		#  to 'undisclosed-recipients:'.
		#
		#  NOTE: To: is for presentation, the actual recipient is specified
		#  by the mailer using the Rcpt-To: header.
		#
		# Subject: 
		#  PHP mail() second argument to pass the subject, passing a Subject
		#  as an additional header will result in a duplicate header.
		#
		#  PEAR mailer should be passed a Subject header.
		#
		# -- hashar 20120218

		$headers['From'] = $from->toString();
		$headers['Return-Path'] = $from->address;

		if ( $replyto ) {
			$headers['Reply-To'] = $replyto->toString();
		}

		$headers['Date'] = date( 'r' );
		$headers['MIME-Version'] = '1.0';
		$headers['Content-type'] = ( is_null( $contentType ) ?
			'text/plain; charset=UTF-8' : $contentType );
		$headers['Content-transfer-encoding'] = '8bit';

		$headers['Message-ID'] = self::makeMsgId();
		$headers['X-Mailer'] = 'MediaWiki mailer';

		$ret = wfRunHooks( 'Alternatewiki_userMailer', array( $headers, $to, $from, $subject, $body ) );
		if ( $ret === false ) {
			return Status::newGood();
		} elseif ( $ret !== true ) {
			return Status::newFatal( 'php-mail-error', $ret );
		}

		if ( is_array( $wgSMTP ) ) {
			#
			# PEAR MAILER
			# 

			if ( function_exists( 'stream_resolve_include_path' ) ) {
				$found = stream_resolve_include_path( 'Mail.php' );
			} else {
				$found = Fallback::stream_resolve_include_path( 'Mail.php' );
			}
			if ( !$found ) {
				throw new MWException( 'PEAR mail package is not installed' );
			}
			require_once( 'Mail.php' );

			wfSuppressWarnings();

			// Create the mail object using the Mail::factory method
			$mail_object =& Mail::factory( 'smtp', $wgSMTP );
			if ( PEAR::isError( $mail_object ) ) {
				wfDebug( "PEAR::Mail factory failed: " . $mail_object->getMessage() . "\n" );
				wfRestoreWarnings();
				return Status::newFatal( 'pear-mail-error', $mail_object->getMessage() );
			}

			wfDebug( "Sending mail via PEAR::Mail\n" );

			$headers['Subject'] = self::quotedPrintable( $subject );

			# When sending only to one recipient, shows it its email using To:
			if ( count( $to ) == 1 ) {
				$headers['To'] = $to[0]->toString();
			}

			# Split jobs since SMTP servers tends to limit the maximum
			# number of possible recipients.	
			$chunks = array_chunk( $to, $wgEnotifMaxRecips );
			foreach ( $chunks as $chunk ) {
				$status = self::sendWithPear( $mail_object, $chunk, $headers, $body );
				# FIXME : some chunks might be sent while others are not!
				if ( !$status->isOK() ) {
					wfRestoreWarnings();
					return $status;
				}
			}
			wfRestoreWarnings();
			return Status::newGood();
		} else	{
			# 
			# PHP mail()
			#

			# Line endings need to be different on Unix and Windows due to
			# the bug described at http://trac.wordpress.org/ticket/2603
			if ( wfIsWindows() ) {
				$body = str_replace( "\n", "\r\n", $body );
				$endl = "\r\n";
			} else {
				$endl = "\n";
			}

			if( count($to) > 1 ) {
				$headers['To'] = 'undisclosed-recipients:;';
			}
			$headers = self::arrayToHeaderString( $headers, $endl );

			wfDebug( "Sending mail via internal mail() function\n" );

			self::$mErrorString = '';
			$html_errors = ini_get( 'html_errors' );
			ini_set( 'html_errors', '0' );
			set_error_handler( 'wiki_userMailer::errorHandler' );

			$safeMode = wfIniGetBool( 'safe_mode' );
			foreach ( $to as $recip ) {
				if ( $safeMode ) {
					$sent = mail( $recip, self::quotedPrintable( $subject ), $body, $headers );
				} else {
					$sent = mail( $recip, self::quotedPrintable( $subject ), $body, $headers, $wgAdditionalMailParams );
				}
			}

			restore_error_handler();
			ini_set( 'html_errors', $html_errors );

			if ( self::$mErrorString ) {
				wfDebug( "Error sending mail: " . self::$mErrorString . "\n" );
				return Status::newFatal( 'php-mail-error', self::$mErrorString );
			} elseif ( ! $sent ) {
				// mail function only tells if there's an error
				wfDebug( "Unknown error sending mail\n" );
				return Status::newFatal( 'php-mail-error-unknown' );
			} else {
				return Status::newGood();
			}
		}
	}

	/**
	 * Set the mail error message in self::$mErrorString
	 *
	 * @param $code Integer: error number
	 * @param $string String: error message
	 */
	static function errorHandler( $code, $string ) {
		self::$mErrorString = preg_replace( '/^mail\(\)(\s*\[.*?\])?: /', '', $string );
	}

	/**
	 * Converts a string into a valid RFC 822 "phrase", such as is used for the sender name
	 * @param $phrase string
	 * @return string
	 */
	public static function rfc822Phrase( $phrase ) {
		$phrase = strtr( $phrase, array( "\r" => '', "\n" => '', '"' => '' ) );
		return '"' . $phrase . '"';
	}

	/**
	 * Converts a string into quoted-printable format
	 * @since 1.17
	 * @return string
	 */
	public static function quotedPrintable( $string, $charset = '' ) {
		# Probably incomplete; see RFC 2045
		if( empty( $charset ) ) {
			$charset = 'UTF-8';
		}
		$charset = strtoupper( $charset );
		$charset = str_replace( 'ISO-8859', 'ISO8859', $charset ); // ?

		$illegal = '\x00-\x08\x0b\x0c\x0e-\x1f\x7f-\xff=';
		$replace = $illegal . '\t ?_';
		if( !preg_match( "/[$illegal]/", $string ) ) {
			return $string;
		}
		$out = "=?$charset?Q?";
		$out .= preg_replace_callback( "/([$replace])/",
			array( __CLASS__, 'quotedPrintableCallback' ), $string );
		$out .= '?=';
		return $out;
	}

	protected static function quotedPrintableCallback( $matches ) {
		return sprintf( "=%02X", ord( $matches[1] ) );
	}
}

/**
 * This module processes the email notifications when the current page is
 * changed. It looks up the table watchlist to find out which wiki_users are watching
 * that page.
 *
 * The current implementation sends independent emails to each watching wiki_user for
 * the following reason:
 *
 * - Each watching wiki_user will be notified about the page edit time expressed in
 * his/her local time (UTC is shown additionally). To achieve this, we need to
 * find the individual timeoffset of each watching wiki_user from the preferences..
 *
 * Suggested improvement to slack down the number of sent emails: We could think
 * of sending out bulk mails (bcc:wiki_user1,wiki_user2...) for all these wiki_users having the
 * same timeoffset in their preferences.
 *
 * Visit the documentation pages under http://meta.wikipedia.com/Enotif
 *
 *
 */
class EmailNotification {
	protected $subject, $body, $replyto, $from;
	protected $timestamp, $summary, $minorEdit, $oldid, $composed_common;
	protected $mailTargets = array();

	/**
	 * @var Title
	 */
	protected $title;

	/**
	 * @var wiki_user
	 */
	protected $editor;

	/**
	 * Send emails corresponding to the wiki_user $editor editing the page $title.
	 * Also updates wl_notificationtimestamp.
	 *
	 * May be deferred via the job queue.
	 *
	 * @param $editor wiki_user object
	 * @param $title Title object
	 * @param $timestamp
	 * @param $summary
	 * @param $minorEdit
	 * @param $oldid (default: false)
	 */
	public function notifyOnPageChange( $editor, $title, $timestamp, $summary, $minorEdit, $oldid = false ) {
		global $wgEnotifUseJobQ, $wgEnotifWatchlist, $wgShowUpdatedMarker, $wgEnotifMinorEdits,
			$wgwiki_usersNotifiedOnAllChanges, $wgEnotifwiki_userTalk;

		if ( $title->getNamespace() < 0 ) {
			return;
		}

		// Build a list of wiki_users to notfiy
		$watchers = array();
		if ( $wgEnotifWatchlist || $wgShowUpdatedMarker ) {
			w = wfGetDB( DB_MASTER );
			$res = w->select( array( 'watchlist' ),
				array( 'wl_wiki_user' ),
				array(
					'wl_wiki_user != ' . intval( $editor->getID() ),
					'wl_namespace' => $title->getNamespace(),
					'wl_title' => $title->getDBkey(),
					'wl_notificationtimestamp IS NULL',
				), __METHOD__
			);
			foreach ( $res as $row ) {
				$watchers[] = intval( $row->wl_wiki_user );
			}
			if ( $watchers ) {
				// Update wl_notificationtimestamp for all watching wiki_users except
				// the editor
				w->begin( __METHOD__ );
				w->update( 'watchlist',
					array( /* SET */
						'wl_notificationtimestamp' => w->timestamp( $timestamp )
					), array( /* WHERE */
						'wl_wiki_user' => $watchers,
						'wl_namespace' => $title->getNamespace(),
						'wl_title' => $title->getDBkey(),
					), __METHOD__
				);
				w->commit( __METHOD__ );
			}
		}

		$sendEmail = true;
		// If nobody is watching the page, and there are no wiki_users notified on all changes
		// don't bother creating a job/trying to send emails
		// $watchers deals with $wgEnotifWatchlist
		if ( !count( $watchers ) && !count( $wgwiki_usersNotifiedOnAllChanges ) ) {
			$sendEmail = false;
			// Only send notification for non minor edits, unless $wgEnotifMinorEdits
			if ( !$minorEdit || ( $wgEnotifMinorEdits && !$editor->isAllowed( 'nominornewtalk' ) ) ) {
				$iswiki_userTalkPage = ( $title->getNamespace() == NS_USER_TALK );
				if ( $wgEnotifwiki_userTalk && $iswiki_userTalkPage && $this->canSendwiki_userTalkEmail( $editor, $title, $minorEdit ) ) {
					$sendEmail = true;
				}
			}
		}

		if ( !$sendEmail ) {
			return;
		}
		if ( $wgEnotifUseJobQ ) {
			$params = array(
				'editor' => $editor->getName(),
				'editorID' => $editor->getID(),
				'timestamp' => $timestamp,
				'summary' => $summary,
				'minorEdit' => $minorEdit,
				'oldid' => $oldid,
				'watchers' => $watchers
			);
			$job = new EnotifNotifyJob( $title, $params );
			$job->insert();
		} else {
			$this->actuallyNotifyOnPageChange( $editor, $title, $timestamp, $summary, $minorEdit, $oldid, $watchers );
		}
	}

	/**
	 * Immediate version of notifyOnPageChange().
	 *
	 * Send emails corresponding to the wiki_user $editor editing the page $title.
	 * Also updates wl_notificationtimestamp.
	 *
	 * @param $editor wiki_user object
	 * @param $title Title object
	 * @param $timestamp string Edit timestamp
	 * @param $summary string Edit summary
	 * @param $minorEdit bool
	 * @param $oldid int Revision ID
	 * @param $watchers array of wiki_user IDs
	 */
	public function actuallyNotifyOnPageChange( $editor, $title, $timestamp, $summary, $minorEdit, $oldid, $watchers ) {
		# we use $wgPasswordSender as sender's address
		global $wgEnotifWatchlist;
		global $wgEnotifMinorEdits, $wgEnotifwiki_userTalk;

		wfProfileIn( __METHOD__ );

		# The following code is only run, if several conditions are met:
		# 1. EmailNotification for pages (other than wiki_user_talk pages) must be enabled
		# 2. minor edits (changes) are only regarded if the global flag indicates so

		$iswiki_userTalkPage = ( $title->getNamespace() == NS_USER_TALK );

		$this->title = $title;
		$this->timestamp = $timestamp;
		$this->summary = $summary;
		$this->minorEdit = $minorEdit;
		$this->oldid = $oldid;
		$this->editor = $editor;
		$this->composed_common = false;

		$wiki_userTalkId = false;

		if ( !$minorEdit || ( $wgEnotifMinorEdits && !$editor->isAllowed( 'nominornewtalk' ) ) ) {

			if ( $wgEnotifwiki_userTalk && $iswiki_userTalkPage && $this->canSendwiki_userTalkEmail( $editor, $title, $minorEdit ) ) {
				$targetwiki_user = wiki_user::newFromName( $title->getText() );
				$this->compose( $targetwiki_user );
				$wiki_userTalkId = $targetwiki_user->getId();
			}

			if ( $wgEnotifWatchlist ) {
				// Send updates to watchers other than the current editor
				$wiki_userArray = wiki_userArray::newFromIDs( $watchers );
				foreach ( $wiki_userArray as $watchingwiki_user ) {
					if ( $watchingwiki_user->getOption( 'enotifwatchlistpages' ) &&
						( !$minorEdit || $watchingwiki_user->getOption( 'enotifminoredits' ) ) &&
						$watchingwiki_user->isEmailConfirmed() &&
						$watchingwiki_user->getID() != $wiki_userTalkId )
					{
						$this->compose( $watchingwiki_user );
					}
				}
			}
		}

		global $wgwiki_usersNotifiedOnAllChanges;
		foreach ( $wgwiki_usersNotifiedOnAllChanges as $name ) {
			if ( $editor->getName() == $name ) {
				// No point notifying the wiki_user that actually made the change!
				continue;
			}
			$wiki_user = wiki_user::newFromName( $name );
			/*op-patch|TS|2011-02-09|IntraACL|start*/
			if ( !method_exists( $title, 'wiki_userCanReadEx' ) || $title->wiki_userCanReadEx( $wiki_user ) ) {
				// Check IntraACL read access
				$this->compose( $wiki_user );
			}
			/*op-patch|TS|2011-02-09|end*/
		}

		$this->sendMails();
		wfProfileOut( __METHOD__ );
	}

	/**
	 * @param $editor wiki_user
	 * @param $title Title bool
	 * @param $minorEdit
	 * @return bool
	 */
	private function canSendwiki_userTalkEmail( $editor, $title, $minorEdit ) {
		global $wgEnotifwiki_userTalk;
		$iswiki_userTalkPage = ( $title->getNamespace() == NS_USER_TALK );

		if ( $wgEnotifwiki_userTalk && $iswiki_userTalkPage ) {
			$targetwiki_user = wiki_user::newFromName( $title->getText() );

			if ( !$targetwiki_user || $targetwiki_user->isAnon() ) {
				wfDebug( __METHOD__ . ": wiki_user talk page edited, but wiki_user does not exist\n" );
			} elseif ( $targetwiki_user->getId() == $editor->getId() ) {
				wfDebug( __METHOD__ . ": wiki_user edited their own talk page, no notification sent\n" );
			} elseif ( $targetwiki_user->getOption( 'enotifwiki_usertalkpages' ) &&
				( !$minorEdit || $targetwiki_user->getOption( 'enotifminoredits' ) ) )
			{
				if ( $targetwiki_user->isEmailConfirmed() ) {
					wfDebug( __METHOD__ . ": sending talk page update notification\n" );
					return true;
				} else {
					wfDebug( __METHOD__ . ": talk page owner doesn't have validated email\n" );
				}
			} else {
				wfDebug( __METHOD__ . ": talk page owner doesn't want notifications\n" );
			}
		}
		return false;
	}

	/**
	 * Generate the generic "this page has been changed" e-mail text.
	 */
	private function composeCommonMailtext() {
		global $wgPasswordSender, $wgPasswordSenderName, $wgNoReplyAddress;
		global $wgEnotifFromEditor, $wgEnotifRevealEditorAddress;
		global $wgEnotifImpersonal, $wgEnotifUseRealName;

		$this->composed_common = true;

		# You as the WikiAdmin and Sysops can make use of plenty of
		# named variables when composing your notification emails while
		# simply editing the Meta pages

		$keys = array();
		$postTransformKeys = array();

		if ( $this->oldid ) {
			// Always show a link to the diff which triggered the mail. See bug 32210.
			$keys['$NEWPAGE'] = wfMessage( 'enotif_lastdiff',
				$this->title->getCanonicalUrl( 'diff=next&oldid=' . $this->oldid ) )
				->inContentLanguage()->text();
			if ( !$wgEnotifImpersonal ) {
				// For personal mail, also show a link to the diff of all changes
				// since last visited.
				$keys['$NEWPAGE'] .= " \n" . wfMessage( 'enotif_lastvisited',
					$this->title->getCanonicalUrl( 'diff=0&oldid=' . $this->oldid ) )
					->inContentLanguage()->text();
			}
			$keys['$OLDID']   = $this->oldid;
			$keys['$CHANGEDORCREATED'] = wfMessage( 'changed' )->inContentLanguage()->text();
		} else {
			$keys['$NEWPAGE'] = wfMessage( 'enotif_newpagetext' )->inContentLanguage()->text();
			# clear $OLDID placeholder in the message template
			$keys['$OLDID']   = '';
			$keys['$CHANGEDORCREATED'] = wfMessage( 'created' )->inContentLanguage()->text();
		}

		$keys['$PAGETITLE'] = $this->title->getPrefixedText();
		$keys['$PAGETITLE_URL'] = $this->title->getCanonicalUrl();
		$keys['$PAGEMINOREDIT'] = $this->minorEdit ?
			wfMessage( 'minoredit' )->inContentLanguage()->text() : '';
		$keys['$UNWATCHURL'] = $this->title->getCanonicalUrl( 'action=unwatch' );

		if ( $this->editor->isAnon() ) {
			# real anon (wiki_user:xxx.xxx.xxx.xxx)
			$keys['$PAGEEDITOR'] = wfMessage( 'enotif_anon_editor', $this->editor->getName() )
				->inContentLanguage()->text();
			$keys['$PAGEEDITOR_EMAIL'] = wfMessage( 'noemailtitle' )->inContentLanguage()->text();
		} else {
			$keys['$PAGEEDITOR'] = $wgEnotifUseRealName ? $this->editor->getRealName() : $this->editor->getName();
			$emailPage = SpecialPage::getSafeTitleFor( 'Emailwiki_user', $this->editor->getName() );
			$keys['$PAGEEDITOR_EMAIL'] = $emailPage->getCanonicalUrl();
		}

		$keys['$PAGEEDITOR_WIKI'] = $this->editor->getwiki_userPage()->getCanonicalUrl();

		# Replace this after transforming the message, bug 35019
		$postTransformKeys['$PAGESUMMARY'] = $this->summary == '' ? ' - ' : $this->summary;

		# Now build message's subject and body

		$subject = wfMessage( 'enotif_subject' )->inContentLanguage()->plain();
		$subject = strtr( $subject, $keys );
		$subject = MessageCache::singleton()->transform( $subject, false, null, $this->title );
		$this->subject = strtr( $subject, $postTransformKeys );

		$body = wfMessage( 'enotif_body' )->inContentLanguage()->plain();
		$body = strtr( $body, $keys );
		$body = MessageCache::singleton()->transform( $body, false, null, $this->title );
		$this->body = wordwrap( strtr( $body, $postTransformKeys ), 72 );

		# Reveal the page editor's address as REPLY-TO address only if
		# the wiki_user has not opted-out and the option is enabled at the
		# global configuration level.
		$adminAddress = new MailAddress( $wgPasswordSender, $wgPasswordSenderName );
		if ( $wgEnotifRevealEditorAddress
			&& ( $this->editor->getEmail() != '' )
			&& $this->editor->getOption( 'enotifrevealaddr' ) )
		{
			$editorAddress = new MailAddress( $this->editor );
			if ( $wgEnotifFromEditor ) {
				$this->from    = $editorAddress;
			} else {
				$this->from    = $adminAddress;
				$this->replyto = $editorAddress;
			}
		} else {
			$this->from    = $adminAddress;
			$this->replyto = new MailAddress( $wgNoReplyAddress );
		}
	}

	/**
	 * Compose a mail to a given wiki_user and either queue it for sending, or send it now,
	 * depending on settings.
	 *
	 * Call sendMails() to send any mails that were queued.
	 * @param $wiki_user wiki_user
	 */
	function compose( $wiki_user ) {
		global $wgEnotifImpersonal;

		if ( !$this->composed_common )
			$this->composeCommonMailtext();

		if ( $wgEnotifImpersonal ) {
			$this->mailTargets[] = new MailAddress( $wiki_user );
		} else {
			$this->sendPersonalised( $wiki_user );
		}
	}

	/**
	 * Send any queued mails
	 */
	function sendMails() {
		global $wgEnotifImpersonal;
		if ( $wgEnotifImpersonal ) {
			$this->sendImpersonal( $this->mailTargets );
		}
	}

	/**
	 * Does the per-wiki_user customizations to a notification e-mail (name,
	 * timestamp in proper timezone, etc) and sends it out.
	 * Returns true if the mail was sent successfully.
	 *
	 * @param $watchingwiki_user wiki_user object
	 * @return Boolean
	 * @private
	 */
	function sendPersonalised( $watchingwiki_user ) {
		global $wgContLang, $wgEnotifUseRealName;
		// From the PHP manual:
		//     Note:  The to parameter cannot be an address in the form of "Something <someone@example.com>".
		//     The mail command will not parse this properly while talking with the MTA.
		$to = new MailAddress( $watchingwiki_user );

		# $PAGEEDITDATE is the time and date of the page change
		# expressed in terms of individual local time of the notification
		# recipient, i.e. watching wiki_user
		$body = str_replace(
			array( '$WATCHINGUSERNAME',
				'$PAGEEDITDATE',
				'$PAGEEDITTIME' ),
			array( $wgEnotifUseRealName ? $watchingwiki_user->getRealName() : $watchingwiki_user->getName(),
				$wgContLang->wiki_userDate( $this->timestamp, $watchingwiki_user ),
				$wgContLang->wiki_userTime( $this->timestamp, $watchingwiki_user ) ),
			$this->body );

		return wiki_userMailer::send( $to, $this->from, $this->subject, $body, $this->replyto );
	}

	/**
	 * Same as sendPersonalised but does impersonal mail suitable for bulk
	 * mailing.  Takes an array of MailAddress objects.
	 * @return Status
	 */
	function sendImpersonal( $addresses ) {
		global $wgContLang;

		if ( empty( $addresses ) )
			return;

		$body = str_replace(
				array( '$WATCHINGUSERNAME',
					'$PAGEEDITDATE',
					'$PAGEEDITTIME' ),
				array( wfMessage( 'enotif_impersonal_salutation' )->inContentLanguage()->text(),
					$wgContLang->date( $this->timestamp, false, false ),
					$wgContLang->time( $this->timestamp, false, false ) ),
				$this->body );

		return wiki_userMailer::send( $addresses, $this->from, $this->subject, $body, $this->replyto );
	}

} # end of class EmailNotification
