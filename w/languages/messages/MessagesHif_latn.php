<?php
/** Fiji Hindi (Latin script) (Fiji Hindi)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Abdul Kadir
 * @author AndySingh
 * @author Bihari
 * @author Brijlal
 * @author Girmitya
 * @author Kaganer
 * @author Malafaya
 * @author Thakurji
 */

$namespaceNames = array(
	NS_MEDIA            => 'saadhan',
	NS_SPECIAL          => 'khaas',
	NS_TALK             => 'baat',
	NS_USER             => 'sadasya',
	NS_USER_TALK        => 'sadasya_ke_baat',
	NS_PROJECT_TALK     => '$1_baat',
	NS_FILE             => 'file',
	NS_FILE_TALK        => 'file_ke_baat',
	NS_MEDIAWIKI_TALK   => 'Mediawiki_ke_baat',
	NS_TEMPLATE_TALK    => 'Template_ke_baat',
	NS_HELP             => 'madat',
	NS_HELP_TALK        => 'madat_ke_baat',
	NS_CATEGORY         => 'vibhag',
	NS_CATEGORY_TALK    => 'voibhag_ke_baat',
);

$messages = array(
# wiki_user preference toggles
'tog-underline' => 'Jorr ke niche line khicho:',
'tog-justify' => 'Paragraphs ke justify karo',
'tog-hideminor' => 'Chhota aur nawaa badlao ke lukao',
'tog-hidepatrolled' => 'Pahraa dewa gais badlao ke nawaa badlao me se lukao',
'tog-newpageshidepatrolled' => 'Pahraa dewa gais badlao ke nawaa panna me se lukao',
'tog-extendwatchlist' => 'Dhyaan suchi ke khol ke sab badlao ke dekhao, khaali nawaa waala nai',
'tog-usenewrc' => 'Dher jan se badla gais panna, haali ke badlao aur dhyan suchi me (Javascript maange hae)',
'tog-numberheadings' => 'Sab heading ke apne se number karo',
'tog-showtoolbar' => 'Badle waala aujaar ke toolbar ke dekhao (JavaScript ke jarurat hai)',
'tog-editondblclick' => 'Dugnaa click pe panna ke badlo (JavaScript ke jarurat hai)',
'tog-editsection' => '[Badlao] ke jorr se section ke badlao se enable karo',
'tog-editsectiononrightclick' => 'Bhaag ke title pe right click kare pe bhaag ke badle ke laabu karo  (JavaScript)',
'tog-showtoc' => 'Dhyan suchi dekhao (uu panna khatir jon me tiin se jaada heading hai)',
'tog-rememberpassword' => 'Ii browser me (jaada se jaada $1 {{PLURAL:$1|din|din}}) talak hamaar login ke yaad rakho.',
'tog-watchcreations' => 'Hamaar banawa waala panna aur upload karaa gais file ke hamaar dhyaan suchi me jorro',
'tog-watchdefault' => 'Ham se badla gais panna aur file ke hamaar dhyaan suchi me jorro',
'tog-watchmoves' => 'Uu panna aur file jiske naam ham badla hai ke hamaar dhyaan suchi me jorro',
'tog-watchdeletion' => 'Uu panna, aur file jiske ham mitaya hai ke hamaar dhyaan suchi me jorro',
'tog-minordefault' => 'Mamuli badlao ke apne se nishaan lagao',
'tog-previewontop' => 'Badlao waala dabba se pahile ek jhalak dekhao',
'tog-previewonfirst' => 'Hamaar pahila badlao pe jhalak dekhao',
'tog-nocache' => 'Browser pe panna ke bachae me rok lagao',
'tog-enotifwatchlistpages' => 'Jab hamaar dhyaan suchi ke koi panna, nai to file, ke badla jae tab hame E-mail karo',
'tog-enotifwiki_usertalkpages' => 'Jab hamaar baat waala panna ke badla jae tab hame E-mail karo',
'tog-enotifminoredits' => 'Panna aur file me mamuli badlao khatir bhi hame E-mail karo',
'tog-enotifrevealaddr' => 'Notification E-mail me hamaar E-mail address ke dekhao.',
'tog-shownumberswatching' => 'Ketna sadasya dekhe hai ke number dekhao',
'tog-oldsig' => 'Abhi ke signature:',
'tog-fancysig' => 'Signature ke wikitext ke rakam dekho (binaa automatic jorr se)',
'tog-externaleditor' => 'Apne se bahaari editor ke kaam me lao (khaali chalaak logan khatir, computer me special settings ke jaruri hai. [//www.mediawiki.org/wiki/Manual:External_editors More information.])',
'tog-externaldiff' => ' Apne se bahaari editor ke kaam me lao (khaali chalaak logan khatir, computer me special settings ke jaruri hai. [//www.mediawiki.org/wiki/Manual:External_editors More information.])',
'tog-showjumplinks' => '"jump to" accessibility jorr ke laabu karo',
'tog-uselivepreview' => 'Jinda jhalak ke kaam me lao (JavaScript) (Experimental)',
'tog-forceeditsummary' => 'Ek khali badlao waala summary ke likhe ke time hamse puchho',
'tog-watchlisthideown' => 'Hamaar badlao ke hamaar dhyaan suchi se lukao',
'tog-watchlisthidebots' => 'Bot waala badlao ke hamaar dhyaan suchi se lukao',
'tog-watchlisthideminor' => 'Mamuli badlao ke hamaar dhyaan suchi se lukao',
'tog-watchlisthideliu' => 'Logged in sadasya ke badlao ke dhyan suchi se lukao',
'tog-watchlisthideanons' => 'Bina naam ke sadasya ke badlao ke dhyan suchi se lukao',
'tog-watchlisthidepatrolled' => 'Pahraa dewa gais badlao ke dhyan suchi me se lukao',
'tog-ccmeonemails' => 'Jon e-mail ham duusra sadasya ke lage bhejtaa hai uske copy hamaar lage bhi bhejo',
'tog-diffonly' => 'Diff ke niche panna ke content ke nai dekhao',
'tog-showhiddencats' => 'Lukawal waala vibhag ke dekhao',
'tog-norollbackdiff' => 'Rollback kare ke baad diff ke mitae do',

'underline-always' => 'Sab time',
'underline-never' => 'Kabhi nai',
'underline-default' => 'Skin nai to browser ke default',

# Font style option in Special:Preferences
'editfont-style' => 'Badlao waala jagah ke font:',
'editfont-default' => 'Browser ke sadharan setting',
'editfont-monospace' => 'Font jiske sab akcchar ke ekke chaurrai hae',
'editfont-sansserif' => 'Sans-serif font',
'editfont-serif' => 'Serif font',

# Dates
'sunday' => 'Etwaar',
'monday' => 'Sombaar',
'tuesday' => 'Mangar',
'wednesday' => 'Budh',
'thursday' => 'Bif',
'friday' => 'Suk',
'saturday' => 'Sanichar',
'sun' => 'Sun',
'mon' => 'Mon',
'tue' => 'Tue',
'wed' => 'Wed',
'thu' => 'Thu',
'fri' => 'Fri',
'sat' => 'Sat',
'january' => 'January',
'february' => 'February',
'march' => 'March',
'april' => 'April',
'may_long' => 'May',
'june' => 'June',
'july' => 'July',
'august' => 'August',
'september' => 'September',
'october' => 'October',
'november' => 'November',
'december' => 'December',
'january-gen' => 'January',
'february-gen' => 'February',
'march-gen' => 'March',
'april-gen' => 'April',
'may-gen' => 'May',
'june-gen' => 'June',
'july-gen' => 'July',
'august-gen' => 'August',
'september-gen' => 'September',
'october-gen' => 'October',
'november-gen' => 'November',
'december-gen' => 'December',
'jan' => 'Jan',
'feb' => 'Feb',
'mar' => 'Mar',
'apr' => 'Apr',
'may' => 'May',
'jun' => 'Jun',
'jul' => 'Jul',
'aug' => 'Aug',
'sep' => 'Sep',
'oct' => 'Oct',
'nov' => 'Nov',
'dec' => 'Dec',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|Vibhag|Vibhag}}',
'category_header' => '"$1" vibhag ke panna',
'subcategories' => 'Vibhag ke bhitar vibhag',
'category-media-header' => 'Vibhag "$1" me media',
'category-empty' => "''Ii vibhag me koi panna yah media nai hai.''",
'hidden-categories' => '{{PLURAL:$1|Lukawal vibhag|Lukawal vibhag}}',
'hidden-category-category' => 'Lukawal vibhag',
'category-subcat-count' => '{{PLURAL:$2|Ii vibhag me khali etna chhota vibhag hai.|Ii vibhag me etna {{PLURAL:$1|chhota vibhag|$1 chhota vibhag}}, kul jorr $2 me se.}}',
'category-subcat-count-limited' => 'Ii vibhag me etna {{PLURAL:$1|chhota vibhag|$1 chhota vibhag}} hai.',
'category-article-count' => '{{PLURAL:$2|Ii vibhag me khali etna panna hai.|Kul jorr $2 me se etna {{PLURAL:$1|panna|$1 panna}} ii vibhag me hai.}}',
'category-article-count-limited' => 'Etna {{PLURAL:$1|panna|$1 panna}} ii vibhag me hai.',
'category-file-count' => '{{PLURAL:$2|Ii vibhag me khali etna file hai.|Kul jorr $2 me se ii vibhag me etna {{PLURAL:$1|file hai|$1 files hai}}.}}',
'category-file-count-limited' => 'Ii vibhag me etna {{PLURAL:$1|file hai|$1 files hai}}.',
'listingcontinuesabbrev' => 'aur',
'index-category' => 'Indexed panna',
'noindex-category' => 'Bina index karaa gais panna',
'broken-file-category' => 'Panna jisme tuuta file ke jorr hae',

'about' => 'Baare me',
'article' => 'Content waala panna',
'newwindow' => '(Nawaa window me khule hai)',
'cancel' => 'Nai karo',
'moredotdotdot' => 'Aur...',
'mypage' => 'Panna',
'mytalk' => 'Baat',
'anontalk' => 'Ii IP khatir bichar',
'navigation' => 'Navigation',
'and' => '&#32;aur',

# Cologne Blue skin
'qbfind' => 'Khojo',
'qbbrowse' => 'Browse karo',
'qbedit' => 'Badlo',
'qbpageoptions' => 'Ii panna',
'qbpageinfo' => 'Vishay',
'qbmyoptions' => 'Hamar panna',
'qbspecialpages' => 'Khaas panna',
'faq' => 'Sab time puchhe waala sawal',
'faqpage' => 'Project:Sab time puchhe waala sawal',

# Vector skin
'vector-action-addsection' => 'Topic jorro',
'vector-action-delete' => 'Mitao',
'vector-action-move' => 'Naam badlo',
'vector-action-protect' => 'Bachao',
'vector-action-undelete' => 'Pahile jaise karo',
'vector-action-unprotect' => 'Surakchha ke badlo',
'vector-simplesearch-preference' => 'Aur achchhaa se khoje ke salah do (Khaali vector skin)',
'vector-view-create' => 'Banao',
'vector-view-edit' => 'Badlo',
'vector-view-history' => 'Itihaas dekho',
'vector-view-view' => 'Parrho',
'vector-view-viewsource' => 'Source dekho',
'actions' => 'Karam',
'namespaces' => 'Naam',
'variants' => 'Antar',

'errorpagetitle' => 'Galti',
'returnto' => '$1 pe lauto.',
'tagline' => '{{SITENAME}} se',
'help' => 'Madat karo',
'search' => 'Khojo',
'searchbutton' => 'Khojo',
'go' => 'Jao',
'searcharticle' => 'Jaao',
'history' => 'Panna ke itihaas',
'history_short' => 'Itihaas',
'updatedmarker' => 'hamaar pahile waala visit ke baad badla gais hai',
'printableversion' => 'Chhape ke khaatir',
'permalink' => 'Pakka jorr',
'print' => 'Print karo',
'view' => 'Dekho',
'edit' => 'Badlo',
'create' => 'Banao',
'editthispage' => 'Ii panna ke badlo',
'create-this-page' => 'Ii panna ke banao',
'delete' => 'Mitao',
'deletethispage' => 'Ii panna ke mitao',
'undelete_short' => '{{PLURAL:$1|ek badlao|$1 badlao}} ke pahile jaise karo',
'viewdeleted_short' => 'Dekho {{PLURAL:$1|ek mitawal badlao|$1 mitawal badlao}}',
'protect' => 'Bachao',
'protect_change' => 'badlo',
'protectthispage' => 'Ii panna ke bacaho',
'unprotect' => 'Nai bachao',
'unprotectthispage' => 'Ii panna ke surakchha ke badlo',
'newpage' => 'Nawaa panna',
'talkpage' => 'Ii panna ke baare me salah karo',
'talkpagelinktext' => 'Baat',
'specialpage' => 'Khaas Panna',
'personaltools' => 'Aapan aujaar',
'postcomment' => 'Nawaa section',
'articlepage' => 'Content waala panna ke dekho',
'talk' => 'Salah',
'views' => 'Bichar',
'toolbox' => 'Aujaar ke dabba',
'wiki_userpage' => 'Sadasya ke panna dekho',
'projectpage' => 'Project waala panna dekho',
'imagepage' => 'File panna ke dekho',
'mediawikipage' => 'Sandes waala panna dekho',
'templatepage' => 'Template waala panna dekho',
'viewhelppage' => 'Madat waala panna dekho',
'categorypage' => 'Vibhag waala panna dekho',
'viewtalkpage' => 'Salah dekho',
'otherlanguages' => 'Duusra bhasa me',
'redirectedfrom' => '($1 se bheja gais)',
'redirectpagesub' => 'Panna ke redirect karo',
'lastmodifiedat' => 'Ii panna ke $1, ke $2 pichhla time badla gais rahaa.',
'viewcount' => 'Ii panna ke {{PLURAL:$1|ek dafe|$1 dafe}} dekha gais hai.',
'protectedpage' => 'Bachawal panna',
'jumpto' => 'Hian jaao:',
'jumptonavigation' => 'navigation',
'jumptosearch' => 'khojo',
'view-pool-error' => 'Maaf karna, abhi sab server busy hae.
Bahut dher sadasya ii panna ke dekhe maange hae.
Meharbani kar ke, thora deri sabur kar ke ii panna ke fir se kholo.

$1',
'pool-timeout' => 'Lock ke wait kare waala time khalaas hoe gais hae',
'pool-queuefull' => 'Pool ke line bhar gais hae',
'pool-errorunknown' => 'Pata nahi kaisan galti hae',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of wiki_user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}} ke baare me',
'aboutpage' => 'Project:Ke baare me',
'copyright' => 'Ii panna me likha gae chij ke aap $1 ke niche kaam me lae sakta hai.',
'copyrightpage' => '{{ns:project}}:Chhaape ke adhikaar',
'currentevents' => 'Abhi ke ghatna',
'currentevents-url' => 'Project:Abhi ke ghatna',
'disclaimers' => 'Jimmewari se chhutkaari',
'disclaimerpage' => 'Project:Saadharan jimmewari nai lo',
'edithelp' => 'Badlao pe madat',
'edithelppage' => 'Help:Badle me',
'helppage' => 'Help:Madat',
'mainpage' => 'Pahila Panna',
'mainpage-description' => 'Pahila Panna',
'policy-url' => 'Project:Niti',
'portal' => 'Samaj portal',
'portal-url' => 'Project:Samaj Portal',
'privacy' => 'Gupt niti',
'privacypage' => 'Project:Gupt niti',

'badaccess' => 'Anumati nai hai',
'badaccess-group0' => 'Aap jon chij kare mangta uske ijajat aap ke nai hai.',
'badaccess-groups' => 'Aap jon chij kare mangtaa hai uske khali ii group $1 {{PLURAL:$2|the group|one of the groups}} ke ek sadasya kare sake hai.',

'versionrequired' => 'MediaWiki ke $1 version ke jaruri hai',
'versionrequiredtext' => 'Ii panna use kare ke khatir MediaWiki ke Version $1 ke jaruri hai. [[Special:Version|version page]] ke dekho.',

'ok' => 'OK',
'retrievedfrom' => '"$1" se lawa gais hae',
'youhavenewmessages' => 'Aapke pass hai $1 ($2).',
'newmessageslink' => 'nawaa khabar',
'newmessagesdifflink' => 'pahile waala badlao',
'youhavenewmessagesfromwiki_users' => 'Aap ke lage {{PLURAL:$3|duusra sadasya|$3 sadasya}} ke lage se $1 hae ($2).',
'youhavenewmessagesmanywiki_users' => 'Aap ke lage dher sadasya se $1 hae ($2).',
'newmessageslinkplural' => '{{PLURAL:$1|ek nawaa sandes|nawaa sandes}}',
'newmessagesdifflinkplural' => 'pichhla {{PLURAL:$1|badlao}}',
'youhavenewmessagesmulti' => 'Aap ke khatir $1 pe sandes hai',
'editsection' => 'badlo',
'editold' => 'badlao',
'viewsourceold' => 'source dekho',
'editlink' => 'badlo',
'viewsourcelink' => 'source dekho',
'editsectionhint' => 'Vibhag badlo: $1',
'toc' => 'vishay suchi',
'showtoc' => 'dekhao',
'hidetoc' => 'chupao',
'collapsible-collapse' => 'Chhota karo',
'collapsible-expand' => 'Barraa karo',
'thisisdeleted' => 'Dekho ki $1 ke pahile jaise karo?',
'viewdeleted' => '$1 ke dekho?',
'restorelink' => '{{PLURAL:$1|ek mitawal badlao|$1 mitawal badlao}}',
'feedlinks' => 'Feed:',
'feed-invalid' => 'Khraab rakam ke subscription feed.',
'feed-unavailable' => 'Syndication feeds abhi aap nai use kare sakta hai.',
'site-rss-feed' => '$1 RSS Feed',
'site-atom-feed' => '$1 Atom Feed',
'page-rss-feed' => '"$1" RSS Feed',
'page-atom-feed' => '"$1" Atom Feed',
'red-link-title' => '$1 (panna abhi likha nai gais hai)',
'sort-descending' => 'Barraa se chhota karo',
'sort-ascending' => 'Chhota se barraa karo',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'Panna',
'nstab-wiki_user' => 'Sadasya ke panna',
'nstab-media' => 'Media waala panna',
'nstab-special' => 'Khaas panna',
'nstab-project' => 'Project panna',
'nstab-image' => 'File',
'nstab-mediawiki' => 'Sandes',
'nstab-template' => 'Template',
'nstab-help' => 'Madat waala panna',
'nstab-category' => 'Vibhag',

# Main script and global functions
'nosuchaction' => 'Koi aisan kaam nai hai',
'nosuchactiontext' => 'Jon kaam ke URL kare ke batais hai uske ii wiki nai pahachane hai
Saait aap URL ke thiik se type nai karaa hai, nai to galat jorr ke follow karaa hai.
Ii saait ii kaaran se bhi hoe ki  jon software {{SITENAME}} use kare hai, me bug hai',
'nosuchspecialpage' => 'Aisan koi khaas panna nai hai',
'nospecialpagetext' => '<strong>Aap ek galat ghaas panna ke maanga hai.</strong>

Sahi khaas panna ke suchi [[Special:SpecialPages|{{int:specialpages}}]]pe mili.',

# General errors
'error' => 'Galti',
'databaseerror' => 'Database me galti hai',
'dberrortext' => 'Database ke khoj me syntax error hoe gais hae.
Iske matlab ii hoe sake hae ki saait software me bug hoi.
Pahile waala database ke khoj ke kosis rahaa:
<blockquote><code>$1</code></blockquote>
"<code>$2</code>" function ke bhitar se.
Database ke galti sandes rahaa "<samp>$3: $4</samp>".',
'dberrortextcl' => 'Database ke khoj me syntax error hoe gais hae.
Pahile waala database ke khoj ke kosis rahaa:
"$1"
"$2" function ke bhitar se.
Database ke galti sandes rahaa "$3: $4"',
'laggedslavemode' => 'Chetawni: Panna me nawaa badlao sait nai hoi.',
'readonly' => 'Database band hai',
'enterlockreason' => 'Band kare ke kaaran likho, aur ii bhi likho ki kab khola jaai.',
'readonlytext' => 'Database abhi nawaa badlao khatir band hai, saait database me mamuli kaam khatir lekin iske baad fir pahile jaise chale lagi.

Jon administrator database ke band karis rahaa, ii kaaran diis hai: $1',
'missing-article' => 'Database, panna me likha akchhar, jiske naam "$1" hai, ke nai pais $2 .

Iske kaaran ii hoe sake ki aap ek purana antar nai to itihaas waala jorr ke use karaa jiske mitae dewa gais hai.

