<?php
/** Angika (अङ्गिका)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Angpradesh
 * @author Vinitutpal
 */

$fallback = 'hi';

$messages = array(
# wiki_User preference toggles
'tog-underline' => ' कड़ी अधोरेखित करना:',
'tog-justify' => 'परिच्छेद समान करॊ',
'tog-hideminor' => 'हाल के बदलाव सॆं छोटॊ बदलाव छुपाबॊ',
'tog-hidepatrolled' => 'निगरानी मॆं करलॊ गेलॊ संपादनॊ कॆ हाल के बदलावॊ मॆं नै देखाबॊ',
'tog-newpageshidepatrolled' => 'निगरानी वाला पन्ना कॆ नया पन्ने वाला सूची मॆं नै देखाबॊ',
'tog-extendwatchlist' => 'ध्यान सूची मॆं सब्भे बदलाव दर्शाबॊ, सिर्फ हाले के नै',
'tog-usenewrc' => 'हाल मॆं होलॊ वर्धित बदलाव (जावास्क्रीप्ट के जरूरत छै)',
'tog-numberheadings' => 'शीर्षक स्वयं-क्रमांकित करॊ',
'tog-showtoolbar' => 'एडिट टूलबार दर्शाबॊ (जावास्क्रीप्ट)',
'tog-editondblclick' => 'दू-बार क्लीक करी कॆ पन्ना संपादित करॊ (जावास्क्रीप्ट)',
'tog-editsection' => '[संपादित करॊ] कड़ी द्वारा विभाग संपादन करै के अनुमती दहॊ',
'tog-editsectiononrightclick' => 'विभाग शीर्षक पर दायाँ क्लीक करीकॆ संपादन करै के अनुमती दॆ (जावास्क्रीप्ट)',
'tog-showtoc' => 'अनुक्रम दर्शाबॊ (जोन पन्ना पर तीन सॆं ज्यादा विभाग छै)',
'tog-rememberpassword' => 'इ कंप्यूटर पर हमरॊ लॉग-इन सूचना याद रखॊ (अधिकतम $1 {{PLURAL:$1|दिन|दिन}} लेली)',
'tog-watchcreations' => 'हमरॊ तैयार करलॊ पन्ना हमरॊ ध्यानसूचीमॆं रखियै',
'tog-watchdefault' => 'हमरॊ संपादित करलॊ पन्ना हमरॊ ध्यानसूचीमॆं रखियै',
'tog-watchmoves' => 'हमरॊ हटैलॊ पन्ना हमरॊ ध्यानसूचीमॆं रखियै',
'tog-watchdeletion' => 'हमरॊ हटैलॊ पन्ना हमरॊ ध्यानसूचीमॆं रखियै',
'tog-previewontop' => 'एडिट बॉक्स के उपर झलक दिखाबॊ',
'tog-previewonfirst' => 'पहलॊ सम्पादन पर पूर्वावलोकन देखॊ',
'tog-nocache' => 'ब्राउजर पन्ना केचिंग अक्षम करॊ',
'tog-enotifwatchlistpages' => 'हमरॊ ध्यानसूची मॆं दर्ज़ पन्ना बदलला के बाद हमरा इ-मेल करॊ',
'tog-enotifusertalkpages' => 'हमरॊ सदस्य वार्ता पृष्ठ पर बदलाव होला सॆं हमरा इ-मेल करॊ',
'tog-enotifminoredits' => 'तनी-मनी बदलावॊ लेली भी हमरा इ-मेल भेजॊ',

'underline-never' => 'कहियो नै',

# Dates
'sunday' => 'रविवार',
'monday' => 'सोमवार',
'tuesday' => 'मंगलवार',
'wednesday' => 'बुधवार',
'thursday' => 'गुरुवार',
'friday' => 'शुक्रवार',
'saturday' => 'शनिचर',
'january' => 'जनवरी',
'february' => 'फ़रवरी',
'march' => 'मार्च',
'april' => 'अप्रैल',
'may_long' => 'मई',
'june' => 'जून',
'july' => 'जुलाई',
'august' => 'अगस्त',
'september' => 'सितंबर',
'october' => 'अक्तूबर',
'november' => 'नवंबर',
'december' => 'दिसंबर',
'january-gen' => 'जनवरी',
'february-gen' => 'फरवरी',
'march-gen' => 'मार्च',
'april-gen' => 'अप्रैल',
'may-gen' => 'मई',
'june-gen' => 'जून',
'july-gen' => 'जुलाई',
'august-gen' => 'अगस्त',
'september-gen' => 'सितंबर',
'october-gen' => 'अक्टूबर',
'november-gen' => 'नव्हंबर',
'december-gen' => 'दिसंबर',
'jan' => 'जन.',
'feb' => 'फर.',
'mar' => 'मार्च',
'apr' => 'अप्रै.',
'may' => 'मई',
'jun' => 'जून',
'jul' => 'जुला.',
'aug' => 'अग.',
'sep' => 'सितं.',
'oct' => 'अक्तू.',
'nov' => 'नवं.',
'dec' => 'दिसं.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|श्रेणी|श्रेणी}}',
'category_header' => '"$1" श्रेणी में लेख',
'subcategories' => 'उपविभाग',
'hidden-categories' => '{{PLURAL:$1|छुपैलॊ श्रेणी|छुपैलॊ श्रेणी सीनी}}',
'category-subcat-count' => '{{PLURAL:$2|इ श्रेणी मॆं सिर्फ निम्नलिखित उपश्रेणी छै|इ श्रेणी मॆं निम्नलिखित {{PLURAL:$1|उपश्रेणी|$1 उपश्रेणी सीनी}} छै, कुल उपश्रेणी सीनी $2}}',
'category-article-count' => '{{PLURAL:$2|इ श्रेणी मॆं सिर्फ निम्नलिखित लेख छै.|इ श्रेणी मॆं निम्नलिखित {{PLURAL:$1|लेख छै |$1 लेख सीनी छै.}}, कुल लेख $2 }}',
'listingcontinuesabbrev' => 'आगे.',

'newwindow' => '(नया विंडो मॆं खुलै छै)',
'cancel' => 'निरस्त',
'mytalk' => 'हमरॊ बात',
'navigation' => 'भ्रमण',

# Cologne Blue skin
'qbfind' => 'खोजॊ',

'errorpagetitle' => 'त्रुटि',
'returnto' => 'लौटॊ $1.',
'tagline' => '{{SITENAME}} केरॊ बारे मॆं',
'help' => 'सहायता',
'search' => 'खोजॊ',
'searchbutton' => 'खोज',
'searcharticle' => 'जा',
'history' => 'पन्ना के इतिहास',
'history_short' => 'इतिहास',
'printableversion' => 'छापै योग्य उद्धरण',
'permalink' => 'स्थायी कड़ी',
'edit' => 'संपादन',
'create' => 'सृजन करॊ',
'editthispage' => 'ई पन्ना के सम्पादन करॊ',
'delete' => 'हटाबॊ',
'protect' => 'सुरक्षित करॊ',
'protect_change' => 'बदलॊ',
'newpage' => 'नया पन्ना',
'talkpage' => 'इ पन्ना पर चर्चा करॊ',
'talkpagelinktext' => 'वार्ता',
'personaltools' => 'वैयक्तिक औज़ार',
'talk' => 'चर्चा',
'views' => 'दर्शाव',
'toolbox' => 'साधनपेटी',
'otherlanguages' => 'इतर भाषा',
'redirectedfrom' => '($1 सॆं भेजनॊ गेलॊ)',
'redirectpagesub' => 'पुन: निर्देशित पन्ना',
'lastmodifiedat' => '$1 के $2 पर इ पन्ना पर अन्तिम बार परिवर्तन भेलै.',
'jumpto' => 'हिन्नॆ जा:',
'jumptonavigation' => 'भ्रमण करॊ',
'jumptosearch' => 'खोजै लॆ चलॊ',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => '{{SITENAME}} केरॊ बारे मॆं',
'aboutpage' => 'Project:परिचय',
'copyright' => 'सामग्री $1 के तहत उपलब्ध छै.',
'copyrightpage' => '{{ns:project}}:सर्वाधिकार',
'disclaimers' => 'अस्वीकरण',
'disclaimerpage' => 'Project:साधारण अस्वीकरण',
'edithelp' => 'संपादन मॆं सहायता',
'edithelppage' => 'Help:संपादन',
'helppage' => 'Help:सहायता',
'mainpage' => 'मुख्य पृष्ठ',
'privacy' => 'गोपनीयता नीति',
'privacypage' => 'Project:गोपनीयता नीति',

'badaccess' => 'अनुमति त्रुटि',

'retrievedfrom' => '"$1" सॆं लेलॊ गेलॊ',
'youhavenewmessages' => 'तोरा लेली छै $1  ($2)',
'newmessageslink' => 'नया संदेश',
'newmessagesdifflink' => 'पिछला बदलाव',
'editsection' => 'संपादन',
'editold' => 'संपादन',
'editlink' => 'संपादन',
'viewsourcelink' => 'स्रोत देखॊ.',
'editsectionhint' => 'विभाग संपादन: $1',
'toc' => 'विषय सूची',
'showtoc' => 'देखाबॊ',
'hidetoc' => 'छुपाबॊ',
'site-rss-feed' => '$1 केरॊ आरएसएस फ़ीड',
'site-atom-feed' => '$1 केरॊ अणु फ़ीड',
'page-rss-feed' => '$1 केरॊ आरएसएस फ़ीड',
'page-atom-feed' => '"$1" अणु फ़ीड',
'red-link-title' => '$1 (पृष्ठ मौजूद नै छै)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'पन्ना',
'nstab-user' => 'सदस्य पन्ना',
'nstab-special' => 'खास पन्ना',
'nstab-project' => 'परियोजना पृष्ठ',
'nstab-image' => 'फाईल',
'nstab-template' => 'टेम्प्लेट',
'nstab-category' => 'श्रेणी',

# General errors
'missing-article' => 'आँकड़ाकोष मॆं $2 के अंदर कहीं भी "$1" नै मिललै.

आमतौर पर मिटैलॊ जाय चुकलॊ पन्ना के इतिहास कड़ी के इस्तेमाल करला पर ऐसनॊ होय छै.

अगर ऐसनॊ नै छै, तॆ शायद आपनॆ तंत्रांश केरॊ त्रुटि खोजी लेनॆ छियॊ.
कृपया पता समेत [[Special:Listwiki_Users/sysop|administrator]] कॆ ऐकरॊ ब्यौरा दहॊ.',
'missingarticle-rev' => '(आवृत्ती#: $1)',
'badtitletext' => 'आपनॆ द्वारा आग्रहत लेख केरॊ शीर्षक अयोग्य, ख़ाली या गलती सॆं जुडलॊ आंतर-भाषिय या आंतर-विकि शीर्षक छेकै . एकरा मॆ एक या एक सॆं ज्यादा ऐनहॊ कॅरेक्टर छै जे शीर्षक मॆं इस्तेमाल नै करलॊ जाबॆ सकॆ छै.',
'viewsource' => 'स्रोत देखॊ',

# Login and logout pages
'yourname' => 'सदस्यनाम:',
'yourpassword' => 'कूटशब्द :',
'remembermypassword' => 'इ कंप्यूटर पर हमरॊ लॉग-इन सूचना याद रखॊ (अधिकतम $1 {{PLURAL:$1|दिन|दिन}} लेली)',
'login' => 'लॉग इन',
'nav-login-createaccount' => 'सत्रारंभ / खाता खोलॊ',
'userlogin' => 'लॉग इन / खाता बनाबॊ',
'logout' => ' सत्रांत (लॉग आउट)',
'userlogout' => 'सत्रांत (लॉग आउट)',
'nologinlink' => 'एगो खाता बनाबॊ',
'mailmypassword' => 'इमेल द्वारा नया कूटशब्द भेजॊ',

# Edit page toolbar
'bold_sample' => 'मोटा पाठ',
'bold_tip' => 'मोटे अक्षर',
'italic_sample' => 'तिरछा अक्षर',
'italic_tip' => 'तिरछा अक्षर',
'link_sample' => 'कड़ी शीर्षक',
'link_tip' => 'आंतरिक कड़ी',
'extlink_sample' => 'http://www.example.com कड़ी शीर्षक',
'extlink_tip' => 'बाहरी कड़ी (उपसर्ग http:// जरूर लगाबॊ)',
'headline_sample' => 'शीर्षक',
'headline_tip' => 'द्वितीय-स्तर शीर्षक',
'nowiki_sample' => 'अप्रारूपित सामग्री यहाँ डालॊ',
'nowiki_tip' => 'विकि प्रारूपण नज़रंदाज़ करॊ',
'image_tip' => 'संलग्न संचिका',
'media_tip' => 'फाईल लिंक',
'sig_tip' => 'आपनॆ के हस्ताक्षर व समय',
'hr_tip' => 'हॉरिझॉंटल लाईन (कम इस्तेमाल करॊ)',

# Edit pages
'summary' => 'सारांश:',
'subject' => 'विषय/शीर्षक',
'minoredit' => 'इ एगॊ छोटा परिवर्तन छेकै',
'watchthis' => 'इ पन्ना ध्यानसूची में डालॊ',
'savearticle' => 'पन्ना सँजोवॊ',
'preview' => 'पूर्वावलोकन',
'showpreview' => 'पूर्वावलोकन देखाबॊ',
'showdiff' => 'बदलाव देखाबॊ',
'anoneditwarning' => "'''सावधान:''' आपनॆ लॉग-इन नै करनॆ छियै. इ पृष्ठ के संपादन इतिहास मॆं आपनॆ के आइ.पी. पता अंकित करलॊ जैतै.",
'summary-preview' => 'सारांश पूर्वावलोकन:',
'newarticle' => '(नया)',
'newarticletext' => 'आपनॆ जे लेख चाहै छियै वू अखनी तलक लिखलॊ नै गेलॊ छै. इ लेख लिखै लेली नीचे टाइप करॊ. सहायता लेली [[{{MediaWiki:Helppage}}|ऐन्जां]] क्लीक करॊ.

जों आपनॆ यहां पर गलती सॆं आबी गेलॊ छियै तॆ आपनॊ ब्राउज़र कॆ बॅक (back) पर क्लीक करॊ.',
'noarticletext' => '
Hindi (hi)फ़िलहाल इस पन्ने पर कोई सामग्री नहीं है।
आपनॆ अन्य पन्ना मॆं [[Special:Search/{{PAGENAME}}|इ सामग्री के खोज]] करॆ सकॆ छियै,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} संबंधित चिट्ठा मॆं खोज करॆ सकै छियै],
या [{{fullurl:{{FULLPAGENAME}}|action=edit}} इ पन्ना कॆ संपादित करॆ सकॆ छियै]</span>.',
'previewnote' => "'''याद रखॊ, इ केवल एगॊ झलक छेकै आरू अभी तलक सुरक्षित  नै करलॊ गेलॊ छै!'''",
'editing' => '$1 केरॊ सम्पादन चली रहलॊ छै.',
'editingsection' => '$1 सम्पादन (अनुभाग)',
'copyrightwarning' => "कृपया ध्यान दहॊ कि {{SITENAME}} कॆ करलॊ गेलॊ सब्भॆ योगदान $2 के शर्तों के तहत होतै (अधिक जानकारी लेली $1 देखॊ)।
अगर आप योगदान कॆ लगातार बदलतॆं आरू पुनः वितरित होतॆं नै देखॆ सकॆ छियै तॆ यहाँ योगदान नै करॊ. <br />
आपनॆ इ भी प्रमाणित करी रहलॊ छियै कि इ आपनॆ खुद लिखनॆ छियै या जनार्पीत या कोनो अन्य मुक्त स्रोत सॆं प्रतिलिपित करलॊ गेलॊ छै. '''सर्वाधिकारयुक्त लेखॊ कॆ, बिना अनुमति के, यहाँ नै डालॊ!'''",
'templatesused' => ' {{PLURAL:$1|Template|Templates}} इ पृष्ठ पर प्रयुक्त साँचा:',
'templatesusedpreview' => '{{PLURAL:$1|Template|Templates}} इ झलक मॆ प्रयुक्त साँचा:',
'template-protected' => '(सुरक्षित)',
'template-semiprotected' => '(अर्ध-सुरक्षीत)',
'hiddencategories' => 'इ लेख निम्नलिखित {{PLURAL:$1|1 छुपैलॊ श्रेणी मॆ|$1 छुपैलॊ श्रेणी मॆ}} छै:',
'permissionserrorstext-withaction' => 'आपनॆकॆ $2 केरॊ अनुमति नै छै, निम्नलिखित {{PLURAL:$1|कारण लेली|कारणॊ लेली}}:',

