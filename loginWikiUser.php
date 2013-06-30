<?php
	$old_cwd = getcwd();
	chdir("../w/");
	global $IP, $haclgIP, $haclgNamespaceIndex, $request, $user, $namespaces,
		$wgRequestTime, $wgRUstart, $wgAutoloadLocalClasses, $wgProfiler, $wgAutoloadClasses, $wgConf, $wgVersion, $wgSitename, $wgServer,
		$wgCanonicalServer, $wgScriptPath, $wgUsePathInfo, $wgScriptExtension, $wgScript, $wgRedirectScript, $wgLoadScript, $wgStylePath,
		$wgStyleSheetPath, $wgLocalStylePath, $wgExtensionAssetsPath, $wgStyleDirectory, $wgArticlePath, $wgUploadPath, $wgUploadDirectory,
		$wgFileCacheDirectory, $wgLogo, $wgFavicon, $wgAppleTouchIcon, $wgTmpDirectory, $wgUploadBaseUrl, $wgUploadStashScalerBaseUrl,
		$wgActionPaths, $wgEnableUploads, $wgUploadStashMaxAge, $wgAllowImageMoving, $wgIllegalFileChars, $wgFileStore,
		$wgDeletedDirectory, $wgImgAuthDetails, $wgImgAuthPublicTest, $wgLocalFileRepo, $wgForeignFileRepos, $wgUseInstantCommons,
		$wgFileBackends, $wgLockManagers, $wgShowEXIF, $wgUpdateCompatibleMetadata, $wgUseSharedUploads, $wgSharedUploadPath,
		$wgFetchCommonsDescriptions, $wgSharedUploadDirectory, $wgSharedUploadDBname, $wgSharedUploadDBprefix, $wgCacheSharedUploads,
		$wgAllowCopyUploads, $wgAllowAsyncCopyUploads, $wgCopyUploadsDomains, $wgCopyUploadProxy, $wgMaxUploadSize, $wgUploadNavigationUrl,
		$wgUploadMissingFileUrl, $wgThumbnailScriptPath, $wgSharedThumbnailScriptPath, $wgHashedUploadDirectory,
		$wgHashedSharedUploadDirectory, $wgRepositoryBaseUrl, $wgFileExtensions, $wgFileBlacklist, $wgMimeTypeBlacklist,
		$wgAllowJavaUploads, $wgCheckFileExtensions, $wgStrictFileExtensions, $wgDisableUploadScriptChecks, $wgUploadSizeWarning,
		$wgTrustedMediaFormats, $wgMediaHandlers, $wgUseImageMagick, $wgImageMagickConvertCommand, $wgImageMagickIdentifyCommand,
		$wgSharpenParameter, $wgSharpenReductionThreshold, $wgImageMagickTempDir, $wgCustomConvertCommand, $wgExiv2Command,
		$wgSVGConverters, $wgSVGConverter, $wgSVGConverterPath, $wgSVGMaxSize, $wgSVGMetadataCutoff, $wgAllowTitlesInSVG,
		$wgMaxImageArea, $wgMaxAnimatedGifArea, $wgTiffThumbnailType, $wgThumbnailEpoch, $wgIgnoreImageErrors,
		$wgGenerateThumbnailOnParse, $wgShowArchiveThumbnails, $wgUseImageResize, $wgEnableAutoRotation, $wgAntivirus, $wgAntivirusSetup,
		$wgAntivirusRequired, $wgVerifyMimeType, $wgMimeTypeFile, $wgMimeInfoFile, $wgLoadFileinfoExtension, $wgMimeDetectorCommand,
		$wgTrivialMimeDetection, $wgXMLMimeTypes, $wgImageLimits, $wgThumbLimits, $wgGalleryOptions, $wgThumbUpright, $wgDirectoryMode,
		$wgDjvuDump, $wgDjvuRenderer, $wgDjvuTxt, $wgDjvuToXML, $wgDjvuPostProcessor, $wgDjvuOutputExtension, $wgEmergencyContact, $wgPasswordSender, $wgPasswordSenderName, $wgNoReplyAddress, $wgEnableEmail, $wgEnablewiki_UserEmail, $wgwiki_UserEmailUseReplyTo, $wgPasswordReminderResendTime, $wgNewPasswordExpiry, $wgwiki_UserEmailConfirmationTokenExpiry, $wgSMTP, $wgAdditionalMailParams, $wgEnotifFromEditor, $wgEmailAuthentication, $wgEnotifWatchlist, $wgEnotifwiki_UserTalk, $wgEnotifRevealEditorAddress, $wgEnotifMinorEdits, $wgEnotifImpersonal, $wgEnotifMaxRecips, $wgEnotifUseJobQ, $wgEnotifUseRealName, $wgwiki_UsersNotifiedOnAllChanges, $wgDBserver, $wgDBport, $wgDBname, $wgDBuser, $wgDBpassword, $wgDBtype, $wgDBssl, $wgDBcompress, $wgDBadminuser, $wgDBadminpassword, $wgSearchType, $wgDBprefix, $wgDBTableOptions, $wgSQLMode, $wgDBmwschema, $wgSQLiteDataDir, $wgAllDBsAreLocalhost, $wgSharedDB, $wgSharedPrefix, $wgSharedTables, $wgDBservers, $wgLBFactoryConf, $wgMasterWaitTimeout, $wgDBerrorLog, $wgDBerrorLogTZ, $wgDBClusterTimeout, $wgDBAvgStatusPoll, $wgDBmysql5, $wgLocalDatabases, $wgSlaveLagWarning, $wgSlaveLagCritical, $wgOldChangeTagsIndex, $wgCompressRevisions, $wgExternalStores, $wgExternalServers, $wgDefaultExternalStore, $wgRevisionCacheExpiry, $wgMiserMode, $wgDisableQueryPages, $wgQueryCacheLimit, $wgWantedPagesThreshold, $wgAllowSlowParserFunctions, $wgAllowSchemaUpdates, $wgUseDumbLinkUpdate, $wgAntiLockFlags, $wgMaxArticleSize, $wgMemoryLimit, $wgCacheDirectory, $wgMainCacheType, $wgMessageCacheType, $wgParserCacheType, $wgSessionCacheType, $wgLanguageConverterCacheType, $wgObjectCaches, $wgParserCacheExpireTime, $wgDBAhandler, $wgSessionsInMemcached, $wgSessionsInObjectCache, $wgObjectCacheSessionExpiry, $wgSessionHandler, $wgMemCachedDebug, $wgMemCachedServers, $wgMemCachedPersistent, $wgMemCachedTimeout, $wgUseLocalMessageCache, $wgLocalMessageCacheSerialized, $wgAdaptiveMessageCache, $wgLocalisationCacheConf, $wgCachePages, $wgCacheEpoch, $wgStyleVersion, $wgUseFileCache, $wgFileCacheDepth, $wgEnableParserCache, $wgRenderHashAppend, $wgEnableSidebarCache, $wgSidebarCacheExpiry, $wgUseGzip, $wgUseETag, $wgClockSkewFudge, $wgInvalidateCacheOnLocalSettingsChange, $wgUseSquid, $wgUseESI, $wgUseXVO, $wgVaryOnXFP, $wgInternalServer, $wgSquidMaxage, $wgForcedRawSMaxage, $wgSquidServers, $wgSquidServersNoPurge, $wgMaxSquidPurgeTitles, $wgHTCPMulticastRouting, $wgHTCPMulticastAddress, $wgHTCPPort, $wgHTCPMulticastTTL, $wgUsePrivateIPs, $wgLanguageCode, $wgGrammarForms, $wgInterwikiMagic, $wgHideInterlanguageLinks, $wgExtraLanguageNames, $wgDummyLanguageCodes, $wgEditEncoding, $wgFixArabicUnicode, $wgFixMalayalamUnicode, $wgAllUnicodeFixes, $wgLegacyEncoding, $wgBrowserBlackList, $wgLegacySchemaConversion, $wgUseDynamicDates, $wgAmericanDates, $wgTranslateNumerals, $wgUseDatabaseMessages, $wgMsgCacheExpiry, $wgMaxMsgCacheEntrySize, $wgDisableLangConversion, $wgDisableTitleConversion, $wgCanonicalLanguageLinks, $wgDefaultLanguageVariant, $wgDisabledVariants, $wgVariantArticlePath, $wgLoginLanguageSelector, $wgForceUIMsgAsContentMsg, $wgLocaltimezone, $wgLocalTZoffset, $wgBug34832TransitionalRollback, $wgMimeType, $wgJsMimeType, $wgDocType, $wgDTD, $wgXhtmlDefaultNamespace, $wgHtml5, $wgHtml5Version, $wgAllowRdfaAttributes, $wgAllowMicrodataAttributes, $wgWellFormedXml, $wgXhtmlNamespaces, $wgShowIPinHeader, $wgSiteNotice, $wgExtraSubtitle, $wgSiteSupportPage, $wgValidateAllHtml, $wgDefaultSkin, $wgSkipSkin, $wgSkipSkins, $wgHandheldStyle, $wgHandheldForIPhone, $wgAllowwiki_UserJs, $wgAllowwiki_UserCss, $wgAllowwiki_UserCssPrefs, $wgUseSiteJs, $wgUseSiteCss, $wgBreakFrames, $wgEditPageFrameOptions, $wgApiFrameOptions, $wgDisableOutputCompression, $wgExperimentalHtmlIds, $wgFooterIcons, $wgUseCombinedLoginLink, $wgVectorUseSimpleSearch, $wgVectorUseIconWatch, $wgEdititis, $wgBetterDirectionality, $wgSend404Code, $wgShowRollbackEditCount, $wgResourceModules, $wgResourceLoaderSources, $wgResourceBasePath, $wgResourceLoaderMaxage, $wgResourceLoaderDebug, $wgResourceLoaderUseESI, $wgResourceLoaderMinifierStatementsOnOwnLine, $wgResourceLoaderMinifierMaxLineLength, $wgIncludeLegacyJavaScript, $wgPreloadJavaScriptMwUtil, $wgLegacyJavaScriptGlobals, $wgResourceLoaderMaxQueryLength, $wgResourceLoaderValidateJS, $wgResourceLoaderValidateStaticJS, $wgResourceLoaderExperimentalAsyncLoading, $wgMetaNamespace, $wgMetaNamespaceTalk, $wgExtraNamespaces, $wgExtraGenderNamespaces, $wgNamespaceAliases, $wgLegalTitleChars, $wgLocalInterwiki, $wgInterwikiExpiry, $wgInterwikiCache, $wgInterwikiScopes, $wgInterwikiFallbackSite, $wgRedirectSources, $wgCapitalLinks, $wgCapitalLinkOverrides, $wgNamespacesWithSubpages, $wgContentNamespaces, $wgMaxRedirects, $wgInvalidRedirectTargets, $wgParserConf, $wgMaxTocLevel, $wgMaxPPNodeCount, $wgMaxGeneratedPPNodeCount, $wgMaxTemplateDepth, $wgMaxPPExpandDepth, $wgUrlProtocols, $wgCleanSignatures, $wgAllowExternalImages, $wgAllowExternalImagesFrom, $wgEnableImageWhitelist, $wgAllowImageTag, $wgUseTidy, $wgAlwaysUseTidy, $wgTidyBin, $wgTidyConf, $wgTidyOpts, $wgTidyInternal, $wgDebugTidy, $wgRawHtml, $wgExternalLinkTarget, $wgNoFollowLinks, $wgNoFollowNsExceptions, $wgNoFollowDomainExceptions, $wgAllowDisplayTitle, $wgRestrictDisplayTitle, $wgExpensiveParserFunctionLimit, $wgPreprocessorCacheThreshold, $wgEnableScaryTranscluding, $wgTranscludeCacheExpiry, $wgArticleCountMethod, $wgUseCommaCount, $wgHitcounterUpdateFreq, $wgActivewiki_UserDays, $wgPasswordSalt, $wgMinimalPasswordLength, $wgPasswordResetRoutes, $wgMaxSigChars, $wgMaxNameChars, $wgReservedwiki_Usernames, $wgDefaultwiki_UserOptions, $wgAllowRealName, $wgHiddenPrefs, $wgInvalidwiki_UsernameCharacters, $wgwiki_UserrightsInterwikiDelimiter, $wgExternalAuthType, $wgExternalAuthConf, $wgAutocreatePolicy, $wgAllowPrefChange, $wgSecureLogin, $wgAutoblockExpiry, $wgBlockAllowsUTEdit, $wgSysopEmailBans, $wgBlockCIDRLimit, $wgBlockDisablesLogin, $wgWhitelistRead, $wgEmailConfirmToEdit, $wgGroupPermissions, $wgRevokePermissions, $wgImplicitGroups, $wgGroupsAddToSelf, $wgGroupsRemoveFromSelf, $wgRestrictionTypes, $wgRestrictionLevels, $wgNamespaceProtection, $wgNonincludableNamespaces, $wgAutoConfirmAge, $wgAutoConfirmCount, $wgAutopromote, $wgAutopromoteOnce, $wgAutopromoteOnceLogInRC, $wgAddGroups, $wgRemoveGroups, $wgAvailableRights, $wgDeleteRevisionsLimit, $wgAccountCreationThrottle, $wgSpamRegex, $wgSummarySpamRegex, $wgEnableDnsBlacklist, $wgEnableSorbs, $wgDnsBlacklistUrls, $wgSorbsUrl, $wgProxyWhitelist, $wgRateLimits, $wgRateLimitLog, $wgRateLimitsExcludedIPs, $wgPutIPinRC, $wgQueryPageDefaultLimit, $wgPasswordAttemptThrottle, $wgBlockOpenProxies, $wgProxyPorts, $wgProxyScriptPath, $wgProxyMemcExpiry, $wgSecretKey, $wgProxyList, $wgProxyKey, $wgCookieExpiration, $wgCookieDomain, $wgCookiePath, $wgCookieSecure, $wgDisableCookieCheck, $wgCookiePrefix, $wgCookieHttpOnly, $wgHttpOnlyBlacklist, $wgCacheVaryCookies, $wgSessionName, $wgUseTeX, $wgDebugLogFile, $wgDebugLogPrefix, $wgDebugRedirects, $wgDebugRawPage, $wgDebugComments, $wgDebugDBTransactions, $wgDebugDumpSql, $wgDebugLogGroups, $wgShowDebug, $wgDebugTimestamps, $wgDebugPrintHttpHeaders, $wgSpecialVersionShowHooks, $wgShowSQLErrors, $wgShowExceptionDetails, $wgShowDBErrorBacktrace, $wgLogExceptionBacktrace, $wgShowHostnames, $wgOverrideHostname, $wgDevelopmentWarnings, $wgDeprecationReleaseLimit, $wgProfileLimit, $wgProfileOnly, $wgProfileToDatabase, $wgProfileCallTree, $wgProfilePerHost, $wgUDPProfilerHost, $wgUDPProfilerPort, $wgDebugProfiling, $wgDebugFunctionEntry, $wgStatsMethod, $wgAggregateStatsID, $wgDisableCounters, $wgSiteStatsAsyncFactor, $wgParserTestFiles, $wgParserTestRemote, $wgEnableJavaScriptTest, $wgJavaScriptTestConfig, $wgCachePrefix, $wgDebugToolbar, $wgDisableTextSearch, $wgAdvancedSearchHighlighting, $wgSearchHighlightBoundaries, $wgCountTotalSearchHits, $wgOpenSearchTemplate, $wgEnableOpenSearchSuggest, $wgSearchSuggestCacheExpiry, $wgDisableSearchUpdate, $wgNamespacesToBeSearchedDefault, $wgNamespacesToBeSearchedHelp, $wgSearchEverythingOnlyLoggedIn, $wgDisableInternalSearch, $wgSearchForwardUrl, $wgUseTwoButtonsSearchForm, $wgSitemapNamespaces, $wgSitemapNamespacesPriorities, $wgEnableSearchContributorsByIP, $wgDiff3, $wgDiff, $wgPreviewOnOpenNamespaces, $wgUseExternalEditor, $wgGoToEdit, $wgUniversalEditButton, $wgUseAutomaticEditSummaries, $wgCommandLineMode, $wgCommandLineDarkBg, $wgMaintenanceScripts, $wgReadOnly, $wgReadOnlyFile, $wgUpgradeKey, $wgGitRepositoryViewers, $wgRCMaxAge, $wgRCFilterByAge, $wgRCLinkLimits, $wgRCLinkDays, $wgRC2UDPAddress, $wgRC2UDPPort, $wgRC2UDPPrefix, $wgRC2UDPInterwikiPrefix, $wgRC2UDPOmitBots, $wgEnableNewpageswiki_UserFilter, $wgUseRCPatrol, $wgUseNPPatrol, $wgFeed, $wgFeedLimit, $wgFeedCacheTimeout, $wgFeedDiffCutoff, $wgOverrideSiteFeed, $wgFeedClasses, $wgAdvertisedFeedTypes, $wgRCShowWatchingwiki_Users, $wgPageShowWatchingwiki_Users, $wgRCShowChangedSize, $wgRCChangedSizeThreshold, $wgShowUpdatedMarker, $wgDisableAnonTalk, $wgAllowCategorizedRecentChanges, $wgUseTagFilter, $wgRightsPage, $wgRightsUrl, $wgRightsText, $wgRightsIcon, $wgLicenseTerms, $wgCopyrightIcon, $wgUseCopyrightUpload, $wgMaxCredits, $wgShowCreditsIfMax, $wgImportSources, $wgImportTargetNamespace, $wgExportAllowHistory, $wgExportMaxHistory, $wgExportAllowListContributors, $wgExportMaxLinkDepth, $wgExportFromNamespaces, $wgExportAllowAll, $wgExtensionFunctions, $wgExtensionMessagesFiles, $wgParserOutputHooks, $wgValidSkinNames, $wgSpecialPages, $wgExtensionCredits, $wgAuth, $wgHooks, $wgJobClasses, $wgJobTypesExcludedFromDefaultQueue, $wgSpecialPageCacheUpdates, $wgExceptionHooks, $wgPagePropLinkInvalidations, $wgUseCategoryBrowser, $wgCategoryMagicGallery, $wgCategoryPagingLimit, $wgCategoryCollation, $wgLogTypes, $wgLogRestrictions, $wgFilterLogTypes, $wgLogNames, $wgLogHeaders, $wgLogActions, $wgLogActionsHandlers, $wgNewwiki_UserLog, $wgAllowSpecialInclusion, $wgDisableQueryPageUpdate, $wgSpecialPageGroups, $wgSortSpecialPages, $wgCountCategorizedImagesAsUsed, $wgMaxRedirectLinksRetrieved, $wgActions, $wgDisabledActions, $wgDefaultRobotPolicy, $wgNamespaceRobotPolicies, $wgArticleRobotPolicies, $wgExemptFromwiki_UserRobotsControl, $wgEnableAPI, $wgEnableWriteAPI, $wgAPIModules, $wgAPIMetaModules, $wgAPIPropModules, $wgAPIListModules, $wgAPIMaxDBRows, $wgAPIMaxResultSize, $wgAPIMaxUncachedDiffs, $wgAPIRequestLog, $wgAPICacheHelpTimeout, $wgUseAjax, $wgAjaxExportList, $wgAjaxWatch, $wgAjaxUploadDestCheck, $wgAjaxLicensePreview, $wgCrossSiteAJAXdomains, $wgCrossSiteAJAXdomainExceptions, $wgMaxShellMemory, $wgMaxShellFileSize, $wgMaxShellTime, $wgPhpCli, $wgShellLocale, $wgHTTPTimeout, $wgAsyncHTTPTimeout, $wgHTTPProxy, $wgJobRunRate, $wgUpdateRowsPerJob, $wgUpdateRowsPerQuery, $wgHipHopBuildDirectory, $wgHipHopBuildType, $wgHipHopCompilerProcs, $wgExtensionsDirectory, $wgCompiledFiles, $wgDeviceDetectionClass, $wgExternalDiffEngine, $wgDisableHardRedirects, $wgLinkHolderBatchSize, $wgRegisterInternalExternals, $wgMaximumMovedPages, $wgFixDoubleRedirects, $wgRedirectOnLogin, $wgPoolCounterConf, $wgUploadMaintenance, $wgEnableSelenium, $wgSeleniumTestConfigs, $wgSeleniumConfigFile, $wgDBtestuser, $wgDBtestpassword, $wgRequirePasswordforEmailChange, $wgAuth_Config, $wgRealnamesLinkStyle, $wgRealnamesBareStyle, $wgRealnamesBlank, $wgRealnamesReplacements, $wgRealnamesStyles, $wgRealnamesSmart, $wgRealnamesNamespaces, $wgCategoryTreeMaxChildren, $wgCategoryTreeAllowTag, $wgCategoryTreeDisableCache, $wgCategoryTreeDynamicTag, $wgCategoryTreeHTTPCache, $wgCategoryTreeMaxDepth, $wgCategoryTreeForceHeaders, $wgCategoryTreeSidebarRoot, $wgCategoryTreeHijackPageCategories, $wgCategoryTreeUseCategoryTable, $wgCategoryTreeOmitNamespace, $wgCategoryTreeDefaultMode, $wgCategoryTreeDefaultOptions, $wgCategoryTreeCategoryPageMode, $wgCategoryTreeCategoryPageOptions, $wgCategoryTreeSpecialPageOptions, $wgCategoryTreeSidebarOptions, $wgCategoryTreePageCategoryOptions, $wgUseEnotif, $wgCanonicalNamespaceNames, $wgContLanguageCode, $wgRequest, $wgMemc, $wgLangConvMemc, $wgSessionStarted, $wgLanguageNames, $wgContLang, $wgwiki_User, $wgLang, $wgOut, $wgParser, $wgTitle, $wgDeferredUpdateList, $wgFullyInitialised, $wgArticle;
	$wgCanonicalNamespaceNames = array();
	$haclgIP = "../w/";
	$IP = "../w/";
	if(!defined('MEDIAWIKI'))
		define('MEDIAWIKI', true);	
	set_include_path(get_include_path() . PATH_SEPARATOR . "/var/www/html/w" . PATH_SEPARATOR . "/var/www/html/phpBB");
	/*require_once("includes/AutoLoader.php");
	require_once("includes/Defines.php");
	require_once("includes/DefaultSettings.php");*/
    	if ( isset( $_SERVER['MW_COMPILED'] ) ) {
       		require_once ( 'core/includes/WebStart.php' );
		require_once ( 'core/includes/GlobalFunctions.php' );
	} else {
	        require_once ( 'includes/WebStart.php' );
		require_once ( 'includes/GlobalFunctions.php' );
	}
	$wgMemc = wfGetMainCache();
	$wgRequest = new WebRequest;
	$wgContLang = Language::factory( $wgLanguageCode );
	$wgContLang->initEncoding();
	$wgContLang->initContLang();
	$user = wiki_User::newFromSession();
   	if ( !$user->isAnon() ) {
    		$user->doLogout(); // Logout mismatched user.
   	}	
    	// If the login form returns NEED_TOKEN try once more with the right token
	$trycount = 0;
   	 $token = '';
    	$errormessage = '';
    	do {
    		$tryagain = false;
        	// Submit a fake login form to authenticate the user.
        	$params = new FauxRequest( array(
        	'wpName' => $_POST["naa_loginname"],
        	'wpPassword' => $_POST["naa_password"],
		'wpDomain' => '',
            	'wpLoginToken' => $token,
            	'wpRemember' => ''
        ) );
        // Authenticate user data will automatically create new users.
        $loginForm = new LoginForm( $params );
        $result = $loginForm->authenticateUserData();
        $session = RequestContext::getMain();
        $wgwiki_User = $session->getUser();
        switch ( $result ) {
            case LoginForm :: SUCCESS :
            	$wgwiki_User->setOption( 'rememberpassword', 1 );
                $wgwiki_User->setCookies();
                break;
            case LoginForm :: NEED_TOKEN:
                $token = $loginForm->getLoginToken();
                $tryagain = ( $trycount == 0 );
               break;
            case LoginForm :: WRONG_TOKEN:
                $errormessage = 'WrongToken';
                break;
            case LoginForm :: NO_NAME :
                $errormessage = 'NoName';
                break;
            case LoginForm :: ILLEGAL :
                $errormessage = 'Illegal';
                break;
            case LoginForm :: WRONG_PLUGIN_PASS :
                $errormessage = 'WrongPluginPass';
                break;
            case LoginForm :: NOT_EXISTS :
                $errormessage = 'NotExists';
                break;
            case LoginForm :: WRONG_PASS :
                $errormessage = 'WrongPass';
                break;
            case LoginForm :: EMPTY_PASS :
                $errormessage = 'EmptyPass';
                break;
            default:
                $errormessage = 'Unknown';
                break;
        }
		if ( $result != LoginForm::SUCCESS && $result != LoginForm::NEED_TOKEN ) {
        	error_log( 'Unexpected REMOTE_USER authentication failure. Login Error was:' . $errormessage );
			$tryagain = false;
   		}
       	$trycount++;
   } while ( $tryagain );
   var_dump($result);var_dump($errormessage);exit();
   $cookieToken = $wgwiki_User->mToken;
   $cookieUserID = $wgwiki_User->mId;
   $cookieUserName = $wgwiki_User->mName;
        chdir($old_cwd);
?>
