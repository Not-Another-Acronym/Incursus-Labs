<?php
/**
 * Implements Special:Emailuser
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
 * @ingroup SpecialPage
 */

/**
 * A special page that allows users to send e-mails to other users
 *
 * @ingroup SpecialPage
 */
class SpecialEmailwiki_User extends UnlistedSpecialPage {
	protected $mTarget;

	public function __construct() {
		parent::__construct( 'Emailuser' );
	}

	public function getDescription() {
		$target = self::getTarget( $this->mTarget );
		if( !$target instanceof wiki_User ) {
			return $this->msg( 'emailuser-title-notarget' )->text();
		}

		return $this->msg( 'emailuser-title-target', $target->getName() )->text();
	}

	protected function getFormFields() {
		return array(
			'From' => array(
				'type' => 'info',
				'raw' => 1,
				'default' => Linker::link(
					$this->getUser()->getUserPage(),
					htmlspecialchars( $this->getUser()->getName() )
				),
				'label-message' => 'emailfrom',
				'id' => 'mw-emailuser-sender',
			),
			'To' => array(
				'type' => 'info',
				'raw' => 1,
				'default' => Linker::link(
					$this->mTargetObj->getUserPage(),
					htmlspecialchars( $this->mTargetObj->getName() )
				),
				'label-message' => 'emailto',
				'id' => 'mw-emailuser-recipient',
			),
			'Target' => array(
				'type' => 'hidden',
				'default' => $this->mTargetObj->getName(),
			),
			'Subject' => array(
				'type' => 'text',
				'default' => $this->msg( 'defemailsubject',
					$this->getUser()->getName() )->inContentLanguage()->text(),
				'label-message' => 'emailsubject',
				'maxlength' => 200,
				'size' => 60,
				'required' => true,
			),
			'Text' => array(
				'type' => 'textarea',
				'rows' => 20,
				'cols' => 80,
				'label-message' => 'emailmessage',
				'required' => true,
			),
			'CCMe' => array(
				'type' => 'check',
				'label-message' => 'emailccme',
				'default' => $this->getUser()->getBoolOption( 'ccmeonemails' ),
			),
		);
	}

	public function execute( $par ) {
		$out = $this->getOutput();
		$out->addModuleStyles( 'mediawiki.special' );

		$this->mTarget = is_null( $par )
			? $this->getRequest()->getVal( 'wpTarget', $this->getRequest()->getVal( 'target', '' ) )
			: $par;

		// This needs to be below assignment of $this->mTarget because
		// getDescription() needs it to determine the correct page title.
		$this->setHeaders();
		$this->outputHeader();

		// error out if sending user cannot do this
		$error = self::getPermissionsError( $this->getUser(), $this->getRequest()->getVal( 'wpEditToken' ) );
		switch ( $error ) {
			case null:
				# Wahey!
				break;
			case 'badaccess':
				throw new PermissionsError( 'sendemail' );
			case 'blockedemailuser':
				throw new wiki_UserBlockedError( $this->getUser()->mBlock );
			case 'actionthrottledtext':
				throw new ThrottledError;
			case 'mailnologin':
			case 'usermaildisabled':
				throw new  ErrorPageError( $error, "{$error}text" );
			default:
				# It's a hook error
				list( $title, $msg, $params ) = $error;
				throw new  ErrorPageError( $title, $msg, $params );
		}
		// Got a valid target user name? Else ask for one.
		$ret = self::getTarget( $this->mTarget );
		if( !$ret instanceof wiki_User ) {
			if( $this->mTarget != '' ) {
				$ret = ( $ret == 'notarget' ) ? 'emailnotarget' : ( $ret . 'text' );
				$out->wrapWikiMsg( "<p class='error'>$1</p>", $ret );
			}
			$out->addHTML( $this->userForm( $this->mTarget ) );
			return false;
		}

		$this->mTargetObj = $ret;

		$form = new HTMLForm( $this->getFormFields(), $this->getContext() );
		$form->addPreText( $this->msg( 'emailpagetext' )->parse() );
		$form->setSubmitTextMsg( 'emailsend' );
		$form->setTitle( $this->getTitle() );
		$form->setSubmitCallback( array( __CLASS__, 'uiSubmit' ) );
		$form->setWrapperLegendMsg( 'email-legend' );
		$form->loadData();

		if( !wfRunHooks( 'Emailwiki_UserForm', array( &$form ) ) ) {
			return false;
		}

		$result = $form->show();

		if( $result === true || ( $result instanceof Status && $result->isGood() ) ) {
			$out->setPageTitle( $this->msg( 'emailsent' ) );
			$out->addWikiMsg( 'emailsenttext' );
			$out->returnToMain( false, $this->mTargetObj->getUserPage() );
		}
	}

	/**
	 * Validate target wiki_User
	 *
	 * @param $target String: target user name
	 * @return wiki_User object on success or a string on error
	 */
	public static function getTarget( $target ) {
		if ( $target == '' ) {
			wfDebug( "Target is empty.\n" );
			return 'notarget';
		}

		$nu = wiki_User::newFromName( $target );
		if( !$nu instanceof wiki_User || !$nu->getId() ) {
			wfDebug( "Target is invalid user.\n" );
			return 'notarget';
		} elseif ( !$nu->isEmailConfirmed() ) {
			wfDebug( "wiki_User has no valid email.\n" );
			return 'noemail';
		} elseif ( !$nu->canReceiveEmail() ) {
			wfDebug( "wiki_User does not allow user emails.\n" );
			return 'nowikiemail';
		}

		return $nu;
	}