# History pages
'viewpagelogs' => 'इ पन्ना के लॉग देखॊ',
'currentrev-asof' => '$1 केरॊ समय के संस्करण',
'revisionasof' => '$1 केरॊ संस्करण',
'previousrevision' => 'पुरानॊ संशोधन',
'nextrevision' => 'नया संशोधन →',
'currentrevisionlink' => 'हाल के संशोधन',
'cur' => 'चालू',
'last' => 'पिछला',
'histlegend' => 'फर्क चयन: फर्क देखै लेली पुराना अवतरणॊ के आगे देलॊ गेलॊ रेडियो बॉक्सपर क्लीक करॊ तथा एन्टर करॊ अथवा नीचॆं देलॊ बटन पर क्लीक करॊ<br />
लिजेंड: (चालू) = सद्य अवतरण के बीच मॆ फर्क,
(आखिरी) = पिछला अवतरण के बीच मॆं फर्क, छो = छोटा बदलाव',
'history-fieldset-title' => 'इतिहास के विचरण करॊ',
'histfirst' => 'बहुत पहिले के',
'histlast' => 'एकदम हाल के',

# Revision deletion
'rev-delundel' => 'दिखाबॊ/छुपाबॊ',
'revdel-restore' => 'दृश्यता बदलॊ',