Agar ii chij nai hai to sait aap ke software me bug hoi.
Iske, URL ke likh ke, koi administrator ke report karo.',
'missingarticle-rev' => '(badlao#: $1)',
'missingarticle-diff' => '(Antar: $1, $2)',
'readonly_lag' => 'Database apne se band hoi gais hai jab tak ki duusra database, khaas database ke sanghe kaam nai kare lage.',
'internalerror' => 'Bhitri galti',
'internalerror_info' => 'Bhitri galti: $1',
'fileappenderrorread' => 'Jorre ke time $1 ke nai parrhe sakaa hae.',
'fileappenderror' => '"$1" ke "$2" se nai jorre sakaa hae.',
'filecopyerror' => 'File "$1" ke "$2" pe copy nai kare sakaa.',
'filerenameerror' => 'File "$1" ke naam badal ke "$2" nai kare sakaa.',
'filedeleteerror' => 'File "$1" ke nai mitae sakaa.',
'directorycreateerror' => 'Directory "$1" ke nai banae sakaa.',
'filenotfound' => 'File "$1" ke nai pae sakaa.',
'fileexistserror' => 'File "$1" me nai likhe sakaa: file hai',
'unexpected' => 'Aasa karaa gais jaankari nai hai: "$1"="$2".',
'formerror' => 'Galti: form ke submit nai kare sakaa',
'badarticleerror' => 'Ii chij ke ii panna me nai karaa jae sake hai.',
'cannotdelete' => '{{PLURAL:$1|Template|Template}} ke ii jhalak me kaam me lawa gais hae:',
'cannotdelete-title' => 'Panna "$1" ke mitae nai saktaa hae',
'delete-hook-aborted' => 'Mitae ke kisis ke hook rok diis hae.
Uu koi kaaran nai dis hae.',
'badtitle' => 'Kharaab title',
'badtitletext' => 'Jon panna aap mangta hai uske page title invalid, galat, nai to an incorrectly linked inter-language or inter-wiki title. Isme sait ek yah jaada character hoi jon ki title me nai kaam me lawa jae sake hai.',
'perfcached' => 'Niche likha data ke cache karaa gais hai aur sait purana hoi. Jaada se jaada {{PLURAL:$1|ek result |$1 results}} cache me hae.',
'perfcachedts' => 'Niche likha data ke cache kar dewa gais rahaa, aur pichhle time $1 ke badlaa gais rahaa. Jaada se jaada {{PLURAL:$4|ek result |$4 results}} cache me hae.',
'querypage-no-updates' => 'Ii panna me badlao abhi band hai. Data ke abhi nawaa nai karaa jaai.',
'wrong_wfQuery_params' => 'Galat parameters to wfQuery()<br />
Function: $1<br />
Query: $2',
'viewsource' => 'Source dekho',
'viewsource-title' => '"$1" ke source dekho',
'actionthrottled' => 'Kaam ke band kar dewa gais hai',
'actionthrottledtext' => 'Spam ke virod me, aap ke ii kaam thora deri me bahut time kare ke rukawat hai, aur aap time limit ke exceed kar diya hai.
Kuch deri be baad fir se kosis karna.',
'protectedpagetext' => 'Ii panna ke badlao ke rok dewa gais hae, jisse ki ispe koi badlao aur koi action nai kare sake.',
'viewsourcetext' => 'Aap ii panna ke source ke dekhe aur nakal utare kare sakta hai:',
'viewyourtext' => "Aap '''aapan badlao''' ke source ke dekhe aur copy kare saktaa hae",
'protectedinterface' => 'Ii panna, ii wiki ke khatir, software ke interface text dewe hai, aur iske barbaadi se roke ke khatir band kar dewa gais hai.
Sab wiki me anuwaad ke jorre nai to badle ke khatir, meharbaani kar ke [//translatewiki.net/ translatewiki.net], the MediaWiki localisation project ke kaam me laao.',
'editinginterface' => "'''Chetawani:''' Aap ek panna ke badaltaa hai jon ki software ke interface text dewe hae.
Ii panna me badlao ke asar duusra sadasya ke interface pe bhi hoi.
Translation khatir [//translatewiki.net/ translatewiki.net], the MediaWiki localisation project, ke kaam me lao.",
'sqlhidden' => '(SQL query lukawal hai)',
'cascadeprotected' => 'Ii panna ke badlao se bachawa gais hai, kahe ki iske {{PLURAL:$1|panna, jon ki|panna, jon ki}} surakchhit hae "cascading" option turned on ke saathe me rakkhaa gais hai:
$2',
'namespaceprotected' => "Aap ke paas '''$1''' namespace me panna ke badle ke adhikar nai hai.",
'customcssprotected' => 'Aap ke ii CSS panna ke badle ke ijaajat nai hae, kaahe ki isme duusra sadasya ke personal settings hae.',
'customjsprotected' => 'Aap ke ii JavaScript panna ke badle ke ijaajat nai hae, kaahe ki isme duusra sadasya ke personal settings hae.',
'ns-specialprotected' => 'Khaas panna ke badla nai jae sake hai.',
'titleprotected' => "Ii title ke banae se [[wiki_user:$1|$1]] rokis hai.
Iske kaaran hai ''$2''.",
'filereadonlyerror' => 'File "$1" ke nai badle sakaa hae, kaahe ki ii file repository "$2" me hae aur iske khaali parrha jaae sake hae.
Jon administrator iske lock karis hae, koi kaaran nai diis hae: "$3"',
'invalidtitle-knownnamespace' => 'Namespace "$2" aur text "$3" ke kharaab title hae.',
'invalidtitle-unknownnamespace' => 'Title gaer kaanuni hae aur iske namespace number "$1" aur text "$2" ke nai jaana jaawe hae',
'exception-nologin' => 'Logged in nai hae',
'exception-nologin-text' => 'Ii panna nai to aap ke action ke khatir ii wiki me login hoe ke jarurui hae',

# Virus scanner
'virus-badscanner' => "Kharaab ruup dewa gais hae: virus khoje waala software nawaa hae: ''$1''",
'virus-scanfailed' => 'scan fail hoe gais (code $1)',
'virus-unknownscanner' => 'jaana waala antivirus nai hai:',

# Login and logout pages
'logouttext' => "'''Aap abhi logged out hai.'''

Aap bina naam ke {{SITENAME}} ke kaam me lae sakta hai, nai to aap wahi sadasya ke naam se nai to duusra sadasya ke naam se [[Special:wiki_userLogin|log in kare sakta hai]].
Yaad rakhna ki kuch panna wahi rakam se dekhai jaise ki aap log in bhaya hai, jab tak ki browser ke cache safaa nai hoe jaae.",
'welcomecreation' => '== Swagat, $1! ==
Aap ke account banae dewa gais hai.
Aapan [[Special:Preferences|{{SITENAME}} pasand]]  ke badle nai bhulna.',
'yourname' => 'wiki_username:',
'yourpassword' => 'Password:',
'yourpasswordagain' => 'Password fir se type karo:',
'remembermypassword' => 'Ii computer pe hamaar login yaad rakho (jaada se jaada $1 {{PLURAL:$1|din|din}} talak)',
'securelogin-stick-https' => 'Login kare ke baad HTTPS se connected raho',
'yourdomainname' => 'Aap ke domain:',
'password-change-forbidden' => 'Aap ii wiki me password nai badle saktaa hae.',
'externaldberror' => 'Koi bahaari database authentication error hai, nai to aap ke bahaari account badle ke adhikar nai hai.',
'login' => 'Log in karo',
'nav-login-createaccount' => 'Log in karo/ nawaa account banao',
'loginprompt' => 'Login kare ke khatir  {{SITENAME}} cookies ke laabu kare ke chaahi.',
'wiki_userlogin' => 'Log in karo/ nawaa account banao',
'wiki_userloginnocreate' => 'Log in karo',
'logout' => 'Log out',
'wiki_userlogout' => 'Sadasya logout',
'notloggedin' => 'Aap logged in nai hai',
'nologin' => "Account nai hai? '''$1'''.",
'nologinlink' => 'Nawaa account banao',
'createaccount' => 'Nawaa account banao',
'gotaccount' => "Aap ke pas pahile se account hai ki nai? '''$1'''.",
'gotaccountlink' => 'Log in',
'wiki_userlogin-resetlink' => 'Ka aap aapan login kare waala jaankari ke bhulae gaya hae?',
'createaccountmail' => 'e-mail se',
'createaccountreason' => 'Kaaran:',
'badretype' => 'Jon duuno password aap likha hai uu ek rakam nai hae.',
'wiki_userexists' => 'Ii sadasya ke naam aur koi ke hae.
Duusra sadasya ke naam ke choose karo.',
'loginerror' => 'Login me kuchh wrong hae',
'createaccounterror' => 'Account ke nai banae sakaa hae: $1',
'nocookiesnew' => 'Aap ke account banae dewa gais hae lekin aap logged in nai hae.
{{SITENAME}} me sadasya ke login khatir cookies hae.
Aap cookies ke rok diya hae.
Cookies ke enable kar ke, aapan nawaa wiki_username aur password se login karo.',
'nocookieslogin' => '{{SITENAME}} me sadasya ke login khatir cookies hae.
Aap cookies ke disabled karaa hae.
Cookies ke enable kar ke fir se kosis karo.',
'nocookiesfornew' => 'Sadasya ke account ke nai banawa gais hae, kaahe ki source ke confirm nai karaa jaae sakis hae.
Cookies ke enable kar ke, ii panna ke fir se load karo aur fir se kosis karo.',
'noname' => 'Aap achchha wiki_user name ke nai specify karaa hai.',
'loginsuccesstitle' => 'Login safal bhais',
'loginsuccess' => "'''Aap \"\$1\" ke naam pe {{SITENAME}} me logged in hai.'''",
'nosuchwiki_user' => '"$1" naam ke koi sadasya nai hai.
Sadasya ke naam case sensitive hai.
Aapan spelling check karo nai to [[Special:wiki_userLogin/signup|nawaa account banao]].',
'nosuchwiki_usershort' => '"$1" naam ke koi sadasya nai hai.
Aapan spelling check karo.',
'nowiki_userspecified' => 'Aap ke aapan wiki_username de ke parri.',
'login-wiki_userblocked' => 'Ii sadasya ke rok dewa gais hae.  Login kare ke ijajat nai hae.',
'wrongpassword' => 'Galat password likha gais hai. Fir se kosis karo.',
'wrongpasswordempty' => 'Koi password nai likha gais hai. Fir se kosis karo.',
'passwordtooshort' => 'Password me kamti se kamti {{PLURAL:$1|1 character|$1 characters}} hoe ke chahi.',
'password-name-match' => 'Aap ke password ke aap ke wiki_username se different rahe ke chaahi.',
'password-login-forbidden' => 'Ii sadasya ke naam aur password ke kaam me laae ke ijaajat nai hae.',
'mailmypassword' => 'Nawaa password ke E-mail karo',
'passwordremindertitle' => '{{SITENAME}} ke khatir nawaa temporary password',
'passwordremindertext' => 'Koi (hoe sake hai aap, IP address $1 se)
{{SITENAME}} ($4) ke khatir nawaa password mangis hai.
"$2" ke banae ke "$3" se set kar dewa gais hai. Agar aap ii chij mangta rahaa,
tab aap ke abhi login kar ke password badle ke chaahi.
Aap ke temporary password {{PLURAL:$5|ek din|$5 din}} me expire hoi.

Agar jo aur koi ii request karis hai, nai to aap aapan password yaad kar liya hai aur nai badle mangta hai, tab ii sandes ke ignore kar do aur aapan purana password use karte raho.',
'noemail' => 'Sadasya "$1" ke koi e-mail address recorded nai hai.',
'noemailcreate' => 'Aap ke thiik e-mail address de ke parrii',
'passwordsent' => 'Ek nawaa password ke "$1" ke registered e-mail pe bheja gais hai. Meharbaani kar ke aap password mile ke baad login karna.',
'blocked-mailpassword' => 'Aap ke IP address ke block kar dewa gais hai, aur iske kaaran aap ke password recovery function kaam me lae ke ijajat nai hai,',
'eauthentsent' => 'Ek confirmation e-mail aap ke dewa gae e-mail address be bhej dewa gais hai. Aur mail ii account pe bheje se pahile e-mail me likha instructions ke follow karo, ii confirm kare ke khatir ki account aap ke hai.',
'throttled-mailpassword' => 'Ek password reminder ke pichhle {{PLURAL:$1|hour|$1 hours}} me bhej dewa gais hai.
Abuse ke roke ke khatir, khali ek password reminer har {{PLURAL:$1|hour|$1 hours}} me bheja jaai.',
'mailerror' => 'Mail bheje me galti hoe gais hai: $1',
'acct_creation_throttle_hit' => 'Ii wiki me visitors log aap ke IP address ke use kar ke {{PLURAL:$1|1 account|$1 accounts}}, pichhle kuch din me, banae liin hai, jis se jaada ii time nai banawa jaae sake hai.
Ii kaaran se visitors log jon ki ii IP address use kare hai, ke aur account banae ke ijajat nai hai.',
'emailauthenticated' => 'Aap ke e-mail address ke $2 ke roj aur $3 baje authenticate karaa gais rahaa.',
'emailnotauthenticated' => 'Aap ke e-mail address ke abi tak authenticate nai gais hai.
Ii sab feature khatir koi e-mail nai bheja jaai.',
'noemailprefs' => 'Ii sab feature ke kaam kare khatir e-mail specify karo.',
'emailconfirmlink' => 'aapan e-mail address ke confirm karo',
'invalidemailaddress' => 'E-mail address ke nai lewa jae sake hai kahe ki iske format kharaab hai.
Meharbaani kar ke achchha address ke enter karo nai to uu field ke khali kar do.',
'cannotchangeemail' => 'Ii wiki me account e-mail ke badla nai jaawe sake hae',
'emaildisabled' => 'Ii site e-mail nai bheje sake hae.',
'accountcreated' => 'Account banae dewa gais hai',
'accountcreatedtext' => '$1 khatir wiki_user account banae dewa gais hai.',
'createaccount-title' => '{{SITENAME}} khatir account creation',
'createaccount-text' => 'Koi aap ke e-mail katir {{SITENAME}} ($4) named "$2" me account banais hai jiske password hai "$3".
Aap ke chaahi ki aap login kar ke password ke badal do.
Agar ii account galti se banaa hai tab ii sandes ke ignore kar do.',
'wiki_usernamehasherror' => 'Sadasya ke naam me hash akchhar ke nai kaam me lawa jaae sake hae',
'login-throttled' => 'Aap bahut jaada dafe ii account ke password ke enter kare ke kosis karaa hai.
Thora deri baad fir se kosis karna.',
'login-abort-generic' => 'Aap ke login nai chalaa - Aborted',
'loginlanguagelabel' => 'Bhasa: $1',
'suspicious-wiki_userlogout' => 'Aap ke log out kare ke maang ke na kar dewa gais hae kaahe ki ii janaawe hae ki ii maang ke ek tuuta browser nai to caching proxy bhejis hae.',

# E-mail sending
'php-mail-error-unknown' => 'PHP ke mail() function me koi anjaan kharaabi hae',
'wiki_user-mail-no-addy' => 'Bina e-mail address rahe pe bhi e-mail bheje ke kosis karaa gais hae.',

# Change password dialog
'resetpass' => 'Password ke badlo',
'resetpass_announce' => 'Aap ek temporary e-mailed code se login bhaya hai
Login khatam kare khatir, aap ke nawaa password set kare ke parri hian:',
'resetpass_text' => '<!-- Hian pe likho -->',
'resetpass_header' => 'Account assword ke badlo',
'oldpassword' => 'Purana password:',
'newpassword' => 'Nawaa password:',
'retypenew' => 'Password fir se type karo:',
'resetpass_submit' => 'Password ke set kar ke login karo',
'resetpass_success' => 'Aap ke password ke safalta se badal dewa gais hai! Aap ke ab login karaa jaae hai...',
'resetpass_forbidden' => 'Password nai badlaa jaae sake hai',
'resetpass-no-info' => 'Ii panna ke sidha access kare ke khatir aap ke logged in rahe ke parri.',
'resetpass-submit-loggedin' => 'Password ke badlo',
'resetpass-submit-cancel' => 'Nai karo',
'resetpass-wrong-oldpass' => 'Temporary nai to abhi ke password valid nai hai.
Sait aap password ke safalta se badal sia hoga nai to nawaa temporary password ke maang karaa hoga.',
'resetpass-temp-password' => 'Kachcha password:',

# Special:PasswordReset
'passwordreset' => 'Password ke badlo',
'passwordreset-text' => 'Aapan account ke baare me jaankari ke receive kare ke khatir ii fom ke bharo.',
'passwordreset-legend' => 'Password ke badlo',
'passwordreset-disabled' => 'II wiki me password ke badle ke ijaajat nai hae.',
'passwordreset-pretext' => '{{PLURAL:$1||Niche ke ek data ke likho}}',
'passwordreset-wiki_username' => 'Sadasya ke naam:',
'passwordreset-domain' => 'Domain:',
'passwordreset-capture' => 'Banawa gais e-mail ke dekho',
'passwordreset-capture-help' => 'Agar aap ii box ke tick karaa, tab e-mail (aur uske saathe temporary password)  ke aap ke ii rakam se dekhawa jaai jaise ki iske sadasya ke lage bhej dewa gais hae.',
'passwordreset-email' => 'E-mail ke address',
'passwordreset-emailtitle' => '{{SITENAME}} me account ke jaankari',
'passwordreset-emailtext-ip' => 'Koi (hoe sake aap, IP address $1 se) {{SITENAME}} ($4) pe aap ke account ke baare me jaankari maanga hae. Niche likha gias sadasya ii e-mail se associated hae.  {{PLURAL:$3|account hae|accounts hae}}

$2

{{PLURAL:$3|Ii temporary password|Ii sab temporary passwords}}  {{PLURAL:$5|ek din|$5 din}} me khalaas hoi.
Aap ke chaahi ki aap login kar ke ek nawaa password banao.  Agar aur koi ii request karis hae, nai to agae aap aapan purana paasword ke yaad kar liya hae, tab ii sandes ke baare me bhuul jaao aur purana password use karte raho.',
'passwordreset-emailtext-wiki_user' => '
Sadasya $1 {{SITENAME}} pe aap ke account details ke {{SITENAME}} $4 ke khaatir  reminder maagis hae
 NIche ke sadasya {{PLURAL:$3|account hae|accounts hae}} ii e-mail address: $2 se associatied hae

{{PLURAL:$3|Ii temporary password|Ii sab temporary passwords}}  {{PLURAL:$5|ek din|$5 din}} me khalaas hoi.
Aap ke chaahi ki aap login kar ke ek nawaa password banao.  Agar aur koi ii request karis hae, nai to agae aap aapan purana paasword ke yaad kar liya hae, tab ii sandes ke baare me bhuul jaao aur purana password use karte raho.',
'passwordreset-emailelement' => 'Sadasya ke naam: $1
Kuchh din ke khatir password: $2',
'passwordreset-emailsent' => 'Aap ke yaad karae ke khatir ek e-mail ke bhej dewa gais hae.',
'passwordreset-emailsent-capture' => 'Ek yaad karae waala e-mail, jiske niche dekhawa jaawe hae, ke bhej dewa gais hae.',
'passwordreset-emailerror-capture' => 'Ek yaad karae waala e-mail ke banawa gais hae, jiske niche dekhawa jaawe hae, lekin jiske bheje nai jawa sake hae: $1',

# Special:ChangeEmail
'changeemail' => 'E-mail address ke badlo',
'changeemail-header' => 'Account e-mail address ke badlo',
'changeemail-text' => 'Aapan e-mail ke badle kae khaatir ii form ke fill karo. Ii badlao ke khatir aap ke aapan password ke de ke parri.',
'changeemail-no-info' => 'Ii panna ke sidha dekhe ke khaatir, aap ke login kare ke parri.',
'changeemail-oldemail' => 'Abhi ke E-mail address:',
'changeemail-newemail' => 'Nawaa E-mail address:',
'changeemail-none' => '(kuchh nai)',
'changeemail-submit' => 'E-mail badlo',
'changeemail-cancel' => 'Kaat do',

# Edit page toolbar
'bold_sample' => 'Motaa text',
'bold_tip' => 'Motaa text',
'italic_sample' => 'Tirchha akchhar',
'italic_tip' => 'Tirchha akchhar',
'link_sample' => 'Jorr ke title',
'link_tip' => 'Bhitari jorr',
'extlink_sample' => 'http://www.example.com jorr ke padwi',
'extlink_tip' => 'Bahari jorr (yaad rakhna http:// prefix)',
'headline_sample' => 'Khaas samaachar ke akchhar',
'headline_tip' => 'Duusra level ke headline',
'nowiki_sample' => 'Non-formatted text ke hian par insert karo',
'nowiki_tip' => 'Wiki bhasa ke anusaar badlao nahi karo',
'image_tip' => 'Jamawa gais suchi',
'media_tip' => 'File ke jorre waala',
'sig_tip' => 'Aapke signature time ke saathe',
'hr_tip' => 'Samthar line (bahut jaada nai kaam me laana)',

# Edit pages
'summary' => 'Sanchhipt:',
'subject' => 'Visay/khaas samachar:',
'minoredit' => 'Ii chhota badlao hai',
'watchthis' => 'Ii panna pe dhyaan rakkho',
'savearticle' => 'Panna ke bachao',
'preview' => 'Jhalak dekhao',
'showpreview' => 'Preview dekhao',
'showlivepreview' => 'Abhi ke jhalak',
'showdiff' => 'Badlao dekhao',
'anoneditwarning' => "'''Sawadhaan:''' Aap login nai karaa hai
Aap ke IP address ii panna ke edit itihaas me record karaa jaai.",
'anonpreviewwarning' => '"Aap log in nai bhaya hae. Ii panna ke bachae pe aap ke IP address ke panna ke badlao ke itihass me likha jaai."',
'missingsummary' => "'''Suchna:''' Aap badlao ke sanchhit me nai likha hai.
Agar aap Save ke fir se click karaa tab, aap ke badlao bina summary ke save kar lewa jaai.",
'missingcommenttext' => 'Meharbani kar ke niche aapan vichar deo.',
'missingcommentheader' => "'''Chetauni:''' Aap ii vichar ke vishay nai likha hai.
Agar aap \"{{int:savearticle}}\"  pe click karaa tab bina vishay ke iske bachae lewa jaai.",
'summary-preview' => 'Sanchhep jhalak:',
'subject-preview' => 'Suchi ke jhalak:',
'blockedtitle' => 'Sadasya ke rok dewa gais hai',
'blockedtext' => "'''Aapke wiki_user name nai to IP address ke rok dewa gae hai.'''

Roke waala hai $1.
Iske kaaran hai ''$2''.

* Roke ke suruu: $8
* Roke kab khatam hoi: $6
* Kiske rokaa jae hai: $7

Aap $1 ke mile saktaa hai nai to duusra [[{{MediaWiki:Grouppage-sysop}}|administrator]] se rukawat ke baare me baat karo.
Aap ii sadasya ke 'email this wiki_user' feature ke kaam me lae ke baat nai kare saktaa hai jab tak ki ek kanuni email address aapke [[Special:Preferences|account preferences]] me nai hai aur aap ke iske kaam me laae ke roka nai gae hai.
Aap ke abhi ke IP address $3 hai, aur roka gae ID hai #$5.
Meharbani kar ke chahe ek nai to duno ke aapan sawaal me rakho.",
'autoblockedtext' => "Aap ke IP address ke apne se rok dewa gais hai kahe ki koi duusra sadasya iske kaam me kawat rahaa, jiske $1 rokis hai.

Iske khatir kaaran hai:
:''$2''

* Roke ke suruu: $8
* Roke kab khatam hoi: $6
*Roke waala: $7

Aap $1 ke mile saktaa hai nai to duusra [[{{MediaWiki:Grouppage-sysop}}|administrator]] se rukawat ke baare me baat karo.

Aap ii sadasya ke 'email this wiki_user' feature ke kaam me lae ke baat nai kare saktaa hai jab tak ki ek kanuni email address aapke [[Special:Preferences|account preferences]] me nai hai aur aap ke iske kaam me laae ke roka nai gae hai.

Aap ke abhi ke IP address $3 hai, aur roka gae ID hai #$5.
Meharbani kar ke chahe ek nai to duno ke aapan sawaal me rakho.",
'blockednoreason' => 'koi kaaran nai dewa gais hai',
'whitelistedittext' => 'Aap ke panna badle khatir $1 kare ke parri.',
'confirmedittext' => 'Panna ke badle se pahile aap ke aapan e-mail ke confirm kare ke parri.
Meharbani kar ke aap aapan e-mail ke aapan [[Special:Preferences|wiki_user preferences]] se validate karna.',
'nosuchsectiontitle' => 'Aisan koi bhaag nai hai',
'nosuchsectiontext' => 'Aap ek bhaag jon ki nai hai, ke badle ke kosis karaa hai.
Jab aap ii panna ke dekhtaa rahaa tab saait iske hatae nai to mitae dewa gais rahaa.',
'loginreqtitle' => 'Login Jaruri Hai',
'loginreqlink' => 'log in karo',
'loginreqpagetext' => 'Duusra panna ke dekhe ke khatir aap ke $1 kare ke parri.',
'accmailtitle' => 'Password bhej dewa gais hai.',
'accmailtext' => "Ek randomly banawal password ke [[wiki_user talk:$1|$1]] ke khatir $2 ke lage bhaja gais hai.
Ii nawa account ke password ke ''[[Special:ChangePassword|change password]]''  panna pe badla jaae sake hai jab aap login karta hai.",
'newarticle' => '(Nawaa)',
'newarticletext' => "Aap ek panna ke jorr ke follow kara hae jon ki abhi nai hae.
Ii panna banae khatir, niche box me type karo (see the [[{{MediaWiki:Helppage}}|help page]] for more info).
Agar jo aap hian par galti se aae hai tab aapan browser ke '''back''' button pe click karo.",
'anontalkpagetext' => "----''Ii salah kare waala panna uu anonymous sadasya ke baare me jon abhi account nai banais hai, nai to account ke kaam me nai lawe hai.
Ii kaaran se ham log ke IP address kaam me lae ke ii sadasya ke jaana jae hai.

Ii rakam ke IP address ke dher sadasya kaam me lae sake hai.
Agar aap ek anonymous wiki_user hai aur ii sochta hai ki bekar baat aap ke baare me karaa gais hai, tab
[[Special:wiki_userLogin/signup|create an account]] or [[Special:wiki_userLogin|log in]] aage ke garrbarri roke khatir aur duusra anonymous wiki_users se mistake nai kare ke khatir .''",
'noarticletext' => 'Abhi ii panna me kuchh likhaa nai hai.
Aap saktaa hai [[Special:Search/{{PAGENAME}}|ii panna ke title khoje]] duusra panna me,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} search the related logs],
nai to [{{fullurl:{{FULLPAGENAME}}|action=edit}} ii panna ke badlo]</span>.',
'noarticletext-nopermission' => 'Abhi ii panna me koi chij likha nai hae.
Aap sakta hae [[Special:Search/{{PAGENAME}}|ii panna ke title ke khoje]] duusra panna me,
nai to <span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} search the related logs]</span>, lekin aap ke ii panna ke banae ke ijaaja tnai hae.',
'missing-revision' => 'Panna "{{PAGENAME}}" me #$1 badlao nai hae.
Iske kaaran ii hoe sake hae ki ek mitawa gais panna se link karaa jaawe hae.
Iske baare me aur jaankari [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me paawa jaae sake hae.',
'wiki_userpage-wiki_userdoesnotexist' => 'wiki_user account "<nowiki>$1</nowiki>" abi registered nai hai.
Check karo ki Ii panna ke aap banae/badle mangta hai.',
'wiki_userpage-wiki_userdoesnotexist-view' => 'wiki_user account "$1" abhi register nai karaa gais hae',
'blocked-notice-logextract' => 'Ii sadasya ke abhi rok dewa gais hae.
Sab se nawaa block log entry, aap ke reference ke khatir,  niche dewa gais hae:',
'clearyourcache' => "'''Note:''' - Save kare ke baad, aap ke sait browser ke cache ke bypass kare ke parri badlao ke dekhe khatir.
* '''Firefox / Safari:''' me ''Shift'' ke dabae ke ''Reload,'' pe click karo, nai to chaahe ''Ctrl-F5'' nai to ''Ctrl-R'' (''⌘-R''  Mac pe)
* '''Google Chrome:''' me ''Ctrl-Shift-R'' dabao (''⌘-Shift-R'' Mac pe)
*  '''Internet Explorer:''' me ''Ctrl'' dabae ke  ''Refresh'' pe click karo, nai to  ''Ctrl-F5'' dabao",
'wiki_usercssyoucanpreview' => "'''Salah:''' Bachae se pahile \"{{int:showpreview}}\"  button ke kaam me laae ke aapan nawaa CSS ke test karo.",
'wiki_userjsyoucanpreview' => "'''Salah:''' Bachae se pahile  \"{{int:showpreview}}\"  button ke kaam me laae ke aapan nawaa JavaScript ke test karo.",
'wiki_usercsspreview' => "'''Yaad rakhna ki aap khali aapan CSS ke jhalak dekhta hai.
Iske abhi save nai karaa gais hai!'''",
'wiki_userjspreview' => "'''Yaad rakhna ki aap khali aapan JavaScript ke testing/previewing  karta hai, iske abhi save nai karaa gais hai!'''",
'sitecsspreview' => " '''Yaad rakhna ki aap ii CSS ke khaali preview kartaa hae.'''
'''Iske abhi talak bachawa nai gais hae!'''",
'sitejspreview' => " '''Yaad rakhna ki aap ii JavaScript code ke khaali preview kartaa hae.'''
'''Iske abhi talak bachawa nai gais hae!'''",
'wiki_userinvalidcssjstitle' => "'''Warning:''' Koi skin \"\$1\" nai hai.
Yaad rakhna ki custom .css aur .js panna owercase title use kare hai, jaise ki {{ns:wiki_user}}:Foo/vector.css aur{{ns:wiki_user}}:Foo/Vector.css nai.",
'updated' => '(Update kar dewa gais hai)',
'note' => "'''Dhyan rakkho:'''",
'previewnote' => "'''Ii khaali ek jhalak dekhae hai'''
Tumar badlao abhi bachawa nai gais hai!",
'continue-editing' => 'Badle waala jagha jaao',
'previewconflict' => 'Ii preview uu text dekhae hai jon ki uppar ke text editing area me dekhai agar aap iske save karaa.',
'session_fail_preview' => "''' Maaf karna! Ham log aap ke badlao ke process nai kare paya hai due to a loss of session data.
Fir se kosis karna.
Agar ii fir bhi nai chale tab kosis karna [[Special:wiki_userLogout|logging out]]aur fir logging back in.'''",
'session_fail_preview_html' => "'''Maaf karna! Ham log aap ke badlao ke process ke process nai kare sakaa kahe ki session data abhi nai dekhae hai.'''

''Iske kaaran hai ki {{SITENAME}} me raw HTML enabled hai, preview ke lukae dewa gais hai as a precaution against JavaScript attacks.''

'''Agar ii kanuni badlao hai, tab fir se kosis karna.
Agar ii fir bhi kaam nai kare, tab [[Special:wiki_userLogout|logging out]] aur logging back in ke kosis karna.'''",
'token_suffix_mismatch' => "''' Aap ke badlao ke reject kar dewa gais hai kahe ki aap ke client punctuation charcters ke token edit me mangle kar diis hai.
Ii badlao ke reject kar dewa gais hai to prevent corruption of the page text.
Ii kabhi kabhi hoe hai jab aap ek buggy web-based anonymous proxy service ke use karta hai.'''",
'edit_form_incomplete' => 'Edit form ke kuchh hissa server ke lage nai pahunche paais hae; fir se check karo ki aap ke badlao form me hae, aur fir se form ke bhejo.',
'editing' => '$1 badlawa jae hai',
'creating' => '$1 banaata hae',
'editingsection' => 'Sampadan $1 (bhaag)',
'editingcomment' => '$1 ke badla jae hai (nawaa section)',
'editconflict' => 'Badle me conflict: $1',
'explainconflict' => "Aap ke ii panna ke badle ke suruu kare ke baad, aur koi ii panna ke badal diis hai.
Uppar ke text area panna ke text jaise abhi hai ke dekhawa jae hai.
Aap ke badlao ke lower text area me dekawa jae hai.
Aap ke aapan badlao ke existing text me merge kare ke parri.
'''Khali''' text in the upper text area  ke save karaa jai jab aap \"{{int:savearticle}}\" ke press karega.",
'yourtext' => 'Aap ke text',
'storedversion' => 'Bachawa gais version',
'nonunicodebrowser' => "'''CHETAUNI: Aap ke browser unicode ke nai maane hae.
Ek workaround uu jagah hae jahan pe aap thik se panna ke badle sakta hae: non-ASCII akchhar edit box me hexadecimal codes dekhai.'''",
'editingold' => "'''WARNING: Aap ii panna ke purana version ke badalata hae.'''
Agar aap iske save kar lia tab last badlao se abi tak ke changes will be lost.",
'yourdiff' => 'Antar',
'copyrightwarning' => "Dhyann me rakho ki {{SITENAME}} ke sab yog daan $2 ($1 ke dekho aur kaankari khatir) ke niche dewa gae hai. Agar aap nai mangtaa ki aap ke likha gae koi chij ke duusra logan badle tab hain par nahii likho.<br />
Aap ii bhi waada kartaa hai ki iske aap likha hai aur koi duusra jagah se copy nahi karaa hai.
'''COPYRIGHT CHIJ KE BINA ANUMATI KE HIAN PAR NAHI SUBMIT KARNA!'''",
'copyrightwarning2' => "Yaad rakhna ki {{SITENAME}} pe sab yogdaan ke duusra sadasya LOG badle, nai to delete, kare sake hai.
Agar aap nai mangta ki koi aur aap ke yogdaan ke badle, tab aap hian par nai likho.<br />
Aap ii bhi kasam khata hai ki aap iske apne se likha hai aur kahin se copy nai karaa hai (Aur jaankari khatir $1 ke dekho).
''' COPYRIGHT WORK KE BINA AUNUMATI KE SUBMIT NAI KARNA!'''",
'longpageerror' => "!'''ERROR: Jon text aap submit karaa hai uu {{PLURAL:$1|ek kilobyte|$1 kilobytes}} lamba hai, jon ki maximum {{PLURAL:$2|ek kilobyte|$2 kilobytes}} se lamba hai.'''
Iske bajawa nai karaa jae sake hai.",
'readonlywarning' => "'''WARNING: Database ke maintenance khatir band kar dewa gais hai, tab abhi aap aapan badlao ke save nai kare paega.
Aap sait aapan badlao ke ek text file me cut-n-paste kar ke baad me use kare khatir save kae le sakta hai.'''

Administrator jon ki iske lock karis hai ii kaaran diis hai: $1",
'protectedpagewarning' => "'''CHETAUNI: Ii panna ke band kar dewa gais hai jisse ke khaali uu sadasya jiske sysop adhikaar hai iske badle sake hai.'''
Niche sab se nawaa suchi aap ke dekhe ke khatir dewa gais hae:",
'semiprotectedpagewarning' => "'''Suchna:''' Ii panna ke band kar dewa gais hai jisse ki khali registered sadasya iske badle sake hai.
Niche sab se nawaa suchi ke aap ke dekhe ke khatir dewa gais hae:",
'cascadeprotectedwarning' => "'''Chetawani:''' Ii panna ke band kar dewa gais jiske kaaran khali uu sadasya jiske lage sysop privileges hai iske badle sake hai, kahe ki iske niche likha gais cascade-protected {{PLURAL:$1|panna|panna}} me rakkha gais hai:",
'titleprotectedwarning' => "'''CHETAUNI: Ii panna ke band dewa gais hai jisse ki [[Special:ListGroupRights|specific rights]] ke jarie iske badla jaae sake hai.'''
Aap ke jaankari ke khatir sab se nawaa suchi niche dewa gais hae:",
'templatesused' => '{{PLURAL:$1|Template|Templates}} ke ii panna me kaam me lawa gais hae:',
'templatesusedpreview' => '{{PLURAL:$1|Template|Templates}} ii jhalak me kaam me lawa gais hae:',
'templatesusedsection' => '{{PLURAL:$1|Template|Templates}} ii hissa me kaam me lawa gais hae:',
'template-protected' => '(surakchhit)',
'template-semiprotected' => '(aadha-surakchhit)',
'hiddencategories' => 'Ii panna {{PLURAL:$1|1 hidden category|$1 hidden categories}} ke member hai:',
'edittools' => '<!-- Hian ke text edit aur upload forms ke niche dekhai. -->',
'nocreatetitle' => 'Panna ke banae pe rukawat hai',
'nocreatetext' => '{{SITENAME}} me nawaa panna banae ke rukawat hai.
Aap pichhe jaae ke, ek panna jon hai, ke sampadan kare sakta hai, nai to [[Special:wiki_userLogin|log in or create an account]].',
'nocreate-loggedin' => 'Aap ke nawaa panna banaae ke ijaajat nai hai.',
'sectioneditnotsupported-title' => 'Aap khaali vibhag ke badle nai sakta hae',
'sectioneditnotsupported-text' => 'Ii panna pe aap khaali vibhag ke badle nai sakta hae',
'permissionserrors' => 'Permissions Errors',
'permissionserrorstext' => 'Aap ke uu chij kare ke ijajat nai hai, ii {{PLURAL:$1|kaaran|kaaran}} khatir:',
'permissionserrorstext-withaction' => 'Aap ke lage $2 kare khatir ijajat nai hai, ii {{PLURAL:$1|kaaran|kaaran}} se:',
'recreate-moveddeleted-warn' => "'''Chetawani: Jon panna ke pahile hatae dewa gais rahaa ke aap fir se banata hai.'''

Aap socho ki ii panna ke sampadan aap ke karte rahe ke chaahi ki nai.
Aap ke aaram khatir hatae waala suchi hian pe dewa jaawe hai:",
'moveddeleted-notice' => 'Ii panna ke mitae dewa gais hai.
Ii panna ke mitae waala aur hatae waala log aap ke dekhe khatir niche dewa gais hai.',
'log-fulllog' => 'Puura log dekho',
'edit-hook-aborted' => 'Badalo ke hook rok diis hai.
Ii koi kaaran nai diis hai.',
'edit-gone-missing' => 'Panna ke badle nai sakaa.
Janae hai ki iske koi mitae dii hai.',
'edit-conflict' => 'Badlao me conflict hai.',
'edit-no-change' => 'Aap ke badle ke kosis ke ignore kar dewa gais hai, kahe ki text ke badla nai gais hai.',
'edit-already-exists' => 'Nawaa panna nai banae sakaa hai.
Ii naam ke panna abhi hai.',
'defaultmessagetext' => 'Default message text',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''Chetauni''': Ii panna me bahut jaada expensive parser function calls hai.

Iske $2 {{PLURAL:$2|call|calls}} se kamti hoe ke chaahi, {{PLURAL:$1|abhi hai $1 call|abhi hai $1 calls}}.",
'expensive-parserfunction-category' => 'Panna jisme bahut jaada expensive parser function calls hai',
'post-expand-template-inclusion-warning' => "'''Chetauni:''' Template include size bahut barraa hai.
Kutch templates ke include nai karaa jaai.",
'post-expand-template-inclusion-category' => 'Panna jon ki template include size se barra hai',
'post-expand-template-argument-warning' => 'Warning: Ii panna me kamti se kamti ek template argument hai jiske expansion size bahut barraa hai.
Ii sab arguments ke omit kar dewa gais hai.',
'post-expand-template-argument-category' => 'Panna jisme omitted template arguments hai',
'parser-template-loop-warning' => 'Template loop ke pawa gais hai: [[$1]]',
'parser-template-recursion-depth-warning' => 'Template recursion depth limit se jaada hoe gais hae ($1)',
'language-converter-depth-warning' => 'Bhasa anuwaad ke gahiraai ijajat se jaada hoe gais hae ($1)',
'node-count-exceeded-category' => 'Panna jahaan pe node-count bahut jaada hoe gais hae',
'node-count-exceeded-warning' => 'Panna, node-count se jaada hae',
'expansion-depth-exceeded-category' => 'Panna jahaan pe expansion depth ke exceed karaa gais hae',
'expansion-depth-exceeded-warning' => 'Panna expansion depth ke exceed karis hae',
'parser-unstrip-loop-warning' => 'Unstrip loop ke pawa gai shae',
'parser-unstrip-recursion-limit' => 'Unstrip recursion limit ke exceed karaa gais hae ($1)',
'converter-manual-rule-error' => 'Bhasa ke anuwaad kare waala niyam me galti hae',

# "Undo" feature
'undo-success' => 'Ii badlao ke pahile jaise karaa jaae sake hai.
Niche ke comparison ke check kar ke dekho ki aap yahi kare mangta rahaa, aur fir niche ke badlao ke save kar ke aapan badlao ke pahile jaise karo.',
'undo-failure' => 'Ii badalo ke paile jaise nai karaa jaae sake hai kahe ki biich me badlao hai.',
'undo-norev' => 'Ii badlao ke pahile jaise nai karaa jaae sake hai kahe ki ii badalo abhi nai hai nai to iske mitae dewa gais hai.',
'undo-summary' => '$1 badlao [[Special:Contributions/$2|$2]] se, ke pahile jaise karo ([[wiki_user talk:$2|Talk]])',

# Account creation failure
'cantcreateaccounttitle' => 'Account nai banae sakta hai',
'cantcreateaccount-text' => "Ii IP address ('''$1''') se nawaa account banae ke [[wiki_user:$3|$3]] block kar diis hai.

Iske kaaran, jon ki $3 diis hai, ''$2'' hai",

# History pages
'viewpagelogs' => 'Ii panna ke suchi dekho',
'nohistory' => 'Ii panna ke khatir koi badlao ke itihaas nai hai.',
'currentrev' => 'Abhi ke sansodhan',
'currentrev-asof' => 'Abhi ke badlao ii tarik tak $1',
'revisionasof' => '$1 ke badlao',
'revision-info' => '$2 ke badlao $1 tak',
'previousrevision' => '← Purana badlao',
'nextrevision' => 'Nawaa badlao→',
'currentrevisionlink' => 'Abhi ke badlao',
'cur' => 'abhi waala',
'next' => 'duusra',
'last' => 'aakhri',
'page_first' => 'pahila',
'page_last' => 'aakhri',
'histlegend' => 'Farak pasand: Antar dekhe khatir radio box me chinh lagao aur enter ke nai to niche ke button dabao.<br />
Legend: (abhi) = abhi ke version se farka,
(pahile waala) = pahile waala version se farka, M = chhota sampadan.',
'history-fieldset-title' => 'Itihaas me khojo',
'history-show-deleted' => 'Khaali mitawa gais',
'histfirst' => 'Sab se puraana',
'histlast' => 'Sab se nawaa',
'historysize' => '({{PLURAL:$1|1 byte|$1 bytes}})',
'historyempty' => '(khali)',

# Revision feed
'history-feed-title' => 'Badlao ke itihass',
'history-feed-description' => 'Ii panaa ke wiki me badlao ke itihaas',
'history-feed-item-nocomment' => '$1 pe $2',
'history-feed-empty' => 'Aap jon panna mangta hai uu abhi tak banaa nai hai.
Saait iske wiki me se mitae dewa gae hoi, nai to iske naam badal dewa gae hoi.
Try karo [[Special:Search|wiki me khije ke]] aur nawaa panna ke.',

# Revision deletion
'rev-deleted-comment' => '(badlao ke summary ke hatae dewa gais hae)',
'rev-deleted-wiki_user' => '(wiki_username ke hatae dewa gais hai)',
'rev-deleted-event' => '(log action ke hatae dewa gais hai)',
'rev-deleted-wiki_user-contribs' => '[Sadasya ke naam nai to IP address ke hatae dewa gais hae- yogdaan se badlao ke lukae dewa gais hae]',
'rev-deleted-text-permission' => "Panna ke ii badlao ke '''mitae''' dewa gais hae.
Iske baare me aur jaankari [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me saait hoi.",
'rev-deleted-text-unhide' => "i panna ke badlao ke '''mitae''' dewa gais hai.
Iske baare me aur jaankari saait [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me hoi.
Aap fir bhi [$1 ii badlao ke dekhe sakta hae] agar aap aage barrhe mangtaa hae tab.",
'rev-suppressed-text-unhide' => "Ii panna ke badlao ke '''dabae''' dewa gais hai.
Iske baare me aur jaankari saait [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} suppression log] me hoi.
Aap fir bhi [$1 ii badlao ke dekhe sakta hae] agar aap aage barrhe mangtaa hae tab.",
'rev-deleted-text-view' => "Panna ke ii badlao ke '''mitae''' dewa gais hae.
Aap iske dekhe sakta hai; iske baare me aur jaankari [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me saait hoi.",
'rev-suppressed-text-view' => "Ii panna ke badlao ke '''dabae''' dewa gais hai.
Aap iske dekhe saktaa hae; Iske baare me aur jaankari saait [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} suppression log] me hoi.",
'rev-deleted-no-diff' => "Aap ii diff ke nai dekhe saktaa hai kahe ki ek badlao '''mitae''' dewa gais hae.
[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me sait kuch aur jaankari hoi.",
'rev-suppressed-no-diff' => "Aap ii antar ke nahi dekhe sakta hae, kahe ki ek badlao ke '''mitae''' dewa gais hae.",
'rev-deleted-unhide-diff' => "Ii diff me se ek badlao ke '''mitae''' dewa gais hae.
Aur jaankari saait [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me hoi.
Aap fir bhi [$1 ii diff ke dekhe sakta hae] agar aap aage barrhe mangtaa hai tab.",
'rev-suppressed-unhide-diff' => "Ii antar me ke ek balao ke '''dabae''' dewa gais hae.
Iske baare me aur jaankari [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} suppression log] me milii.
Aap [$1 ke dekehe saktaa hae]  agar aap aage barrhae mantaa hae tab.",
'rev-deleted-diff-view' => "Ii antar ke ek badlao ke '''mitae''' dwa gais hae.
Aap ii antar ke dekhe sakta hae; saait [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me saait aur jaankari hoe.",
'rev-suppressed-diff-view' => "Ii antar ke ek badlao ke '''dabae''' dewa gais hae.
Aap ii diff ke dekhe saktaa hae: iske baare me aur jaan kaari [{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} suppression log] me milii.",
'rev-delundel' => 'dekhao/lukao',
'rev-showdeleted' => 'dekhao',
'revisiondelete' => 'Badlao ke mitao/nai mitao',
'revdelete-nooldid-title' => 'Target revision jon ki valid nai hai',
'revdelete-nooldid-text' => 'Aap chaahe target revision(s) ke specify nai karaa hai, ii function ke perform kare ke khatir, specified revision haiye nai, nai to aap abhi ke badlao ke lukae ke kosis karta hai.',
'revdelete-nologtype-title' => 'Koi log type ke nai dewa gais hai',
'revdelete-nologtype-text' => 'Aap ii action ke kare khatir koi log type ke specify nai karaa hai.',
'revdelete-nologid-title' => 'Log entry valid nai hai',
'revdelete-nologid-text' => 'Chaahe aap target log event ke specify nai karaa hai ii chij kare ke khatir nai to batawa gais entry nai hai.',
'revdelete-no-file' => 'Chuna gais file abhi nai banawa gais hai.',
'revdelete-show-file-confirm' => 'Ka aap sure hai ki aap file ke mitawa gais revision ke dekhe mangtaa hai "<nowiki>$1</nowiki>" $2 se $3 talak?',
'revdelete-show-file-submit' => 'Haan',
'revdelete-selected' => "'''{{PLURAL:$2|Selected badlao|Selected badlao}} of [[:$1]]:'''",
'logdelete-selected' => "'''{{PLURAL:$1|Chuna gais log event|Chuna gais log events}}:'''",
'revdelete-text' => "'''Mitawa gae badlao aur ghatna panna ke itihaas me dekhai, lekin content ke kuch part janta nai access kare saki.'''
Duusra admins {{SITENAME}} me, lukawa gais content ke khole sake aur iske mitae bhi sake hai interface use kar ke, jab tak ki aur rukawat nai lagawa jaae.",
'revdelete-confirm' => 'Meharbani kar ke aap ii confirm karo ki aap ii kare mangta hae, aap iske asar ke samajhta hae, aur iske aap [[{{MediaWiki:Policy-url}}|the policy]] ke anusar karta hae.',
'revdelete-suppress-text' => "Suppression ke '''khaali''' ii chij ke khatir kaam me lawa jaae sake hai:
* Aapan baare me jaankari thik nai hai
*: ''ghar ke address aur telephone number, social security number, etc.''",
'revdelete-legend' => 'Dekhe waala rukawat set karo',
'revdelete-hide-text' => 'Badlawa gais text ke lukao',
'revdelete-hide-image' => 'File content ke lukao',
'revdelete-hide-name' => 'Kaam aur manjil ke lukao',
'revdelete-hide-comment' => 'Badlao ke baare me comment ke lukao',
'revdelete-hide-wiki_user' => "Editor's wiki_username/IP ke lukao",
'revdelete-hide-restricted' => 'Ii rukawat ke administrator aur duusra log se lukao.',
'revdelete-radio-same' => '(badlo nai)',
'revdelete-radio-set' => 'Haan',
'revdelete-radio-unset' => 'Nai',
'revdelete-suppress' => 'Sysops ke saathe saathe aur sab se data ke suppress karo',
'revdelete-unsuppress' => 'Pahile jaise karaa gais badlao me se rukawat hatao',
'revdelete-log' => 'Kaaran:',
'revdelete-submit' => 'Chuna gae badlao ke apply karo {{PLURAL:$1|revision|revisions}}',
'revdelete-success' => "'''Badlao dekhe khatir taiyaar hai.'''",
'revdelete-failure' => "'''Badlao ke nai dekhawa jaae sake hae:'''
$1",
'logdelete-success' => "'''Log dekhe khatir taiyaar hai.'''",
'logdelete-failure' => "'''Log ke nai dekhawa jaae sake hae:'''
$1",
'revdel-restore' => 'Badlo ki ii dekhe me kaise lage hae',
'revdel-restore-deleted' => 'mitawa gais badlao',
'revdel-restore-visible' => 'badlao, jiske aap dekhe saktaa hae',
'pagehist' => 'Panna ke itihaas',
'deletedhist' => 'Mitawa gae itihass',
'revdelete-hide-current' => 'Item dated $2, $1 ke lukae me garrbarr hoe gais hai: ii abhi ke version hai.
Iske lukawa nai jaawe sake hai.',
'revdelete-show-no-access' => '$2, $1 ke tarik ke item me error hai: ii item ke "restricted" mark karaa gais hai.
Aap ke ispe adhikar nai hai.',
'revdelete-modify-no-access' => '$2, $1 ke tarik ke item me error hai: ii item ke "restricted" mark karaa gais hai. Aap ke ispe adhikar nai hai.',
'revdelete-modify-missing' => 'Item ID $1 ke badle me error hoe gais hai: ii database me nai hai!',
'revdelete-no-change' => "'''Chetauni:''' $2, $1 ke tarik ke item ke pahile se visibility settings maanga gais rahaa.",
'revdelete-concurrent-change' => 'Item jiske date $2, $1 hai ke badle me error hoe gais hai: iske status ke saait aur koi badal diis hia jab aap iske badel ke kosis karta rahaa.
Meharbani ka ke logs ke check karo.',
'revdelete-only-restricted' => 'Jon chij aap $2, $1 ke lukae mangta rahaa me galti hoe gais hae: aap administrator log se koi chij lukae nai saktaa hae bina duursa dekhe waala option ke chune.',
'revdelete-reason-dropdown' => '*Mitae ke jaada kar ke kaaran
** Bina chhape ke adikar nai
** Aapan baare me fajuul jankari
** Kharaab sadasya ke naam
** Ninda kare waala jankari',
'revdelete-otherreason' => 'Duusra/aur kaaran:',
'revdelete-reasonotherlist' => 'Duusra kaaran',
'revdelete-edit-reasonlist' => 'Delete kare ke kaaran ke badlo',
'revdelete-offender' => 'Badle waala sadasya:',

# Suppression log
'suppressionlog' => 'Dabae waala log',
'suppressionlogtext' => 'Niche ke suchi me administrators se lukawa gais deletions au rukawat hae.
Abhi ke laabu rukawat ke suchi ke khatir [[Special:BlockList|block list]] ke dekho.',

# History merging
'mergehistory' => 'Panna ke itihass ke jorro',
'mergehistory-header' => 'Ii panna aap ke ek panna ke balao ke itihaas ke duusra panna ke badlao ke itihaas se jorre sake hae.
Ii baat ke dhyan me rakhna ki panna ke itihaas ek ke baad ek rahe.',
'mergehistory-box' => 'Dui panna ke badlao ke itihaas ke jorro:',
'mergehistory-from' => 'Source panna:',
'mergehistory-into' => 'Destination panna:',
'mergehistory-list' => 'Mergeable badalao ke itihaas',
'mergehistory-merge' => 'Niche likha [[:$1]] ke badlao ke [[:$2]] me jorra jaae sake hae.
Radio button column ke kaam me laae ke khaali wahi badlao ke jorro jon ki batawa gais time pe, nai to usse pahile, banawa gais hae.
Ii baat ke dhyan me rakhna ki navigation jorr ke kaam me laae se ii column reset hoe jaai.',
'mergehistory-go' => 'Jorre jaae sake badlao ke dekhao',
'mergehistory-submit' => 'Badlao ke jorro',
'mergehistory-empty' => 'Koi badlao ke jorraa nai jaae sake hai.',
'mergehistory-success' => '[[:$1]]ke $3 {{PLURAL:$3|badlao|badlao}} ke safalta se [[:$2]] me jorr dewa gais hai.',
'mergehistory-fail' => 'Itihaas ke nai jorre paaya hae, meharbaani kar ke panna aur time parameters ke check karo.',
'mergehistory-no-source' => 'Source panna $1 nai hai.',
'mergehistory-no-destination' => 'Destination panna $1 nai hai.',
'mergehistory-invalid-source' => 'Suruu waala panna ke must sahi naam hoe ke chaahi.',
'mergehistory-invalid-destination' => 'Manzil waala panna ke sahi naam rahe ke chaahi.',
'mergehistory-autocomment' => '[[:$1]] [[:$2]] me jorr dewa gais hai',
'mergehistory-comment' => '[[:$1]] [[:$2]] me jorr dewa gais hai: $3',
'mergehistory-same-destination' => 'Suruu aur khatam kare waala panna ek nai hoe sake hai.',
'mergehistory-reason' => 'Kaaran:',

# Merge log
'mergelog' => 'Log ke jorro',
'pagemerge-logentry' => '[[$1]] [[$2]] me jorr dewa gais hai ($3 talak ke badlao)',
'revertmerge' => 'Milawat ke pahile jaise karo',
'mergelogpagetext' => 'Niche ke suchi me nawaa itihass ke jorr ke suchi hai',

# Diffs
'history-title' => '"$1" ke sansodhan ke itihaas',
'difference-title' => '"$1" ke revisions ke biich ke antar',
'difference-title-multipage' => 'Panna "$1" aur "$2" ke biich ke antar',
'difference-multipage' => '(Panna ke biich ke antar)',
'lineno' => 'Rekha $1:',
'compareselectedversions' => 'Chuna gae version ke compare karo',
'showhideselectedversions' => 'Chuna gae versions ke dekhao/lukao',
'editundo' => 'Pahile jaise kar do',
'diff-multi' => '({{PLURAL:$1|Ek biich waala badlao|$1 biich waala badlao}} jiske {{PLURAL:$2|sadasya|$2 sadasya}} karis hae, ke  nai dekhawa jae hai.)',
'diff-multi-manywiki_users' => '({{PLURAL:$1|Ek biich waala badlao|$1 biich waala badlao}} jiske {{PLURAL:$2|sadasya|$2 sadasya}} se jaada log karin hae, ke  nai dekhawa jae hai.)',
'difference-missing-revision' => 'Ii badlao ($1) {{PLURAL:$2|was|were}} pe {{PLURAL:$2|One revision|$2 revisions}} nai pawa gais hae
Iske kaaran ii hoe sake hae ki ek mitawa gais panna se link karaa jaawe hae.
Iske baare me aur jaankari [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} deletion log] me paawa jaae sake hae.',

# Search results
'searchresults' => 'Khoj ke natija',
'searchresults-title' => '"$1" ke natija ke khojo',
'searchresulttext' => '{{SITENAME}} me khoje khatir aur jaankari khatir, dekho [[{{MediaWiki:Helppage}}|{{int:help}}]].',
'searchsubtitle' => 'Aap khoja rahaa  \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|sab panna jon ki "$1" se suruu hoe hai]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|sab panna jon ki "$1" se jurre hai]])',
'searchsubtitleinvalid' => "Aap '''$1''' ke khoja hai",
'toomanymatches' => 'Bahut dher match mila, duusra query se kosis karo',
'titlematches' => 'Panna ke jon naam mile hai',
'notitlematches' => 'Koi bhi panna ke naam nai mile hae',
'textmatches' => 'Panna ke jon text mile hai',
'notextmatches' => 'Koi panna see text nai mile hae',
'prevn' => 'pahile waala {{PLURAL:$1|$1}}',
'nextn' => 'aage waala {{PLURAL:$1|$1}}',
'prevn-title' => 'Pahile waala $1 {{PLURAL:$1|natija|natija}}',
'nextn-title' => 'Aage waala $1 {{PLURAL:$1|result|results}}',
'shown-title' => 'Ek panna me $1 {{PLURAL:$1|result|results}} dekhao',
'viewprevnext' => 'Dekho ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'Khoje ke option',
'searchmenu-exists' => "'''Ii wiki me \"[[\$1]]\" naam ke panna hai'''",
'searchmenu-new' => "'''Ii wiki me \"[[:\$1]]\" panna ke banao!'''",
'searchhelp-url' => 'Help:Madat',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|Ii prefix ke panna ke browse karo]]',
'searchprofile-articles' => 'Content panna',
'searchprofile-project' => 'Madat aur Project panna',
'searchprofile-images' => 'Multimedia',
'searchprofile-everything' => 'Sab chij',
'searchprofile-advanced' => 'Anbhawi',
'searchprofile-articles-tooltip' => '$1 me khojo',
'searchprofile-project-tooltip' => '$1 me khojo',
'searchprofile-images-tooltip' => 'File ke khojo',
'searchprofile-everything-tooltip' => 'Sab content me khojo (baat waala panna bhi)',
'searchprofile-advanced-tooltip' => 'Custom namespaces me khojo',
'search-result-size' => '$1 ({{PLURAL:$2|1 sabd|$2 sabd}})',
'search-result-category-size' => ' {{PLURAL:$1|1 sadasya|$1 sadasya}} ({{PLURAL:$2|1 chhota vibhag|$2 chhota vibhag}}, {{PLURAL:$3|1 file|$3 files}})',
'search-result-score' => 'Len den: $1%',
'search-redirect' => '(redirect $1)',
'search-section' => '(section $1)',
'search-suggest' => 'Ka aap ke matlab rahaa: $1',
'search-interwiki-caption' => 'Saathe ke project',
'search-interwiki-default' => '$1 ke result:',
'search-interwiki-more' => '(aur)',
'search-relatedarticle' => 'sambandh rakkhe hai',
'mwsuggest-disable' => 'AJAX sughao ke beasar karo',
'searcheverything-enable' => 'Sab namespaces me khojo',
'searchrelated' => 'sambhand rakkhe hai',
'searchall' => 'sab',
'showingresults' => "Niche dekhae hai {{PLURAL:$1|'''1''' result|'''$1''' results}} #'''$2''' se suruu hoe ke.",
'showingresultsnum' => "Niche dekhawa jae hai {{PLURAL:$3|'''1''' result|'''$3''' results}}, #'''$2''' se suruu hoe ke.",
'showingresultsheader' => "{{PLURAL:$5|Natija '''$1''' of '''$3'''|Natija '''$1 - $2''' of '''$3'''}} '''$4''' khatir",
'nonefound' => "'''Yaad rakhna''': apne se khaali thora namespaces me khoja jaae hai.
Aapan query ke ''all:'' se suruu kar ke visay suchi me khojo (including talk pages, templates, etc), nai to jon namespace aap mangtaa hai usse query suruu karo.",
'search-nonefound' => 'Ii sawaal ke koi jawab nai hae.',
'powersearch' => 'Visesh khoj',
'powersearch-legend' => 'Gahira khoj',
'powersearch-ns' => 'Namespaces me khojo:',
'powersearch-redir' => 'Redirects ke suchi do',
'powersearch-field' => 'Iske khojo',
'powersearch-togglelabel' => 'Check karo:',
'powersearch-toggleall' => 'Sab',
'powersearch-togglenone' => 'Koi bhi nai',
'search-external' => 'Bahaari khoj',
'searchdisabled' => '{{SITENAME}} me abhi khoje ke anumati nai hai.
Aap tab tak Google se khoje sakta hai.
Yaad rakhna ki uu log ke {{SITENAME}} ke index saait purana hoi.',

# Quickbar
'qbsettings' => 'Quickbar',
'qbsettings-none' => 'Koi nai',
'qbsettings-fixedleft' => 'Left me fixed hai',
'qbsettings-fixedright' => 'Right me fixed hai',
'qbsettings-floatingleft' => 'Baaen or baho',
'qbsettings-floatingright' => 'Daaen or baho',
'qbsettings-directionality' => 'Banae dewa gais hae, lekin ii aap ke bhasa ke script directionality ke uppar nibhar hae',

# Preferences page
'preferences' => 'Pasand',
'mypreferences' => 'Pasand',
'prefs-edits' => 'Badlao ke number:',
'prefsnologin' => 'Aap abhi logged in nai hai',
'prefsnologintext' => 'Aaap ke <span class="plainlinks">[{{fullurl:{{#Special:wiki_userLogin}}|returnto=$1}} logged in]</span> chaahi rahe ke wiki_user preferences ke badle ke khatir.',
'changepassword' => 'Pasword ke badlo',
'prefs-skin' => 'Skin',
'skin-preview' => 'Jhalak',
'datedefault' => 'Koi pasand nai',
'prefs-beta' => 'Nawaa features',
'prefs-datetime' => 'Tarik aur time',
'prefs-labs' => 'Try kare waala features',
'prefs-wiki_user-pages' => 'Sadasya ke panna',
'prefs-personal' => 'Sadasya ke profile',
'prefs-rc' => 'Nawaa badlao',
'prefs-watchlist' => 'Dhyan suchi',
'prefs-watchlist-days' => 'Dhyan suchi me ketna roj dekhawa jaae:',
'prefs-watchlist-days-max' => 'Jaada se jaada $1 {{PLURAL:$1|din|din}}',
'prefs-watchlist-edits' => 'Barraa dhyan suchi me jaada se jaada ketna badlao dekhawa jaae:',
'prefs-watchlist-edits-max' => 'Jaada se jaada: 1000',
'prefs-watchlist-token' => 'Dhyan suchi ke nisani:',
'prefs-misc' => 'Futkar',
'prefs-resetpass' => 'Password badlo',
'prefs-changeemail' => 'E-mail badlo',
'prefs-setemail' => 'Ek E-mail address ke banao',
'prefs-email' => 'E-mail ke option',
'prefs-rendering' => 'Dekhe me kaise lage hai',
'saveprefs' => 'Save karo',
'resetprefs' => 'Binaa bachawa gias badlao ke mitao',
'restoreprefs' => 'Sab default settings ke pahile jaise karo',
'prefs-editing' => 'Badaltaa hai',
'prefs-edit-boxsize' => 'Edit window ke size.',
'rows' => 'Line:',
'columns' => 'Column:',
'searchresultshead' => 'Khojo',
'resultsperpage' => 'Panna ke ketna dafe dekha gais hai:',
'stub-threshold' => 'Threshold ke khatir <a href="#" class="stub">stub link</a> formatting (bytes):',
'stub-threshold-disabled' => 'Band kar dewa gais hae',
'recentchangesdays' => 'Nawaa badlao me ketna roj dekhawa jaae:',
'recentchangesdays-max' => '(sab se jaada $1 {{PLURAL:$1|din|din}})',
'recentchangescount' => 'Default se ketnaa badlao ke dekhae ke chaahi:',
'prefs-help-recentchangescount' => 'Isme hai haali ke badlao, panna ke itihaas aur loga.',
'prefs-help-watchlist-token' => 'Ii jaankari me gupt sabd bhare se aap ke dhyan suchi ke khatir ek RSS feed ban jaai.
Koi bhi jan, jon ki ii gupt sabd ke jaanat hoi, aap ke dhyan suchi ke parre saki, tab aap achchha se gupt sabd ke sochna.
Hian pe ek, apne se banaa sabd hae, jiske aap kaam me laae saktaa hae: $1',
'savedprefs' => 'Aap ke pasand ke save kar lewa gais hai.',
'timezonelegend' => 'Time ke zone:',
'localtime' => 'Sthaniye samay:',
'timezoneuseserverdefault' => 'Wiki default ke kaam me laao ($1)',
'timezoneuseoffset' => 'Aur koi (offset ke specify karo)',
'timezoneoffset' => 'Offset¹:',
'servertime' => 'Server ke time:',
'guesstimezone' => 'Browser se bharo',
'timezoneregion-africa' => 'CSS ke aapan khatir badlo',
'timezoneregion-america' => 'JS ke aapan khatir badlo',
'timezoneregion-antarctica' => 'Antarctica',
'timezoneregion-arctic' => 'Arctic',
'timezoneregion-asia' => 'Asia',
'timezoneregion-atlantic' => 'Atlantic Ocean',
'timezoneregion-australia' => 'Australia',
'timezoneregion-europe' => 'Europe',
'timezoneregion-indian' => 'Indian Ocean',
'timezoneregion-pacific' => 'Pacific Ocean',
'allowemail' => 'Aur sadasya se e-mail enable karo',
'prefs-searchoptions' => 'Khojo',
'prefs-namespaces' => 'Naam:',
'defaultns' => 'Default se ii namespaces me khojo:',
'default' => 'baaki',
'prefs-files' => 'File ke naam',
'prefs-custom-css' => 'CSS ke aapan khatir badlo',
'prefs-custom-js' => 'Ruchi ke anusar JS',
'prefs-common-css-js' => 'Sab skins ke khatir, baata gais CSS/JavaScript',
'prefs-reset-intro' => 'Aap ii panna ke kaam me laae ke site defaults ke aapan preferences ke reset kare sakta hai.
Iske pahile jaise nai karaa jaawe sake hai.',
'prefs-emailconfirm-label' => 'E-mail ke confirm karaa jaawe hai:',
'prefs-textboxsize' => 'editing window ke size',
'youremail' => 'E-mail:',
'wiki_username' => 'Sadasya ke naam:',
'uid' => 'Sadasya ke pahchaan:',
'prefs-memberingroups' => '{{PLURAL:$1|group|groups}} ke member:',
'prefs-registration' => 'Registration kare ke time:',
'yourrealname' => 'Asli naam:',
'yourlanguage' => 'Bhasa:',
'yourvariant' => 'Bahasa ke variant:',
'prefs-help-variant' => 'Ii panna ke dekhae ke khatir, aap ke pasand ke variant nai to orthography',
'yournick' => 'Chinh:',
'prefs-help-signature' => 'Baat waala panna me aap ke bichar ke "<nowiki>~~~~</nowiki>" se sign kare ke chaahi jiske signature aur timestamp me badal dewa jaai.',
'badsig' => 'Invalid raw signature; HTML tags ke check karo.',
'badsiglength' => 'Signature bahut lambaa hai.
Iske $1 {{PLURAL:$1|character|characters}} se kamti rahe ke chaahi.',
'yourgender' => 'Admi ki aurat:',
'gender-unknown' => 'Khaas ruup nai dewa gais hae',
'gender-male' => 'Admi',
'gender-female' => 'Aurat',
'prefs-help-gender' => 'Optional: used for gender-correct addressing by the software. This information will be public.',
'email' => 'E-mail',
'prefs-help-realname' => 'Asli naam ke jaruri nai hai lekin agar jo aap aapan naam diya hai to iske aap ke kaam ke pahachane khatir kaam me lawa jai.',
'prefs-help-email' => 'E-mail address ke jaruri nai hai, lekin isse nawaa password aap ke lage bheja jaae sake hai agar aap aapan password bhul gaya tab.',
'prefs-help-email-others' => 'Aap aapan wiki_user, nai to baat waala panna, pe se aur log ke aap se baat kare ke ijaajat de sakta hae, bina aapan identitiy de ke.',
'prefs-help-email-required' => 'E-mail address ke jaruri hai.',
'prefs-info' => 'Basic jaankari',
'prefs-i18n' => 'Sab des ke khatir',
'prefs-signature' => 'Chinh',
'prefs-dateformat' => 'Tarik ke format',
'prefs-timeoffset' => 'Time ke offset',
'prefs-advancedediting' => 'Uchchaa pasand',
'prefs-advancedrc' => 'Uchchaa pasand',
'prefs-advancedrendering' => 'Uchchaa pasand',
'prefs-advancedsearchoptions' => 'Uchchaa pasand',
'prefs-advancedwatchlist' => 'Uchchaa pasand',
'prefs-displayrc' => 'Choice dekhao',
'prefs-displaysearchoptions' => 'Choice dekhao',
'prefs-displaywatchlist' => 'Choice dekhao',
'prefs-diffs' => 'Farka',

# wiki_user preference: e-mail validation using jQuery
'email-address-validity-valid' => 'E-mail address kanuni hae',
'email-address-validity-invalid' => 'Ek kanuni e-mail ke likho',

# wiki_user rights
'wiki_userrights' => 'Sadasya ke adhikaar ke chalao',
'wiki_userrights-lookup-wiki_user' => 'Sadasya ke group ke manage karo',
'wiki_userrights-wiki_user-editname' => 'Ek wiki_username ke enter karo:',
'editwiki_usergroup' => 'wiki_user groups ke badlo',
'editingwiki_user' => "Sadasya '''[[wiki_user:$1|$1]]'''  ke adhikaar ke badlaa jaawe hae $2",
'wiki_userrights-editwiki_usergroup' => 'wiki_user groupske badlo',
'savewiki_usergroups' => 'wiki_user groups ke save karo',
'wiki_userrights-groupsmember' => 'Iske member hai:',
'wiki_userrights-groupsmember-auto' => 'Hian ke bhi member hae:',
'wiki_userrights-groups-help' => 'Aap jon group me ii sadasya hai ke badle sakta hai:
* Ek checked box ke matlab hai ki sadasya ii group me hai.
* Ek unchecked box ke matlab hai ki sadasya ii group me nai hai.
* Ek * ke matlab hai ki aap group ke jorre ke baad hatae nai sakta hai, nai to hatae ke baad jorre nai sakta hai.',
'wiki_userrights-reason' => 'Kaaran:',
'wiki_userrights-no-interwiki' => 'Aap ke duusra wiki me wiki_user rights ke badle ke adhikaar nai hai.',
'wiki_userrights-nodatabase' => 'Database $1 abhi hai nai, nai to local nai hai.',
'wiki_userrights-nologin' => 'Sadasya ke wiki_user rights de ke khatir, ap ke chaahi ki aap [[Special:wiki_userLogin|log in]] karo ek administrator ke account se.',
'wiki_userrights-notallowed' => 'Aap ke account ke wiki_user rights de aur hatae ke adhikar nai hai.',
'wiki_userrights-changeable-col' => 'Groups jiske aap badle sakta hai',
'wiki_userrights-unchangeable-col' => 'Groups jiske aap badle nai sakta hai',

# Groups
'group' => 'Jhund:',
'group-wiki_user' => 'Sadasya',
'group-autoconfirmed' => 'Autoconfirmed sadasya',
'group-bot' => 'Bots',
'group-sysop' => 'Sysops',
'group-bureaucrat' => 'Bureaucrats',
'group-suppress' => 'Oversights',
'group-all' => '(sab)',

'group-wiki_user-member' => '{{GENDER:$1|sadasya}}',
'group-autoconfirmed-member' => '{{GENDER:$1|autoconfirmed sadasya}}',
'group-bot-member' => '{{GENDER:$1|bot}}',
'group-sysop-member' => '{{GENDER:$1|administrator}}',
'group-bureaucrat-member' => '{{GENDER:$1|bureaucrat}}',
'group-suppress-member' => '{{GENDER:$1|oversight}}',

'grouppage-wiki_user' => '{{ns:project}}:Sadasya',
'grouppage-autoconfirmed' => '{{ns:project}}:Autoconfirmed sadasya',
'grouppage-bot' => '{{ns:project}}:Bots',
'grouppage-sysop' => '{{ns:project}}:Administrators',
'grouppage-bureaucrat' => '{{ns:project}}:Bureaucrats',
'grouppage-suppress' => '{{ns:project}}:Oversight',

# Rights
'right-read' => 'Panna ke parrho',
'right-edit' => 'Panna ke badlo',
'right-createpage' => 'Panna banao (jon ki salah kare waala panna nai hai)',
'right-createtalk' => 'Salah kare waala panna banao',
'right-createaccount' => 'Nawaa sadasya ke account banao',
'right-minoredit' => 'Badlao ke chhota mark karo',
'right-move' => 'Panna ke naam badlo',
'right-move-subpages' => 'Panna aur uske subpanna ke naam badlo',
'right-move-rootwiki_userpages' => 'Root sadasya ke panna ke naam badlo',
'right-movefile' => 'File ke naam badlo',
'right-suppressredirect' => 'Panna ke naam badalte ke time, purana naam se redirect ke nai banao.',
'right-upload' => 'File ke upload karo',
'right-reupload' => 'Ek abhi waala file ke uppar se likho',
'right-reupload-own' => 'Ek abhi waala file jiske aap upload karaa hai ke uppar likh do',
'right-reupload-shared' => 'Share media repository ke file ke uppar likh do',
'right-upload_by_url' => 'URL address se ek file ke upload karo',
'right-purge' => 'Site cache se ek panna ke mina fir se puchhe mitae do',
'right-autoconfirmed' => 'Semi-protected panna ke badlo',
'right-bot' => 'Automated process ke rakam treat karo',
'right-nominornewtalk' => 'Salah waalaa panaa me chhota badlao ke kaaran nawaa sandes ke prompt nai dekhao',
'right-apihighlimits' => 'API queries me uppar ke limit ke kaam me lao',
'right-writeapi' => 'Likhe waala API ke kaam me lawa jaawe hae',
'right-delete' => 'Panna ke mitao',
'right-bigdelete' => 'Barraa itihaas waala panna ke mitao',
'right-deletelogentry' => 'Mitawa aur khola gais panna ke baare me log entires',
'right-deleterevision' => 'Panna ke khaas badlao ke mitao nai to bachao',
'right-deletedhistory' => 'Mitawa gais itihass ke entry ke binaa saathe waala text ke dekho',
'right-deletedtext' => 'Mitawa gais text aur mitawa gais badlao ke biich waala badlao ke dekho',
'right-browsearchive' => 'Mitawa gais panna ke khojo',
'right-undelete' => 'Ek panna ke undelete karo',
'right-suppressrevision' => 'Review and restore revisions hidden from Sysops',
'right-suppressionlog' => 'Private logs ke dekho',
'right-block' => 'Duusra sadasya ke badle se roko',
'right-blockemail' => 'Sadasya ke email bheje se roko',
'right-hidewiki_user' => 'wiki_username ke roko, jisse ki janta iske dekhe nai sake',
'right-ipblock-exempt' => 'IP blocks, auto-blocks aur range blocks ke bagal se aae jao',
'right-proxyunbannable' => 'Proxies ke automatic blocks ke bypass karo',
'right-unblockself' => 'Apne ke unblock karo',
'right-protect' => 'Protection level ke badlo aur bachawa gais panna ke badlo',
'right-editprotected' => 'Bachawa gais panna ke badlo (without cascading protection)',
'right-editinterface' => 'wiki_user interface ke badlo',
'right-editwiki_usercssjs' => 'Duusra sadsya ke CSS aur JS files ke badlo',
'right-editwiki_usercss' => 'Duusra sadsya ke CSS files ke badlo',
'right-editwiki_userjs' => 'Duusra sadsya ke JS files ke badlo',
'right-rollback' => 'Jaldi se ek khaas panna ke pichhla sadasya ke badlao ke ulta kar do',
'right-markbotedits' => 'Rolled-back edits ke bot edits mark karo',
'right-noratelimit' => 'Rrate limits se koi asar nai hai',
'right-import' => 'Duusra wiki me se panna ke import karo',
'right-importupload' => 'Ek file upload se panna ke import karo',
'right-patrol' => 'Duusra ke badlao pr pahraa do',
'right-autopatrol' => 'Aapan badlao pe apne se pahraa do',
'right-patrolmarks' => 'Haali ke badlao ke pahraa ke mark ke dekho',
'right-unwatchedpages' => 'Unwatched panna ke suchi ke dekho',
'right-mergehistory' => 'Panna ke itihass ke jorro',
'right-wiki_userrights' => 'Sadasya ke adhikar ke badlo',
'right-wiki_userrights-interwiki' => 'Duusra wiki me sadasya ke adhikar ke badlo',
'right-siteadmin' => 'Database ke band karo aur kholo',
'right-override-export-depth' => 'Panna aur jurra panna, 5 ke gahirrai talak, ke export karo',
'right-sendemail' => 'Duusra sadasya ke lage e-mail bhejo',
'right-passwordreset' => 'Password ke badle waala e-mail ke dekho',

# wiki_user rights log
'rightslog' => 'Sadasya adhikar suchi',
'rightslogtext' => 'Ii sadasya ke adhikar ke badlao ke suchi hai.',
'rightslogentry' => '$1 ke group ke membership ke $2 se $3 badal dia hai',
'rightslogentry-autopromote' => 'ke apne se $2 se $3 ke promotion dewa gais',
'rightsnone' => '(koi nai hai)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'ii panna ke parrho',
'action-edit' => 'ii panna ke badlo',
'action-createpage' => 'panna banao',
'action-createtalk' => 'salah waala panna banao',
'action-createaccount' => 'ii wiki_user account ke banao',
'action-minoredit' => 'ii badlao ke chhota mark karo',
'action-move' => 'ii panna ke naam badlo',
'action-move-subpages' => 'ii panna, aur iske subpanna ke naam badal do',
'action-move-rootwiki_userpages' => 'root sadasya panna ke naam badlo',
'action-movefile' => 'ii file ke naam badlo',
'action-upload' => 'ii file ke upload karo',
'action-reupload' => 'ii file ke uppar se likh do',
'action-reupload-shared' => 'Ii file ke shared repository me bypass karo',
'action-upload_by_url' => 'ek URL address se ii file ke upload karo',
'action-writeapi' => 'Likhe waala API ke use karo',
'action-delete' => 'ii panna ke mitao',
'action-deleterevision' => 'ii badlao ke mitao',
'action-deletedhistory' => 'i panna ke mitawa waala itihaas dekho',
'action-browsearchive' => 'mitawa gais panna ke khojo',
'action-undelete' => 'ii panna ke fir se pahile jaise karo do',
'action-suppressrevision' => 'ii lukawa gais badlao ke fir se dekh ke pahile jaise karo',
'action-suppressionlog' => 'ii private log ke dekho',
'action-block' => 'ii sadasya ke panna badle se roko',
'action-protect' => 'ii panna ke protection levels ke badlo',
'action-rollback' => 'jaldi se pichhla sadasya, jon ki koi panna ke badlis rahaa, ke badlao ke pahile jaise kar do',
'action-import' => 'duusra wiki me se ii panna ke import karo',
'action-importupload' => 'ek file upload se ii panna ke import karo',
'action-patrol' => 'duusra jan ke badlao pe pahraa do',
'action-autopatrol' => 'aapan badlao pe pahraa do',
'action-unwatchedpages' => 'unwatched panna ke suchi dekho',
'action-mergehistory' => 'ii panna ke itihass ke ek karo',
'action-wiki_userrights' => 'sab sadasya ke adhikar ke badlo',
'action-wiki_userrights-interwiki' => 'duusra wiki ke sadasya ke adhikar ke badlo',
'action-siteadmin' => 'database ke band karo nai to kholo',
'action-sendemail' => 'E-mail bhejo',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|badlao|badlao}}',
'recentchanges' => 'Nawaa badlao',
'recentchanges-legend' => 'Nawaa badlao options',
'recentchanges-summary' => 'Wiki me ii panna ke nawaa badlao pe dhyan rakho.',
'recentchanges-feed-description' => 'Abhi haali me bhae ii wiki ke feed me ke track karo.',
'recentchanges-label-newpage' => 'Ii badlao ek nawaa panna banais hae',
'recentchanges-label-minor' => 'Ii ek chhota badlao hae',
'recentchanges-label-bot' => 'Ii badlao ke ek bot karis hae',
'recentchanges-label-unpatrolled' => 'Ii badlao pe abhi pahraa nai dewa gais hae.',
'rcnote' => "Niche {{PLURAL:$1|hai '''1''' badlao|aakhri hai '''$1''' badlao}} pahile {{PLURAL:$2|din|'''$2''' din}}, $5, $4 talak.",
'rcnotefrom' => "Niche '''$2''' se badlao hai ('''$1''' tak )",
'rclistfrom' => '$1 se suruu kar ke nawaa badlao dekhao',
'rcshowhideminor' => '$1 chhota badlao',
'rcshowhidebots' => '$1 bots',
'rcshowhideliu' => '$1 logged-in sadasya',
'rcshowhideanons' => '$1 bina naam ke sadasya',
'rcshowhidepatr' => '$1 pahra dewa gae sampadan',
'rcshowhidemine' => '$1 hamaar sampadan',
'rclinks' => 'Pichhla $1 badlao pichle $2 din me dekhao <br />$3',
'diff' => 'farka',
'hist' => 'itihaas',
'hide' => 'Chhupao',
'show' => 'Dekhao',
'minoreditletter' => 'm',
'newpageletter' => 'N',
'boteditletter' => 'b',
'number_of_watching_wiki_users_pageview' => '[$1 {{PLURAL:$1|wiki_user|wiki_users}} ke dekhta hae]',
'rc_categories' => 'Categories me limit ("|" se separate  karo)',
'rc_categories_any' => 'Koi bhi',
'rc-change-size-new' => '$1 {{PLURAL:$1|byte|bytes}} badlao ke baad',
'newsectionsummary' => '/* $1 */ nawaa vibhag',
'rc-enhanced-expand' => 'Details dekhao (JavaScript jaruri hai)',
'rc-enhanced-hide' => 'Details ke lukao',
'rc-old-title' => 'Sab se pahile "$1" ke naam ke niche banawa gais rahaa',