	/**
	 * Check whether a user is allowed to send email
	 *
	 * @param $user wiki_User object
	 * @param $editToken String: edit token
	 * @return null on success or string on error
	 */
	public static function getPermissionsError( $user, $editToken ) {
		global $wgEnableEmail, $wgEnablewiki_UserEmail;
		if( !$wgEnableEmail || !$wgEnablewiki_UserEmail ) {
			return 'usermaildisabled';
		}

		if( !$user->isAllowed( 'sendemail' ) ) {
			return 'badaccess';
		}

		if( !$user->isEmailConfirmed() ) {
			return 'mailnologin';
		}

		if( $user->isBlockedFromEmailuser() ) {
			wfDebug( "wiki_User is blocked from sending e-mail.\n" );
			return "blockedemailuser";
		}

		if( $user->pingLimiter( 'emailuser' ) ) {
			wfDebug( "Ping limiter triggered.\n" );
			return 'actionthrottledtext';
		}

		$hookErr = false;
		wfRunHooks( 'wiki_UserCanSendEmail', array( &$user, &$hookErr ) );
		wfRunHooks( 'Emailwiki_UserPermissionsErrors', array( $user, $editToken, &$hookErr ) );
		if ( $hookErr ) {
			return $hookErr;
		}

		return null;
	}

	/**
	 * Form to ask for target user name.
	 *
	 * @param $name String: user name submitted.
	 * @return String: form asking for user name.
	 */
	protected function userForm( $name ) {
		global $wgScript;
		$string = Xml::openElement( 'form', array( 'method' => 'get', 'action' => $wgScript, 'id' => 'askusername' ) ) .
			Html::hidden( 'title', $this->getTitle()->getPrefixedText() ) .
			Xml::openElement( 'fieldset' ) .
			Html::rawElement( 'legend', null, $this->msg( 'emailtarget' )->parse() ) .
			Xml::inputLabel( $this->msg( 'emailusername' )->text(), 'target', 'emailusertarget', 30, $name ) . ' ' .
			Xml::submitButton( $this->msg( 'emailusernamesubmit' )->text() ) .
			Xml::closeElement( 'fieldset' ) .
			Xml::closeElement( 'form' ) . "\n";
		return $string;
	}

	/**
	 * Submit callback for an HTMLForm object, will simply call submit().
	 *
	 * @since 1.20
	 * @param $data array
	 * @param $form HTMLForm object
	 * @return Status|string|bool
	 */
	public static function uiSubmit( array $data, HTMLForm $form ) {
		return self::submit( $data, $form->getContext() );
	}

	/**
	 * Really send a mail. Permissions should have been checked using
	 * getPermissionsError(). It is probably also a good
	 * idea to check the edit token and ping limiter in advance.
	 *
	 * @return Mixed: Status object, or potentially a String on error
	 * or maybe even true on success if anything uses the Emailwiki_User hook.
	 */
	public static function submit( array $data, IContextSource $context ) {
		global $wgwiki_UserEmailUseReplyTo;

		$target = self::getTarget( $data['Target'] );
		if( !$target instanceof wiki_User ) {
			return $context->msg( $target . 'text' )->parseAsBlock();
		}
		$to = new MailAddress( $target );
		$from = new MailAddress( $context->getUser() );
		$subject = $data['Subject'];
		$text = $data['Text'];

		// Add a standard footer and trim up trailing newlines
		$text = rtrim( $text ) . "\n\n-- \n";
		$text .= $context->msg( 'emailuserfooter',
			$from->name, $to->name )->inContentLanguage()->text();

		$error = '';
		if( !wfRunHooks( 'Emailwiki_User', array( &$to, &$from, &$subject, &$text, &$error ) ) ) {
			return $error;
		}

		if( $wgwiki_UserEmailUseReplyTo ) {
			// Put the generic wiki autogenerated address in the From:
			// header and reserve the user for Reply-To.
			//
			// This is a bit ugly, but will serve to differentiate
			// wiki-borne mails from direct mails and protects against
			// SPF and bounce problems with some mailers (see below).
			global $wgPasswordSender, $wgPasswordSenderName;
			$mailFrom = new MailAddress( $wgPasswordSender, $wgPasswordSenderName );
			$replyTo = $from;
		} else {
			// Put the sending user's e-mail address in the From: header.
			//
			// This is clean-looking and convenient, but has issues.
			// One is that it doesn't as clearly differentiate the wiki mail
			// from "directly" sent mails.
			//
			// Another is that some mailers (like sSMTP) will use the From
			// address as the envelope sender as well. For open sites this
			// can cause mails to be flunked for SPF violations (since the
			// wiki server isn't an authorized sender for various users'
			// domains) as well as creating a privacy issue as bounces
			// containing the recipient's e-mail address may get sent to
			// the sending user.
			$mailFrom = $from;
			$replyTo = null;
		}

		$status = wiki_UserMailer::send( $to, $mailFrom, $subject, $text, $replyTo );

		if( !$status->isGood() ) {
			return $status;
		} else {
			// if the user requested a copy of this mail, do this now,
			// unless they are emailing themselves, in which case one
			// copy of the message is sufficient.
			if ( $data['CCMe'] && $to != $from ) {
				$cc_subject = $context->msg( 'emailccsubject' )->rawParams(
					$target->getName(), $subject )->text();
				wfRunHooks( 'Emailwiki_UserCC', array( &$from, &$from, &$cc_subject, &$text ) );
				$ccStatus = wiki_UserMailer::send( $from, $from, $cc_subject, $text );
				$status->merge( $ccStatus );
			}

			wfRunHooks( 'Emailwiki_UserComplete', array( $to, $from, $subject, $text ) );
			return $status;
		}
	}
}