# Merge log
'revertmerge' => 'अलग करॊ',

# Diffs
'history-title' => '"$1" के अवतरण इतिहास',
'lineno' => 'पंक्ति $1:',
'compareselectedversions' => 'च़यन करलॊ अवतरणों मॆं फर्क देखियै',
'editundo' => 'पूर्ववत करॊ',

# Search results
'searchresults' => 'खोज परिणाम',
'searchresults-title' => '"$1" लेली खोज परिणाम',
'searchresulttext' => '{{SITENAME}} मॆं खोज करै लेली सहायता खातिर [[{{MediaWiki:Helppage}}|{{int:help}}]] देखॊ.',
'searchsubtitle' => '\'\'\'[[:$1]]\'\'\' खातिर आपनॆ करलॊ गेलॊ खोज ([[Special:Prefixindex/$1| "$1" सॆं शुरु होय वाला सब पन्ना]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|all pages that link to "$1"]])',
'searchsubtitleinvalid' => "तोरॊ खोज '''$1''' के परिणाम",
'notitlematches' => 'पन्ना केरॊ शीर्षक मेल नै खाय छै.',
'notextmatches' => 'कोनो पन्ना मॆं इ सामग्री नै मिललै.',
'prevn' => 'पिछला {{PLURAL:$1|$1}}',
'nextn' => 'अगला {{PLURAL:$1|$1}}',
'viewprevnext' => 'देख़ॊ ($1 {{int:pipe-separator}} $2) ($3)',
'search-result-size' => '$1 ({{PLURAL:$2|1 शब्द|$2 शब्द}})',
'search-redirect' => '($1 कॆ अनुप्रेषित)',
'search-section' => '(विभाग $1)',
'search-suggest' => 'की आपनॆ के मतलब $1 छै ?',
'search-interwiki-caption' => 'अन्य प्रकल्प',
'search-interwiki-default' => '$1 के रिज़ल्ट:',
'search-interwiki-more' => '(आरू)',
'nonefound' => "'''सूचना''': मूलतः कुछ ही नामस्थानॊ मॆं खोजलॊ जाय छै. अगर आपने कॆ सब नामस्थानॊ मॆं खोजना छै तॆ खोजशब्दॊ के पहले ''all:'' लगायकॆ खोजै के कोशिश करॊ या फिर कोनो नामस्थान के नाम लिखॊ.",
'powersearch' => 'उन्नत खोज',
'powersearch-legend' => 'उन्नत खोज',
'powersearch-ns' => 'नामस्थानॊ मॆ खोजॊ:',
'powersearch-redir' => 'अनुप्रेषितॊ के सूची दर्शाबॊ.',
'powersearch-field' => 'लेली खोजॊ',