# Recent changes linked
'recentchangeslinked' => 'Panna ke jurraa badlao',
'recentchangeslinked-feed' => 'Panna ke jurraa badlao',
'recentchangeslinked-toolbox' => 'Panna ke jurraa badlao',
'recentchangeslinked-title' => '"$1" ke badlao',
'recentchangeslinked-noresult' => 'Linked pages me ii time ke bhitar koi changes nai bhae.',
'recentchangeslinked-summary' => "Ii panna pahile waala badlao jon panna hian pe jurra hae ke suchi de hae (nai to vises vibhag ke sadasya).
Panna jon [[Special:Watchlist|aap ke dhyan suchi]] me hae  '''mota''' kara gais hae.",
'recentchangeslinked-page' => 'Panna ke naam:',
'recentchangeslinked-to' => 'Badalo jon ki given panna se linked hai ke dekhao',

# Upload
'upload' => 'File ke upload karo',
'uploadbtn' => 'File upload karo',
'reuploaddesc' => 'Upload ke cancel kar ke upload form pe lauto',
'upload-tryagain' => 'Badla gais file ke description bhejo',
'uploadnologin' => 'Aap abhi loged in nai hai',
'uploadnologintext' => 'Aap ke [[Special:wiki_userLogin|logged in]] kare ke chaahi, file upload kare ke khatir.',
'upload_directory_missing' => 'Upload directory ($1) nai hai aur webserver iske nai banae sakis hai.',
'upload_directory_read_only' => 'Upload directory ($1) ke webserver nai likhe sake hai.',
'uploaderror' => 'Upload nai hoe paais hai',
'upload-recreate-warning' => '"\'Chetauni: Ii naam ke file ke mitae dewa gais rahaa, nai to naam badla gais rahaa."\'
Hian pe mitae waala suchi aur naam badle waala suchi ke aap ke dekhe ke khatir dewa gais hae:',
'uploadtext' => "Niche waala form ke use kar ke file upload karo.
Pahile upload karaa file ke dekhe khatir [[Special:FileList|list of uploaded files]] jao, (re)uploads are also logged in the [[Special:Log/upload|upload log]], deletions in the [[Special:Log/delete|deletion log]].

