<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_BASIC_SEARCH' => 'סינון מהיר',
    'LBL_ADVANCED_SEARCH' => 'מסנן מתקדם',
    'LBL_BASIC_TYPE' => 'סוג בסיסי',
    'LBL_ADVANCED_TYPE' => 'סוג מתקדם',
    'LBL_SYSOPTS_2' => 'באיזה סוג מסד נתונים ישמש עבור מופע SuiteCRM שאתה עומד להתקין?',
    'LBL_SYSOPTS_DB' => 'ציין סוג מסד נתונים',
    'LBL_SYSOPTS_DB_TITLE' => 'סוג מסד נתונים',
    'LBL_SYSOPTS_ERRS_TITLE' => 'אנא תקן את השגיאות הבאות לפני שתמשיך:',
    'ERR_DB_VERSION_FAILURE' => 'לא ניתן לבדוק את גרסת מסד הנתונים.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'ספק את שם המשתמש עבור משתמש המנהל של SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'ספק את הסיסמה עבור משתמש המנהל של SuiteCRM. ',

    'ERR_CHECKSYS' => 'אותרו שגיאות במהלך בדיקת התאימות. על מנת שהתקנת SuiteCRM שלך תפעל כראוי, אנא בצע את הצעדים המתאימים כדי לטפל בבעיות המפורטות להלן ולחץ על כפתור הבדיקה מחדש, או נסה להתקין שוב.',
    'ERR_CHECKSYS_CALL_TIME' => 'הפניה לאפשר העברת זמן שיחה מופעלת (יש להגדיר זאת ככבוי ב-php.ini)',
    'ERR_CHECKSYS_CURL' => 'לא נמצא: מתזמן SuiteCRM יפעל עם פונקציונליות מוגבלת.',
    'ERR_CHECKSYS_IMAP' => 'לא נמצא: דואר נכנס ומסעות פרסום (דוא"ל) דורשים את ספריות ה-IMAP. שניהם לא יהיו פונקציונליים.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (הגדר זאת ל',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M או יותר בקובץ php.ini שלך)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'אזהרה: לא ניתן לכתיבה',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'גרסת PHP שלך אינה נתמכת על ידי SuiteCRM. יהיה עליך להתקין גרסה התואמת לאפליקציית SuiteCRM. אנא עיין במטריצת התאימות בהערות הגרסה עבור גרסאות PHP נתמכות. הגרסה שלך היא ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'הגרסה שלך של IIS אינה נתמכת על ידי SuiteCRM. יהיה עליך להתקין גרסה התואמת לאפליקציית SuiteCRM. אנא עיין במטריצת התאימות בהערות הגרסה עבור גרסאות IIS נתמכות. הגרסה שלך היא ',
    'ERR_CHECKSYS_FASTCGI' => 'אנו מזהים שאינך משתמש במיפוי FastCGI של מטפל עבור PHP. יהיה עליך להתקין/להגדיר גרסה התואמת לאפליקציית SuiteCRM. אנא עיין במטריצת התאימות בהערות הגרסה עבור גרסאות נתמכות. ראה <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> לפרטים ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'לחוויה אופטימלית באמצעות IIS/FastCGI sapi, הגדר את fastcgi.logging ל-0 בקובץ php.ini שלך.',
    'LBL_DB_UNAVAILABLE' => 'מסד הנתונים אינו זמין',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'לא נמצאה תמיכת מסד נתונים. אנא ודא שיש לך את מנהלי ההתקן הדרושים עבור אחד מסוגי מסדי הנתונים הנתמכים הבאים: MySQL או MS SQLServer. ייתכן שיהיה עליך לבטל את ההערה לסיומת בקובץ php.ini, או לבצע קומפילציה מחדש עם הקובץ הבינארי הנכון, בהתאם לגרסת ה-PHP שלך. אנא עיין במדריך ה-PHP שלך למידע נוסף על איך להפעיל תמיכה במסד נתונים.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'לא נמצאו פונקציות המשויכות לספריות מנתח XML הדרושות ליישום SuiteCRM. ייתכן שיהיה עליך לבטל את ההערה לסיומת בקובץ php.ini, או לבצע קומפילציה מחדש עם הקובץ הבינארי הנכון, בהתאם לגרסת ה-PHP שלך. אנא עיין במדריך ה-PHP שלך למידע נוסף.',
    'ERR_CHECKSYS_MBSTRING' => 'לא נמצאו פונקציות המשויכות ל-Multibyte Strings PHP (mbstring) הדרושות ליישום SuiteCRM. <br/><br/>באופן כללי, מודול ה-mbstring אינו מופעל כברירת מחדל ב-PHP ויש להפעיל אותו באמצעות --enable-mbstring כאשר ה-PHP הבינארי בנוי. אנא עיין במדריך ה-PHP שלך למידע נוסף על איך להפעיל תמיכה ב-mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'קובץ התצורה קיים אך אינו ניתן לכתיבה. נא לנקוט בצעדים הדרושים כדי להפוך את הקובץ לניתן לכתיבה. בהתאם למערכת ההפעלה שלך, זה עשוי לדרוש ממך לשנות את ההרשאות על ידי הפעלת chmod 766, או לחיצה ימנית על שם הקובץ כדי לגשת למאפיינים ולבטל את הסימון באפשרות לקריאה בלבד.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'קובץ עקיפת התצורה קיים אך אינו ניתן לכתיבה. נא לנקוט בצעדים הדרושים כדי להפוך את הקובץ לניתן לכתיבה. בהתאם למערכת ההפעלה שלך, זה עשוי לדרוש ממך לשנות את ההרשאות על ידי הפעלת chmod 766, או לחיצה ימנית על שם הקובץ כדי לגשת למאפיינים ולבטל את הסימון באפשרות לקריאה בלבד.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'המדריך המותאם אישית קיים אך אינו ניתן לכתיבה. ייתכן שיהיה עליך לשנות הרשאות עליו (chmod 766) או ללחוץ עליו באמצעות קליק ימני ולבטל את הסימון באפשרות לקריאה בלבד, בהתאם למערכת ההפעלה שלך. אנא בצע את הצעדים הדרושים כדי להפוך את הקובץ לניתן לכתיבה.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "הקבצים או הספריות המפורטים להלן אינם ניתנים לכתיבה או שהם חסרים ואינם ניתנים ליצירה. בהתאם למערכת ההפעלה שלך, תיקון זה עשוי לדרוש ממך לשנות הרשאות בקבצים או בספריית האב (chmod 755), או כדי לחץ לחיצה ימנית על ספריית האב ובטל את הסימון של האפשרות 'לקריאה בלבד' והחל אותה על כל תיקיות המשנה.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "פונקציות המשויכות לספריות מנתח JSON הדרושות לאפליקציית SuiteCRM לא נמצאו. ייתכן שיהיה עליך לבטל את ההערה לסיומת בקובץ php.ini, או לבצע קומפילציה מחדש עם הקובץ הבינארי הנכון, בהתאם לגרסה שלך של PHP. אנא עיין במדריך ה-PHP שלך למידע נוסף.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'עקוף תצורה',
    'ERR_CHECKSYS_SAFE_MODE' => 'מצב בטוח מופעל (ייתכן שתרצה להשבית ב-php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'תמיכה ב-ZLib לא נמצאה: SuiteCRM קוטפת יתרונות ביצועים אדירים עם דחיסת zlib.',
    'ERR_CHECKSYS_ZIP' => 'לא נמצאה תמיכת ZIP: SuiteCRM זקוקה לתמיכת ZIP על מנת לעבד קבצים דחוסים.',
    'ERR_CHECKSYS_PCRE' => 'ספריית PCRE לא נמצאה: SuiteCRM זקוקה לספריית PCRE כדי לעבד סגנון Perl של התאמת דפוסי ביטוי רגולרי.',
    'ERR_CHECKSYS_PCRE_VER' => 'גרסת ספריית PCRE: SuiteCRM זקוקה לספריית PCRE 7.0 ומעלה כדי לעבד סגנון Perl של התאמת דפוסי ביטוי רגולרי.',
    'ERR_DB_ADMIN' => 'שם המשתמש ו/או הסיסמה של מנהל מסד הנתונים שסופקו אינם חוקיים, ולא ניתן היה ליצור חיבור למסד הנתונים. נא להזין שם משתמש וסיסמה חוקיים. (שגיאה: ',
    'ERR_DB_ADMIN_MSSQL' => 'שם המשתמש ו/או הסיסמה של מנהל מסד הנתונים שסופקו אינם חוקיים, ולא ניתן היה ליצור חיבור למסד הנתונים. נא להזין שם משתמש וסיסמה חוקיים.',
    'ERR_DB_EXISTS_NOT' => 'מסד הנתונים שצוין לא קיים.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'מסד נתונים כבר קיים עם נתוני תצורה. כדי להפעיל התקנה עם מסד הנתונים הנבחר, אנא הפעל מחדש את ההתקנה ובחר: "שחרר וצור מחדש טבלאות קיימות של SuiteCRM?". כדי לשדרג, השתמש באשף השדרוג במסוף הניהול. אנא קרא את תיעוד השדרוג שנמצא <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">כאן</a>.',
    'ERR_DB_EXISTS' => 'שם מסד הנתונים שסופק כבר קיים -- לא יכול ליצור עוד אחד באותו שם.',
    'ERR_DB_EXISTS_PROCEED' => 'שם מסד הנתונים שסופק כבר קיים. אתה יכול<br>1. לחץ על כפתור הקודמת ובחר שם מסד נתונים חדש <br>2. לחץ על הבא והמשך אך כל הטבלאות הקיימות במסד נתונים זה יוסרו. <strong>משמעות הדבר היא שהטבלאות והנתונים שלך יהיו מפוצצים.</strong>',
    'ERR_DB_HOSTNAME' => 'שם המארח לא יכול להיות ריק.',
    'ERR_DB_INVALID' => 'נבחר סוג מסד נתונים לא חוקי.',
    'ERR_DB_LOGIN_FAILURE' => 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה שסופקו אינם חוקיים, ולא ניתן היה ליצור חיבור למסד הנתונים. נא להזין מארח, שם משתמש וסיסמה חוקיים',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה שסופקו אינם חוקיים, ולא ניתן היה ליצור חיבור למסד הנתונים. נא להזין מארח, שם משתמש וסיסמה חוקיים',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה שסופקו אינם חוקיים, ולא ניתן היה ליצור חיבור למסד הנתונים. נא להזין מארח, שם משתמש וסיסמה חוקיים',
    'ERR_DB_MYSQL_VERSION' => 'גרסת MySQL שלך (%s) אינה נתמכת על ידי SuiteCRM. יהיה עליך להתקין גרסה התואמת לאפליקציית SuiteCRM. אנא עיין במטריצת התאימות בהערות הגרסה עבור גרסאות MySQL נתמכות.',
    'ERR_DB_NAME' => 'שם מסד הנתונים לא יכול להיות ריק.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "שם מסד הנתונים אינו יכול להכיל '\\', '/' או '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "שם מסד הנתונים אינו יכול להתחיל במספר, '#' או '@' ואינו יכול להכיל רווח, '\"', \"'\", '*', '/', '\' , '?', ':', '<', '>', '&', '!', או '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "שם מסד הנתונים יכול להכיל רק תווים אלפאנומריים והסמלים '#', '_' או '$'",
    'ERR_DB_PASSWORD' => 'הסיסמאות שסופקו עבור מנהל מסד הנתונים של SuiteCRM אינן תואמות. נא להזין מחדש את אותן סיסמאות בשדות הסיסמה.',
    'ERR_DB_PRIV_USER' => 'ספק שם משתמש של מנהל מסד נתונים. המשתמש נדרש לחיבור הראשוני למסד הנתונים.',
    'ERR_DB_USER_EXISTS' => 'שם משתמש עבור משתמש מסד הנתונים של SuiteCRM כבר קיים -- לא יכול ליצור עוד אחד עם אותו שם. נא להזין שם משתמש חדש.',
    'ERR_DB_USER' => 'הזן שם משתמש עבור מנהל מסד הנתונים של SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'אנא תקן את השגיאות הבאות לפני שתמשיך:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'הסיסמאות שסופקו עבור משתמש מסד הנתונים של SuiteCRM אינן תואמות. נא להזין מחדש את אותן סיסמאות בשדות הסיסמה.',
    'ERR_ERROR_GENERAL' => 'השגיאות הבאות נתקלו:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'לא ניתן למחוק את הקובץ: ',
    'ERR_LANG_MISSING_FILE' => 'לא ניתן למצוא את הקובץ: ',
    'ERR_LANG_NO_LANG_FILE' => 'לא נמצא קובץ ערכת שפה ב- include/language in: ',
    'ERR_LANG_UPLOAD_1' => 'הייתה בעיה בהעלאה שלך. בבקשה נסה שוב.',
    'ERR_LANG_UPLOAD_2' => 'חבילות שפה חייבות להיות ארכיון ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP לא הצליח להעביר את הקובץ הזמני לספריית השדרוג.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'ספריית היומן שסופקה אינה ספריה חוקית.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'ספריית היומן שסופקה אינה ספריה ניתנת לכתיבה.',
    'ERR_NO_DIRECT_SCRIPT' => 'לא ניתן לעבד סקריפט ישירות.',
    'ERR_NO_SINGLE_QUOTE' => 'לא ניתן להשתמש במרכאות בודדות עבור ',
    'ERR_PASSWORD_MISMATCH' => 'הסיסמאות שסופקו למשתמש המנהל של SuiteCRM אינן תואמות. נא להזין מחדש את אותן סיסמאות בשדות הסיסמה.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'לא ניתן לכתוב לקובץ <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'תוכל להמשיך בהתקנה זו על ידי יצירה ידנית של קובץ config.php והדבקת מידע התצורה למטה בקובץ config.php. עם זאת, אתה <strong>חייב </strong>ליצור את הקובץ config.php לפני שתמשיך לשלב הבא.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'זכרת ליצור את הקובץ config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'אזהרה: לא ניתן היה לכתוב לקובץ config.php. אנא ודא שהוא קיים.',
    'ERR_PERFORM_HTACCESS_1' => 'לא ניתן לכתוב ל',
    'ERR_PERFORM_HTACCESS_2' => 'קובץ.',
    'ERR_PERFORM_HTACCESS_3' => 'אם אתה רוצה לאבטח את קובץ היומן שלך מלהיות נגיש דרך הדפדפן, צור קובץ .htaccess בספריית היומן שלך עם השורה:',
    'ERR_PERFORM_NO_TCPIP' => '<b>לא הצלחנו לזהות חיבור לאינטרנט.</b> כאשר יש לך חיבור, אנא בקר ב<a href="https://www.suitecrm.com/">https:/ /www.suitecrm.com/</a> כדי להירשם עם SuiteCRM. על ידי ליידע אותנו קצת על האופן שבו החברה שלך מתכננת להשתמש ב-SuiteCRM, נוכל להבטיח שאנחנו תמיד מספקים את האפליקציה המתאימה לצרכי העסק שלך.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'ספריית ההפעלה שסופקה אינה ספריה חוקית.',
    'ERR_SESSION_DIRECTORY' => 'ספריית הפעלות שסופקה אינה ספריה ניתנת לכתיבה.',
    'ERR_SESSION_PATH' => 'נדרש נתיב הפעלה אם ברצונך לציין נתיב משלך.',
    'ERR_SI_NO_CONFIG' => 'לא כללת את config_si.php בשורש המסמך, או שלא הגדרת $sugar_config_si ב-config.php',
    'ERR_SITE_GUID' => 'מזהה יישום נדרש אם ברצונך לציין משלך.',
    'ERROR_SPRITE_SUPPORT' => "כרגע איננו יכולים לאתר את ספריית GD, כתוצאה מכך לא תוכל להשתמש בפונקציונליות CSS Sprite."
    'ERR_UPLOAD_MAX_FILESIZE' => 'אזהרה: יש לשנות את תצורת ה-PHP שלך כדי לאפשר העלאת קבצים של לפחות 6MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'העלה גודל קובץ',
    'ERR_URL_BLANK' => 'ספק את כתובת האתר הבסיסית עבור מופע SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'לא ניתן היה לאתר את רשומת ההתקנה של',
    'ERROR_MANIFEST_TYPE' => 'קובץ המניפסט חייב לציין את סוג החבילה.',
    'ERROR_PACKAGE_TYPE' => 'קובץ מניפסט מציין סוג חבילה לא מזוהה',
    'ERROR_VERSION_INCOMPATIBLE' => 'הקובץ שהועלה אינו תואם לגרסה זו של SuiteCRM: ',

    'LBL_BACK' => 'חזרה',
    'LBL_CANCEL' => 'בטל',
    'LBL_ACCEPT' => 'אני מסכים',
    'LBL_CHECKSYS_CACHE' => 'תתי ספריות מטמון לכתיבה',
    'LBL_DROP_DB_CONFIRM' => 'שם מסד הנתונים שסופק כבר קיים.<br>אתה יכול:<br>1. לחץ על כפתור ביטול ובחר שם מסד נתונים חדש, או <br>2. לחץ על כפתור קבל והמשך. כל הטבלאות הקיימות במסד הנתונים יוסרו. <strong>משמעות הדבר היא שכל הטבלאות והנתונים הקיימים יתפוצצו.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'רכיב',
    'LBL_CHECKSYS_CONFIG' => 'קובץ תצורה SuiteCRM לכתיבה (config.php)',
    'LBL_CHECKSYS_CURL' => 'מודול cURL',
    'LBL_CHECKSYS_CUSTOM' => 'מדריך מותאם אישית שניתן לכתיבה',
    'LBL_CHECKSYS_DATA' => 'תתי ספריות נתונים לכתיבה',
    'LBL_CHECKSYS_IMAP' => 'מודול IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'מודול מחרוזות MB',
    'LBL_CHECKSYS_MEM_OK' => 'בסדר (ללא הגבלה)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'בסדר (ללא הגבלה)',
    'LBL_CHECKSYS_MEM' => 'מגבלת זיכרון PHP',
    'LBL_CHECKSYS_MODULE' => 'תתי ספריות וקבצים של מודולים הניתנים לכתיבה',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'לא זמין',
    'LBL_CHECKSYS_OK' => 'בסדר',
    'LBL_CHECKSYS_PHP_INI' => 'מיקום קובץ התצורה של PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'בסדר (ver ',
    'LBL_CHECKSYS_PHPVER' => 'גרסת PHP',
    'LBL_CHECKSYS_IISVER' => 'גרסת IIS',
    'LBL_CHECKSYS_JSON' => 'ניתוח JSON',
    'LBL_CHECKSYS_RECHECK' => 'בדוק מחדש',
    'LBL_CHECKSYS_STATUS' => 'סטטוס',
    'LBL_CHECKSYS_TITLE' => 'אישור בדיקת מערכת',
    'LBL_CHECKSYS_XML' => 'ניתוח XML',
    'LBL_CHECKSYS_ZLIB' => 'מודול דחיסה ZLIB',
    'LBL_CHECKSYS_ZIP' => 'מודול טיפול ב-ZIP',
    'LBL_CHECKSYS_PCRE' => 'ספריית PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'אנא תקן את הקבצים או הספריות הבאים לפני שתמשיך:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'אנא תקן את ספריות המודול הבאות ואת הקבצים שמתחתיהם לפני שתמשיך:',
    'LBL_CHECKSYS_UPLOAD' => 'ספריית העלאות לכתיבה',
    'LBL_CLOSE' => 'סגור',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'נוצר',
    'LBL_CONFIRM_DB_TYPE' => 'סוג מסד נתונים',
    'LBL_CONFIRM_NOT' => 'לא',
    'LBL_CONFIRM_TITLE' => 'אשר הגדרות',
    'LBL_CONFIRM_WILL' => 'יעשה',
    'LBL_DBCONF_DB_DROP' => 'שחרר טבלאות',
    'LBL_DBCONF_DB_NAME' => 'שם מסד הנתונים',
    'LBL_DBCONF_DB_PASSWORD' => 'סיסמת משתמש במסד הנתונים של SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'הזן מחדש את סיסמת המשתמש של מסד הנתונים של SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'משתמש במסד הנתונים של SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'משתמש במסד הנתונים של SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'שם משתמש של מנהל מסד נתונים',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'סיסמת מנהל מסד נתונים',
    'LBL_DBCONF_COLLATION' => 'איסוף',
    'LBL_DBCONF_CHARSET' => 'קבוצת תווים',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'תצורת מסד נתונים מתקדמת',
    'LBL_DBCONF_DEMO_DATA' => 'לאכלס מסד נתונים עם נתוני הדגמה?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'בחר נתוני הדגמה',
    'LBL_DBCONF_HOST_NAME' => 'שם מארח',
    'LBL_DBCONF_HOST_INSTANCE' => 'מופע מארח',
    'LBL_DBCONFIG_SECURITY' => 'למטרות אבטחה, אתה יכול לציין משתמש מסד נתונים בלעדי להתחבר למסד הנתונים של SuiteCRM. משתמש זה חייב להיות מסוגל לכתוב, לעדכן ולאחזר נתונים במסד הנתונים של SuiteCRM שייווצר עבור מופע זה. משתמש זה יכול להיות מנהל מסד הנתונים שצוין לעיל, או שאתה יכול לספק מידע חדש או קיים על משתמש מסד הנתונים.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'ספק משתמש קיים',
    'LBL_DBCONFIG_CREATE_DD' => 'הגדר משתמש ליצירה',
    'LBL_DBCONFIG_SAME_DD' => 'זהה למשתמש מנהל',
    'LBL_DBCONF_TITLE' => 'תצורת מסד נתונים',
    'LBL_DBCONF_TITLE_NAME' => 'ספק שם מסד נתונים',
    'LBL_DBCONF_TITLE_USER_INFO' => 'ספק מידע משתמש במסד הנתונים',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'סיסמה',
    'LBL_DISABLED_DESCRIPTION_2' => 'לאחר ששינוי זה בוצע, תוכל ללחוץ על כפתור "התחל" למטה כדי להתחיל בהתקנה. <i>לאחר השלמת ההתקנה, תרצה לשנות את הערך של \'installer_locked\' ל-\'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'תוכנית ההתקנה כבר הופעלה פעם אחת. כאמצעי בטיחות, הוא הושבת מהפעלתו בפעם השנייה. אם אתה בטוח לחלוטין שברצונך להפעיל אותו שוב, אנא עבור לקובץ config.php שלך ואתר (או הוסף) משתנה בשם \'installer_locked\' והגדר אותו ל-\'false\'. השורה צריכה להיראות כך:',
    'LBL_DISABLED_HELP_1' => 'לעזרה בהתקנה, בקר ב-SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'פורומי תמיכה',
    'LBL_DISABLED_TITLE_2' => 'התקנת SuiteCRM הושבתה',
    'LBL_HELP' => 'עזרה',
    'LBL_INSTALL' => 'התקן',
    'LBL_INSTALL_TYPE_TITLE' => 'אפשרויות התקנה',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'בחר סוג התקנה',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>התקנה רגילה</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>התקנה מותאמת אישית</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'דורש מידע מינימלי עבור ההתקנה. מומלץ למשתמשים חדשים.',
    'LBL_INSTALL_TYPE_MSG3' => 'מספק אפשרויות נוספות להגדרה במהלך ההתקנה. רוב האפשרויות הללו זמינות גם לאחר ההתקנה במסכי הניהול. מומלץ למשתמשים מתקדמים.',
    'LBL_LANG_1' => 'כדי להשתמש בשפה ב-SuiteCRM שאינה שפת ברירת המחדל (ארה"ב-אנגלית), אתה יכול להעלות ולהתקין את ערכת השפה בשלב זה. תוכל להעלות ולהתקין חבילות שפה גם מתוך אפליקציית SuiteCRM. אם תרצה לדלג על שלב זה, לחץ על הבא.',
    'LBL_LANG_BUTTON_COMMIT' => 'התקן',
    'LBL_LANG_BUTTON_REMOVE' => 'הסר',
    'LBL_LANG_BUTTON_UNINSTALL' => 'הסר התקנה',
    'LBL_LANG_BUTTON_UPLOAD' => 'העלה',
    'LBL_LANG_NO_PACKS' => 'אין',
    'LBL_LANG_PACK_INSTALLED' => 'חבילות השפה הבאות הותקנו: ',
    'LBL_LANG_PACK_READY' => 'חבילות השפה הבאות מוכנות להתקנה: ',
    'LBL_LANG_SUCCESS' => 'חבילת השפה הועלתה בהצלחה.',
    'LBL_LANG_TITLE' => 'חבילת שפה',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'מתקין את SuiteCRM כעת. זה עשוי להימשך עד כמה דקות.',
    'LBL_LANG_UPLOAD' => 'העלה ערכת שפה',
    'LBL_LICENSE_ACCEPTANCE' => 'קבלת רישיון',
    'LBL_LICENSE_CHECKING' => 'בודק תאימות במערכת.',
    'LBL_LICENSE_CHKENV_HEADER' => 'בודק סביבה',
    'LBL_LICENSE_CHKDB_HEADER' => 'אימות אישורי DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'מערכת עברה בדיקת תאימות.',
    'LBL_CREATE_CACHE' => 'מתכונן להתקנה...',
    'LBL_LICENSE_REDIRECT' => 'מפנה מחדש ב',
    'LBL_LICENSE_I_ACCEPT' => 'אני מסכים',
    'LBL_LICENSE_PRINTABLE' => ' תצוגה להדפסה ',
    'LBL_PRINT_SUMM' => 'הדפס סיכום',
    'LBL_LICENSE_TITLE_2' => 'רישיון SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'דייוויד',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'ד"ר',

    'LBL_ML_ACTION' => 'פעולה',
    'LBL_ML_DESCRIPTION' => 'תיאור',
    'LBL_ML_INSTALLED' => 'תאריך ההתקנה',
    'LBL_ML_NAME' => 'שם',
    'LBL_ML_PUBLISHED' => 'תאריך פרסום',
    'LBL_ML_TYPE' => 'סוג',
    'LBL_ML_UNINSTALLABLE' => 'ניתן להסרה',
    'LBL_ML_VERSION' => 'גרסה',
    'LBL_MSSQL' => 'שרת SQL',
    'LBL_MSSQL2' => 'שרת SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'שרת SQL (מנהל התקן של Microsoft SQL Server עבור PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (סיומת mysqli)',
    'LBL_NEXT' => 'הבא',
    'LBL_NO' => 'לא',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'הגדרת סיסמת מנהל האתר',
    'LBL_PERFORM_CONFIG_PHP' => 'יוצר קובץ תצורה של SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>יצירת מסד הנתונים</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>ב</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'יוצר את שם המשתמש והסיסמה של מסד הנתונים...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'יצירת נתוני SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'יצירת משימות מתזמן ברירת מחדל',
    'LBL_PERFORM_DEFAULT_USERS' => 'יצירת משתמשי ברירת מחדל',
    'LBL_PERFORM_DEMO_DATA' => 'אכלוס טבלאות מסד הנתונים בנתוני הדגמה (זה עשוי להימשך זמן מה)',
    'LBL_PERFORM_DONE' => 'בוצע<br>',
    'LBL_PERFORM_FINISH' => 'סיום',
    'LBL_PERFORM_OUTRO_1' => 'ההגדרה של SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' הושלם כעת!',
    'LBL_PERFORM_OUTRO_3' => 'זמן כולל: ',
    'LBL_PERFORM_OUTRO_4' => ' שניות.',
    'LBL_PERFORM_OUTRO_5' => 'שימוש בזיכרון משוער: ',
    'LBL_PERFORM_OUTRO_6' => ' בייטים.',
    'LBL_PERFORM_SUCCESS' => 'הצלחה!',
    'LBL_PERFORM_TABLES' => 'יצירת טבלאות יישומי SuiteCRM, טבלאות ביקורת ומטא נתונים של קשרים',
    'LBL_PERFORM_TITLE' => 'בצע הגדרה',
    'LBL_PRINT' => 'הדפס',
    'LBL_REG_CONF_1' => 'אנא מלא את הטופס הקצר למטה כדי לקבל הודעות על מוצרים, חדשות הדרכה, הצעות מיוחדות והזמנות לאירועים מיוחדים מ-SuiteCRM. איננו מוכרים, משכירים, משתפים או מפיצים בדרך אחרת את המידע שנאסף כאן לצדדים שלישיים.',
    'LBL_REG_CONF_3' => 'תודה שנרשמת. לחץ על כפתור סיום כדי להתחבר ל- SuiteCRM. תצטרך להיכנס בפעם הראשונה באמצעות שם המשתמש "admin" והסיסמה שהזנת בשלב 2.',
    'LBL_REG_TITLE' => 'רישום',

    'LBL_REQUIRED' => '* שדה חובה',

    'LBL_SITECFG_ADMIN_Name' => 'שם מנהל יישום SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'הזן מחדש את סיסמת המשתמש של SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'סיסמת משתמש מנהל מערכת של SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'מזהה יישום',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'אם נבחר, עליך לספק מזהה יישום כדי לעקוף את המזהה שנוצר אוטומטית. המזהה מבטיח שהפעלות של מופע SuiteCRM אחד לא ישמשו מופעים אחרים. אם יש לך אשכול התקנות SuiteCRM, כולן חייבות לחלוק את אותו מזהה יישום.',
    'LBL_SITECFG_CUSTOM_ID' => 'ספק מזהה יישום משלך',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'אם נבחר, עליך לציין ספריית יומן כדי לעקוף את ספריית ברירת המחדל עבור יומן SuiteCRM. לא משנה היכן נמצא קובץ היומן, הגישה אליו דרך דפדפן אינטרנט תוגבל באמצעות הפניית .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'השתמש בספריית יומנים מותאמת אישית',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'אם נבחר, עליך לספק תיקיה מאובטחת לאחסון פרטי הפעלה של SuiteCRM. ניתן לעשות זאת כדי למנוע מנתוני הפעלה להיות פגיעים בשרתים משותפים.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'השתמש בספריית הפעלות מותאמת אישית עבור SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>אנא תקן את השגיאות הבאות לפני שתמשיך:</b>',
    'LBL_SITECFG_LOG_DIR' => 'מדריך יומן',
    'LBL_SITECFG_SESSION_PATH' => 'נתיב לספריית הפעלות<br>(חייב להיות בר כתיבה)',
    'LBL_SITECFG_SITE_SECURITY' => 'בחר אפשרויות אבטחה',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'אם נבחר, המערכת תבדוק מעת לעת אם יש גרסאות מעודכנות של היישום.',
    'LBL_SITECFG_SUITE_UP' => 'בדיקת עדכונים אוטומטית?',
    'LBL_SITECFG_TITLE' => 'תצורת אתר',
    'LBL_SITECFG_TITLE2' => 'זהה משתמש ניהול',
    'LBL_SITECFG_SECURITY_TITLE' => 'אבטחת אתר',
    'LBL_SITECFG_URL' => 'כתובת האתר של מופע SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'לשלוח סטטיסטיקות שימוש אנונימיות?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'אם נבחר, SuiteCRM ישלח סטטיסטיקות <b>אנונימיות</b> לגבי ההתקנה שלך ל-SuiteCRM Inc. בכל פעם שהמערכת שלך תבדוק אם יש גרסאות חדשות. מידע זה יעזור לנו להבין טוב יותר כיצד נעשה שימוש באפליקציה וינחה שיפורים במוצר.',
    'LBL_SITECFG_URL_MSG' => 'הזן את כתובת האתר שתשמש לגישה למופע SuiteCRM לאחר ההתקנה. כתובת ה-URL תשמש גם כבסיס לכתובות ה-URL בדפי האפליקציה של SuiteCRM. כתובת האתר צריכה לכלול את שם שרת האינטרנט או המכונה או כתובת ה-IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'הזן שם למערכת שלך. שם זה יוצג בשורת הכותרת של הדפדפן כאשר משתמשים מבקרים באפליקציית SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'לאחר ההתקנה, תצטרך להשתמש במשתמש ה-SuiteCRM Admin (שם משתמש ברירת מחדל = admin) כדי להיכנס למופע SuiteCRM. הזן סיסמה עבור משתמש מנהל זה. ניתן לשנות סיסמה זו לאחר הכניסה הראשונית. אתה יכול גם להזין שם משתמש אחר של מנהל מערכת לשימוש מלבד ערך ברירת המחדל שסופק.',
    'LBL_SITECFG_COLLATION_MSG' => 'בחר הגדרות איסוף (מיון) עבור המערכת שלך. הגדרה זו תיצור את הטבלאות עם השפה הספציפית שבה אתה משתמש. במקרה שהשפה שלך אינה דורשת הגדרות מיוחדות, השתמש בערך ברירת המחדל.',
    'LBL_SPRITE_SUPPORT' => 'תמיכה ב-Sprite',
    'LBL_SYSTEM_CREDS' => 'אישורי מערכת',
    'LBL_SYSTEM_ENV' => 'סביבת מערכת',
    'LBL_SHOW_PASS' => 'הצג סיסמאות',
    'LBL_HIDE_PASS' => 'הסתר סיסמאות',
    'LBL_HIDDEN' => '<i>(מוסתר)</i>',
    'LBL_STEP1' => 'שלב 1 מתוך 2 - דרישות טרום התקנה',
    'LBL_STEP2' => 'שלב 2 מתוך 2 - תצורה',
    'LBL_STEP' => 'שלב',
    'LBL_TITLE_WELCOME' => 'ברוכים הבאים ל-SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'האם אתה מוכן להתקנה?',
    'REQUIRED_SYS_COMP' => 'רכיבי מערכת נדרשים',
    'REQUIRED_SYS_COMP_MSG' =>
        'לפני שתתחיל, אנא ודא שיש לך את הגרסאות הנתמכות של רכיבי המערכת הבאים:<br>
                      <ul>
                      <li> מערכת ניהול מסדי נתונים/מסדי נתונים (דוגמאות: MariaDB, MySQL או SQL Server)</li>
                      <li> שרת אינטרנט (Apache, IIS)</li>
                      </ul>
                      עיין במטריצת התאימות בהערות הגרסה עבור
                      רכיבי מערכת תואמים לגרסת SuiteCRM שאתה מתקין.<br>',
    'REQUIRED_SYS_CHK' => 'בדיקת מערכת ראשונית',
    'REQUIRED_SYS_CHK_MSG' =>
        'כשתתחיל בתהליך ההתקנה, תתבצע בדיקת מערכת בשרת האינטרנט שבו נמצאים קבצי SuiteCRM כדי
                      ודא שהמערכת מוגדרת כהלכה וכוללת את כל הרכיבים הדרושים
                      כדי להשלים את ההתקנה בהצלחה. <br><br>
                      המערכת בודקת את כל הדברים הבאים:<br>
                      <ul>
                      <li><b>גרסת PHP</b> – חייב להיות תואם ליישום</li>
                      <li><b>משתני הפעלה</b> – חייב לפעול כראוי</li>
                      <li><b>מחרוזות MB</b> – חייב להיות מותקן ומופעל ב-php.ini</li>
                      <li><b>תמיכה במסד נתונים</b> – חייב להתקיים עבור MariaDB, MySQL או SQL Server</li>
                      <li><b>Config.php</b> – חייב להתקיים וחייב להיות בעל ההרשאות המתאימות כדי להפוך אותו לכתיבה</li>
                      <li>קבצי SuiteCRM הבאים חייבים להיות ניתנים לכתיבה:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/מודולים</li>
                      <li>/העלה</b></li></ul></li></ul>
                                  אם הבדיקה נכשלת, לא תוכל להמשיך בהתקנה.
                                  תוצג הודעת שגיאה, המסבירה מדוע המערכת שלך לא עברה את הבדיקה.
                                  לאחר ביצוע השינויים הדרושים, תוכל לעבור שוב את בדיקת המערכת כדי להמשיך בהתקנה.<br>',


    'REQUIRED_INSTALLTYPE' => 'התקנה רגילה או מותאמת אישית',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'לאחר ביצוע בדיקת המערכת, תוכל לבחור באחת מהן
                      ההתקנה טיפוסית או מותאמת אישית.<br><br>
                      עבור התקנות <b>טיפוסיות</b> ו<b>מותאמת אישית</b>, תצטרך לדעת את הדברים הבאים:<br>
                      <ul>
                      <li> <b>סוג מסד הנתונים</b> שיכיל את נתוני SuiteCRM <ul><li>מסד נתונים תואם
                      סוגים: MariaDB, MySQL או SQL Server.<br><br></li></ul></li>
                      <li> <b>שם שרת האינטרנט</b> או המחשב (מארח) שעליו נמצא מסד הנתונים
                      <ul><li>זה עשוי להיות <i>localhost</i> אם מסד הנתונים נמצא במחשב המקומי שלך או נמצא באותו שרת אינטרנט או מחשב כמו קבצי SuiteCRM שלך.<br><br></li>< /ul></li>
                      <li><b>שם מסד הנתונים</b> שבו תרצה להשתמש כדי לשכן את נתוני SuiteCRM</li>
                        <ul>
                          <li> ייתכן שכבר יש לך מסד נתונים קיים שבו תרצה להשתמש. אם
                          אתה מספק את השם של מסד נתונים קיים, הטבלאות במסד הנתונים יעשו זאת
                          יושמט במהלך ההתקנה כאשר הסכימה עבור מסד הנתונים של SuiteCRM מוגדרת.</li>
                          <li> אם אין לך עדיין מסד נתונים, השם שתספק ישמש עבורו
                          מסד הנתונים החדש שנוצר עבור המופע במהלך ההתקנה.<br><br></li>
                        </ul>
                      <li><b>שם משתמש וסיסמה של מנהל מסד נתונים</b> <ul><li>מנהל מסד הנתונים אמור להיות מסוגל ליצור טבלאות ומשתמשים ולכתוב למסד הנתונים.</li><li>ייתכן שתצטרך
                      פנה למנהל מסד הנתונים שלך לקבלת מידע זה אם מסד הנתונים הוא
                      לא נמצא במחשב המקומי שלך ו/או אם אינך מנהל מסד הנתונים.<br><br></ul></li></li>
                      <li> <b>שם משתמש וסיסמה של מסד הנתונים של SuiteCRM</b>
                      </li>
                        <ul>
                          <li> ייתכן שהמשתמש הוא מנהל מסד הנתונים, או שאתה יכול לספק את השם של
                          משתמש קיים אחר במסד הנתונים. </li>
                          <li> אם תרצה ליצור משתמש מסד נתונים חדש למטרה זו, תעשה זאת
                          להיות מסוגל לספק שם משתמש וסיסמה חדשים במהלך תהליך ההתקנה,
                          והמשתמש ייווצר במהלך ההתקנה. </li>
                        </ul></ul><p>

                      עבור ההגדרה <b>מותאמת אישית</b>, ייתכן שיהיה עליך לדעת גם את הדברים הבאים:<br>
                      <ul>
                      <li> <b>כתובת אתר שתשמש לגישה למופע SuiteCRM</b> לאחר התקנתו.
                      כתובת אתר זו צריכה לכלול את שם שרת האינטרנט או המחשב או כתובת ה-IP.<br><br></li>
                                  <li> [אופציונלי] <b>נתיב לספריית ההפעלה</b> אם ברצונך להשתמש בהתאמה אישית
                                  ספריית הפעלה עבור פרטי SuiteCRM על מנת למנוע מנתוני הפעלה
                                  להיות פגיע בשרתים משותפים.<br><br></li>
                                  <li> [אופציונלי] <b>נתיב לספריית יומן מותאמת אישית</b> אם ברצונך לעקוף את ספריית ברירת המחדל עבור יומן SuiteCRM.<br><br></li>
                                  <li> [אופציונלי] <b>מזהה אפליקציה</b> אם ברצונך לעקוף את ההגדרה האוטומטית
                                  מזהה שמבטיח שהפעלות של מופע SuiteCRM אחד לא ישמשו מופעים אחרים.<br><br></li>
                                  <li><b>ערכת תווים</b> הנפוצה ביותר באזור שלך.<br><br></li></ul>
                                  למידע מפורט יותר, עיין במדריך ההתקנה.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'אנא קרא את המידע החשוב הבא לפני שתמשיך בהתקנה. המידע יעזור לך לקבוע אם אתה מוכן להתקין את האפליקציה בשלב זה או לא.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>בחר את השפה שלך</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'אשף ההתקנה',
    'LBL_WIZARD_TITLE' => 'אשף ההתקנה של SuiteCRM: ',
    'LBL_YES' => 'כן',

    'LBL_PATCHES_TITLE' => 'התקן את התיקונים האחרונים',
    'LBL_MODULE_TITLE' => 'התקן ערכות שפה',
    'LBL_PATCH_1' => 'אם תרצה לדלג על שלב זה, לחץ על הבא.',
    'LBL_PATCH_TITLE' => 'תיקון מערכת',
    'LBL_PATCH_READY' => 'התיקון(ים) הבאים מוכנים להתקנה:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM מסתמכת על הפעלות של PHP כדי לאחסן מידע חשוב תוך כדי חיבור לשרת אינטרנט זה. התקנת PHP שלך לא מגדירה את פרטי ההפעלה בצורה נכונה.
											<br><br>תצורה שגויה נפוצה היא שההנחיה <b>'session.save_path'</b> אינה מצביעה על ספרייה חוקית. <br>
											<br> אנא תקן את <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>תצורת PHP</a> שלך בקובץ php.ini שנמצא כאן למטה .",
    'LBL_SESSION_ERR_TITLE' => 'שגיאת תצורה של הפעלות PHP',
    'LBL_SYSTEM_NAME' => 'שם המערכת',
    'LBL_COLLATION' => 'הגדרות איסוף',
    'LBL_REQUIRED_SYSTEM_NAME' => 'ספק שם מערכת עבור מופע SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'בחר קובץ תיקון מהמחשב המקומי שלך',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'נדרשת Php גרסה 5 ומעלה.',
    'LBL_MINIMUM_PHP_VERSION' => 'גרסת PHP המינימלית הנדרשת היא 5.1.0. גרסת Php המומלצת היא 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(גרסת ה-php הנוכחית שלך היא ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' גרסת php מומלצת היא 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'מצב תאימות לאחור של Php מופעל. הגדר את zend.ze1_compatibility_mode לכבוי כדי להמשיך הלאה',
    'LBL_STREAM' => 'PHP מאפשר להשתמש בזרם',

    'advanced_password_new_account_email' => array(
        'subject' => 'פרטי חשבון חדש',
        'type' => 'מערכת',
        'description' => 'תבנית זו משמשת כאשר מנהל המערכת שולח סיסמה חדשה למשתמש.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\"\"center\" ;\"\"><tbody><tr><td colspan=\"2\"><p>הנה שם המשתמש והסיסמה הזמנית של החשבון שלך:</p><p>שם משתמש : $contact_user_user_name </p> <p>סיסמה : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>לאחר שתתחבר באמצעות הסיסמה שלמעלה, ייתכן שתידרש לאפס את הסיסמה לאחת הסיסמה שלך בחירה משלו.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
הנה שם המשתמש והסיסמה הזמנית של החשבון שלך:
שם משתמש: $contact_user_user_name
סיסמה: $contact_user_user_hash

$config_site_url

לאחר שתתחבר באמצעות הסיסמה לעיל, ייתכן שתידרש לאפס את הסיסמה לבחירתך.',
        'name' => 'דוא"ל סיסמה שנוצרה על ידי המערכת',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'אפס את סיסמת החשבון שלך',
        'type' => 'מערכת',
        'description' => "תבנית זו משמשת כדי לשלוח למשתמש קישור ללחוץ עליו כדי לאפס את סיסמת החשבון של המשתמש.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\"\"center\" ;\"\"><tbody><tr><td colspan=\"2\"><p>לאחרונה ביקשת ב-$contact_user_pwd_last_changed כדי שתוכל לאפס את סיסמת החשבון שלך. </p><p>לחץ על הקישור למטה כדי לאפס את הסיסמה שלך:</p><p> $contact_user_link_guid </p> </td> </tr><tr><td colspan=\"2\" ></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
ביקשת לאחרונה ב-$contact_user_pwd_last_changed כדי שתוכל לאפס את סיסמת החשבון שלך.

לחץ על הקישור למטה כדי לאפס את הסיסמה שלך:

$contact_user_link_guid',
        'name' => 'שכחתי את הסיסמה הדוא"ל',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'קוד אימות דו-גורמי',
        'type' => 'מערכת',
        'description' => "תבנית זו משמשת כדי לשלוח למשתמש קוד עבור אימות דו-גורמי.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\"\"center\" ;\"\"><tbody><tr><td colspan=\"2\"><p>קוד אימות דו-גורמי הוא <b>$code</b>.</p> </td> < /tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            'קוד אימות דו-גורמי הוא $code.',
        'name' => 'דוא"ל אימות דו-גורמי',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => ''מאת' שם:',
    'LBL_FROM_ADDR' => 'כתובת "מאת":',

    'LBL_WIZARD_SMTP_DESC' => 'ספק את חשבון הדוא"ל שישמש לשליחת הודעות דוא"ל, כגון הודעות הקצאה וסיסמאות משתמש חדשות. משתמשים יקבלו אימיילים מ-SuiteCRM, כפי שנשלחו מחשבון הדוא"ל שצוין.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'בחר את ספק הדוא"ל שלך:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! דוֹאַר',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'אחר',
    'LBL_MAIL_SMTP_SETTINGS' => 'מפרט שרת SMTP',
    'LBL_MAIL_SMTPSERVER' => 'שרת SMTP:',
    'LBL_MAIL_SMTPPORT' => 'יציאת SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'להשתמש באימות SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'להפעיל SMTP על SSL או TLS?',
    'LBL_GMAIL_SMTPUSER' => 'כתובת דוא"ל של Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'סיסמת Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'אפשר למשתמשים להשתמש בחשבון זה עבור דואר אלקטרוני יוצא:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'כאשר אפשרות זו נבחרת, כל המשתמשים יוכלו לשלוח הודעות דוא"ל באמצעות אותו חשבון דואר יוצא המשמש לשליחת הודעות והתראות מערכת. אם האפשרות לא נבחרה, משתמשים עדיין יכולים להשתמש בשרת הדואר היוצא לאחר מסירת פרטי החשבון שלהם.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! סיסמת דואר:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! מזהה דואר:',

    'LBL_EXCHANGE_SMTPPASS' => 'החלפת סיסמה:',
    'LBL_EXCHANGE_SMTPUSER' => 'החלף שם משתמש:',
    'LBL_EXCHANGE_SMTPPORT' => 'יציאת שרת Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'שרת חילופין:',


    'LBL_MAIL_SMTPUSER' => 'שם משתמש SMTP:',
    'LBL_MAIL_SMTPPASS' => 'סיסמת SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'מיתוג',
    'LBL_WIZARD_SYSTEM_DESC' => 'ספק את השם והלוגו של הארגון שלך כדי למתג את SuiteCRM שלך.',
    'SYSTEM_NAME_WIZARD' => 'שם:',
    'SYSTEM_NAME_HELP' => 'זהו השם שמוצג בשורת הכותרת של הדפדפן שלך.',
    'NEW_LOGO' => 'בחר לוגו:',
    'NEW_LOGO_HELP' => 'פורמט קובץ התמונה יכול להיות .png או .jpg. הגובה המרבי הוא 170 פיקסלים, והרוחב המרבי הוא 450 פיקסלים. כל תמונה שתועלה וגדולה יותר בכל כיוון תוגדל למידות המקסימליות האלה.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'העלה',
    'CURRENT_LOGO' => 'לוגו נוכחי:',
    'CURRENT_LOGO_HELP' => 'לוגו זה מוצג במרכז מסך הכניסה של אפליקציית SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'בחירת תרחיש',
    'LBL_WIZARD_SCENARIO_DESC' => 'זה כדי לאפשר התאמה אישית של המודולים המוצגים בהתאם לדרישות שלך. ניתן להפעיל כל אחד מהמודולים לאחר ההתקנה באמצעות דף הניהול.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'אין כרגע תרחישים מוגדרים בקובץ התצורה (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'הגדרות אזור מערכת',
    'LBL_WIZARD_LOCALE_DESC' => 'ציין כיצד תרצה שהנתונים ב-SuiteCRM יוצגו, בהתבסס על המיקום הגיאוגרפי שלך. ההגדרות שתספק כאן יהיו הגדרות ברירת המחדל. משתמשים יוכלו להגדיר את ההעדפות שלהם.',
    'LBL_DATE_FORMAT' => 'פורמט תאריך:',
    'LBL_TIME_FORMAT' => 'פורמט זמן:',
    'LBL_TIMEZONE' => 'אזור זמן:',
    'LBL_LANGUAGE' => 'שפה:',
    'LBL_CURRENCY' => 'מטבע:',
    'LBL_CURRENCY_SYMBOL' => 'סמל מטבע:',
    'LBL_CURRENCY_ISO4217' => 'קוד מטבע ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'מפריד 1000:',
    'LBL_DECIMAL_SEP' => 'סמל עשרוני:',
    'LBL_NAME_FORMAT' => 'פורמט שם:',
    'UPLOAD_LOGO' => 'אנא המתן, לוגו מעלה...',
    'ERR_UPLOAD_FILETYPE' => 'סוג הקובץ אינו מותר, אנא העלה קובץ jpeg או png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'אירעה שגיאת העלאת קובץ לא ידועה.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'הקובץ שהועלה חורג מההנחיה upload_max_filesize ב-php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'הקובץ שהועלה חורג מההנחיה MAX_FILE_SIZE שצוינה בטופס ה-HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'הקובץ שהועלה הועלה רק חלקית.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'לא הועלה קובץ.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'חסרה תיקיה זמנית.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'כשל לכתוב קובץ לדיסק.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'תוסף PHP עצרה את העלאת הקובץ. PHP לא מספקת דרך לברר איזו סיומת גרמה להפסקת העלאת הקובץ.',

    'LBL_INSTALL_PROCESS' => 'התקן...',

    'LBL_EMAIL_ADDRESS' => 'כתובת דואר אלקטרוני:',
    'ERR_ADMIN_EMAIL' => 'כתובת הדוא"ל של מנהל המערכת שגויה.',
    'ERR_SITE_URL' => 'נדרשת כתובת אתר.',

    'STAT_CONFIGURATION' => 'קשרי תצורה...',
    'STAT_CREATE_DB' => 'צור מסד נתונים...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'צור הגדרות ברירת מחדל...',
    'STAT_INSTALL_FINISH' => 'סיום ההתקנה...',
    'STAT_INSTALL_FINISH_LOGIN' => 'תהליך ההתקנה הסתיים, <a href="%s">נא להיכנס...</a>',
    'LBL_LICENCE_TOOLTIP' => 'אנא קבל רישיון תחילה',

    'LBL_MORE_OPTIONS_TITLE' => 'אפשרויות נוספות',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'שגיאת מסד נתונים',
    'LBL_OLD_PHP' => 'זוהתה גרסת PHP ישנה!',
    'LBL_OLD_PHP_MSG' => 'גרסת ה-PHP המומלצת להתקנת SuiteCRM היא %s <br />גרסת ה-PHP המינימלית הנדרשת היא %s<br />אתה משתמש בגרסת PHP %s, שהיא EOL: <a href="http ://php.net/eol.php">http://php.net/eol.php</a>.<br />אנא שקול לשדרג את גרסת ה-PHP שלך. ',
    'LBL_OLD_PHP_OK' => 'אני מודע לסיכונים ומעוניין להמשיך.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'משתמש',
    'LBL_DBCONFIG_MSG3_LABEL' => 'שם מסד הנתונים',
    'LBL_DBCONFIG_MSG3' => 'שם מסד הנתונים שיכיל את הנתונים עבור מופע SuiteCRM שאתה עומד להתקין.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'שם מארח',
    'LBL_DBCONFIG_MSG2' => 'שם שרת האינטרנט או המחשב (מארח) שבו נמצא מסד הנתונים (כגון www.mydomain.com). אם מתקינים באופן מקומי, עדיף להשתמש ב-\'localhost\' מאשר ב-\'127.0.0.1\', מטעמי ביצועים.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // תווית זו נדרשת באופן דינמי ב-install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'שם המשתמש והסיסמה של מנהל מסד נתונים שיכול ליצור טבלאות ומשתמשים של מסד נתונים ויכול לכתוב למסד הנתונים נחוצים כדי להגדיר את מסד הנתונים של SuiteCRM.'
);