# Preferences page
'preferences' => 'वरीयता',
'mypreferences' => 'हमरॊ वरीयता',

# Groups
'group-sysop' => 'प्रचालक',

'grouppage-sysop' => '{{ns:project}}:प्रचालक',

# wiki_User rights log
'rightslog' => 'सदस्य अधिकार सूची',

# Associated actions - in the sentence "You do not have permission to X"
'action-edit' => ' ई पन्ना के सम्पादन करॊ',

# Recent changes
'nchanges' => '$1 {{PLURAL:$1|बदलाव|बदलाव}}',
'recentchanges' => 'हाल मॆं होलॊ बदलाव',
'recentchanges-legend' => 'हाल केरॊ परिवर्तन संबंधी विकल्प',
'recentchanges-feed-description' => 'इ फ़ीड मॆ होय वाला विकि पर हाल मॆ होलॊ बदलाव देखियै.',
'rcnote' => "$5, $4 के पहले के {{PLURAL:$2|'''१''' दिन|'''$2''' दिनों}} मॆं  {{PLURAL:$1|होलॊ '''१''' बदलाव इ प्रकार छै.| होलॊ '''$1''' बदलाव इ प्रकार छै}}",
'rclistfrom' => '$1 सॆं नया बदलाव देखलाबॊ',
'rcshowhideminor' => 'छोटॊ बदलाव $1',
'rcshowhidebots' => 'बोट सीनी $1',
'rcshowhideliu' => 'लॉग्ड इन सदस्यॊ के बदलाव $1',
'rcshowhideanons' => 'अनामक सदस्यॊ के बदलाव $1',
'rcshowhidemine' => 'हमरॊ बदलाव $1',
'rclinks' => 'पिछला $2 दिना मॆं होलॊ $1 बदलाव देखियै.<br />$3',
'diff' => 'अंतर',
'hist' => 'इतिहास',
'hide' => 'छुपाबॊ',
'show' => 'देखाबॊ',
'minoreditletter' => ' छो.',
'newpageletter' => 'न',
'boteditletter' => 'बो',
'rc-enhanced-expand' => 'विस्तृत जानकारी देखाबॊ (ऐकरा लेली जावास्क्रिप्ट चाहियॊ)',
'rc-enhanced-hide' => 'विस्तृत जानकारी छिपाबॊ',

# Recent changes linked
'recentchangeslinked' => 'इ पृष्ठ संबंधी बदलाव',
'recentchangeslinked-title' => '"$1" मॆं होलॊ बदलाव',
'recentchangeslinked-summary' => "कोनो पन्ना के हवाले कत्तॆ भी पन्ना मौजूद हुऎ सकॆ छै, इ सूची उ पन्ना (या कोनो श्रेणी के सदस्यॊ) मॆं होलॊ हाल के बदलाव देखाबै छै.
[[Special:Watchlist|आपनॆ के ध्यानसूची]] मॆं मौजूद पन्ना '''मोटा''' अक्षरॊ मॆं दिखतै.",
'recentchangeslinked-page' => 'पृष्ठ नाम:',
'recentchangeslinked-to' => 'ऐकरॊ बदला मॆं देलॊ पन्ना सीनी सॆं जुडलॊ पन्ना सीनी के बदलाव दिखलाबॊ',

# Upload
'upload' => 'फाईल अपलोड',
'uploadlogpage' => 'अपलोड सूची',
'uploadedimage' => '"[[$1]]" कॆ अपलोड करलॊ गेलै',

# File description page
'filehist' => 'फाइल के इतिहास',
'filehist-help' => 'संचिका पुरानॊ समय में कैन्हॊ दिखै रहै इ जानै लेली वांछित दिनांक/समय पर चटका लगाबॊ.',
'filehist-current' => 'मौजूदा',
'filehist-datetime' => 'तारीख/समय',
'filehist-thumb' => 'थम्बनेल',
'filehist-thumbtext' => '$1 केरॊ समय के संस्करण के अँगूठाकार प्रारूप',
'filehist-user' => 'सदस्य',
'filehist-dimensions' => 'आयाम',
'filehist-comment' => 'टिप्पणी',
'imagelinks' => 'फाईल लिंक',
'linkstoimage' => 'निम्नोक्त {{PLURAL:$1|पन्ने|$1 पन्ना सीनी}} मॆं इ संचिका के हवाले छै:',
'sharedupload' => 'ई फाईल $1 सॆ छै आरू संभवतः अन्य परियोजना भी एकरॊ इस्तेमाल करी रहलॊ होतै.',
'uploadnewversion-linktext' => 'इ फाईल के नया संस्करण अपलॊड करॊ',

# Statistics
'statistics' => 'आँकड़ा',

# Miscellaneous special pages
'nbytes' => '{{PLURAL:$1|बाइट|बाइट}}',
'nmembers' => '{{PLURAL:$1|एगॊ सदस्य|$1 सदस्य}}',
'prefixindex' => 'इ उपसर्ग वाल सब्भे पन्ना',
'newpages' => 'नया पन्ना',
'move' => 'स्थानांतरण',
'movethispage' => 'इ पन्ना स्थानांतरित करॊ',
'pager-newer-n' => '{{PLURAL:$1|नया 1|नया सीनी $1}}',
'pager-older-n' => '{{PLURAL:$1|पुराना 1|पुरानॊ सीनी $1}}',

# Book sources
'booksources' => 'पुस्तक स्रोत',
'booksources-search-legend' => 'पुस्तक स्रोत खोजॊ',
'booksources-go' => 'जा',

# Special:Log
'log' => 'लॉग सूची',

# Special:AllPages
'allpages' => 'सब्भे पन्ना',
'alphaindexline' => '$1 सॆ $2 तलक',
'prevpage' => 'पिछला पन्ना ($1)',
'allpagesfrom' => 'देलॊ गेलॊ अक्षर सॆं आरंभ होयवाला लेख दर्शाबॊ:',
'allpagesto' => 'ऐना समाप्त होय वाला पन्ना दिखाबॊ:',
'allarticles' => 'सब्भे पन्ना',
'allpagessubmit' => 'चलॊ',

# Special:LinkSearch
'linksearch' => 'बाहरी कड़ी',

# Special:Log/newusers
'newuserlogpage' => 'नया सदस्यॊ के सूची',

# Special:ListGroupRights
'listgrouprights-members' => '(सदस्य सूची)',

# E-mail user
'emailuser' => 'इ सदस्य कॆ ई-मेल भेजॊ',