To include a file in a page, use a link in one of the following forms:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' to use the full version of the file
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|alt text]]</nowiki></code>''' to use a 200 pixel wide rendition in a box in the left margin with 'alt text' as description
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' for directly linking to the file without displaying the file",
'upload-permitted' => 'File types jiske ijajat hai: $1.',
'upload-preferred' => 'Kon rakam ke file ke mangtaa hai: $1.',
'upload-prohibited' => 'Ii rakam ke file ke upload nai karaa jaae sake hai: $1.',
'uploadlog' => 'upload karaa gae file ke log',
'uploadlogpage' => 'Suchi ke upload karo',
'uploadlogpagetext' => 'Niche ke list me haali ke uplaod karaa gae file ke suchi hai.
Visual overview ke khatir [[Special:NewFiles|nawaa file ke gallery]] ke dekho.',
'filename' => 'Filename',
'filedesc' => 'Sanchhipt me',
'fileuploadsummary' => 'Sanchhipt me:',
'filereuploadsummary' => 'File ke badlao:',
'filestatus' => 'Copyright ke haalat:',
'filesource' => 'File ke source:',
'uploadedfiles' => 'Files jiske upload karaa gais hai.',
'ignorewarning' => 'Chetauni pe dhyan nai de ke file ke save karo',
'ignorewarnings' => 'Koi bhi chetauni pe dhyan nai do',
'minlength1' => 'File ke naam me kamti se kamti ek letter hoe ke chaahi.',
'illegalfilename' => 'Filename "$1" me uu akchhar hai jiske panna ke title me allowed nai hai.
Maharbaani kar ke file ke naam ke badal ke fir se upload kare ke kosis karo.',
'filename-toolong' => 'File ke naam 240 bytes se lamba nai rahe sake hae.',
'badfilename' => 'File ke naam badak ke "$1" kar dewa gais hai.',
'filetype-mime-mismatch' => 'File ke extension ".$1", jon rakam ke MIME hae, se nai mile hae ($2).',
'filetype-badmime' => 'MIME rakam "$1" ke upload kare ke ijajat nai hai.',
'filetype-bad-ie-mime' => 'Ii file ke upload nai kare sakta hai kahe ki Internet Explorer iske "$1" ke rakam dekhi, jon ki allowed nai hai aur khatarnaat rakam ke file jaana jaae hai.',
'filetype-unwanted-type' => "'''\".\$1\"''' rakam ke file ke hian nai maaga jaae hai.
Maange waala {{PLURAL:\$3|file ke rakam hai|file ke rakam hai}} \$2.",
'filetype-banned-type' => '\'\'\'".$1"\'\'\'{{PLURAL:$4| ke rakam ke file hian pe allowed nai hai.}}
Allowed {{PLURAL:$3|rakam ke file hai|rakam ke fle hai}} $2.',
'filetype-missing' => 'File ke koi extension nai hai (jaise ki ".jpg").',
'empty-file' => 'Aap ke bheja gais panna khaali hae.',
'file-too-large' => 'Aap ke bheja gais panna bahut barraa hae.',
'filename-tooshort' => 'File ke naam bahut chhota hae.',
'filetype-banned' => 'Ii rakam ke file ke rok dewa gais hae.',
'verification-error' => 'Ii file ke verify nai karaa jaae sakaa hae.',
'hookaborted' => 'Jon chij ke aap badle mangaa rahaa, ke extension hook rok diis hae.',
'illegal-filename' => 'Ii naam ke file ke banae ke ijajat nai hae.',
'overwrite' => 'Abhi ke file ke uppar fir se likhe ke ijajat nai hae.',
'unknown-error' => 'Ek anjaan galti hoe gais hae.',
'tmp-create-error' => 'Temporary file ke nai banae sakaa hae.',
'tmp-write-error' => 'Temporary file me likhe me galti hoe gais hae.',
'large-file' => 'Ii salah hai ki file ke size $1 se barraa nai rahe;
ii file hai $2',
'largefileserver' => 'Ii file, jetna ki server allow kare hai, se barraa hai.',
'emptyfile' => 'Jon file aap upload karaa rahaa uu khaali rahaa.
Ii saait file ke naam likhe me typing mistake ke kaaran hoi.
Meharbaani kar ke ii dekho ki aap such me ii file upload kare mangtaa hai ki nai.',
'windows-nonascii-filename' => 'Ii wiki me password jisme special characters hae, ke kaam me nai lawa jaae sake hae.',
'fileexists' => 'Ii naam ke file abhi hai, meharbani kar ke check karo <strong>[[:$1]]</strong> agar jo aap sure nai hai ki aap iske badle mangta hai.
[[$1|thumb]]',
'filepageexists' => 'Ii file ke description ke <strong>[[:$1]]</strong> me banae dewa gais rahaa, lekin ii naam ke koi file abhi nai hai.
Aap jon summary likhtaa hai uu panna ke description me nai dekhai.
Description ke dekhae ke khatir, aap ke iske manually badle ke parri.
[[$1|thumb]]',
'fileexists-extension' => 'Ii rakam ke naam ke ek aur file hai: [[$2|thumb]]
* Uploading file ke naam: <strong>[[:$1]]</strong>
* Abhi ke file ke naam: <strong>[[:$2]]</strong>
Meharbani kar ke duusra naam chuno.',
'fileexists-thumbnail-yes' => "Ii janawe hai ki ii file ek chhota chapa hai ''(thumbnail)''. [[$1|thumb]]
Meharbani kar ke file ke check karo <strong>[[:$1]]</strong>.
Agar jo check karaa gais file wahi chhapa ke original size hai tab ek aur thumbnail ke upload kare ke jaruri nai hai.",
'file-thumbnail-no' => "File ke naam <strong>$1</strong> se suruu hoe hai.
Ii janawe hai ki ii chhota size ke chapa hai ''(thumbnail)''.
Agar jo aap ke lage ii chapa full resolution me hai tab uske upload karna, nai to file ke naam badlo.",
'fileexists-forbidden' => 'Ii naam ke file abhi hai, aur iske badlawa nai jaae sake hai.
Agar jo aap fir bhi aapan file ke upload kare mangta hai, tab pichhe jaae ke nawaa naam use karo. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Ii naam ke file abhi shared file repository me hai.
Agar jo aap fir bhi aapan file upload kare manta hai tab pichhe jaae ke nawaa naam use karo. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'Ii file following file ke duplicate hai {{PLURAL:$1|file|files}}:',
'file-deleted-duplicate' => 'Yahii rakam ke ek aur file ([[:$1]]) ke pahile delete karaa gais hai. Aap ke file ke deletion history ke check kare ke chaahi, upload kare se pahile.',
'uploadwarning' => 'Upload ke baare me chetauni',
'uploadwarning-text' => 'Meharbani kar ke file ke baaare me aur jankari ke niche badal ke aur fir se kosis karo.',
'savefile' => 'File ke save karo',
'uploadedimage' => '"[[$1]]" ke upload kar dewa gae',
'overwroteimage' => '"[[$1]]" ke nawaa version ke upload karaa gais hai',
'uploaddisabled' => 'Uploads ke disable kar dewa gais hai',
'copyuploaddisabled' => 'URL se upload kare pe rok lagae dewa gais hae.',
'uploadfromurl-queued' => 'Aap ke upload ke line me kar dewa gais hae.',
'uploaddisabledtext' => 'File uploads ke disable kar dewa gais hai.',
'php-uploaddisabledtext' => 'File uploads ke PHP me disable kar dewa gais hai. Meharbani kar ke file_uploads setting ke check karo.',
'uploadscripted' => 'Ii file me HTML nai to script code hai jiske web browser erroneously interpret kare sake hai.',
'uploadvirus' => 'Ii file me virus hai! Details: $1',
'uploadjava' => 'Ii file ek ZIP file hae jisme Java .class ke file hae.
Java ke uplaod kare ke anumati nai hae, kaaheki isse kuchh security restrictions ke bypass karaa jaae sake hae.',
'upload-source' => 'Suruu waala file',
'sourcefilename' => 'Suruu waala file ke naam:',
'sourceurl' => 'Suruu waala URL',
'destfilename' => 'Manjil waala file ke naam:',
'upload-maxfilesize' => 'jaada se jaada file size: $1',
'upload-description' => 'File ke baare me jaankari',
'upload-options' => 'Upload kare ke version',
'watchthisupload' => 'Ii panna pe dhyan rakhho',
'filewasdeleted' => 'Ii naam ke file ke pahile upload kar ke baad me delete karaa gais hai.
Aap ke chaahi ki aap $1 check kar lo fir se upload kare se pahile.',
'filename-bad-prefix' => "Jon file aap upload kartaa hai uske naam '''\"\$1\"''' se suruu hoe hai, jon ki non-descriptive naam hai jiske jaada kar ke digital camera automatically assign kare hai.
Meharbaani kar ke aur jaada descriptive filename chose karo.",
'upload-success-subj' => 'Upload safal bhais',
'upload-success-msg' => 'Aap ke upload [$2] se safal bhais. Iske hian pe dekhe saktaa hae: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'Upload kare me kuchh karrbarr hoe gais hae',
'upload-failure-msg' => 'Aap ke [$2] se uploadkare  me kuchh garrbarr hoe gais hae:

$1',
'upload-warning-subj' => 'Upload ke baare me chetauni',
'upload-warning-msg' => '[$2] se upload kare me kuch karrbarr hoe gais hae. Aap  [[Special:Upload/stash/$1|upload form]] me laut ke ii garrbarri ke sidha kare sakta hae.',

'upload-proto-error' => 'Protocol right nai hai',
'upload-proto-error-text' => 'Duur ke upload maange hai URLs jon ki suruu hoe hai <code>http://</code> nai to <code>ftp://</code>.',
'upload-file-error' => 'Bhitri error',
'upload-file-error-text' => 'Server pe temporary file banae ke time ek bhitri error hoe gais.
[[Special:Listwiki_users/sysop|administrator]] ke contact karo.',
'upload-misc-error' => 'Upload kare ke time koi garrbarr hoe gais hae',
'upload-misc-error-text' => 'Upload kare ke time ek unknown error hoe gais hai.
Meharbani kar ke verify karo ki URL valid aur accessible hai aur fir se kosis karo.
Agar jo problem fir nai khatam hoe tab [[Special:Listwiki_users/sysop|administrator]] ke contact karo.',
'upload-too-many-redirects' => 'Ii URL me bahut jaada redirects hae.',
'upload-unknown-size' => 'Nai pataa ki ketnaa barraa hae',
'upload-http-error' => 'Ek HTTP galti hoe gais hae: $1',
'upload-copy-upload-invalid-domain' => 'Ii domain se copy upload nai karaa jaae sake hae.',

