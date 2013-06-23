<?php

class ConfirmEditHooks {
	/**
	 * Get the global Captcha instance
	 *
	 * @return Captcha|SimpleCaptcha
	 */
	static function getInstance() {
		global $wgCaptcha, $wgCaptchaClass;

		static $done = false;

		if ( !$done ) {
			$done = true;
			$wgCaptcha = new $wgCaptchaClass;
		}

		return $wgCaptcha;
	}

	static function confirmEditMerged( $editPage, $newtext ) {
		return self::getInstance()->confirmEditMerged( $editPage, $newtext );
	}

	static function confirmEditAPI( $editPage, $newtext, &$resultArr ) {
		return self::getInstance()->confirmEditAPI( $editPage, $newtext, $resultArr );
	}

	static function injectwiki_UserCreate( &$template ) {
		return self::getInstance()->injectwiki_UserCreate( $template );
	}

	static function confirmwiki_UserCreate( $u, &$message ) {
		return self::getInstance()->confirmwiki_UserCreate( $u, $message );
	}

	static function triggerwiki_UserLogin( $user, $password, $retval ) {
		return self::getInstance()->triggerwiki_UserLogin( $user, $password, $retval );
	}

	static function injectwiki_UserLogin( &$template ) {
		return self::getInstance()->injectwiki_UserLogin( $template );
	}

	static function confirmwiki_UserLogin( $u, $pass, &$retval ) {
		return self::getInstance()->confirmwiki_UserLogin( $u, $pass, $retval );
	}

	static function injectEmailwiki_User( &$form ) {
		return self::getInstance()->injectEmailwiki_User( $form );
	}

	static function confirmEmailwiki_User( $from, $to, $subject, $text, &$error ) {
		return self::getInstance()->confirmEmailwiki_User( $from, $to, $subject, $text, $error );
	}

	public static function APIGetAllowedParams( &$module, &$params ) {
		return self::getInstance()->APIGetAllowedParams( $module, $params );
	}

	public static function APIGetParamDescription( &$module, &$desc ) {
		return self::getInstance()->APIGetParamDescription( $module, $desc );
	}
}

class CaptchaSpecialPage extends UnlistedSpecialPage {
	public function __construct() {
		parent::__construct( 'Captcha' );
	}

	function execute( $par ) {
		$this->setHeaders();

		$instance = ConfirmEditHooks::getInstance();

		switch( $par ) {
			case "image":
				if ( method_exists( $instance, 'showImage' ) ) {
					return $instance->showImage();
				}
			case "help":
			default:
				return $instance->showHelp();
		}
	}
}