# Watchlist
'watchlist' => 'हमरॊ ध्यानसूची',
'mywatchlist' => 'हमरॊ ध्यानसूची',
'addedwatchtext' => '"[[:$1]]" आपनॆके [[Special:Watchlist|ध्यानसूची]] मॆं "<nowiki>$1</nowiki>" केरॊ समावेश करी देलॊ गेलॊ छै.
भविष्य मॆं इ पन्ना तथा इ पन्ने केरॊ वार्ता मॆं होय वाला बदलाव आपनॆकॆ ध्यानसूची मॆं दिखतै तथा [[Special:RecentChanges|हाल मॆं होलॊ बदलावॊ के सूची]] मॆं ई पन्ना बोल्ड दिखतै ताकि  आपनॆ आसानी सॆं एकरॊ ध्यान रखॆ सकियै.

<p>अगर आपनॆकॆ इ पन्ना कॆ अपनॊ ध्यानसूची सॆं निकालना छै तॆ [[Special:RecentChanges|टटका परिवर्तन]] पर क्लिक करॊ.',
'removedwatchtext' => '"[[:$1]]" नामक पन्ना कॆ आपनॆ के [[Special:Watchlist|ध्यानसूची]] सॆं हटाय देलॊ गेलॊ छै.',
'watch' => 'ध्यान रखॊ',
'watchthispage' => 'ई पन्ना ध्यानसूची में डालॊ',
'unwatch' => 'ध्यान हटाबॊ',
'watchlist-details' => 'वार्ता पन्ना केरॊ अलावा {{PLURAL:$1|$1 पन्ना|$1 पन्ने}} आपने के ध्यानसूची मॆं छै.',
'wlshowlast' => 'पिछला $1 घंटा $2 दिन $3 देखॊ',
'watchlist-options' => 'ध्यानसूची विकल्प',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'ध्यान दय रहलॊ छै...',
'unwatching' => 'ध्यान हटाय रहलॊ छियै...',

# Delete
'deletepage' => 'पन्ना हटाबॊ',
'confirmdeletetext' => 'आपनॆ एगॊ लेख ओकरॊ सब्भॆ अवतरणॊ के साथ हटाय लॆ चाहै छहॊ.
आपनॆ सॆं अनुरोध छै कि आपनॆ जे करी रहलॊ छियै वू मीडिया विकि के [[{{MediaWiki:Policy-url}}|नीतिनुसार]] छै इ बात के पुष्टि करी लॆ तथा क्रिया करला सॆं पहले आपनॊ क्रिया के परिणाम जानी लॆ.',
'actioncomplete' => 'कार्य पूर्ण',
'actionfailed' => 'क्रिया विफल',
'deletedtext' => '"$1" कॆ हटैलॊ गेलॊ छै.
हाल में हटैलॊ गेलॊ लेखॊ के सूची लेली $2 देखॊ.',
'dellogpage' => 'हटाबै के सूची',
'dellogpagetext' => 'नीचॆ हाल मॆं हटैलॊ गेलॊ पन्ना के सूची छै.',
'deletionlog' => 'हटाबै के सूची',
'reverted' => 'पुराने अवतरण कॆ पूर्ववत करलॊ गेलै',
'deletecomment' => 'कारण:',
'deleteotherreason' => 'दोसरॊ/अतिरिक्त कारण:',
'deletereasonotherlist' => 'दोसरॊ कारण',
'deletereason-dropdown' => '*हटाबै के सामान्य कारण
** लेखक के बिनती
** कॉपीराईट
** वॅन्डॅलिजम',
'delete-edit-reasonlist' => 'हटाबै के कारण कॆ संपादित करॊ',
'delete-toobig' => 'इ पन्ना केरॊ संपादन इतिहास $1 सॆं अधिक {{PLURAL:$1|संस्करण|संस्करण}} होला के वजह सॆं बहुत बड़ा छै.
{{SITENAME}} के अनपेक्षित रूप सॆं बंद होला सॆं रोकै लेली ऐसनॊ पन्ना कॆ हटाबै के अनुमति नै छै.',
'delete-warning-toobig' => 'इस लेख केरॊ संपादन इतिहास काफ़ी लंबा चौड़ा छै, ऐकरॊ $1 सॆं अधिक {{PLURAL:$1|संस्करण|संस्करण}} छै.
एकरा हटैला सॆं {{SITENAME}} के आँकड़ाकोष के गतिविधियॊ मॆं व्यवधान आबॆ सकॆ छै;
कृपया सोची समझी कॆ आगू बढ़ॊ.',

# Rollback
'rollback' => 'संपादन पीछू लॆ जाय',
'rollback_short' => 'पूर्ववत करॊ',
'rollbacklink' => 'वापस लॆ',
'rollbackfailed' => 'पूर्ववत स्थिति निष्फल',
'cantrollback' => 'पुराना अवतरण पूर्ववत नै करॆ सकॆ छियै;
इ पन्ना के आखिरी योगदानकर्ता इ लेख के एकमात्र लेखक छेकै.',
'alreadyrolled' => '[[wiki_User:$2|$2]] ([[wiki_User talk:$2|वार्ता]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) द्वारा करलॊ गेलॊ  [[:$1]] के पिछला संपादन कॆ वापस पुरानॊ स्थिति पर नै लानलॊ जाबॆ सकॆ छै;
कोय आरू इ बीच या तॆ इ पन्ना कॆ फिर सॆं संपादित करी देनॆ छै या पहले ही पन्ना पुरानॊ स्थिति पर लानलॊ जाय चुकलॊ छै.

इ पन्ना के ताज़ातरीन संपादन [[wiki_User:$3|$3]] ([[wiki_User talk:$3|वार्ता]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]) नॆ करनॆ छै.',
'editcomment' => "संपादन टिप्पणी छेलै: \"''\$1''\".",
'revertpage' => '[[Special:Contributions/$2|$2]] ([[wiki_User talk:$2|Talk]]) केरॊ संपादनॊ कॆ हटायकॆ [[wiki_User:$1|$1]] के आखिरी अवतरण कॆ पूर्ववत करलॊ गेलै.',
'revertpage-nouser' => '(प्रयोक्ता नाम हटैलॊ गेलॊ छै) द्वारा करलॊ संपादन कॆ वापस पुरानॊ स्थिति मॆं लाना कॆ ऐकरॊ पहले केरॊ [[wiki_User:$1|$1]] द्वारा बनैलॊ संस्करण कॆ फिर सॆं ताज़ा संस्करण बनाबॊ.',
'rollback-success' => '$1 केरॊ संपादन हटाबॊ;
$2 द्वारा संपादित आखिरी अवतरण कॆ पुनर्स्थापित करलॊ गेलै.',