# File backend
'backend-fail-stream' => 'File $1 ke stream nai kare sakaa hae.',
'backend-fail-backup' => 'File $1 ke backuo nai kare sakaa hae.',
'backend-fail-notexists' => 'Ii file $1 nai hae.',
'backend-fail-hashes' => 'Compare kare ke khatir file hashes ke nai paawa jaae sakaa hae.',
'backend-fail-notsame' => 'Ek duusra file $1 pe hae.',
'backend-fail-invalidpath' => '$1, valid storage path nai hae.',
'backend-fail-delete' => 'File $1 ke nai mitae sakaa hae.',
'backend-fail-alreadyexists' => '$1 naam ke ek file abhi hae.',
'backend-fail-store' => '$2 pe file $1 ke nai bachae sakaa hae.',
'backend-fail-copy' => 'File $1 ke $2 me nai copy kare sakaa hae',
'backend-fail-move' => 'File $1 ke hatae ke $2 nai kare sakaa hae.',
'backend-fail-opentemp' => 'Temporary file ke nai khole sakaa hae.',
'backend-fail-writetemp' => 'Temporary file me nai likhe sakaa hae.',
'backend-fail-closetemp' => 'Temporary file ke nai band kare sakaa hae.',
'backend-fail-read' => 'File $1 ke nai parrhe sakaa hae.',
'backend-fail-create' => 'File $1 pe nai likha jaae sake hae.',
'backend-fail-maxsize' => 'File $1 ke nai likhe sakaa hae kaahe ki ii {{PLURAL:$2|ek byte|$2 byte}} se barraa hae.',
'backend-fail-readonly' => 'Storage backend "$1" abhi khaali read-only hae. Iske kaaran hae: "$2"',
'backend-fail-synced' => 'File "$1" internal storage backends me ek inconsistent state me hae',
'backend-fail-connect' => 'Storage backend "$1" se connect nai kare sakaa hae.',
'backend-fail-internal' => 'Storage backend "$1" me ek unknown error hoe gais hae.',
'backend-fail-contenttype' => 'Ii nai pataa lagae sakaa hae ki "$1" me bachae ke khaatir file kon rakam ke hae.',
'backend-fail-batchsize' => 'Storage backend ke  $1 file {{PLURAL:$1|operation|operations}} ke ek batch ke dewa gais hae ; limit  $2 {{PLURAL:$2|operation|operation}} hae.',
'backend-fail-usable' => 'File $1 me nai likhe, nai to nai parrhe, sakaa hae kaahe ki iske khatir jaruri ijajat nai hae, nai to directories/containers nai hae.',

# File journal errors
'filejournal-fail-dbconnect' => 'Storage backend "$1" ke khatir journal database se nai jorre sakaa hae.',
'filejournal-fail-dbquery' => 'Storage backend "$1" ke khatir journal database ke nai badle sakaa hae.',

# Lock manager
'lockmanager-notlocked' => '"$1" ke  nai khole sakaa hae; ii lock nai hae.',
'lockmanager-fail-closelock' => '"$1" ke khatir lock file ke nai band kare sakaa hae.',
'lockmanager-fail-deletelock' => '"$1" ke khatir lock file ke nai mitae sakaa hae.',
'lockmanager-fail-acquirelock' => '"$1" ke khatir lock nai pawa gais hae.',
'lockmanager-fail-openlock' => '"$1" ke khatir lock file ke nai khola jaae sake hae',
'lockmanager-fail-releaselock' => '"$1" ke khatir lock file ke nai khole sakaa hae.',
'lockmanager-fail-db-bucket' => 'Bucket $1 me enough lock database ke contact nai kare sakaa hae',
'lockmanager-fail-db-release' => 'Database $1 me lock ke khole nai sakaa hae.',
'lockmanager-fail-svr-acquire' => 'Server $1 me lock ke nai paae sakaa hae.',
'lockmanager-fail-svr-release' => 'Server $1 me lock ke khole nai sakaa hae.',

# ZipDirectoryReader
'zip-file-open-error' => 'File ke ZIP check ke khatir khole ke time kuchh karrgarri hoe gais hae.',
'zip-wrong-format' => 'Dewa gais file ek ZIP file nai hae.',
'zip-bad' => 'Ii file kharaab hoe gais hae, nai to, parrhe laek ke ZIP file nai hae.
Iske security ke khatir nai check karaa jaae sake hae.',
'zip-unsupported' => 'Ii file ek ZIP file hae jon ki aisan ZIP features ke kaam me laae hae jiske MediaWiki support nai kare hae.
Iske security ke khatir nai check karaa jaae sake hae.',

# Special:UploadStash
'uploadstash' => 'Gupt file ke upload karo',
'uploadstash-summary' => 'Ii panna se uu file pe jaawa jaae sake hae jiske upload karaa gais hae (nai to upload karaa jaawe hae) lekin abhi talak wiki me publish nai karaa gais hae.
Ii sab panna khaali uu sadasya ke dekhae hae jon ki iske uplaod karis hae.',
'uploadstash-clear' => 'Gupt file ke hatao',
'uploadstash-nofiles' => 'Aap ke lage koi gupt file nai hae.',
'uploadstash-badtoken' => 'Aap uu chij nai kare saktaa hae, saait ii kaaran se ki aap ke ijaajat khalaas hoe gais hae. Fir se kosis karo.',
'uploadstash-errclear' => 'File ke hatawa nai jaae sakaa hae.',
'uploadstash-refresh' => 'File ke suchi ke fir se dekhao',
'invalid-chunk-offset' => 'Kharaab chunk offset',

# img_auth script messages
'img-auth-accessdenied' => 'ijajat nai hae',
'img-auth-nopathinfo' => 'Aap ke server ke ii jankari de khatir set up nai karaa gais hae
Saait ii CGI-based hoi aur img_auth ke nai support karat hoi.
https://www.mediawiki.org/wiki/Manual:Image_Authorization ke dekho.',
'img-auth-notindir' => 'Maanga gais path configured upload directory me me nai hae.',
'img-auth-badtitle' => '"$1" se kanuni title ke nai banae sakaa hae.',
'img-auth-nologinnWL' => 'Aap logged in nai hae aur "$1" whitelist me nai hae.',
'img-auth-nofile' => 'File "$1" nai hae.',
'img-auth-isdir' => 'Aap directory "$1" me jaae mangtaa hae.
Khaali file me jaawe ke ijajat hae',
'img-auth-streaming' => '"$1" ke stream karaa jaawe hae.',
'img-auth-public' => 'img_auth.php ke function private wiki se file nikale ke hae.
Ii wiki ek public wiki hae.
Puura surakchha ke khatir, img_auth.php ke band kar dewa gais hae.',
'img-auth-noread' => 'Sadasya ke "$1" parrhe ke ijajat nai hae.',
'img-auth-bad-query-string' => 'Ii URL me ek kharaab query string hae.',

# HTTP errors
'http-invalid-url' => 'URL kharaab hae: $1',
'http-invalid-scheme' => 'URL, jisme "$1" scheme hae ke support nai karaa jaawe hae.',
'http-request-error' => 'HTTP ke maang puura nai hoe sakaa, patanahi kon galti ke kaaran.',
'http-read-error' => 'HTTP ke parrhe me galti hae',
'http-timed-out' => 'HTTP ke khatir time nai hae.',
'http-curl-error' => 'URL ke laawe me galti hoe gais hae: $1',
'http-host-unreachable' => 'URL pahunche nai sakaa hae',
'http-bad-status' => 'HTTP ke maange ke time kuch garrbarr hoe gais hae: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'URL pe pahunche nai paya hai',
'upload-curl-error6-text' => 'URL tak nahi pahunche sakaa hai.
Meharbani kar ke fir se check karo ki URL correct hai aur site chale hai.',
'upload-curl-error28' => 'Upload ke time khalaas hoe gais hai',
'upload-curl-error28-text' => 'Ii site respond kare ke bahut time liis hai.
Meharbani kar ke dekho ki ii site chale hai, thora deri tak wait kar ke fir se kosis karo.
Saait aap ke kamti busy time kosis kare ke chaahi.',

'license' => 'Licence ke baare me:',
'license-header' => 'Licence ke baare me',
'nolicense' => 'Koi bhi selct nai karaa gais hai',
'license-nopreview' => '(Preview abhi taiyaar nai hai)',
'upload_source_url' => ' (ek valid, publicly accessible URL)',
'upload_source_file' => ' (aap ke computer me ek file)',

# Special:ListFiles
'listfiles-summary' => 'Ii khaas panna sab uploaded file ke dekhae hai.
Jab sadasya filter kare hae, tab sadasys ke upload karaa gais sab se nawaa file ke version ke dekhawa jaae hae.',
'listfiles_search_for' => 'Media ke naam khojo:',
'imgfile' => 'file',
'listfiles' => 'Chapa ke suchi',
'listfiles_thumb' => 'Chhota chapa',
'listfiles_date' => 'Tarik',
'listfiles_name' => 'Naam',
'listfiles_wiki_user' => 'Sadasya',
'listfiles_size' => 'Naap',
'listfiles_description' => 'Baare me',
'listfiles_count' => 'Ketna badlao rahaa',

# File description page
'file-anchor-link' => 'File',
'filehist' => 'File ke itihaas',
'filehist-help' => 'File ke dekhe khatir, jaise uu time dekhe me lagat rahaa, date/time pe click karo.',
'filehist-deleteall' => 'sab ke mitao',
'filehist-deleteone' => 'mitao',
'filehist-revert' => 'pahile jaise karo',
'filehist-current' => 'abhi waala',
'filehist-datetime' => 'Din/Time',
'filehist-thumb' => 'Chhota chapa',
'filehist-thumbtext' => '$1 waala version ke chhota chapa',
'filehist-nothumb' => 'Chhota chap anai hai',
'filehist-wiki_user' => 'Sadasya',
'filehist-dimensions' => 'Lambai aur chaurai',
'filehist-filesize' => 'File ke size',
'filehist-comment' => 'Tiprrin',
'filehist-missing' => 'File nai hai',
'imagelinks' => 'File ke kaise kaam me lawa gais hae',
'linkstoimage' => 'Ii sab panna ii file {{PLURAL:$1|panna ke jorr|$1 panna ke jorr}} se link hoe hai:',
'linkstoimage-more' => '$1 se jaada {{PLURAL:$1|panna ke jorr|panna ke jorr}} ii file se hai.
Niche ke suchi dekhae hai {{PLURAL:$1|pahila panna ke jorr|pahila $1 panna ke jorr}} khaali ii file se.
Ek [[Special:WhatLinksHere/$2|Puura suchi]] available hai.',
'nolinkstoimage' => 'Ii file se koi panna nai jurre hai.',
'morelinkstoimage' => 'Dekho [[Special:WhatLinksHere/$1|more links]] ii file se.',
'linkstoimage-redirect' => '$1 (file redirect) $2',
'duplicatesoffile' => 'Niche ke suchi waala {{PLURAL:$1|file ke dui copy hai|$1 files ke dui copy hai}} ii file ke ([[Special:FileDuplicateSearch/$2|more details]]):',
'sharedupload' => 'Ii file $1 se aais hai aur duusra project me bhi kaam lawa jaae sake hai.',
'sharedupload-desc-there' => 'Ii file $1 se aais hai aur duusra projects me bhi kaam me lawa jaae sake hai.
Meharbaani kar ke  aur jaankari kr khatir [$2 file description page] ke dekho.',
'sharedupload-desc-here' => 'Ii file $1 se aais hai aur duusra projects me bhi kaam me lawa jaae sake hai.
Iske baare me aur jaankari [$2 file description page] ke niche dekhawa jaae hai.',
'sharedupload-desc-edit' => 'Ii file $1 se hae aur iske duusra project me kaam me lawa jaae sake hae.
Saait aap iske discription ke iske [$2 file description page] me badle maagega.',
'sharedupload-desc-create' => 'Ii file $1 se hae aur saait iske duusra project me kaam me lawa jaae hae.
Saait aap iske [$2 file description page] me padle maangega.',
'filepage-nofile' => 'Ii naam ke koi file nai hai.',
'filepage-nofile-link' => 'Ii naam ke koi file nai hai, lekin aap [$1 upload kare sakta hai].',
'uploadnewversion-linktext' => 'Ii file ke nawaa version ke upload karo',
'shared-repo-from' => '$1 se',
'shared-repo' => 'ek shared repository',
'upload-disallowed-here' => 'Aap ii panna ke uppar se nai likhe saktaa hae.',

# File reversion
'filerevert' => '$1 ke pahile jaise karo',
'filerevert-legend' => 'File ke pahile jaise karo',
'filerevert-intro' => "Aap '''[[Media:$1|$1]]''' ke [$4 version as of $3, $2] jaise kartaa hai.",
'filerevert-comment' => 'Kaaran:',
'filerevert-defaultcomment' => 'Version as of $2, $1 pe revert kar dewa gais hai',
'filerevert-submit' => 'Pahile jaise karo',
'filerevert-success' => "'''[[Media:$1|$1]]''' ke [$4 version as of $3, $2] pe revert kar dewa gais hai.",
'filerevert-badversion' => 'Dewa gais timestamp ke pahile ke ii file ke koi version nai hai.',

# File deletion
'filedelete' => '$1 ke mitao',
'filedelete-legend' => 'File ke mitao',
'filedelete-intro' => "Aap file '''[[Media:$1|$1]]''' ke delete kare waala hai iske itihaas ke saathe.",
'filedelete-intro-old' => "Aap '''[[Media:$1|$1]]''' ke version as of [$4 $3, $2] ke delete kartaa hai.",
'filedelete-comment' => 'Kaaran:',
'filedelete-submit' => 'Mitao',
'filedelete-success' => "'''$1''' ke mitae dewa gais hai.",
'filedelete-success-old' => "'''[[Media:$1|$1]]''' ke version as of $3, $2 ke delete kar dewa gais hai.",
'filedelete-nofile' => "'''$1''' nai hai.",
'filedelete-nofile-old' => "'''$1''' ke specified attributes ke koi archived version nai hai.",
'filedelete-otherreason' => 'Duusra/aur kaaran:',
'filedelete-reason-otherlist' => 'Duusra kaaran',
'filedelete-reason-dropdown' => '* Sadharan delete kare ke kaaran
** Copyright ke violation
** Dugnaa file',
'filedelete-edit-reasonlist' => 'Delete kare ke kaaran ke badlo',
'filedelete-maintenance' => 'Files jiske ke thora din khatir, maintenance ke time, band kar dewa gais rahaa ke mitawa aur fir se pahile jaise karaa jaawe hae.',
'filedelete-maintenance-title' => 'File ke mitae nai saktaa hae',

# MIME search
'mimesearch' => 'MIME khojo',
'mimesearch-summary' => 'Ii panna filtering of files for its MIME-type ke enable kare hai.
Input: contenttype/subtype, e.g. <code>image/jpeg</code>.',
'mimetype' => 'MIME ke rakam:',
'download' => 'download karo',

# Unwatched pages
'unwatchedpages' => 'Panna jispe dhyan nai rakha gais hai',

# List redirects
'listredirects' => 'Redirects list karo',

# Unused templates
'unusedtemplates' => 'Bina use bhae templates',
'unusedtemplatestext' => 'Ii panna {{ns:template}} namespace me uu panna ake suchi de hai jon ki koi duusra panna me nai hai.
Templates ke delete kare se pahile duusra links ke bhi check kare ke nai bhulna.',
'unusedtemplateswlh' => 'duusra jorr',

# Random page
'randompage' => 'Koi bhi panna',
'randompage-nopages' => 'Ii {{PLURAL:$2|namespace|namespaces}} me koi panna nai hae:  $1',

# Random redirect
'randomredirect' => 'Koi bhi jagha redirect karo',
'randomredirect-nopages' => 'Namespace "$1" me koi redirects nai hai.',

# Statistics
'statistics' => 'Aankrra',
'statistics-header-pages' => 'Panna ke ankrraa',
'statistics-header-edits' => 'Statistics ke badlo',
'statistics-header-views' => 'Statistics ke dekho',
'statistics-header-wiki_users' => 'Sadasya ke statistics',
'statistics-header-hooks' => 'Duusra statistics',
'statistics-articles' => 'Content panna',
'statistics-pages' => 'Panna',
'statistics-pages-desc' => 'Wiki me sab panna, including salah waala panna, redirects, etc.',
'statistics-files' => 'Upload karaa gais files',
'statistics-edits' => '{{SITENAME}} ke suruu hoe se panna ke badlao',
'statistics-edits-average' => 'Average badlao per panna',
'statistics-views-total' => 'Views kul jorr',
'statistics-views-total-desc' => 'Jon pana abhi banawa nai gais hae aur khaas panna ke include nai karaa gais hae',
'statistics-views-peredit' => 'Views per badlao',
'statistics-wiki_users' => 'Registered [[Special:Listwiki_users|sadasya]]',
'statistics-wiki_users-active' => 'Active sadasya',
'statistics-wiki_users-active-desc' => 'Sadasya jon ki pichhle {{PLURAL:$1|din|$1 din}} me kuchh karin hai.',
'statistics-mostpopular' => 'Sab se jaada dekha gae panna',

'disambiguations' => 'Garrbarri ke sudhare waala panna',
'disambiguationspage' => 'Template:disambig',
'disambiguations-text' => "Niche ke panna '''disambiguation panna''' se link hoe hai.
Saait isse aur achchha panna se link hoi. <br />
Ek panna ke disambiguation panna maana jaae hae jab ki ii ek template ke kaam me laae hae jon ki [[MediaWiki:Disambiguationspage]] se link hoe hae.",

'doubleredirects' => 'Dugna redirects',
'doubleredirectstext' => 'Ii panna uu panna ke suchi de hai jon ki duusra redirect panna pe redirect kare hai.
Sab row me pahila aur duusra redirect ke jorr hae, aur isme duusra redirect ke nisana bhi hae, jon ki jaada kar ke "aslii" nisana waala panna, jon ki pahila redirect ke dekhae hae.
<del>Mitawa gais</del> entires ke solve kar dewa gais hae.',
'double-redirect-fixed-move' => '[[$1]] ke naam badal dewa gais hai, ab ii [[$2]] pe redirect kare hai',
'double-redirect-fixed-maintenance' => '[[$1]] se [[$2]] ke double redirect ke sudhartaa hae.',
'double-redirect-fixer' => 'Redirect ke banae waala',

'brokenredirects' => 'Tuuta redirects',
'brokenredirectstext' => 'Niche ke suchi me uu redirects hai jon ki non-existent panna pe redirect kare hai:',
'brokenredirects-edit' => 'badlo',
'brokenredirects-delete' => 'mitao',

'withoutinterwiki' => 'Bina bhasa ke link waala panna',
'withoutinterwiki-summary' => 'Niche waala panna duusra bhasa ke versions se nai jurre hai.',
'withoutinterwiki-legend' => 'Aage lagao',
'withoutinterwiki-submit' => 'Dekhao',

'fewestrevisions' => 'Uu panna jisme sab se kamti badlao bhae hai.',

# Miscellaneous special pages
'nbytes' => '$1 {{PLURAL:$1|byte|bytes}}',
'ncategories' => '$1 {{PLURAL:$1|vibhag|vibhag}}',
'ninterwikis' => '$1 {{PLURAL:$1|interwiki|interwikis}}',
'nlinks' => '$1 {{PLURAL:$1|jorr|jorr}}',
'nmembers' => '$1 {{PLURAL:$1|sadasya|sadasya}}',
'nrevisions' => '$1 {{PLURAL:$1|badlao|badlao}}',
'nviews' => '$1 {{PLURAL:$1|dafe dekha gais hai|dafe dekha gais hai}}',
'nimagelinks' => '$1 {{PLURAL:$1|panna|panna}} me kaam me lawa gais hae',
'ntransclusions' => '$1 {{PLURAL:$1|panna|panna}} me kaam me lawa gais hae',
'specialpage-empty' => 'Ii report khatir koi results nai hai.',
'lonelypages' => 'Akele waala panna',
'lonelypagestext' => 'Niche ke panna ke duusra paana jorre nai to  transclude nai kare hai {{SITENAME}} me.',
'uncategorizedpages' => 'Jon panna koi vibhag me nai hai',
'uncategorizedcategories' => 'Uncategorized vibhag',
'uncategorizedimages' => 'Bina vibhag me kara gais file',
'uncategorizedtemplates' => 'Bina categorise karaa gais template',
'unusedcategories' => 'Bina use bhae category',
'unusedimages' => 'Bina use bhae files',
'popularpages' => 'Popular panna',
'wantedcategories' => 'Maange waala vibhag',
'wantedpages' => 'Jaruri panna',
'wantedpages-badtitle' => 'Result set me kharaa title hai: $1',
'wantedfiles' => 'Maange waala files',
'wantedfiletext-cat' => 'Niche likha gais file ke kaam me lawa gais hae lekin ii Wikipedia me nai hae. Ii Wikipedia me file rahe par bhi foreign repositories ke file ke list karaa jaae sake hae. Aisan koi galat positives ke <del>mitae dewa jaai</del>. Aur, uu panna jon ki non-existent files ke embed kare hae ke [[:$1]] me list karaa gais hae.',
'wantedfiletext-nocat' => 'Niche likha gais file ke kaam me lawa gais hae lekin ii Wikipedia me nai hae. Ii Wikipedia me file rahe par bhi foreign repositories ke file ke list karaa jaae sake hae. Aisan koi galat positives ke <del>mitae dewa jaai</del>.',
'wantedtemplates' => 'Maange waala templates',
'mostlinked' => 'Jon panna me sab se jaada chij jorra hai',
'mostlinkedcategories' => 'Jon vibhag me sab se jaada chij jorra hai',
'mostlinkedtemplates' => 'Jon template me sab se jaada fike jorra hai',
'mostcategories' => 'Sab se jaada vibhag waala panna',
'mostimages' => 'Jon file me sab se jaada file jorra hai',
'mostinterwikis' => 'Panna jisme sab se dher interwikis hae',
'mostrevisions' => 'Sab se jaada badlao waala panna',
'prefixindex' => 'Sab panna jisme prefix index hai',
'prefixindex-namespace' => 'Sab panna jisme prefix ($1 namespace)hae',
'shortpages' => 'Chhota panna',
'longpages' => 'Lamba panna',
'deadendpages' => 'Jon panna se koi jurre nai hai',
'deadendpagestext' => 'Niche ke panna {{SITENAME}} ke koi bhi panna se nai jurre hai.',
'protectedpages' => 'Surakchhit panna',
'protectedpages-indef' => 'Khaali indefinite bachao',
'protectedpages-cascade' => 'Khaali cascading bachao',
'protectedpagestext' => 'Niche ke panna ke naam badle aur badle se rok lagawa gais hai',
'protectedpagesempty' => 'Ii parameters se koi bhi panna ke nai bachawa gais hai.',
'protectedtitles' => 'Bachawa gais titles',
'protectedtitlestext' => 'Niche ke title ke nai banawa jaae sake hai',
'protectedtitlesempty' => 'Ii parameters se koi bhi title ke nai bacawa gais hai.',
'listwiki_users' => 'Sadasya ke suchi',
'listwiki_users-editsonly' => 'Khaali uu sadasya ke dekhao jon ki koi badlao karis hai',
'listwiki_users-creationsort' => 'Banawa gais tarik se sort karo',
'wiki_usereditcount' => '$1 {{PLURAL:$1|badlao|badlao}}',
'wiki_usercreated' => '{{GENDER:$3|Banawa gais hae}}  $1 pe $2 me',
'newpages' => 'Nawaa panna',
'newpages-wiki_username' => 'wiki_username:',
'ancientpages' => 'Sab se purana panna',
'move' => 'Naam badlo',
'movethispage' => 'Panna ke naam badlo',
'unusedimagestext' => 'Niche ke file hae lekin koi panna me iske kaam me nai law gais hae.
Yaad rakhna ki duusra web site bhi direct URL se ek file se link hoe sake hae, aur hian pe abhi talak list karaa gais, active use hoe ke bawajuut.',
'unusedcategoriestext' => 'Niche ke category panna hai, jab ki koi aur panna aur category iske nai use kare hai.',
'notargettitle' => 'Koi target nai hai',
'notargettext' => 'Aap iifunction ke perform kare ke khatir koi target panna ke nai specify karaa hai.',
'nopagetitle' => 'Ii naam ke koi target panna nai hai',
'nopagetext' => 'Target panna jiske aap specify karaa hai exist nai hoe hai.',
'pager-newer-n' => '{{PLURAL:$1|nawaa 1|nawaa $1}}',
'pager-older-n' => '{{PLURAL:$1|purana 1|purana $1}}',
'suppress' => 'Oversight',
'querypage-disabled' => 'Ii khaas panna ke performance kaaran se disable kar drwa gais hae.',

# Book sources
'booksources' => 'Pustak sources',
'booksources-search-legend' => 'Book sources ke khojo',
'booksources-go' => 'Jao',
'booksources-text' => 'Niche ke suchi me uu websites ke jorr hai jon ki nawaa aur use karaa gais book ke beche hai aur jon book ke aap khojtaa hai uske baare aur jaankari de sake hai:',
'booksources-invalid-isbn' => 'Dewa gais ISBN thiik nai hai; iske purana jagha se copy kare ke time ke error ke check karo.',

# Special:Log
'speciallogwiki_userlabel' => 'Sadasya:',
'speciallogtitlelabel' => 'Padwi:',
'log' => 'Suchi',
'all-logs-page' => 'Sab janta waala suchi',
'alllogstext' => '{{SITENAME}} ke sab log ke ek saathe dekhawa jjawe hae.
You can narrow down the view by selecting a log type, the wiki_user name (case-sensitive), or the affected page (also case-sensitive).
Ketna chij dekhae hae ke aap kamti kare saktaa hae sadasya ke naam (case-sensitive), nai the affected panna (ii bhi case-sensitive) ke log type ke select kare se.',
'logempty' => 'Log me koi matching item nai hai.',
'log-title-wildcard' => 'Ii text se suruu hoe waala titles ke khojo',
'showhideselectedlogentries' => 'Dekhao/lukao chuna gais log entries',

# Special:AllPages
'allpages' => 'Sab panna',
'alphaindexline' => '$1 se $2',
'nextpage' => 'Aglaa panna ($1)',
'prevpage' => 'Pichhla panna ($1)',
'allpagesfrom' => 'Panna dekhae ke suruu karo hian se:',
'allpagesto' => 'Dekhao panna ending at:',
'allarticles' => 'Sab panna',
'allinnamespace' => 'Sab panna ($1 namespace)',
'allnotinnamespace' => 'Sab panna ($1 namespace me nai hai)',
'allpagesprev' => 'Pahile',
'allpagesnext' => 'Aage',
'allpagessubmit' => 'Jaao',
'allpagesprefix' => 'Uu panna dekhao jiske prefix hai:',
'allpagesbadtitle' => 'Dewa gias panna ke title kharaab rahaa nai to inter-language nai to inter-wiki ke prefix hai.
Is me ek nai to jaada akchhar hai jiske title me nai kaam me lawa jaae sake hai.',
'allpages-bad-ns' => '{{SITENAME}} me namespace "$1" nai hai.',
'allpages-hide-redirects' => 'Redirects lukao',

# SpecialCachedPage
'cachedspecial-viewing-cached-ttl' => 'Aap ii panna ke ek cached version ke dekhtaa hae, jon ki $1 talak purana rahe sake hae.',
'cachedspecial-viewing-cached-ts' => 'Aap ii panna ke ek cached version ke dekhtaa hae, jon ki saait puura aslii nai hae.',
'cachedspecial-refresh-now' => 'Sab se nawaa ke dekho.',

# Special:Categories
'categories' => 'Vibhag',
'categoriespagetext' => 'Niche ke {{PLURAL:$1|vibhag me|vibhag me}}  panna aur media hae.
[[Special:UnusedCategories|Unused categories]] hian nai dekhawa jaawe hae.
[[Special:WantedCategories|wanted categories]] ke bhi dekho.',
'categoriesfrom' => 'Vibhag jon ki hian pe suruu hoe hai, ke dekhao:',
'special-categories-sort-count' => 'ginti se sort karo',
'special-categories-sort-abc' => 'alphabetically sort karo',

# Special:DeletedContributions
'deletedcontributions' => 'Sadasya ke yogdaan ke mitae dia hai',
'deletedcontributions-title' => 'Sadasya ke yogdaan ke mitae dia hai',
'sp-deletedcontributions-contribs' => 'yogdaan',

# Special:LinkSearch
'linksearch' => 'Bahaari jorr',
'linksearch-pat' => 'Khoje ke pattern:',
'linksearch-ns' => 'Namespace:',
'linksearch-ok' => 'Khojo',
'linksearch-text' => 'Wildcard jaise ki "*.wikipedia.org" ke kaam me lawa jaae sake hai.<br />
Support karaa gais protocol: <code>$1</code>',
'linksearch-line' => '$1, $2 se jurraa hai',
'linksearch-error' => 'Wildcards khaali hostname ke suruu me hoe ke chaahi.',

# Special:Listwiki_users
'listwiki_usersfrom' => 'Sadasya jon ki hian se suruu hoe hai ke dekhao:',
'listwiki_users-submit' => 'Dekhao',
'listwiki_users-noresult' => 'Koi sadasya ke nai pawa gais hai.',
'listwiki_users-blocked' => '(rok dewa gais hai)',

