<?php
/** Thai (ไทย)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Akkhaporn
 * @author Ans
 * @author Ariesanywhere
 * @author Harley Hartwell
 * @author Horus
 * @author Kaganer
 * @author Korrawit
 * @author LMNOP at Thai Wikipedia (manop@itshee.com) since July 2007
 * @author Manop
 * @author Mopza
 * @author Nullzero
 * @author Octahedron80
 * @author Passawuth
 * @author TMo3289
 * @author Woraponboonkerd
 * @author לערי ריינהארט
 * @author จักรกฤช วงศ์สระหลวง (Jakkrit Vongsraluang) / PaePae
 * @author วรากร อึ้งวิเชียร (Varakorn Ungvichian)
 */

$namespaceNames = array(
	NS_MEDIA            => 'สื่อ',
	NS_SPECIAL          => 'พิเศษ',
	NS_TALK             => 'พูดคุย',
	NS_USER             => 'ผู้ใช้',
	NS_USER_TALK        => 'คุยกับผู้ใช้',
	NS_PROJECT_TALK     => 'คุยเรื่อง$1',
	NS_FILE             => 'ไฟล์',
	NS_FILE_TALK        => 'คุยเรื่องไฟล์',
	NS_MEDIAWIKI        => 'มีเดียวิกิ',
	NS_MEDIAWIKI_TALK   => 'คุยเรื่องมีเดียวิกิ',
	NS_TEMPLATE         => 'แม่แบบ',
	NS_TEMPLATE_TALK    => 'คุยเรื่องแม่แบบ',
	NS_HELP             => 'วิธีใช้',
	NS_HELP_TALK        => 'คุยเรื่องวิธีใช้',
	NS_CATEGORY         => 'หมวดหมู่',
	NS_CATEGORY_TALK    => 'คุยเรื่องหมวดหมู่',
);

$namespaceAliases = array(
	'ภาพ' => NS_FILE,
	'คุยเรื่องภาพ' => NS_FILE_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'ข้อความทั้งหมด' ),
	'Allpages'                  => array( 'หน้าทั้งหมด' ),
	'Ancientpages'              => array( 'บทความที่ไม่ได้แก้ไขนานที่สุด' ),
	'Blankpage'                 => array( 'หน้าว่าง' ),
	'Block'                     => array( 'บล็อกไอพี' ),
	'Blockme'                   => array( 'บล็อกฉัน' ),
	'Booksources'               => array( 'แหล่งหนังสือ' ),
	'BrokenRedirects'           => array( 'เปลี่ยนทางเสีย' ),
	'Categories'                => array( 'หมวดหมู่' ),
	'ChangePassword'            => array( 'ตั้งรหัสผ่านใหม่' ),
	'Confirmemail'              => array( 'ยืนยันอีเมล' ),
	'Contributions'             => array( 'เรื่องที่เขียน' ),
	'CreateAccount'             => array( 'สร้างบัญชีผู้ใช้ใหม่' ),
	'Deadendpages'              => array( 'หน้าสุดทาง' ),
	'DeletedContributions'      => array( 'การแก้ไขที่ถูกลบ' ),
	'Disambiguations'           => array( 'แก้ความกำกวม' ),
	'DoubleRedirects'           => array( 'เปลี่ยนทางซ้ำซ้อน' ),
	'Emailuser'                 => array( 'อีเมลผู้ใช้' ),
	'Export'                    => array( 'ส่งออก' ),
	'Fewestrevisions'           => array( 'บทความที่ถูกแก้ไขน้อยที่สุด' ),
	'FileDuplicateSearch'       => array( 'ค้นหาไฟล์ซ้ำซ้อน' ),
	'Filepath'                  => array( 'พาธของไฟล์', 'ตำแหน่งไฟล์' ),
	'Import'                    => array( 'นำเข้า' ),
	'Invalidateemail'           => array( 'ยกเลิกการยืนยันทางอีเมล' ),
	'BlockList'                 => array( 'รายชื่อผู้ใช้ที่ถูกบล็อก', 'รายการบล็อก', 'รายชื่อไอพีที่ถูกบล็อก' ),
	'LinkSearch'                => array( 'ค้นหาเว็บลิงก์' ),
	'Listadmins'                => array( 'รายชื่อผู้ดูแล' ),
	'Listbots'                  => array( 'รายชื่อบอต' ),
	'Listfiles'                 => array( 'รายชื่อภาพ' ),
	'Listgrouprights'           => array( 'รายชื่อสิทธิกลุ่มผู้ใช้งาน' ),
	'Listredirects'             => array( 'รายชื่อหน้าเปลี่ยนทาง' ),
	'Listusers'                 => array( 'รายชื่อผู้ใช้' ),
	'Lockdb'                    => array( 'ล็อกฐานข้อมูล' ),
	'Log'                       => array( 'ปูม' ),
	'Lonelypages'               => array( 'หน้าที่โยงไปไม่ถึง' ),
	'Longpages'                 => array( 'หน้าที่ยาวที่สุด' ),
	'MergeHistory'              => array( 'รวมประวัติ' ),
	'MIMEsearch'                => array( 'ค้นหาตามชนิดไมม์' ),
	'Mostcategories'            => array( 'หมวดหมู่ที่มีการโยงไปหามากที่สุด' ),
	'Mostimages'                => array( 'ไฟล์ที่มีการโยงไปหามาก', 'ไฟล์ทีใช้มากที่สุด', 'ภาพที่ใช้มากที่สุด' ),
	'Mostlinked'                => array( 'หน้าที่มีการโยงไปหามาก' ),
	'Mostlinkedcategories'      => array( 'หมวดหมู่ที่มีการโยงไปหามาก', 'หมวดหมู่ที่ใช้มากที่สุด' ),
	'Mostlinkedtemplates'       => array( 'แม่แบบที่มีการโยงไปหามาก', 'แม่แบบที่ใช้มากที่สุด' ),
	'Mostrevisions'             => array( 'บทความที่ถูกแก้ไขมากที่สุด' ),
	'Movepage'                  => array( 'เปลี่ยนทาง' ),
	'Mycontributions'           => array( 'เรื่องที่ฉันเขียน' ),
	'Mypage'                    => array( 'หน้าของฉัน' ),
	'Mytalk'                    => array( 'หน้าพูดคุยของฉัน' ),
	'Newimages'                 => array( 'ภาพใหม่' ),
	'Newpages'                  => array( 'หน้าใหม่' ),
	'Popularpages'              => array( 'หน้าที่ได้รับความนิยม' ),
	'Preferences'               => array( 'การตั้งค่า', 'ตั้งค่า' ),
	'Prefixindex'               => array( 'ดัชนีตามคำขึ้นต้น' ),
	'Protectedpages'            => array( 'หน้าที่ถูกป้องกัน' ),
	'Protectedtitles'           => array( 'หัวเรื่องที่ได้รับการป้องกัน' ),
	'Randompage'                => array( 'สุ่ม', 'สุ่มหน้า' ),
	'Randomredirect'            => array( 'สุ่มหน้าเปลี่ยนทาง' ),
	'Recentchanges'             => array( 'ปรับปรุงล่าสุด' ),
	'Recentchangeslinked'       => array( 'การปรับปรุงที่โยงมา' ),
	'Search'                    => array( 'ค้นหา' ),
	'Shortpages'                => array( 'หน้าที่สั้นที่สุด' ),
	'Specialpages'              => array( 'หน้าพิเศษ' ),
	'Statistics'                => array( 'สถิติ' ),
	'Tags'                      => array( 'ป้ายกำกับ' ),
	'Uncategorizedcategories'   => array( 'หมวดหมู่ที่ไม่ได้จัดหมวดหมู่' ),
	'Uncategorizedimages'       => array( 'ภาพที่ไม่ได้จัดหมวดหมู่' ),
	'Uncategorizedpages'        => array( 'หน้าที่ไม่ได้จัดหมวดหมู่' ),
	'Uncategorizedtemplates'    => array( 'แม่แบบที่ไม่ได้จัดหมวดหมู่' ),
	'Undelete'                  => array( 'เรียกคืน' ),
	'Unlockdb'                  => array( 'ปลดล็อกฐานข้อมูล' ),
	'Unusedcategories'          => array( 'หมวดหมู่ที่ไม่ได้ใช้' ),
	'Unusedimages'              => array( 'ภาพที่ไม่ได้ใช้' ),
	'Unusedtemplates'           => array( 'แม่แบบที่ไม่ได้ใช้' ),
	'Unwatchedpages'            => array( 'หน้าที่ไม่ได้ถูกเฝ้าดู' ),
	'Upload'                    => array( 'อัปโหลด' ),
	'Userlogin'                 => array( 'ล็อกอิน' ),
	'Userlogout'                => array( 'ล็อกเอาต์' ),
	'Userrights'                => array( 'สิทธิผู้ใช้' ),
	'Version'                   => array( 'เวอร์ชั่น' ),
	'Wantedcategories'          => array( 'หมวดหมู่ที่ต้องการ' ),
	'Wantedfiles'               => array( 'ไฟล์ที่ต้องการ' ),
	'Wantedpages'               => array( 'หน้าที่ต้องการ', 'การเชื่อมโยงเสีย' ),
	'Wantedtemplates'           => array( 'แม่แบบที่ต้องการ' ),
	'Watchlist'                 => array( 'รายการเฝ้าดู', 'เฝ้าดู' ),
	'Whatlinkshere'             => array( 'บทความที่โยงมา' ),
	'Withoutinterwiki'          => array( 'หน้าที่ไม่มีลิงก์ข้ามภาษา' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#เปลี่ยนทาง', '#REDIRECT' ),
	'notoc'                     => array( '0', '__ไม่มีสารบัญ__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__ไม่มีแกลเลอรี่__', '__NOGALLERY__' ),
	'noeditsection'             => array( '0', '__ไม่มีแก้เฉพาะส่วน__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'เดือนปัจจุบัน', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'ชื่อเดือนปัจจุบัน', 'CURRENTMONTHNAME' ),
);

$datePreferences = array(
	'default',
	'thai',
	'mdy',
	'dmy',
	'ymd',
	'ISO 8601',
);

$defaultDateFormat = 'thai';

$dateFormats = array(
	'thai time' => 'H:i',
	'thai date' => 'j F xkY',
	'thai both' => 'H:i, j F xkY',

	'mdy time' => 'H:i',
	'mdy date' => 'F j, Y',
	'mdy both' => 'H:i, F j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'H:i, j F Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'H:i, Y F j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$linkTrail = '/^([a-z]+)(.*)\$/sD';

$messages = array(
# User preference toggles
'tog-underline' => 'ขีดเส้นใต้ลิงก์',
'tog-justify' => 'จัดย่อหน้าชิดขอบ',
'tog-hideminor' => 'ซ่อนการแก้ไขเล็กน้อยในหน้าปรับปรุงล่าสุด',
'tog-hidepatrolled' => 'ซ่อนการแก้ไขที่ตรวจแล้วในหน้าปรับปรุงล่าสุด',
'tog-newpageshidepatrolled' => 'ซ่อนหน้าที่ตรวจแล้วจากรายการหน้าใหม่',
'tog-extendwatchlist' => 'ขยายรายการเฝ้าดูให้แสดงการเปลี่ยนแปลงทั้งหมด ไม่เพียงการเปลี่ยนแปลงล่าสุด',
'tog-usenewrc' => 'จัดกลุ่มการเปลี่ยนแปลงโดยหน้าในรายการปรับปรุงล่าสุดและรายการเฝ้าดู (ต้องการจาวาสคริปต์)',
'tog-numberheadings' => 'ใส่เลขหัวข้อในสารบัญอัตโนมัติ',
'tog-showtoolbar' => 'แสดงเครื่องมือแก้ไข (จาวาสคริปต์)',
'tog-editondblclick' => 'แก้ไขหน้าโดยการดับเบิลคลิก (จาวาสคริปต์)',
'tog-editsection' => 'เปิดการแก้ไขเฉพาะส่วนผ่านลิงก์ [แก้ไข]',
'tog-editsectiononrightclick' => 'เปิดการแก้ไขเฉพาะส่วนโดยคลิกขวาที่หัวข้อ (จาวาสคริปต์)',
'tog-showtoc' => 'แสดงสารบัญ (สำหรับหน้าที่มีมากกว่า 3 หัวข้อ)',
'tog-rememberpassword' => 'จำการล็อกอินของฉันในเบราว์เซอร์นี้ (สูงสุด $1 วัน)',
'tog-watchcreations' => 'เพิ่มหน้าที่ฉันสร้างและไฟล์ที่ฉันอัปโหลดเข้ารายการเฝ้าดู',
'tog-watchdefault' => 'เพิ่มหน้าและไฟล์ที่ฉันแก้ไขเข้ารายการเฝ้าดู',
'tog-watchmoves' => 'เพิ่มและไฟล์ที่ฉันเปลี่ยนชื่อเข้ารายการเฝ้าดู',
'tog-watchdeletion' => 'เพิ่มหน้าและไฟล์ที่ฉันลบเข้ารายการเฝ้าดู',
'tog-minordefault' => 'กำหนดให้การแก้ไขทุกครั้งเป็นการแก้ไขเล็กน้อยโดยปริยาย',
'tog-previewontop' => 'แสดงตัวอย่างการแก้ไขก่อนกล่องแก้ไข',
'tog-previewonfirst' => 'แสดงตัวอย่างการแก้ไขสำหรับการแก้ไขครั้งแรก',
'tog-nocache' => 'ปิดใช้งานแคช',
'tog-enotifwatchlistpages' => 'อีเมลหาเมื่อหน้าหรือไฟล์ในรายการเฝ้าดูมีการเปลี่ยนแปลง',
'tog-enotifusertalkpages' => 'อีเมลหาเมื่อหน้าคุยกับผู้ใช้ของฉันมีการเปลี่ยนแปลง',
'tog-enotifminoredits' => 'อีเมลหาเช่นกันสำหรับการแก้ไขหน้าและไฟล์เล็กน้อย',
'tog-enotifrevealaddr' => 'เผยที่อยู่อีเมลในอีเมลที่ชี้แจง',
'tog-shownumberswatching' => 'แสดงจำนวนผู้ใช้ที่เฝ้าดู',
'tog-oldsig' => 'ลายเซ็นที่ใช้อยู่:',
'tog-fancysig' => 'ใช้คำสั่งวิกิที่ปรากฏในลายเซ็นนี้ (โดยไม่มีลิงก์อัตโนมัติ)',
'tog-externaleditor' => 'ใช้โปรแกรมแก้ไขภายนอกโดยปริยาย (สำหรับผู้เชี่ยวชาญเท่านั้น ต้องการการตั้งค่าพิเศษบนคอมพิวเตอร์ของคุณ [//www.mediawiki.org/wiki/Manual:External_editors ข้อมูลเพิ่มเติม])',
'tog-externaldiff' => 'ใช้โปรแกรมเปรียบเทียบภายนอกโดยปริยาย (สำหรับผู้เชี่ยวชาญเท่านั้น ต้องการการตั้งค่าพิเศษบนคอมพิวเตอร์ของคุณ [//www.mediawiki.org/wiki/Manual:External_editors ข้อมูลเพิ่มเติม])',
'tog-showjumplinks' => 'เปิดใช้งาน "กระโดด" อัตโนมัติไปตามลิงก์',
'tog-uselivepreview' => 'แสดงตัวอย่างการแก้ไขแบบทันที (จาวาสคริปต์) (ทดลอง)',
'tog-forceeditsummary' => 'เตือนเมื่อช่องคำอธิบายอย่างย่อว่าง',
'tog-watchlisthideown' => 'ซ่อนการแก้ไขของฉันจากรายการเฝ้าดู',
'tog-watchlisthidebots' => 'ซ่อนการแก้ไขของบอตจากรายการเฝ้าดู',
'tog-watchlisthideminor' => 'ซ่อนการแก้ไขเล็กน้อยจากรายการเฝ้าดู',
'tog-watchlisthideliu' => 'ซ่อนการแก้ไขโดยผู้ใช้ล็อกอินจากรายการเฝ้าดู',
'tog-watchlisthideanons' => 'ซ่อนการแก้ไขโดยผู้ใช้นิรนามจากรายการเฝ้าดู',
'tog-watchlisthidepatrolled' => 'ซ่อนการแก้ไขที่ตรวจแล้วจากรายการเฝ้าดู',
'tog-ccmeonemails' => 'ส่งสำเนาอีเมลที่ฉันส่งหาผู้อื่นให้ฉัน',
'tog-diffonly' => 'ไม่แสดงเนื้อหาใต้ส่วนต่างการแก้ไข',
'tog-showhiddencats' => 'แสดงหมวดหมู่ที่ซ่อนอยู่',
'tog-noconvertlink' => 'ปิดใช้งานการแปลงชื่อเรื่องของลิงก์',
'tog-norollbackdiff' => 'ไม่แสดงการเปลี่ยนแปลงหลังดำเนินการย้อนกลับฉุกเฉิน',

'underline-always' => 'เสมอ',
'underline-never' => 'ไม่เคย',
'underline-default' => 'ค่าโดยปริยายของหน้าตาหรือเบราว์เซอร์',

# Font style option in Special:Preferences
'editfont-style' => 'รูปแบบตัวอักษรในพื้นที่แก้ไข:',
'editfont-default' => 'ค่าตั้งต้นของเบราว์เซอร์',
'editfont-monospace' => 'ชุดอักษรแบบความกว้างคงที่',
'editfont-sansserif' => 'ชุดอักษรแบบไม่มีเชิง',
'editfont-serif' => 'ชุดอักษรแบบมีเชิง',

# Dates
'sunday' => 'วันอาทิตย์',
'monday' => 'วันจันทร์',
'tuesday' => 'วันอังคาร',
'wednesday' => 'วันพุธ',
'thursday' => 'วันพฤหัสบดี',
'friday' => 'วันศุกร์',
'saturday' => 'วันเสาร์',
'sun' => 'อา.',
'mon' => 'จ.',
'tue' => 'อ.',
'wed' => 'พ.',
'thu' => 'พฤ.',
'fri' => 'ศ.',
'sat' => 'ส.',
'january' => 'มกราคม',
'february' => 'กุมภาพันธ์',
'march' => 'มีนาคม',
'april' => 'เมษายน',
'may_long' => 'พฤษภาคม',
'june' => 'มิถุนายน',
'july' => 'กรกฎาคม',
'august' => 'สิงหาคม',
'september' => 'กันยายน',
'october' => 'ตุลาคม',
'november' => 'พฤศจิกายน',
'december' => 'ธันวาคม',
'january-gen' => 'มกราคม',
'february-gen' => 'กุมภาพันธ์',
'march-gen' => 'มีนาคม',
'april-gen' => 'เมษายน',
'may-gen' => 'พฤษภาคม',
'june-gen' => 'มิถุนายน',
'july-gen' => 'กรกฎาคม',
'august-gen' => 'สิงหาคม',
'september-gen' => 'กันยายน',
'october-gen' => 'ตุลาคม',
'november-gen' => 'พฤศจิกายน',
'december-gen' => 'ธันวาคม',
'jan' => 'ม.ค.',
'feb' => 'ก.พ.',
'mar' => 'มี.ค.',
'apr' => 'เม.ย.',
'may' => 'พ.ค.',
'jun' => 'มิ.ย.',
'jul' => 'ก.ค.',
'aug' => 'ส.ค.',
'sep' => 'ก.ย.',
'oct' => 'ต.ค.',
'nov' => 'พ.ย.',
'dec' => 'ธ.ค.',

# Categories related messages
'pagecategories' => '{{PLURAL:$1|หมวดหมู่|หมวดหมู่}}',
'category_header' => 'หน้าในหมวดหมู่ "$1"',
'subcategories' => 'หมวดหมู่ย่อย',
'category-media-header' => 'สื่อในหมวดหมู่ "$1"',
'category-empty' => "''ปัจจุบันหมวดหมู่นี้ไม่มีหน้าหรือสื่อใด''",
'hidden-categories' => '{{PLURAL:$1|หมวดหมู่ที่ซ่อนอยู่|หมวดหมู่ที่ซ่อนอยู่}}',
'hidden-category-category' => 'หมวดหมู่ที่ซ่อนอยู่',
'category-subcat-count' => '{{PLURAL:$2|หมวดหมู่นี้มีหมวดหมู่ย่อยเพียงหมวดหมู่เดียว|หมวดหมู่นี้มี {{PLURAL:$1|หมวดหมู่ย่อย|$1 หมวดหมู่ย่อย}} จากทั้งหมด $2 หมวดหมู่}}',
'category-subcat-count-limited' => 'หมวดหมู่นี้มี $1 หมวดหมู่ย่อย',
'category-article-count' => '{{PLURAL:$2|หมวดหมู่นี้มีอยู่เพียงหน้าเดียว|ในหมวดหมู่นี้มี {{PLURAL:$1|หน้าเดียว|$1 หน้า}} จากทั้งหมด $2 หน้า}}',
'category-article-count-limited' => '$1 หน้าต่อไปนี้อยู่ในหมวดหมู่นี้',
'category-file-count' => '{{PLURAL:$2|หมวดหมู่นี้มีเพียงไฟล์เดียว|ในหมวดหมู่นี้มี $1 ไฟล์ จากทั้งหมด $2 ไฟล์}}',
'category-file-count-limited' => '{{PLURAL:$1|ไฟล์|ไฟล์}}ต่อไปนี้อยู่ในหมวดหมู่นี้',
'listingcontinuesabbrev' => '(ต่อ)',
'index-category' => 'หน้าที่มีดัชนี',
'noindex-category' => 'หน้าที่ไม่มีดัชนี',
'broken-file-category' => 'หน้าที่มีลิงก์ไฟล์เสีย',

'about' => 'เกี่ยวกับ',
'article' => 'หน้าเนื้อหา',
'newwindow' => '(เปิดหน้าต่างใหม่)',
'cancel' => 'ยกเลิก',
'moredotdotdot' => 'ดูเพิ่ม...',
'mypage' => 'หน้า',
'mytalk' => 'พูดคุย',
'anontalk' => 'พูดคุยกับไอพีนี้',
'navigation' => 'ป้ายบอกทาง',
'and' => '&#32;และ',

# Cologne Blue skin
'qbfind' => 'ค้นหา',
'qbbrowse' => 'สืบค้น',
'qbedit' => 'แก้ไข',
'qbpageoptions' => 'หน้านี้',
'qbpageinfo' => 'บริบท',
'qbmyoptions' => 'หน้าของฉัน',
'qbspecialpages' => 'หน้าพิเศษ',
'faq' => 'คำถามถามบ่อย',
'faqpage' => 'Project:คำถามถามบ่อย',

# Vector skin
'vector-action-addsection' => 'เพิ่มหัวข้อใหม่',
'vector-action-delete' => 'ลบ',
'vector-action-move' => 'เปลี่ยนชื่อ',
'vector-action-protect' => 'ป้องกัน',
'vector-action-undelete' => 'กู้คืน',
'vector-action-unprotect' => 'เปลี่ยนค่าการป้องกัน',
'vector-simplesearch-preference' => 'เปิดใช้งานแถบค้นหาอย่างง่าย (เฉพาะหน้าตาเวกเตอร์)',
'vector-view-create' => 'สร้าง',
'vector-view-edit' => 'แก้ไข',
'vector-view-history' => 'ดูประวัติ',
'vector-view-view' => 'อ่าน',
'vector-view-viewsource' => 'ดูโค้ด',
'actions' => 'ปฏิบัติการ',
'namespaces' => 'เนมสเปซ',
'variants' => 'สิ่งที่แตกต่าง',

'errorpagetitle' => 'มีข้อผิดพลาด',
'returnto' => 'กลับไป $1',
'tagline' => 'จาก {{SITENAME}}',
'help' => 'คำอธิบาย',
'search' => 'สืบค้น',
'searchbutton' => 'สืบค้น',
'go' => 'ไป',
'searcharticle' => 'ไป',
'history' => 'ประวัติหน้า',
'history_short' => 'ประวัติ',
'updatedmarker' => 'การปรับตั้งแต่การเข้าชมครั้งล่าสุดของฉัน',
'printableversion' => 'รุ่นสำหรับพิมพ์',
'permalink' => 'ลิงก์ถาวร',
'print' => 'พิมพ์',
'view' => 'ดู',
'edit' => 'แก้ไข',
'create' => 'สร้าง',
'editthispage' => 'แก้ไขหน้านี้',
'create-this-page' => 'สร้างหน้านี้',
'delete' => 'ลบ',
'deletethispage' => 'ลบหน้านี้',
'undelete_short' => 'กู้คืน $1 การแก้ไข',
'viewdeleted_short' => 'ดู $1 การแก้ไขที่ถูกลบ',
'protect' => 'ล็อก',
'protect_change' => 'เปลี่ยน',
'protectthispage' => 'ล็อกหน้านี้',
'unprotect' => 'เปลี่ยนค่าการป้องกัน',
'unprotectthispage' => 'แก้ไขการป้องกันหน้านี้',
'newpage' => 'หน้าใหม่',
'talkpage' => 'อภิปรายหน้านี้',
'talkpagelinktext' => 'พูดคุย',
'specialpage' => 'หน้าพิเศษ',
'personaltools' => 'เครื่องมือส่วนตัว',
'postcomment' => 'ตอนใหม่',
'articlepage' => 'ดูหน้าเนื้อหา',
'talk' => 'อภิปราย',
'views' => 'ดู',
'toolbox' => 'เครื่องมือ',
'userpage' => 'ดูหน้าผู้ใช้',
'projectpage' => 'ดูหน้าโครงการ',
'imagepage' => 'ดูหน้าไฟล์',
'mediawikipage' => 'ดูหน้าข้อความ',
'templatepage' => 'ดูหน้าแม่แบบ',
'viewhelppage' => 'ดูหน้าคำอธิบาย',
'categorypage' => 'ดูหน้าหมวดหมู่',
'viewtalkpage' => 'ดูการพูดคุย',
'otherlanguages' => 'ในภาษาอื่น',
'redirectedfrom' => '(เปลี่ยนทางจาก $1)',
'redirectpagesub' => 'หน้าเปลี่ยนทาง',
'lastmodifiedat' => 'หน้านี้แก้ไขล่าสุดเมื่อวันที่ $1 เวลา $2',
'viewcount' => 'หน้านี้มีการเข้าชม $1 ครั้ง',
'protectedpage' => 'หน้าถูกล็อก',
'jumpto' => 'ข้ามไปยัง:',
'jumptonavigation' => 'นำทาง',
'jumptosearch' => 'สืบค้น',
'view-pool-error' => 'ขออภัย ขณะนี้เซิร์ฟเวอร์มีภาระเกิน
ผู้ใช้พยายามเข้าดูหน้านี้มากเกินไป
กรุณารอสักครู่ก่อนที่จะเข้าดูหน้านี้อีกครั้งหนึ่ง

$1',
'pool-timeout' => 'เกินเวลารอการล็อค',
'pool-queuefull' => 'พื้นที่รองรับคิวเต็ม',
'pool-errorunknown' => 'เกิดความผิดพลาดไม่ทราบสาเหตุ',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite' => 'เกี่ยวกับ {{SITENAME}}',
'aboutpage' => 'Project:เกี่ยวกับ',
'copyright' => 'เนื้อหาอนุญาตให้เผยแพร่ภายใต้ $1',
'copyrightpage' => '{{ns:project}}:ลิขสิทธิ์',
'currentevents' => 'เหตุการณ์ปัจจุบัน',
'currentevents-url' => 'Project:เหตุการณ์ปัจจุบัน',
'disclaimers' => 'ข้อปฏิเสธความรับผิดชอบ',
'disclaimerpage' => 'Project:ข้อปฏิเสธความรับผิดชอบทั่วไป',
'edithelp' => 'คำอธิบายการแก้ไข',
'edithelppage' => 'Help:การแก้ไข',
'helppage' => 'Help:สารบัญ',
'mainpage' => 'หน้าหลัก',
'mainpage-description' => 'หน้าหลัก',
'policy-url' => 'Project:นโยบาย',
'portal' => 'ศูนย์รวมชุมชน',
'portal-url' => 'Project:ศูนย์รวมชุมชน',
'privacy' => 'นโยบายสิทธิส่วนบุคคล',
'privacypage' => 'Project:นโยบายสิทธิส่วนบุคคล',

'badaccess' => 'มีข้อผิดพลาดในการใช้สิทธิ',
'badaccess-group0' => 'คุณไม่ได้รับอนุญาตให้ดำเนินการตามที่ร้องขอ',
'badaccess-groups' => 'ปฏิบัติการที่คุณร้องขอนี้สงวนไว้เฉพาะผู้ใช้ใน{{PLURAL:$2|กลุ่ม|กลุ่มหนึ่งกลุ่มใด ดังนี้}}: $1',

'versionrequired' => 'ต้องการมีเดียวิกิรุ่น $1',
'versionrequiredtext' => 'ต้องการมีเดียวิกิรุ่น $1 สำหรับใช้งานหน้านี้ ดู[[Special:Version|หน้ารุ่น]]',

'ok' => 'ตกลง',
'retrievedfrom' => 'รับข้อมูลจาก "$1"',
'youhavenewmessages' => 'คุณมี$1 ($2)',
'newmessageslink' => 'ข้อความใหม่',
'newmessagesdifflink' => 'การเปลี่ยนแปลงล่าสุด',
'youhavenewmessagesfromusers' => 'คุณมี $1จาก{{PLURAL:$3|ผู้ใช้คนอื่น|ผู้ใช้ $3 คน}} ($2)',
'youhavenewmessagesmanyusers' => 'คุณมี $1จากผู้ใช้หลายคน ($2)',
'newmessageslinkplural' => '$1 ข้อความใหม่',
'newmessagesdifflinkplural' => '$1 การเปลี่ยนแปลงล่าสุด',
'youhavenewmessagesmulti' => 'คุณมีข้อความใหม่ที่ $1',
'editsection' => 'แก้ไข',
'editold' => 'แก้ไข',
'viewsourceold' => 'ดูโค้ด',
'editlink' => 'แก้ไข',
'viewsourcelink' => 'ดูโค้ด',
'editsectionhint' => 'แก้ไขส่วน: $1',
'toc' => 'เนื้อหา',
'showtoc' => 'แสดง',
'hidetoc' => 'ซ่อน',
'collapsible-collapse' => 'ยุบ',
'collapsible-expand' => 'ขยาย',
'thisisdeleted' => 'แสดงหรือเรียกดู $1',
'viewdeleted' => 'ดู $1',
'restorelink' => '$1 การแก้ไขที่ถูกลบ',
'feedlinks' => 'ฟีด',
'feed-invalid' => 'ฟีดที่สมัครไม่ถูกชนิด',
'feed-unavailable' => 'ฟีดไม่ถูกเปิดการใช้งาน',
'site-rss-feed' => 'ฟีดอาร์เอสเอส $1',
'site-atom-feed' => 'ฟีดอะตอม $1',
'page-rss-feed' => 'ฟีดอาร์เอสเอส "$1"',
'page-atom-feed' => 'ฟีดอะตอม "$1"',
'red-link-title' => '$1 (หน้านี้ไม่มี)',
'sort-descending' => 'เรียงจากมากไปน้อย',
'sort-ascending' => 'เรียงจากน้อยไปมาก',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main' => 'หน้า',
'nstab-user' => 'หน้าผู้ใช้',
'nstab-media' => 'หน้าสื่อ',
'nstab-special' => 'หน้าพิเศษ',
'nstab-project' => 'หน้าโครงการ',
'nstab-image' => 'ไฟล์',
'nstab-mediawiki' => 'ข้อความ',
'nstab-template' => 'แม่แบบ',
'nstab-help' => 'หน้าคำอธิบาย',
'nstab-category' => 'หมวดหมู่',

# Main script and global functions
'nosuchaction' => 'ไม่มีการกระทำดังกล่าว',
'nosuchactiontext' => 'การกระทำที่กำหนดผ่านยูอาร์แอลดังกล่าวไม่สามารถใช้ได้
คุณอาจกรอกยูอาร์แอลผิด หรือมาตามลิงก์ที่ไม่ถูกต้อง
หรืออาจเกิดจากข้อผิดพลาดในซอฟต์แวร์ซึ่ง {{SITENAME}} ใช้อยู่',
'nosuchspecialpage' => 'ไม่มีหน้าพิเศษดังกล่าว',
'nospecialpagetext' => '<strong>คุณร้องขอหน้าพิเศษไม่ถูกต้อง</strong>

รายการหน้าพิเศษที่ถูกต้องดูได้ที่ [[Special:SpecialPages|รายการหน้าพิเศษ]]',

# General errors
'error' => 'ข้อผิดพลาด',
'databaseerror' => 'ความผิดพลาดที่ฐานข้อมูล',
'dberrortext' => 'ไวยากรณ์ในการค้นฐานข้อมูลผิดพลาด
สาเหตุอาจเกิดจากบั๊กของซอฟต์แวร์
การค้นฐานข้อมูลล่าสุดกระทำเมื่อ:
<blockquote><tt>$1</tt></blockquote>
จากฟังก์ชัน "<tt>$2</tt>"
ฐานข้อมูลแจ้งข้อผิดพลาดว่า "<samp>$3: $4</samp>"',
'dberrortextcl' => 'ไวยากรณ์ในการค้นฐานข้อมูลผิดพลาด
การค้นฐานข้อมูลล่าสุดกระทำเมื่อ:
"$1"
จากฟังก์ชัน "$2"
ฐานข้อมูลแจ้งข้อผิดพลาดว่า "$3: $4"',
'laggedslavemode' => "'''คำเตือน:''' ข้อมูลในหน้าอาจไม่ใช่ข้อมูลล่าสุด",
'readonly' => 'ฐานข้อมูลถูกล็อก',
'enterlockreason' => 'ใส่เหตุแห่งการล็อก ทั้งเวลาที่คาดว่าจะปลดล็อก',
'readonlytext' => 'ขณะนี้ฐานข้อมูลถูกล็อกมิให้รับข้อมูลใหม่และการเปลี่ยนแปลงอื่น อาจเป็นเพราะการบำรุงรักษาฐานข้อมูลรูทีน หลังแล้วเสร็จจะกลับมาใช้งานได้ตามปกติ

ผู้ดูแลระบบที่ล็อกได้ให้คำอธิบายดังนี้: $1',
'missing-article' => 'ฐานข้อมูลไม่พบเนื้อหาของหน้าที่ควรจะมี ในชื่อ "$1" $2

สาเหตุมักเกิดจากการเปรียบเทียบที่ล้าสมัย หรือการเชื่อมโยงประวัติไปยังหน้านั้นได้ถูกลบแล้ว

หากไม่ใช่กรณีดังกล่าว คุณอาจพบบั๊กในซอฟต์แวร์ กรุณารายงานต่อ[[Special:ListUsers/sysop|ผู้ดูแลระบบ]] พร้อมระบุ URL',
'missingarticle-rev' => '(รุ่น#: $1)',
'missingarticle-diff' => '(ต่าง: $1, $2)',
'readonly_lag' => 'ฐานข้อมูลถูกล็อกอัตโนมัติขณะที่เซิร์ฟเวอร์ฐานข้อมูลรองกำลังปรับปรุงตามฐานข้อมูลหลัก',
'internalerror' => 'เกิดความผิดพลาดภายใน',
'internalerror_info' => 'เกิดความผิดพลาดภายใน: $1',
'fileappenderrorread' => 'ไม่สามารถอ่าน "$1" ระหว่างการผนวกไฟล์',
'fileappenderror' => 'ไม่สามารถต่อท้าย "$2" ด้วย "$1"',
'filecopyerror' => 'ไม่สามารถคัดลอกไฟล์ "$1" ไปที่ "$2"',
'filerenameerror' => 'ไม่สามารถเปลี่ยนชื่อไฟล์ "$1" เป็น "$2"',
'filedeleteerror' => 'ไม่สามารถลบไฟล์ "$1"',
'directorycreateerror' => 'ไม่สามารถสร้างไดเรกทอรี "$1"',
'filenotfound' => 'ไม่พบไฟล์ "$1"',
'fileexistserror' => 'ไม่สามารถเขียนไฟล์ "$1" ได้ เนื่องจากมีไฟล์อยู่แล้ว',
'unexpected' => 'ผลที่ไม่คาดคิด: "$1"="$2"',
'formerror' => 'ผิดพลาด: ไม่สามารถส่งแบบได้',
'badarticleerror' => 'ไม่สามารถดำเนินปฏิบัติการนี้ในหน้านี้',
'cannotdelete' => 'ไม่สามารถลบหน้าหรือไฟล์ "$1" 
อาจมีผู้อื่นลบไปแล้ว',
'cannotdelete-title' => "ไม่สามารถลบหน้า ''$1''",
'delete-hook-aborted' => 'การลบถูกฮุกยกเลิก
ไม่มีคำอธิบายสำหรับการยกเลิกนี้',
'badtitle' => 'ชื่อไม่เหมาะสม',
'badtitletext' => 'ชื่อหน้าที่ร้องขอไม่ถูกต้อง เป็นชื่อว่าง หรือชื่อที่ผิดพลาดเนื่องจากลิงก์ข้ามมาจากภาษาอื่น ชื่อที่ใช้อาจมีตัวอักษรที่ไม่สามารถปรากฏในชื่อได้',
'perfcached' => 'ข้อมูลต่อไปนี้ถูกเก็บไว้ในแคช และอาจล้าสมัย มีผลการค้นหาสูงสุด $1 รายการในแคช',
'perfcachedts' => 'ข้อมูลต่อไปนี้ถูกเก็บไว้ในหน่วยความจำแคช และได้รับการปรับล่าสุดเมื่อ $1 ค่าสูงสุด $4 ผลลัพธ์สามารถเก็บไว้ในหน่วยความจำแคชได้',
'querypage-no-updates' => 'ขณะนี้การปรับปรุงหน้านี้ถูกระงับ ข้อมูลในที่นี่จะไม่รีเฟรชเป็นปัจจุบัน',
'wrong_wfQuery_params' => 'พารามิเตอร์ที่ส่งไป wfQuery() ไม่ถูกต้อง<br />
ฟังก์ชั่น: $1<br />
คำค้น: $2',
'viewsource' => 'ดูโค้ด',
'viewsource-title' => 'ดูโค้ดสำหรับ $1',
'actionthrottled' => 'การกระทำถูกระงับชั่วคราว',
'actionthrottledtext' => 'เพื่อเป็นมาตรการป้องกันสแปม คุณจึงถูกจำกัดมิให้กระทำสิ่งนี้ไม่ให้ติดต่อกันหลายครั้งเกินไปในช่วงระยะเวลาสั้น ๆ ซึ่งขณะนี้คุณได้กระทำเกินขีดจำกัดแล้ว กรุณารอสักครู่แล้วลองอีกครั้ง',
'protectedpagetext' => 'หน้านี้ถูกป้องกันมิให้แก้ไขหรือปฏิบัติการอื่น',
'viewsourcetext' => 'คุณสามารถดูและคัดลอกโค้ดหน้านี้ได้:',
'viewyourtext' => "คุณสามารถดูและคัดลอกต้นฉบับ'''การแก้ไขของคุณ'''ในหน้านี้ได้",
'protectedinterface' => 'หน้านี้เป็นข้อความอินเตอร์เฟซสำหรับซอฟต์แวร์บนวิกินี้ และถูกป้องกันเพื่อมิให้มีการกระทำผิด
ในการเพิ่มหรือเปลี่ยนแปลงการแปลสำหรับทุกวิกิ โปรดใช้ [//translatewiki.net/ translatewiki.net] โครงการแปลมีเดียวิกิเป็นภาษาถิ่น',
'editinginterface' => "'''คำเตือน:''' คุณกำลังแก้ไขหน้าที่ใช้เพื่อให้ข้อความอินเตอร์เฟซแก่ซอฟต์แวร์
การเปลี่ยนแปลงหน้านี้จะกระทบต่อลักษณะของอินเตอร์เฟซผู้ใช้แก่ผู้ใช้อื่นบนวิกินี้
ในการเพิ่มหรือเปลี่ยนแปลงคำแปลสำหรับทุกวิกิ โปรดใช้ [//translatewiki.net/wiki/Main_Page?setlang=th translatewiki.net] โครงการแปลมีเดียวิกิเป็นภาษาถิ่น",
'sqlhidden' => '(คำสั่ง SQL ซ่อนอยู่)',
'cascadeprotected' => 'หน้านี้ได้รับการป้องกันจากการแก้ไข เนื่องจากหน้านี้ถูกใช้เป็นส่วนหนึ่งใน{{PLURAL:$1|หน้า $2 ซึ่งได้รับการป้องกันแบบ "ทบทุกลำดับขั้น"|หน้าซึ่งได้รับการป้องกันแบบ "ทบทุกลำดับขั้น" ดังต่อไปนี้: $2}}',
'namespaceprotected' => "คุณไม่มีสิทธิแก้ไขหน้าในเนมสเปซ '''$1'''",
'customcssprotected' => 'คุณไม่มีสิทธิแก้ไขหน้าสไตล์ CSS นี้ เนื่องจากหน้านี้มีการตั้งค่าส่วนบุคคลของผู้ใช้อื่น',
'customjsprotected' => 'คุณไม่มีสิทธิแก้ไขหน้าจาวาสคริปต์นี้ เนื่องจากหน้านี้มีการตั้งค่าส่วนบุคคลของผู้ใช้อื่น',
'ns-specialprotected' => 'หน้าพิเศษไม่สามารถแก้ไขได้',
'titleprotected' => "หัวเรื่องนี้ถูกป้องกันมิให้สร้างโดย [[User:$1|$1]] 
เหตุผลที่ให้ไว้ คือ ''$2''",
'invalidtitle-knownnamespace' => 'ชื่อที่มีเนมสเปซ "$2" กับข้อความ "$3" ไม่ถูกต้อง',
'invalidtitle-unknownnamespace' => 'ชื่อที่ไม่ทราบเนมสเปซหมายเลข $1 กับข้อความ "$2" ไม่ถูกต้อง',
'exception-nologin' => 'ไม่ได้ล็อกอิน',
'exception-nologin-text' => 'หน้าหรือปฏิบัติการนี้กำหนดให้คุณล็อกอินเข้าสู่วิกินี้ก่อน',

# Virus scanner
'virus-badscanner' => "การตั้งค่าผิดพลาด: ไม่รู้จักตัวสแกนไวรัส: ''$1''",
'virus-scanfailed' => 'การสแกนล้มเหลว (โค้ด $1)',
'virus-unknownscanner' => 'ไม่รู้จักโปรแกรมป้องกันไวรัสตัวนี้:',

# Login and logout pages
'logouttext' => "'''ขณะนี้คุณได้ล็อกเอาต์ออกจากระบบ'''

คุณสามารถใช้งาน {{SITENAME}} ได้ต่อในฐานะผู้ใช้นิรนาม หรือคุณสามารถ[[Special:UserLogin|ล็อกอินกลับเข้าไป]]ด้วยชื่อผู้ใช้เดิมหรือชื่อผู้ใช้อื่นๆ
อย่างไรก็ตามอาจจะมีบางหน้าที่ยังแสดงข้อความว่าคุณกำลังล็อกอินอยู่ จนกว่าคุณจะล้างแคชออกจากเว็บเบราว์เซอร์",
'welcomecreation' => '== ยินดีต้อนรับ $1! ==

ชื่อบัญชีผู้ใช้ของคุณถูกสร้างขึ้นแล้ว
อย่าลืมเข้าไป[[Special:Preferences|ตั้งค่าผู้ใช้สำหรับ {{SITENAME}}]]',
'yourname' => 'ชื่อผู้ใช้',
'yourpassword' => 'รหัสผ่าน',
'yourpasswordagain' => 'พิมพ์รหัสผ่านอีกครั้ง:',
'remembermypassword' => 'จำการล็อกอินของฉันบนเบราเซอร์นี้ (นานสุด $1 วัน)',
'securelogin-stick-https' => 'ยังคงเชื่อมต่อกับ HTTPS หลังจากล็อกอิน',
'yourdomainname' => 'โดเมนของคุณ:',
'password-change-forbidden' => 'คุณไม่สามารถเปลี่ยนรหัสผ่านบนวิกินี้',
'externaldberror' => 'มีข้อผิดพลาดของฐานข้อมูลในการพิสูจน์ตัวจริง หรือคุณไม่ได้รับอนุญาตให้ปรับบัญชีภายนอกของคุณ',
'login' => 'ล็อกอิน',
'nav-login-createaccount' => 'ล็อกอิน / สร้างบัญชี',
'loginprompt' => 'ต้องเปิดใช้คุกกี้ก่อนจะล็อกอินเข้าสู่ {{SITENAME}}',
'userlogin' => 'ล็อกอิน / สร้างบัญชี',
'userloginnocreate' => 'ล็อกอิน',
'logout' => 'ล็อกเอาต์',
'userlogout' => 'ล็อกเอาต์',
'notloggedin' => 'ไม่ได้ล็อกอิน',
'nologin' => 'ไม่มีบัญชีหรือ $1',
'nologinlink' => 'สร้างบัญชี',
'createaccount' => 'สร้างบัญชี',
'gotaccount' => "มีบัญชีแล้วใช่ไหม '''$1'''",
'gotaccountlink' => 'ล็อกอิน',
'userlogin-resetlink' => 'ลืมรายละเอียดล็อกอินของคุณหรือ',
'createaccountmail' => 'ผ่านทางอีเมล',
'createaccountreason' => 'เหตุผล:',
'badretype' => 'รหัสผ่านที่ใส่ไม่ตรงกัน',
'userexists' => 'ชื่อผู้ใช้ที่กรอกมีผู้อื่นใช้ไปแล้ว กรุณาเลือกชื่ออื่น',
'loginerror' => 'ล็อกอินผิดพลาด',
'createaccounterror' => 'ไม่สามารถสร้างบัญชีผู้ใช้: $1',
'nocookiesnew' => 'ชื่อบัญชีผู้ใช้ได้ถูกสร้างขึ้นแล้ว แต่ยังไม่ได้ล็อกอินเข้าสู่ {{SITENAME}} เนื่องจากว่าไม่ได้เปิดใช้คุกกี้ ถ้าต้องการล็อกอินให้เปิดใช้งานคุกกี้และทำการล็อกอินโดยใส่ชื่อผู้ใช้พร้อมรหัสผ่าน',
'nocookieslogin' => '{{SITENAME}} ใช้คุกกี้สำหรับการล็อกอิน ขณะนี้คุกกี้ของคุณไม่เปิดใช้งาน กรุณาเปิดใช้งานและลองอีกครั้ง',
'nocookiesfornew' => 'บัญชีผู้ใช้ไม่ถูกสร้าง เนื่องจากเราไม่สามารถยืนยันแหล่งที่มา
กรุณาแน่ใจว่าคุณได้เปิดใช้คุกกี้ โหลดหน้านี้ใหม่และลองอีกครั้ง',
'noname' => 'คุณไม่ได้ใส่ชื่อผู้ใช้ที่ถูกต้อง',
'loginsuccesstitle' => 'ล็อกอินสำเร็จ',
'loginsuccess' => "'''ขณะนี้คุณล็อกอินเข้าสู่ {{SITENAME}} ด้วยชื่อ \"\$1\"'''",
'nosuchuser' => 'ไม่มีผู้ใช้ชื่อ "$1"
อักษรใหญ่เล็กมีผลต่อชื่อผู้ใช้
กรุณาตรวจการสะกดอีกครั้ง หรือ[[Special:UserLogin/signup|สร้างบัญชีใหม่]]',
'nosuchusershort' => 'ไม่มีผู้ใช้ชื่อ "$1" กรุณาตรวจสอบการสะกด',
'nouserspecified' => 'คุณต้องระบุชื่อผู้ใช้',
'login-userblocked' => 'ผู้ใช้นี้ถูกบล็อก ไม่อนุญาตให้ล็อกอิน',
'wrongpassword' => 'รหัสผ่านที่ใส่ไม่ถูกต้อง โปรดลองอีกครั้ง',
'wrongpasswordempty' => 'ยังไม่ได้ระบุรหัสผ่าน โปรดลองอีกครั้ง',
'passwordtooshort' => 'รหัสผ่านต้องมีความยาวอย่างน้อย $1 ตัวอักษร',
'password-name-match' => 'รหัสผ่านของคุณต้องต่างจากชื่อผู้ใช้ของคุณ',
'password-login-forbidden' => 'ห้ามใช้ชื่อผู้ใช้และรหัสผ่านนี้',
'mailmypassword' => 'อีเมลรหัสผ่านใหม่',
'passwordremindertitle' => 'รหัสผ่านชั่วคราวใหม่สำหรับ {{SITENAME}}',
'passwordremindertext' => 'ผู้ใดผู้หนึ่ง (ซึ่งอาจเป็นคุณ ที่ใช้หมายเลขไอพี $1) ขอให้ส่งรหัสผ่านใหม่ของ {{SITENAME}} ($4) รหัสผ่านชั่วคราวสำหรับชื่อผู้ใช้ "$2" ถูกสร้างขึ้น และกำหนดเป็น "$3" หากเป็นเจตนาของคุณ คุณจำต้องล็อกอินและเลือกรหัสผ่านใหม่ ณ ขณะนี้ รหัสผ่านชั่วคราวของคุณจะหมดอายุใน $5 วัน

หากบุคคลอื่นบุคคลใดขอรหัสผ่านใหม่ หรือหากคุณจำรหัสผ่านของคุณได้แล้ว และไม่ต้องการเปลี่ยนรหัสผ่านใหม่อีกต่อไป คุณอาจละเลยข้อความนี้และใช้รหัสผ่านเดิมของคุณต่อไป',
'noemail' => 'ไม่มีที่อยู่อีเมลบันทึกไว้สำหรับผู้ใช้ "$1"',
'noemailcreate' => 'คุณจำต้องใส่ที่อยู่อีเมลให้ถูกต้อง',
'passwordsent' => 'รหัสผ่านใหม่ได้ถูกส่งไปยังที่อยู่อีเมลที่ลงทะเบียนไว้ของผู้ใช้ "$1"
กรุณาล็อกอินอีกครั้งหลังจากคุณได้รับอีเมล',
'blocked-mailpassword' => 'หมายเลขไอพีของคุณถูกบล็อกมิให้แก้ไข ฉะนั้น จึงไม่ได้รับอนุญาตให้ใช้ฟังก์ชันขอกู้รหัสผ่านเพื่อป้องกันการกระทำผิด',
'eauthentsent' => 'อีเมลยืนยันได้ถูกส่งไปที่อีเมลที่ได้ถูกเสนอ ก่อนที่อีเมลจะถูกส่งไปที่ชื่อบัญชีนั้น คุณต้องปฏิบัติตามคำแนะนำในอีเมลเพื่อยืนยันว่าหมายเลยบัญชีนั้นเป็นของคุณ',
'throttled-mailpassword' => 'ตัวเตือนรหัสผ่านได้ถูกส่งไปแล้วใน $1 ชั่วโมงที่ผ่านมา ตัวเตือนรหัสผ่านนี้จะถูกส่งได้หนึ่งครั้งต่อ $1 ชั่วโมงเท่านั้น เพื่อป้องกันการกระทำผิด',
'mailerror' => 'ไม่สามารถส่งอีเมลเนื่องจาก $1',
'acct_creation_throttle_hit' => 'ผู้เข้าชมที่ใช้หมายเลขไอพีของคุณในวิกินี้ ได้สร้างชื่อบัญชีแล้ว $1 บัญชีในวันที่ผ่านมา ซึ่งเป็นจำนวนมากที่สุดที่อนุญาตในช่วงเวลาดังกล่าว
จึงส่งผลให้ผู้เข้าชมที่ใช้หมายเลขไอพีนี้ ไม่สามารถสร้างบัญชีได้อีกในขณะนี้',
'emailauthenticated' => 'อีเมลของคุณได้รับการรับรอง ณ วันที่ $2 เวลา $3',
'emailnotauthenticated' => 'อีเมลของคุณยังไม่ได้ถูกยืนยัน ดังนั้นคำสั่งพิเศษที่ใช้งานผ่านอีเมลยังไม่เปิดใช้งาน',
'noemailprefs' => 'ระบุที่อยู่อีเมลในการตั้งค่าของคุณเพื่อให้คุณลักษณะเหล่านี้ทำงานได้',
'emailconfirmlink' => 'ยืนยันอีเมลของคุณ',
'invalidemailaddress' => 'ไม่สามารถรับที่อยู่อีเมลได้ เพราะดูมีรูปแบบไม่ถูกต้อง
โปรดใส่ที่อยู่ให้มีรูปแบบถูกต้อง หรือเว้นช่องนั้น',
'cannotchangeemail' => 'ไม่สามารถเปลี่ยนที่อยู่อีเมลบนวิกินี้',
'emaildisabled' => 'เว็บไซต์นี้ไม่สามารถส่งอีเมล',
'accountcreated' => 'ชื่อบัญชีได้ถูกสร้างขึ้น',
'accountcreatedtext' => 'ชื่อบัญชีสำหรับ $1 ได้ถูกสร้างขึ้นแล้ว',
'createaccount-title' => 'สร้างบัญชีสำหรับ {{SITENAME}}',
'createaccount-text' => 'มีบางคนสร้างบัญชีสำหรับที่อยู่อีเมลของคุณไว้บน {{SITENAME}} ($4) โดยใช้ชื่อบัญชีผู้ใช้ "$2" และรหัสผ่าน "$3" คุณควรล็อกอินเพื่อเปลี่ยนรหัสผ่านทันที

คุณอาจเพิกเฉยข้อความนี้ หากการสร้างบัญชีนี้เกิดจากความผิดพลาด',
'usernamehasherror' => 'ในชื่อผู้ใช้ต้องไม่มีตัวอักษร "#"',
'login-throttled' => 'คุณได้พยายามล็อกอินมากครั้งเกินไป
กรุณารอสักครู่แล้วลองใหม่อีกครั้ง',
'login-abort-generic' => 'การเข้าสู่ระบบของคุณไม่ประสบความสำเร็จ - ล้มเลิกแล้ว',
'loginlanguagelabel' => 'ภาษา: $1',
'suspicious-userlogout' => 'คำขอของคุณเพื่อออกจากระบบถูกปฏิเสธ เพราะดูเหมือนว่าจะส่งมาจากเบราว์เซอร์หรือพร็อกซี่แคชที่เสีย',

# E-mail sending
'php-mail-error-unknown' => 'ข้อผิดพลาดไม่ทราบสาเหตุในฟังก์ชัน mail() ของพีเอชพี',
'user-mail-no-addy' => 'พยายามส่งอีเมลโดยไม่มีที่อยู่อีเมล',

# Change password dialog
'resetpass' => 'เปลี่ยนรหัสผ่าน',
'resetpass_announce' => 'คุณใช้รหัสอีเมลชั่วคราวล็อกอิน คุณต้องกำหนดรหัสผ่านใหม่ตรงนี้ จึงจะเสร็จสิ้นขั้นตอนการล็อกอิน:',
'resetpass_text' => '<!-- เพิ่มข้อความที่นี่ -->',
'resetpass_header' => 'เปลี่ยนรหัสผ่าน',
'oldpassword' => 'รหัสผ่านเดิม:',
'newpassword' => 'รหัสผ่านใหม่:',
'retypenew' => 'พิมพ์รหัสผ่านใหม่อีกครั้ง:',
'resetpass_submit' => 'ตั้งรหัสผ่านและล็อกอิน',
'resetpass_success' => 'เปลี่ยนรหัสผ่านของคุณเรียบร้อย ขณะนี้กำลังล็อกอินให้คุณ...',
'resetpass_forbidden' => 'ไม่สามารถเปลี่ยนรหัสผ่านได้',
'resetpass-no-info' => 'คุณต้องล็อกอินเพื่อเข้าถึงหน้านี้โดยตรง',
'resetpass-submit-loggedin' => 'เปลี่ยนรหัสผ่าน',
'resetpass-submit-cancel' => 'ยกเลิก',
'resetpass-wrong-oldpass' => 'รหัสผ่านชั่วคราวหรือปัจจุบันไม่ถูกต้อง
คุณอาจเปลี่ยนรหัสผ่านของคุณไปแล้ว หรือร้องขอรหัสผ่านชั่วคราวใหม่แล้ว',
'resetpass-temp-password' => 'รหัสผ่านชั่วคราว:',

# Special:PasswordReset
'passwordreset' => 'ตั้งรหัสผ่านใหม่',
'passwordreset-text' => 'กรอกแบบนี้เพื่อรับตัวเตือนอีเมลของรายละเอียดบัญชีของคุณ',
'passwordreset-legend' => 'เปลี่ยนรหัสผ่าน',
'passwordreset-disabled' => 'การตั้งรหัสผ่านใหม่ปิดใช้งานบนวิกินี้',
'passwordreset-username' => 'ชื่อผู้ใช้:',
'passwordreset-domain' => 'โดเมน:',
'passwordreset-email' => 'ที่อยู่อีเมล:',
'passwordreset-emailtitle' => 'รายละเอียดบัญชีบน {{SITENAME}}',
'passwordreset-emailelement' => 'ชื่อผู้ใช้: $1
รหัสผ่านชั่วคราว: $2',
'passwordreset-emailsent' => 'อีเมลแจ้งเตือนได้ถูกส่งไปแล้ว',

# Special:ChangeEmail
'changeemail' => 'เปลี่ยนที่อยู่อีเมล',
'changeemail-header' => 'เปลี่ยนที่อยู่อีเมลของบัญชี',
'changeemail-text' => 'กรอกแบบนี้เพื่อเปลี่ยนที่อยู่อีเมลของคุณ คุณต้องกรอกรหัสผ่านเพื่อยืนยันการเปลี่ยนแปลงนี้',
'changeemail-no-info' => 'คุณจำต้องล็อกอินเพื่อเข้าถึงหน้านี้โดยตรง',
'changeemail-oldemail' => 'ที่อยู่อีเมลปัจจุบัน:',
'changeemail-newemail' => 'ที่อยู่อีเมลใหม่:',
'changeemail-none' => '(ไม่มี)',
'changeemail-submit' => 'เปลี่ยนอีเมล',
'changeemail-cancel' => 'ยกเลิก',

# Edit page toolbar
'bold_sample' => 'ทำตัวหนา',
'bold_tip' => 'ทำตัวหนา',
'italic_sample' => 'ตัวหนังสือที่เป็นตัวเอน',
'italic_tip' => 'ทำตัวเอน',
'link_sample' => 'ลิงก์เชื่อมโยง',
'link_tip' => 'ลิงก์ภายในเว็บ',
'extlink_sample' => 'http://www.example.com ชื่อคำอธิบายลิงก์',
'extlink_tip' => 'ลิงก์ภายนอก (อย่าลืมใส่ http:// นำหน้าเสมอ)',
'headline_sample' => 'หัวข้อ',
'headline_tip' => 'หัวข้อ',
'nowiki_sample' => 'ใส่ข้อความที่ไม่จัดรูปแบบ',
'nowiki_tip' => 'ข้ามการจัดรูปแบบวิกิ',
'image_sample' => 'ตัวอย่าง.jpg',
'image_tip' => 'ใส่ไฟล์',
'media_sample' => 'ตัวอย่าง.ogg',
'media_tip' => 'เชื่อมโยงไฟล์สื่อ',
'sig_tip' => 'ลายเซ็นของคุณพร้อมตราเวลา',
'hr_tip' => 'เส้นนอน',

# Edit pages
'summary' => 'คำอธิบายโดยย่อ:',
'subject' => 'หัวข้อ:',
'minoredit' => 'เป็นการแก้ไขเล็กน้อย',
'watchthis' => 'เฝ้าดูหน้านี้',
'savearticle' => 'บันทึก',
'preview' => 'ตัวอย่าง',
'showpreview' => 'แสดงตัวอย่าง',
'showlivepreview' => 'แสดงตัวอย่างทันที',
'showdiff' => 'แสดงความเปลี่ยนแปลง',
'anoneditwarning' => "'''คำเตือน:''' คุณมิได้ล็อกอิน ที่อยู่ไอพีของคุณจะถูกบันทึกไว้ในประวัติการแก้ไขของหน้านี้",
'anonpreviewwarning' => "'''คุณมิได้ล็อกอิน การบันทึกจะเก็บที่อยู่ไอพีของคุณในประวัติการแก้ไขของหน้านี้'''",
'missingsummary' => "'''อย่าลืม:''' คุณยังไม่ได้ระบุคำอธิบายการแก้ไขครั้งนี้ ถ้าคุณกดบันทึกไปส่วนคำอธิบายการแก้ไขนั้นจะว่างและไม่แสดงผล",
'missingcommenttext' => 'กรุณาใส่ความเห็นด้านล่าง',
'missingcommentheader' => "'''ประกาศเตือน:''' คุณยังไม่ได้ใส่หัวข้อ/จ่าหัวสำหรับความเห็นนี้ ถ้าคุณกด \"{{int:savearticle}}\" อีกครั้ง การแก้ไขของคุณจะถูกบันทึกโดยไม่มีหัวข้อ",
'summary-preview' => 'ตัวอย่างคำอธิบายการแก้ไข:',
'subject-preview' => 'ตัวอย่างหัวข้อ:',
'blockedtitle' => 'ผู้ใช้ถูกบล็อก',
'blockedtext' => "'''ชื่อผู้ใช้หรือหมายเลขไอพีถูกของคุณถูกบล็อก'''

$1 เป็นผู้ดำเนินการบล็อก 
โดยให้เหตุผลว่า ''$2''

* เริ่มการบล็อก: $8
* หมดเขตการบล็อก: $6
* ผู้ถูกบล็อก: $7

คุณสามารถติดต่อ $1 หรือ[[{{MediaWiki:Grouppage-sysop}}|ผู้ดูแลระบบ]]คนอื่นเพื่อหารือเกี่ยวกับการบล็อกนี้ 
คุณไม่สามารถใช้คุณลักษณะ 'ส่งอีเมลหาผู้ใช้รายนี้ได้' จนกว่าจะระบุที่อยู่อีเมลที่ถูกต้องใน[[Special:Preferences|การตั้งค่าบัญชี]]ของคุณ และคุณมิได้ถูกบล็อกมิให้ใช้

หมายเลขไอพีปัจจุบันของคุณคือ $3 และหมายเลขการบล็อกคือ #$5 กรุณาระบุหมายเลขเหล่านี้ในการติดต่อใด ๆ",
'autoblockedtext' => 'หมายเลขไอพีของคุณถูกบล็อกโดยอัตโนมัติ เนื่องจากมีผู้ใช้อื่นใช้งานผ่านหมายเลขไอพีนี้มาก่อน ซึ่งถูกบล็อกโดย $1
เหตุผลที่ให้ไว้ในการบล็อกคือ:

:\'\'$2\'\'

* เริ่มการบล็อก: $8
* สิ้นสุดการบล็อก: $6
* ผู้ถูกบล็อกโดยเจตนา: $7

คุณอาจติดต่อ $1 หรือ[[{{MediaWiki:Grouppage-sysop}}|ผู้ดูแลระบบ]]คนอื่นเพื่อหารือเกี่ยวกับการบล็อกนี้

โปรดทราบว่าคุณอาจไม่สามารถใช้คำสั่ง "อีเมลหาผู้ใช้นี้" หากคุณไม่มีที่อยู่อีเมลที่ถูกต้อง ดังที่ลงทะเบียนไว้ใน[[Special:Preferences|การตั้งค่าผู้ใช้]] และไม่ถูกบล็อกจากการใช้คำสั่งนี้

หมายเลขไอพีปัจจุบันของคุณคือ $3 หมายเลขการบล็อกคือ #$5
กรุณาระบุรายละเอียดทั้งหมดข้างต้นในการร้องขอใดๆ ที่คุณกระทำ',
'blockednoreason' => 'ไม่ได้ให้เหตุผลไว้',
'whitelistedittext' => 'คุณต้อง$1เพื่อทำการแก้ไขหน้า',
'confirmedittext' => 'คุณต้องยืนยันที่อยู่อีเมลของคุณก่อนแก้ไขหน้า โปรดกำหนดที่อยู่อีเมลของคุณและทำให้ถูกต้องผ่าน[[Special:Preferences|การตั้งค่าผู้ใช้]]',
'nosuchsectiontitle' => 'ไม่พบหัวข้อย่อย',
'nosuchsectiontext' => 'คุณพยายามแก้ไขตอนที่ไม่มีอยู่ ตอนดังกล่าวอาจถูกย้ายหรือลบขณะที่คุณดูหน้าอยู่',
'loginreqtitle' => 'จำเป็นต้องล็อกอิน',
'loginreqlink' => 'ล็อกอิน',
'loginreqpagetext' => 'คุณต้อง$1เพื่อดูหน้าอื่น',
'accmailtitle' => 'ส่งรหัสผ่านแล้ว',
'accmailtext' => "มีการสร้างรหัสผ่านแบบสุ่มให้กับ [[User talk:$1|$1]] โดยจัดส่งไปที่ $2

สามารถเปลี่ยนรหัสผ่านของบัญชีใหม่นี้ในหน้า''[[Special:ChangePassword|เปลี่ยนรหัสผ่าน]]'' หลังล็อกอินแล้ว",
'newarticle' => '(ใหม่)',
'newarticletext' => "คุณตามลิงก์ไปยังหน้าที่ยังไม่มีในขณะนี้
ในการสร้างหน้า เริ่มพิมพ์ในกล่องด้านล่าง (ดูข้อมูลเพิ่มเติมใน[[{{MediaWiki:Helppage}}|หน้าคำอธิบาย]])
ถ้าคุณมาโดยอุบัติเหตุ ให้กด'''ถอยหลัง''' (back) ที่เบราว์เซอร์",
'anontalkpagetext' => "----''หน้านี้เป็นหน้าพูดคุยสำหรับผู้ใช้นิรนาม ซึ่งยังไม่ได้สร้างบัญชีผู้ใช้
โดยทางเราจำเป็นต้องระบุตัวตนผ่านทางหมายเลขไอพี
ซึ่งหมายเลขไอพีนี้อาจถูกใช้ร่วมกันโดยผู้ใช้หลายคน
ถ้าคุณเป็นผู้ใช้นิรนาม และรู้สึกว่าความเห็นที่คุณได้รับไม่เกี่ยวข้องกับคุณแต่อย่างใด กรุณา[[Special:UserLogin/signup|สร้างบัญชีผู้ใช้]]หรือ[[Special:UserLogin|ล็อกอิน]] เพื่อป้องกันการสับสนกับผู้ใช้นิรนามรายอื่น''",
'noarticletext' => 'ขณะนี้ไม่มีเนื้อหาในหน้านี้
คุณสามารถ [[Special:Search/{{PAGENAME}}|ค้นหาชื่อหน้านี้]]ในหน้าอื่น
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ค้นหาปูมที่เกี่ยวข้อง] หรือ[{{fullurl:{{FULLPAGENAME}}|action=edit}} แก้ไขหน้านี้]</span>',
'noarticletext-nopermission' => 'ปัจจุบันไม่มีข้อความในหน้านี้
คุณสามารถ[[Special:Search/{{PAGENAME}}|ค้นหาชื่อบทความนี้]]ในหน้าอื่น หรือ<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} ค้นหาปูมที่เกี่ยวข้อง]</span> แต่คุณไม่มีสิทธิ์สร้างหน้านี้',
'userpage-userdoesnotexist' => 'บัญชีผู้ใช้ "<nowiki>$1</nowiki>" มิได้ลงทะเบียน กรุณาตรวจสอบก่อนว่าคุณต้องการสร้างหรือแก้ไขหน้านี้',
'userpage-userdoesnotexist-view' => 'บัญชีผู้ใช้ "$1" มิได้ลงทะเบียน',
'blocked-notice-logextract' => 'ปัจจุบันเลขที่อยู่ไอพีนี้ถูกบล็อก
รายการบล็อกล่าสุดแสดงด้านล่างนี้เพื่อการอ้างอิง:',
'clearyourcache' => "'''หมายเหตุ:''' หลังจากบันทึกแล้ว คุณอาจจะต้องล้างแคชเว็บเบราว์เซอร์ของคุณเพื่อดูการเปลี่ยนแปลง
* '''ไฟร์ฟอกซ์ / ซาฟารี:''' กดปุ่ม ''Shift'' ค้างไว้ขณะคลิก ''Reload'' หรือกดปุ่ม ''Ctrl-F5'' หรือ ''Ctrl-R'' (''⌘-R'' บนแมคอินทอช)
* '''กูเกิล โครม:''' กดปุ่ม ''Ctrl-Shift-R'' (''⌘-Shift-R'' บนแมคอินทอช)
* '''อินเทอร์เน็ตเอกซ์พลอเรอร์:''' กดปุ่ม ''Ctrl'' ค้างไว้ขณะคลิก ''Refresh'' หรือกดปุ่ม ''Ctrl-F5''
* '''คองเคอเรอร์:''' คลิก ''Reload'' หรือกดปุ่ม ''F5''
* '''โอเปร่า:''' ล้างแคชในเมนู ''Tools → Preferences''",
'usercssyoucanpreview' => "'''คำแนะนำ:''' กดปุ่ม \"{{int:showpreview}}\" เพื่อทดสอบสไตล์ชีท CSS ก่อนบันทึก",
'userjsyoucanpreview' => "'''คำแนะนำ:''' กดปุ่ม \"แสดงตัวอย่าง\" เพื่อทดสอบจาวาสคริปต์ใหม่ก่อนบันทึก",
'usercsspreview' => "'''อย่าลืมว่าคุณกำลังดูตัวอย่าง CSS ผู้ใช้ของคุณ'''
'''ยังไม่ได้ถูกบันทึก!'''",
'userjspreview' => "'''อย่าลืมว่าคุณกำลังทดสอบ/ดูตัวอย่างจาวาสคริปต์ผู้ใช้ของคุณ'''
'''ยังไม่ถูกบันทึก!'''",
'sitecsspreview' => "'''พึงระลึกว่าคุณกำลังแสดงตัวอย่าง CSS นี้เท่านั้น'''
'''มันยังไม่ได้ถูกบันทึก!'''",
'sitejspreview' => "'''พึงระลึกว่าคุณกำลังแสดงตัวอย่างโค้ดจาวาสคริปต์นี้เท่านั้น'''
'''มันยังไม่ได้ถูกบันทึก!'''",
'userinvalidcssjstitle' => "'''คำเตือน:''' ไม่มีหน้าตา \"\$1\" หน้า .css และ .js ที่ปรับแต่งเอง ใช้ตัวพิมพ์เล็กทั้งหมด เช่น ใช้ {{ns:user}}:Foo/vector.css แทนที่จะเป็น {{ns:user}}:Foo/Vector.css",
'updated' => '(ปรับปรุงแล้ว)',
'note' => "'''คำแนะนำ:'''",
'previewnote' => "'''พึงระลึกว่านี่เป็นเพียงตัวอย่างเท่านั้น'''
การเปลี่ยนแปลงของคุณยังไม่ได้ถูกบันทึก!",
'continue-editing' => 'ไปยังพื้นที่แก้ไข',
'previewconflict' => 'การแสดงผลส่วนนี้เป็นตัวอย่างของการแก้ไขด้านบน  ถ้ากดบันทึกการแสดงผลจะแสดงในลักษณะนี้ทันที',
'session_fail_preview' => "'''ขออภัย ไม่สามารถดำเนินการแก้ไขต่อได้ เนื่องจากข้อมูลเชื่อมต่อสูญหาย
ให้ทดลองแก้ไขอีกครั้งหนึ่ง ถ้ายังไม่สามารถทำได้ ให้ลองล็อกเอาต์และล็อกอินกลับมาอีกครั้ง'''",
'session_fail_preview_html' => "'''ขออภัย ไม่สามารถดำเนินการแก้ไขต่อได้ เนื่องจากข้อมูลเชื่อมต่อสูญหาย'''

''เนื่องจาก {{SITENAME}} ใช้รูปแบบเอชทีเอ็มแอลล้วน การแสดงตัวอย่างจะถูกซ่อนไว้เพื่อป้องกันการโตมตีด้วยจาวาสคริปต์''

'''ถ้าการแก้ไขครั้งนี้ถูกต้อง ให้ทดลองแก้ไขอีกครั้งหนึ่ง ถ้ายังไม่สามารถทำได้ ให้ลอง[[Special:UserLogout|ล็อกเอาต์]]และล็อกอินกลับมาอีกครั้ง'''",
'token_suffix_mismatch' => "'''การแก้ไขของคุณได้ถูกปฏิเสธ เนื่องจากเครื่องลูกข่ายที่คุณใช้อยู่ได้ทำลายรูปแบบเครื่องหมายวรรคตอนในตราสารประจำการแก้ไข (edit token)'''
ระบบไม่รับการแก้ไขของคุณเพื่อป้องกันความผิดพลาดของข้อมูล
ในบางครั้งปัญหานี้จะเกิดขึ้นถ้าคุณใช้บริการเว็บพร็อกซีนิรนามที่มีบั๊ก",
'edit_form_incomplete' => "'''แบบแก้ไขบางส่วนไปไม่ถึงเซิร์ฟเวอร์ ตรวจสอบอีกครั้งว่าการแก้ไขของคุณยังอยู่และลองอีกครั้ง'''",
'editing' => 'กำลังแก้ไข $1',
'creating' => 'กำลังสร้าง $1',
'editingsection' => 'กำลังแก้ไข $1 (เฉพาะส่วน)',
'editingcomment' => 'กำลังแก้ไข $1 (ตอนใหม่)',
'editconflict' => 'แก้ไขชนกัน: $1',
'explainconflict' => "ใครบางคนได้เปลี่ยนแปลงหน้านี้ตั้งแต่คุณกำลังแก้ไข
พื้นที่ข้อความส่วนบนมีข้อความหน้าที่มีอยู่ในปัจจุบัน
การแก้ไขของคุณแสดงอยู่ในพื้นที่ข้อความส่วนล่าง
คุณจะต้องรวมการเปลี่ยนแปลงของคุณเข้ากับข้อความที่มีอยู่
'''เฉพาะ'''ข้อความในพื้นที่ข้อความส่วนบนเท่านั้นที่จะถูกบันทึก เมื่อกดปุ่ม \"{{int:savearticle}}\"",
'yourtext' => 'ข้อความของคุณ',
'storedversion' => 'รุ่นที่เก็บไว้',
'nonunicodebrowser' => "'''คำเตือน: เว็บเบราว์เซอร์นี้ไม่สนับสนุนการใช้งานแบบยูนิโคด ตัวอักษรที่ไม่ใช่แบบแอสกีจะแสดงในกล่องการแก้ไขในลักษณะรหัสเลขฐานสิบหก'''",
'editingold' => "'''คำเตือน: ข้อมูลที่แก้ไขอยู่ไม่ใช่ข้อมูลใหม่ล่าสุดของหน้านี้ ถ้าทำการบันทึกไป การเปลี่ยนแปลงที่เกิดขึ้นระหว่างรุ่นนี้กับรุ่นใหม่จะสูญหาย'''",
'yourdiff' => 'ข้อแตกต่าง',
'copyrightwarning' => "โปรดอย่าลืมว่างานเขียนทั้งหมดใน {{SITENAME}} ผู้เขียนทั้งหมดยินดีให้งานเก็บไว้ภายใต้สัญญาลิขสิทธิ์ $2 (ดู $1 สำหรับข้อมูลเพิ่มเติม)
ถ้าคุณไม่ต้องการให้งานของคุณถูกแก้ไข หรือไม่ต้องการให้งานเผยแพร่ตามที่ได้กล่าวไว้ อย่าส่งข้อความเข้ามาที่นี่<br />
นอกจากนี้แน่ใจว่าข้อความที่ส่งเข้ามาได้เขียนด้วยตัวเอง ไม่ได้คัดลอก หรือทำซ้ำจากแหล่งอื่น
'''อย่าส่งงานที่มีลิขสิทธิ์เข้ามาก่อนได้รับอนุญาตจากเจ้าของ!'''",
'copyrightwarning2' => "โปรดอย่าลืมว่างานเขียนทั้งหมดใน {{SITENAME}} อาจจะถูกแก้ไข ดัดแปลง หรือลบออกโดยผู้ร่วมเขียนคนอื่น
ถ้าคุณไม่ต้องการให้งานของคุณถูกแก้ไข หรือไม่ต้องการให้งานเผยแพร่ตามที่กล่าวไว้ อย่าส่งข้อความของคุณเข้ามาที่นี่<br />
นอกจากนี้คุณแน่ใจว่าข้อความที่ส่งเข้ามาคุณได้เขียนด้วยตัวเอง ไม่ได้คัดลอก ทำซ้ำส่วนหนึ่งส่วนใดหรือทั้งหมดจากแหล่งอื่น (ดูรายละเอียดที่ $1)
'''อย่าส่งงานที่มีลิขสิทธิ์เข้ามาก่อนได้รับอนุญาตจากเจ้าของ!'''",
'longpageerror' => "'''ผิดพลาด: ข้อความที่คุณส่งเข้ามามีขนาด $1 กิโลไบต์
ซึ่งเกินกว่าขนาดที่กำหนดไว้ที่ $2 กิโลไบต์ จึงไม่สามารถบันทึกได้'''",
'readonlywarning' => "'''คำเตือน: ฐานข้อมูลถูกล็อกเพื่อบำรุงรักษา ฉะนั้นคุณจึงไม่สามารถบันทึกการเปลี่ยนแปลงของคุณได้ในขณะนี้'''
คุณอาจต้องการคัดลอกและวางข้อความของคุณในไฟล์ข้อความ และบันทึกไว้ใช้ภายหลัง

ผู้ดูแลระบบที่ล็อกฐานข้อมูลได้ให้คำอธิบายดังนี้: $1",
'protectedpagewarning' => "'''คำเตือน: หน้านี้ถูกล็อก และแก้ไขได้เฉพาะผู้ใช้ที่มีสิทธิผู้ดูแลระบบเท่านั้น'''
ปูมล่าสุดถูกแสดงไว้ด้านล่างเพื่อการอ้างอิง:",
'semiprotectedpagewarning' => "'''หมายเหตุ:''' หน้านี้ถูกล็อก และแก้ไขได้เฉพาะผู้ใช้ที่ลงทะเบียนเท่านั้น
รายการแก้ไขล่าสุดได้ถูกแสดงไว้ด้านล่างนี้เพื่อการอ้างอิง",
'cascadeprotectedwarning' => "'''คำเตือน:''' หน้านี้ถูกล็อก และแก้ไขได้เฉพาะผู้ใช้ที่มีสิทธิผู้ดูแลระบบเท่านั้น เนื่องจากหน้านี้สืบทอดการล็อกมาจาก{{PLURAL:$1|หน้า|หน้า}}ต่อไปนี้:",
'titleprotectedwarning' => "'''คำเตือน: หน้านี้ได้รับการป้องกันไว้ให้สร้างได้เฉพาะโดย[[Special:ListGroupRights|ผู้ใช้ที่ได้รับสิทธิ]]เท่านั้น'''
รายการแก้ไขล่าสุดได้ถูกแสดงไว้ด้านล่างนี้เพื่อการอ้างอิง",
'templatesused' => '{{PLURAL:$1|แม่แบบ}}ที่ใช้ในหน้านี้:',
'templatesusedpreview' => '{{PLURAL:$1|แม่แบบ}}ที่ใช้ในการแสดงตัวอย่าง:',
'templatesusedsection' => '{{PLURAL:$1|แม่แบบ}}ที่ใช้ในส่วนนี้:',
'template-protected' => '(ล็อก)',
'template-semiprotected' => '(กึ่งล็อก)',
'hiddencategories' => 'หน้านี้มี {{PLURAL:$1|1 หมวดหมู่ที่ซ่อนอยู่|$1 หมวดหมู่ที่ซ่อนอยู่}} :',
'edittools' => '<!-- ข้อความนี้จะแสดงผลใต้ฟอร์มสำหรับการแก้ไขและอัปโหลด -->',
'nocreatetitle' => 'จำกัดการสร้างหน้าใหม่',
'nocreatetext' => '{{SITENAME}} จำกัดการสร้างหน้าใหม่
คุณสามารถย้อนกลับไปแก้ไขหน้าที่มีอยู่เดิม หรือ[[Special:UserLogin|ล็อกอินหรือสร้างบัญชีผู้ใช้]]',
'nocreate-loggedin' => 'คุณไม่ได้รับอนุญาตให้สร้างหน้าใหม่',
'sectioneditnotsupported-title' => 'ไม่สนับสนุนการแก้ไขหัวข้อย่อย',
'sectioneditnotsupported-text' => 'ไม่สนับสนุนการแก้ไขหัวข้อย่อยในหน้านี้',
'permissionserrors' => 'ข้อผิดพลาดในการใช้สิทธิ',
'permissionserrorstext' => 'คุณไม่ได้รับสิทธิในการทำสิ่งนี้ เนื่องจาก{{PLURAL:$1|เหตุผล|เหตุผล}}ต่อไปนี้:',
'permissionserrorstext-withaction' => 'คุณไม่มีสิทธิ$2 ด้วย{{PLURAL:$1|เหตุ|เหตุ}}ต่อไปนี้:',
'recreate-moveddeleted-warn' => "'''คำเตือน: คุณกำลังสร้างหน้าซึ่งได้ถูกลบไปก่อนหน้านี้แล้วอีกครั้ง'''

คุณควรพิจารณาว่าการแก้ไขหน้านี้ต่อไปเหมาะสมหรือไม่
ปูมการลบและเปลี่ยนชื่อหน้านี้ได้แสดงไว้ด้านล่างเพื่อความสะดวก:",
'moveddeleted-notice' => 'หน้านี้ถูกลบ
ปูมการลบและเปลี่ยนชื่อของหน้านี้ได้แสดงไว้ด้านล่างเพื่ออ้างอิง',
'log-fulllog' => 'ดูปูมแบบเต็ม',
'edit-hook-aborted' => 'การแก้ไขถูกยกเลิก
ไม่มีคำอธิบายสำหรับการยกเลิกนี้',
'edit-gone-missing' => 'ไม่สามารถอัปเดตหน้าดังกล่าวได้
เนื่องจากหน้านี้ถูกลบไปแล้ว',
'edit-conflict' => 'แก้ชนกัน',
'edit-no-change' => 'การแก้ไขของคุณถูกเพิกเฉย เพราะไม่มีการเปลี่ยนแปลงใด ๆ',
'edit-already-exists' => 'ไม่สามารถสร้างหน้าใหม่ได้
เพราะมีหน้านี้แล้ว',
'defaultmessagetext' => 'ข้อความสารโดยปริยาย',

# Parser/template warnings
'expensive-parserfunction-warning' => "'''คำเตือน:''' หน้านี้มีการเรียกใช้ฟังก์ชันแจงส่วนมากเกินไป

หน้านี้ควรมีการเรียกใช้น้อยกว่า $2  ครั้ง แต่ปัจจุบันมีการเรียกใช้ $1 ครั้ง",
'expensive-parserfunction-category' => 'หน้าที่มีการเรียกใช้ฟังก์ชันแจงส่วนมากเกินไป',
'post-expand-template-inclusion-warning' => "'''คำเตือน:''' แม่แบบที่นำมารวมมีขนาดใหญ่เกินไป
บางแม่แบบจะไม่ถูกรวมเข้ามา",
'post-expand-template-inclusion-category' => 'หน้าที่มีแม่แบบรวมมาเกินขนาด',
'post-expand-template-argument-warning' => 'คำเตือน: หน้านี้มีแม่แบบที่มีอาร์กิวเมนต์ขนาดใหญ่เกินไป อาร์กิวเมนต์เหล่านี้จะถูกละทิ้ง',
'post-expand-template-argument-category' => 'หน้าที่มีแม่แบบซึ่งอาร์กิวเมนต์ถูกละทิ้ง',
'parser-template-loop-warning' => 'ตรวจพบแม่แบบกลับมาเรียกตัวเอง: [[$1]]',
'parser-template-recursion-depth-warning' => 'เรียกแม่แบบซ้อนหลายชั้นเกินขีดจำกัด ($1)',
'language-converter-depth-warning' => 'คำสั่งในการแปลงภาษาลึกเกิน $1 ลำดับ',

# "Undo" feature
'undo-success' => 'การแก้ไขนี้สามารถย้อนกลับได้ กรุณาตรวจสอบข้อแตกต่างด้านล่างให้แน่ใจว่านี่คือสิ่งที่คุณต้องการทำ จากนั้นให้บันทึกการเปลี่ยนแปลงด้านล่างเพื่อเสร็จสิ้นขั้นตอน',
'undo-failure' => 'การแก้ไขนี้ไม่สามารถย้อนกลับได้ เนื่องจากขัดแย้งกับการแก้ไขปัจจุบัน',
'undo-norev' => 'ไม่สามารถย้อนการแก้ไขนี้ เพราะไม่มีหรือถูกลบไปแล้ว',
'undo-summary' => 'ย้อนการแก้ไขรุ่น $1 โดย [[Special:Contributions/$2|$2]] ([[User talk:$2|พูดคุย]])',

# Account creation failure
'cantcreateaccounttitle' => 'ไม่สามารถสร้างบัญชีได้',
'cantcreateaccount-text' => "การสร้างบัญชีใหม่จากที่อยู่ไอพีนี้ ('''$1''') ถูกระงับโดย [[User:$3|$3]]

เหตุผลที่ $3 ให้ไว้ คือ ''$2''",

# History pages
'viewpagelogs' => 'ดูปูมของหน้านี้',
'nohistory' => 'ไม่มีประวัติการแก้ไขสำหรับหน้านี้',
'currentrev' => 'รุ่นปัจจุบัน',
'currentrev-asof' => 'รุ่นปัจจุบันของ $1',
'revisionasof' => 'รุ่นเมื่อ $1',
'revision-info' => 'รุ่นเมื่อ $1 โดย $2',
'previousrevision' => '←รุ่นก่อนหน้า',
'nextrevision' => 'รุ่นถัดไป→',
'currentrevisionlink' => 'รุ่นปัจจุบัน',
'cur' => 'ป',
'next' => 'ถัดไป',
'last' => 'ก',
'page_first' => 'แรกสุด',
'page_last' => 'ท้ายสุด',
'histlegend' => 'วิธีเปรียบเทียบ: เลือกปุ่มของรุ่นสองรุ่นที่ต้องการเปรียบเทียบ และกดปุ่มเริ่มเปรียบเทียบด้านล่าง<br />
คำอธิบาย: (ป) = เทียบกับรุ่นปัจจุบัน, (ก) = เทียบกับรุ่นก่อนหน้า, ล = การแก้ไขเล็กน้อย',
'history-fieldset-title' => 'ค้นหาประวัติ',
'history-show-deleted' => 'เฉพาะที่ถูกลบ',
'histfirst' => 'แรกสุด',
'histlast' => 'ล่าสุด',
'historysize' => '$1 ไบต์',
'historyempty' => '(ว่าง)',

# Revision feed
'history-feed-title' => 'ประวัติรุ่น',
'history-feed-description' => 'ประวัติรุ่นของหน้านี้ในวิกิ',
'history-feed-item-nocomment' => '$1 เมื่อ $2',
'history-feed-empty' => 'ไม่มีหน้าที่ต้องการ 
ซึ่งอาจถูกลบหรือถูกเปลี่ยนชื่อไปแล้ว 
ลอง[[Special:Search|ค้นวิกินี้]]หาหน้าใหม่ที่เกี่ยวข้อง',

# Revision deletion
'rev-deleted-comment' => '(คำอธิบายอย่างย่อถูกลบออก)',
'rev-deleted-user' => '(ชื่อผู้ใช้ถูกลบออก)',
'rev-deleted-event' => '(ปฏิบัติการปูมถูกลบออก)',
'rev-deleted-user-contribs' => '[ชื่อผู้ใช้หรือหมายเลขไอพีถูกลบแล้ว - การแก้ไขถูกซ่อนจากรายการแก้ไข]',
'rev-deleted-text-permission' => "รุ่นของหน้านี้'''ถูกลบ'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]",
'rev-deleted-text-unhide' => "รุ่นของหน้านี้'''ถูกลบ'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]
คุณยังสามารถ[$1 ดูรุ่นนี้]ได้ถ้าคุณต้องการดำเนินต่อ",
'rev-suppressed-text-unhide' => "รุ่นของหน้านี้'''ถูกยับยั้ง'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ปูมการยับยั้ง]
คุณยังสามารถ[$1 ดูรุ่นนี้]ได้ถ้าคุณต้องการดำเนินต่อ",
'rev-deleted-text-view' => "รุ่นของหน้านี้'''ถูกลบ'''
คุณสามารถดูรุ่นนี้ได้ รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]",
'rev-suppressed-text-view' => "รุ่นของหน้านี้'''ถูกยับยั้ง'''
คุณสามารถดูรุ่นนี้ได้ รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ปูมการยับยั้ง]",
'rev-deleted-no-diff' => "คุณไม่สามารถเรียกดูความเปลี่ยนแปลงนี้ เพราะมีบางรุ่น'''ถูกลบ'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]",
'rev-suppressed-no-diff' => "คุณไม่สามารถดูความแตกต่างระหว่างรุ่นที่เลือกได้ เนื่องจากมีความแตกต่างระหว่างรุ่นที่'''ถูกลบ'''",
'rev-deleted-unhide-diff' => "รุ่นหนึ่งของรายการความแตกต่างนี้'''ถูกลบ'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]
คุณยังสามารถ[$1 ดูความแตกต่างนี้]ได้ถ้าคุณต้องการดำเนินต่อ",
'rev-suppressed-unhide-diff' => "รุ่นหนึ่งของรายการความแตกต่างนี้'''ถูกยับยั้ง'''
รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ปูมการยับยั้ง]
คุณยังสามารถ[$1 ดูความแตกต่างนี้]ได้ถ้าคุณต้องการดำเนินต่อ",
'rev-deleted-diff-view' => "รุ่นหนึ่งของรายการความแตกต่างนี้'''ถูกลบ'''
คุณสามารถดูความแตกต่างนี้ได้ รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} ปูมการลบ]",
'rev-suppressed-diff-view' => "รุ่นหนึ่งของรายการความแตกต่างนี้'''ถูกยับยั้ง'''
คุณสามารถดูความแตกต่างนี้ได้ รายละเอียดพบได้ใน[{{fullurl:{{#Special:Log}}/suppress|page={{FULLPAGENAMEE}}}} ปูมการยับยั้ง]",
'rev-delundel' => 'แสดง/ซ่อน',
'rev-showdeleted' => 'แสดง',
'revisiondelete' => 'ลบ/กู้คืนรุ่น',
'revdelete-nooldid-title' => 'ไม่มีรุ่นที่ต้องการ',
'revdelete-nooldid-text' => 'คุณมิได้เจาะจงรุ่นเป้าหมายเพื่อดำเนินการฟังก์ชันนี้ หรือไม่มีรุ่นที่เจาะจง หรือคุณกำลังพยายามซ่อนรุ่นปัจจุบันอย่างใดอย่างหนึ่ง',
'revdelete-nologtype-title' => 'ไม่ได้ระบุประเภทของปูม',
'revdelete-nologtype-text' => 'คุณไม่ได้เจาะจงประเภทของปูมเพื่อดำเนินปฏิบัติการนี้ต่อ',
'revdelete-nologid-title' => 'การแก้ไขในรายการแก้ไขไม่ถูกต้อง',
'revdelete-nologid-text' => 'คุณมิได้เจาะจงรายการปูมเป้าหมายเพื่อดำเนินการฟังก์ชันนี้ หรือไม่มีรายการที่เจาะจงอย่างใดอย่างหนึ่ง',
'revdelete-no-file' => 'ไม่มีไฟล์ที่ระบุ',
'revdelete-show-file-confirm' => 'คุณแน่ใจที่จะดูรุ่นที่ถูกลบของไฟล์ "<nowiki>$1</nowiki>" เมื่อวันที่ $2 เวลา $3 หรือไม่',
'revdelete-show-file-submit' => 'ใช่',
'revdelete-selected' => "'''{{PLURAL:$2|รุ่นการปรับปรุงที่ถูกเลือก|รุ่นการปรับปรุงที่ถูกเลือก}}ของ [[:$1]] :'''",
'logdelete-selected' => "'''{{PLURAL:$1|เหตุการณ์ปูมที่เลือก|เหตุการณ์ปูมที่เลือก}} :'''",
'revdelete-text' => "'''รุ่นการปรับปรุงและเหตุการณ์ที่ถูกลบยังปรากฏในประวัติและปูมของหน้า แต่สาธารณะไม่สามารถเข้าถึงเนื้อหาบางส่วนได้'''
ผู้ดูแลระบบคนอื่นบน {{SITENAME}} ยังสามารถเข้าถึงเนื้อหาที่ถูกซ่อน และสามารถกู้คืนอีกครั้งในลักษณะเดิมเช่นนี้ เว้นแต่จะมีการกำหนดการจำกัดเพิ่มเติม",
'revdelete-confirm' => 'กรุณายืนยันว่าคุณมีเจตนาลบจริง และเข้าใจผลกระทบ และกระทำภายใต้[[{{MediaWiki:Policy-url}}|นโยบาย]]',
'revdelete-suppress-text' => "การระงับควรใช้ '''เฉพาะ''' กรณีต่อไปนี้:
* ข้อมูลที่อาจหมิ่นประมาท
* ข้อมูลส่วนบุคคลที่ไม่เหมาะสม
*: ''ที่อยู่บ้านและหมายเลขโทรศัพท์บ้าน, หมายเลขประกันสังคม, ฯลฯ''",
'revdelete-legend' => 'ตั้งการจำกัดทัศนวิสัย:',
'revdelete-hide-text' => 'ซ่อนข้อความรุ่น',
'revdelete-hide-image' => 'ซ่อนเนื้อหาไฟล์',
'revdelete-hide-name' => 'ซ่อนปฏิบัติการและเป้าหมาย',
'revdelete-hide-comment' => 'ซ่อนคำอธิบายอย่างย่อ',
'revdelete-hide-user' => 'ซ่อนชื่อผู้ใช้/หมายเลขไอพีผู้เขียน',
'revdelete-hide-restricted' => 'ระงับข้อมูลจากผู้ดูแลระบบเช่นเดียวกับผู้ใช้อื่น',
'revdelete-radio-same' => '(ไม่เปลี่ยนแปลง)',
'revdelete-radio-set' => 'ใช่',
'revdelete-radio-unset' => 'ไม่',
'revdelete-suppress' => 'ซ่อนข้อมูลจากผู้ดูแลระบบเช่นเดียวกับผู้ใช้อื่น',
'revdelete-unsuppress' => 'ลบการจำกัดสำหรับรุ่นที่กู้คืน',
'revdelete-log' => 'เหตุผล:',
'revdelete-submit' => 'ใช้กับ{{PLURAL:$1|รุ่น|รุ่น}}ที่เลือก',
'revdelete-success' => "'''ปรับทัศนวิสัยรุ่นสำเร็จ'''",
'revdelete-failure' => "'''ไม่สามารถปรับทัศนวิสัยของรุ่นได้:'''
$1",
'logdelete-success' => "'''ตั้งทัศนวิสัยปูมสำเร็จ'''",
'logdelete-failure' => "'''ไม่สามารถตั้งทัศนวิสัยของปุมได้:'''
$1",
'revdel-restore' => 'เปลี่ยนทัศนวิสัย',
'revdel-restore-deleted' => 'รุ่นที่ถูกลบ',
'revdel-restore-visible' => 'รุ่นที่มองเห็นได้',
'pagehist' => 'ประวัติหน้า',
'deletedhist' => 'ประวัติที่ถูกลบ',
'revdelete-hide-current' => 'เกิดความผิดพลาดในการซ่อนรุ่นเมื่อวันที่ $2 เวลา $1: นี่คือรุ่นการแก้ไขปัจจุบัน
ไม่สามารถซ่อนได้',
'revdelete-show-no-access' => 'เกิดความผิดพลาดในการแสดงรุ่นเมื่อวันที่ $2 เวลา $1: ฉบับปรับปรุงนี้ถูกกำหนดให้ "ถูกจำกัด"
คุณไม่มีสิทธิเข้าถึงรุ่นดังกล่าว',
'revdelete-modify-no-access' => 'เกิดความผิดพลาดในการแก้ไขรุ่นการแก้ไขเมื่อวันที่ $2 เวลา $1: รุ่นการแก้ไขนี้ถูกกำหนดให้ "ถูกจำกัด"
คุณไม่มีสิทธิ์เข้าถึงรุ่นดังกล่าว',
'revdelete-modify-missing' => 'เกิดความผิดพลาดในการแก้ไขฉบับปรังปรุงหมายเลข $1: รายการนี้สูญหายจากฐานข้อมูล!',
'revdelete-no-change' => "'''คำเตือน:''' รุ่นเมื่อวันที่ $2 เวลา $1 มีการตั้งค่าทัศนวิสัยตามที่ขออยู่แล้ว",
'revdelete-concurrent-change' => 'เกิดความผิดพลาดในการแก้ไขรุ่นเมื่อวันที่ $2 เวลา $1: มีผู้อื่นเปลี่ยนสถานะของรุ่นขณะที่คุณพยายามแก้ไข
กรุณาตรวจสอบปูม',
'revdelete-only-restricted' => 'เกิดความผิดพลาดในการซ่อนรุ่นเมื่อวันที่ $2 เวลา $1: คุณไม่สามารถยับยั้งผู้ดูแลระบบมิให้ดูรุ่นนี้ได้โดยไม่เลือกตัวเลือกทัศนวิสัยอื่นด้วย',
'revdelete-reason-dropdown' => '*เหตุผลการลบทั่วไป
** ละเมิดลิขสิทธิ์
** ความเห็นไม่เหมาะสมหรือข้อมูลส่วนบุคคล
** ชื่อผู้ใช้ไม่เหมาะสม
** ข้อมูลที่อาจหมิ่นประมาท',
'revdelete-otherreason' => 'เหตุผลอื่น/เพิ่มเติม:',
'revdelete-reasonotherlist' => 'เหตุผลอื่น',
'revdelete-edit-reasonlist' => 'แก้ไขเหตุผลการลบ',
'revdelete-offender' => 'ผู้เขียนรุ่น:',

# Suppression log
'suppressionlog' => 'ปูมการระงับ',
'suppressionlogtext' => 'ด้านล่างนี้คือรายการการลบและการบล็อกที่เกี่ยวข้องกับเนื้อหาที่ถูกซ่อนจากผู้ดูแลระบบ
ดู[[Special:BlockList|รายการบล็อกไอพี]]สำหรับการบล็อกและการระงับในปัจจุบัน',

# History merging
'mergehistory' => 'ประวัติการรวมหน้า',
'mergehistory-header' => 'หน้านี้ไว้ให้คุณใช้รวมรุ่นต่างๆ ในประวัติการแก้ไขของหน้าต้นทาง ไปยังหน้าใหม่.
ก่อนดำเนินการ ควรให้แน่ใจก่อนว่าการดำเนินการนี้จะไม่ทำให้ความความต่อเนื่องของประวัติหน้าเก่าๆ เสียไป.',
'mergehistory-box' => 'รวมรุ่นของหน้าทั้งสอง:',
'mergehistory-from' => 'หน้าต้นทาง:',
'mergehistory-into' => 'หน้าปลายทาง:',
'mergehistory-list' => 'ประวัติการแก้ไขที่สามารถรวมได้',
'mergehistory-merge' => 'รุ่นต่อไปนี้ของหน้า [[:$1]] สามารถรวมเข้ากับหน้า [[:$2]] ได้ ใช้คอลัมน์ปุ่มรวมเฉพาะรุ่นที่สร้างเวลาที่กำหนดหรือก่อนหน้านั้น หมายเหตุว่าการใช้ลิงก์นำทางจะตั้งคอลัมน์นี้ใหม่',
'mergehistory-go' => 'แสดงการแก้ไขที่สามารถรวมได้',
'mergehistory-submit' => 'รวมรุ่น',
'mergehistory-empty' => 'ไม่มีรุ่นที่สามารถรวมได้',
'mergehistory-success' => 'ประวัติ $3 รุ่นของ [[:$1]] ได้ถูกรวมเข้ากับ [[:$2]] แล้ว',
'mergehistory-fail' => 'ไม่สามารถรวมประวัติการแก้ไขได้ โปรดตรวจสอบค่าตัวแปรหน้าและเวลาอีกครั้ง',
'mergehistory-no-source' => 'ไม่มีหน้าต้นทาง $1 อยู่ในสารบบ',
'mergehistory-no-destination' => 'ไม่มีหน้าปลายทาง $1 อยู่ในสารบบ',
'mergehistory-invalid-source' => 'หัวเรื่องของหน้าต้นทางต้องตรงตามข้อกำหนด (เช่น ไม่มีตัวอักษรที่ไม่สามารถใช้ในหัวเรื่องได้)',
'mergehistory-invalid-destination' => 'หัวเรื่องของหน้าปลายทางต้องตรงตามข้อกำหนด (เช่น ไม่มีตัวอักษรที่ไม่สามารถใช้ในหัวเรื่องได้)',
'mergehistory-autocomment' => 'ย้าย [[:$1]] ไปยัง [[:$2]]',
'mergehistory-comment' => 'ย้าย [[:$1]] ไปยัง [[:$2]]: $3',
'mergehistory-same-destination' => 'หน้าต้นทางและปลายทางเป็นหน้าเดียวกันไม่ได้',
'mergehistory-reason' => 'เหตุผล:',

# Merge log
'mergelog' => 'ปูมการรวมหน้า',
'pagemerge-logentry' => 'ย้าย [[$1]] ไปยัง [[$2]] (รุ่นขึ้นอยู่กับ $3)',
'revertmerge' => 'ยกเลิกการรวมหน้า',
'mergelogpagetext' => 'ด้านล่างนี้แสดงรายการล่าสุดของการรวมประวัติหน้าหนึ่งเข้ากับอีกหน้าหนึ่ง',

# Diffs
'history-title' => 'ประวัติรุ่นปรับปรุงของ "$1"',
'difference-title' => 'ความแตกต่างระหว่างรุ่นของ "$1"',
'difference-title-multipage' => 'ความแตกต่างระหว่างหน้า "$1" และ "$2"',
'difference-multipage' => '(ความแตกต่างระหว่างหน้าต่าง ๆ)',
'lineno' => 'แถว $1:',
'compareselectedversions' => 'เปรียบเทียบสองรุ่นที่เลือก',
'showhideselectedversions' => 'แสดง/ซ่อนรุ่นที่เลือก',
'editundo' => 'ย้อน',
'diff-multi' => '(มิได้แสดง $1 รุ่นระหว่างรุ่นที่เปรียบเทียบโดย{{PLURAL:$2|ผู้ใช้คนหนึ่ง|ผู้ใช้ $2 คน}})',
'diff-multi-manyusers' => '(มิได้แสดง $1 รุ่นระหว่างรุ่นที่เปรียบเทียบโดยผู้ใช้กว่า $2 คน)',

# Search results
'searchresults' => 'ผลการค้นหา',
'searchresults-title' => 'ผลการค้นหาสำหรับ "$1"',
'searchresulttext' => 'สำหรับข้อมูลเพิ่มเติมเกี่ยวกับการค้น {{SITENAME}} ดูที่ [[{{MediaWiki:Helppage}}|{{int:help}}]]',
'searchsubtitle' => 'คุณได้สืบค้นหา \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|ทุกหน้าที่ขึ้นต้นด้วย "$1"]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|ทุกหน้าที่โยงมาที่ "$1"]])',
'searchsubtitleinvalid' => "ค้นหาเกี่ยวกับ '''$1'''",
'toomanymatches' => 'พบตรงกันมากเกินไป กรุณาใช้คำค้นหาอื่น',
'titlematches' => 'พบชื่อหัวข้อนี้',
'notitlematches' => 'ไม่พบชื่อหัวข้อนี้',
'textmatches' => 'พบคำนี้ในหน้า',
'notextmatches' => 'ไม่พบข้อความในหน้า',
'prevn' => 'ก่อนหน้า $1',
'nextn' => 'ถัดไป $1',
'prevn-title' => '$1 ผลลัพธ์ก่อนหน้า',
'nextn-title' => '$1 ผลลัพธ์ถัดไป',
'shown-title' => 'แสดง $1 ผลลัพธ์ต่อหน้า',
'viewprevnext' => 'ดู ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend' => 'ตัวเลือกการค้นหา',
'searchmenu-exists' => "'''มีหน้าชื่อ \"[[:\$1]]\" บนวิกินี้'''",
'searchmenu-new' => "'''สร้างหน้า \"[[:\$1]]\" บนวิกินี้'''",
'searchhelp-url' => 'Help:สารบัญ',
'searchmenu-prefix' => '[[Special:PrefixIndex/$1|สืบค้นหน้าที่มีคำขึ้นต้นนี้]]',
'searchprofile-articles' => 'หน้าเนื้อหา',
'searchprofile-project' => 'คำอธิบายและหน้าโครงการ',
'searchprofile-images' => 'มัลติมีเดีย',
'searchprofile-everything' => 'ทุกอย่าง',
'searchprofile-advanced' => 'ชั้นสูง',
'searchprofile-articles-tooltip' => 'ค้นหาใน $1',
'searchprofile-project-tooltip' => 'ค้นหาใน $1',
'searchprofile-images-tooltip' => 'ค้นหาไฟล์',
'searchprofile-everything-tooltip' => 'ค้นเนื้อหาทั้งหมด (รวมหน้าอภิปราย)',
'searchprofile-advanced-tooltip' => 'ค้นหาในเนมสเปซที่เลือกเอง',
'search-result-size' => '$1 ($2 คำ)',
'search-result-category-size' => '$1 สมาชิก ($2 หมวดหมู่ย่อย, $3 ไฟล์)',
'search-result-score' => 'ความเกี่ยวข้อง : $1%',
'search-redirect' => '(เปลี่ยนทาง $1)',
'search-section' => '(ส่วน $1)',
'search-suggest' => 'คุณอาจหมายถึง: $1',
'search-interwiki-caption' => 'โครงการพี่น้อง',
'search-interwiki-default' => '$1 ผลลัพธ์:',
'search-interwiki-more' => '(เพิ่มเติม)',
'search-relatedarticle' => 'สัมพันธ์',
'mwsuggest-disable' => 'ยกเลิกการแนะนำในลักษณะเอแจ็กซ์',
'searcheverything-enable' => 'สืบค้นในเนมสเปซทั้งหมด',
'searchrelated' => 'สัมพันธ์',
'searchall' => 'ทั้งหมด',
'showingresults' => "แสดง $1 รายการ เริ่มต้นจากรายการที่ '''$2'''",
'showingresultsnum' => "แสดง $3 รายการ เริ่มต้นจากรายการที่  '''$2'''",
'showingresultsheader' => "{{PLURAL:$5|ผลการสืบค้น '''$1''' จาก '''$3'''|ผลการสืบค้น '''$1 - $2''' จาก '''$3'''}} สำหรับ '''$4'''",
'nonefound' => "'''คำเตือน''': มีเพียงบางเนมสเปซที่จะถูกค้นโดยปริยาย
ลองเลือกคำขึ้นต้นการค้นหาด้วย ''all:'' สำหรับค้นเนื้อหาทั้งหมด (รวมหน้าอภิปราย แม่แบบ ฯลฯ) หรือเลือกเนมสเปซที่ต้องการ",
'search-nonefound' => 'ไม่มีผลลัพธ์ตามคำค้นที่กำหนด',
'powersearch' => 'ค้นหาระดับสูง',
'powersearch-legend' => 'ค้นหาระดับสูง',
'powersearch-ns' => 'ค้นหาในเนมสเปซ:',
'powersearch-redir' => 'รายการหน้าเปลี่ยนทาง',
'powersearch-field' => 'ค้นหา',
'powersearch-togglelabel' => 'เลือก:',
'powersearch-toggleall' => 'ทั้งหมด',
'powersearch-togglenone' => 'ไม่เลือก',
'search-external' => 'ค้นหาจากภายนอก',
'searchdisabled' => 'ระบบการค้นหาใน {{SITENAME}} ไม่เปิดการใช้งาน คุณสามารถค้นหาในกูเกิลหรือเซิร์ชเอนจินอื่น โปรดทราบว่าเนื้อหาของ {{SITENAME}} บนเซิร์ชเอนจินอาจเป็นข้อมูลเก่า',

# Quickbar
'qbsettings' => 'แถบพิเศษ',
'qbsettings-none' => 'ไม่มี',
'qbsettings-fixedleft' => 'อยู่ทางซ้าย',
'qbsettings-fixedright' => 'อยู่ทางขวา',
'qbsettings-floatingleft' => 'ด้านซ้าย',
'qbsettings-floatingright' => 'ด้านขวา',

# Preferences page
'preferences' => 'ตั้งค่าส่วนตัว',
'mypreferences' => 'การตั้งค่า',
'prefs-edits' => 'จำนวนการแก้ไข:',
'prefsnologin' => 'ไม่ได้ล็อกอิน',
'prefsnologintext' => 'คุณต้อง<span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} ล็อกอิน]</span>ก่อนเพื่อตั้งค่าส่วนตัว',
'changepassword' => 'เปลี่ยนรหัสผ่าน',
'prefs-skin' => 'หน้าตา',
'skin-preview' => 'แสดงตัวอย่าง',
'datedefault' => 'ค่าตั้งต้น',
'prefs-beta' => 'คุณลักษณะรุ่นทดสอบ',
'prefs-datetime' => 'วันที่และเวลา',
'prefs-labs' => 'คุณสมบัติทดลอง',
'prefs-user-pages' => 'หน้าผู้ใช้',
'prefs-personal' => 'รายละเอียดผู้ใช้',
'prefs-rc' => 'ปรับปรุงล่าสุด',
'prefs-watchlist' => 'รายการเฝ้าดู',
'prefs-watchlist-days' => 'จำนวนวันที่แสดงในรายการเฝ้าดู:',
'prefs-watchlist-days-max' => 'มากสุด $1 วัน',
'prefs-watchlist-edits' => 'จำนวนการแก้ไขมากสุดที่แสดงในรายการเฝ้าดูที่ขยายออก:',
'prefs-watchlist-edits-max' => 'จำนวนสูงสุด: 1000',
'prefs-watchlist-token' => 'โทเค็นรายการเฝ้าดู:',
'prefs-misc' => 'เบ็ดเตล็ด',
'prefs-resetpass' => 'เปลี่ยนรหัสผ่าน',
'prefs-changeemail' => 'เปลี่ยนที่อยู่อีเมล',
'prefs-setemail' => 'ตั้งที่อยู่อีเมล',
'prefs-email' => 'การตั้งค่าอีเมล',
'prefs-rendering' => 'รูปลักษณ์',
'saveprefs' => 'บันทึก',
'resetprefs' => 'ล้างการเปลี่ยนแปลงที่ยังไม่บันทึก',
'restoreprefs' => 'คืนการตั้งค่าโดยปริยายทั้งหมด',
'prefs-editing' => 'การแก้ไข',
'prefs-edit-boxsize' => 'ขนาดหน้าจอกล่องแก้ไข',
'rows' => 'แถว:',
'columns' => 'คอลัมน์:',
'searchresultshead' => 'สืบค้น',
'resultsperpage' => 'รายการต่อหน้า:',
'stub-threshold' => 'ขีดแบ่งสำหรับ <a href="#" class="stub">รูปแบบโครง</a> (ความยาวบทความ):',
'stub-threshold-disabled' => 'ปิดการใช้งาน',
'recentchangesdays' => 'จำนวนวันที่แสดงในปรับปรุงล่าสุด:',
'recentchangesdays-max' => 'มากสุด $1 วัน',
'recentchangescount' => 'จำนวนการแก้ไขที่แสดงโดยปริยาย:',
'prefs-help-recentchangescount' => 'นี่รวมถึงการปรับปรุงล่าสุด ประวิติหน้า และปูม',
'prefs-help-watchlist-token' => 'การเติมช่องนี้ด้วยรหัสลับจะสร้างฟีด RSS แก่รายการเฝ้าดูของคุณ
ผู้ใดที่รู้รหัสในช่องนี้จะสามารถอ่านรายการเฝ้าดูของคุณได้ ฉะนั้นให้เลือกรหัสที่ปลอดภัย
นี่คือรหัสที่สุ่มเลือกขึ้นมาที่คุณสามารถใช้ได้: $1',
'savedprefs' => 'การตั้งค่าของคุณได้ถูกบันทึกแล้ว',
'timezonelegend' => 'เขตเวลา:',
'localtime' => 'เวลาท้องถิ่น',
'timezoneuseserverdefault' => 'ใช้ค่าโดยปริยายของวิกิ ($1)',
'timezoneuseoffset' => 'อื่น ๆ (ระบุส่วนต่างเวลา)',
'timezoneoffset' => 'เวลาต่าง¹:',
'servertime' => 'เวลาเซิร์ฟเวอร์:',
'guesstimezone' => 'เรียกค่าจากเว็บเบราว์เซอร์',
'timezoneregion-africa' => 'แอฟริกา',
'timezoneregion-america' => 'อเมริกา',
'timezoneregion-antarctica' => 'แอนตาร์กติกา',
'timezoneregion-arctic' => 'อาร์กติก',
'timezoneregion-asia' => 'เอเชีย',
'timezoneregion-atlantic' => 'มหาสมุทรแอตแลนติก',
'timezoneregion-australia' => 'ออสเตรเลีย',
'timezoneregion-europe' => 'ยุโรป',
'timezoneregion-indian' => 'มหาสมุทรอินเดีย',
'timezoneregion-pacific' => 'มหาสมุทรแปซิฟิก',
'allowemail' => 'เปิดรับอีเมลจากผู้ใช้อื่น',
'prefs-searchoptions' => 'ค้นหา',
'prefs-namespaces' => 'เนมสเปซ',
'defaultns' => 'หรือค้นหาในเนมสเปซต่อไปนี้:',
'default' => 'ค่าโดยปริยาย',
'prefs-files' => 'ไฟล์',
'prefs-custom-css' => 'สไตล์ชีตปรับแต่งเอง',
'prefs-custom-js' => 'จาวาสคริปต์ปรับแต่งเอง',
'prefs-common-css-js' => 'CSS / จาวาสคริปต์ที่ใช้ร่วมกันกับทุกหน้าตา:',
'prefs-reset-intro' => 'คุณสามารถใช้หน้านี้ตั้งการตั้งค่าของคุณกลับเป็นค่าตั้งต้นของไซต์ใหม่
เมื่อล้างแล้วจะไม่สามารถย้อนกลับได้',
'prefs-emailconfirm-label' => 'การยืนยันอีเมล:',
'prefs-textboxsize' => 'ขนาดของหน้าต่างแก้ไข',
'youremail' => 'อีเมล:',
'username' => 'ชื่อผู้ใช้:',
'uid' => 'รหัสผู้ใช้:',
'prefs-memberingroups' => 'สมาชิกใน{{PLURAL:$1|กลุ่ม|กลุ่ม}}:',
'prefs-registration' => 'วันเวลาที่ลงทะเบียน:',
'yourrealname' => 'ชื่อจริง:',
'yourlanguage' => 'ภาษา:',
'yourvariant' => 'อักษรต่างรูปของเนื้อหา:',
'yournick' => 'ลายเซ็น:',
'prefs-help-signature' => 'ความเห็นในหน้าพูดคุยควรจะลงลายเซ็นด้วย "<nowiki>~~~~</nowiki>" ซึ่งจะถูกแปลงเป็นลายเซ็นและตราเวลา',
'badsig' => 'ลายเซ็นที่ใช้ผิดพลาด กรุณาตรวจสอบคำสั่งเอชทีเอ็มแอล',
'badsiglength' => 'ลายเซ็นของคุณยาวเกินไป ต้องยาวไม่เกิน $1 ตัวอักษร',
'yourgender' => 'เพศ:',
'gender-unknown' => 'ไม่ระบุ',
'gender-male' => 'ชาย',
'gender-female' => 'หญิง',
'prefs-help-gender' => 'เป็นข้อมูลเสริม: ใช้เพื่อให้ซอฟต์แวร์แยกแยะเพศของผู้ใช้ได้ ข้อมูลนี้จะเป็นที่เปิดเผย',
'email' => 'อีเมล',
'prefs-help-realname' => 'ไม่จำเป็นต้องใช้ชื่อจริง ถ้าคุณเลือกที่จะใช้ชื่อจริง จะใช้เพื่อให้เกียรติแก่งานของคุณ',
'prefs-help-email' => 'ไม่ต้องใส่ที่อยู่อีเมล แต่จำเป็นสำหรับการตั้งรหัสผ่านใหม่เมื่อคุณลืมรหัสผ่านของคุณ',
'prefs-help-email-others' => 'คุณยังสามารถเลือกให้ผู้อื่นติดต่อคุณโดยอีเมลผ่านลิงก์บนหน้าผู้ใช้หรือหน้าพูดคุยกับผู้ใช้ของคุณ
ที่อยู่อีเมลของคุณไม่ถูกเปิดเผยเมื่อผู้ใช้อื่นติดต่อคุณ',
'prefs-help-email-required' => 'ต้องการที่อยู่อีเมล',
'prefs-info' => 'ข้อมูลเบื้องต้น',
'prefs-i18n' => 'ระบบภาษาหรือเขตพื้นที่',
'prefs-signature' => 'ลายเซ็น',
'prefs-dateformat' => 'รูปแบบวันที่',
'prefs-timeoffset' => 'ส่วนต่างเวลา',
'prefs-advancedediting' => 'การตั้งค่าขั้นสูง',
'prefs-advancedrc' => 'การตั้งค่าขั้นสูง',
'prefs-advancedrendering' => 'การตั้งค่าขั้นสูง',
'prefs-advancedsearchoptions' => 'การตั้งค่าขั้นสูง',
'prefs-advancedwatchlist' => 'การตั้งค่าขั้นสูง',
'prefs-displayrc' => 'ค่าการแสดงผล',
'prefs-displaysearchoptions' => 'ค่าการแสดงผล',
'prefs-displaywatchlist' => 'ค่าการแสดงผล',
'prefs-diffs' => 'แตกต่าง',

# User preference: e-mail validation using jQuery
'email-address-validity-valid' => 'ที่อยู่อีเมลดูถูกต้อง',
'email-address-validity-invalid' => 'ป้อนที่อยู่อีเมลที่ถูกต้อง',

# User rights
'userrights' => 'บริหารสิทธิผู้ใช้',
'userrights-lookup-user' => 'บริหารสิทธิผู้ใช้',
'userrights-user-editname' => 'ใส่ชื่อผู้ใช้:',
'editusergroup' => 'แก้ไขกลุ่มผู้ใช้',
'editinguser' => "กำลังเปลี่ยนสิทธิผู้ใช้ของผู้ใช้ '''[[User:$1|$1]]''' $2",
'userrights-editusergroup' => 'แก้ไขกลุ่มผู้ใช้',
'saveusergroups' => 'ตกลง',
'userrights-groupsmember' => 'สมาชิกในกลุ่ม:',
'userrights-groupsmember-auto' => 'สมาชิกโดยนัยของ:',
'userrights-groups-help' => 'คุณสามารถเปลี่ยนแปลงกลุ่มที่ผู้ใช้รายนี้อยู่ใน:
* กล่องที่ถูกเลือกหมายความว่าผู้ใช้อยู่ในกลุ่มนั้น
* กล่องที่ไม่ถูกเลือกหมายความว่าผู้ใช้ไม่ได้อยู่ในกลุ่มนั้น
* เครื่องหมาย * ชี้ว่าคุณไม่สามารถเอากลุ่มนั้นออกได้เมื่อใดก็ตามที่คุณเพิ่มกลุ่มนั้นไปแล้ว หรือกลับกัน',
'userrights-reason' => 'เหตุผล:',
'userrights-no-interwiki' => 'คุณไม่ได้รับสิทธิในการแก้ไขสิทธิของผู้ใช้บนวิกิอื่น',
'userrights-nodatabase' => 'ไม่มีฐานข้อมูล $1 อยู่ หรือ ฐานข้อมูลอยู่บนเครื่องอื่น',
'userrights-nologin' => 'คุณต้อง[[Special:UserLogin|ล็อกอิน]]ด้วยบัญชีผู้ดูแลระบบก่อน จึงจะกำหนดสิทธิผู้ใช้ได้',
'userrights-notallowed' => 'บัญชีของคุณไม่ได้รับอนุญาตให้เพิ่มหรือลดสิทธิของผู้ใช้',
'userrights-changeable-col' => 'กลุ่มที่คุณสามารถเปลี่ยนได้',
'userrights-unchangeable-col' => 'กลุ่มที่คุณไม่สามารถเปลี่ยนได้',

# Groups
'group' => 'กลุ่ม:',
'group-user' => 'ผู้ใช้ใหม่',
'group-autoconfirmed' => 'ผู้ใช้ทั่วไป',
'group-bot' => 'บอต',
'group-sysop' => 'ผู้ดูแล',
'group-bureaucrat' => 'ผู้ดูแลสิทธิแต่งตั้ง',
'group-suppress' => 'ผู้ดูแลระดับสูง',
'group-all' => '(ทั้งหมด)',

'group-user-member' => '{{GENDER:$1|ผู้ใช้ใหม่}}',
'group-autoconfirmed-member' => 'ผู้ใช้ทั่วไป',
'group-bot-member' => '{{GENDER:$1|บอต}}',
'group-sysop-member' => '{{GENDER:$1|ผู้ดูแลระบบ}}',
'group-bureaucrat-member' => '{{GENDER:$1|ผู้ดูแลสิทธิแต่งตั้ง}}',
'group-suppress-member' => '{{GENDER:$1|oversight}}',

'grouppage-user' => '{{ns:project}}:ผู้ใช้',
'grouppage-autoconfirmed' => '{{ns:project}}:ผู้ใช้ทั่วไป',
'grouppage-bot' => '{{ns:project}}:บอต',
'grouppage-sysop' => '{{ns:project}}:ผู้ดูแล',
'grouppage-bureaucrat' => '{{ns:project}}:ผู้ดูแลสิทธิแต่งตั้ง',
'grouppage-suppress' => '{{ns:project}}:ผู้ดูแลระดับสูง',

# Rights
'right-read' => 'อ่านหน้า',
'right-edit' => 'แก้ไขหน้า',
'right-createpage' => 'สร้างหน้า (ที่ไม่ใช่หน้าอภิปราย)',
'right-createtalk' => 'สร้างหน้าอภิปราย',
'right-createaccount' => 'สร้างบัญชีผู้ใช้ใหม่',
'right-minoredit' => 'ทำเครื่องหมายการแก้ไขเล็กน้อย',
'right-move' => 'ย้ายหน้า',
'right-move-subpages' => 'ย้ายหน้าพร้อมหน้าย่อย',
'right-move-rootuserpages' => 'ย้ายหน้าผู้ใช้หลัก',
'right-movefile' => 'ย้ายไฟล์',
'right-suppressredirect' => 'ไม่สร้างหน้าเปลี่ยนทางจากหน้าต้นทางเมื่อย้ายหน้า',
'right-upload' => 'อัปโหลดไฟล์',
'right-reupload' => 'เขียนทับไฟล์เดิม',
'right-reupload-own' => 'เขียนทับไฟล์เดิมที่อัปโหลดด้วยตนเอง',
'right-reupload-shared' => 'เขียนทับไฟล์บนคลังเก็บสื่อส่วนกลาง',
'right-upload_by_url' => 'อัปโหลดไฟล์จากยูอาร์แอล',
'right-purge' => 'ล้างแคชของเว็บไซต์โดยไม่มีการยืนยัน',
'right-autoconfirmed' => 'แก้ไขหน้าที่ถูกกึ่งล็อก',
'right-bot' => 'กำหนดว่าเป็นกระบวนการอัตโนมัติ',
'right-nominornewtalk' => 'ไม่มีการแก้ไขเล็กน้อยที่หน้าสนทนาที่ทำให้การเตือนข้อความใหม่ปรากฏ',
'right-apihighlimits' => 'ใช้ข้อจำกัดที่สูงขึ้นในคำสั่งเอพีไอ',
'right-writeapi' => 'ใช้การเขียนเอพีไอ',
'right-delete' => 'ลบหน้า',
'right-bigdelete' => 'ลบหน้าที่มีประวัติขนาดใหญ่',
'right-deletelogentry' => 'ลบและกู้คืนรายการปูมที่เจาะจง',
'right-deleterevision' => 'ลบและกู้คืนรุ่นที่เจาะจงของหน้าต่าง ๆ',
'right-deletedhistory' => 'ดูรายการประวัติที่ถูกลบ โดยไม่มีข้อความที่เกี่ยวข้อง',
'right-deletedtext' => 'เรียกดูข้อความที่ถูกลบและความเปลี่ยนแปลงระหว่างรุ่นที่ถูกลบ',
'right-browsearchive' => 'ค้นหาหน้าที่ถูกลบ',
'right-undelete' => 'เรียกคืนหน้า',
'right-suppressrevision' => 'ดูและกู้คืนรุ่นที่ซ่อนจากผู้ดูแลระบบ',
'right-suppressionlog' => 'ดูปูมส่วนตัว',
'right-block' => 'บล็อกผู้ใช้อื่นมิให้แก้ไข',
'right-blockemail' => 'บล็อกผู้ใช้มิให้ส่งอีเมล',
'right-hideuser' => 'บล็อกผู้ใช้และซ่อนไม่ให้ผู้อื่นเห็น',
'right-ipblock-exempt' => 'ผ่านการบล็อกหมายเลขไอพี บล็อกแบบอัตโนมัติ และบล็อกเป็นช่วง',
'right-proxyunbannable' => 'ผ่านการบล็อกแบบอัตโนมัติของพร็อกซี',
'right-unblockself' => 'ยกเลิกการบล็อกตนเอง',
'right-protect' => 'เปลี่ยนระดับการล็อกและแก้ไขหน้าที่ถูกล็อก',
'right-editprotected' => 'แก้ไขหน้าที่ถูกล็อก (ที่ไม่ล็อกแบบสืบทอด)',
'right-editinterface' => 'แก้ไขอินเตอร์เฟซของผู้ใช้',
'right-editusercssjs' => 'แก้ไข CSS และ JS ของผู้ใช้คนอื่น',
'right-editusercss' => 'แก้ไข CSS ของผู้ใช้คนอื่น',
'right-edituserjs' => 'แก้ไข JS ของผู้ใช้คนอื่น',
'right-rollback' => 'ย้อนการแก้ไขของผู้ใช้ล่าสุดที่แก้ไขหน้าโดยเฉพาะอย่างรวดเร็ว',
'right-markbotedits' => 'ทำเครื่องหมายการย้อนว่าเป็นการแก้ไขโดยบอต',
'right-noratelimit' => 'ไม่มีผลกระทบจากการจำกัดสิทธิตามเวลา',
'right-import' => 'นำเข้าหน้าจากวิกิอื่น',
'right-importupload' => 'นำเข้าหน้าจากไฟล์ที่อัปโหลด',
'right-patrol' => 'ทำเครื่องหมายการแก้ไขของผู้อื่นว่าตรวจสอบแล้ว',
'right-autopatrol' => 'ตั้งการแก้ไขของตนเองว่าตรวจสอบแล้วอัตโนมัติ',
'right-patrolmarks' => 'ดูการเปลี่ยนแปลงล่าสุดของการทำเครื่องหมายตรวจสอบ',
'right-unwatchedpages' => 'ดูรายการหน้าที่ไม่มีผู้เฝ้าดู',
'right-mergehistory' => 'รวมประวัติการแก้ไขหน้า',
'right-userrights' => 'แก้ไขสิทธิผู้ใช้ทั้งหมด',
'right-userrights-interwiki' => 'แก้ไขสิทธิผู้ใช้ของผู้ใช้บนวิกิอื่น',
'right-siteadmin' => 'ล็อกและปลดล็อกฐานข้อมูล',
'right-override-export-depth' => 'ส่งออกหน้า รวมหน้าที่เชื่อมโยงกับหน้านี้สูงสุด 5 ลำดับชั้น',
'right-sendemail' => 'ส่งอีเมลหาผู้ใช้อื่น',
'right-passwordreset' => 'ดูอีเมลตั้งรหัสผ่านใหม่',

# User rights log
'rightslog' => 'ปูมสิทธิผู้ใช้',
'rightslogtext' => 'ส่วนนี้คือปูมการเปลี่ยนแปลงสิทธิผู้ใช้',
'rightslogentry' => '$1 ถูกเปลี่ยนกลุ่มจาก $2 เป็น $3',
'rightsnone' => '(ไม่มี)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read' => 'อ่านหน้านี้',
'action-edit' => 'แก้ไขหน้านี้',
'action-createpage' => 'สร้างหน้า',
'action-createtalk' => 'สร้างหน้าอภิปราย',
'action-createaccount' => 'สร้างบัญชีผู้ใช้นี้',
'action-minoredit' => 'เป็นการแก้ไขเล็กน้อย',
'action-move' => 'ย้ายหน้านี้',
'action-move-subpages' => 'ย้ายหน้านี้ รวมทั้งหน้าย่อย',
'action-move-rootuserpages' => 'ย้ายหน้าผู้ใช้หลัก',
'action-movefile' => 'ย้ายไฟล์นี้',
'action-upload' => 'อัปโหลดไฟล์นี้',
'action-reupload' => 'อัปโหลดทับไฟล์ที่มีอยู่แล้วนี้',
'action-reupload-shared' => 'เขียนไฟล์นี้ทับบนคลังส่วนกลาง',
'action-upload_by_url' => 'อัปโหลดไฟล์นี้จากที่อยู่ยูอาร์แอล',
'action-writeapi' => 'ใช้การเขียนเอพีไอ',
'action-delete' => 'ลบหน้านี้',
'action-deleterevision' => 'ลบรุ่นนี้',
'action-deletedhistory' => 'ดูประวัติที่ถูกลบของหน้านี้',
'action-browsearchive' => 'ค้นหาหน้าที่ถูกลบ',
'action-undelete' => 'กู้คืนหน้านี้',
'action-suppressrevision' => 'ตรวจดูและกู้คืนรุ่นที่ซ่อนอยู่นี้',
'action-suppressionlog' => 'ดูปูมส่วนตัว',
'action-block' => 'บล็อกผู้ใช้รายนี้มิให้แก้ไข',
'action-protect' => 'เปลี่ยนระดับการล็อกสำหรับหน้านี้',
'action-import' => 'นำเข้าหน้านี้จากวิกิอื่น',
'action-importupload' => 'นำเข้าหน้านี้จากไฟล์ที่อัปโหลดแล้ว',
'action-patrol' => 'ทำเครื่องหมายการแก้ไขของผู้ใช้อื่นว่าตรวจแล้ว',
'action-autopatrol' => 'ทำเครื่องหมายการแก้ไขของคุณว่าตรวจแล้ว',
'action-unwatchedpages' => 'ดูรายการหน้าที่ไม่มีผู้เฝ้าดู',
'action-mergehistory' => 'รวมประวัติหน้านี้',
'action-userrights' => 'แก้ไขสิทธิผู้ใช้ทั้งหมด',
'action-userrights-interwiki' => 'แก้ไขสิทธิผู้ใช้สำหรับวิกินี้',
'action-siteadmin' => 'ล็อกหรือปลดล็อกฐานข้อมูล',
'action-sendemail' => 'ส่งอีเมล',

# Recent changes
'nchanges' => '$1 การแก้ไข',
'recentchanges' => 'ปรับปรุงล่าสุด',
'recentchanges-legend' => 'ตัวเลือกปรับปรุงล่าสุด',
'recentchanges-summary' => 'ในหน้านี้เป็นรายการล่าสุดที่มีการปรับปรุง',
'recentchanges-feed-description' => 'ฟีดนี้แสดงการเปลี่ยนแปลงล่าสุด',
'recentchanges-label-newpage' => 'การแก้ไขนี้เป็นการสร้างหน้าใหม่',
'recentchanges-label-minor' => 'เป็นการแก้ไขเล็กน้อย',
'recentchanges-label-bot' => 'การแก้ไขนี้กระทำโดยบอต',
'recentchanges-label-unpatrolled' => 'การแก้ไขนี้ยังไม่ได้ตรวจสอบ',
'rcnote' => "รายการด้านล่างคือการแก้ไข {{PLURAL:$1|'''1''' รายการ|ล่าสุด '''$1''' รายการ}} ในช่วง '''$2''' วันที่ผ่านมา จนถึง $5, $4",
'rcnotefrom' => "แสดงการเปลี่ยนแปลงตั้งแต่ '''$2''' (แสดง '''$1''' รายการ)",
'rclistfrom' => 'แสดงการเปลี่ยนแปลงตั้งแต่ $1',
'rcshowhideminor' => '$1การแก้ไขเล็กน้อย',
'rcshowhidebots' => '$1บอต',
'rcshowhideliu' => '$1ผู้ใช้ล็อกอิน',
'rcshowhideanons' => '$1ผู้ใช้นิรนาม',
'rcshowhidepatr' => '$1การแก้ไขที่ตรวจสอบแล้ว',
'rcshowhidemine' => '$1การแก้ไขของฉัน',
'rclinks' => 'แสดงการปรับปรุงล่าสุด $1 รายการ ในช่วง $2 วันที่ผ่านมา<br />$3',
'diff' => 'ต่าง',
'hist' => 'ประวัติ',
'hide' => 'ซ่อน',
'show' => 'แสดง',
'minoreditletter' => 'ล',
'newpageletter' => 'ม',
'boteditletter' => 'บ',
'unpatrolledletter' => '!',
'number_of_watching_users_pageview' => '[$1 คนเฝ้าดู]',
'rc_categories' => 'จำกัดเฉพาะหมวดหมู่ (แยกด้วย "|")',
'rc_categories_any' => 'ใด ๆ',
'rc-change-size-new' => '$1 ไบต์หลังปรับปรุง',
'newsectionsummary' => '/* $1 */ หัวข้อใหม่',
'rc-enhanced-expand' => 'แสดงรายละเอียด (ต้องใช้จาวาสคริปต์)',
'rc-enhanced-hide' => 'ซ่อนรายละเอียด',
'rc-old-title' => 'เดิมถูกสร้างในชื่อ "$1"',

# Recent changes linked
'recentchangeslinked' => 'ปรับปรุงที่เกี่ยวโยง',
'recentchangeslinked-feed' => 'ปรับปรุงที่เกี่ยวโยง',
'recentchangeslinked-toolbox' => 'การปรับปรุงที่เกี่ยวโยง',
'recentchangeslinked-title' => 'การปรับปรุงที่โยงมายัง "$1"',
'recentchangeslinked-noresult' => 'ไม่มีการเปลี่ยนแปลงในหน้าที่ถูกโยงไป ในช่วงเวลาที่กำหนด',
'recentchangeslinked-summary' => "หน้านี้แสดงรายการปรับปรุงล่าสุดของหน้าที่ถูกโยงไป (หรือไปยังหน้าต่าง ๆ ของหมวดหมู่ที่กำหนด) โดยหน้าที่อยู่ใน[[Special:Watchlist|รายการเฝ้าดู]]แสดงเป็น'''ตัวหนา'''",
'recentchangeslinked-page' => 'ชื่อหน้า:',
'recentchangeslinked-to' => 'แสดงการเปลี่ยนแปลงที่เชื่อมโยงมายังหน้านี้แทน',

# Upload
'upload' => 'อัปโหลดไฟล์',
'uploadbtn' => 'อัปโหลดไฟล์',
'reuploaddesc' => 'ยกเลิกการอัปโหลดและกลับไปยังแบบอัปโหลด',
'upload-tryagain' => 'ส่งคำอธิบายไฟล์ที่ปรับแต่งแล้ว',
'uploadnologin' => 'ไม่ได้ล็อกอิน',
'uploadnologintext' => 'ต้อง[[Special:UserLogin|ล็อกอิน]]ก่อนจึงจะอัปโหลดไฟล์ได้',
'upload_directory_missing' => 'ไดเรกทอรีสำหรับอัปโหลด ($1) หายไป และเว็บเซิร์ฟเวอร์ไม่สามารถสร้างได้',
'upload_directory_read_only' => 'ไม่สามารถเก็บข้อมูลในไดเรกทอรี ($1) ปัญหาเกิดที่เว็บเซิร์ฟเวอร์',
'uploaderror' => 'การอัปโหลดเกิดข้อผิดพลาด',
'upload-recreate-warning' => "'''คำเตือน: ไฟล์ชื่อนั้นถูกลบหรือเปลี่ยนชื่อแล้ว'''

ปูมการลบและปูมการย้ายของหน้านี้ถูกนำมาไว้ด้านล่างเพื่อความสะดวก:",
'uploadtext' => "กรุณาใช้แบบด้านล่างในการอัปโหลดไฟล์
สำหรับการดูหรือการค้นหาไฟล์ที่เคยอัปโหลดก่อนหน้านี้ ให้ไปที่[[Special:FileList|รายชื่อไฟล์ที่ถูกอัปโหลด]] การอัปโหลดและการอัปโหลดซ้ำดูได้ที่[[Special:Log/upload|ปูมการอัปโหลด]] และการลบไฟล์ดูได้ที่[[Special:Log/delete|ปูมการลบ]]

ถ้าต้องการแทรกไฟล์ลงในหน้าหนึ่ง ๆ ให้ใช้คำสั่งหนึ่งในรูปแบบต่อไปนี้
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' เพื่อใช้รูปขนาดเต็ม
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|ข้อความอธิบาย]]</nowiki></code>''' เพื่อใช้รูปย่อขนาดกว้าง 200 พิกเซลในกล่องที่จัดชิดซ้าย โดยมี \"ข้อความอธิบาย\" เป็นคำบรรยายใต้ภาพ
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' สำหรับการเชื่อมโยงไฟล์โดยตรง โดยไม่ปรากฏไฟล์นั้นออกมา",
'upload-permitted' => 'ชนิดของไฟล์ที่อนุญาตให้ใช้ได้: $1',
'upload-preferred' => 'ชนิดของไฟล์ที่ควรใช้: $1',
'upload-prohibited' => 'ชนิดของไฟล์ที่ไม่อนุญาตให้ใช้: $1',
'uploadlog' => 'ปูมการอัปโหลด',
'uploadlogpage' => 'ปูมการอัปโหลด',
'uploadlogpagetext' => 'รายการแสดงไฟล์ที่อัปโหลดล่าสุด',
'filename' => 'ชื่อไฟล์',
'filedesc' => 'รายละเอียดไฟล์',
'fileuploadsummary' => 'รายละเอียดไฟล์:',
'filereuploadsummary' => 'ไฟล์เปลี่ยนแปลง:',
'filestatus' => 'สถานะลิขสิทธิ์:',
'filesource' => 'แหล่งที่มา:',
'uploadedfiles' => 'ไฟล์ที่อัปโหลดแล้ว',
'ignorewarning' => 'บันทึกไฟล์โดยละเลยคำเตือน',
'ignorewarnings' => 'ไม่แสดงคำเตือน',
'minlength1' => 'ชื่อไฟล์ต้องมีตัวอักษรอย่างน้อยหนึ่งตัว',
'illegalfilename' => 'ชื่อไฟล์  "$1" มีตัวอักษรที่ไม่อนุญาตให้ปรากฏในชื่อ กรุณาเปลี่ยนชื่อไฟล์และอัปโหลดอีกครั้ง',
'filename-toolong' => 'ชื่อไฟล์ไม่อาจยาวกว่า 240 ไบต์',
'badfilename' => 'ชื่อไฟล์ถูกเปลี่ยนเป็น "$1"',
'filetype-mime-mismatch' => 'นามสกุลไฟล์ ".$1" ไม่ตรงกับชนิด MIME ของแฟ้มที่ตรวจพบ ($2)',
'filetype-badmime' => 'ไม่อนุญาตให้อัปโหลดไฟล์ที่เป็นไมม์ชนิด "$1"',
'filetype-bad-ie-mime' => 'ไม่สามารถอัปโหลดไฟล์นี้เนื่องจาก Internet Explorer จะตรวจจับว่าเป็น "$1" ซึ่งเป็นชนิดไฟล์ที่ไม่อนุญาตและอาจเป็นอันตราย',
'filetype-unwanted-type' => "{{PLURAL:\$3|ไฟล์|ไฟล์}}ชนิด '''\".\$1\"''' เป็นไฟล์ที่ไม่สามารถอัปโหลดได้ ไฟล์ที่สามารถใช้ได้ ได้แก่ \$2",
'filetype-banned-type' => '\'\'\'".$1"\'\'\' {{PLURAL: $4|เป็นชนิดไฟล์ที่ไม่อนุญาต|เป็นชนิดไฟล์ที่ไม่อนุญาต}}
{{PLURAL: $3|ชนิดไฟล์|ชนิดไฟล์}}ที่อนุญาตคือ $2',
'filetype-missing' => 'นามสกุลไฟล์หายไป (เช่น ".jpg")',
'empty-file' => 'ไฟล์ที่คุณส่งมานั้นไม่มีข้อมูล',
'file-too-large' => 'ไฟล์ที่คุณส่งมามีขนาดใหญ่เกินไป',
'filename-tooshort' => 'ชื่อไฟล์สั้นเกินไป',
'filetype-banned' => 'ไฟล์ประเภทนี้ถูกห้าม',
'verification-error' => 'ไฟล์นี้ไม่ผ่านการพิสูจน์ยืนยันไฟล์',
'hookaborted' => 'สิ่งที่คุณพยายามปรับเปลี่ยนถูกยกเลิกโดยส่วนขยาย',
'illegal-filename' => 'ชื่อไฟล์นี้ไม่ได้รับอนุญาต',
'overwrite' => 'ไม่อนุญาตให้เขียนทับไฟล์ที่มีอยู่แล้ว',
'unknown-error' => 'เกิดข้อผิดพลาดไม่ทราบสาเหตุ',
'tmp-create-error' => 'ไม่สามารถสร้างไฟล์ชั่วคราว',
'tmp-write-error' => 'เกิดข้อผิดพลาดในการเขียนไฟล์ชั่วคราว',
'large-file' => 'ไฟล์ไม่ควรมีขนาดใหญ่กว่า $1 ไฟล์นี้มีขนาด $2',
'largefileserver' => 'ไฟล์นี้มีขนาดใหญ่กว่าค่าที่อนุญาตให้ใช้ได้',
'emptyfile' => 'ไฟล์ที่อัปโหลดมาเหมือนไฟล์ว่าง อาจเกิดจากปัญหาพิมพ์ชื่อไฟล์ผิด กรุณาตรวจสอบไฟล์อีกครั้ง และแน่ใจว่าต้องการที่จะอัปโหลดไฟล์นี้',
'windows-nonascii-filename' => 'วิกินี้ไม่รองรับชื่อไฟล์ที่มีตัวอักษรพิเศษ',
'fileexists' => 'มีไฟล์ชื่อนี้อยู่แล้ว กรุณาตรวจสอบ <strong>[[:$1]]</strong> หากคุณไม่แน่ใจว่าต้องการเปลี่ยนแปลงไฟล์นี้หรือไม่ [[$1|thumb]]',
'filepageexists' => 'หน้าคำอธิบายสำหรับไฟล์นี้ได้ถูกสร้างไว้แล้วที่ <strong>[[:$1]]</strong> แต่ไฟล์ชื่อนี้ไม่มีอยู่ในปัจจุบัน
สาระสำคัญที่คุณบันทึกจะไม่ปรากฏบนหน้าคำอธิบาย
เพื่อให้สาระสำคัญปรากฏขึ้น คุณจำเป็นต้องแก้ไขด้วยตนเอง
[[$1|thumb]]',
'fileexists-extension' => 'ไฟล์ที่โหลดมีชื่อใกล้เคียง: [[$2|thumb]]
* ชื่อไฟล์ที่กำลังอัปโหลด: <strong>[[:$1]]</strong>
* ชื่อไฟล์ที่มีอยู่แล้ว: <strong>[[:$2]]</strong>
กรุณาเลือกชื่อไฟล์ใหม่',
'fileexists-thumbnail-yes' => "ไฟล์นี้ดูเหมือนจะเป็นภาพที่ถูกลดขนาดมา ''(รูปย่อ)''
[[$1|thumb]]
กรุณาตรวจสอบไฟล์ <strong>[[:$1]]</strong>
ถ้าตรวจสอบแล้วและพบว่าเป็นภาพเดียวกันกับภาพต้นฉบับ ไฟล์นั้นไม่จำเป็นต้องอัปโหลดเพิ่ม",
'file-thumbnail-no' => "ชื่อไฟล์ขึ้นต้นด้วย <strong>$1</strong>
ภาพนี้ดูเหมือนว่าจะเป็นภาพที่ถูกลดขนาดมา ''(thumbnail)''
ถ้าคุณมีไฟล์ต้นฉบับขนาดใหญ่กว่านี้ กรุณาอัปโหลดไฟล์ต้นฉบับ หรือเปลี่ยนชื่อไฟล์ด้วย",
'fileexists-forbidden' => 'ไฟล์ชื่อนี้มีอยู่แล้วในระบบ และไม่สามารถอัปโหลดทับได้
หากคุณยังคงต้องการอัปโหลดไฟล์ของคุณ กรุณาย้อนกลับและใช้ชื่อใหม่ [[ไฟล์:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'ไฟล์ที่ใช้ชื่อนี้มีอยู่แล้วในระบบเก็บไฟล์ในส่วนกลาง
ถ้าคุณยังคงต้องการอัปโหลดไฟล์ของคุณ กรุณาย้อนกลับไปตั้งชื่อใหม่
[[File:$1|thumb|center|$1]]',
'file-exists-duplicate' => 'ไฟล์นี้ซ้ำกับ{{PLURAL:$1|ไฟล์|ไฟล์}}ต่อไปนี้:',
'file-deleted-duplicate' => 'ไฟล์ที่ตรงกับชื่อนี้ ([[:$1]]) เคยถูกลบไปก่อนหน้า
คุณควรตรวจสอบว่าประวัติการลบของไฟล์ก่อนดำเนินการอัปโหลดใหม่',
'uploadwarning' => 'คำเตือนการอัปโหลด',
'uploadwarning-text' => 'กรุณาแก้ไขคำอธิบายไฟล์ด้านล่างนี้ แล้วลองใหม่อีกครั้ง',
'savefile' => 'บันทึกไฟล์',
'uploadedimage' => 'อัปโหลด "[[$1]]"',
'overwroteimage' => 'อัปโหลดรุ่นใหม่ของ "[[$1]]"',
'uploaddisabled' => 'ปิดการใช้งานอัปโหลด',
'copyuploaddisabled' => 'การอัปโหลดโดย URL ได้ถูกปิดการใช้งานไว้',
'uploadfromurl-queued' => 'การอัพโหลดของคุณได้ถูกจัดในคิวแล้ว',
'uploaddisabledtext' => 'การอัปโหลดไฟล์ถูกปิดการใช้งาน',
'php-uploaddisabledtext' => 'การอัปโหลดไฟล์ถูกปิดการใช้งานใน PHP
กรุณาตรวจสอบการตั้งค่า file_uploads',
'uploadscripted' => 'ไฟล์นี้มีส่วนประกอบของโค้ดเอชทีเอ็มแอลหรือสคริปต์ ซึ่งอาจก่อให้เกิดความผิดพลาดในการแสดงผลของเว็บเบราว์เซอร์',
'uploadvirus' => 'ไฟล์นี้มีไวรัส! รายละเอียด: $1',
'upload-source' => 'ไฟล์ต้นทาง',
'sourcefilename' => 'ชื่อไฟล์ต้นทาง:',
'sourceurl' => 'URL ที่มา:',
'destfilename' => 'ชื่อไฟล์ที่ต้องการ:',
'upload-maxfilesize' => 'ขนาดไฟล์ที่ใหญ่ที่สุดที่อนุญาต: $1',
'upload-description' => 'คำอธิบายไฟล์',
'upload-options' => 'ตัวเลือกอัปโหลด',
'watchthisupload' => 'เฝ้าดูไฟล์นี้',
'filewasdeleted' => 'ไฟล์ในชื่อนี้ได้ถูกอัปโหลดก่อนหน้าและถูกลบไปแล้ว กรุณาตรวจสอบ $1 ก่อนที่จะอัปโหลดใหม่อีกครั้ง',
'filename-bad-prefix' => "ไฟล์ที่คุณกำลังจะอัปโหลดเข้ามานี้มีชื่อที่ขึ้นต้นด้วย '''\"\$1\"''' ซึ่งเป็นชื่อที่ไม่สื่อความหมายใด ๆ ที่โดยปกติแล้วชื่อนี้จะถูกตั้งโดยกล้องถ่ายรูปดิจิทัลอัตโนมัติ กรุณาตั้งชื่อไฟล์ใหม่ที่สื่อความหมายกว่าเดิม",
'upload-success-subj' => 'อัปโหลดสำเร็จ',
'upload-success-msg' => 'การอัปโหลดของคุณจาก [$2] สำเร็จแล้ว และสามารถใช้ไฟล์ได้ที่นี่: [[:{{ns:file}}:$1]]',
'upload-failure-subj' => 'ปัญหาการอัปโหลด',
'upload-failure-msg' => 'พบปัญหาการอัปโหลดของคุณจาก [$2]:

$1',
'upload-warning-subj' => 'คำเตือนการอัปโหลด',
'upload-warning-msg' => 'พบปัญหาการอัปโหลดของคุณจาก [$2] คุณอาจกลับไปยัง[[Special:Upload/stash/$1|ฟอร์มอัปโหลด]]เพื่อแก้ไขปัญหานี้',

'upload-proto-error' => 'โพรโทคอลไม่ถูกต้อง',
'upload-proto-error-text' => 'การอัปโหลดโดยตรงจากเว็บต้องการยูอาร์แอลที่ขึ้นต้นด้วย <code>http://</code> หรือ <code>ftp://</code>',
'upload-file-error' => 'เกิดความผิดพลาดภายใน',
'upload-file-error-text' => 'เกิดความผิดพลาดภายใน จากปัญหาการสร้างไฟล์ชั่วคราวที่เซิร์ฟเวอร์ กรุณาติดต่อ[[Special:ListUsers/sysop|ผู้ดูแลระบบ]]',
'upload-misc-error' => 'เกิดปัญหาอัปโหลด',
'upload-misc-error-text' => 'เกิดปัญหาระหว่างการอัปโหลด กรุณาตรวจสอบว่ายูอาร์แอลนั้นถูกต้อง ถ้ายังคงมีปัญหาให้ติดต่อผู้ดูแลระบบ',
'upload-too-many-redirects' => 'URL ที่ระบุมีการเปลี่ยนทางมากเกินไป',
'upload-unknown-size' => 'ไม่ทราบขนาด',
'upload-http-error' => 'เกิดข้อผิดพลาด HTTP: $1',

# File backend
'backend-fail-backup' => 'ไม่สามารถสำรองข้อมูลไฟล์ $1.',
'backend-fail-notexists' => 'ไม่พบไฟล์ $1 ที่ต้องการ',
'backend-fail-delete' => 'ไม่สามารถลบไฟล์ $1 ได้',
'backend-fail-alreadyexists' => 'มีไฟล์ "$1" อยู่แล้ว',
'backend-fail-copy' => 'ไม่สามารถคัดลอกไฟล์ "$1" ไปยัง "$2" ได้',
'backend-fail-move' => 'ไม่สามารถย้ายไฟล์ "$1" ไปยัง "$2" ได้',
'backend-fail-read' => 'ไม่สามารถอ่านไฟล์ "$1" ได้',
'backend-fail-create' => 'ไม่สามารถเขียนไฟล์ "$1" ได้',

# ZipDirectoryReader
'zip-unsupported' => 'ไฟล์ดังกล่าวเป็นไฟล์ ZIP ซึ่งใช้คุณสมบัติ ZIP ที่ไม่ได้รับการสนับสนุนโดย MediaWiki.
ไฟล์ดังกล่าวนี้ไม่สามารถตรวจสอบเกี่ยวกับการรักษาความปลอดภัยได้อย่างเหมาะสม.',

# Special:UploadStash
'uploadstash' => 'อัปโหลดไฟล์ซ่อน',
'uploadstash-summary' => 'หน้านี้สามารถเข้าถึงไฟล์ที่ถูกอัปโหลด (หรืออยู่ในกระบวนการอัปโหลด) แต่ยังไม่ได้เผยแพร่ไปยังวิกิ คนทั่วไปยังไม่สามารถมองเห็นไฟล์เหล่านี้ได้ เว้นแต่ผู้ใช้ที่อัปโหลดเข้ามา',
'uploadstash-clear' => 'ล้างไฟล์ซ่อน',
'uploadstash-nofiles' => 'คุณไม่มีไฟล์ซ่อน',
'uploadstash-badtoken' => 'ดำเนินการปฏิบัติไม่สำเร็จ อาจเนื่องจากข้อมูลการแก้ไขประจำตัวของคุณหมดอายุแล้ว กรุณาลองใหม่',
'uploadstash-errclear' => 'การล้างไฟล์ไม่สำเร็จ',
'uploadstash-refresh' => 'ฟื้นฟูรายการไฟล์',

# img_auth script messages
'img-auth-accessdenied' => 'การเข้าถึงถูกจำกัด',
'img-auth-nopathinfo' => 'ค่า PATH_INFO สูญหาย
เซิร์ฟเวอร์ของคุณอาจไม่ได้ถูกตั้งให้ส่งข้อมูลนี้
หรือเซิร์ฟเวอร์อาจเป็นแบบ CGI-based และไม่สนับสนุนข้อมูล img_auth
ดูที่ https://www.mediawiki.org/wiki/Manual:Image_Authorization',
'img-auth-notindir' => 'ที่อยู่ที่ร้องขอไม่ได้อยู่ในไดเร็กทอรีอัพโหลดที่กำหนดไ้ว้',
'img-auth-badtitle' => 'ไม่สามารถสร้างชื่อเรื่องที่ถูกต้องจาก "$1" ได้',
'img-auth-nologinnWL' => 'คุณไม่ได้ลงชื่อเข้าใช้และ "$1" ไม่ได้อยู่ในรายชื่อผู้ใช้ที่ดี (whitelist)',
'img-auth-nofile' => 'ไม่มีไฟล์ "$1"',
'img-auth-isdir' => 'คุณกำลังพยายามเข้าถึงไดเร็กทอรี "$1"
ซึ่งคุณสามารถเข้าถึงได้เฉพาะไฟล์เท่านั้น',
'img-auth-streaming' => 'กำลังดึงข้อมูล "$1"',
'img-auth-public' => 'ฟังก็ชันของ img_auth.php คือเพื่อส่งไฟล์ขาออกจากวิกิส่วนตัว
วิกินี้ถูกกำหนดเป็นวิกิส่วนตัว
เพื่อความปลอดภัยสูงสุด img_auth.php จึงถูกปิด',
'img-auth-noread' => 'ผู้ใช้ไม่ได้รับสิทธิ์ในการอ่าน "$1"',
'img-auth-bad-query-string' => 'ที่อยู่ URL ดังกล่าวมีชุดข้อความสตริงก์ที่ร้องขอไม่ถูกต้อง',

# HTTP errors
'http-invalid-url' => 'URL ไม่ถูกต้อง: $1',
'http-invalid-scheme' => 'ไม่สนับสนุน URL ที่มีรูปแบบ "$1"',
'http-request-error' => 'คำขอข้อมูล HTTP ผิดพลาดโดยไม่ทราบสาเหตุ',
'http-read-error' => 'การอ่านข้อมูล HTTP ผิดพลาด',
'http-timed-out' => 'คำขอข้อมูล HTTP เกินเวลาที่กำหนด',
'http-curl-error' => 'เกิดข้อผิดพลาดในการเรียกข้อมูลจาก URL: $1',
'http-host-unreachable' => 'ไม่สามารถเข้าถึง URL',
'http-bad-status' => 'พบปัญหาในระหว่างการข้อข้อมูล HTTP: $1 $2',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6' => 'ไม่สามารถติดต่อยูอาร์แอลได้',
'upload-curl-error6-text' => 'ยูอาร์แอลที่ใส่ค่ามาไม่สามารถติดต่อได้ กรุณาตรวจสอบอีกครั้งว่ายูอาร์แอลนั้นถูกต้อง และเว็บไซต์นั้นยังใช้งานได้ตามปกติ',
'upload-curl-error28' => 'เวลาอัปโหลดถูกตัด',
'upload-curl-error28-text' => 'เว็บไซต์นี้ใช้เวลานานเกินไปในการเชื่อมต่อ กรุณาตรวจสอบว่าเว็บนี้ยังใช้งานได้ตามปกติ หรืออาจจะรอสักครู่แล้วลองอัปโหลดใหม่',

'license' => 'ลิขสิทธิ์:',
'license-header' => 'การอนุญาตโดยเจ้าของลิขสิทธิ์',
'nolicense' => 'ไม่ได้เลือก',
'license-nopreview' => '(ไม่สามารถแสดงตัวอย่าง)',
'upload_source_url' => ' (ยูอาร์แอลที่บุคคลทั่วไปสามารถเข้าถึงได้)',
'upload_source_file' => ' (ไฟล์จากคอมพิวเตอร์คุณ)',

# Special:ListFiles
'listfiles-summary' => 'หน้าพิเศษนี้แสดงไฟล์ทั้งหมดที่อัปโหลด
เมื่อกรองตามผู้ใช้แล้ว จะแสดงเฉพาะไฟล์รุ่นล่าสุดที่ผู้ใช้นั้นอัปโหลด',
'listfiles_search_for' => 'ค้นหาชื่อสื่อ:',
'imgfile' => 'ไฟล์',
'listfiles' => 'รายการไฟล์',
'listfiles_thumb' => 'รูปย่อ',
'listfiles_date' => 'วันที่',
'listfiles_name' => 'ชื่อ',
'listfiles_user' => 'ผู้ใช้',
'listfiles_size' => 'ขนาด',
'listfiles_description' => 'คำอธิบาย',
'listfiles_count' => 'รุ่น',

# File description page
'file-anchor-link' => 'ไฟล์',
'filehist' => 'ประวัติไฟล์',
'filehist-help' => 'กดเลือกวัน/เวลา เพื่อดูไฟล์ที่ปรากฏในขณะนั้น',
'filehist-deleteall' => 'ลบทั้งหมด',
'filehist-deleteone' => 'ลบ',
'filehist-revert' => 'ย้อน',
'filehist-current' => 'ปัจจุบัน',
'filehist-datetime' => 'วันที่/เวลา',
'filehist-thumb' => 'รูปย่อ',
'filehist-thumbtext' => 'รูปย่อสำหรับรุ่น $1',
'filehist-nothumb' => 'ไม่มีรูปย่อ',
'filehist-user' => 'ผู้ใช้',
'filehist-dimensions' => 'ขนาด',
'filehist-filesize' => 'ขนาดไฟล์',
'filehist-comment' => 'ความเห็น',
'filehist-missing' => 'ไฟล์หายไป',
'imagelinks' => 'การใช้ไฟล์',
'linkstoimage' => '$1 หน้าลิงก์มายังไฟล์นี้:',
'linkstoimage-more' => 'ไฟล์นี้มีการเชื่อมโยงมากกว่า $1 แห่ง
รายการต่อไปนี้แสดงการเชื่อมโยง $1 แห่งแรกที่มายังไฟล์นี้เท่านั้น
ดูเพิ่มได้ที่[[Special:WhatLinksHere/$2|รายชื่อเต็ม]]',
'nolinkstoimage' => 'ไม่มีหน้าที่ลิงก์มาไฟล์นี้',
'morelinkstoimage' => 'ดู[[Special:WhatLinksHere/$1|หน้าที่ลิงก์]]มายังไฟล์นี้เพิ่มเติม',
'linkstoimage-redirect' => '$1 (แฟ้มเปลี่ยนทาง) $2',
'duplicatesoffile' => '$1 ไฟล์ต่อไปนี้ เป็นไฟล์เดียวกับไฟล์นี้ ([[Special:FileDuplicateSearch/$2|รายละเอียดเพิ่ม]]):',
'sharedupload' => 'ไฟล์นี้มาจาก $1 และอาจมีการใช้ในโครงการอื่น',
'sharedupload-desc-there' => 'ไฟล์นี้มาจาก $1 และอาจถูกใช้บนโครงการอื่น ๆ
กรุณาดู [หน้าคำอธิบายของไฟล์ $2] สำหรับข้อมูลเพิ่มเติม',
'sharedupload-desc-here' => 'ไฟล์นี้มาจาก $1 และอาจมีใช้ในโครงการอื่น
คำอธิบายใน[$2 หน้าไฟล์]ได้แสดงไว้ข้างล่างนี้',
'filepage-nofile' => 'ไม่มีไฟล์ชื่อนี้',
'filepage-nofile-link' => 'ไม่มีไฟล์ชื่อนี้ แต่คุณสามารถ[$1 อัปโหลด]ได้',
'uploadnewversion-linktext' => 'อัปโหลดรุ่นใหม่ของไฟล์นี้',
'shared-repo-from' => 'จาก $1',
'shared-repo' => 'คลังที่ใช้ร่วมกัน',
'shared-repo-name-wikimediacommons' => 'วิกิมีเดียคอมมอนส์',
'filepage.css' => '/* สไตล์ชีตในหน้านี้ถูกรวมในหน้าคำอธิบายไฟล์ และถูกรวมในวิกิผู้รับบริการต่างถิ่นด้วย */',
'upload-disallowed-here' => 'คุณไม่สามารถอัปโหลดไฟล์ใหม่ทับไฟล์เดิมนี้ได้',

# File reversion
'filerevert' => 'ย้อน $1',
'filerevert-legend' => 'ย้อนไฟล์กลับ',
'filerevert-intro' => '<span class="plainlinks">คุณกำลังย้อนไฟล์ \'\'\'[[Media:$1|$1]]\'\'\' ไปยัง [รุ่น $4 วันที่ $2, $3]</span>',
'filerevert-comment' => 'เหตุผล:',
'filerevert-defaultcomment' => 'ย้อนไปรุ่น $1, $2',
'filerevert-submit' => 'ย้อน',
'filerevert-success' => '<span class="plainlinks">\'\'\'[[Media:$1|$1]]\'\'\' ถูกย้อนไปยัง [รุ่น $4 วันที่ $2, $3]</span>',
'filerevert-badversion' => 'ไม่มีรุ่นก่อนหน้าของไฟล์นี้ในเวลาที่กำหนดไว้',

# File deletion
'filedelete' => 'ลบ $1',
'filedelete-legend' => 'ลบไฟล์',
'filedelete-intro' => "คุณกำลังจะลบไฟล์ '''[[Media:$1|$1]]''' ไปพร้อมกับประวัติของไฟล์นี้",
'filedelete-intro-old' => "คุณกำลังลบ '''[[Media:$1|$1]]''' รุ่น [$4 $3, $2]",
'filedelete-comment' => 'เหตุผล:',
'filedelete-submit' => 'ลบ',
'filedelete-success' => "ลบไฟล์ '''$1''' แล้ว",
'filedelete-success-old' => "ไฟล์ '''[[Media:$1|$1]]''' รุ่นเมื่อ $3, $2 ถูกลบแล้ว",
'filedelete-nofile' => "ไม่มีไฟล์ '''$1'''",
'filedelete-nofile-old' => "ไม่มี '''$1''' ตามคุณลักษณะที่กำหนด อยู่ในกรุ",
'filedelete-otherreason' => 'เหตุผลอื่น/เพิ่มเติม:',
'filedelete-reason-otherlist' => 'เหตุผลอื่น',
'filedelete-reason-dropdown' => '* เหตุผลการลบทั่วไป
** ละเมิดลิขสิทธิ์
** ไฟล์ซ้ำ',
'filedelete-edit-reasonlist' => 'แก้ไขเหตุผลการลบ',
'filedelete-maintenance' => 'ปิดการลบและเรียกคืนไฟล์ไว้ชั่วคราว ในระหว่างการซ่อมบำรุง',
'filedelete-maintenance-title' => 'ไม่สามารถลบไฟล์',

# MIME search
'mimesearch' => 'ค้นหาตามชนิดไมม์',
'mimesearch-summary' => 'หน้านี้แสดงไฟล์ตามการแบ่งของชนิดไมม์ (MIME) ของแต่ละไฟล์ ใส่ค่า: contenttype/subtype เช่น <code>image/jpeg</code>.',
'mimetype' => 'ชนิดไมม์:',
'download' => 'ดาวน์โหลด',

# Unwatched pages
'unwatchedpages' => 'หน้าที่ไม่มีผู้เฝ้าดู',

# List redirects
'listredirects' => 'รายการหน้าเปลี่ยนทาง',

# Unused templates
'unusedtemplates' => 'แม่แบบไม่ได้ใช้',
'unusedtemplatestext' => 'หน้านี้แสดงรายการบทความทั้งหมดในเนมสเปซ {{ns:template}} ซึ่งไม่ได้ถูกรวมอยู่ในหน้าอื่น ก่อนที่จะลบส่วนนี้ให้ทำการตรวจสอบหน้าที่ลิงก์มาก่อนทุกครั้ง',
'unusedtemplateswlh' => 'ลิงก์มา',

# Random page
'randompage' => 'สุ่มหน้า',
'randompage-nopages' => 'ไม่มีหน้าใดใน{{PLURAL:$2|เนมสเปซ}}ต่อไปนี้: "$1"',

# Random redirect
'randomredirect' => 'สุ่มหน้าเปลี่ยนทาง',
'randomredirect-nopages' => 'ไม่มีหน้าเปลี่ยนทางในเนมสเปซ "$1"',

# Statistics
'statistics' => 'สถิติ',
'statistics-header-pages' => 'สถิติของหน้า',
'statistics-header-edits' => 'สถิติการแก้ไข',
'statistics-header-views' => 'สถิติการเข้าชม',
'statistics-header-users' => 'สถิติผู้ใช้',
'statistics-header-hooks' => 'สถิติอื่น',
'statistics-articles' => 'หน้าเนื้อหา',
'statistics-pages' => 'หน้าทั้งหมด',
'statistics-pages-desc' => 'หน้าทั้งหมดในวิกินี้ รวมทั้งหน้าพูดคุย หน้าเปลี่ยนทาง เป็นต้น',
'statistics-files' => 'จำนวนไฟล์ที่ถูกอัปโหลด',
'statistics-edits' => 'การแก้ไขหน้าทั้งหมดนับแต่ก่อตั้ง {{SITENAME}}',
'statistics-edits-average' => 'จำนวนแก้ไขต่อหน้าโดยเฉลี่ย',
'statistics-views-total' => 'จำนวนการเข้าชมทั้งหมด',
'statistics-views-total-desc' => 'ไม่นับรวมจำนวนการเข้าชมหน้าที่ไม่มีอยู่และหน้าพิเศษ',
'statistics-views-peredit' => 'จำนวนการเข้าดูต่อการแก้ไข:',
'statistics-users' => '[[Special:ListUsers|ผู้ใช้]]ลงทะเบียน',
'statistics-users-active' => 'ผู้ใช้ที่ยังแก้ไขอยู่',
'statistics-users-active-desc' => 'ผู้ใช้ที่ดำเนินปฏิบัติการในช่วง $1 วันที่ผ่านมา',
'statistics-mostpopular' => 'หน้าที่มีการเข้าชมมากที่สุด',

'disambiguations' => 'หน้าที่เชื่อมโยงกับหน้าแก้ความกำกวม',
'disambiguationspage' => 'Template:แก้กำกวม',
'disambiguations-text' => "หน้าต่อไปนี้มีอย่างน้อยหนึ่งลิงก์เชื่อมโยงไปยัง'''หน้าความกำกวม'''
ซึ่งอาจต้องลิงก์ไปยังหน้าที่เหมาะสมแทน<br />
หน้าใดที่ใช้แม่แบบที่ลิงก์มาจาก [[MediaWiki:Disambiguationspage]] หน้าเหล่านั้นจะถูกนับรวมเป็นหน้าความกำกวม",

'doubleredirects' => 'หน้าเปลี่ยนทางซ้ำซ้อน',
'doubleredirectstext' => 'หน้านี้แสดงรายการชื่อที่เปลี่ยนทางไปยังหน้าเปลี่ยนทางอื่น
แต่ละแถวคือลิงก์ของการเปลี่ยนทางครั้งแรกและครั้งที่สอง พร้อมกับหน้าปลายทางของการเปลี่ยนทางครั้งที่สอง ซึ่งควรแก้ไขการเปลี่ยนทางครั้งแรกเป็นหน้าปลายทางดังกล่าว
รายการที่ <del>ขีดฆ่า</del> คือรายการที่แก้ไขแล้ว',
'double-redirect-fixed-move' => '[[$1]] ถูกเปลี่ยนชื่อแล้ว และเปลี่ยนทางไปยัง [[$2]]',
'double-redirect-fixed-maintenance' => 'การแก้ไขการเปลี่ยนทางซ้ำซ้อนจาก [[$1]] ไปยัง [[$2]]',
'double-redirect-fixer' => 'Redirect fixer',

'brokenredirects' => 'หน้าเปลี่ยนทางเสีย',
'brokenredirectstext' => 'หน้าเปลี่ยนทางต่อไปนี้เชื่อมโยงไปยังหน้าที่ไม่มี:',
'brokenredirects-edit' => 'แก้ไข',
'brokenredirects-delete' => 'ลบ',

'withoutinterwiki' => 'หน้าที่ไม่มีลิงก์ข้ามภาษา',
'withoutinterwiki-summary' => 'หน้าต่อไปนี้ไม่มีลิงก์ข้ามไปภาษาอื่น',
'withoutinterwiki-legend' => 'คำนำหน้า',
'withoutinterwiki-submit' => 'แสดง',

'fewestrevisions' => 'หน้าที่มีการแก้ไขน้อยสุด',

# Miscellaneous special pages
'nbytes' => '$1 ไบต์',
'ncategories' => '$1 หมวดหมู่',
'nlinks' => '$1 {{PLURAL:$1|ลิงก์|ลิงก์}}',
'nmembers' => '$1 หน้า',
'nrevisions' => '$1 ครั้ง',
'nviews' => '$1 ครั้ง',
'nimagelinks' => 'ใช้ใน $1 {{PLURAL: $1|หน้า|หน้า}}',
'ntransclusions' => 'ใช้ใน $1 {{PLURAL: $1|หน้า|หน้า}}',
'specialpage-empty' => 'ไม่มีหน้าที่เรียกดู',
'lonelypages' => 'หน้าสุดทาง',
'lonelypagestext' => 'หน้าต่อไปนี้ไม่มีการเชื่อมโยงหรือถูกรวมไว้ในหน้าอื่นใน {{SITENAME}}',
'uncategorizedpages' => 'หน้าที่ไม่ได้จัดหมวดหมู่',
'uncategorizedcategories' => 'หมวดหมู่ที่ไม่ได้จัดหมวดหมู่',
'uncategorizedimages' => 'ไฟล์ที่ยังไม่จัดหมวดหมู่',
'uncategorizedtemplates' => 'แม่แบบที่ยังไม่จัดหมวดหมู่',
'unusedcategories' => 'หมวดหมู่ที่ไม่ได้ใช้',
'unusedimages' => 'ไฟล์ไม่ได้ใช้',
'popularpages' => 'หน้าที่มีการเข้าดูมาก',
'wantedcategories' => 'หมวดหมู่ที่ต้องการ',
'wantedpages' => 'หน้าที่ต้องการ',
'wantedpages-badtitle' => 'ชื่อเรื่อง $1 ไม่ถูกต้องในรายการผลลัพธ์',
'wantedfiles' => 'ไฟล์ที่ต้องการ',
'wantedtemplates' => 'แม่แบบที่ต้องการ',
'mostlinked' => 'หน้าที่มีการลิงก์หามาก',
'mostlinkedcategories' => 'หมวดหมู่ที่มีการโยงหามาก',
'mostlinkedtemplates' => 'แม่แบบที่ใช้มาก',
'mostcategories' => 'หน้าที่มีหมวดหมู่มาก',
'mostimages' => 'ภาพที่ใช้มาก',
'mostinterwikis' => 'หน้าที่มีลิงก์ข้ามภาษามากที่สุด',
'mostrevisions' => 'หน้าที่มีการแก้ไขมาก',
'prefixindex' => 'หน้าทั้งหมดตามดัชนีคำขึ้นต้น',
'prefixindex-namespace' => 'ทุกหน้าที่มีคำขึ้นต้น ($1 เนมสเปซ)',
'shortpages' => 'หน้าสั้นมาก',
'longpages' => 'หน้ายาวมาก',
'deadendpages' => 'หน้าสุดทาง',
'deadendpagestext' => 'หน้าต่อไปนี้ไม่ได้ลิงก์ไปหน้าอื่นใน {{SITENAME}}',
'protectedpages' => 'หน้าถูกล็อก',
'protectedpages-indef' => 'การล็อกแบบไม่จำกัดเท่านั้น',
'protectedpages-cascade' => 'การล็อกแบบสืบทอดเท่านั้น',
'protectedpagestext' => 'หน้าต่อไปนี้ถูกล็อกห้ามแก้ไขหรือเปลี่ยนชื่อ',
'protectedpagesempty' => 'ไม่มีหน้าใดที่ถูกล็อกตามค่าที่เลือก',
'protectedtitles' => 'หัวเรื่องที่ได้รับการป้องกัน',
'protectedtitlestext' => 'หัวเรื่องต่อไปนี้ได้รับการป้องกันมิให้สร้าง',
'protectedtitlesempty' => 'ปัจจุบันไม่มีหัวเรื่องที่ได้รับการป้องกันด้วยค่าต่อไปนี้',
'listusers' => 'รายนามผู้ใช้',
'listusers-editsonly' => 'แสดงเฉพาะผู้ใช้ที่มีการแก้ไข',
'listusers-creationsort' => 'เรียงลำดับตามวันสร้าง',
'usereditcount' => 'การแก้ไข $1 ครั้ง',
'usercreated' => '{{GENDER:$3|ถูกสร้าง}}เมื่อ $1 เวลา $2',
'newpages' => 'หน้าใหม่',
'newpages-username' => 'ชื่อผู้ใช้:',
'ancientpages' => 'หน้าที่ไม่ได้แก้ไขนานสุด',
'move' => 'เปลี่ยนชื่อ',
'movethispage' => 'เปลี่ยนชื่อหน้านี้',
'unusedimagestext' => 'ไฟล์ต่อไปนี้มีอยู่ แต่ไม่มีการเรียกใช้ในหน้าใด ๆ เลย
หมายเหตุว่า เว็บไวต์อื่นอาจลิงก์มายังไฟล์ด้วยยูอาร์แอลโดยตรง ฉะนั้นจึงอาจยังมีชื่ออยู่ที่นี่แม้จะมีการใช้อย่างต่อเนื่อง',
'unusedcategoriestext' => 'หมวดหมู่ต่อไปนี้ยังมีอยู่ถึงแม้ว่าจะไม่มีว่าไม่มีหน้าไหนหรือบทความไหนใช้ส่วนนี้',
'notargettitle' => 'ไม่พบหน้าปลายทาง',
'notargettext' => 'คุณมิได้ระบุหน้าหรือผู้ใช้เป้าหมายที่จะดำเนินการฟังก์ชันนี้',
'nopagetitle' => 'ไม่มีหน้าเป้าหมายดังกล่าว',
'nopagetext' => 'หน้าเป้าหมายที่คุณระบุไม่มีอยู่',
'pager-newer-n' => 'ใหม่กว่า $1',
'pager-older-n' => 'เก่ากว่า $1',
'suppress' => 'Oversight',
'querypage-disabled' => 'หน้าพิเศษนี้ถูกปิดการใช้งานด้วยเหตุผลด้านประสิทธิภาพ',

# Book sources
'booksources' => 'ค้นหาหนังสือ',
'booksources-search-legend' => 'ค้นหาหนังสือ',
'booksources-go' => 'ค้นหา',
'booksources-text' => 'รายการด้านล่างแสดงเว็บไซต์ที่ขายหนังสือใหม่หรือหนังสือใช้แล้ว ซึ่งอาจมีข้อมูลของหนังสือที่คุณกำลังค้นหา:',
'booksources-invalid-isbn' => 'รหัส ISBN ที่ให้ไว้ไม่ถูกต้อง กรุณาตรวจสอบจากต้นฉบับอีกครั้ง',

# Special:Log
'specialloguserlabel' => 'ผู้ดำเนินการ:',
'speciallogtitlelabel' => 'เป้าหมาย (ชื่อเรื่องหรือผู้ใช้):',
'log' => 'ปูม',
'all-logs-page' => 'ปูมสาธารณะทั้งหมด',
'alllogstext' => 'การแสดงผลรวมปูมที่มีทั้งหมดของ {{SITENAME}}
คุณสามารถค้นหาให้ละเอียดขึ้นโดยเลือกประเภทปูม ชื่อผู้ใช้หรือหน้าที่ต้องการ (ระวังอักษรภาษาอังกฤษพิมพ์เล็กใหญ่)',
'logempty' => 'ไม่พบรายการตรงกันในปูม',
'log-title-wildcard' => 'ค้นหาชื่อเรื่องด้วยคำขึ้นต้น',
'showhideselectedlogentries' => 'แสดง/ซ่อนรายการปูมที่เลือก',

# Special:AllPages
'allpages' => 'ทุกหน้า',
'alphaindexline' => '$1 ถึง $2',
'nextpage' => 'ถัดไป ($1)',
'prevpage' => 'ก่อนหน้า ($1)',
'allpagesfrom' => 'เริ่มแสดงผลจาก:',
'allpagesto' => 'จบการแสดงผลที่:',
'allarticles' => 'ทุกหน้า',
'allinnamespace' => 'หน้าทุกหน้า ($1 เนมสเปซ)',
'allnotinnamespace' => 'หน้าทุกหน้า (ไม่อยู่ใน $1 เนมสเปซ)',
'allpagesprev' => 'ก่อนหน้า',
'allpagesnext' => 'ถัดไป',
'allpagessubmit' => 'ค้นหา',
'allpagesprefix' => 'แสดงหน้าที่ขึ้นต้นด้วย:',
'allpagesbadtitle' => 'ชื่อเรื่องนี้ไม่ถูกต้อง อาจสะกดผิด ลิงก์มาจากภาษาอื่นหรือวิกิอื่น หรือมีตัวอักษรที่ไม่สามารถใช้เป็นชื่อเรื่องได้',
'allpages-bad-ns' => '{{SITENAME}} ไม่มีเนมสเปซ "$1"',
'allpages-hide-redirects' => 'ซ่อนการเปลี่ยนทาง',

# Special:Categories
'categories' => 'หมวดหมู่',
'categoriespagetext' => '{{PLURAL:$1|หมวดหมู่ต่อไปนี้}}มีหน้าหรือสื่อต่างๆ
[[Special:UnusedCategories|หมวดหมู่ที่ไม่ได้ใช้]]จะไม่แสดงในที่นี้
ดูเพิ่มที่[[Special:WantedCategories|หมวดหมู่ที่ต้องการ]]',
'categoriesfrom' => 'แสดงหมวดหมู่โดยเริ่มจาก:',
'special-categories-sort-count' => 'เรียงตามจำนวน',
'special-categories-sort-abc' => 'เรียงตามตัวอักษร',

# Special:DeletedContributions
'deletedcontributions' => 'การแก้ไขที่ถูกลบ',
'deletedcontributions-title' => 'การแก้ไขที่ถูกลบ',
'sp-deletedcontributions-contribs' => 'เรื่องที่เขียน',

# Special:LinkSearch
'linksearch' => 'ค้นหาลิงก์จากภายนอกเว็บไซต์',
'linksearch-pat' => 'รูปแบบการค้นหา:',
'linksearch-ns' => 'เนมสเปซ:',
'linksearch-ok' => 'สืบค้น',
'linksearch-text' => 'อักขระตัวแทนเช่น "*.wikipedia.org" สามารถใช้ได้
โดเมนระดับบนสุดจำเป็นต้องมีเป็นอย่างน้อย เช่น "*.org"<br />
โพรโทคอลที่รองรับ: <code>$1</code> (อย่าใส่คำเหล่านี้ในการสืบค้นของคุณ)',
'linksearch-line' => '$1 ถูกลิงก์จาก $2',
'linksearch-error' => 'เครื่องหมายแทนอักขระ (wildcard) อยู่หน้าชื่อโฮสต์ได้เท่านั้น',

# Special:ListUsers
'listusersfrom' => 'แสดงชื่อผู้ใช้โดยเริ่มต้นจาก:',
'listusers-submit' => 'แสดง',
'listusers-noresult' => 'ไม่พบชื่อผู้ใช้ที่ต้องการ',
'listusers-blocked' => '(ถูกบล็อก)',

# Special:ActiveUsers
'activeusers' => 'รายการผู้ใช้ประจำ',
'activeusers-intro' => 'นี่คือรายนามผู้ใช้ที่มีกิจกรรมใด ๆ ใน $1 วันที่ผ่านมา',
'activeusers-count' => '{{PLURAL:$1|ปฏิบัติการล่าสุด|ปฏิบัติการล่าสุด $1 รายการ}} ในช่วง $3 วันที่ผ่านมา',
'activeusers-from' => 'แสดงชื่อผู้ใช้โดยเริ่มจาก:',
'activeusers-hidebots' => 'ซ่อนบอต',
'activeusers-hidesysops' => 'ซ่อนผู้ดูแลระบบ',
'activeusers-noresult' => 'ไม่พบชื่อผู้ใช้',

# Special:Log/newusers
'newuserlogpage' => 'ปูมการสร้างบัญชีผู้ใช้',
'newuserlogpagetext' => 'นี่คือปูมการสร้างบัญชีผู้ใช้',

# Special:ListGroupRights
'listgrouprights' => 'สิทธิของกลุ่มผู้ใช้',
'listgrouprights-summary' => 'รายชื่อกลุ่มผู้ใช้ต่อไปนี้ถูกกำหนดไว้บน {{SITENAME}} โดยมีสิทธิการเข้าถึงที่เกี่ยวข้อง และอาจมี[[{{MediaWiki:Listgrouprights-helppage}}|ข้อมูลเพิ่มเติม]]เกี่ยวกับสิทธิของแต่ละบุคคล',
'listgrouprights-key' => '* <span class="listgrouprights-granted">สิทธิ์ที่ถูกให้</span>
* <span class="listgrouprights-revoked">สิทธิ์ที่ถูกยกเลิก</span>',
'listgrouprights-group' => 'กลุ่ม',
'listgrouprights-rights' => 'สิทธิ',
'listgrouprights-helppage' => 'Help:สิทธิของกลุ่ม',
'listgrouprights-members' => '(รายชื่อสมาชิก)',
'listgrouprights-addgroup' => 'สามารถเพิ่ม{{PLURAL:$2|กลุ่มนี้|กลุ่มเหล่านี้}}ได้: $1',
'listgrouprights-removegroup' => 'สามารถลบ{{PLURAL:$2|กลุ่มนี้|กลุ่มเหล่านี้}}ได้: $1',
'listgrouprights-addgroup-all' => 'สามารถเพิ่มกลุ่มทั้งหมดได้',
'listgrouprights-removegroup-all' => 'สามารถลบกลุ่มทั้งหมดได้',
'listgrouprights-addgroup-self' => 'เพิ่ม{{PLURAL:$2|กลุ่ม|กลุ่ม}}เข้าไปในชื่อผู้ใช้: $1',
'listgrouprights-removegroup-self' => 'ลบ{{PLURAL:$2|กลุ่ม|กลุ่ม}}ออกจากชื่อผู้ใช้: $1',
'listgrouprights-addgroup-self-all' => 'เพิ่มทุกกลุ่มเข้าไปในชื่อผู้ใช้นี้',
'listgrouprights-removegroup-self-all' => 'ลบทุกกลุ่มออกจากชื่อผู้ใช้นี้',

# E-mail user
'mailnologin' => 'ไม่มีการส่งอีเมล',
'mailnologintext' => 'ต้องการทำ[[Special:UserLogin|ล็อกอิน]]และตั้งค่าอีเมลในส่วน[[Special:Preferences|การตั้งค่า]] เพื่อจะส่งอีเมลหาผู้ใช้คนอื่น',
'emailuser' => 'ส่งอีเมลหาผู้ใช้นี้',
'emailuser-title-target' => 'ส่งอีเมลหา{{GENDER:$1|ผู้ใช้}}',
'emailuser-title-notarget' => 'อีเมลผู้ใช้',
'emailpage' => 'อีเมลผู้ใช้',
'emailpagetext' => 'คุณสามารถใช้แบบฟอร์มด้านล่างส่งอีเมลหา{{GENDER:$1|ผู้ใช้}}นี้
ที่อยู่อีเมลที่คุณกรอกใน[[Special:Preferences|การตั้งค่าส่วนตัวของคุณ]]จะปรากฏเป็นที่อยู่ "จาก" ของอีเมล ซึ่งผู้รับสามารถตอบกลับคุณได้โดยตรง',
'usermailererror' => 'การส่งอีเมลผิดพลาด:',
'defemailsubject' => 'อีเมล {{SITENAME}} จากผู้ใช้ "$1"',
'usermaildisabled' => 'ส่งอีเมลหาผู้ใช้ปิดการใช้งาน',
'usermaildisabledtext' => 'คุณไม่สามารถส่งอีเมลไปหาผู้ใช้อื่นบนวิกินี้',
'noemailtitle' => 'ไม่มีที่อยู่อีเมล',
'noemailtext' => 'ผู้ใช้คนนี้ระบุที่อยู่อีเมลไม่ถูกต้อง',
'nowikiemailtitle' => 'ไม่อนุญาตให้ใช้อีเมล',
'nowikiemailtext' => 'ผู้ใช้คนนี้เลือกไม่รับอีเมลจากผู้ใช้อื่น',
'emailnotarget' => 'ไม่มีชื่อผู้ใช้ของผู้รับหรือชื่อผู้ใช้ไม่ถูกต้อง',
'emailtarget' => 'กรอกชื่อผู้ใช้ของผู้รับ',
'emailusername' => 'ชื่อผู้ใช้ :',
'emailusernamesubmit' => 'ส่ง',
'email-legend' => 'ส่งอีเมลถึงผู้ใช้ {{SITENAME}} อีกคน',
'emailfrom' => 'จาก:',
'emailto' => 'ถึง:',
'emailsubject' => 'หัวเรื่อง:',
'emailmessage' => 'ข้อความ:',
'emailsend' => 'ส่ง',
'emailccme' => 'ส่งอีเมลสำเนากลับมา',
'emailccsubject' => 'คัดลอกข้อความของคุณไปยัง$1: $2',
'emailsent' => 'อีเมลถูกส่งแล้ว',
'emailsenttext' => 'อีเมลของคุณถูกส่งแล้ว',
'emailuserfooter' => 'อีเมลฉบับนี้ถูกส่งโดย $1 ถึง $2 ด้วยฟังก์ชัน "อีเมลผู้ใช้รายนี้" ที่ {{SITENAME}}',

# User Messenger
'usermessage-summary' => 'ฝากข้อความของระบบ',
'usermessage-editor' => 'ตัวส่งข้อความของระบบ',

# Watchlist
'watchlist' => 'รายการเฝ้าดูของฉัน',
'mywatchlist' => 'รายการเฝ้าดู',
'watchlistfor2' => 'สำหรับ $1 $2',
'nowatchlist' => 'ไม่มีรายการในรายการเฝ้าดูของคุณ',
'watchlistanontext' => 'กรุณา$1เพื่อดูหรือแก้ไขรายการในรายการเฝ้าดูของคุณ',
'watchnologin' => 'ไม่ได้ล็อกอิน',
'watchnologintext' => 'ต้อง[[Special:UserLogin|ล็อกอิน]]เพื่อแก้ไขรายการเฝ้าดูของคุณ',
'addwatch' => 'เพิ่มเข้ารายการเฝ้าดู',
'addedwatchtext' => 'หน้า "[[:$1]]" ถูกเพิ่มเข้า[[Special:Watchlist|รายการเฝ้าดู]]ของคุณ ถ้ามีการเปลี่ยนแปลงในหน้านี้ และหน้าพูดคุยที่เกี่ยวข้องจะแสดงรายการด้านล่าง',
'removewatch' => 'นำออกจากรายการเฝ้าดู',
'removedwatchtext' => 'หน้า "[[:$1]]" ถูกนำออกจาก[[Special:Watchlist|รายการเฝ้าดูของคุณ]]',
'watch' => 'เฝ้าดู',
'watchthispage' => 'เฝ้าดูหน้านี้',
'unwatch' => 'เลิกเฝ้าดู',
'unwatchthispage' => 'เลิกเฝ้าดูหน้านี้',
'notanarticle' => 'ไม่ใช่หน้าเนื้อหา',
'notvisiblerev' => 'รุ่นดังกล่าวถูกลบเรียบร้อยแล้ว',
'watchnochange' => 'ไม่มีหน้าที่คุณเฝ้าดูถูกแก้ไขในระยะเวลาที่แสดง',
'watchlist-details' => 'มี $1 หน้าในรายการเฝ้าดูของคุณ ไม่รวมหน้าอภิปราย',
'wlheader-enotif' => '* แจ้งเตือนผ่านอีเมลถูกเปิดใช้งาน',
'wlheader-showupdated' => "* หน้าที่มีการเปลี่ยนแปลงตั้งแต่การเข้าชมครั้งล่าสุดของคุณแสดงใน'''ตัวหนา'''",
'watchmethod-recent' => 'ตรวจสอบการปรับปรุงล่าสุดกับหน้าเฝ้าดู',
'watchmethod-list' => 'ตรวจสอบหน้าเฝ้าดูกับการแก้ไขล่าสุด',
'watchlistcontains' => 'รายการเฝ้าดูของคุณมี $1 หน้า',
'iteminvalidname' => "เกิดปัญหาชื่อไม่ถูกต้องกับ '$1'...",
'wlnote' => "ด้านล่างเป็นการแก้ไข{{PLURAL:$1|สุดท้าย|ล่าสุด '''$1''' รายการ}} ใน{{PLURAL:$2|ชั่วโมง|ช่วง '''$2''' ชั่วโมง}}ที่ผ่านมา จนถึง $3, $4",
'wlshowlast' => 'แสดงล่าสุดใน $1 ชั่วโมง $2 วัน $3',
'watchlist-options' => 'ตัวเลือกรายการเฝ้าดู',

# Displayed when you click the "watch" button and it is in the process of watching
'watching' => 'เฝ้าดู...',
'unwatching' => 'เลิกเฝ้าดู...',

'enotif_mailer' => 'แจ้งการแก้ไขจาก {{SITENAME}}',
'enotif_reset' => 'ทำเครื่องหมายว่าชมทุกหน้าแล้ว',
'enotif_newpagetext' => 'นี่คือหน้าใหม่',
'enotif_impersonal_salutation' => 'ผู้ใช้งาน {{SITENAME}}',
'changed' => 'ถูกเปลี่ยนแปลง',
'created' => 'ถูกสร้าง',
'enotif_subject' => '{{SITENAME}} หน้า $PAGETITLE ได้ $CHANGEDORCREATED โดย $PAGEEDITOR',
'enotif_lastvisited' => 'ดู $1 สำหรับการเปลี่ยนแปลงทั้งหมดตั้งแต่ครั้งล่าสุดที่คุณเข้าชม',
'enotif_lastdiff' => 'ดู $1 เพื่อดูการเปลี่ยนแปลงนี้',
'enotif_anon_editor' => 'ผู้ใช้นิรนาม $1',
'enotif_body' => 'เรียน $WATCHINGUSERNAME,


ทางระบบจากเว็บ {{SITENAME}} ต้องการแจ้งให้ทราบว่า หน้า $PAGETITLE ได้ $CHANGEDORCREATED เมื่อ $PAGEEDITDATE โดย $PAGEEDITOR ดูรุ่นปัจจุบันได้ที่ $PAGETITLE_URL

$NEWPAGE

คำสรุปการแก้ไข: $PAGESUMMARY $PAGEMINOREDIT

ติดต่อผู้แก้ไข:
อีเมล: $PAGEEDITOR_EMAIL
วิกิ: $PAGEEDITOR_WIKI

จะไม่มีการแจ้งเพิ่มเติมจนกว่าคุณจะได้แวะเข้าไปที่หน้านี้
นอกจากนี้คุณสามารถตั้งค่ายกเลิกการแจ้งของหน้าที่อยู่ในรายการเฝ้าดูได้

ระบบแจ้งอัตโนมัติจาก {{SITENAME}}

--
ถ้าต้องการเปลี่ยนแปลงรายการเฝ้าดู กรุณาไปที่:
{{canonicalurl:{{#special:EditWatchlist}}}}

ถ้าต้องการลบหน้านี้จากรายการเฝ้าดู กรุณาไปที่:
$UNWATCHURL

ถ้าต้องการความช่วยเหลือเพิ่มเติม กรุณาไปที่:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage' => 'ลบหน้า',
'confirm' => 'ยืนยัน',
'excontent' => "เนื้อหาเดิม: '$1'",
'excontentauthor' => "เนื้อหาเดิม: '$1' (และมีผู้เขียนคนเดียว คือ '[[Special:Contributions/$2|$2]]')",
'exbeforeblank' => "เนื้อหาก่อนถูกทำว่างคือ: '$1'",
'exblank' => 'หน้าว่าง',
'delete-confirm' => 'ลบ "$1"',
'delete-legend' => 'ลบ',
'historywarning' => 'คำเตือน: หน้าที่คุณกำลังจะลบ มีประวัติการแก้ไขโดยประมาณ $1 {{PLURAL:$1|รุ่น}}:',
'confirmdeletetext' => 'คุณกำลังลบหน้า รวมทั้งประวัติทั้งหมดของหน้า
กรุณายืนยันว่าคุณเจตนา และคุณเข้าใจผลกระทบ และการกระทำนี้สอดคล้องกับ[[{{MediaWiki:Policy-url}}|นโยบาย]]',
'actioncomplete' => 'ปฏิบัติการสำเร็จ',
'actionfailed' => 'ปฏิบัติการล้มเหลว',
'deletedtext' => '"$1" ถูกลบ
ดู $2 สำหรับบันทึกการลบล่าสุด',
'dellogpage' => 'ปูมการลบ',
'dellogpagetext' => 'ด้านล่างเป็นรายการการลบล่าสุด',
'deletionlog' => 'ปูมการลบ',
'reverted' => 'ย้อนไปรุ่นก่อนหน้า',
'deletecomment' => 'เหตุผล:',
'deleteotherreason' => 'เหตุผลอื่น/เพิ่มเติม:',
'deletereasonotherlist' => 'เหตุผลอื่น',
'deletereason-dropdown' => '* เหตุผลการลบทั่วไป
** รับแจ้งจากผู้เขียน
** ละเมิดลิขสิทธิ์
** ก่อกวน',
'delete-edit-reasonlist' => 'แก้ไขเหตุผลการลบ',
'delete-toobig' => 'หน้านี้มีประวัติการแก้ไขนาดใหญ่ คือ กว่า $1 รุ่น การลบหน้าเช่นนี้ถูกจำกัดเพื่อป้องกันการรบกวน{{SITENAME}}โดยบังเอิญ',
'delete-warning-toobig' => 'หน้านี้มีประวัติการแก้ไขขนาดใหญ่ กว่า $1 รุ่น การลบหน้านี้อาจรบกวนการทำงานของฐานข้อมูลของ {{SITENAME}} โปรดดำเนินการด้วยความระมัดระวัง',

# Rollback
'rollback' => 'ย้อนการแก้ไขกลับฉุกเฉิน',
'rollback_short' => 'ย้อนกลับฉุกเฉิน',
'rollbacklink' => 'ย้อนกลับฉุกเฉิน',
'rollbacklinkcount' => 'ย้อนกลับฉุกเฉิน $1 การแก้ไข',
'rollbacklinkcount-morethan' => 'ย้อนกลับฉุกเฉินกว่า $1 การแก้ไข',
'rollbackfailed' => 'ย้อนกลับฉุกเฉินล้มเหลว',
'cantrollback' => 'ไม่สามารถย้อนการแก้ไขได้ ผู้เขียนคนล่าสุดเป็นผู้เขียนคนเดียวของหน้านี้',
'alreadyrolled' => 'ไม่สามารถย้อนกลับฉุกเฉินการแก้ไขสุดท้ายโดย [[User:$2|$2]] ([[User talk:$2|พูดคุย]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]) ในหน้า [[:$1]] มีผู้อื่นได้แก้ไขหรือย้อนกลับฉุกเฉินหน้านี้ไปก่อนแล้ว

ผู้แก้ไขล่าสุดของหน้านี้คือ [[User:$3|$3]] ([[User talk:$3|พูดคุย]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]])',
'editcomment' => "คำอธิบายอย่างย่อคือ: \"''\$1''\"",
'revertpage' => 'ย้อนการแก้ไขของ [[Special:Contributions/$2|$2]] ([[User talk:$2|Talk]]) ไปยังรุ่นของ [[User:$1|$1]]',
'revertpage-nouser' => 'ย้อนการแก้ไขโดย (ชื่อผู้ใช้ถูกลบออก) ไปยังรุ่นล่าสุดโดย [[User:$1|$1]]',
'rollback-success' => 'ย้อนรุ่นที่แก้ไขโดย $1 ไปยังรุ่นล่าสุดโดย $2',

# Edit tokens
'sessionfailure-title' => 'Session นี้ล้มเหลว',
'sessionfailure' => 'เหมือนจะมีปัญหาเกี่ยวการล็อกอินในช่วงเวลานี้ เกิดจากทางระบบป้องกันการลักลอบการขโมยล็อกอิน กรุณาย้อนกลับไปหน้าก่อนหน้า และลองโหลดใหม่อีกครั้ง',

# Protect
'protectlogpage' => 'ปูมการล็อก',
'protectlogtext' => 'ด้านล่างนี้คือรายการการเปลี่ยนแปลงการป้องกันหน้า
ดู[[Special:ProtectedPages|รายการหน้าที่ถูกป้องกัน]]สำหรับการป้องกันหน้าในปัจจุบัน',
'protectedarticle' => 'ป้องกัน "[[$1]]"',
'modifiedarticleprotection' => 'เปลี่ยนระดับการล็อกสำหรับ "[[$1]]"',
'unprotectedarticle' => 'ยกเลิกการป้องกันจาก "[[$1]]" แล้ว',
'movedarticleprotection' => 'ย้ายการตั้งค่าการล็อกจาก "[[$2]]" ไปยัง "[[$1]]"',
'protect-title' => 'กำลังล็อกหน้า "$1"',
'protect-title-notallowed' => 'ดูระดับการป้องกันของ "$1"',
'prot_1movedto2' => '[[$1]] ถูกเปลี่ยนชื่อเป็น [[$2]]',
'protect-badnamespace-title' => 'เนมสเปซป้องกันไม่ได้',
'protect-badnamespace-text' => 'หน้าในเนมสเปซนี้ไม่สามารถป้องกันได้',
'protect-legend' => 'ยืนยันการล็อก',
'protectcomment' => 'เหตุผล:',
'protectexpiry' => 'หมดอายุ:',
'protect_expiry_invalid' => 'เวลาหมดอายุไม่ถูกต้อง',
'protect_expiry_old' => 'เวลาหมดอายุผ่านมาแล้ว',
'protect-unchain-permissions' => 'ปลดล็อกตัวเลือกป้องกันอื่น ๆ',
'protect-text' => "ดูและเปลี่ยนระดับการล็อกสำหรับหน้า '''$1'''.",
'protect-locked-blocked' => "ไม่สามารถเปลี่ยนระดับการล็อกหน้าขณะที่ถูกบล็อกได้ ดูระดับการล็อกของหน้า '''$1''':",
'protect-locked-dblock' => "ไม่สามารถเปลี่ยนระดับการล็อกหน้าได้เนื่องจากฐานข้อมูลถูกล็อก ดูระดับการล็อกของหน้า '''$1''':",
'protect-locked-access' => "คุณไม่สามารถเปลี่ยนระดับการล็อกหน้าได้ เนื่องจากคุณไม่มีสิทธิ  ดูระดับการล็อกของหน้า '''$1''':",
'protect-cascadeon' => 'หน้านี้ถูกล็อกเนื่องจากเป็นส่วนหนึ่งของ{{PLURAL:$1|หน้า|หน้า}}ที่ถูกล็อกแบบสืบทอด
คุณสามารถเปลี่ยนระดับการล็อกได้ แต่จะไม่มีผลต่อการล็อกแบบสืบทอด',
'protect-default' => 'อนุญาตผู้ใช้ทั้งหมด',
'protect-fallback' => 'อนุญาตเฉพาะผู้ใช้ที่มีสิทธิ "$1"',
'protect-level-autoconfirmed' => 'บล็อกผู้ใช้ใหม่และผู้ใช้ไม่ลงทะเบียน',
'protect-level-sysop' => 'อนุญาตเฉพาะผู้ดูแลระบบ',
'protect-summary-cascade' => 'สืบทอด',
'protect-expiring' => 'หมดอายุ $1 (UTC)',
'protect-expiring-local' => 'หมดอายุ $1',
'protect-expiry-indefinite' => 'ตลอดกาล',
'protect-cascade' => 'ล็อกหน้าที่เป็นส่วนหนึ่งของหน้านี้ (ล็อกแบบสืบทอด)',
'protect-cantedit' => 'คุณไม่สามารถเปลี่ยนระดับการป้องกันของหน้านี้ เนื่องจากคุณไม่ได้รับสิทธิในการแก้ไขสิ่งนั้น',
'protect-othertime' => 'ระยะเวลาอื่น:',
'protect-othertime-op' => 'ระยะเวลาอื่น',
'protect-existing-expiry' => 'ระยะเวลาการป้องกัน: $3, $2',
'protect-otherreason' => 'เหตุผลอื่นเพิ่มเติม:',
'protect-otherreason-op' => 'สาเหตุอื่น',
'protect-dropdown' => '* เหตุผลการป้องกันทั่วไป
** การก่อกวนจำนวนมาก
** สแปมจำนวนมาก
** สงครามการแก้ไขที่ไม่สร้างสรรค์
** หน้าที่มีการเข้าชมมาก',
'protect-edit-reasonlist' => 'สาเหตุการป้องกันการแก้ไข',
'protect-expiry-options' => '1 ชั่วโมง:1 hour,1 วัน:1 day,1 สัปดาห์:1 week,2 สัปดาห์:2 weeks,1 เดือน:1 month,3 เดือน:3 months,6 เดือน:6 months,1 ปี:1 year,ตลอดกาล:infinite',
'restriction-type' => 'อนุญาต',
'restriction-level' => 'ระดับการล็อก',
'minimum-size' => 'ขนาดอย่างน้อย',
'maximum-size' => 'ขนาดอย่างมาก',
'pagesize' => '(ไบต์)',

# Restrictions (nouns)
'restriction-edit' => 'แก้ไข',
'restriction-move' => 'เปลี่ยนชื่อ',
'restriction-create' => 'สร้าง',
'restriction-upload' => 'อัปโหลด',

# Restriction levels
'restriction-level-sysop' => 'ล็อกเต็มที่',
'restriction-level-autoconfirmed' => 'ล็อกผู้ไม่ล็อกอิน',
'restriction-level-all' => 'ระดับ',

# Undelete
'undelete' => 'ดูหน้าที่ถูกลบ',
'undeletepage' => 'ดูและกู้คืนหน้าที่ถูกลบ',
'undeletepagetitle' => "'''ต่อไปนี้เป็นรุ่นการแก้ไขของ [[:$1|$1]] ที่ถูกลบ'''",
'viewdeletedpage' => 'หน้าที่ถูกลบ',
'undeletepagetext' => '{{PLURAL:$1|หน้า|หน้า}}ต่อไปนี้ถูกลบไปแล้ว แต่ยังคงอยู่ในกรุซึ่งสามารถเรียกคืนได้ กรุข้อมูลอาจถูกลบเป็นระยะ',
'undelete-fieldset-title' => 'กู้คืนรุ่นต่าง ๆ',
'undeleteextrahelp' => "ถ้าต้องการกู้ประวัติของหน้าคืนทั้งหมด ไม่ต้องเลือกกล่องใดเลย แล้วกดปุ่ม '''''กู้คืน'''''
ถ้าต้องการกู้ประวัติคืนเฉพาะบางส่วน ให้เลือกกล่องที่มีประวัติส่วนที่ต้องการกู้ แล้วกด'''''กู้คืน'''''
กด '''''ล้างค่า''''' เพื่อลบค่าในกล่องความเห็นและกล่องตัวเลือกทั้งหมด",
'undeleterevisions' => '$1 รุ่นการแก้ไขถูกเก็บไว้',
'undeletehistory' => 'เมื่อคุณกู้หน้าใดหน้าหนึ่ง รุ่นทั้งหมดจะถูกกู้คืนไปยังประวัติ หากมีหน้าใหม่ในชื่อเดียวกันถูกสร้างขึ้นหลังจากการลบ รุ่นที่กู้คืนนั้นจะปรากฏในประวัติที่มีมาก่อน',
'undeleterevdel' => 'จะกู้คืนไม่ได้หากการกู้คืนนั้นส่งผลให้รุ่นล่าสุดของหน้าหรือไฟล์ถูกลบไปบางส่วน ในกรณีเช่นนั้น คุณต้องไม่เลือกหรือแสดงรุ่นใหม่สุดที่ถูกลบไปก่อน',
'undeletehistorynoadmin' => 'หน้านี้ถูกลบก่อนหน้านี้ โดยสาเหตุการลบและรายชื่อผู้ร่วมแก้ไขก่อนหน้าแสดงผลด้านล่าง สำหรับข้อมูลที่ถูกลบจะดูได้เฉพาะผู้ดูแลระบบ',
'undelete-revision' => 'รุ่นที่ถูกลบของหน้า $1 (ตั้งแต่ $4 เมื่อ $5) โดย $3:',
'undeleterevision-missing' => 'รุ่นไม่ถูกต้องหรือสูญหาย
คุณอาจมีลิงก์เสีย หรือรุ่นอาจถูกกู้คืนหรือนำออกจากกรุ',
'undelete-nodiff' => 'ไม่พบรุ่นก่อนหน้า',
'undeletebtn' => 'กู้คืน',
'undeletelink' => 'ดู/กู้คืน',
'undeleteviewlink' => 'เรียกดู',
'undeletereset' => 'ล้างค่า',
'undeleteinvert' => 'กลับค่าที่เลือก',
'undeletecomment' => 'เหตุผล:',
'undeletedrevisions' => '$1 รุ่นการแก้ไขถูกกู้คืน',
'undeletedrevisions-files' => '$1 รุ่น และ $2 ไฟล์ถูกกู้คืน',
'undeletedfiles' => '$1 ไฟล์ถูกกู้คืน',
'cannotundelete' => 'เรียกคืนไม่สำเร็จ อาจมีใครบางคนเรียกคืนหน้านั้นแล้ว',
'undeletedpage' => "'''$1 ถูกกู้คืน'''

ดู[[Special:Log/delete|ปูมการลบ]] สำหรับรายชื่อการลบและการกู้คืนล่าสุด",
'undelete-header' => 'ดู [[Special:Log/delete|ปูมการลบ]] สำหรับหน้าที่ถูกลบล่าสุด',
'undelete-search-title' => 'ค้นหาหน้าที่ถูกลบ',
'undelete-search-box' => 'ค้นหาหน้าที่ถูกลบ',
'undelete-search-prefix' => 'ค้นหาหน้าที่เริ่มต้นด้วย:',
'undelete-search-submit' => 'สืบค้น',
'undelete-no-results' => 'ไม่พบหน้าที่ตรงกันในกรุการลบ',
'undelete-filename-mismatch' => 'ไม่สามารถกู้คืนไฟล์ $1: ชื่อไฟล์ไม่ถูกต้อง',
'undelete-bad-store-key' => 'ไม่สามารถกู้คืนไฟล์ $1: ไม่มีไฟล์ก่อนที่จะถูกลบ',
'undelete-cleanup-error' => 'เกิดปัญหาการลบไฟล์เก่า "$1"',
'undelete-missing-filearchive' => 'ไม่สามารถกู้คืนไฟล์เก่ารุ่น $1 เพราะไม่มีไฟล์อยู่ในฐานข้อมูล ไฟล์อาจถูกกู้คืนไปแล้ว',
'undelete-error' => 'เกิดข้อผิดพลาด ไม่สามารถลบหน้าเวปได้',
'undelete-error-short' => 'เกิดปัญหาในการกู้คืนไฟล์: $1',
'undelete-error-long' => 'เกิดความผิดพลาดระหว่างการลบไฟล์:

$1',
'undelete-show-file-confirm' => 'แน่ใจหรือไม่ว่าคุณต้องการจะดูรุ่นที่ถูกลบไป สำหรับไฟล์ "<nowiki>$1</nowiki>" ตั้งแต่ $2 เมื่อ $3',
'undelete-show-file-submit' => 'ใช่',

# Namespace form on various pages
'namespace' => 'เนมสเปซ:',
'invert' => 'กลับการเลือก',
'tooltip-invert' => 'เลือกกล่องนี้เพื่อซ่อนการเปลี่ยนแปลงไปยังหน้าในเนมเปซที่เลือก (และเนมสเปซที่เกี่ยวข้องถ้าเลือก)',
'namespace_association' => 'เนมสเปซที่เกี่ยวข้อง',
'tooltip-namespace_association' => 'เลือกกล่องนี้เพื่อรวมเนมสเปซพูดคุยหรือหัวข้อที่เกี่ยวข้องกับเนมสเปซที่เลือกด้วย',
'blanknamespace' => '(หลัก)',

# Contributions
'contributions' => 'เรื่องที่เขียนโดยผู้ใช้นี้',
'contributions-title' => 'เรื่องที่เขียนโดย $1',
'mycontris' => 'เรื่องที่เขียน',
'contribsub2' => 'สำหรับ $1 ($2)',
'nocontribs' => 'ไม่พบการเปลี่ยนแปลงตรงกับเงื่อนไขเหล่านี้',
'uctop' => ' (บนสุด)',
'month' => 'จากเดือน (และก่อนหน้า):',
'year' => 'จากปี (และก่อนหน้า):',

'sp-contributions-newbies' => 'แสดงการแก้ไขของผู้ใช้ใหม่เท่านั้น',
'sp-contributions-newbies-sub' => 'สำหรับผู้ใช้ใหม่',
'sp-contributions-newbies-title' => 'เรื่องที่เขียนโดยบัญชีใหม่',
'sp-contributions-blocklog' => 'ปูมการบล็อก',
'sp-contributions-deleted' => 'การแก้ไขที่ถูกลบ',
'sp-contributions-uploads' => 'อัปโหลด',
'sp-contributions-logs' => 'ปูม',
'sp-contributions-talk' => 'พูดคุย',
'sp-contributions-userrights' => 'จัดการสิทธิผู้ใช้',
'sp-contributions-blocked-notice' => 'ปัจจุบันเลขที่อยู่ไอพีนี้ถูกบล็อก
ปูมการบล็อกล่าสุดแสดงด้านล่างนี้เพื่อการอ้างอิง:',
'sp-contributions-blocked-notice-anon' => 'ปัจจุบันเลขที่อยู่ไอพีนี้ถูกบล็อก
ปูมการบล็อกล่าสุดแสดงด้านล่างนี้เพื่อการอ้างอิง:',
'sp-contributions-search' => 'ค้นหาการแก้ไข',
'sp-contributions-username' => 'หมายเลขไอพีหรือชื่อผู้ใช้:',
'sp-contributions-toponly' => 'แสดงเฉพาะการแก้ไขรุ่นล่าสุด',
'sp-contributions-submit' => 'สืบค้น',

# What links here
'whatlinkshere' => 'หน้าที่ลิงก์มา',
'whatlinkshere-title' => 'หน้าที่ลิงก์มายัง "$1"',
'whatlinkshere-page' => 'หน้า:',
'linkshere' => "หน้าต่อไปนี้ลิงก์มายัง '''[[:$1]]''':",
'nolinkshere' => "ไม่มีหน้าใดลิงก์มาที่ '''[[:$1]]'''",
'nolinkshere-ns' => "ไม่มีหน้าใดลิงก์มาที่'''[[:$1]]''' ในเนมสเปซที่เลือกไว้",
'isredirect' => 'หน้าเปลี่ยนทาง',
'istemplate' => 'รวมอยู่',
'isimage' => 'ลิงก์ไฟล์',
'whatlinkshere-prev' => '{{PLURAL:$1|ก่อนหน้า|ก่อนหน้า $1 หน้า}}',
'whatlinkshere-next' => '{{PLURAL:$1|ถัดไป|ถัดไป $1 หน้า}}',
'whatlinkshere-links' => '← ลิงก์',
'whatlinkshere-hideredirs' => '$1หน้าเปลี่ยนทาง',
'whatlinkshere-hidetrans' => '$1 ถูกรวมอยู่',
'whatlinkshere-hidelinks' => '$1 ลิงก์',
'whatlinkshere-hideimages' => '$1ลิงก์ไฟล์',
'whatlinkshere-filters' => 'ตัวกรอง',

# Block/unblock
'autoblockid' => 'บล็อกอัตโนมัติ #$1',
'block' => 'บล็อกผู้ใช้',
'unblock' => 'ปลดบล็อกผู้ใช้',
'blockip' => 'บล็อกผู้ใช้',
'blockip-title' => 'ระงับผู้ใช้',
'blockip-legend' => 'บล็อกผู้ใช้',
'blockiptext' => 'ใช้แบบด้านล่างเพื่อบล็อกสิทธิเข้าถึงการเขียนของหมายเลขไอพีหรือชื่อผู้ใช้โดยเจาะจง การบล็อกนี้ควรดำเนินการเพื่อป้องกันการก่อกวนเท่านั้น และให้สอดคล้องกับ[[{{MediaWiki:Policy-url}}|นโยบาย]]
กรอกเหตุผลโดยเจาะจงด้านล่าง (เช่น อ้างถึงหน้าที่ถูกก่อกวน)',
'ipadressorusername' => 'หมายเลขไอพีหรือชื่อผู้ใช้',
'ipbexpiry' => 'หมดอายุ',
'ipbreason' => 'เหตุผล:',
'ipbreasonotherlist' => 'เลือกสาเหตุ',
'ipbreason-dropdown' => '*สาเหตุการบล็อกทั่วไป
** ใส่ข้อมูลเท็จ
** ลบเนื้อหาในหน้าออก
** ใส่ลิงก์สแปม
** ใส่ข้อความขยะเข้ามา
** คุกคามผู้อื่น
** ก่อกวนผู้อื่น
** ชื่อผู้ใช้ที่ไม่สุภาพหรือไม่ควรใช้',
'ipb-hardblock' => 'ป้องกันไม่ให้ผู้ใช้ล็อกอินแก้ไขจากหมายเลขไอพีนี้',
'ipbcreateaccount' => 'ป้องกันการสร้างบัญชี',
'ipbemailban' => 'ป้องกันมิให้ผู้ใช้ส่งอีเมล',
'ipbenableautoblock' => 'บล็อกหมายเลขไอพีล่าสุดที่ผู้ใช้นี้ใช้ ทั้งทุกหมายเลขไอพีที่ผู้นั้นพยายามใช้แก้ไขโดยอัตโนมัติ',
'ipbsubmit' => 'บล็อกผู้ใช้นี้',
'ipbother' => 'เวลาอื่น',
'ipboptions' => '2 ชั่วโมง:2 hours,1 วัน:1 day,3 วัน:3 days,1 สัปดาห์:1 week,2 สัปดาห์:2 weeks,1 เดือน:1 month,3 เดือน:3 months,6 เดือน:6 months,1 ปี:1 year,ตลอดกาล:infinite',
'ipbotheroption' => 'เลือกเวลา',
'ipbotherreason' => 'เหตุผลอื่น',
'ipbhidename' => 'ซ่อนผู้ใช้จากปูมการบล็อก และรายการผู้ที่ถูกบล็อก',
'ipbwatchuser' => 'เฝ้าดูหน้าผู้ใช้และหน้าคุยกับผู้ใช้ของผู้ใช้รายนี้',
'ipb-disableusertalk' => 'ป้องกันไม่ให้ผู้ใช้นี้แก้ไขหน้าพูดคุยของตัวเองขณะถูกบล็อก',
'ipb-change-block' => 'บล็อกผู้ใช้อีกครั้งด้วยการตั้งค่าเหล่านี้',
'ipb-confirm' => 'ยืนยันการบล็อก',
'badipaddress' => 'หมายเลขไอพีไม่ถูกต้อง',
'blockipsuccesssub' => 'บล็อกสำเร็จ',
'blockipsuccesstext' => '[[Special:Contributions/$1|$1]] ถูกบล็อก<br />
ดู[[Special:BlockList|รายการบล็อก]]เพื่อทบทวนการบล็อก',
'ipb-blockingself' => 'คุณกำลังทำการบล็อกตัวคุณเอง คุณแน่ใจแล้วหรือว่าต้องการทำเช่นนั้น',
'ipb-edit-dropdown' => 'แก้ไขสาเหตุการบล็อก',
'ipb-unblock-addr' => 'เลิกบล็อก $1',
'ipb-unblock' => 'เลิกบล็อกผู้ใช้หรือหมายเลขไอพี',
'ipb-blocklist' => 'ดูการบล็อกปัจจุบัน',
'ipb-blocklist-contribs' => 'ผลงานเขียนโดย $1',
'unblockip' => 'ปลดบล็อกผู้ใช้',
'unblockiptext' => 'ใช้แบบด้านล่างสำหรับคืนสิทธิการเข้าถึงการเขียนแก่หมายเลขไอพี หรือชื่อผู้ใช้ที่เคยถูกบล็อก',
'ipusubmit' => 'ยกเลิกการบล็อกนี้',
'unblocked' => '[[User:$1|$1]] ถูกบล็อก',
'unblocked-range' => '$1 ถูกปลดบล็อกแล้ว',
'unblocked-id' => 'เลิกบล็อก $1',
'blocklist' => 'ผู้ใช้ที่ถูกบล็อก',
'ipblocklist' => 'ผู้ใช้ที่ถูกบล็อก',
'ipblocklist-legend' => 'ค้นหาผู้ใช้ที่ถูกบล็อก',
'blocklist-userblocks' => 'ซ่อนบล็อกบัญชี',
'blocklist-tempblocks' => 'ซ่อนบล็อกชั่วคราว',
'blocklist-addressblocks' => 'ซ่อนบล็อกไอพีเดียว',
'blocklist-timestamp' => 'ตราเวลา',
'blocklist-target' => 'เป้าหมาย',
'blocklist-expiry' => 'หมดอายุ',
'blocklist-by' => 'ผู้ดูแลระบบที่บล็อก',
'blocklist-params' => 'พารามิเตอร์การบล็อก',
'blocklist-reason' => 'เหตุผล',
'ipblocklist-submit' => 'สืบค้น',
'ipblocklist-localblock' => 'การสกัดกั้นภายในวิกินี้',
'ipblocklist-otherblocks' => '{{PLURAL:$1|การสกัดกั้น}}อื่นๆ',
'infiniteblock' => 'ตลอดกาล',
'expiringblock' => 'หมดอายุ $1 เวลา $2',
'anononlyblock' => 'ไม่ล็อกอินเท่านั้น',
'noautoblockblock' => 'ยกเลิกการบล็อกอัตโนมัติ',
'createaccountblock' => 'บล็อกการสร้างบัญชีผู้ใช้ใหม่',
'emailblock' => 'บล็อกการส่งอีเมล',
'blocklist-nousertalk' => 'ไม่สามารถแก้ไขหน้าอภิปรายของตนเอง',
'ipblocklist-empty' => 'รายการบล็อกว่าง',
'ipblocklist-no-results' => 'หมายเลขไอพีหรือชื่อผู้ใช้ที่ต้องการไม่ได้ถูกบล็อก',
'blocklink' => 'บล็อก',
'unblocklink' => 'เลิกบล็อก',
'change-blocklink' => 'เปลี่ยนการบล็อก',
'contribslink' => 'เรื่องที่เขียน',
'emaillink' => 'ส่งอีเมล',
'autoblocker' => 'ถูกบล็อกอัตโนมัติเนื่องจากหมายเลขไอพีของคุณล่าสุดถูกใช้โดย "[[User:$1|$1]]" เหตุผลที่ให้แก่การบล็อก $1 คือ: "$2"',
'blocklogpage' => 'ปูมการบล็อก',
'blocklog-showlog' => 'ผู้ใช้นี้ถูกสกัดกั้นมาก่อน
ปูมการสกัดกั้นแสดงไว้ด้านล่างนี้เพื่อการอ้างอิง:',
'blocklog-showsuppresslog' => 'ผู้ใช้นี้ถูกสกัดกั้นและถูกซ่อนมาก่อน
ปูมการระงับแสดงไว้ด้านล่างนี้เพื่อการอ้างอิง:',
'blocklogentry' => 'บล็อก "[[$1]]" หมดอายุ $2 $3',
'reblock-logentry' => 'เปลี่ยนระดับการบล็อกสำหรับ [[$1]] หมดอายุ $2 $3',
'blocklogtext' => 'นี่คือปูมการบล็อกและการเลิกบล็อกผู้ใช้
การบล็อกที่อยู่ไอพีโดยอัตโนมัติจะไม่แสดงในรายการ
ดู[[Special:BlockList|รายการบล็อกไอพี]]สำหรับการบล็อกและการระงับในปัจจุบัน',
'unblocklogentry' => 'เลิกบล็อก $1',
'block-log-flags-anononly' => 'ผู้ใช้นิรนามเท่านั้น',
'block-log-flags-nocreate' => 'ห้ามสร้างบัญชีผู้ใช้',
'block-log-flags-noautoblock' => 'ยกเลิกการบล็อกอัตโนมัติ',
'block-log-flags-noemail' => 'บล็อกการส่งอีเมล',
'block-log-flags-nousertalk' => 'ไม่สามารถแก้ไขหน้าอภิปรายของตนเอง',
'block-log-flags-angry-autoblock' => 'การบล็อกอัตโนมัติขั้นสูงเปิดใช้งาน',
'block-log-flags-hiddenname' => 'ชื่อผู้ใช้ถูกซ่อน',
'range_block_disabled' => 'ยกเลิกการบล็อกช่วงไอพีของผู้ดูแลระบบ',
'ipb_expiry_invalid' => 'ค่าวันหมดอายุไม่ถูกต้อง',
'ipb_expiry_temp' => 'ผู้ใช้ที่ถูกบล็อกจะซ่อนโดยถาวร',
'ipb_hide_invalid' => 'ไม่สามารถยับยั้งชื่อผู้ใช้นี้ได้ เพราะอาจมีการแก้ไขมากเกินไป',
'ipb_already_blocked' => '"$1" ถูกบล็อกแล้วก่อนหน้านี้',
'ipb-needreblock' => '$1 ถูกบล็อกแล้ว คุณต้องการแก้ไขหรือไม่',
'ipb-otherblocks-header' => '{{PLURAL:$1|การบล็อก}}อื่น ๆ',
'unblock-hideuser' => 'คุณไม่สามารถยกเลิกการบล็อคผู้ใช้งานรายนี้ได้, เนื่องจากชื่อผู้ใช้ของผู้ใช้งานถูกซ่อนอยู่',
'ipb_cant_unblock' => 'ปัญหา: หมายเลขบล็อก $1 ไม่พบ อาจเกิดจากได้ถูกยกเลิกการบล็อกแล้ว',
'ipb_blocked_as_range' => 'มีข้อผิดพลาด: หมายเลขไอพี $1 ไม่ได้ถูกระงับโดยตรงและไม่สามารถยกเลิกการระงับโดยตรงได้.  อย่างไรก็ตาม ไอพีนี้ถูกระงับในฐานะที่เป็นส่วนหนึ่งของหมายเลขไอพีในช่วง $2 ซึ่งสามารถยกเลิกการระงับได้',
'ip_range_invalid' => 'ช่วงไอพีไม่ถูกต้อง',
'ip_range_toolarge' => 'ขนาดบล็อกมีขนาดใหญ่กว่า / $1 จะไม่ได้รับอนุญาต',
'blockme' => 'บล็อกฉัน',
'proxyblocker' => 'บล็อกพร็อกซี',
'proxyblocker-disabled' => 'ฟังก์ชั่นนี้ไม่สามารถใช้ได้',
'proxyblockreason' => 'หมายเลขไอพีของคุณถูกบล็อกเนื่องจากเป็นพร็อกซีเปิด กรุณาติดต่อผู้ให้บริการอินเทอร์เน็ตที่คุณใช้งานอยู่เกี่ยวกับปัญหานี้',
'proxyblocksuccess' => 'บล็อกสำเร็จ',
'sorbsreason' => 'หมายเลขไอพีของคุณอยู่ในพร็อกซีเปิดในส่วน DNSBL ที่ถูกใช้งานในเว็บไซต์',
'sorbs_create_account_reason' => 'หมายเลขไอพีของคุณอยู่ในพร็อกซีเปิดในส่วน DNSBL ที่ถูกใช้งานในเว็บไซต์ ดังนั้นคุณไม่สามารถสร้างชื่อบัญชีผู้ใช้ได้',
'cant-block-while-blocked' => 'คุณไม่สามารถบล็อกผู้ใช้อื่นในขณะที่คุณกำลังถูกบล็อก',
'cant-see-hidden-user' => 'ผู้ใช้ที่คุณกำลังพยายามระงับนั้นได้ถูกระงับหรือซ่อนเดิมอยู่แล้ว เนื่องจากคุณไม่มีสิทธิซ่อนผู้ใช้ คุณจึงไม่สามารถดูหรือแก้ไขการระงับผู้ใช้ได้',
'ipbblocked' => 'คุณไม่สามารถบล็อกหรือปลดบล็อกผู้ใช้คนอื่น เนื่องจากคุณกำลังถูกบล็อก',
'ipbnounblockself' => 'คุณไม่ได้รับอนุญาตให้ปลดบล็อกตนเอง',

# Developer tools
'lockdb' => 'ล็อกฐานข้อมูล',
'unlockdb' => 'ปลดล็อกฐานข้อมูล',
'lockdbtext' => 'เมื่อล็อกฐานข้อมูลจะส่งผลให้ไม่สามารถแก้ไขทุกหน้า หรือแม้แต่เปลี่ยนแปลงการตั้งค่า ตรวจสอบให้แน่ใจว่าต้องการล็อกฐานข้อมูล และอย่าลืมปลดล็อกเมื่อตรวจสอบฐานข้อมูลเรียบร้อย',
'unlockdbtext' => 'เมื่อปลดล็อกฐานข้อมูลจะส่งผลให้ ผู้ใช้สามารถเริ่มแก้ไขหน้าได้เหมือนเดิม รวมถึงการตั้งค่าทุกอย่าง ตรวจสอบให้แน่ใจว่าต้องการปลดล็อกฐานข้อมูล',
'lockconfirm' => 'ยืนยัน ต้องการล็อกฐานข้อมูล',
'unlockconfirm' => 'ยืนยัน ต้องการปลดล็อกฐานข้อมูล',
'lockbtn' => 'ล็อกฐานข้อมูล',
'unlockbtn' => 'ปลดล็อกฐานข้อมูล',
'locknoconfirm' => 'ค่าตัวเลือกไม่ได้ถูกเลือก',
'lockdbsuccesssub' => 'ล็อกฐานข้อมูลเรียบร้อย',
'unlockdbsuccesssub' => 'ปลดล็อกฐานข้อมูลเรียบร้อย',
'lockdbsuccesstext' => 'ล็อกฐานข้อมูลเรียบร้อย
<br />อย่าลืม[[Special:UnlockDB|ปลดล็อก]]หลังการบำรุงรักษาเสร็จสิ้น',
'unlockdbsuccesstext' => 'ปลดล็อกฐานข้อมูลเรียบร้อย',
'lockfilenotwritable' => 'ไม่สามารถล็อกฐานข้อมูลได้ เนื่องจากการเขียนลงฐานข้อมูล การล็อกและการปลดล็อกจำเป็นต้องทำที่เว็บเซิร์ฟเวอร์',
'databasenotlocked' => 'ฐานข้อมูลไม่ได้ล็อก',

# Move page
'move-page' => 'ย้าย $1',
'move-page-legend' => 'เปลี่ยนชื่อ',
'movepagetext' => "การใช้แบบด้านล่างจะเปลี่ยนชื่อหน้า และย้ายประวัติทั้งหมดไปยังชื่อเรื่องใหม่
ชื่อเรื่องเก่าจะกลายเป็นหน้าเปลี่ยนทางไปยังชื่อเรื่องใหม่
คุณสามารถปรับให้หน้าเปลี่ยนทางที่ชี้ไปยังชื่อเรื่องเดิมได้อัตโนมัติ
แต่หากคุณเลือกไม่ทำเช่นนั้น ให้แน่ใจว่าตรวจสอบ[[Special:DoubleRedirects|หน้าเปลี่ยนทางซ้ำซ้อน]]หรือ[[Special:BrokenRedirects|หน้าเปลี่ยนทางที่เสีย]]
คุณเป็นผู้รับผิดชอบเพื่อให้แน่ใจว่าลิงก์ต่าง ๆ ยังชี้ไปยังที่ที่สมควร

โปรดทราบว่าหน้าดังกล่าวจะ'''ไม่'''ถูกย้าย ถ้ามีหน้าที่ใช้ชื่อเรื่องใหม่อยู่แล้ว เว้นแต่เป็นหน้าเปลี่ยนทาง และไม่มีประวัติการแก้ไขในอดีต
ซึ่งหมายความว่า คุณสามารถเปลี่ยนชื่อหน้ากลับเป็นชื่อเดิมได้หากคุณทำผิดพลาด และคุณไม่สามารถเขียนทับหน้าที่มีอยู่แล้วได้

'''คำเตือน!'''
สิ่งนี้อาจเป็นการเปลี่ยนแปลงที่รุนแรงและไม่คาดคิดสำหรับหน้าที่เป็นที่นิยม
โปรดแน่ใจว่าคุณเข้าใจถึงผลลัพธ์นี้ก่อนที่จะดำเนินการต่อไป",
'movepagetext-noredirectfixer' => "การใช้แบบด้านล่างจะเปลี่ยนชื่อหน้า ซึ่งจะทำให้ประวัติทั้งหมดย้ายไปยังชื่อใหม่
ชื่อเรื่องเก่าจะกลายเป็นหน้าเปลี่ยนทางไปยังชื่อเรื่องใหม่
ให้แน่ใจว่า ตรวจสอบ[[Special:DoubleRedirects|หน้าเปลี่ยนทางซ้ำซ้อน]]หรือ[[Special:BrokenRedirects|หน้าเปลี่ยนทางที่เสีย]]
คุณจะเป็นผู้รับผิดชอบเพื่อให้แน่ใจว่าลิงก์ต่าง ๆ ยังชี้ไปยังที่ที่สมควร

โปรดทราบว่าหน้าดังกล่าวจะ'''ไม่'''ถูกย้าย ถ้ามีหน้าที่ใช้ชื่อเรื่องใหม่อยู่แล้ว เว้นแต่เป็นหน้าว่างหรือหน้าเปลี่ยนทาง และไม่มีประวัติการแก้ไขในอดีต
ซึ่งหมายความว่า คุณสามารถเปลี่ยนชื่อหน้ากลับเป็นชื่อเดิมได้หากคุณทำผิดพลาด และคุณไม่สามารถเขียนทับหน้าที่มีอยู่แล้วได้

'''คำเตือน!'''
สิ่งนี้อาจเป็นการเปลี่ยนแปลงที่รุนแรงและไม่คาดคิดสำหรับหน้าที่เป็นที่นิยม
โปรดแน่ใจว่าคุณเข้าใจถึงผลลัพธ์นี้ก่อนที่จะดำเนินการต่อไป",
'movepagetalktext' => "หน้าพูดคุยของหน้านี้จะถูกเปลี่ยนชื่อตามไปโดยอัตโนมัติ '''เว้นแต่:'''
*มีหน้าพูดคุยภายใต้ชื่อใหม่อยู่แล้ว หรือ
*คุณไม่เลือกกล่องด้านล่าง

หากเกิดกรณีเหล่านี้ คุณจะต้องย้ายหรือรวมหน้าเองหากต้องการเปลี่ยนชื่อตามในภายหลัง",
'movearticle' => 'เปลี่ยนชื่อ',
'moveuserpage-warning' => "'''คำเตือน''' คุณกำลังย้ายหน้าผู้ใช้ โปรดทราบว่าหน้าผู้ใช้เท่านั้นที่จะถูกเปลี่ยนชื่อ แต่ผู้ใช้จะ'''ไม่'''ถูกเปลี่ยนชื่อ",
'movenologin' => 'ไม่ได้ล็อกอิน',
'movenologintext' => 'ถ้าต้องการเปลี่ยนชื่อหน้านี้ ต้องเป็นผู้ใช้ลงทะเบียนและ[[Special:UserLogin|ล็อกอิน]]',
'movenotallowed' => 'คุณไม่มีสิทธิเปลี่ยนชื่อหน้า',
'movenotallowedfile' => 'คุณไม่มีสิทธิย้ายไฟล์',
'cant-move-user-page' => 'คุณไม่มีสิทธิย้ายหน้าผู้ใช้ (แยกจากหน้าย่อย)',
'cant-move-to-user-page' => 'คุณไม่มีสิทธิย้ายหน้าใด ๆ ไปเป็นหน้าผู้ใช้ (ยกเว้นหน้าย่อยของผู้ใช้)',
'newtitle' => 'ชื่อใหม่',
'move-watch' => 'เฝ้าดูหน้านี้',
'movepagebtn' => 'เปลี่ยนชื่อ',
'pagemovedsub' => 'เปลี่ยนชื่อสำเร็จ',
'movepage-moved' => '\'\'\'"$1" ถูกเปลี่ยนชื่อเป็น "$2"\'\'\'',
'movepage-moved-redirect' => 'หน้าเปลี่ยนทางถูกสร้างขึ้น',
'movepage-moved-noredirect' => 'การสร้างหน้าเปลี่ยนทางถูกระงับ',
'articleexists' => 'หน้าที่ต้องการมีอยู่แล้ว หรือชื่อที่เลือกไม่ถูกต้อง กรุณาเลือกชื่อใหม่',
'cantmove-titleprotected' => 'คุณไม่สามารถเปลี่ยนชื่อหน้าเป็นชื่อนี้ได้ เนื่องจากชื่อใหม่นี้ได้รับการป้องกันไม่ให้สร้างใหม่',
'talkexists' => "'''เปลี่ยนชื่อหน้าสำเร็จ แต่หน้าพูดคุยไม่สามารถถูกเปลี่ยนชื่อได้ เนื่องจากมีหน้าพูดคุยในชื่อใหม่แล้ว โปรดรวมเองด้วยมือ'''",
'movedto' => 'เปลี่ยนชื่อเป็น',
'movetalk' => 'เปลี่ยนชื่อหน้าพูดคุยพร้อมกัน',
'move-subpages' => 'ย้ายหน้าย่อยทั้งหมด (มากถึง $1 หน้า)',
'move-talk-subpages' => 'ย้ายหน้าย่อยทั้งหมดของหน้าอภิปราย (มากถึง $1 หน้า)',
'movepage-page-exists' => 'หน้า $1 มีอยู่แล้วและไม่สามารถเขียนทับได้โดยอัตโนมัติ',
'movepage-page-moved' => 'หน้า $1 ถูกเปลี่ยนชื่อเป็น $2',
'movepage-page-unmoved' => 'หน้า $1 ไม่สามารถเปลี่ยนชื่อเป็น $2 ได้',
'movepage-max-pages' => 'หน้า $1 หน้าถูกย้ายไป ซึ่งมากสุดแล้ว และจะไม่มีหน้าใดย้ายอัตโนมัติเพิ่ม',
'movelogpage' => 'ปูมการเปลี่ยนชื่อ',
'movelogpagetext' => 'ด้านล่างเป็นรายการการเปลี่ยนชื่อทุกหน้า',
'movesubpage' => '{{PLURAL:$1|หน้าย่อย|หน้าย่อย}}',
'movesubpagetext' => 'หน้านี้มีหน้าย่อย $1 หน้า ดังด้านล่าง',
'movenosubpage' => 'หน้านี้ไม่มีหน้าย่อย',
'movereason' => 'เหตุผล:',
'revertmove' => 'ย้อน',
'delete_and_move' => 'ลบและย้าย',
'delete_and_move_text' => '== ต้องการลบ ==

มีหน้าปลายทาง "[[:$1]]" แล้ว คุณต้องการลบหน้านั้นหรือไม่เพื่อดำเนินการต่อ',
'delete_and_move_confirm' => 'ใช่ ลบหน้านั้น',
'delete_and_move_reason' => 'ถูกลบเพื่อเปิดช่องแก่การเปลี่ยนชื่อจาก "[[$1]]"',
'selfmove' => 'ชื่อหน้าต้นทางและปลายทางเป็นชื่อเดียวกัน ไม่สามารถเปลี่ยนชื่อได้มาใช้ชื่อเดิมได้',
'immobile-source-namespace' => 'ไม่สามารถเปลี่ยนชื่อหน้าในเนมสเปซ "$1"',
'immobile-target-namespace' => 'ไม่สามารถย้ายหน้าไปยังเนมสเปซ "$1" ได้',
'immobile-target-namespace-iw' => 'ไม่สามารถย้ายไปยังหน้าปลายทางที่เป็นลิงก์ interwiki ได้',
'immobile-source-page' => 'หน้านี้ไม่สามารถเปลี่ยนชื่อได้',
'immobile-target-page' => 'ไม่สามารถเปลี่ยนไปยังชื่อที่ต้องการได้',
'imagenocrossnamespace' => 'ไม่สามารถย้ายไฟล์ไปยังเนมสเปซที่ไม่รองรับ',
'nonfile-cannot-move-to-file' => 'ไม่สามารถย้ายจากเนมสเปซอื่นมาเป็นเนมสเปซไฟล์',
'imagetypemismatch' => 'นามสกุลของไฟล์ใหม่ไม่ตรงกับชนิดของไฟล์',
'imageinvalidfilename' => 'ชื่อไฟล์เป้าหมายไม่ถูกต้อง',
'fix-double-redirects' => 'อัปเดตหน้าเปลี่ยนทางทุกหน้าที่โอนไปยังชื่อเดิม',
'move-leave-redirect' => 'สร้างหน้าเปลี่ยนทางตามมา',
'protectedpagemovewarning' => "'''คำเตือน:''' หน้านี้ถูกล็อก เฉพาะผู้ใช้ที่มีสิทธิผู้ดูแลระบบเท่านั้นที่ย้ายได้
ปูมการป้องกันล่าสุดถูกแสดงไว้ด้านล่างเพื่อการอ้างอิง:",
'semiprotectedpagemovewarning' => "'''หมายเหตุ:''' หน้านี้ถูกล็อก เฉพาะผู้ใช้ลงทะเบียนเท่านั้นที่ย้ายได้
รายการปูมล่าสุดได้ถูกแสดงไว้ด้านล่างนี้เพื่อการอ้างอิง:",
'move-over-sharedrepo' => '== มีไฟล์เดิมปรากฏ ==
ไฟล์ [[:$1]] มีปรากฏเดิมอยู่แล้วในคลังเก็บภาพส่วนกลาง การย้ายไฟล์ที่มีชื่อเรื่องนี้อาจจะเป็นการเขียนทับไฟล์เดิมในคลังเก็บได้',
'file-exists-sharedrepo' => 'ชื่อไฟล์นี้มีปรากฏเดิมอยู่แล้วในคลังเก็บภาพส่วนกลาง
กรุณาเลือกชื่ออื่น',

# Export
'export' => 'ส่งออกหน้า',
'exporttext' => 'คุณสามารถส่งออก (export) ข้อความต้นฉบับและประวัติการแก้ไขของหน้าใดๆ มากกว่าหนึ่งหน้าในคราวเดียว ออกมาในรูปแบบ XML ซึ่งสามารถนำไปใส่เข้าไว้ในเว็บไซต์วิกิแห่งอื่นที่ใช้ซอฟต์แวร์มีเดียวิกิได้ ผ่านทางคำสั่ง[[Special:Import|การนำเข้าหน้า]]

การจะส่งออกหน้านั้นสามารถทำได้โดยใส่ชื่อหัวเรื่องของหน้าที่ต้องการ ลงในกล่องข้อความด้านล่าง หนึ่งชื่อต่อหนึ่งบรรทัด จากนั้นเลือกว่าต้องการทั้งรุ่นปัจจุบันและรุ่นเก่าๆ ทั้งหมดพร้อมกับประวัติของหน้านั้น หรือต้องการเพียงแต่เนื้อหารุ่นปัจจุบันพร้อมกับรายละเอียดของรุ่นนั้นเท่านั้น

ในกรณีที่ต้องการเฉพาะรุ่นปัจจุบัน คุณสามารถใช้ในรูปแบบของลิงก์ เช่น [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] สำหรับหน้า "[[{{MediaWiki:Mainpage}}]]"',
'exportall' => 'ส่งออกข้อมูลทุกหน้า',
'exportcuronly' => 'เอาเฉพาะรุ่นปัจจุบันเท่านั้น ไม่เอาประวัติทั้งหมด',
'exportnohistory' => "----
'''หมายเหตุ:''' การส่งออกประวัติหน้าทั้งหมดผ่านช่องทางนี้ได้ถูกปิดไว้ เนื่องจากปัญหาทางเทคนิคในด้านประสิทธิภาพ",
'export-submit' => 'ส่งออกมา',
'export-addcattext' => 'รวมหน้าจากหมวดหมู่:',
'export-addcat' => 'เพิ่ม',
'export-addnstext' => 'เพิ่มหน้าจากเนมสเปซ:',
'export-addns' => 'เพิ่ม',
'export-download' => 'ส่งออกมาเป็นไฟล์',
'export-templates' => 'รวมแม่แบบมาด้วย',
'export-pagelinks' => 'จำนวนลำดับของหน้าที่ถูกเชื่อมโยงทั้งหมด:',

# Namespace 8 related
'allmessages' => 'ข้อความของระบบ',
'allmessagesname' => 'ชื่อ',
'allmessagesdefault' => 'ข้อความตั้งต้น',
'allmessagescurrent' => 'ข้อความปัจจุบัน',
'allmessagestext' => 'รายการข้อความของระบบ อยู่ในเนมสเปซมีเดียวิกิ
กรุณาไปที่ [//www.mediawiki.org/wiki/Localisation มีเดียวิกิ] และ [//translatewiki.new translatewiki.net] ถ้าคุณยังอยากที่จะแปลข้อความของระบบมีเดียวิกิ',
'allmessagesnotsupportedDB' => "หน้านี้ไม่สามารถใช้งานได้เนื่องจาก '''\$wgUseDatabaseMessages''' ถูกระงับการใช้งาน",
'allmessages-filter-legend' => 'กรอง',
'allmessages-filter' => 'กรองตามสถานะที่เลือก:',
'allmessages-filter-unmodified' => 'ไม่มีการแก้ไข',
'allmessages-filter-all' => 'ทั้งหมด',
'allmessages-filter-modified' => 'มีการแก้ไข',
'allmessages-prefix' => 'กรองด้วยคำขึ้นต้น:',
'allmessages-language' => 'ภาษา:',
'allmessages-filter-submit' => 'ไป',

# Thumbnails
'thumbnail-more' => 'ขยาย',
'filemissing' => 'ไม่เจอไฟล์',
'thumbnail_error' => 'เกิดปัญหาไม่สามารถทำรูปย่อได้: $1',
'djvu_page_error' => 'หน้าเดจาวู (DjVu) เกินขนาด',
'djvu_no_xml' => 'ไม่สามารถส่งเอกซ์เอ็มแอล (XML) สำหรับไฟล์เดจาวู (DjVu)',
'thumbnail_invalid_params' => 'พารามิเตอร์ของธัมบ์เนลไม่ถูกต้อง',
'thumbnail_dest_directory' => 'ไม่สามารถสร้างไดเรกทอรีภาพได้',
'thumbnail_image-type' => 'ไม่รองรับรูปแบบของไฟล์รูปภาพนี้',
'thumbnail_gd-library' => 'การตั้งค่าไลบรารี GD ไม่สมบูรณ์: ไม่พบฟังก์ชัน $1',
'thumbnail_image-missing' => 'ไฟล์ที่เหมือนจะหายไป: $1',

# Special:Import
'import' => 'หน้านำเข้า',
'importinterwiki' => 'นำเข้าข้ามวิกิ',
'import-interwiki-text' => 'เลือกวิกิและชื่อหัวข้อที่ต้องการนำเข้า วันที่และชื่อผู้เขียนทั้งหมดจะถูกเก็บไว้ โดยการนำเข้าทุกส่วนจะถูกเก็บไว้ใน [[Special:Log/import|ปูมการนำเข้า]]',
'import-interwiki-source' => 'หน้า/วิกิต้นทาง:',
'import-interwiki-history' => 'คัดลอกประวัติทั้งหมดในหน้านี้',
'import-interwiki-templates' => 'รวมแม่แบบทั้งหมด',
'import-interwiki-submit' => 'นำเข้า',
'import-interwiki-namespace' => 'เนมสเปซปลายทาง:',
'import-upload-filename' => 'ชื่อไฟล์:',
'import-comment' => 'ความเห็น:',
'importtext' => 'กรุณาส่งออกไฟล์จากวิกิต้นทางโดยใช้[[Special:Export|เครื่องมือส่งออก]]
บันทึกลงคอมพิวเตอร์ของคุณ และอัปโหลดที่นี่',
'importstart' => 'กำลังนำเข้าหน้า...',
'import-revision-count' => '$1 รุ่นการแก้ไข',
'importnopages' => 'ไม่มีหน้าให้นำเข้า',
'imported-log-entries' => 'นำเข้า $1 รายการปูม',
'importfailed' => 'การนำเข้าไม่สำเร็จ: <nowiki>$1</nowiki>',
'importunknownsource' => 'ไม่ทราบชนิดของไฟล์นำเข้า',
'importcantopen' => 'ไม่สามารถเปิดไฟล์นำเข้าได้',
'importbadinterwiki' => 'ลิงก์ข้ามภาษาเสีย',
'importnotext' => 'ไฟล์ว่างหรือไฟล์ไม่มีข้อความ',
'importsuccess' => 'นำเข้าไฟล์สำเร็จ!',
'importhistoryconflict' => 'มีประวัติรุ่นขัดแย้งกัน (อาจเคยนำเข้าหน้านี้มาก่อน)',
'importnosources' => 'ไม่มีการกำหนดแหล่งนำเข้าข้ามวิกิ และการอัปโหลดประวัติหน้าโดยตรงถูกปิดการใช้งาน',
'importnofile' => 'ไฟล์นำเข้าไม่ได้ถูกอัปโหลด',
'importuploaderrorsize' => 'อัปโหลดไฟล์ข้อมูลนำเข้าไม่สำเร็จ
ขนาดไฟล์ใหญ่เกินกว่าที่อนุญาตไว้',
'importuploaderrorpartial' => 'อัปโหลดไฟล์ข้อมูลนำเข้าไม่สำเร็จ
ไฟล์ได้รับการอัปโหลดขึ้นไปเพียงบางส่วนเท่านั้น',
'importuploaderrortemp' => 'อัปโหลดไฟล์ข้อมูลนำเข้าไม่สำเร็จ
ไม่พบโฟลเดอร์ชั่วคราว',
'import-parse-failure' => 'มีข้อผิดพลาดในการแปลโครงสร้างของข้อมูลนำเข้า XML',
'import-noarticle' => 'ไม่มีข้อมูลหน้าให้นำเข้า!',
'import-nonewrevisions' => 'ทุกรุ่นมาจากการนำเข้าข้อมูลก่อนหน้านี้',
'xml-error-string' => '$1 ที่บรรทัด $2 คอลัมน์ $3 (ไบต์ที่ $4): $5',
'import-upload' => 'อัปโหลดข้อมูล XML',
'import-token-mismatch' => 'ข้อมูลเซชชันสูญหาย ให้ลองใหม่อีกครั้ง',
'import-invalid-interwiki' => 'ไม่สามารถนำข้อมูลเข้าจากวิกิที่กำหนดได้',
'import-error-create' => 'หน้า "$1" ยังไม่ได้ถูกนำเข้า เนื่องจากคุณไม่ได้รับอนุญาตให้สามารถสร้างได้',

# Import log
'importlogpage' => 'ปูมการนำเข้า',
'importlogpagetext' => 'นำเข้าไฟล์จากวิกิอื่น โดยผ่านทางผู้ดูแลระบบ',
'import-logentry-upload' => 'นำเข้า [[$1]] ผ่านการอัปโหลดแล้ว',
'import-logentry-upload-detail' => '$1 {{PLURAL:$1|รุ่นการแก้ไข|รุ่นการแก้ไข}}',
'import-logentry-interwiki' => 'นำเข้าข้ามวิกิ $1 แล้ว',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|รุ่นการแก้ไข|รุ่นการแก้ไข}}จาก $2',

# JavaScriptTest
'javascripttest' => 'การทดสอบจาวาสคริปต์',
'javascripttest-disabled' => 'ฟังก์ชั่นการทำงานนี้ถูกปิดการใช้งานอยู่',

# Tooltip help for the actions
'tooltip-pt-userpage' => 'หน้าผู้ใช้ของคุณ',
'tooltip-pt-anonuserpage' => 'หน้าผู้ใช้ของหมายเลขไอพีที่แก้ไข',
'tooltip-pt-mytalk' => 'หน้าอภิปรายของคุณ',
'tooltip-pt-anontalk' => 'พูดคุยเกี่ยวกับการแก้ไขจากหมายเลขไอพี',
'tooltip-pt-preferences' => 'ตั้งค่าการใช้งานส่วนตัว',
'tooltip-pt-watchlist' => 'รายการที่เฝ้าดูการแก้ไข',
'tooltip-pt-mycontris' => 'รายการหน้าที่คุณเขียน',
'tooltip-pt-login' => 'ไม่จำเป็นต้องล็อกอินในการแก้ไข แต่แนะนำอย่างยิ่งให้ล็อกอิน',
'tooltip-pt-anonlogin' => 'ไม่จำเป็นต้องล็อกอินในการแก้ไข แต่แนะนำอย่างยิ่งให้ล็อกอิน',
'tooltip-pt-logout' => 'ล็อกเอาต์',
'tooltip-ca-talk' => 'พูดคุยเกี่ยวกับเนื้อหา',
'tooltip-ca-edit' => 'คุณสามารถแก้ไขหน้านี้ได้ โปรดใช้ปุ่มดูตัวอย่างก่อนบันทึก',
'tooltip-ca-addsection' => 'เริ่มหัวข้อย่อยใหม่',
'tooltip-ca-viewsource' => 'หน้านี้ถูกล็อก แต่ยังดูโค้ดได้',
'tooltip-ca-history' => 'รุ่นที่แล้วของหน้านี้',
'tooltip-ca-protect' => 'ล็อกหน้านี้',
'tooltip-ca-unprotect' => 'เปลี่ยนแปลงการป้องกันหน้านี้',
'tooltip-ca-delete' => 'ลบหน้านี้',
'tooltip-ca-undelete' => 'กู้คืนการแก้ไขหน้านี้กลับมาเป็นรุ่นก่อนที่ถูกลบ',
'tooltip-ca-move' => 'เปลี่ยนชื่อหน้านี้',
'tooltip-ca-watch' => 'เพิ่มหน้านี้เข้ารายการเฝ้าดู',
'tooltip-ca-unwatch' => 'นำหน้านี้ออกจากรายการเฝ้าดู',
'tooltip-search' => 'ค้นหา {{SITENAME}}',
'tooltip-search-go' => 'ตรงไปยังหน้าที่ตรงกับชื่อนี้ (ถ้ามี)',
'tooltip-search-fulltext' => 'ค้นหาหน้าที่มีข้อความนี้',
'tooltip-p-logo' => 'เข้าสู่หน้าหลัก',
'tooltip-n-mainpage' => 'เข้าสู่หน้าหลัก',
'tooltip-n-mainpage-description' => 'เข้าสู่หน้าหลัก',
'tooltip-n-portal' => 'เกี่ยวกับโครงการ สิ่งที่คุณทำได้ วิธีการค้นหา',
'tooltip-n-currentevents' => 'ค้นหาเหตุการณ์ปัจจุบัน',
'tooltip-n-recentchanges' => 'รายการปรับปรุงล่าสุดในวิกินี้',
'tooltip-n-randompage' => 'สุ่มหน้าขึ้นมา',
'tooltip-n-help' => 'อธิบายการใช้งาน',
'tooltip-t-whatlinkshere' => 'รายการทุกหน้าวิกิที่ลิงก์มาที่นี่',
'tooltip-t-recentchangeslinked' => 'รายการปรับปรุงล่าสุดในหน้าที่ลิงก์จากหน้านี้',
'tooltip-feed-rss' => 'ฟีดชนิดอาร์เอสเอส (RSS) ของหน้านี้',
'tooltip-feed-atom' => 'ฟีดอะตอม (Atom) ของหน้านี้',
'tooltip-t-contributions' => 'รายการเรื่องที่เขียนโดยผู้ใช้คนนี้',
'tooltip-t-emailuser' => 'ส่งอีเมลถึงผู้ใช้นี้',
'tooltip-t-upload' => 'อัปโหลดไฟล์',
'tooltip-t-specialpages' => 'รายการหน้าพิเศษทั้งหมด',
'tooltip-t-print' => 'รุ่นที่พร้อมพิมพ์ของหน้านี้',
'tooltip-t-permalink' => 'ลิงก์ถาวรมาที่เฉพาะรุ่นนี้ของหน้า',
'tooltip-ca-nstab-main' => 'ดูหน้าเนื้อหา',
'tooltip-ca-nstab-user' => 'ดูหน้าผู้ใช้',
'tooltip-ca-nstab-media' => 'ดูหน้าสื่อ ภาพ เพลง',
'tooltip-ca-nstab-special' => 'หน้านี้เป็นหน้าพิเศษ คุณไม่สามารถแก้ไขได้',
'tooltip-ca-nstab-project' => 'ดูหน้าโครงการ',
'tooltip-ca-nstab-image' => 'ดูหน้าภาพไฟล์',
'tooltip-ca-nstab-mediawiki' => 'ดูข้อความระบบ',
'tooltip-ca-nstab-template' => 'ดูหน้าแม่แบบ',
'tooltip-ca-nstab-help' => 'ดูหน้าคำอธิบาย',
'tooltip-ca-nstab-category' => 'ดูหน้าหมวดหมู่',
'tooltip-minoredit' => 'กำหนดเป็นการแก้ไขเล็กน้อย',
'tooltip-save' => 'บันทึกการแก้ไข',
'tooltip-preview' => 'แสดงตัวอย่างการเปลี่ยนแปลงของคุณ กรุณาใช้คำสั่งนี้ก่อนบันทึก!',
'tooltip-diff' => 'แสดงการเปลี่ยนการต่อข้อความ',
'tooltip-compareselectedversions' => 'แสดงความแตกต่างระหว่างสองรุ่นที่เลือกของหน้านี้',
'tooltip-watch' => 'เพิ่มหน้านี้เข้ารายการเฝ้าดู',
'tooltip-watchlistedit-normal-submit' => 'นำชื่อเรื่องออก',
'tooltip-watchlistedit-raw-submit' => 'อัพเดทรายการเฝ้าดู',
'tooltip-recreate' => 'สร้างหน้านี้อีกครั้งแม้เคยถูกลบ',
'tooltip-upload' => 'เริ่มอัปโหลด',
'tooltip-rollback' => '"ย้อนกลับฉุกเฉิน" ใช้ย้อนการแก้ไขในหน้านี้ของผู้เขียนคนล่าสุดในคลิกเดียว',
'tooltip-undo' => '"ย้อน" ใช้ย้อนการแก้ไขครั้งนี้และเปิดแบบแก้ไข สามารถเพิ่มคำอธิบายในตอนท้าย',
'tooltip-preferences-save' => 'บันทึกการตั้งค่า',
'tooltip-summary' => 'ใส่คำอธิบายอย่างย่อสั้น ๆ',

# Stylesheets
'common.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ทุกสกิน */',
'standard.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินคลาสสิก */',
'nostalgia.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินนอสตัลเจีย */',
'cologneblue.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินโคโลญจ์บลู */',
'monobook.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินโมโนบุ๊ก */',
'myskin.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินมายสกิน */',
'chick.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินชิก */',
'simple.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินซิมเปิล */',
'modern.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินโมเดิร์น */',
'vector.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ใช้สกินเวกเตอร์ */',
'print.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ข้อมูลส่งออกเป็นสิ่งพิมพ์ */',
'handheld.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่อุปกรณ์เคลื่อนที่ โดยขึ้นอยู่กับสกินที่ตั้งค่าไว้ใน $wgHandheldStyle */',
'noscript.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ที่ปิดการใช้งานจาวาสคริปต์ */',
'group-autoconfirmed.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ใช้ทั่วไปเท่านั้น */',
'group-bot.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่บอตเท่านั้น */',
'group-sysop.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ดูแลเท่านั้น */',
'group-bureaucrat.css' => '/* สไตล์ชีตในหน้านี้จะส่งผลแก่ผู้ดูแลสิทธิแต่งตั้งเท่านั้น */',

# Scripts
'common.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ทุกคนในทุกหน้า */',
'standard.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินคลาสสิก */',
'nostalgia.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินนอสตัลเจีย */',
'cologneblue.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินโคโลญจ์บลู */',
'monobook.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินโมโนบุ๊ก */',
'myskin.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินมายสกิน */',
'chick.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินชิก */',
'simple.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินซิมเปิล */',
'modern.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินโมเดิร์น */',
'vector.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ที่ใช้สกินเวกเตอร์ */',
'group-autoconfirmed.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ใช้ทั่วไปเท่านั้น */',
'group-bot.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่บอตเท่านั้น */',
'group-sysop.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ดูแลเท่านั้น */',
'group-bureaucrat.js' => '/* จาวาสคริปต์ใด ๆ ในหน้านี้จะถูกโหลดให้แก่ผู้ดูแลสิทธิแต่งตั้งเท่านั้น */',

# Metadata
'notacceptable' => 'เซิร์ฟเวอร์ของวิกิไม่สามารถให้ข้อมูลในรูปแบบที่ไคลเอนต์สามารถอ่านได้',

# Attribution
'anonymous' => '{{PLURAL:$1|ผู้ใช้}}นิรนามของ {{SITENAME}}',
'siteuser' => 'ผู้ใช้ $1 จาก {{SITENAME}}',
'anonuser' => 'ผู้ใช้นิรนามจาก {{SITENAME}} $1',
'lastmodifiedatby' => 'แก้ไขล่าสุดเมื่อเวลา $2 $1 โดย $3',
'othercontribs' => 'พัฒนาจากงานเขียนของ $1',
'others' => 'ผู้อื่น',
'siteusers' => '{{PLURAL:$2|ผู้ใช้|ผู้ใช้}} {{SITENAME}} $1',
'anonusers' => '{{PLURAL:$2|ผู้ใช้|บรรดาผู้ใช้}}นิรนามจาก {{SITENAME}} $1',
'creditspage' => 'เกียรติแก่ผู้ร่วมสร้าง',
'nocredits' => 'ไม่มีรายชื่อผู้เป็นเกียรติที่ร่วมสร้างหน้านี้',

# Spam protection
'spamprotectiontitle' => 'ตัวกรองป้องกันสแปม',
'spamprotectiontext' => 'หน้าที่คุณต้องการบันทึกโดนบล็อกด้วยตัวกรองสแปม ซึ่งอาจเกิดจากมีลิงก์ไปยังเว็บไซต์ภายนอกที่อยู่ในบัญชีดำ',
'spamprotectionmatch' => 'ข้อความต่อไปนี้ได้ทำให้ตัวกรองสแปมของเราทำงาน: $1',
'spambot_username' => 'กวาดล้างมีเดียวิกิสแปม',
'spam_reverting' => 'ย้อนกลับไปรุ่นก่อนหน้าที่ไม่มีลิงก์ไปยังเว็บ $1',
'spam_blanking' => 'รุ่นการปรับปรุงทุกรุ่นประกอบไปด้วยลิงก์ไปยังเว็บ $1 (ทำหน้าว่าง)',

# Info page
'pageinfo-title' => 'ข้อมูลสำหรับ "$1"',
'pageinfo-not-current' => 'ขออภัย ไม่สามารถให้ข้อมูลนี้สำหรับรุ่นเก่าได้',
'pageinfo-header-basic' => 'ข้อมูลเบื้องต้น',
'pageinfo-header-edits' => 'ประวัติการแก้ไข',
'pageinfo-header-restrictions' => 'การล็อกหน้า',
'pageinfo-header-properties' => 'คุณสมบัติหน้า',
'pageinfo-display-title' => 'แสดงชื่อ',
'pageinfo-default-sort' => 'หลักการเรียงลำดับโดยปริยาย',
'pageinfo-length' => 'ความยาวหน้า (ไบต์)',
'pageinfo-article-id' => 'หมายเลขประจำหน้า',
'pageinfo-robot-policy' => 'สถานะเสิร์ชเอนจิน',
'pageinfo-views' => 'จำนวนการเข้าดู',
'pageinfo-watchers' => 'จำนวนผู้เข้าดูหน้า',
'pageinfo-redirects-name' => 'หน้าเปลี่ยนทางมายังหน้านี้',
'pageinfo-subpages-name' => 'หน้าย่อยของหน้านี้',
'pageinfo-subpages-value' => '$1 ($2 หน้าเปลี่ยนทาง; $3 หน้าไม่เปลี่ยนทาง)',
'pageinfo-firstuser' => 'ผู้สร้างหน้า',
'pageinfo-firsttime' => 'วันที่สร้างหน้า',
'pageinfo-lastuser' => 'ผู้เขียนคนล่าสุด',
'pageinfo-lasttime' => 'วันที่แก้ไขล่าสุด',
'pageinfo-edits' => 'จำนวนการแก้ไขรวม',
'pageinfo-authors' => 'จำนวนผู้เขียนทั้งหมด',
'pageinfo-recent-edits' => 'การแก้ไขล่าสุด (ภายใน $1ที่ผ่านมา)',
'pageinfo-recent-authors' => 'จำนวนผู้เขียนล่าสุด',
'pageinfo-hidden-categories' => 'หมวดหมู่ที่ซ่อนอยู่ ($1)',
'pageinfo-templates' => 'แม่แบบที่ใช้ ($1)',

# Skin names
'skinname-standard' => 'คลาสสิก',
'skinname-nostalgia' => 'นอสตัลเจีย',
'skinname-cologneblue' => 'โคโลญจ์บลู',
'skinname-monobook' => 'โมโนบุ๊ก',
'skinname-myskin' => 'มายสกิน',
'skinname-chick' => 'ชิก',
'skinname-simple' => 'ซิมเปิล',
'skinname-modern' => 'โมเดิร์น',
'skinname-vector' => 'เวกเตอร์',

# Patrolling
'markaspatrolleddiff' => 'ทำเครื่องหมายว่าตรวจสอบแล้ว',
'markaspatrolledtext' => 'ทำเครื่องหมายว่าหน้านี้ถูกตรวจสอบแล้ว',
'markedaspatrolled' => 'ตรวจสอบแล้ว',
'markedaspatrolledtext' => 'รุ่นการแก้ไขของ[[:$1]]ถูกกำหนดว่าตรวจสอบแล้ว',
'rcpatroldisabled' => 'การตรวจสอบหน้าปรับปรุงล่าสุดปิดใช้งาน',
'rcpatroldisabledtext' => 'ฟังก์ชันการตรวจสอบหน้าปรับปรุงล่าสุดขณะนี้ไม่เปิดการใช้งาน',
'markedaspatrollederror' => 'ไม่สามารถทำเครื่องหมายว่าตรวจสอบแล้ว',
'markedaspatrollederrortext' => 'คุณจำเป็นต้องระบุรุ่นการแก้ไขที่กำหนดว่าตรวจสอบแล้ว',
'markedaspatrollederror-noautopatrol' => 'คุณไม่สามารถทำเครื่องหมายการแก้ไขของคุณเองว่าตรวจสอบแล้ว',

# Patrol log
'patrol-log-page' => 'ปูมการตรวจสอบ',
'patrol-log-header' => 'หน้านี้คือบันทึกรุ่นการแก้ไขที่กำหนดว่าตรวจสอบแล้ว',
'log-show-hide-patrol' => '$1 ปูมการตรวจสอบ',

# Image deletion
'deletedrevision' => 'รุ่นเก่าที่ถูกลบ $1',
'filedeleteerror-short' => 'เกิดปัญหาการลบไฟล์: $1',
'filedeleteerror-long' => 'เกิดข้อผิดพลาดขณะลบไฟล์:

$1',
'filedelete-missing' => 'ไม่สามารถลบไฟล์ "$1" ได้ เนื่องจากไม่มีไฟล์ชื่อนี้อยู่',
'filedelete-old-unregistered' => 'ไม่มีรุ่นไฟล์ "$1" ที่ระบุในฐานข้อมูล',
'filedelete-current-unregistered' => 'ไม่มีไฟล์ "$1" ที่ระบุในฐานข้อมูล',
'filedelete-archive-read-only' => 'ไดเรกทอรีกรุชื่อ "$1" ไม่สามารถเขียนลงได้โดยเว็บเซิร์ฟเวอร์',

# Browsing diffs
'previousdiff' => '← แตกต่างก่อนหน้า',
'nextdiff' => 'แตกต่างถัดไป →',

# Media information
'mediawarning' => "'''คำเตือน''': ไฟล์รูปแบบนี้อาจมีโค้ดที่ไม่พึงประสงค์
ระบบของท่านอาจเสียหายอันเนื่องจากโค้ดทำงาน",
'imagemaxsize' => "ขนาดภาพที่จำกัด:<br />''(สำหรับหน้าอธิบายภาพ)''",
'thumbsize' => 'ขนาดรูปย่อ:',
'widthheightpage' => '{{PLURAL:$3|หน้า|หน้า}} $1 × $2, $3',
'file-info' => 'ขนาดไฟล์: $1, ชนิดไมม์: $2',
'file-info-size' => '$1 × $2 พิกเซล, ขนาดไฟล์: $3, ชนิดไมม์: $4',
'file-info-size-pages' => '$1 × $2 พิกเซล, ขนาดไฟล์: $3, ประเภท MIME: $4, $5 {{PLURAL:$5|หน้า|หน้า}}',
'file-nohires' => 'ไม่มีความละเอียดสูงกว่านี้',
'svg-long-desc' => 'ไฟล์ SVG, $1 × $2 พิกเซล พอเป็นพิธี, ขนาดไฟล์: $3',
'show-big-image' => 'ความละเอียดสูงสุด',
'show-big-image-other' => 'อื่นๆ {{PLURAL:$2|resolution|resolutions}}: $1.',
'show-big-image-size' => '$1 × $2 พิกเซล',
'file-info-gif-looped' => 'วนซ้ำ',
'file-info-gif-frames' => '$1 {{PLURAL:$1|เฟรม|เฟรม}}',
'file-info-png-looped' => 'วนซ้ำ',
'file-info-png-repeat' => 'เล่นแล้ว $1 {{PLURAL:$1|ครั้ง|ครั้ง}}',
'file-info-png-frames' => '$1 เฟรม',

# Special:NewFiles
'newimages' => 'แกลลอรีภาพใหม่',
'imagelisttext' => "รายชื่อไฟล์ '''$1''' รายการ เรียงตาม$2",
'newimages-summary' => 'หน้าพิเศษนี้แสดงไฟล์ที่ถูกอัปโหลดล่าสุด',
'newimages-legend' => 'ตัวกรอง',
'newimages-label' => 'ชื่อไฟล์ (หรือส่วนหนึ่งของชื่อ):',
'showhidebots' => '($1 บอต)',
'noimages' => 'ไม่มีให้ดู',
'ilsubmit' => 'สืบค้น',
'bydate' => 'วันที่',
'sp-newimages-showfrom' => 'แสดงภาพใหม่เริ่มต้นจาก $2, $1',

# Video information, used by Language::formatTimePeriod() to format lengths in the above messages
'seconds-abbrev' => '$1 วินาที',
'minutes-abbrev' => '$1 นาที',
'hours-abbrev' => '$1 ชั่วโมง',
'days-abbrev' => '$1 วัน',
'seconds' => '$1 วินาที',
'minutes' => '$1 นาที',
'hours' => '$1 ชั่วโมง',
'days' => '$1 วัน',
'ago' => '$1 มาแล้ว',

# Bad image list
'bad_image_list' => 'รูปแบบแสดงต่อไปนี้:

เฉพาะรายการที่แสดง (ในแถวขึ้นต้นด้วย *) โดยลิงก์แรกของแต่ละแถวเป็นลิงก์ไปยังภาพที่เสีย
โดยลิงก์ถัดไปเป็นข้อยกเว้น เช่น บทความที่ภาพถูกจัดในบรรทัดเดียวกับส่วนข้อความ',

# Metadata
'metadata' => 'ข้อมูลแนบ',
'metadata-help' => 'ไฟล์นี้มีข้อมูลเพิ่มเติมแนบไว้ อาจจะมาจาก กล้องดิจิทัล สแกนเนอร์ หรือเครื่องรับส่งจีพีเอส อย่างไรก็ตามข้อมูลที่เก็บไว้อาจถูกดัดแปลงถ้าไฟล์ต้นฉบับถูกแก้ไขจากซอฟต์แวร์อื่น',
'metadata-expand' => 'แสดงข้อมูลเพิ่มเติม',
'metadata-collapse' => 'ซ่อนข้อมูลเพิ่มเติม',
'metadata-fields' => 'เขตข้อมูลเมทาเดตาของภาพดังที่แสดงรายการไว้ในข้อความนี้ จะถูกรวมบนหน้าภาพเมื่อตารางเมทาเดตาถูกยุบ เขตข้อมูลอื่น ๆ จะถูกซ่อนโดยปริยาย
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
'exif-imagewidth' => 'ความกว้าง',
'exif-imagelength' => 'ความสูง',
'exif-bitspersample' => 'บิต ต่อคอมโพเนนต์',
'exif-compression' => 'รูปแบบการบีบอัด',
'exif-photometricinterpretation' => 'พิกเซลคอมโพซิชัน',
'exif-orientation' => 'การจัดวางภาพ',
'exif-samplesperpixel' => 'จำนวนคอมโพเนนต์',
'exif-planarconfiguration' => 'การจัดเรียงข้อมูล',
'exif-ycbcrsubsampling' => 'อัตราซับแซมปริง ของ Y และ C',
'exif-ycbcrpositioning' => 'ตำแหน่ง Y และ C',
'exif-xresolution' => 'ความละเอียดแนวนอน',
'exif-yresolution' => 'ความละเอียดแนวตั้ง',
'exif-stripoffsets' => 'ตำแหน่งข้อมูลภาพ',
'exif-rowsperstrip' => 'จำนวนแถวต่อสตริป',
'exif-stripbytecounts' => 'ไบต์ต่อสตริป',
'exif-jpeginterchangeformat' => 'ออฟเซตไปที่ JPEG SOI',
'exif-jpeginterchangeformatlength' => 'ไบต์ของข้อมูล JPEG',
'exif-whitepoint' => 'ไวต์พอยต์โครมาติก',
'exif-primarychromaticities' => 'โครมาติกของไพรมาริตี',
'exif-ycbcrcoefficients' => 'สัมประสิทธิเมทริกซ์การเปลียนแปลงของสเปซสี',
'exif-referenceblackwhite' => 'คู่จุดสีขาวและดำสำหรับอ้างอิง',
'exif-datetime' => 'วันที่และเวลาปรับปรุง',
'exif-imagedescription' => 'ชื่อภาพ',
'exif-make' => 'ผู้ผลิตกล้อง',
'exif-model' => 'รุ่นกล้อง',
'exif-software' => 'ซอฟต์แวร์ที่ใช้',
'exif-artist' => 'ผู้สร้างสรรค์',
'exif-copyright' => 'ผู้ถือลิขสิทธิ์',
'exif-exifversion' => 'รุ่นเอกซิฟ (Exif)',
'exif-flashpixversion' => 'รุ่นแฟลชพิกซ์ที่รองรับ',
'exif-colorspace' => 'สเปซสี',
'exif-componentsconfiguration' => 'ความหมายของแต่ละคอมโพเนนต์',
'exif-compressedbitsperpixel' => 'โหมดการบีบอัดภาพ',
'exif-pixelydimension' => 'ความกว้างของภาพ',
'exif-pixelxdimension' => 'ความสูงของภาพ',
'exif-usercomment' => 'ความเห็นผู้ใช้',
'exif-relatedsoundfile' => 'ไฟล์เสียงที่เกี่ยวข้อง',
'exif-datetimeoriginal' => 'วันที่และเวลาที่สร้าง',
'exif-datetimedigitized' => 'วันที่และเวลาที่ดิจิไทซ์',
'exif-subsectime' => 'เสี้ยววินาที วันที่ เวลา',
'exif-subsectimeoriginal' => 'เสี้ยววินาที วันที่ เวลาต้นฉบับ',
'exif-subsectimedigitized' => 'เสี้ยววินาที วันที่ เวลาที่ดิจิไทซ์',
'exif-exposuretime' => 'เวลารับแสง',
'exif-exposuretime-format' => '$1 วินาที ($2)',
'exif-fnumber' => 'ค่าเอฟ',
'exif-exposureprogram' => 'โปรแกรมเอกซ์โพเชอร์',
'exif-spectralsensitivity' => 'ความไวสเปกตรัม',
'exif-isospeedratings' => 'อัตราความเร็ว ISO',
'exif-shutterspeedvalue' => 'ความเร็วชัตเตอร์ APEX',
'exif-aperturevalue' => 'รูรับแสง APEX',
'exif-brightnessvalue' => 'ความสว่าง APEX',
'exif-exposurebiasvalue' => 'เอกซ์โพเชอร์ไบแอส',
'exif-maxaperturevalue' => 'รูรับแสงกว้างสุด',
'exif-subjectdistance' => 'ระยะวัตถุ',
'exif-meteringmode' => 'โหมดมิเตอริง',
'exif-lightsource' => 'แสง',
'exif-flash' => 'แฟลช',
'exif-focallength' => 'ระยะโฟกัส',
'exif-focallength-format' => '$1 มม.',
'exif-subjectarea' => 'จุดวัตถุ',
'exif-flashenergy' => 'พลังงานแฟลช',
'exif-focalplanexresolution' => 'ความละเอียระนาบโฟกัส X',
'exif-focalplaneyresolution' => 'ความละเอียระนาบโฟกัส Y',
'exif-focalplaneresolutionunit' => 'หน่วยความละเอียดระนาบโฟกัส',
'exif-subjectlocation' => 'ตำแหน่งวัตถุ',
'exif-exposureindex' => 'ดัชนีเอกซ์โพเชอร์',
'exif-sensingmethod' => 'วิถีการวัด',
'exif-filesource' => 'ต้นฉบับไฟล์',
'exif-scenetype' => 'ชนิดซีน',
'exif-customrendered' => 'การประมวณภาพ',
'exif-exposuremode' => 'โหมดเอกซ์โพเชอร์',
'exif-whitebalance' => 'ไวต์บาลานซ์',
'exif-digitalzoomratio' => 'อัตราซูมดิจิทัล',
'exif-focallengthin35mmfilm' => 'ระยะโฟกัสในฟิล์ม 35 มม.',
'exif-scenecapturetype' => 'ชนิดซีนแคปเจอร์',
'exif-gaincontrol' => 'ซีนคอนโทรล',
'exif-contrast' => 'ความเปรีบบต่าง',
'exif-saturation' => 'ความอิ่มสี',
'exif-sharpness' => 'ความคม',
'exif-devicesettingdescription' => 'รายละเอียดการตั้งค่าอุปกรณ์',
'exif-subjectdistancerange' => 'ระยะห่างวัตถุ',
'exif-imageuniqueid' => 'รหัสภาพ',
'exif-gpsversionid' => 'รุ่นจีพีเอสแท็ก',
'exif-gpslatituderef' => 'ละติจูดเหนือหรือใต้',
'exif-gpslatitude' => 'ละติจูด',
'exif-gpslongituderef' => 'ลองจิจูดตะวันออกหรือตะวันตก',
'exif-gpslongitude' => 'ลองจิจูด',
'exif-gpsaltituderef' => 'ระดับความสูงอ้างอิง',
'exif-gpsaltitude' => 'ระดับความสูงจากน้ำทะเล',
'exif-gpstimestamp' => 'เวลาจีพีเอส (นาฬิกาอะตอม)',
'exif-gpssatellites' => 'จำนวนดาวเทียมที่ใช้วัดค่า',
'exif-gpsstatus' => 'สถานีเครื่องรับสัญญาณ',
'exif-gpsmeasuremode' => 'โหมดการวัดค่า',
'exif-gpsdop' => 'ความละเอียดการวัดค่า',
'exif-gpsspeedref' => 'หน่วยความเร็ว',
'exif-gpsspeed' => 'ความเร็วของเครื่องรับสัญญาณจีพีเอส',
'exif-gpstrackref' => 'จุดอ้างอิงของทิศทางการเคลื่อนไหว',
'exif-gpstrack' => 'ทิศทางการเคลื่อนไหว',
'exif-gpsimgdirectionref' => 'จุดอ้างอิงของทิศทางภาพ',
'exif-gpsimgdirection' => 'ทิศทางของภาพ',
'exif-gpsmapdatum' => 'ข้อมูลการสำรวจจีโอเดติกที่ถูกใช้',
'exif-gpsdestlatituderef' => 'จุดอ้างอิงของละติจูดเป้าหมาย',
'exif-gpsdestlatitude' => 'ละติจูดเป้าหมาย',
'exif-gpsdestlongituderef' => 'จุดอ้างอิงของลองจิจูดเป้าหมาย',
'exif-gpsdestlongitude' => 'ลองจิจูดเป้าหมาย',
'exif-gpsdestbearingref' => 'จุดอ้างอิงของทิศทางเป้าหมาย',
'exif-gpsdestbearing' => 'ทิศทางของเป้าหมาย',
'exif-gpsdestdistanceref' => 'จุดอ้างอิงของระยะทางเป้าหมาย',
'exif-gpsdestdistance' => 'ระยะทางของเป้าหมาย',
'exif-gpsprocessingmethod' => 'ชื่อวิธีประมวดผลจีพีเอส',
'exif-gpsareainformation' => 'ชื่อของพื้นที่จีพีเอส',
'exif-gpsdatestamp' => 'วันที่จีพีเอส',
'exif-gpsdifferential' => 'การปรับแค่ข้อแตกต่างจีพีเอส',
'exif-keywords' => 'คำสำคัญ',
'exif-objectname' => 'ชื่อเรื่องสั้น',
'exif-headline' => 'พาดหัวข่าว',
'exif-contact' => 'ข้อมูลสำหรับติดต่อ',
'exif-languagecode' => 'ภาษา',
'exif-iimcategory' => 'หมวดหมู่',
'exif-label' => 'ป้ายฉลาก',
'exif-usageterms' => 'ข้อตกลงในการใช้งาน',

# EXIF attributes
'exif-compression-1' => 'ไม่ได้บีบอัด',

'exif-unknowndate' => 'ไม่ทราบวัน',

'exif-orientation-1' => 'ปกติ',
'exif-orientation-2' => 'ถูกสลับแนวนอน',
'exif-orientation-3' => 'ถูกหมุน 180°',
'exif-orientation-4' => 'ถูกสลับแนวตั้ง',
'exif-orientation-5' => 'ถูกหมุน 90° ทวนเข็มนาฬิกา และถูกสลับแนวตั้ง',
'exif-orientation-6' => 'ถูกหมุน 90° ทวนเข็มนาฬิกา',
'exif-orientation-7' => 'ถูกหมุน 90° ตามเข็มนาฬิกา และถูกสลับแนวตั้ง',
'exif-orientation-8' => 'ถูกหมุน 90° ตามเข็มนาฬิกา',

'exif-planarconfiguration-1' => 'รูปแบบชังกี',
'exif-planarconfiguration-2' => 'รูปแบบเพลนาร์',

'exif-componentsconfiguration-0' => 'ไม่มีค่า',

'exif-exposureprogram-0' => 'ไม่กำหนด',
'exif-exposureprogram-1' => 'ตั้งค่าเอง',
'exif-exposureprogram-2' => 'โปรแกรมปกติ',
'exif-exposureprogram-3' => 'กำหนดรูรับแสงเป็นหลัก (a)',
'exif-exposureprogram-4' => 'กำหนดความไวชัตเตอร์เป็นหลัก (s)',
'exif-exposureprogram-5' => 'โปรแกรมครีเอทีฟ (ความชัดตื้นหลากหลาย)',
'exif-exposureprogram-6' => 'โปรแกรมแอกชัน (ค่าชัตเตอร์สปีดเร็ว)',
'exif-exposureprogram-7' => 'พอร์เทรต (สำหรับภาพโคลสอัปที่พื้นหลังไม่โฟกัส)',
'exif-exposureprogram-8' => 'แลนด์สเคป (สำหรับภาพวิวทิวทัศน์โฟกัสพื้นหลัง)',

'exif-subjectdistance-value' => '$1 เมตร',

'exif-meteringmode-0' => 'ไม่ทราบ',
'exif-meteringmode-1' => 'เฉลี่ย',
'exif-meteringmode-2' => 'เซนเตอร์',
'exif-meteringmode-3' => 'สปอต',
'exif-meteringmode-4' => 'มัลติสปอต',
'exif-meteringmode-5' => 'แพตเทิร์น',
'exif-meteringmode-6' => 'พาร์เชียล',
'exif-meteringmode-255' => 'อื่น',

'exif-lightsource-0' => 'ไม่ทราบ',
'exif-lightsource-1' => 'เดย์ไลต์',
'exif-lightsource-2' => 'ฟลูออเรสเซนต์',
'exif-lightsource-3' => 'ทังสเตน (แสดงจากหลอดไฟ)',
'exif-lightsource-4' => 'แฟลช',
'exif-lightsource-9' => 'อากาศปกติ',
'exif-lightsource-10' => 'เมฆมาก',
'exif-lightsource-11' => 'ในร่ม',
'exif-lightsource-12' => 'เดย์ไลต์ฟลูออเรสเซนต์ (D 5700 – 7100K)',
'exif-lightsource-13' => 'เดย์ไวต์ฟลูออเรสเซนต์ (N 4600 – 5400K)',
'exif-lightsource-14' => 'คูลไวต์ฟลูออเรสเซนต์ (W 3900 – 4500K)',
'exif-lightsource-15' => 'ไวต์ฟลูออเรสเซนต์ (WW 3200 – 3700K)',
'exif-lightsource-17' => 'แสงมาตรฐาน A',
'exif-lightsource-18' => 'แสงมาตรฐาน B',
'exif-lightsource-19' => 'แสงมาตรฐาน C',
'exif-lightsource-24' => 'ไอเอสโอสตูดิโอทังสเตน',
'exif-lightsource-255' => 'แสงลักษณะอื่น',

# Flash modes
'exif-flash-fired-0' => 'ไม่ใช้แฟลช',
'exif-flash-fired-1' => 'ใช้แฟลช',
'exif-flash-return-0' => 'ไม่มีฟังก์ชันตรวจจับการย้อนแสงจากแฟลช',
'exif-flash-return-2' => 'ไม่พบแสงแฟลชย้อนกลับ',
'exif-flash-return-3' => 'พบแสงแฟลชย้อนกลับ',
'exif-flash-mode-1' => 'บังคับใช้แฟลช',
'exif-flash-mode-2' => 'ระงับใช้แฟลช',
'exif-flash-mode-3' => 'โหมดอัตโนมัติ',
'exif-flash-function-1' => 'ฟังก์ชันไม่มีแฟลช',
'exif-flash-redeye-1' => 'โหมดลบตาแดง',

'exif-focalplaneresolutionunit-2' => 'นิ้ว',

'exif-sensingmethod-1' => 'ไม่กำหนด',
'exif-sensingmethod-2' => 'เซนเซอร์จุดเดียว',
'exif-sensingmethod-3' => 'เซนเซอร์สองจุด',
'exif-sensingmethod-4' => 'เซนเซอร์สามจุด',
'exif-sensingmethod-5' => 'เซนเซอร์ลำดับสี',
'exif-sensingmethod-7' => 'เซนเซอร์สามแนว',
'exif-sensingmethod-8' => 'เซนเซอร์สามแนวสี',

'exif-filesource-3' => 'กล้องถ่ายภาพนิ่งดิจิทัล',

'exif-scenetype-1' => 'ภาพถ่ายโดยตรง',

'exif-customrendered-0' => 'โพลเซสส์ปกติ',
'exif-customrendered-1' => 'โพลเซสส์ตั้งค่า',

'exif-exposuremode-0' => 'เอกซ์โพเชอร์อัตโนมัติ',
'exif-exposuremode-1' => 'เอกซ์โพเชอร์ตั้งค่าเอง',
'exif-exposuremode-2' => 'แบรกเกตอัตโนมัติ',

'exif-whitebalance-0' => 'ไวต์บาลานซ์อัตโนมัติ',
'exif-whitebalance-1' => 'ไวต์บาลานซ์ตั้งค่าเอง',

'exif-scenecapturetype-0' => 'ปกติ',
'exif-scenecapturetype-1' => 'แลนด์สเคป',
'exif-scenecapturetype-2' => 'พอร์เทรต',
'exif-scenecapturetype-3' => 'ไนต์ซีน',

'exif-gaincontrol-0' => 'ไม่มี',
'exif-gaincontrol-1' => 'เกน ต่ำ-ขึ้น',
'exif-gaincontrol-2' => 'เกน สูง-ขึ้น',
'exif-gaincontrol-3' => 'เกน ต่ำ-ลง',
'exif-gaincontrol-4' => 'เกน สูง-ลง',

'exif-contrast-0' => 'ปกติ',
'exif-contrast-1' => 'ซอฟต์',
'exif-contrast-2' => 'ฮาร์ด',

'exif-saturation-0' => 'ปกติ',
'exif-saturation-1' => 'ความเข้มสีต่ำ',
'exif-saturation-2' => 'ความเข้มสีสูง',

'exif-sharpness-0' => 'ปกติ',
'exif-sharpness-1' => 'ซอฟต์',
'exif-sharpness-2' => 'ฮาร์ด',

'exif-subjectdistancerange-0' => 'ไม่ทราบ',
'exif-subjectdistancerange-1' => 'มาโคร',
'exif-subjectdistancerange-2' => 'ภาพใกล้',
'exif-subjectdistancerange-3' => 'ภาพไกล',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'ละติจูดเหนือ',
'exif-gpslatitude-s' => 'ละติจูดใต้',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'ลองจิจูดตะวันออก',
'exif-gpslongitude-w' => 'ลองจิจูดตะวันตก',

'exif-gpsstatus-a' => 'กำลังทำการวัดอยู่',
'exif-gpsstatus-v' => 'ความสามารถในการวัดตำแหน่ง',

'exif-gpsmeasuremode-2' => 'การวัดสองมิติ',
'exif-gpsmeasuremode-3' => 'การวัดสามมิติ',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'กิโลเมตรต่อชั่วโมง',
'exif-gpsspeed-m' => 'ไมล์ต่อชั่วโมง',
'exif-gpsspeed-n' => 'นอตส์',

# Pseudotags used for GPSDestDistanceRef
'exif-gpsdestdistance-k' => 'กิโลเมตร',
'exif-gpsdestdistance-m' => 'ไมล์',

'exif-objectcycle-a' => 'ตอนเช้าเท่านั้น',
'exif-objectcycle-p' => 'ตอนเย็นเท่านั้น',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'ทิศทางจริง',
'exif-gpsdirection-m' => 'ทิศทางแม่เหล็ก',

'exif-dc-publisher' => 'ผู้เผยแพร่',

'exif-iimcategory-fin' => 'สภาพเศรษฐกิจและธุรกิจ',
'exif-iimcategory-edu' => 'การศึกษา',
'exif-iimcategory-evn' => 'สภาพแวดล้อม',
'exif-iimcategory-hth' => 'สุขภาพ',
'exif-iimcategory-pol' => 'การเมืองการปกครอง',
'exif-iimcategory-sci' => 'วิทยาศาสตร์และเทคโนโลยี',
'exif-iimcategory-spo' => 'กีฬา',
'exif-iimcategory-wea' => 'ภูมิอากาศ',

# External editor support
'edit-externally' => 'แก้ไขไฟล์นี้โดยใช้ซอฟต์แวร์ตัวอื่น',
'edit-externally-help' => '(ดู[//www.mediawiki.org/wiki/Manual:External_editors วิธีการตั้งค่า]สำหรับข้อมูลเพิ่มเติม)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'ทั้งหมด',
'namespacesall' => 'ทั้งหมด',
'monthsall' => 'ทั้งหมด',
'limitall' => 'ทั้งหมด',

# E-mail address confirmation
'confirmemail' => 'ยืนยันอีเมล',
'confirmemail_noemail' => 'ไม่ได้ใส่อีเมลในส่วน [[Special:Preferences|การตั้งค่าส่วนตัว]]',
'confirmemail_text' => 'ถ้าต้องการใช้คำสั่งพิเศษในด้านอีเมสล จำเป็นต้องใส่ค่าอีเมลก่อน โดยกดที่ปุ่มด้านล่าง และทางระบบจะส่งไปที่อีเมลนี้ ในอีเมลจะมีลิงก์ซึ่งมีรหัสสำหรับยืนยันอีเมล',
'confirmemail_pending' => 'รหัสยืนยันได้ถูกส่งไปที่อีเมลของคุณ ถ้าได้สร้างบัญชีเร็วนี้ ให้รอซักครู่ก่อนที่จะขอรหัสอีกครั้งหนึ่ง',
'confirmemail_send' => 'ส่งรหัสยืนยันผ่านทางอีเมล',
'confirmemail_sent' => 'อีเมลยืนยันได้ส่งเรียบร้อย',
'confirmemail_oncreate' => 'รหัสยืนยันได้ถูกส่งไปที่อีเมล อย่างไรก็ตามรหัสนี้ไม่จำเป็นสำหรับการล็อกอิน เว้นเสียแต่ว่าต้องการใช้คำสั่งพิเศษในด้านอีเมลของวิกินี้',
'confirmemail_sendfailed' => 'ขออภัย {{SITENAME}} ไม่สามารถส่งอีเมลให้คุณยืนยันการใช้งานได้
กรุณาตรวจสอบอีเมลว่าถูกต้อง และไม่มีอักขระที่ไม่สามารถใช้ได้

ข้อความตีกลับ: $1',
'confirmemail_invalid' => 'รหัสยืนยันไม่ถูกต้อง หรือรหัสหมดอายุ',
'confirmemail_needlogin' => 'ต้องทำการ $1 เพื่อยืนยันอีเมลของคุณว่าถูกต้อง',
'confirmemail_success' => 'อีเมลคุณได้รับการยืนยันแล้ว คุณอาจจะล็อกอินและมีความสุขกับวิกิ',
'confirmemail_loggedin' => 'อีเมลคุณได้รับการยืนยันแล้ว',
'confirmemail_error' => 'มีปัญหาเกิดขึ้นในการยืนยันอีเมล',
'confirmemail_subject' => '{{SITENAME}} ยืนยันการใช้งานอีเมล',
'confirmemail_body' => 'ใครบางคน ซึ่งอาจจะเป็นคุณ จากหมายเลขไอพี $1 ได้ลงทะเบียนในชื่อ "$2" โดยใช้อีเมลนี้ที่ {{SITENAME}}

เพื่อยืนยันว่าบัญชีผู้ใช้นี้เป็นของคุณอย่างแน่อน และใช้งานฟีเจอร์ส่งอีเมลหาผู้ใช้บน {{SITENAME}} กดลิงก์นี้ในเว็บเบราวเซอร์ของคุณ:

$3

ถ้าคุณ*ไม่*ได้ลงทะเบียน กรุณากดลิงก์ด้านล่างเพื่อยกเลิกการยืนยันที่อยู่อีเมล

$5

รหัสยืนยันนี้จะหมดอายุเมื่อ $4',
'confirmemail_body_changed' => 'ใครบางคน ซึ่งอาจจะเป็นคุณ จากเลขที่อยู่ไอพี $1 ได้เปลี่ยนที่อยู่อีเมลสำหรับบัญชีผู้ใช้ "$2" ไปยังที่อยู่นี้บน {{SITENAME}}

เพื่อยืนยันว่าบัญชีผู้ใช้นี้เป็นของคุณอย่างแน่นอนและเปิดใช้งานฟีเจอร์ส่งอีเมลหาผู้ใช้บน {{SITENAME}} อีกครั้งหนึ่ง กดลิงก์นี้ในเว็บเบราวเซอร์ของคุณ:

$3

ถ้าบัญชีผู้ใช้นี้*ไม่*ได้เป็นของคุณ กรุณากดลิงก์ด้านล่างเพื่อยกเลิกการยืนยันที่อยู่อีเมล

$5

รหัสยืนยันนี้จะหมดอายุเมื่อ $4',
'confirmemail_body_set' => 'ใครสักคนจากที่อยู่ไอพี $1 ซึ่งอาจเป็นคุณ
ได้กำหนดที่อยู่อีเมลของบัญชี "$2" บน {{SITENAME}} มายังที่อยู่อีเมลนี้

เพื่อยืนยันว่าบัญชีนี้เป็นของคุณจริง ๆ
และเปิดใช้งานคุณสมบัติอีเมลบน {{SITENAME}} อีกครั้ง
ให้เปิดลิงก์ต่อไปนี้ในเบราว์เซอร์ของคุณ:

$3

หากบัญชีดังกล่าว *ไม่ใช่* ของคุณ
ให้เปิดลิงก์ต่อไปนี้เพื่อยกเลิกการยืนยันที่อยู่อีเมล:

$5

รหัสยืนยันนี้จะหมดอายุเมื่อ $4',
'confirmemail_invalidated' => 'การยืนยันทางอีเมลได้ถูกยกเลิกแล้ว',
'invalidateemail' => 'ยกเลิกการยืนยันทางอีเมล',

# Scary transclusion
'scarytranscludedisabled' => '[ส่งค่าของอินเตอร์วิกิถูกระงับ]',
'scarytranscludefailed' => '[ไม่สามารถดึงแม่แบบมาได้สำหรับ $1]',
'scarytranscludetoolong' => '[ที่อยู่เว็บไซต์ยาวเกินไป]',

# Delete conflict
'deletedwhileediting' => "'''คำเตือน''': หน้านี้ถูกลบไปแล้วในขณะที่คุณกำลังแก้ไข!",
'confirmrecreate' => "ผู้ใช้ [[User:$1|$1]] ([[User talk:$1|พูดคุย]]) ได้ลบหน้านี้ในช่วงที่คุณกำลังแก้ไข ด้วยเหตุผลว่า:
: ''$2''
กรุณายืนยันว่าต้องการสร้างหน้านี้ขึ้นมาใหม่",
'confirmrecreate-noreason' => 'ผู้ใช้ [[User:$1|$1]] ([[User talk:$1|พูดคุย]]) ลบหน้านี้หลังคุณเริ่มแก้ไข โปรดยืนยันว่าคุณต้องการสร้างหน้านี้ใหม่จริง ๆ',
'recreate' => 'สร้างใหม่',

# action=purge
'confirm_purge_button' => 'ตกลง',
'confirm-purge-top' => 'ล้างแคชสำหรับหน้านี้หรือไม่',
'confirm-purge-bottom' => 'การกำจัดหน้าจะล้างแคชของหน้านี้และบังคับให้ฉบับปรับปรุงล่าสุดปรากฏขึ้น',

# action=watch/unwatch
'confirm-watch-button' => 'ตกลง',
'confirm-watch-top' => 'เพิ่มหน้านี้เข้าไปยังรายการเฝ้าดูของคุณหรือไม่',
'confirm-unwatch-button' => 'ตกลง',
'confirm-unwatch-top' => 'ลบหน้านี้ออกจากรายการเฝ้าดูของคุณ',

# Multipage image navigation
'imgmultipageprev' => '← หน้าก่อนหน้า',
'imgmultipagenext' => 'หน้าถัดไป →',
'imgmultigo' => 'ไป!',
'imgmultigoto' => 'ไปที่หน้า $1',

# Table pager
'ascending_abbrev' => 'หน้าไปหลัง',
'descending_abbrev' => 'หลังมาหน้า',
'table_pager_next' => 'หน้าถัดไป',
'table_pager_prev' => 'หน้าก่อนหน้า',
'table_pager_first' => 'หน้าแรก',
'table_pager_last' => 'หน้าสุดท้าย',
'table_pager_limit' => 'แสดง $1 รายการต่อหน้า',
'table_pager_limit_label' => 'รายการต่อหน้า:',
'table_pager_limit_submit' => 'ค้นหา',
'table_pager_empty' => 'ไม่พบที่ต้องการ',

# Auto-summaries
'autosumm-blank' => 'ทำหน้าว่าง',
'autosumm-replace' => "แทนทีข้อความทั้งหมดด้วย '$1'",
'autoredircomment' => 'เปลี่ยนทางไปที่ [[$1]]',
'autosumm-new' => "หน้าที่ถูกสร้างด้วย '$1'",

# Size units
'size-bytes' => '$1 ไบต์',
'size-kilobytes' => '$1 กิโลไบต์',
'size-megabytes' => '$1 เมกะไบต์',
'size-gigabytes' => '$1 จิกะไบต์',
'size-terabytes' => '$1 เทระไบต์',
'size-petabytes' => '$1 เพตะไบต์',
'size-exabytes' => '$1 เอกซะไบต์',
'size-zetabytes' => '$1 เซตตะไบต์',
'size-yottabytes' => '$1 ยอตตะไบต์',

# Bitrate units
'bitrate-bits' => '$1 บิตต่อวินาที',
'bitrate-kilobits' => '$1 กิโลบิตต่อวินาที',
'bitrate-megabits' => '$1 เมกะบิตต่อวินาที',
'bitrate-gigabits' => '$1 จิกะบิตต่อวินาที',
'bitrate-terabits' => '$1 เทระบิตต่อวินาที',
'bitrate-petabits' => '$1 เพตะบิตต่อวินาที',
'bitrate-exabits' => '$1 เอกซะบิตต่อวินาที',
'bitrate-zetabits' => '$1 เซตตะบิตต่อวินาที',
'bitrate-yottabits' => '$1 ยอตตะบิตต่อวินาที',

# Live preview
'livepreview-loading' => 'กำลังโหลด…',
'livepreview-ready' => 'กำลังโหลด… เสร็จ!',
'livepreview-failed' => 'แสดงตัวอย่างทันทีไม่ได้ ให้ลองใช้การแสดงตัวอย่างแบบธรรมดา',
'livepreview-error' => 'เชื่อมต่อไม่ได้: $1 "$2" ให้ลองใช้แสดงตัวอย่างแบบธรรมดา',

# Friendlier slave lag warnings
'lag-warn-normal' => 'การปรับปรุงที่ใหม่กว่า $1 วินาที อาจไม่แสดงผลในรายการนี้',
'lag-warn-high' => 'เนื่องจากปัญหาการล่าช้าของเซิร์ฟเวอร์ฐานข้อมูล การปรับปรุงที่ใหม่กว่า $1 วินาที อาจไม่แสดงผลในรายการนี้',

# Watchlist editor
'watchlistedit-numitems' => 'รายการเฝ้าดูมี $1 รายการ ไม่รวมหน้าพูดคุย',
'watchlistedit-noitems' => 'ไม่มีชื่อเรื่องใดในรายการเฝ้าดู',
'watchlistedit-normal-title' => 'แก้ไขรายการเฝ้าดู',
'watchlistedit-normal-legend' => 'ลบชื่อเรื่องออกจากรายการเฝ้าดู',
'watchlistedit-normal-explain' => 'ชื่อเรื่องในรายการเฝ้าดูของคุณแสดงด้านล่าง 
ถ้าต้องการลบออก ให้คลิกเลือกที่กล่องด้านข้างแต่ละชื่อ และคลิก "{{int:Watchlistedit-normal-submit}}" 
หรืออาจจะ[[Special:EditWatchlist/raw|แก้ไขรายการทั้งหมด]]',
'watchlistedit-normal-submit' => 'ลบชื่อเรื่อง',
'watchlistedit-normal-done' => '$1 รายการได้ถูกนำออกจากรายการเฝ้าดู:',
'watchlistedit-raw-title' => 'แก้ไขรายการเฝ้าดูทั้งหมด',
'watchlistedit-raw-legend' => 'แก้ไขรายการเฝ้าดูทั้งหมด',
'watchlistedit-raw-explain' => 'ชื่อเรื่องในรายการเฝ้าดูของคุณแสดงด้านล่าง ซึ่งสามารถเพิ่มหรือนำออกได้ หนึ่งชื่อเรื่องต่อแถว 
เมื่อเสร็จแล้ว ให้กด "{{int:Watchlistedit-raw-submit}}" 
ซึ่งอาจแก้ไขผ่าน [[Special:EditWatchlist|โปรแกรมแก้ไขข้อความทั่วไป]]',
'watchlistedit-raw-titles' => 'ชื่อเรื่อง:',
'watchlistedit-raw-submit' => 'ปรับรายการเฝ้าดู',
'watchlistedit-raw-done' => 'รายการเฝ้าดูของคุณได้ปรับแล้ว',
'watchlistedit-raw-added' => '$1 ชื่อเรื่องได้ถูกเพิ่มเข้าไป:',
'watchlistedit-raw-removed' => '$1 ชื่อเรื่องได้ถูกนำออกไป:',

# Watchlist editing tools
'watchlisttools-view' => 'ดูการเปลี่ยนแปลงที่เกี่ยวข้อง',
'watchlisttools-edit' => 'ดูและแก้ไขรายการเฝ้าดู',
'watchlisttools-raw' => 'แก้ไขรายการเฝ้าดูทั้งหมด',

# Signatures
'signature' => '[[{{ns:user}}:$1|$2]] ([[{{ns:user_talk}}:$1|พูดคุย]])',

# Core parser functions
'unknown_extension_tag' => 'ไม่รู้จัก tag ส่วนขยาย (extension tag) "$1"',
'duplicate-defaultsort' => 'คำเตือน: หลักเรียงลำดับปริยาย "$2" ได้ลบล้างหลักเรียงลำดับปริยาย "$1" ที่มีอยู่ก่อนหน้า',

# Special:Version
'version' => 'รุ่นซอฟต์แวร์',
'version-extensions' => 'ส่วนขยายเพิ่ม (extension) ที่ติดตั้ง',
'version-specialpages' => 'หน้าพิเศษ',
'version-parserhooks' => 'ฮุกที่มีการพาร์สค่า',
'version-variables' => 'ตัวแปร',
'version-antispam' => 'การป้องกันสแปม',
'version-skins' => 'รูปลักษณ์',
'version-other' => 'อื่นๆ',
'version-mediahandlers' => 'ตัวจัดการเกี่ยวกับสื่อ (media handler)',
'version-hooks' => 'ฮุก',
'version-extension-functions' => 'ฟังก์ชันจากส่วนขยายเพิ่ม (extension function)',
'version-parser-extensiontags' => 'แท็กที่มีการใช้งานของพาร์สเซอร์',
'version-parser-function-hooks' => 'ฮุกที่มีฟังก์ชันพาร์สเซอร์',
'version-hook-name' => 'ชื่อฮุก',
'version-hook-subscribedby' => 'สนับสนุนโดย',
'version-version' => '(รุ่น $1)',
'version-license' => 'สัญญาอนุญาต',
'version-poweredby-credits' => "วิกินี้จัดทำโดย '''[//www.mediawiki.org/ MediaWiki]''', สงวนลิขสิทธิ์ © 2001-$1 โดย $2",
'version-poweredby-others' => 'ผู้อื่น',
'version-license-info' => 'มีเดียวิกิเป็นซอฟต์แวร์เสรี คุณสามารถแจกจ่าย และ/หรือ แก้ไขได้ภายใต้เงื่อนไขแห่งสัญญาอนุญาตสาธารณะทั่วไปของกนูตามที่เผยแพร่โดยมูลนิธิซอฟต์แวร์เสรี ไม่ว่ารุ่นที่ 2 แห่งสัญญาอนุญาต หรือรุ่นภายหลังอื่นใด (ตามที่คุณเลือก)

มีเดียวิกิมีถูกแจกจ่ายด้วยหวังว่าจะเป็นประโยชน์ แต่ไม่มีการรับประกันใด ๆ ทั้งสิ้น ไม่มีแม้การรับประกันโดยนัยเพื่อการค้า หรือความเหมาะสมสำหรับวัตถุประสงค์เฉพาะ ดูรายละเอียดเพิ่มเติมที่สัญญาอนุญาตสาธารณะทั่วไปของกนู

คุณควรได้รับ[{{SERVER}}{{SCRIPTPATH}}/COPYING สำเนาของสัญญาอนุญาตสาธารณะทั่วไปของกนู]พร้อมกับโปรแกรมนี้ หากไม่พบ กรุณาเขียนจดหมายถึงบริษัทมูลนิธิซอฟต์แวร์เสรี ที่อยู่ 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA หรือ[//www.gnu.org/licenses/old-licenses/gpl-2.0.html อ่านออนไลน์]',
'version-software' => 'ซอฟต์แวร์ที่ติดตั้ง',
'version-software-product' => 'ชื่อ',
'version-software-version' => 'รุ่น',
'version-entrypoints-articlepath' => '[https://www.mediawiki.org/wiki/Manual:$wgArticlePath เส้นทางบทความ]',
'version-entrypoints-scriptpath' => '[https://www.mediawiki.org/wiki/Manual:$wgScriptPath เส้นทางสคริปต์]',

# Special:FilePath
'filepath' => 'พาธของไฟล์',
'filepath-page' => '{{ns:file}}:',
'filepath-submit' => 'ไป',
'filepath-summary' => 'หน้าพิเศษนี้คืนค่าเป็นเส้นทางเต็มของไฟล์
ไฟล์ภาพจะถูกแสดงในขนาดเต็ม และไฟล์ประเภทอื่นจะถูกเปิดด้วยโปรแกรมที่เกี่ยวข้องโดยตรง

กรุณาป้อนชื่อไฟล์โดยไม่มี "{{ns:file}}:" นำหน้า',

# Special:FileDuplicateSearch
'fileduplicatesearch' => 'ค้นหาไฟล์ที่ซ้ำซ้อน',
'fileduplicatesearch-summary' => 'ค้นหาไฟล์ที่ซ้ำกันตามค่าแฮช',
'fileduplicatesearch-legend' => 'ค้นหาไฟล์ที่ซ้ำกัน',
'fileduplicatesearch-filename' => 'ชื่อไฟล์ :',
'fileduplicatesearch-submit' => 'สืบค้น',
'fileduplicatesearch-info' => '$1 × $2 พิกเซล<br />ขนาดไฟล์: $3<br />ชนิดของไมม์: $4',
'fileduplicatesearch-result-1' => 'ไม่มีไฟล์ที่ซ้ำกับไฟล์ "$1"',
'fileduplicatesearch-result-n' => 'มี {{PLURAL:$2|ไฟล์เดียว|$2 ไฟล์}}ที่ซ้ำกับไฟล์ "$1"',
'fileduplicatesearch-noresults' => 'ไม่พบไฟล์ที่มีชื่อ "$1"',

# Special:SpecialPages
'specialpages' => 'หน้าพิเศษ',
'specialpages-note' => '----
* หน้าพิเศษปกติ
* <span class="mw-specialpagerestricted">หน้าพิเศษที่ถูกจำกัด</span>',
'specialpages-group-maintenance' => 'รายงานการเก็บกวาด',
'specialpages-group-other' => 'หน้าพิเศษอื่น ๆ',
'specialpages-group-login' => 'ล็อกอิน / สร้างบัญชี',
'specialpages-group-changes' => 'ปรับปรุงล่าสุดและปูมต่าง ๆ',
'specialpages-group-media' => 'รายงานเรื่องสื่อและการอัปโหลด',
'specialpages-group-users' => 'ผู้ใช้และสิทธิ',
'specialpages-group-highuse' => 'หน้าที่มีการใช้งานสูง',
'specialpages-group-pages' => 'รายชื่อหน้า',
'specialpages-group-pagetools' => 'เครื่องมือเกี่ยวกับหน้าต่าง ๆ',
'specialpages-group-wiki' => 'ข้อมูลและเครื่องมือ',
'specialpages-group-redirects' => 'เปลี่ยนทางหน้าพิเศษ',
'specialpages-group-spam' => 'เครื่องมือเกี่ยวกับสแปม',

# Special:BlankPage
'blankpage' => 'หน้าว่าง',
'intentionallyblankpage' => 'หน้านี้ถูกทิ้งว่างโดยเจตนา',

# External image whitelist
'external_image_whitelist' => '  #เว้นบรรทัดนี้ไว้จากการแก้ไข<pre>
#ใส่คำอธิบายปกติ (เฉพาะในส่วนที่อยู่ระหว่างสัญลักษณ์ //) ด้านล่างนี้
#ซึ่งคำอธิบายดังกล่าวจะถูกจับคู่กับ URL ของรูปถ่ายภายนอก
#ถ้าตรงกันจะปรากฏเป็นภาพออกมา หรือมิเช่นนั้นจะปรากฏเป็นลิงก์ไปยังรูปภาพนั้น
#บรรทัดที่ขึ้นต้นด้วย # จะถูกกำหนดเป็นหมายเหตุเพิ่มเติม
#กรุณาพิมพ์ตัวพิมพ์เล็ก-ใหญ่ตามชื่อไฟล์ให้ตรงกัน

#ใส่ส่วนของคำอธิบายด้านบนของบรรทัดนี้และเว้นบรรทัดนี้จากการแก้ไข</pre>',

# Special:Tags
'tags' => 'ป้ายกำกับการเปลี่ยนแปลง (ที่สามารถใช้ได้)',
'tag-filter' => 'ตัวกรอง[[Special:Tags|ป้ายกำกับ]]:',
'tag-filter-submit' => 'กรอง',
'tags-title' => 'ป้ายกำกับ',
'tags-intro' => 'หน้านี้แสดงรายการและความหมายของป้ายกำกับต่างๆ ที่ซอฟต์แวร์อาจจะใช้ทำเครื่องหมายกำกับการแก้ไข',
'tags-tag' => 'ชื่อป้ายกำกับ',
'tags-display-header' => 'สิ่งที่แสดงในรายการการเปลี่ยนแปลง',
'tags-description-header' => 'คำอธิบายความหมายโดยละเอียด',
'tags-hitcount-header' => 'การเปลี่ยนแปลงที่มีป้ายนี้กำกับ',
'tags-edit' => 'แก้ไข',
'tags-hitcount' => '$1 การเปลี่ยนแปลง',

# Special:ComparePages
'comparepages' => 'เปรียบเทียบหน้า',
'compare-selector' => 'เปรียบเทียบรุ่นของหน้า',
'compare-page1' => 'หน้า 1',
'compare-page2' => 'หน้า 2',
'compare-rev1' => 'รุ่น 1',
'compare-rev2' => 'รุ่น 2',
'compare-submit' => 'เปรียบเทียบ',
'compare-invalid-title' => 'ชื่อเรื่องที่คุณระบุไม่ถูกต้อง',
'compare-title-not-exists' => 'ชื่อเรื่องที่คุณระบุไม่มีอยู่',
'compare-revision-not-exists' => 'รุ่นที่คุณระบุไม่มีอยู่',

# Database error messages
'dberr-header' => 'วิกินี้กำลังประสบปัญหา',
'dberr-problems' => 'ขออภัย เว็บไซต์นี้กำลังพบกับข้อผิดพลาดทางเทคนิค',
'dberr-again' => 'กรุณารอสักครู่แล้วจึงโหลดใหม่',
'dberr-info' => '(ไม่สามารถติดต่อเซิร์ฟเวอร์ฐานข้อมูลได้: $1)',
'dberr-usegoogle' => 'คุณสามารถลองสืบค้นผ่านกูเกิลในระหว่างนี้',
'dberr-outofdate' => 'โปรดทราบว่าดัชนีเนื้อหาของเราในกูเกิลอาจล้าสมัยแล้ว',
'dberr-cachederror' => 'นี่คือข้อมูลคัดลอกชั่วคราวของหน้าที่ร้องขอ และอาจไม่เป็นปัจจุบัน',

# HTML forms
'htmlform-invalid-input' => 'เกิดปัญหาในค่าบางค่าที่คุณใส่เข้ามา',
'htmlform-select-badoption' => 'ค่าที่คุณใส่ไม่ใช่การตั้งค่าที่ถูกต้อง',
'htmlform-int-invalid' => 'ค่าที่คุณกำหนดไม่ใช่ตัวเลขจำนวนเต็ม',
'htmlform-float-invalid' => 'ค่าที่คุณกำนหดไม่ใช่ตัวเลข',
'htmlform-int-toolow' => 'ค่าที่คุณกำหนดนั้นต่ำกว่าค่าต่ำสุดที่ $1',
'htmlform-int-toohigh' => 'ค่าที่คุณกำหนดนั้นเกินกว่าค่าสูงสุดที่ $1',
'htmlform-required' => 'จำเป็นต้องกรอกข้อมูลนี้',
'htmlform-submit' => 'ส่งข้อมูล',
'htmlform-reset' => 'ยกเลิกการเปลื่ยนแปลง',
'htmlform-selectorother-other' => 'อื่น ๆ',

# SQLite database support
'sqlite-has-fts' => 'รุ่น $1 พร้อมการสนับสนุนการค้นหาข้อความแบบเต็ม',
'sqlite-no-fts' => 'รุ่น $1 โดยไม่มีการสนับสนุนการค้นหาข้อความแบบเต็ม',

# New logging system
'logentry-delete-delete' => '$1 ลบหน้า $3',
'logentry-delete-restore' => '$1 กู้คืนหน้า $3',
'logentry-delete-event' => '$1 เปลี่ยนทัศนวิสัยของ $5 รายการปูมใน $3: $4',
'logentry-delete-revision' => '$1 เปลี่ยนแปลงทัศนวิสัยของ $5 รุ่น ในหน้า $3: $4',
'logentry-delete-event-legacy' => '$1 เปลี่ยนแปลงทัศนวิสัยของเหตุการณ์ปูมในหน้า $3',
'logentry-delete-revision-legacy' => '$1 เปลี่ยนแปลงทัศนวิสัยของรุ่นในหน้า $3',
'logentry-suppress-delete' => '$1 ระงับหน้า $3',
'logentry-suppress-event' => '$1 เปลี่ยนทัศนวิสัยอย่างลับ ๆ ของ $5 รายการปูมบน $3: $4',
'logentry-suppress-revision' => '$1 เปลี่ยนทัศนวิสัยอย่างลับ ๆ ของ $5 รุ่นบนหน้า $3: $4',
'logentry-suppress-event-legacy' => '$1 เปลี่ยนทัศนวิสัยอย่างลับ ๆ ของรายการปูมบน $3',
'logentry-suppress-revision-legacy' => '$1 เปลี่ยนทัศนวิสัยอย่างลับ ๆ ของรุ่นบนหน้า $3',
'revdelete-content-hid' => 'เนื้อหาถูกซ่อน',
'revdelete-summary-hid' => 'คำอธิบายอย่างย่อถูกซ่อน',
'revdelete-uname-hid' => 'ชื่อผู้ใช้ถูกซ่อน',
'revdelete-content-unhid' => 'เนื้อหาถูกแสดง',
'revdelete-summary-unhid' => 'คำอธิบายอย่างย่อถูกแสดง',
'revdelete-uname-unhid' => 'ชื่อผู้ใช้ถูกแสดง',
'revdelete-restricted' => 'เพิ่มการจำกัดกับผู้ดูแลระบบ',
'revdelete-unrestricted' => 'ยกเลิกการจำกัดแก่ผู้ดูแลระบบ',
'logentry-move-move' => '$1 ย้ายหน้า $3 ไปยัง $4',
'logentry-move-move-noredirect' => '$1 ย้ายหน้า $3 ไปยัง $4 (ไม่สร้างหน้าเปลี่ยนทางตามมา)',
'logentry-move-move_redir' => '$1 ย้ายหน้า $3 ไปยัง $4 ทับหน้าเปลี่ยนทาง',
'logentry-move-move_redir-noredirect' => '$1 ย้ายหน้า $3 ไปยัง $4 ทับหน้าเปลี่ยนทาง (ไม่สร้างหน้าเปลี่ยนทางตามมา)',
'logentry-patrol-patrol' => '$1 ทำเครื่องหมายว่ารุ่น $4 ของหน้า $3 ได้รับการตรวจสอบแล้ว',
'logentry-patrol-patrol-auto' => '$1 ทำเครื่องหมายโดยอัตโนมัติว่ารุ่น $4 ของหน้า $3 ได้รับการตรวจสอบแล้ว',
'logentry-newusers-newusers' => 'บัญชีผู้ใช้ $1 ถูกสร้างขึ้น',
'logentry-newusers-create' => 'บัญชีผู้ใช้ $1 ถูกสร้างขึ้น',
'logentry-newusers-create2' => 'บัญชีผู้ใช้ $3 ถูกสร้างขึ้นโดย $1',
'logentry-newusers-autocreate' => 'บัญชี $1 ถูกสร้างขึ้นอัตโนมัติ',
'newuserlog-byemail' => 'รหัสผ่านถูกส่งทางอีเมล',

# Feedback
'feedback-message' => 'ข้อความ:',
'feedback-cancel' => 'ยกเลิก',
'feedback-submit' => 'ส่งคำติชม',
'feedback-adding' => 'เพิ่มคำติชมเข้าไปที่หน้า...',
'feedback-close' => 'เสร็จสิ้น',

# Search suggestions
'searchsuggest-search' => 'ค้นหา',
'searchsuggest-containing' => 'ประกอบไปด้วย...',

# API errors
'api-error-empty-file' => 'ไฟล์ที่คุณส่งมานั้นว่าง',
'api-error-emptypage' => 'ไม่อนุญาตให้สร้างหน้าใหม่ที่ว่าง',
'api-error-file-too-large' => 'ไฟล์ที่คุณส่งมาใหญ่เกินไป',
'api-error-filename-tooshort' => 'ชื่อไฟล์สั้นเกินไป',
'api-error-filetype-banned' => 'ไฟล์ประเภทนี้ถูกห้าม',
'api-error-mustbeloggedin' => 'กรุณาลงชื่อเข้าใช้เพื่ออัปโหลดไฟล์',

# Durations
'duration-seconds' => '$1 วินาที',
'duration-minutes' => '$1 นาที',
'duration-hours' => '$1 ชั่วโมง',
'duration-days' => '$1 วัน',
'duration-weeks' => '$1 สัปดาห์',
'duration-years' => '$1 ปี',
'duration-decades' => '$1 ทศวรรษ',
'duration-centuries' => '$1 ศตวรรษ',
'duration-millennia' => '$1 สหัสวรรษ',

);