# Edit tokens
'sessionfailure-title' => 'निष्फल सत्र',
'sessionfailure' => 'ऐसनॊ प्रतीत होय छै कि आपनॆ के लोगिन सत्र के साथ कोनो समस्या छै.
सत्र अपहरण सॆं बचाबै लेली सावधानी के तौर पर आपनॆ के इ क्रियाकलाप रद्द करी देलॊ गेलॊ छै.
कृपया "back" पर वार करॊ आरू पृष्ठ कॆ दुबारा सॆं लोड करॊ, तबॆ दुबारा कोशिश करॊ.',

# Protect
'protectlogpage' => 'सुरक्षा सूची',
'protectedarticle' => '"[[$1]]" सुरक्षित करलका',
'modifiedarticleprotection' => '"[[$1]]" के बदललॊ सुरक्षा-स्तर',
'protectcomment' => 'कारण:',
'protectexpiry' => 'कालावधि समाप्ति:',
'protect_expiry_invalid' => 'समाप्ती समय गलत छै.',
'protect_expiry_old' => 'समाप्ती समय पहिनै बीती चुकलॊ छै.',
'protect-text' => "'''$1''' पन्ना के सुरक्षा-स्तर आपनॆ यहां देखॆ सकॆ छियै आरू ओकरा बदलॆ भी सकॆ छियै.",
'protect-locked-access' => "आपनॆ कॆ इ पन्ना के सुरक्षा-स्तर बदलै के अनुमति नै छै.
'''$1''' केरॊ अखनकॊ सुरक्षा-स्तर:",
'protect-cascadeon' => 'ई पन्ना अभी सुरक्षित छै कैन्हेंकि वू {{PLURAL:$1|इ पन्ना के | इ पन्ना के}} सुरक्षा-सीढीपर छै. आपनॆ इ पन्ना के सुरक्षा-स्तर बदलॆ सकॆ छियै, पर एकरा सॆं सुरक्षा-सीढी मॆं बदलाव नै होतै.',
'protect-default' => 'सब्भॆ सदस्यॊ कॆ अनुमति दॆ',
'protect-fallback' => '"$1" इजाज़त जरूरी छै',
'protect-level-autoconfirmed' => 'नयॊ व अपंजीकृत सदस्यॊ कॆ अवरोधित करॊ',
'protect-level-sysop' => 'सिर्फ प्रचालक',
'protect-summary-cascade' => 'सीढी',
'protect-expiring' => 'समाप्ती $1 (UTC)',
'protect-expiry-indefinite' => 'बेमियादी',
'protect-cascade' => 'इस पन्ना सॆं जुडलॊ पन्ना सुरक्षित करॊ (सुरक्षा-सीढी)',
'protect-cantedit' => 'आपनॆ इ पन्ना के सुरक्षा-स्तर बदलॆ नै सकॆ छियै कैन्हेकि आपनॆ कॆ ऐसनॊ करै के अनुमति नै छै.',
'restriction-type' => 'इजाज़त:',
'restriction-level' => 'सुरक्षा-स्तर',
'minimum-size' => 'कम सॆं कम आकार',
'maximum-size' => 'जादा सॆं जादा आकार:',
'pagesize' => '(बाईट्स)',

# Restrictions (nouns)
'restriction-edit' => 'संपादन',
'restriction-move' => 'स्थानांतरण',
'restriction-create' => 'सृजन करॊ',
'restriction-upload' => 'अपलोड',

# Restriction levels
'restriction-level-sysop' => 'पूर्ण सुरक्षित',
'restriction-level-autoconfirmed' => 'अर्ध सुरक्षित',
'restriction-level-all' => 'कोय्यॊ लेवल(स्तर)',

# Undelete
'undelete' => 'हटैलॊ पन्ना वापस लानॊ',
'undeletepage' => 'हटैलॊ पन्ना देखॊ आरू पुनर्स्थापित करॊ',
'undeletepagetitle' => "'''नीचे [[:$1]] केरॊ हटैलॊ गेलॊ अवतरण भी दर्शैलॊ गेलॊ छै.'''",
'viewdeletedpage' => 'हटैलॊ पन्ना वापस लानॊ',
'undeletelink' => 'देखॊ/पुनर्स्थापित करॊ',

# Namespace form on various pages
'namespace' => 'नामस्थान:',
'invert' => 'विपरीत प्रवरण',
'blanknamespace' => '(मुख्य)',

# Contributions
'contributions' => 'सदस्य योगदान',
'contributions-title' => '$1 लेली सदस्यॊ के योगदान',
'mycontris' => 'हमरॊ योगदान',
'contribsub2' => '$1 लेली ($2)',
'uctop' => '(उपर)',
'month' => 'इ महिना सॆं (आरू पुरानॊ):',
'year' => 'इ साल सॆं (आरू पुरानॊ):',

'sp-contributions-newbies' => 'सिर्फ नया सदस्यॊ के योगदान दर्शाबॊ',
'sp-contributions-blocklog' => 'ब्लॉक सूची',
'sp-contributions-search' => 'योगदान लेली खोज',
'sp-contributions-username' => 'आईपी एड्रेस या सदस्यनाम:',
'sp-contributions-submit' => 'खोज',

# What links here
'whatlinkshere' => 'एन्जां की जुड़तै',
'whatlinkshere-title' => '$1 सॆं जुड़लॊ पन्ना',
'whatlinkshere-page' => 'पन्ना:',
'linkshere' => "नीचे के सब पन्ना '''[[:$1]]''' सॆं जुड़लॊ:",
'isredirect' => 'पुन: निर्दिष्ट पन्ना',
'istemplate' => 'मिलाबॊ',
'isimage' => 'तस्वीर लिंक',
'whatlinkshere-prev' => '{{PLURAL:$1|पिछला|पिछला सीनी $1}}',
'whatlinkshere-next' => '{{PLURAL:$1|अगला|अगला $1}}',
'whatlinkshere-links' => '← लिंक',
'whatlinkshere-hideredirs' => '$1 अनुप्रेषितें',
'whatlinkshere-hidetrans' => '$1 ट्रान्स्क्ल्युजन्स',
'whatlinkshere-hidelinks' => '$1 लिंक',
'whatlinkshere-filters' => 'फिल्टर्स',

# Block/unblock
'blockip' => 'अवरोधित करॊ',
'ipboptions' => '२ घंटा:2 hours,१ दिन:1 day,३ दिन:3 days,१ हफ्ता:1 week,२ हफ्ता:2 weeks,१ महिना:1 month,३ महिना:3 months,६ महिना:6 months,१ साल:1 year,अनंत:infinite',
'ipblocklist' => 'अवरोधित आईपी पता व सदस्यनाम',
'blocklink' => 'अवरोधित करॊ',
'unblocklink' => 'अवरोध हटाएँ (अनब्लॉक)',
'change-blocklink' => 'ब्लॉक बदलॊ',
'contribslink' => 'योगदान',
'blocklogpage' => 'ब्लॉक सूची',
'blocklogentry' => '"[[$1]]" कॆ $2 $3 तलक बदलाव करै सॆं रोकी देलॊ गेलॊ छै.',
'unblocklogentry' => '$1 ब्लॉक निकाली देलॊ गेलॊ छै.',
'block-log-flags-nocreate' => 'खाता निर्माण पर रोक',