# Special:Activewiki_users
'activewiki_users' => 'Active sadasya ke list',
'activewiki_users-intro' => 'Ii suchi uu sadasya ke hae jon ki pahile {{PLURAL:$1|din|din}} me kuchh karin hae.',
'activewiki_users-count' => '$1 haali ke {{PLURAL:$1|badlao|badlao}} pichhle {{PLURAL:$3|din|$3 din}} me',
'activewiki_users-from' => 'Sadasya jon ki hian se suruu hoe hai ke dekhao:',
'activewiki_users-hidebots' => 'Bots ke lukao',
'activewiki_users-hidesysops' => 'Administrator log ke lukao',
'activewiki_users-noresult' => 'koi sadasya ke pawa nai gais hai.',

# Special:Log/newwiki_users
'newwiki_userlogpage' => 'Sadasya ke banae waala log',
'newwiki_userlogpagetext' => 'Ii sadasya ke banae waala log hai.',

# Special:ListGroupRights
'listgrouprights' => 'Sadasya  ke group adhikar',
'listgrouprights-summary' => 'Niche likha hai ek suchi hai groups ke jon ki ii wiki me defined hai, aapan  associated access rights ke saathe
[[{{MediaWiki:Listgrouprights-helppage}}|additional information]] individual rights ke baare me sait hoi.',
'listgrouprights-key' => '* <span class="listgrouprights-granted">Dewa gais adhikar</span>
* <span class="listgrouprights-revoked">Hatawa gais adhikar</span>',
'listgrouprights-group' => 'Jhund',
'listgrouprights-rights' => 'Adhikar',
'listgrouprights-helppage' => 'Help:Group waala adhikar',
'listgrouprights-members' => '(sadasya ke suchi)',
'listgrouprights-addgroup' => 'Sakta jorre {{PLURAL:$2|group|groups}}: $1',
'listgrouprights-removegroup' => 'SAkta hatae {{PLURAL:$2|group|groups}}: $1',
'listgrouprights-addgroup-all' => 'Sakta hai sab group jorre',
'listgrouprights-removegroup-all' => 'Sab group ke hatae sakta hai',
'listgrouprights-addgroup-self' => '{{PLURAL:$2|group|groups}} ke aapan account me jorre saktaa hai: $1',
'listgrouprights-removegroup-self' => '{{PLURAL:$2|group|groups}} ke aapan account se hatae saktaa hai: $1',
'listgrouprights-addgroup-self-all' => 'Sab group ke aapan account me jorre saktaa hai',
'listgrouprights-removegroup-self-all' => 'Sab group ke aapan account se hatae saktaa hai',

# E-mail wiki_user
'mailnologin' => 'Koi bheje waala address nai hai',
'mailnologintext' => 'Duusra logan ke lage e-mail bheje ke khatir aap ke [[Special:wiki_userLogin|logged in]] aur [[Special:Preferences|preferences]]  me thik e-mail hoew ke chaahi.',
'emailwiki_user' => 'Ii wiki_user ke E-mail karo',
'emailwiki_user-title-target' => 'Ii {{GENDER:$1|sadasya}} ke E-mail karo',
'emailwiki_user-title-notarget' => 'Sadasya ke E-mail karo',
'emailpage' => 'wiki_user ke e-mail karo',
'emailpagetext' => 'Aap niche ke form ke kaam me laae ke ii {{GENDER:$1|sadasya}} ke e-mail bheje saktaa hae.
Jon e-mail address aap [[Special:Preferences|your wiki_user preferences]] me enter karaa rahaa, "From" ke e-mail rahii, jisse ki e-mail ke mile waala jan aap ke sidha jawaab de sake hae.',
'wiki_usermailererror' => 'Mail object error return karis hai:',
'defemailsubject' => '{{SITENAME}} e-mail sadasya "$1" se',
'wiki_usermaildisabled' => 'Sadasya ke e-mail ke rok dewa gais hae',
'wiki_usermaildisabledtext' => 'Aap ii wiki ke duusra sadasya ke e-mail nai bheje saktaa hae',
'noemailtitle' => 'E-mail address nai hai',
'noemailtext' => 'Ii sadasya thiik e-mail address nai diis hai.',
'nowikiemailtitle' => 'Koi e-mail ke ijajat nai hai',
'nowikiemailtext' => 'Ii sadasya e-mail nai le ke decide karis hai.',
'emailnotarget' => 'Sadasya ke naam, nai to recipient ke naam invalid nai to non-existent hae.',
'emailtarget' => 'Mie waala jan ke wiki_username ke enter karo',
'emailwiki_username' => 'Sadasya ke naam:',
'emailwiki_usernamesubmit' => 'Bhejo',
'email-legend' => 'Duusra {{SITENAME}} ke sadasya ke lage ek e-mail bhejo',
'emailfrom' => 'Iske lage se:',
'emailto' => 'Iske lage:',
'emailsubject' => 'Vishay:',
'emailmessage' => 'Sandes:',
'emailsend' => 'Bhejo',
'emailccme' => 'Hamaar khabar ke ek copy ke hamaar lage e-mail karo.',
'emailccsubject' => 'Aapke $1 ke khatir khabar ke copy: $2',
'emailsent' => 'E-mail ke bhej dewa gais hai',
'emailsenttext' => 'Aap ke e-mail sandes ke bhej dewa gais hai.',
'emailwiki_userfooter' => 'Ii e-mail ke $1, $2 ke lage "E-mail wiki_user" function ke {{SITENAME}}se kaam me laae ke bhejis hai.',

# wiki_user Messenger
'wiki_usermessage-summary' => 'System sandesh likha jaae hae.',
'wiki_usermessage-editor' => 'System ke sandes de waala',

# Watchlist
'watchlist' => 'Hamaar dhyan suchi',
'mywatchlist' => 'Dhyaan suchi',
'watchlistfor2' => '$1 $2 ke khatir',
'nowatchlist' => 'Aap ke dhyan suchi me koi chij nai hai.',
'watchlistanontext' => 'Aapan dhyan suchi me ke dekhe nai to badle ke khatir meharbani kar ke $1 karo.',
'watchnologin' => 'Logged in nai hai',
'watchnologintext' => 'Aapan dhyan suchi ke badle ke khatir aap ke [[Special:wiki_userLogin|logged in]] rahe ke chaahi.',
'addwatch' => 'Dhyan suchi me jorro',
'addedwatchtext' => 'Panna "[[:$1]]" ke aap ke [[Special:Watchlist|watchlist]] me jorr dewa gais hae.
Ii panna ke aage ke badlao aur usse jurra baat waala panna ki suchi hian pe hae.',
'removewatch' => 'Dhyan suchi me se hatao',
'removedwatchtext' => 'Panna "[[:$1]]" ke aap ke [[Special:Watchlist|aap ke dhyan suchi]] se hatae dewa gais hai.',
'watch' => 'Dekho',
'watchthispage' => 'Ii panna par dhyan rakho',
'unwatch' => 'Nai dhyaan rakho',
'unwatchthispage' => 'Ab dhyan nai rakkho',
'notanarticle' => 'Ii content panna nai hai',
'notvisiblerev' => 'Badlao ke mitae dewa gais hai',
'watchnochange' => 'Aap ke koi bhi dhyan me rakkhaa gae chij ke ii time me badla nai gais hai.',
'watchlist-details' => '{{PLURAL:$1|$1 panna|$1 panna}} pe dhyan dewa jae hai, baat waala panna ke chhorr ke.',
'wlheader-enotif' => '* E-mail notification ke enable kar dewa gais hai.',
'wlheader-showupdated' => "* Panna jiske aap ke pichhla visit ke ke baad badal dewa gais hia ke '''bold''' me dekhawa gais hai",
'watchmethod-recent' => 'Dhyan me rakkhaa gais panna ke nawaa badlao ke check karaa jaawe hai',
'watchmethod-list' => 'dhyan me rakkha gais panna ke nawaa badlao ke khatir check karaa jaawe hai',
'watchlistcontains' => 'Aap ke dhyan suchi me  $1 {{PLURAL:$1|panna|panna}} hai.',
'iteminvalidname' => "'$1' chij se kuchh garrbarr hai, galat naam...",
'wlnote' => "Niche ke {{PLURAL:$1|pahile waala badlao hai| pahile '''$1''' badlao hai}} pichhle {{PLURAL:$2|ghanta|'''$2''' ghanta}} me as of $3, $4..",
'wlshowlast' => 'Pichhla $1 ghanta $2 din $3 ke dekhao',
'watchlist-options' => 'Dhyan suchi ke options',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'Dekhtaa...',
'unwatching' => 'Nai dekhtaa...',
'watcherrortext' => '"$1" kr khatir, aap ke watchlist ke setting ke badle ke time kuchh garrbarr hoe gais hae.',

'enotif_mailer' => '{{SITENAME}} Suchna de waala Mailer',
'enotif_reset' => 'Sab panna ke visited mark karo',
'enotif_newpagetext' => 'Ii ek nawaa panna hai.',
'enotif_impersonal_salutation' => '{{SITENAME}} sadasya',
'changed' => 'badal dewa gais hai',
'created' => 'banae dewa gais hai',
'enotif_subject' => '$PAGEEDITOR {{SITENAME}} panna $PAGETITLE ke badal $CHANGEDORCREATED diis hai',
'enotif_lastvisited' => 'Aap ke pichhla visit ke baad ke badlao ke khatir $1 ke dekho.',
'enotif_lastdiff' => 'Ii badlao ke dekhe ke khatir $1 ke dekho.',
'enotif_anon_editor' => 'bina naam ke sadasya $1',
'enotif_body' => 'Priye $WATCHINGUSERNAME,


{{SITENAME}} panna $PAGETITLE ke $CHANGEDORCREATED kar dewa gais hai $PAGEEDITDATE ke din, $PAGEEDITOR ke dwara, abhi ke version ke khatir $PAGETITLE_URL ke dekho.

$NEWPAGE

Sampadak ke summary: $PAGESUMMARY $PAGEMINOREDIT

Editor ke contact karo:
mail: $PAGEEDITOR_EMAIL
wiki: $PAGEEDITOR_WIKI

Aur koi notifications nai rahii, kahe ki koi aur badlao hoe sake hai, jab talak aap ii panna ke visit nai karta hai.
Aap aapan dhyan suchi me sab dhyan me rakha gais panna pe notification flags ke reset kare sakta hai.

Aap ke  dayalu {{SITENAME}} notification system

