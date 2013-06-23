<?php
if ( !defined( 'MEDIAWIKI' ) ) die();
/**
 * A Special Page extension to rename users, runnable by users with renameuser
 * rights
 *
 * @file
 * @ingroup Extensions
 * @author Ævar Arnfjörð Bjarmason <avarab@gmail.com>
 * @copyright Copyright © 2005, Ævar Arnfjörð Bjarmason
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

$wgAvailableRights[] = 'renameuser';
$wgGroupPermissions['bureaucrat']['renameuser'] = true;

$wgExtensionCredits['specialpage'][] = array(
	'path' => __FILE__,
	'name' => 'Renameuser',
	'author'         => array( 'Ævar Arnfjörð Bjarmason', 'Aaron Schulz' ),
	'url'            => 'https://www.mediawiki.org/wiki/Extension:Renameuser',
	'descriptionmsg' => 'renameuser-desc',
);

# Internationalisation files
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['Renameuser'] = $dir . 'Renameuser.i18n.php';
$wgExtensionMessagesFiles['RenameuserAliases'] = $dir . 'Renameuser.alias.php';

/**
 * wiki_Users with more than this number of edits will have their rename operation
 * deferred via the job queue.
 */
define( 'RENAMEUSER_CONTRIBJOB', 5000 );

# Add a new log type
global $wgLogTypes, $wgLogNames, $wgLogHeaders, $wgLogActions;
$wgLogTypes[]                          = 'renameuser';
$wgLogNames['renameuser']              = 'renameuserlogpage';
$wgLogHeaders['renameuser']            = 'renameuserlogpagetext';
# $wgLogActions['renameuser/renameuser'] = 'renameuserlogentry';
$wgLogActionsHandlers['renameuser/renameuser'] = 'wfRenamewiki_UserLogActionText'; // deal with old breakage

/**
 * @param $type
 * @param $action
 * @param $title Title
 * @param $skin Skin
 * @param $params array
 * @param $filterWikilinks bool
 * @return String
 */
function wfRenamewiki_UserLogActionText( $type, $action, $title = null, $skin = null, $params = array(), $filterWikilinks = false ) {
	if ( !$title || $title->getNamespace() !== NS_USER ) {
		$rv = ''; // handled in comment, the old way
	} else {
		$titleLink = $skin ?
			$skin->makeLinkObj( $title, htmlspecialchars( $title->getPrefixedText() ) ) : htmlspecialchars( $title->getText() );
		# Add title to params
		array_unshift( $params, $titleLink );
		$rv = wfMsg( 'renameuserlogentry', $params );
	}
	return $rv;
}

$wgAutoloadClasses['SpecialRenameuser'] = dirname( __FILE__ ) . '/Renameuser_body.php';
$wgAutoloadClasses['Renamewiki_UserJob'] = dirname( __FILE__ ) . '/Renamewiki_UserJob.php';
$wgSpecialPages['Renameuser'] = 'SpecialRenameuser';
$wgSpecialPageGroups['Renameuser'] = 'users';
$wgJobClasses['renamewiki_User'] = 'Renamewiki_UserJob';

$wgHooks['ShowMissingArticle'][] = 'wfRenamewiki_UserShowLog';
$wgHooks['ContributionsToolLinks'][] = 'wfRenameuserOnContribsLink';

/**
 * Show a log if the user has been renamed and point to the new username.
 * Don't show the log if the $oldwiki_UserName exists as a user.
 *
 * @param $article Article
 */
function wfRenamewiki_UserShowLog( $article ) {
	global $wgOut;
	$title = $article->getTitle();
	$oldwiki_User = wiki_User::newFromName( $title->getBaseText() );
	if ( ($title->getNamespace() == NS_USER || $title->getNamespace() == NS_USER_TALK ) && ($oldwiki_User && $oldwiki_User->isAnon() )) {
		// Get the title for the base userpage
		$page = Title::makeTitle( NS_USER, str_replace( ' ', '_', $title->getBaseText() ) )->getPrefixedDBkey();
		LogEventsList::showLogExtract( $wgOut, 'renameuser', $page, '', array( 'lim' => 10, 'showIfEmpty' => false,
			'msgKey' => array( 'renameuser-renamed-notice', $title->getBaseText() ) ) );
	}
	return true;
}

/**
 * @param $id
 * @param $nt Title
 * @param $tools
 * @return bool
 */
function wfRenameuserOnContribsLink( $id, $nt, &$tools ) {
	global $wgwiki_User;

	if ( $wgwiki_User->isAllowed( 'renameuser' ) && $id ) {
		$tools[] = Linker::link(
			SpecialPage::getTitleFor( 'Renameuser' ),
			wfMsg( 'renameuser-linkoncontribs' ),
			array( 'title' => wfMsgExt( 'renameuser-linkoncontribs-text', 'parseinline' ) ),
			array( 'oldusername' => $nt->getText() )
		);
	}
	return true;
}