# Move page
'movepagetext' => "नीचॆं देलॊ पर्चा पन्ना के नाम बदली देतै, ऐकरॊ सारा इतिहास भी नयॊ नाम सॆं दिखना शुरू होय जैतै.
पुराना शीर्षक नया नाम कॆ अनुप्रेषित करी लेतै.
मूल शीर्षक दन्नॆ जाय वाला अग्रेषणॊ कॆ आपनॆ स्वचालित रूपॊ सॆं बदलॆ सकॆ छियै.
यदि आपनॆ ऐन्हॊ नै करै छियै तॆ कृपया [[Special:DoubleRedirects|दोहरा]] पुनर्निर्देशण या [[Special:BrokenRedirects|टूटलॊ पुनर्निर्देशन]] लेली ज़रूर जाँच करॊ.
कड़ी सीनी सही जगह इंगित करी रहलॊ छै, ई सुनिश्चित करना आपनॆ कॆ जिम्मेदारी छै.

अगर नयॊ शीर्षक के लेख पहलै सॆं छै तॆ स्थानांतरण '''नै''' होतै. पर अगर नयॊ शीर्षक वाला लेख खाली छै अथवा कहीं आरू अनुप्रेषित करै छियै आरू साथ ही ओकरॊ पुरानॊ संस्करण नै छै तॆ स्थानांतरण होय जैतै.
एकरॊ मतलब कि यदि आपनॆ सॆं गलती हो जाय तॆ आपनॆ वापस पुरानॊ नाम पर इ पन्ना कॆ स्थानांतरण करॆ सकॆ छियै, आरू साथ ही आपनॆ कोनॊ मौजूदा पन्ना के बदले ई स्थानांतरण नै करॆ सकॆ छियै.

'''चेतावनी!'''
यदि पन्ना काफ़ी लोकप्रिय छै तॆ ओकरा लेली ई एक बहुत बड़ा व अकस्मात् परिवर्तन हुऎ सकॆ छै;
आगू बढ़ला सॆं पहले अंजाम अच्छा सॆं समझी लॆ.

'''सूचना!'''
स्थानांतरण करला सॆं कोय भी महत्वपूर्ण लेख मॆं अनपेक्षित बदलाव हुऎ सकॆ छै
आपनॆ सॆं अनुरोध छै कि आपनॆ एकरॊ परिणाम जानी लियै.",
'movepagetalktext' => "संबंधित वार्ता पृष्ठ ऐकरॊ साथ स्थानांतरीत नै होतै '''अगर:'''
* आपनॆ पन्ना दोसरॊ नामस्थान मॆं स्थानांतरीत करी रहलॊ छहॊ.
* इ नाम के वार्ता पृष्ठ पहलॆ सॆं बनलॊ छै, या
* नीचॆं देलॊ गेलॊ चेक बॉक्स आपनॆ निकाली देनॆ छियै.