--
Aapan Email notofication setting ke badle ke khatir, jaao
{{canonicalurl:{{#special:Preferences}}}}

Aapan dhyan ke settings ke badle ke khatir, jaao
{{canonicalurl:{{#special:EditWatchlist}}}}


Aapan dhyan suchi se panna ke mitae ke khatir, jaao
$UNWATCHURL


Aapan bichar de ke khatir aur aage ke sahaeta:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'Pana ke delete karo',
'confirm' => 'Confirm karo',
'excontent' => "content rahaa: '$1'",
'excontentauthor' => "content rahaa: '$1' (aur khaali ek contributor rahaa '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => "blanking se pahile content rahaa: '$1'",
'exblank' => 'panna khaali rahaa',
'delete-confirm' => '"$1" ke mitao',
'delete-legend' => 'Mitao',
'historywarning' => 'Sawadhan: Jon panna ke aap mitae waala hai ke itihaas hai lagbhag $1 {{PLURAL:$1|badlao|badlao}}:',
'confirmdeletetext' => 'Aap ek panna ke uske itihaas ke saathe delete kare waala hai.
Meharbani kar ke iske confirm karo, ki aap iske consequences ke samajhta hai, aur aap iske [[{{MediaWiki:Policy-url}}|the policy]] ke policy ke niche delete karta hai.',
'actioncomplete' => 'Action puura hoe gais hai',
'actionfailed' => 'Action fail hoe gais',
'deletedtext' => '"$1" ke delete kar dewa gais hai. Abhi jaldi ke deletions ke record dekhe khatir $2 ke dekho.',
'dellogpage' => 'Mitae ke suchi',
'dellogpagetext' => 'Niche nawaa mitawa gais panna ke suchi hai.',
'deletionlog' => 'Mitae waala suchi',
'reverted' => 'Pahile ke revision pe lautae dewa gais hai',
'deletecomment' => 'Kaaran:',
'deleteotherreason' => 'Aur/duusra kaaran:',
'deletereasonotherlist' => 'Duusra kaaran',
'deletereason-dropdown' => '*Sadharan mitae ke kaaran
** Author ke request
** Copyright ke violation
** Vandalism',
'delete-edit-reasonlist' => 'Mitae ke kaaran ke badlo',
'delete-toobig' => 'Ii panna ke barraa balao ke itihass hai, $1 se jaada {{PLURAL:$1|revision|revisions}}.
Aisan panna ke mitae pe rok lagawa gais hai so that accidental disruption of {{SITENAME}} ke roka jaae sake hai.',
'delete-warning-toobig' => 'Ii panna ke lambaa badlao ke itihaas hai, $1 {{PLURAL:$1|revision|revisions}} se jaada.
Iske mitae se {{SITENAME}} me database operations me baadha parri;
sawadhani se aage barrho.',

# Rollback
'rollback' => 'Pahile jaise kare waala badlao',
'rollback_short' => 'Pahile jaise karo',
'rollbacklink' => 'pahile jaise karo',
'rollbacklinkcount' => '$1 {{PLURAL:$1|edit|edits}} ke rollback karo',
'rollbacklinkcount-morethan' => '$1 {{PLURAL:$1|edit|edits}} se jaada badlao ke rollback karo',
'rollbackfailed' => 'Pahile jaise kare ke kosis safal nai bhais',
'cantrollback' => 'Badlao ke pahile jaise nai kare sakta hai;
isse pahile waala sadasya ii panna ke khaali yogdaan de waala hai.',
'alreadyrolled' => '[[:$1]] by [[wiki_user:$2|$2]] ke pahile jaise nai kare sakta hai. ([[wiki_user talk:$2|Talk]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
aur koi ii panna ke badal nai to pahile jaise kar diis hai.

Ii panna ke pichla badla [[wiki_user:$3|$3]] ([[wiki_user talk:$3|Talk]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]) se rahaa',
'editcomment' => "Badlao ke summary rahaa: \"''\$1''\".",
'revertpage' => '[[Special:Contributions/$2|$2]] ([[wiki_user talk:$2|Talk]]) ke badlao ke [[wiki_user:$1|$1]] ke aakhri badlao ke jaise kar dewa gais hai.',
'revertpage-nowiki_user' => '(sadasya ke namm ke hatae dewa gais hae) se karaa gais badlao ke  [[wiki_user:$1|$1]] ke badlao ke rakam kar dewa gais hae.',
'rollback-success' => '$1 ke badlao ke pahile jaise kar dewa gais hai;
badal ke $2 ke aakhri version kar dewa gais hai.',

# Edit tokens
'sessionfailure-title' => 'Session fail hoe gais hae',
'sessionfailure' => 'Aap ke login session me kuch karrbarr hai.
iske cancel kar dewa gais hai jisse ki koi iisession ke hijack nai kar.
Meharbani kar ke  "back" ke press kar ke jon pana se aap aae rahaa ke fir se load karo, tab fir kosis karo.',

# Protect
'protectlogpage' => 'Surakchha suchi',
'protectlogtext' => 'Panna surakchha ke suchi niche dewa gais hae.
Abhi ke laabu panna surakchha ke dekho [[Special:ProtectedPages|protected pages list]] me',
'protectedarticle' => 'bachawal "[[$1]]"',
'modifiedarticleprotection' => '[[$1]]" ke protection level ke badal dia hai',
'unprotectedarticle' => 'surakchha suchi "[[$1]]" me se hatawa gais',
'movedarticleprotection' => 'protection settings ke "[[$2]]" se "[[$1]]" kae dia hai',
'protect-title' => '"$1" ke protection level ke badlo',
'protect-title-notallowed' => '"$1" ke protection level ke dekho',
'prot_1movedto2' => '[[$1]] ke naam badal ke [[$2]] kar dewa gae hai',
'protect-badnamespace-title' => 'Bachae nai jaae sake waala namespace',
'protect-badnamespace-text' => 'Ii namespace me panna ke bachawa nai jaae sake hae.',
'protect-legend' => 'Protection ke confirm karo',
'protectcomment' => 'Kaaran:',
'protectexpiry' => 'Khalas hoe hai:',
'protect_expiry_invalid' => 'Khalas hoe waala time valid nai hai.',
'protect_expiry_old' => 'Khalas hoe waala time past me hai.',
'protect-unchain-permissions' => 'Aur jaada bachae waala option ke kholo',
'protect-text' => "Aap ii panna ke protection level ke dekhe aur badle sakta hai
'''$1'''.",
'protect-locked-blocked' => "Aap blocked rahe pe protection level ke nai badle sakta hai.
Panna '''$1''' ke abhi ke settings hai:",
'protect-locked-dblock' => "Active database lock ke kaaran protection level ke bala nai jaawe sake hai.
Panna '''$1''' ke abhi ke settings hai:",
'protect-locked-access' => "Aap ke account ke panna ke ijaajat badle ijaajat nai dewe hai.
Panna ke abhi ke settings hian hai '''$1''':",
'protect-cascadeon' => 'Ii panna abhi surakchhit hai kahe ki isme hai {{PLURAL:$1|page, which has|pages, which have}} cascading protection turned on.

Aap ii panna ke ijaajat level badle sakta hai, lekin ii cascading protection nai affect kari.',
'protect-default' => 'Sab sadasya ke allow karo',
'protect-fallback' => '"$1" permission chaahi',
'protect-level-autoconfirmed' => 'Nawaa aur unregistered sadasya ke roko',
'protect-level-sysop' => 'Khali sysops',
'protect-summary-cascade' => 'cascading',
'protect-expiring' => '$1 khalaas hoe hai (UTC)',
'protect-expiring-local' => '$1 ke khalaas hoe hae',
'protect-expiry-indefinite' => 'sab time khatir',
'protect-cascade' => 'Ii panna me ke panna ke bachao (cascading protection)',
'protect-cantedit' => 'Aap ii panna ke protection level badle nai sakta hai, kahe ki aap ke badle ke ijaajat nai hai.',
'protect-othertime' => 'Duusra time:',
'protect-othertime-op' => 'duusra time',
'protect-existing-expiry' => 'Abhi ke khatam hoe waala time: $3, $2',
'protect-otherreason' => 'Duusra/aur kaaran:',
'protect-otherreason-op' => 'Duusra kaaran:',
'protect-dropdown' => '*Bachae ke sadharan kaaran
** Jaada vandalism
** Jaada spamming
** Counter-productive edit warring
** Jaada traffic waala panna',
'protect-edit-reasonlist' => 'Badlao se bachae ke kaaran',
'protect-expiry-options' => '1 ghanta:1 hour,1 din:1 day, 1 hapta:1 week,2 hapta:2 weeks,1 mahina:1 month,3 mahina:3 months,6 mahina:6 months,1 saal:1 year,sab time ke khatir:infinite',
'restriction-type' => 'Ijaajat:',
'restriction-level' => 'Roke ke niyam:',
'minimum-size' => 'Kamti se kamti size',
'maximum-size' => 'Jaada se jaada size:',
'pagesize' => '(bytes)',

# Restrictions (nouns)
'restriction-edit' => 'Badlo',
'restriction-move' => 'Hatao',
'restriction-create' => 'Banao',
'restriction-upload' => 'Upload karo',

# Restriction levels
'restriction-level-sysop' => 'puura protected',
'restriction-level-autoconfirmed' => 'thora protected',
'restriction-level-all' => 'koi bhi level',

# Undelete
'undelete' => 'Mitawa gais panna ke dekho',
'undeletepage' => 'Dekho aur mitawa gais panna ke pahile jaise karo',
'undeletepagetitle' => "'''Niche ke list me [[:$1|$1]] ke mitawa gais badlao hai'''.",
'viewdeletedpage' => 'Mitawa gais panna ke dekho',
'undeletepagetext' => 'Niche dekhawa gais {{PLURAL:$1|panna ke mitae dewa gais hai lekin|$1 panna ke mitae dewa gais hai lekin}} abhi archive me hai aur iske pahile jaise karaa jaawe sake hai.
Archive ke time time se safaa karaa jaawe hai.',
'undelete-fieldset-title' => 'Badlao ke pahile jaise karo',
'undeleteextrahelp' => "Panna ke itihaas ke pahile jaise kare ke khatir sab checkboxes me kuch nai karna aur ''''{{int:undeletebtn}}''''' ke click karo.
Chuna gais panna ke pahile jaise kare ke khatir, uu box ke check karo jon badlao ke aap pahile jaise kare mangta hai aur ''''{{int:undeletebtn}}''''' ke click karo.
'''''Reset''''' click kare se comment field aur sab checkboxes clear hoe jaai.",
'undeleterevisions' => '$1 {{PLURAL:$1|badlao|badlao}} ke archive kar dewa gais hai',
'undeletehistory' => 'Agar aap panna ke pahile jaise karaa tab sab badlao itihass me restore hoe jaai.
Agar koi wahii naam ke nawaa panna mitae ke baad banaa hoi tab restore karaa gais badlao pahile ke itihass me dekhai.',
'undeleterevdel' => 'Pahile jaise nai kare sakega agar isse uppar waala panna nai to file revision bhi delete hoe jaai.
Aisan time pe, aap ke chaahi ki aap sab se nawaa deleted revision ke uncheck nai to unhide karo.',
'undeletehistorynoadmin' => 'Ii panna ke mitae dewa gais hai.
Mitae ke kaaran niche ke summary me dewa gais hai, aur iske saathe uu sadasya ke baare me bhi jaankari hai jon ki ii panna ke badle rahin.
Ii mitawa gais badlao ke baare me puura jankari khaali administrators ke mile sake hai.',
'undelete-revision' => '$1 ke badlao ke (as of $4, at $5) by $3 mitae dewa gais hai:',
'undeleterevision-missing' => 'Badlao kharaab nai to pawa nai jaawe sake hai.
Sait aap ke kharaab link hoi, nai to badlao ke sait pahile jaise kar dewa gais hoi, nai to archive se mitae dewa gais hoi.',
'undelete-nodiff' => 'Koi pahile ke badlao ke nai pawa gais hai.',
'undeletebtn' => 'Pahile jaise kar do',
'undeletelink' => 'dekho/pahile jaise karo',
'undeleteviewlink' => 'dekho',
'undeletereset' => 'Pahile jaise karo',
'undeleteinvert' => 'Selection ke ulta karo',
'undeletecomment' => 'Kaaran::',
'undeletedrevisions' => '{{PLURAL:$1|1 badlao|$1 badlao}} ke pahile jaise kar dewa gais hai',
'undeletedrevisions-files' => '{{PLURAL:$1|1 badlao|$1 badlao}} aur {{PLURAL:$2|1 file|$2 files}} ke pahile jaise kar dewa gais hai',
'undeletedfiles' => '{{PLURAL:$1|1 file|$1 files}} ke pahile jaise kar dewa gais hai',
'cannotundelete' => 'Pahile jaise nai kare sakaa;
saait aur koi panna ke pahile jaise kar diis hai.',
'undeletedpage' => "'''$1 ke pahile jaise kar dewa gais hai'''

Nawaa mitawa gais aur badlao ke ulta karaa gais panna ke dekhe ke khatir [[Special:Log/delete|deletion log]] ke dekho.",
'undelete-header' => 'Nawaa mitawa gais panna ke dekhe ke khatir [[Special:Log/delete|the deletion log]] ke dekho.',
'undelete-search-title' => 'Mitawa gais panna ke khojo',
'undelete-search-box' => 'Mitawa gais panna ke khojo',
'undelete-search-prefix' => 'Uu panna ke dekhao jon ki isse suruu hoe hai:',
'undelete-search-submit' => 'Khojo',
'undelete-no-results' => 'Mitawa gais panna ke archive me ii rakam ke koi panna ke nai pawa gais hai.',
'undelete-filename-mismatch' => 'File revision jiske timestamp $1 hai ke pahile jaise nai karaa jaawe sake hai: filename mismatch',
'undelete-bad-store-key' => 'File revision jiske timestamp $1 hai ke pahile jaise nai karaa jaawe sake hai: file was missing before deletion.',
'undelete-cleanup-error' => 'Bina use karaa gais archive file "$1" ke delete kare me mistake hoe gais.',
'undelete-missing-filearchive' => 'File archive ID $1 ke pahile jaise nai kare sakaa hai kahe ki ii database me nai hai.
Saait iske aur koi pahile jaise kar diis hai.',
'undelete-error' => 'Error undeleting page',
'undelete-error-short' => 'File ke pahile jaise kare me eror: $1',
'undelete-error-long' => 'Ii file ke pahile jaise kare me error hoe gais:

$1',
'undelete-show-file-confirm' => 'Ka aap sure hai ki aap mitawa gais file ke badlao ke dekhe mangta hai  "<nowiki>$1</nowiki>" from $2 at $3?',
'undelete-show-file-submit' => 'Haan',

# Namespace form on various pages
'namespace' => 'Namespace:',
'invert' => 'Selection ke ulto',
'tooltip-invert' => 'Cuna gais namespace (and the associated namespace if checked) ke badlao ke lukae ke khatir ii box ke tick karo',
'namespace_association' => 'Associated namespace',
'tooltip-namespace_association' => 'Chuna gais panna ke baat waala panna, nai to, subject namespace ke include kare ke khatir, ii box ke tick karo',
'blanknamespace' => '(Pahila)',

# Contributions
'contributions' => 'Sadasya ke yogdaan',
'contributions-title' => '$1 ke yogdaan',
'mycontris' => 'Yogdaan',
'contribsub2' => '$1 ($2) ke khatir',
'nocontribs' => 'Ii critera ke rakam ke koi badlao nai pawa gais hai.',
'uctop' => '(uppar)',
'month' => 'Mahina se (aur pahile):',
'year' => 'Saal se (aur pahile):',

'sp-contributions-newbies' => 'Khaali nawaa account ke yogdaan dekhao',
'sp-contributions-newbies-sub' => 'Nawaa account khatir',
'sp-contributions-newbies-title' => 'Nawaa account ke sadasya ke yogdaan',
'sp-contributions-blocklog' => 'Suchi roko',
'sp-contributions-deleted' => 'Mitawa gais adasya ke yogdaan',
'sp-contributions-uploads' => 'upload karaa gais file',
'sp-contributions-logs' => 'logs',
'sp-contributions-talk' => 'baat',
'sp-contributions-wiki_userrights' => 'sadasya ke adhikaar ke manage karo',
'sp-contributions-blocked-notice' => 'Ii sadasya ke hian pe ijajat nai hae.
Pahile waala block log entry ke reference ke khatir niche dekhawa jaawe hae:',
'sp-contributions-blocked-notice-anon' => 'Ii IP address abhi rok dewa gais hae.
Sab se nawaa roke ke suchi ke, aap ke khatir, niche dewa gais hae.',
'sp-contributions-search' => 'Yogdaan ke khojo',
'sp-contributions-wiki_username' => 'IP Address nai to wiki_username:',
'sp-contributions-toponly' => 'Khaali sab se nawaa badlao ke dekhao',
'sp-contributions-submit' => 'Khojo',

# What links here
'whatlinkshere' => 'Hian konchij jurre hae',
'whatlinkshere-title' => 'Panna jon ki $1 se jurre hai',
'whatlinkshere-page' => 'Panna:',
'linkshere' => "Niche waala panna '''[[:$1]]''' se jorre hai:",
'nolinkshere' => "Koi panna '''[[:$1]]''' ke nai jorre hai.",
'nolinkshere-ns' => "Chuna gais namespace me koi panna '''[[:$1]]''' se nai jiurre hai.",
'isredirect' => 'panna ke redirect karo',
'istemplate' => 'milao',
'isimage' => 'file ke jorr',
'whatlinkshere-prev' => '{{PLURAL:$1|pahile waala|pahile waala $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|aage waala|aage waala $1}}',
'whatlinkshere-links' => '← jorr',
'whatlinkshere-hideredirs' => '$1 redirects',
'whatlinkshere-hidetrans' => '$1 transclusions',
'whatlinkshere-hidelinks' => '$1 jorr',
'whatlinkshere-hideimages' => '$1 file ke jorr',
'whatlinkshere-filters' => 'Filters',

# Block/unblock
'autoblockid' => '#$1 ke apne se block karo',
'block' => 'Sadasya ke roko',
'unblock' => 'Sadasya ke rukawat k khalaas karo',
'blockip' => 'Sadasya ke roko',
'blockip-title' => 'Sadasya ke roko',
'blockip-legend' => 'Sadasya ke roko',
'blockiptext' => 'Niche ke form ke use kar ke koi khaas IP address nai to wiki_username ke write access ke roko.
Iske khaali vandalism ke roke ke khatir use kare ke chaahi [[{{MediaWiki:Policy-url}}|policy]] ke niche.
Niche ek khaas kaaran likho (jaise ki, citing particular pages that were vandalized).',
'ipadressorwiki_username' => 'IP Address nai to wiki_username:',
'ipbexpiry' => 'Expiry:',
'ipbreason' => 'Kaaran:',
'ipbreasonotherlist' => 'Duusra kaaran',
'ipbreason-dropdown' => '*Roke ke sadhaarankaaran
** Galat jaankari diis
** Panna se jaankari nikalis
** Bahaari site se spamming jorr
** Panna me bakwaas/and sand liko
** Duusre ke dhamki do
** Ek se jaada account ke khraab kaam me laao
** Sadasya ke naam thiik nai hae',
'ipb-hardblock' => 'Logged-in sadasya ke ii IP address se badle ke roko',
'ipbcreateaccount' => 'account banae se roko',
'ipbemailban' => 'Sadasya ke e-mail bheje se roko',
'ipbenableautoblock' => 'Apne se sadasya ke kaam me lawa gais last IP address ke roko, aur iske saathe aur koi IPs jisme se baad me badlao kare ke kosis karaa jaae ke bhi roko.',
'ipbsubmit' => 'Ii sadasya ke roko',
'ipbother' => 'Duusra time:',
'ipboptions' => '2 ghanta:2 hours,1 din:1 day,3 daya:3 days,1 hapta:1 week,2 hapta:2 weeks,1 mahina:1 month,3 mahina:3 months,6 mahina:6 months,1 saal:1 year,pura:infinite',
'ipbotheroption' => 'duusra',
'ipbotherreason' => 'Duusra/aur kaaran:',
'ipbhidename' => 'Badlao aur suchi se wiki_username ke hatao',
'ipbwatchwiki_user' => 'Ii sadasya ke wiki_user aur talk panna pe dhyan rakho',
'ipb-disablewiki_usertalk' => 'Ii sadasya ke aapan baat waala panna ke badle pe rukawat lagao, jab ii panna pe rok lagawa gais hae',
'ipb-change-block' => 'Ii sadasya ke jiske ii settings hai ke fir se roko',
'ipb-confirm' => 'Block ke confirm karo',
'badipaddress' => 'IP address kharaab hai',
'blockipsuccesssub' => 'Rukawat safal rahaa',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ke rok dewa gais hai.<br />
Ii rukawat pe fir se bichar kare ke khatir [[Special:BlockList|block list]] ke dekho.',
'ipb-blockingself' => 'Aap abhi apne ke block kare waala hae! Aap sure hai koi aap ii kare mangtaa hae?',
'ipb-confirmhidewiki_user' => 'Aap abhi ek sadasya ke "hide wiki_user" enabled se block kare waala hae. Isse sadasya ke naam ke sab lists aur log entries se hatae dewa jaai.  Aap sure hae ki aap ii kare mangtaa hae?',
'ipb-edit-dropdown' => 'Badlao ke roke ke kaaran',
'ipb-unblock-addr' => '$1 ke rukawat ke khalaas karo',
'ipb-unblock' => 'Ek wiki_username nai to IP address ke rukawat ke khalaas karo',
'ipb-blocklist' => 'Abhi ke rukawat ke dekho',
'ipb-blocklist-contribs' => '$1 ke yogdaan',
'unblockip' => 'Sadasya ke rukawat ke khalaas karo',
'unblockiptext' => 'Niche ke form ke use kar ke pahile roka gais IP address nai to wiki_username ke likhe ke adhikar do.',
'ipusubmit' => 'Ii rukawat ke hatao',
'unblocked' => '[[wiki_user:$1|$1]] ke rukawat ke khalaas kar dewa gais hai',
'unblocked-range' => '$1 ke unblock kar dewa gais hae',
'unblocked-id' => 'Roko $1 ke khalaas kar dewa gais hai',
'blocklist' => 'Roka gais sadasya',
'ipblocklist' => 'Roka gais sadasya',
'ipblocklist-legend' => 'Ek roka gais sadasya ke khojo',
'blocklist-wiki_userblocks' => 'Roka gais account ke lukao',
'blocklist-tempblocks' => 'Temporary block ke lukao',
'blocklist-addressblocks' => 'Single IP block ke lukao',
'blocklist-rangeblocks' => 'Range block ke lukao',
'blocklist-timestamp' => 'Timestamp',
'blocklist-target' => 'Target',
'blocklist-expiry' => 'Khalaas hoe hae',
'blocklist-by' => 'Block kare waala admin',
'blocklist-params' => 'Block kare waala parameters',
'blocklist-reason' => 'Kaaran',
'ipblocklist-submit' => 'Khojo',
'ipblocklist-localblock' => 'Sthaniye rukawat',
'ipblocklist-otherblocks' => 'Duusra {{PLURAL:$1|block|blocks}}',
'infiniteblock' => 'sab din ke khatir',
'expiringblock' => 'khalaas hoe hai $1 at $2',
'anononlyblock' => 'khaali bina naam ke',
'noautoblockblock' => 'ab apne se rokaa nai jaawe sake hai',
'createaccountblock' => 'account banae ke adhikar ke rok dewa gais hai',
'emailblock' => 'e-mail ke rok dewa gais hai',
'blocklist-nowiki_usertalk' => 'aapan baat waala panna ke badle ke adhikar nai hai',
'ipblocklist-empty' => 'Rukawat ke suchi khaali hai.',
'ipblocklist-no-results' => 'Maanga gais IP address nai to wiki_username rokaa nai gais hai.',
'blocklink' => 'rok do',
'unblocklink' => 'rukawat khatam karo',
'change-blocklink' => 'rukawat ke badlo',
'contribslink' => 'yogdaan',
'emaillink' => 'E-mail bhejo',
'autoblocker' => 'Apne se rokaa gais hai kaahe ki aap ke IP address ke abhi haali "[[wiki_user:$1|$1]]" use karis hai.
$1 ke roke ke kaaran hai: "$2"',
'blocklogpage' => 'Suchi ke roko',
'blocklog-showlog' => 'Ii sadasya ke pahile rokaa gais hae.
Roke waala suchi  ke niche dekhawa jaawe hae aap ke jankari ke khatir:',
'blocklog-showsuppresslog' => 'Ii sadasya ke pahile rokaa aur lukawa gais hae.
Iske suchi ke niche dekhawa jaawe hae aap ke jankari ke khatir.',
'blocklogentry' => '[[$1]] ke roka jon ki $2 $3 khala hoi',
'reblock-logentry' => '[[$1]] ke block settings with an expiry time of $2 $3 ke badal dewa gais hai.',
'blocklogtext' => 'Ii suchi sadasya ke rukawat aur rukawat ke reverse kare ke baare me hai.
Apne se rokaa gais IP adress ii suchi me nai hai.
Abhi ke rukawat ke dekhe ke khatir meharbani kar ke [[Special:BlockList|block list]] ke dekho.',
'unblocklogentry' => '$1 ke rukawat ke reverse kar dewa gais hai',
'block-log-flags-anononly' => 'khaali bina naam ke sadasya',
'block-log-flags-nocreate' => 'nawaa account banae ke nai hai',
'block-log-flags-noautoblock' => 'apne se block kare ke ijajat nai hai',
'block-log-flags-noemail' => 'e-mail ke rok dewa gais hai',
'block-log-flags-nowiki_usertalk' => 'aapan baat waala panna ke apne se nai badle sakta hai',
'block-log-flags-angry-autoblock' => 'enhanced autoblock enabled',
'block-log-flags-hiddenname' => 'wiki_username ke lukae dewa gais hai',
'range_block_disabled' => 'Administrator ke adhikar, jisse range block banawa jaawat rahaa, ke rok dewa gais hai.',
'ipb_expiry_invalid' => 'Khalaas hoe waala time galat hai.',
'ipb_expiry_temp' => 'Lukawa gais wiki_username ke rukawat ke permanent hoe ke chaahi.',
'ipb_hide_invalid' => 'Ii account ke dabae nai sakaa hai; saait bahut jaada badlao hoi.',
'ipb_already_blocked' => '"$1" ke pahile rok dewa gais hai',
'ipb-needreblock' => '$1 ke rok dewa gais hai.
Ka aapp ii settings ke badle mangtaa hai?',
'ipb-otherblocks-header' => 'Duusra {{PLURAL:$1|block|blocks}}',
'unblock-hidewiki_user' => 'Aap ii sadasya ke unblock nai kare saktaa hae, kaaheki iske naam ke lukae dewa gais gae.',
'ipb_cant_unblock' => 'Error: Roke waala ID $1 nai milaa.
Saait iske pahile khol dewa gais hoi.',
'ipb_blocked_as_range' => 'Error: Ii IP $1 ke directly nai block karaa gais hai aur ii kaaran se iske unblock nai karaa jaawe sake hai.
Lekin iske, as part of the range $2, block karaa gais hai, jiske unblock karaa jaawe sake hai.',
'ip_range_invalid' => 'IP ke range me galti hai.',
'ip_range_toolarge' => '/$1 se barraa range blocks ke ijajat nai hae.',
'blockme' => 'Ham ke roko',
'proxyblocker' => 'Proxy roke waala',
'proxyblocker-disabled' => 'Ii function pe rukawat hai.',
'proxyblockreason' => 'Aap ke IP address ke block kar dewa gais hai kahe ki ii ek open proxy hai.
Meharbaani kar ke aap aapan Internet service provider, nai to tech support, ke contact kar ke ii serious security problem ke baare me batao.',
'proxyblocksuccess' => 'Hoe gais hai.',
'sorbsreason' => 'DNSBL used by {{SITENAME}} me aap ke IP address ke as an open proxy list karaa gais hai.',
'sorbs_create_account_reason' => 'DNSBL used by {{SITENAME}} me aap ke IP address ke as an open proxy list karaa gais hai.
Aap ke ek account banae ke ijajat nai hai',
'cant-block-while-blocked' => 'Aap, jab ki apne blocked hai, duusra sadasya ke block nai kare sakta hai.',
'cant-see-hidden-wiki_user' => 'Jon sadasya ke aap roke mangtaa hae ke pahile rok ke lukae dewa gais hae.
Jab ki aap ke lage hidewiki_user adhikaar nai hae, tab aap ii sadasya ke rukawat ke nai dekhe aur badle saktaa hae.',
'ipbblocked' => 'Aap duusra sadasya ke roke nai to kohle nai sakta hae, kaahe ki aap ke bhi rokaa gais hae',
'ipbnounblockself' => 'Aap apne ke khole nai saktaa hae',

# Developer tools
'lockdb' => 'Database ke band karo',
'unlockdb' => 'Database ke kholo',
'lockdbtext' => 'Database lock kare se duusra wiki_users ke panna badle, preferences badle, watchlists badle aur kuch chij jon ki database me kare ke parre hai, nai kare sakega.
Meharbani kar ke ii confirm karo ki aap yahi chij kare mangta hai aur aap maintenance ke baad, database ke khol degaa.',
'unlockdbtext' => 'Database unlock kare se duusra wiki_users ke panna badle, preferences badle, watchlists badle aur kuch chij jon ki database me kare ke parre hai, fir se kare sakega.
Meharbani kar ke ii confirm karo ki aap yahi chij kae mangtaa hai.',
'lockconfirm' => 'Haan, ham asliyat me database khole mangtaa hai.',
'unlockconfirm' => 'Haan, ham asliyat me database khole mangtaa hai.',
'lockbtn' => 'Database ke band karo',
'unlockbtn' => 'Database ke band karo',
'locknoconfirm' => 'Aap confirmation box ke tick nai karaa hai.',
'lockdbsuccesssub' => 'Database lock kar dewa gais hai',
'unlockdbsuccesssub' => 'Database khol dewa gais hai',
'lockdbsuccesstext' => 'Database ke band kar dewa gais hai.<br />
Yaad kar ke [[Special:UnlockDB|lock ke hatae dena]] maintenance khalaas kare ke baad.',
'unlockdbsuccesstext' => 'Database ke khol dewa gais hai.',
'lockfilenotwritable' => 'Database lock file me likha nai jaawe sake hai.
Database ke khole nai to band kare ke khatir, iske web server se likhe ke laayek hoe ke chaahi',
'databasenotlocked' => 'Database band nai hai.',
'lockedbyandtime' => '(se {{GENDER:$1|$1}} pe $2 hian $3)',

# Move page
'move-page' => '$1 ke naam badlo',
'move-page-legend' => 'Panna ke naam badlo',
'movepagetext' => "Niche ke form kaam me laae se panna ke naam badal jaai aur iske itihass nawaa naam ke niche hoe jaai.
Puraana title nawaa title pe redirect hoe jaai.
Aap uu redirect, jon ki pahile waala title pe jawe hai, ke update kare sakta hai.
Agar aap ii nai kare mangta hai, tab [[Special:DoubleRedirects|double]] nai to [[Special:BrokenRedirects|broken redirects]] ke check karna.
Aap ke jimewaari hai ki dekho ki links right jagah point kare hai.

Khayal rakhna ki agar jo nawaa title ke naam ke ek panna hai tab panna move '''nai''' hae saki jab tak ki panna khali nahi hai yah to redirect hai yah to koi pahile ke edit itihaas nahi hai.
Iske matlab ii hai ki aap ek panna ke naam badal ke wahi naam rakh de sakta hai jon naam pahile rahaa aur agar aap mistake karaa tab abhi ke panna ke overwrite nahi kare saktaa.

'''CHETAWANI'''
Ii ek lokpriye panna ke galti se badal de sake hai;
meharbaani kar ke aap aapan karya ke natiija ke baare me socho aage kuch kare se pahile.",
'movepagetext-noredirectfixer' => "Niche ke form kaam me laae se panna ke naam badal jaai aur iske itihass nawaa naam ke niche hoe jaai.
Puraana title nawaa title pe redirect hoe jaai.
Ii jaruri hae ki aap  [[Special:DoubleRedirects|double]] nai to [[Special:BrokenRedirects|broken redirects]] ke check karo.
Aap ke jimewaari hai ki dekho ki links right jagah point kare hai.

Khayal rakhna ki agar jo nawaa title ke naam ke ek panna hai tab panna move '''nai''' hae saki jab tak ki panna khali nahi hai yah to redirect hai yah to koi pahile ke edit itihaas nahi hai.
Iske matlab ii hai ki aap ek panna ke naam badal ke wahi naam rakh de sakta hai jon naam pahile rahaa aur agar aap mistake karaa tab abhi ke panna ke overwrite nahi kare saktaa.

'''CHETAWANI'''
Ii ek lokpriye panna ke galti se badal de sake hai;
meharbaani kar ke aap aapan karya ke natiija ke baare me socho aage kuch kare se pahile.",
'movepagetalktext' => "Saathe ke talk panna ke automatically move kar dewa jai ii panna ke saathe '''agar jo:'''
* khali nahi talk page nawaa naam ke already hai, yah
* Aap nivhe waala box ke uncheck karo
Ii prastithi me, aap ke manually move yah merge kare ke parri.",
'movearticle' => 'Panna ke naam badli karo:',
'movewiki_userpage-warning' => " '''Chetauni:'''  Aap ek sadasya ke panna ke naam badle waala hae. Ii yaad rakhna ki khaali panna ke naam badla jaai, sadasya ke naam ''nai'' badlaa jaai.",
'movenologin' => 'Logged in nai hai',
'movenologintext' => 'Panna ke naam badle ke khatir aap ke ek registered sadasya rahe ke parri aur  [[Special:wiki_userLogin|logged in]].',
'movenotallowed' => 'Aap ke panna ke naam badle ke ijajat nai hai.',
'movenotallowedfile' => 'Aap ke file ke naam badle ke ijajat nai hai.',
'cant-move-wiki_user-page' => 'Aap ke sadasya ke panna ke namm badle ke ijajat nai hai (subpages ke chhorr ke).',
'cant-move-to-wiki_user-page' => 'Aap ke koi panna ke hatae ke sadasya ke panna pe kare ke ijajat nai hai (sadasya ke subpage ke chhorr ke).',
'newtitle' => 'Nawaa title pe:',
'move-watch' => 'Ii panna pe dhyan rakho',
'movepagebtn' => 'Panna ke naam badlo',
'pagemovedsub' => 'Panna ke naam badle me safalta',
'movepage-moved' => '\'\'\'"$1" ke naam badal ke "$2" kar dewa gais hai\'\'\'',
'movepage-moved-redirect' => 'Ek redirect ke banae dewa gais hai.',
'movepage-moved-noredirect' => 'Ek redirect ke banae pe rukawat lagae dewa gais hai.',
'articleexists' => 'Uu naam ke panna abhi hai, nai to jon naam aap choose karaa hai valid nai hai.
Meharbani kar ke duusra naam choose karo.',
'cantmove-titleprotected' => 'Aap panna ke hatae ke ii jagah pe nai kare saktaa hai kahe ki nawaa title ke banae pe rukawat hai',
'talkexists' => "'''Panna ke naam badle me safalta hoe gais hai, lekin talk page ke naam nai badle sakaa hai kaheki uu naam ke talk page already hai. Iske manually merge karo.'''",
'movedto' => 'naam badal ke',
'movetalk' => 'Saathe ke baat waala panna ke bhi naam badlo',
'move-subpages' => 'Subpages ke naam badlo ($1 talak)',
'move-talk-subpages' => 'Subpages ke hatae ke baat waala panna pe kar do ($1 talak)',
'movepage-page-exists' => 'Panna $1 abhi hai aur iske uppar se nai likha jaawe sake hai.',
'movepage-page-moved' => 'Panna $1 ke naam badal ke $2 kar dewa gais hai.',
'movepage-page-unmoved' => 'Panna $1 ke naam badal ke $2 nai kare sakaa hai.',
'movepage-max-pages' => 'Jaada se jaada $1 {{PLURAL:$1|panna|panna}} ke hatae dewa gais hai, aur jaada ke ab nai hatawa jaai.',
'movelogpage' => 'Suchi ke jagah badlo',
'movelogpagetext' => 'Niche sab panna, jiske naam badla gais hai, ke suchi hai.',
'movesubpage' => '{{PLURAL:$1|Subpage|Subpages}}',
'movesubpagetext' => 'Ii panna me $1 {{PLURAL:$1|subpage|subpages}} hai jiske niche dekhawa gais hai.',
'movenosubpage' => 'Ii panna me koi subpages nai hai.',
'movereason' => 'Kaaran:',
'revertmove' => 'purana copy pe lae jao',
'delete_and_move' => 'Mitao aur hatao',
'delete_and_move_text' => '== Mitae ke jaruri hai ==
Destination panna "[[:$1]]" abhi hai.
Ka aap mangta hai ki iske mitae dewa jaae, jisse ki ii naam se duusra paana ke save karaa jaae sake?',
'delete_and_move_confirm' => 'Haan, panna ke mitao',
'delete_and_move_reason' => '"[[$1]]" se move kare ke khatir isk mitaya',
'selfmove' => 'Source aur destination title ke naam ekke hai;
panna ke wahi ke uppar nai save karaa jaae sake hai.',
'immobile-source-namespace' => 'Namespace "$1" me panna ke naam nai badle sakta hai',
'immobile-target-namespace' => 'Panna ke naam badal ke namespace "$1" me nai kare sakta hai',
'immobile-target-namespace-iw' => 'Interwiki link panna ke hatae ke valid target nai hai.',
'immobile-source-page' => 'Ii panna ke naam nai badla jaawe sake hai.',
'immobile-target-page' => 'Uu jagah pe nai move kare sakta hai.',
'imagenocrossnamespace' => 'File ke non-file namespace me hatae ke nai kare sakta hai',
'nonfile-cannot-move-to-file' => 'Ek chij jon ki file nai hae ke file waala jagha pe nai kare sakta hae',
'imagetypemismatch' => 'Nawaa file extension uske type se nai match kare hai.',
'imageinvalidfilename' => 'Jon naam pe aap badle mangtaa hai valid nai hai',
'fix-double-redirects' => 'Update any redirects that point to the original title',
'move-leave-redirect' => 'Ek redirect ke pichhe chhorro',
'protectedpagemovewarning' => 'Chetauni: Ii panna ke band kar dewa gais hai jisse ki khaali administrator logan iske naam badle sake hai.
Aap ke jaankari ke khatir sab se nawaa suchi niche dewa gais hae:',
'semiprotectedpagemovewarning' => 'Dhyan me rakhna: Ii panna ke band kar dewa gais hai jisse ki khaali registered sadasya iske naam badle sake hai.
Aap ke jaankari ke khatir sab se nawaa suchi ke niche dewa gais hae:',
'move-over-sharedrepo' => '==File hae==
[[:$1]] shared repository me hae. Ek file ke naam badal ke ii naam kare se shared file mit jaai.',
'file-exists-sharedrepo' => 'Jon file ke naam ke chuna gais hae, pahile se shared repository me hae.
Meharbani kar ke duusra naam do.',

# Export
'export' => 'Panna niryat karo',
'exporttext' => 'Aap ek khaas panna, nai to dher panna jon ki XML me bandha hai, ke text aur balao ke itihass ke export kare saktaa hai.
Iske duusra wiki me MediaWiki [[Special:Import|import panna]] se import karaa jaawe sake hai.

Panna ke export kare ke khatir titles ke niche ke text box me likho, ek line pe ek title, aur ii select karo ki aap abhi ke version ke saathe purana version mangtaa hai, panna ke itihaas ke saathe, nai to abhi ke version jisme last badlao ke jankari hai.

Duusra case me aap ek link ke bhi use kare saktaa hai, jaise ki [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] panna ke khatir "[[{{MediaWiki:Mainpage}}]]".',
'exportall' => 'Sab panna ke export karo',
'exportcuronly' => 'Khaali abhi ke badlao ke export karo, puura itihass nai',
'exportnohistory' => "----
'''Dhyan rakhna:''' Ii form se panna ke puura itihass ke export kare pe rok lagae dewa gais hai due to performance ke kaaran.",
'exportlistauthors' => 'Har ek panna me yogdaan de waala ke naam ke bhi include karo',
'export-submit' => 'Export karo',
'export-addcattext' => 'Ii vibhag me se panna jorro:',
'export-addcat' => 'Jorro',
'export-addnstext' => 'Namespace me se panna jorro:',
'export-addns' => 'Jorro',
'export-download' => 'Save as file',
'export-templates' => 'Templates ke include karo',
'export-pagelinks' => 'Include linked pages to a depth of:',

# Namespace 8 related
'allmessages' => 'System sandesh',
'allmessagesname' => 'Naam',
'allmessagesdefault' => 'Default text',
'allmessagescurrent' => 'Abhi ke text',
'allmessagestext' => 'Ii ek system sandes ke suchi hai jon ki MediaWiki namespace me pawa jaae sake hai.
Agar aap generic MediaWiki localisation ke yogdaan de mangtaa hai tab meharbani kar ke [//www.mediawiki.org/wiki/Localisation MediaWiki Localisation] aur [//translatewiki.net translatewiki.net]  pe jao.',
'allmessagesnotsupportedDB' => "Ii panna ke kaam me nai lawa jaae sake hai kahe ki '''\$wgUseDatabaseMessages''' ke band kar dewa gais hai.",
'allmessages-filter-legend' => 'Chaalo',
'allmessages-filter' => 'Customisation state se chhaano',
'allmessages-filter-unmodified' => 'Badlawa nai gais hae',
'allmessages-filter-all' => 'Sab',
'allmessages-filter-modified' => 'Badlawa gais hae',
'allmessages-prefix' => 'Prefix se chhaano:',
'allmessages-language' => 'Bhasa:',
'allmessages-filter-submit' => 'Jaao',

# Thumbnails
'thumbnail-more' => 'Barraa karo',
'filemissing' => 'File missing',
'thumbnail_error' => 'Thumbnail banae me galti hoe gais: $1',
'djvu_page_error' => 'DjVu panna range me nai hae',
'djvu_no_xml' => ' DjVu file ke XML ke nai paawe sakaa hae',
'thumbnail-temp-create' => 'Temporary thumbnail file ke nai banae sakaa hae',
'thumbnail-dest-create' => 'Destination ke thumbnail ke bajae nai sakaa hae',
'thumbnail_invalid_params' => 'Thumbnail ke parameter valid nai hae',
'thumbnail_dest_directory' => 'Destination directory ke nai banaawe sakaa hae',
'thumbnail_image-type' => 'Ii rakam ke chapa ke support nai karaa jaawe hai',
'thumbnail_gd-library' => 'Incomplete GD library configuration: missing function $1',
'thumbnail_image-missing' => 'Ii naam ke file nai hae: $1',

# Special:Import
'import' => 'Panna ke import karo',
'importinterwiki' => 'Transwiki se ayaat',
'import-interwiki-text' => 'Ek wiki aur panna ke title ke select karo.
Badalo ke tarik aur badle waala sadasya ke naam wahii rakam rahii.
Sab transwiki import actions ke [[Special:Log/import|import log]] pe log karaa jaawe hai.',
'import-interwiki-source' => 'Suruu waala wiki/panna:',
'import-interwiki-history' => 'Ii panna ke sab badlao ke itihaas ke copy karo',
'import-interwiki-templates' => 'Sab template ke include karo',
'import-interwiki-submit' => 'Import karo',
'import-interwiki-namespace' => 'Manzil waala namespace:',
'import-interwiki-rootpage' => 'Destination root panna (optional):',
'import-upload-filename' => 'File ke naam:',
'import-comment' => 'Aapan bichar do:',
'importtext' => 'Meharbani kar ke file ke [[Special:Export|export utility]] use kar ke source wiki me se export karo.
Aapan computer me save kar ke  hian pe upload karo.',
'importstart' => 'Panna ke import karta hai...',
'import-revision-count' => '$1 {{PLURAL:$1|badlao|badlao}}',
'importnopages' => 'Koi panna import kare ke nai hai.',
'imported-log-entries' => '$1 {{PLURAL:$1|log entry|log entry}} ke lawa gais hae.',
'importfailed' => 'Import fail hoe gais: <nowiki>$1</nowiki>',
'importunknownsource' => 'Ayaat kare waala jagha ke rakam nai maalum.',
'importcantopen' => 'Import file ke khole nai sakaa',
'importbadinterwiki' => 'Kharaab interwiki jorr',
'importnotext' => 'Khaali nai to kuchh nai likha hai',
'importsuccess' => 'Import khalaas hoe gais hai!',
'importhistoryconflict' => 'Badlao ke itihass me conflict hai (saait ii panna ke pahile import karaa gais rahaa)',
'importnosources' => 'Koi interwiki import source ke define nai karaa gais hai aur direct itihass ke upload ke rok dewa gais hai.',
'importnofile' => 'Koi import file ke upload nai karaa gais hai.',
'importuploaderrorsize' => 'Import file ke upload nai kare sakaa hai.
Ii file ke size allowed upload size se barraa hai.',
'importuploaderrorpartial' => 'Import file ke upload nai kare sakaa hai.
Ii file ke khaali thora hissa ke upload karaa gais hai.',
'importuploaderrortemp' => 'Import file ke upload nai kare sakaa hai.
Ek temporary file nai hai.',
'import-parse-failure' => 'XML import parse fail hoe gais hai',
'import-noarticle' => 'Koi panna import kare ke nai hai!',
'import-nonewrevisions' => 'Sab badlao ke pahile import karaa gais hai.',
'xml-error-string' => '$1 line $2 me, col $3 (byte $4): $5',
'import-upload' => 'XML data ke upload karo',
'import-token-mismatch' => 'Loss of session data.
Meharbani kar ke, fir se kosis karo.',
'import-invalid-interwiki' => 'Naam dewa gais wiki se import nai kare saktaa hai.',
'import-error-edit' => 'Panna "$1" ke import nai kara gais kaahe ki aap ke badle ke adhikar nai hae.',
'import-error-create' => 'Panna "$1" ke import nai kara gais kaahe ki aap ke panna banae ke adhikar nai hae.',
'import-error-interwiki' => 'Panna "$1" ke import nai kara gais kaahe ki ii panna ke external linking (interwiki) ke khatir reserve karaa gais hae.',
'import-error-special' => 'Panna "$1" ke import nai karaa gais hae kaaheki ii ek khaas namespace hae jisme panna nai banawa jaae sake hae.',
'import-error-invalid' => 'Panna "$1" ke import nai karaa gais hae kaaheki iske naam kharaab hae.',
'import-options-wrong' => 'Galat {{PLURAL:$2|option|options}}: <nowiki>$1</nowiki>',
'import-rootpage-invalid' => 'Derwa gais root panna ek kharaab title hae',
'import-rootpage-nosubpage' => 'Root panna ke namespace "$1" sub panna ke nai allow kare hae.',

# Import log
'importlogpage' => 'Suchi ke import karo',
'importlogpagetext' => 'Duusra wiki se panna aur badlao ke itihaas ke administrative imports.',
'import-logentry-upload' => 'file upload se [[$1]] ke import karaa gais hai',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|badlao|badlao}}',
'import-logentry-interwiki' => 'transwikied $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|badlao|badlao}} $2 se',

# JavaScriptTest
'javascripttest' => 'JavaScript ke testing',
'javascripttest-title' => '$1 tests ke chaalu karaa jaae hae',
'javascripttest-pagetext-noframework' => 'Ii panna ke JavaScript test ke kare ke khatir reserve karaa gais hae.',
'javascripttest-pagetext-unknownframework' => 'Anjaan testing framework "$1".',
'javascripttest-pagetext-frameworks' => 'Meharbaani kar ke ek testing framework ke chuno: $1',
'javascripttest-pagetext-skins' => 'Test kare ke khatir ek chamrraa ke chuno:',
'javascripttest-qunit-intro' => 'mediawiki.org me [$1 testing documentation] ke dekho.',
'javascripttest-qunit-heading' => 'MediaWiki JavaScript QUnit test suite',

# Tooltip help for the actions
'tooltip-pt-wiki_userpage' => 'Aap ke sadasya panna',
'tooltip-pt-anonwiki_userpage' => 'IP jisme se aap edit karta hai ke sadasya panna',
'tooltip-pt-mytalk' => 'Aap ke baat waala panna',
'tooltip-pt-anontalk' => 'Ii IP address se badlao pe salah',
'tooltip-pt-preferences' => 'Hamaar pasand',
'tooltip-pt-watchlist' => 'Panna ke suchi jispe aap dhyan rakhaa hae',
'tooltip-pt-mycontris' => 'Aap ke yogdaan ke suchi',
'tooltip-pt-login' => 'Aap log in kartaa tab achchha rahataa; lekin jaruri nai hae.',
'tooltip-pt-anonlogin' => 'Aap ke login kare ke encourage karaa jaawe hai lekin ii jaruri nai hai',
'tooltip-pt-logout' => 'Log out',
'tooltip-ca-talk' => 'Content waala panna ke baare me salah',
'tooltip-ca-edit' => 'Aap ii panna ke badle sakta hai. Meherbaani kar ke bachae se pahile preview button ke kaam me laana.',
'tooltip-ca-addsection' => 'Nawaa section suruu karo',
'tooltip-ca-viewsource' => 'Ii panna surakchhit hai. Aap iske sooti dekhe sakta hai.',
'tooltip-ca-history' => 'Ii panna ke pahile ke badlao',
'tooltip-ca-protect' => 'Ii panna ke bachao',
'tooltip-ca-unprotect' => 'Ii panna ke surakchha ke badlo',
'tooltip-ca-delete' => 'Ii panna ke delete karo',
'tooltip-ca-undelete' => 'Ii panna ke mitae se pahile ke sab badlao ke pahile jaise karo',
'tooltip-ca-move' => 'Ii panna ke duusra jagah karo',
'tooltip-ca-watch' => 'Ii panna ke aapan dhyan suchi me jorro',
'tooltip-ca-unwatch' => 'Ii panna ke aapan dhyan suchi se hatao',
'tooltip-search' => '{{SITENAME}} khojo',
'tooltip-search-go' => 'Agar ii naam ke panna hae tab wahii pe jaao',
'tooltip-search-fulltext' => 'Ii sabd ke sab panna me khojo',
'tooltip-p-logo' => 'Pahila panna pe jaao',
'tooltip-n-mainpage' => 'Pahila panna dekho',
'tooltip-n-mainpage-description' => 'Pahila panna pe jaao',
'tooltip-n-portal' => 'Project ke baare me, app kaunchi kare sakta hae, kahaan pe chij milii',
'tooltip-n-currentevents' => 'Abhi ke samachar ke baare me aur jankari',
'tooltip-n-recentchanges' => 'Ii wiki me abhi haali ke badlaa waala suchi.',
'tooltip-n-randompage' => 'Koi bhi panna ke kholo',
'tooltip-n-help' => 'Khoje waala jagah.',
'tooltip-t-whatlinkshere' => 'Sab wiki panna ke suchi jon ki hian par jurre hae',
'tooltip-t-recentchangeslinked' => 'Panna jon ki ii panna se jurra hai ke nawaa badlao',
'tooltip-feed-rss' => 'Ii panna ke khatir RSS feed',
'tooltip-feed-atom' => 'Ii panna ke khatir atom feed',
'tooltip-t-contributions' => 'Ii sadasya ke yogdaan ke suchi dekho',
'tooltip-t-emailwiki_user' => 'Ii wiki_user ke lage ek mail bhejo',
'tooltip-t-upload' => 'File upload karo',
'tooltip-t-specialpages' => 'Sab khaas panna ke suchi',
'tooltip-t-print' => 'Ii panna ke chhape waala version',
'tooltip-t-permalink' => 'Ii panna ke ii badlao ke pakka jorr',
'tooltip-ca-nstab-main' => 'Content panna ke dekho',
'tooltip-ca-nstab-wiki_user' => 'Sadasya ke panna dekho',
'tooltip-ca-nstab-media' => 'Media panna ke dekho',
'tooltip-ca-nstab-special' => 'Ii ek khaas panna hai, ii panna ke aap badle nai sakta hai',
'tooltip-ca-nstab-project' => 'Project panna ke dekho',
'tooltip-ca-nstab-image' => 'File panna ke dekho',
'tooltip-ca-nstab-mediawiki' => 'system sandes ke dekho',
'tooltip-ca-nstab-template' => 'Template dekho',
'tooltip-ca-nstab-help' => 'Sahaeta waala panna dekho',
'tooltip-ca-nstab-category' => 'Vibhag panna ke dekho',
'tooltip-minoredit' => 'Ii badlao ke chhota badlao ke chihna lagao',
'tooltip-save' => 'Aapan badlao ke bachao',
'tooltip-preview' => 'Badlao ke preview karo, bachae se pahile!',
'tooltip-diff' => 'Dekhao ki aap kon chij badlaa hae',
'tooltip-compareselectedversions' => 'Ii panna ke dui chuna gais version ke antar dekho.',
'tooltip-watch' => 'Ii panna ke aapan dhyan suchi me jorro',
'tooltip-watchlistedit-normal-submit' => 'Title ke hatao',
'tooltip-watchlistedit-raw-submit' => 'Dhyan suchi ke update karo',
'tooltip-recreate' => 'Ii panna ke pahile mitaae pe bhi iske fir se banao',
'tooltip-upload' => 'Upload suruu karo',
'tooltip-rollback' => '"Rollback" ii panna ke badlao ke isse pahile waala badlao pe, ek click me, kar dewe hai',
'tooltip-undo' => '"Undo" ii badlao ke pahile jaise kar de hai aur edit form ke preview mode me khole hai.
Ii summary me ek kaaran jorre ke ijajat de hai.',
'tooltip-preferences-save' => 'Pasand ke bachao',
'tooltip-summary' => 'Thora sabd me likho',

# Metadata
'notacceptable' => 'Wiki server uu rakam se data nai dewe sake hai jisse ki aap ke client parrhe sake.',

# Attribution
'anonymous' => 'Anonymous {{PLURAL:$1|sadasya|sadasya}} {{SITENAME}} ke',
'sitewiki_user' => '{{SITENAME}} sadasya $1',
'anonwiki_user' => '{{SITENAME}} benaam sadasya $1',
'lastmodifiedatby' => 'Ii panna ke aakhri dafe $3 badlis rahaa $2, $1.',
'othercontribs' => 'Ii $1 ke kaam pe based hae.',
'others' => 'duusra jane',
'sitewiki_users' => '{{SITENAME}} {{PLURAL:$2|sadasya|sadasya}} $1',
'anonwiki_users' => '{{SITENAME}} benaam {{PLURAL:$2|sadasya|sadasya}} $1',
'creditspage' => 'Panna ke credit',
'nocredits' => 'Ii panna ke khatir koi credit ke baare me jaankari nai hai.',

# Spam protection
'spamprotectiontitle' => 'Spam protection filter',
'spamprotectiontext' => 'Jon panna ke aap save kare mangta rahaa ke spam filter rok diis hai.
Ii saait ii kaaran se hoi ki panna ke ek jorr koi blacklisted external site se hai.',
'spamprotectionmatch' => 'Ii text spam filter ke trigger karis rahaa: $1',
'spambot_wiki_username' => 'MediaWiki spam ke safai',
'spam_reverting' => 'Pahile waala badalo, jisme $1 se link nai hai, pe karaa jaawe hai',
'spam_blanking' => 'Sab badlao jisme $1 se jorr hai, ke mitawa jaawe hai',
'spam_deleting' => 'Sab badlao jisme $1 se jorr hai, ke mitawa jaawe hai',

# Info page
'pageinfo-title' => '"$1" ke khatir jaankari',
'pageinfo-not-current' => 'Maaf karna, lekin purana badlao ke baare me ii jaankari nai de saktaa hae.',
'pageinfo-header-basic' => 'Basic jaankari',
'pageinfo-header-edits' => 'Itihaas ke badlo',
'pageinfo-header-restrictions' => 'Panna ke protection',
'pageinfo-header-properties' => 'Panna ke property',
'pageinfo-display-title' => 'Title ke dekhao',
'pageinfo-default-sort' => 'Default sort key',
'pageinfo-length' => 'Panna ke lambai (bytes me)',
'pageinfo-article-id' => 'Panna ke ID',
'pageinfo-robot-policy' => 'Search engine ke status',
'pageinfo-robot-index' => 'Indexable',
'pageinfo-robot-noindex' => 'Indexable nai hae',
'pageinfo-views' => 'Ketna dafe dekha gais hae',
'pageinfo-watchers' => 'Ketnaa jane panna ke dekhe hae',
'pageinfo-redirects-name' => 'Ii panna pe redirect karo',
'pageinfo-subpages-name' => 'Ii panna ke subpage',
'pageinfo-subpages-value' => '$1 ($2 {{PLURAL:$2|redirect|redirects}}; $3 {{PLURAL:$3|non-redirect|non-redirects}})',
'pageinfo-firstwiki_user' => 'Panna ke suruu kare waala',
'pageinfo-firsttime' => 'Panna kon tarik ke banawa gais',
'pageinfo-lastwiki_user' => 'Pichhla badle waala',
'pageinfo-lasttime' => 'Pichhla tarik jab ki isme badlao karaa gais ghae',
'pageinfo-edits' => 'Badlao ke kul jorr',
'pageinfo-authors' => 'Badlao kare waala ke kul jorr',
'pageinfo-recent-edits' => 'Haali ke badlao ke jorr (pichhle $1 me)',
'pageinfo-recent-authors' => 'Abhi haali badle waala ne number',
'pageinfo-magic-words' => 'Magic {{PLURAL:$1|sabd}} ($1)',
'pageinfo-hidden-categories' => 'Lukawa gais {{PLURAL:$1|category|categories}} ($1)',
'pageinfo-templates' => 'Transcluded {{PLURAL:$1|template|templates}} ($1)',

# Patrolling
'markaspatrolleddiff' => 'Mark karo ke pahraa dewa jaawe hai',
'markaspatrolledtext' => 'Mark karo ki panna pe pahraa dewa jaawe hai',
'markedaspatrolled' => 'Mark karo ke pahraa dewa jaawe hai',
'markedaspatrolledtext' => 'Pasand karaa gais [[:$1]]  ke badlao pe pahraa dewa jaawe hai',
'rcpatroldisabled' => 'Nawaa badlao pe pahraa de ke ijajat nai hai',
'rcpatroldisabledtext' => 'Nawaa badla pe abhi pahraa nai dewa jaawe hai',
'markedaspatrollederror' => 'Ispe pahraa nai dewa jaawe sake hai',
'markedaspatrollederrortext' => 'Aap ke ek badlao ke mark kare ke chaahi jispe pahraa dewa jaawe sake hai',
'markedaspatrollederror-noautopatrol' => 'Aap ke aapan badlao pe pahraa dewe ke ijajat nai hai.',

# Patrol log
'patrol-log-page' => 'Pahraa de waala suchi',
'patrol-log-header' => 'Ii pahraa dewa gais badlao ke suchi hai.',
'log-show-hide-patrol' => '$1 pahraa de waala suchi',

# Image deletion
'deletedrevision' => 'Purana badlao ke mitae dia hai $1',
'filedeleteerror-short' => 'File ke mitae me galti hoe gais: $1',
'filedeleteerror-long' => 'File ke mitae ke time garrbarr hoe gais:

$1',
'filedelete-missing' => 'File "$1" ke nai mitawa jaawe sake hai, kahe ki ii naam ke koi file nai hai.',
'filedelete-old-unregistered' => 'Specified file ke badlao "$1" database me nai hai.',
'filedelete-current-unregistered' => 'Specify karaa gais file "$1" database me nai hai.',
'filedelete-archive-read-only' => 'Archive directory "$1" me webserver se nai likha jaawe sake hai.',

# Browsing diffs
'previousdiff' => '← Purana badlao',
'nextdiff' => 'Nawaa badlao →',

# Media information
'mediawarning' => "'''Chetauni''': Ii file me saait kharaab code hoi.
Iske execute kare se aap ke system me garrbarr hoe sake hae.",
'imagemaxsize' => "Chapa jaada se jaada ketnaa barraahoe sake hai:<br />''(file ke baare me panna)''",
'thumbsize' => 'Anguutha ke nakkhuun etna barraa:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|panna|panna}}',
'file-info' => 'file etnaa barraa: $1, MIME rakam: $2',
'file-info-size' => '$1 × $2 pixel, file ke size: $3, MIME type: $4',
'file-info-size-pages' => '$1 × $2 pixels, file size: $3, MIME type: $4, $5 {{PLURAL:$5|panna}}',
'file-nohires' => 'Aur achchha resolution nai hai.',
'svg-long-desc' => 'SVG file, naam kare ke khatir  $1 × $2 pixels, file size: $3',
'svg-long-desc-animated' => 'Animated SVG file, naam kare ke khatir  $1 × $2 pixels, file size: $3',
'show-big-image' => 'Puura resolution',
'show-big-image-preview' => 'Ii preview ke size: $1',
'show-big-image-other' => 'Duusra {{PLURAL:$2|resolution|resolutions}}: $1',
'show-big-image-size' => '$1 × $2 pixels',
'file-info-gif-looped' => 'Ghuum ghumae ke wahii jagha pe aawe hae',
'file-info-gif-frames' => '$1 {{PLURAL:$1|frame|frames}}',
'file-info-png-looped' => 'ghum ghumae ke wahii jagha pe aae hae',
'file-info-png-repeat' => '$1 {{PLURAL:$1|dafe|dafe}} bajawa gais hae',
'file-info-png-frames' => '$1 {{PLURAL:$1|frame|frames}}',
'file-no-thumb-animation' => "'''Note: Technical limitations ke kaaran, II file ke thumbnail animated nai rahii.'''",
'file-no-thumb-animation-gif' => "'''Note: Technical limitations ke kaaran, high resolution GIF images ke thumbnail, jaise ki ii waala, animate nai hoi.'''",

# Special:NewFiles
'newimages' => 'Nawaa files ke gallery',
'imagelisttext' => "Niche ek suchi hai '''$1''' ke {{PLURAL:$1|file|files}} sorted $2.",
'newimages-summary' => 'Ii khaas panna pahile waala upload karaa gais file ke dekhae hai.',
'newimages-legend' => 'Chaalo',
'newimages-label' => 'Filename (nai to iske ek hissa):',
'showhidebots' => '($1 bots)',
'noimages' => 'Koi chij dekhe ke nai hai.',
'ilsubmit' => 'Khojo',
'bydate' => 'tarik se',
'sp-newimages-showfrom' => ' $2, $1 se suruu kar ke nawaa file ke dekhao',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds' => '{{PLURAL:$1|$1 second|$1 seconds}}',
'minutes' => '{{PLURAL:$1|$1 second|$1 seconds}}',
'hours' => '{{PLURAL:$1|$1 ghanta}}',
'days' => '{{PLURAL:$1|$1 din}}',
'ago' => '$1 pahile',

# Bad image list
'bad_image_list' => 'Format ii rakam hai:

Khaali suchi waala chij  (jon line * se suruu hoe hai) ke dekha jaai. Line me pahila jorr kharab file ke jorr hoe ke chaahi.
Wahii line pe aur koi jorr exception consider karaa jai i.e. jahaan pe panna sake inline hoe.',

# Metadata
'metadata' => 'Metadata',
'metadata-help' => 'Ii file me aur jaakari hai, sake hai ki digital camera nai to scanner se ii file ke banawa gais rahaa. Agar jo ii file ke original source se badal dewa gais hai tkorra kuch chij modified file se farak rahi.',
'metadata-expand' => 'Barrhaya gais jankari dekhao',
'metadata-collapse' => 'Aur details ke lukae do.',
'metadata-fields' => 'Ii suchi me dewa gae jaankari file ke niche sab time dekhai. Bachaa jaankari chhupaa rahi
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# EXIF tags
'exif-imagewidth' => 'Chaurrai',
'exif-imagelength' => 'Unchai',
'exif-bitspersample' => 'Bits per component',
'exif-compression' => 'Compression scheme',
'exif-photometricinterpretation' => 'Pixel ke banawat',
'exif-orientation' => 'Orientation',
'exif-samplesperpixel' => 'Tukrraa ke ginti',
'exif-planarconfiguration' => 'aakrraa ke parbandh',
'exif-ycbcrsubsampling' => 'Subsampling ratio of Y to C',
'exif-ycbcrpositioning' => 'Y aur C ke jagha',
'exif-xresolution' => 'Baraabar ke resolution',
'exif-yresolution' => 'Kharraa resolution',
'exif-stripoffsets' => 'Chapa ke aankrraa ke jagha',
'exif-rowsperstrip' => 'Ek strip me etna row hae',
'exif-stripbytecounts' => 'Ek compressed strip pe ketna byte',
'exif-jpeginterchangeformat' => 'JPEG SOI se ketna offset',
'exif-jpeginterchangeformatlength' => 'Ketna JPEG data, bytes me',
'exif-whitepoint' => 'Ujjar point ke quality',
'exif-primarychromaticities' => 'Primary rang ke quality',
'exif-ycbcrcoefficients' => 'Rang space transformation matrix coefficients',
'exif-referenceblackwhite' => 'Ek jorraa karia aur ujjar reference values',
'exif-datetime' => 'Suchi ke badle waala tarik aur samay',
'exif-imagedescription' => 'Chapa ke padwi',
'exif-make' => 'Camera ke banae waala',
'exif-model' => 'Camera ke model',
'exif-software' => 'Software jiske kaam me lawa gais hae',
'exif-artist' => 'Likhe waala',
'exif-copyright' => 'Copyright ke adhikar rakkhae waala',
'exif-exifversion' => 'Exif ke version',
'exif-flashpixversion' => 'Flashpix version jiske support karaa jaawe hae',
'exif-colorspace' => 'Rang ke jagha',
'exif-componentsconfiguration' => 'Har ek component ke matlab',
'exif-compressedbitsperpixel' => 'Chapa ke compression mode',
'exif-pixelydimension' => 'Chaapa ke thiik chaurrai',
'exif-pixelxdimension' => 'Chaapa ke thiik uunchai',
'exif-wiki_usercomment' => 'Sadasysa ke bichar',
'exif-relatedsoundfile' => 'Saathe waala awaaj waala file',
'exif-datetimeoriginal' => 'Data generation ke tarik aur time',
'exif-datetimedigitized' => 'Digitizing ke tarik aur time',
'exif-subsectime' => 'Tarik aur time subseconds me',
'exif-subsectimeoriginal' => 'Pahila tarik aur time subseconds me',
'exif-subsectimedigitized' => 'Digitized tarik aur time subseconds me',
'exif-exposuretime' => 'Exposure time',
'exif-exposuretime-format' => '$1 sec ($2)',
'exif-fnumber' => 'F Number',
'exif-exposureprogram' => 'Exposure Program',
'exif-spectralsensitivity' => 'Ketna achchhaa se ujaala ke pakrre sake hae',
'exif-isospeedratings' => 'ISO ke raftaar rating',
'exif-shutterspeedvalue' => 'APEX shutter ke raftaar',
'exif-aperturevalue' => 'APEX aperture',
'exif-brightnessvalue' => 'APEX chamak',
'exif-exposurebiasvalue' => 'Exposure bias',
'exif-maxaperturevalue' => 'Sab se jaada land aperture',
'exif-subjectdistance' => 'Chij se duuri',
'exif-meteringmode' => 'Meter ke mode',
'exif-lightsource' => 'Ujala ke soti',
'exif-flash' => 'Chamak',
'exif-focallength' => 'Lens ke focal length',
'exif-subjectarea' => 'Vishay ke jagha',
'exif-flashenergy' => 'Chamak ke taagat',
'exif-focalplanexresolution' => 'Focal plane X resolution',
'exif-focalplaneyresolution' => 'Focal plane Y ke resolution',
'exif-focalplaneresolutionunit' => 'Focal plane resolution unit',
'exif-subjectlocation' => 'Subject ke location',
'exif-exposureindex' => 'Exposure ke index',
'exif-sensingmethod' => 'Sense kare waala method',
'exif-filesource' => 'File ke source',
'exif-scenetype' => 'Kon rakam ke scene hae',
'exif-exposuremode' => 'Custom image processing',
'exif-whitebalance' => 'White balance',
'exif-digitalzoomratio' => 'Digital zoom ratio',
'exif-focallengthin35mmfilm' => '35 mm film me focal length',
'exif-scenecapturetype' => 'Scene capture type',
'exif-gaincontrol' => 'Scene ke control kare waala',
'exif-contrast' => 'Contrast',
'exif-saturation' => 'Saturation',
'exif-sharpness' => 'Sharpness',
'exif-devicesettingdescription' => 'Device settings ke description',
'exif-subjectdistancerange' => 'Custom image processing',
'exif-imageuniqueid' => 'Unique image ID',
'exif-gpslatituderef' => 'Uttar aur dakchhin latitude',
'exif-gpslongituderef' => 'Purab aur pachchhim longitude',
'exif-gpsaltitude' => 'Uunchai',
'exif-gpsspeedref' => 'Raftar ke unit',
'exif-gpsdestdistance' => 'Manjil se duuri',
'exif-gpsareainformation' => 'GPS ilaka ke naam',
'exif-gpsdatestamp' => 'GPS ke taarik',
'exif-worldregioncreated' => 'Duniya ke hissa jahan pe ii chhapa lewa gais hae',
'exif-countrycreated' => 'Des jahan pe ii chhapa lewa gais hae',
'exif-countrycodecreated' => 'Des ke code jahan pe ii chhapa lewa gais hae',
'exif-provinceorstatecreated' => 'Province nai to state jahan pe ii chhapa lewa gais hae',
'exif-citycreated' => 'City jahan pe ii chhapa lewa gais hae',
'exif-sublocationcreated' => 'City ke hissa jahan pe ii chhapa lewa gais hae',
'exif-countrydest' => 'Des dekhawa gais',
'exif-countrycodedest' => 'Des ke code dekhawa gais',
'exif-provinceorstatedest' => 'Province, nai to state dekhawa gais',
'exif-citydest' => 'City dekhawa gais',
'exif-sublocationdest' => 'City ke hissa dekhawa gais',
'exif-objectname' => 'Chhota title',
'exif-specialinstructions' => 'Khaas instruction',
'exif-headline' => 'Headline',
'exif-credit' => 'Credit/Provider',
'exif-source' => 'Source',
'exif-editstatus' => 'Chhapa ke editorial status',
'exif-urgency' => 'Urgency',
'exif-fixtureidentifier' => 'Fixture ke naam',
'exif-languagecode' => 'Bhasa',
'exif-iimcategory' => 'Vibhag',
'exif-copyrighted' => 'Copyright ke haalat:',
'exif-copyrightowner' => 'Copyright ke adhikar rakkhe waala',
'exif-usageterms' => 'Use kare ke shart',

'exif-orientation-2' => 'Baraabar ultawa gais hae',
'exif-orientation-3' => '180° ghumawa gais hae',
'exif-orientation-4' => 'Khrraa ultawa gais hae',
'exif-orientation-5' => '90° CCW ghumawa aur kharraa ultawa gais hae',
'exif-orientation-6' => '90° CCW ghumawa gais hae',
'exif-orientation-7' => '90° CW ghumawa aur kharraa ultawa gais hae',
'exif-orientation-8' => '90° CW ghumawa gais hae',

'exif-meteringmode-0' => 'Nai maluum',
'exif-meteringmode-6' => 'Puura nai',
'exif-meteringmode-255' => 'Duusra',

'exif-lightsource-0' => 'Nai maluum',
'exif-lightsource-1' => 'Din',
'exif-lightsource-4' => 'Chamak',
'exif-lightsource-9' => 'Achchhaa mausam',
'exif-lightsource-10' => 'Baadal ke mausam',
'exif-lightsource-11' => 'Chhanhi',

# Flash modes
'exif-flash-fired-0' => 'Flash nai chalaa',
'exif-flash-fired-1' => 'Flash chal gais hae',
'exif-flash-mode-1' => 'flash ke kaam me laae ke jaruri hae',
'exif-flash-mode-2' => 'flash ke kaam me nai laae ke chaahi',
'exif-flash-function-1' => 'Flash nai hae',
'exif-flash-redeye-1' => 'laal-aankhi ke kamti kare waala mode',

'exif-contrast-1' => 'Naram',

'exif-sharpness-1' => 'Naram',
'exif-sharpness-2' => 'Karraa',

'exif-subjectdistancerange-2' => 'Najdik se dekho',
'exif-subjectdistancerange-3' => 'Duur se dekho',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-n' => 'Knots',

# External editor support
'edit-externally' => 'Ii file ke bahaari program me kaam me laae ke badlo',
'edit-externally-help' => '(Aur jaankari khatir [//www.mediawiki.org/wiki/Manual:External_editors setup instructions] ke dekho)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'sab',
'namespacesall' => 'sab',
'monthsall' => 'sab',
'limitall' => 'sab',

# E-mail address confirmation
'confirmemail' => 'E-mail address ke pakka karo',

# Delete conflict
'recreate' => 'Fir se banao',

# action=purge
'confirm_purge_button' => 'Thik hae',
'confirm-purge-top' => 'Ii panna ke cache ke mitao',

# Multipage image navigation
'imgmultipageprev' => '← pahile waala panna',
'imgmultipagenext' => 'aage waala panna →',
'imgmultigo' => 'Jaao!',
'imgmultigoto' => '$1 panna pe jaao',

# Table pager
'table_pager_next' => 'Aage waala panna',
'table_pager_prev' => 'Pahile waala panna',
'table_pager_first' => 'Pahila panna',
'table_pager_last' => 'Aakhri panna',
'table_pager_limit' => 'Ek panna pe $1 chij dekhao',
'table_pager_limit_label' => 'Ek panna me etna chij rahe hae:',
'table_pager_limit_submit' => 'Jaao',

# Auto-summaries
'autosumm-blank' => 'Panna ke mitae dia hae',

# Watchlist editor
'watchlistedit-noitems' => 'Aap ke dhyan suchi me koi naam nai hae',
'watchlistedit-normal-title' => 'Dhyan suchi ke badlo',

# Watchlist editing tools
'watchlisttools-view' => 'Jaruri badlao dekho',
'watchlisttools-edit' => 'Dhyan suchi ke dekho aur badlo',
'watchlisttools-raw' => 'Dhyan suchi ke apne sampadan karo',

# Core parser functions
'duplicate-defaultsort' => '\'\'\'Chetauni:\'\'\' Default sort key "$2" pahile ke default sort key "$1" ke override kare hae.',

# Special:Version
'version' => 'Badlao',
'version-specialpages' => 'Khaas panna',
'version-other' => 'Duusra',
'version-poweredby-others' => 'duusra waala',

# Special:FilePath
'filepath-submit' => 'Jaao',

# Special:FileDuplicateSearch
'fileduplicatesearch-filename' => 'File ke naam:',
'fileduplicatesearch-submit' => 'Khojo',

# Special:SpecialPages
'specialpages' => 'Khaas panna',
'specialpages-group-other' => 'Duusra khaas panna',
'specialpages-group-login' => 'Login karo/Nawaa account banao',
'specialpages-group-highuse' => 'Jaada kaam me laae waala panna',
'specialpages-group-pages' => 'Panna ke suchi',
'specialpages-group-pagetools' => 'Panna ke aujar',

# Special:BlankPage
'blankpage' => 'Khaali panna',
'intentionallyblankpage' => 'Ii panna ke jaan ke khaliya chhorraa gais hae.',

# External image whitelist
'external_image_whitelist' => '#Leave this line exactly as it is<pre>
#Put regular expression fragments (just the part that goes between the //) below
#These will be matched with the URLs of external (hotlinked) images
#Those that match will be displayed as images, otherwise only a link to the image will be shown
#Lines beginning with # are treated as comments
#This is case-insensitive

# Ii line ke yahii rakam chhorr do<pre>
#Sab regular expression fragments (wahii hissa jon ki // ke biich me jaawe hae) ke niche rakkho
#Iske bahaari URLs  (hotlinked) chapa se link karaa jaai',

# Special:Tags
'tag-filter' => '[[Special:Tags|Tag]] filter karo:',
'tags-edit' => 'badlo',
'tags-hitcount' => '$1 {{PLURAL:$1|badlao|badlao}}',

# Special:ComparePages
'comparepages' => 'Panna ke biich me antar dekho',
'compare-selector' => 'Panna ke badlao ke biih me antar dekho',
'compare-page1' => 'Panna 1',
'compare-page2' => 'Panna 2',
'compare-rev1' => 'Badlao 1',
'compare-rev2' => 'Badlao 2',
'compare-submit' => 'Antar dekho',

# Database error messages
'dberr-header' => 'Ii wiki me kuchh garrbarr hae',

# HTML forms
'htmlform-reset' => 'Badlao ke pahile jaise karo',
'htmlform-selectorother-other' => 'Duusra',

# New logging system
'revdelete-restricted' => 'sysops pe llabu restrictions',
'revdelete-unrestricted' => 'sysops se hatawa gae rukawat',
'newwiki_userlog-byemail' => 'password ke e-mail se bheja gais hai',

# Search suggestions
'searchsuggest-search' => 'Khojo',

);