इ मामला मॆं आपनॆकॆ स्वयं इ पन्ना जोडै लॆ पड़तै.",
'movearticle' => 'पन्ना केरॊ स्थानांतरण',
'newtitle' => 'नया शीर्षक दन्नॆ:',
'move-watch' => 'ध्यान रखॊ स्रोत आरू लक्ष्य फाइल के',
'movepagebtn' => 'पन्ना स्थांतरण करॊ',
'pagemovedsub' => 'स्थानांतरण सफल रहलै',
'movepage-moved' => '\'\'\'"$1" कॆ "$2" पर  स्थानांतरीत करलॊ गेलै\'\'\'',
'articleexists' => 'इ नाम के एगॊ पन्ना पहले सॆं मौजूद छै,या फेरू आपनॆ अमान्य नाम चुननॆ छियै. कृपया दोसरॊ नाम चुनॊ.',
'talkexists' => "'''पन्ना के नाम बदली देलॊ गेलॊ छै, पर ओकरा सॆं संबंधित वार्ता पृष्ठ नै बदललॊ गेलॊ छै कैन्हेंकि वू पहले सॆं बनलॊ छै.
कृपया एकरा स्वयं बदली दहॊ'''",
'movedto' => ' स्थानांतरीत करलॊ गेलै',
'movetalk' => 'संबंधित वार्ता पृष्ठ भी बदलॊ',
'movelogpage' => 'स्थानांतरण सूची',
'movereason' => 'कारण:',
'revertmove' => 'पुरानॊ अवतरण पर लॆ चलॊ (रिवर्ट)',

# Export
'export' => 'पन्ना कॆ निर्यात करॊ',

# Thumbnails
'thumbnail-more' => 'बड़ा करॊ',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'आपनॆ के प्रयोक्ता पन्ना',
'tooltip-pt-mytalk' => 'आपनॆ के वार्ता पन्ना',
'tooltip-pt-preferences' => 'आपनॆ के वरीयता',
'tooltip-pt-watchlist' => 'आपनॆ के ध्यान देलॊ पन्ना के सूची',
'tooltip-pt-mycontris' => 'आपनॆ के योगदानॊ के सूची',
'tooltip-pt-login' => 'आपनॆ सॆं सत्रारंभ करै के गुज़ारिश छै; लेकिन इ अनिवार्य नै छै.',
'tooltip-pt-logout' => 'सत्रांत',
'tooltip-ca-talk' => 'सामग्री पन्ना केरॊ बारे मॆं वार्तालाप',
'tooltip-ca-edit' => 'आपनॆ इ पन्ना बदलॆ सकै छौ, कृपया बदलाव संजोवै सॆं पहलॆ झलक देखॊ.',
'tooltip-ca-addsection' => 'नया विभाग शुरू करॊ',
'tooltip-ca-viewsource' => 'इ पन्ना सुरक्षित छै आपनॆ एकरॊ स्रोत देखॆ सकै छियै.',
'tooltip-ca-history' => 'इ पन्ना के पिछला संशोधन',
'tooltip-ca-protect' => 'इ पन्ना सुरक्षित करॊ',
'tooltip-ca-delete' => 'इ पन्ना हटाबॊ',
'tooltip-ca-move' => 'इ पन्ना स्थानांतरित करॊ',
'tooltip-ca-watch' => 'इ पन्ना कॆ आपनॊ ध्यानसूची मॆं डालॊ',
'tooltip-ca-unwatch' => 'इ पन्ना कॆ आपनॊ ध्यानसूची सॆं हटाबॊ.',
'tooltip-search' => '{{SITENAME}} में खोजॊ',
'tooltip-search-go' => 'अगर इ शीर्षक के पन्ना छै तॆ ओकरा पॆ चलॊ',
'tooltip-search-fulltext' => 'इ वाक्यांश कॆ पन्ना मॆं खोजॊ',
'tooltip-n-mainpage' => 'मुखपृष्ठ पॆ जा',
'tooltip-n-mainpage-description' => 'मुख्य पन्ना पर पधारॊ',
'tooltip-n-portal' => 'प्रकल्प के बारे मेँ, आपनॆ की करॆ सकॆ छियै, मदद कहाँ से लेभॆ',
'tooltip-n-currentevents' => 'हाल के घटना के पृष्ठभूमि प्राप्त करॊ.',
'tooltip-n-recentchanges' => 'विकि मॆं हाल मॆं होलॊ बदलावॊ के फ़ेहरिस्त',
'tooltip-n-randompage' => 'कोनो एक लेख पर जा',
'tooltip-n-help' => 'मदत मिलै केरॊ ठिकानॊ',
'tooltip-t-whatlinkshere' => 'यहाँकरॊ हवाला दै वाला सबभॆ विकि पन्ना के सूची',
'tooltip-t-recentchangeslinked' => 'इ पन्ना से जुड़लॊ पन्ना पर होलॊ हाल के बदलाव',
'tooltip-feed-rss' => 'इ पन्ना के आरएसएस फ़ीड',
'tooltip-feed-atom' => 'इ पन्ना के अणु फ़ीड',
'tooltip-t-contributions' => 'इ सदस्य के योगदान केरॊ सूची देखियै',
'tooltip-t-emailuser' => 'इस सदस्य कॆ इमेल भेजॊ',
'tooltip-t-upload' => 'फाईल लादॊ (अपलोड )',
'tooltip-t-specialpages' => 'ख़ास पन्ना केरॊ सूची',
'tooltip-t-print' => 'इ पन्ना के छापे लायक संस्करण.',
'tooltip-t-permalink' => 'इ पन्ना के संसोधन खातिर स्थायी लिंक',
'tooltip-ca-nstab-main' => 'सामग्री पन्ना देखॊ',
'tooltip-ca-nstab-user' => 'सदस्य पन्ना देखियै',
'tooltip-ca-nstab-special' => 'इ एगॊ खास पन्ना छै, आपनॆ एकरा बदलॆ नो सकै छियै.',
'tooltip-ca-nstab-project' => 'प्रोजेक्ट पन्ना देखियै',
'tooltip-ca-nstab-image' => 'फाइल के पन्ना देखॊ',
'tooltip-ca-nstab-template' => 'टेम्प्लेट देखियें',
'tooltip-ca-nstab-category' => 'श्रेणी पन्ना देखॊ',
'tooltip-minoredit' => 'ऐकरा छोटा बदलाव के तौर पर दर्ज करॊ',
'tooltip-save' => 'आपनॊ बदलाव कॆ सुरक्षित करॊ',
'tooltip-preview' => 'आपनॊ बदलावॊ के झलक देखॊ, कृपया सँजोला सॆं पहिनै ऐकरॊ इस्तेमाल करॊ !',
'tooltip-diff' => 'इ पाठ्य मॆं आपनॊ द्वारा करलॊ बदलाव देखॊ.',
'tooltip-compareselectedversions' => 'इ पन्ना के चुनलॊ अवतरणॊ मॆं फर्क देखाबॊ.',
'tooltip-watch' => 'इ पन्ना कॆ आपनॊ ध्यानसूची मॆं डालॊ.',
'tooltip-rollback' => ' "वापस लॆ चलॊ" इ पन्ना के पिछला योगदाता के बदलाव एक्के चटका में ग़ायब करी दै छै.',
'tooltip-undo' => '"पुरानॊ स्थिति पर लानॊ" इ बदलाव कॆ वापस लॆ जाय कॆ संपादन पर्चा कॆ झलक रीति मॆं दिखलाबै छै.
एकरॊ जरिया सारांश मॆं पुरानॊ स्थिति मॆं लानै के कारण लिखलॊ जाबॆ पारॆ.',

# Browsing diffs
'previousdiff' => ' पुराना संपादन',
'nextdiff' => 'टटका संपादन',

# Media information
'file-info-size' => '$1 × $2 चित्रतत्व, संचिका के आकार: $3, MIME प्रकार: $4',
'file-nohires' => 'सॆं ज्यादा रिज़ोल्यूशन उपलब्ध नै छै.',
'svg-long-desc' => 'SVG फ़ाईल, साधारणत: $1 × $2 पीक्सेल्स, फ़ाईल केरॊ आकार: $3',
'show-big-image' => 'संपूर्ण रिजोल्यूशन',

# Bad image list
'bad_image_list' => 'फोर्मेट निम्न अनुसार छै:
खाली सूची सामग्री (* सॆं शुरु होय वाला पंक्ति ) चुनलॊ जैतै.
पंक्ति पर पहिला लिंक एगो खराब फाईल के साथ जुड़ल होना चाहियॊ.
कोय भी बाद वाला लिंक ओही पंक्ति पर अईला पर ओकरा अपवाद मानलॊ जैतै, अर्थात वू पन्ना जेकरॊ अंदर इ फाईल जुङलॊ हुऎ सकॆ छै.',

# Metadata
'metadata' => 'मेटाडाटा',
'metadata-help' => 'इ फ़ाईल मॆ अतिरिक्त जानकारी छै, हुऎ सकॆ छै कि इ फ़ाईल बनाबै मॆं इस्तेमाल करलॊ गेलॊ स्कैनर अथवा कैमरा सॆं इ प्राप्त होलॊ हुऒ. अगर इ फ़ाईल बदली देलॊ गेलॊ छै तॆ ई जानकारी नया फ़ाईल सॆं मेल नै खाबै के आशंका छै.',
'metadata-expand' => 'अतिरिक्त जानकारी दिखाबॊ',
'metadata-collapse' => 'विस्तारित जानकारी छुपाबॊ',
'metadata-fields' => 'इ सूची मॆं देलॊ गेलॊ जानकारी फ़ाईल केरॊ नीचे मेटाडाटा जानकारी मॆं हमेशा दिखतै.
बचलॊ जानकारी हमेशा छुपलॊ रहतै
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

# External editor support
'edit-externally' => 'बाहरी प्रणाली केरॊ इस्तेमाल करतें इ फ़ाईल कॆ संपादित करॊ.',
'edit-externally-help' => '(आरू जानकारी लेली[//www.mediawiki.org/wiki/Manual:External_editors जमाव निर्देश] देखॊ)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'सब्भे',
'namespacesall' => 'सब्भे',
'monthsall' => 'सब्भे',

# Watchlist editing tools
'watchlisttools-view' => 'प्रासंगिक बदलाव देखॊ',
'watchlisttools-edit' => 'ध्यानसूची देखॊ आरू संपादित करॊ.',
'watchlisttools-raw' => 'अनिर्मित ध्यानसूची देखॊ एवम्‌ संपादित करॊ',

# Special:SpecialPages
'specialpages' => 'खास पन्ना',

);
