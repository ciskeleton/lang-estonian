<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponendid';
$lang['admin_content'] = 'Sisu';
$lang['admin_database_backup'] = 'Andmebaasi varukoopiad';
$lang['admin_extensions'] = 'Laiendused';
$lang['admin_firewall'] = 'Tulemüür';
$lang['admin_help'] = 'Abi';
$lang['admin_languages'] = 'Keeled';
$lang['admin_logs'] = 'Süsteemilogid';
$lang['admin_media'] = 'Meediateek';
$lang['admin_modules'] = 'Moodulid';
$lang['admin_plugins'] = 'Pluginad';
$lang['admin_reports'] = 'Tegevuslogi';
$lang['admin_settings'] = 'Süsteemiseaded';
$lang['admin_sysinfo'] = 'Süsteemiteave';
$lang['admin_system'] = 'Süsteem';
$lang['admin_system_firewall'] = 'Süsteemi tulemüür';
$lang['admin_themes'] = 'Teemad';
$lang['admin_updates'] = 'Süsteemiuuendused';
$lang['admin_users'] = 'Kasutajad';
$lang['admin_view_site'] = 'Vaata saiti';
$lang['per_page'] = 'Lehel';

 // Generic Messages
$lang['admin_footer_thankyou'] = 'Täname, et loote koos <a href="%s">%s</a>-ga.';
$lang['admin_items_active_count'] = '=0{Aktiivseid üksusi pole.} other{<b>#</b> üksust <b>%s</b>-st on aktiivsed.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Installimine nurjus: %s';
$lang['admin_install_location_app'] = 'Ainult see rakendus';
$lang['admin_install_location_core'] = 'Kõik rakendused';
$lang['admin_install_location_select'] = '&#151; Vali asukoht &#151;';
$lang['admin_install_update_confirm'] = 'Kas olete kindel, et soovite selle paketi värskendada?';
$lang['admin_install_update_error'] = 'Paketi värskendamine ebaõnnestus.';
$lang['admin_install_update_skip_confirm'] = 'Kas olete kindel, et soovite selle värskenduse vahele jätta?';
$lang['admin_install_update_skip_error'] = 'Selle värskenduse vahele jätmine ebaõnnestus.';
$lang['admin_install_update_skip_success'] = 'Värskendus jäeti edukalt vahele.';
$lang['admin_install_update_success'] = 'Pakett värskendati edukalt.';
$lang['admin_install_upload_tip'] = 'Installige pakett, laadides selle <b>.zip</b>-faili siia üles.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Vanade varukoopiafailide puhastamine ebaõnnestus.';
$lang['admin_database_backup_clean_success'] = '%d varukoopiafaili kustutati. %d kettaruumi vabastati.';
$lang['admin_database_backup_create'] = 'Loo varukoopia';
$lang['admin_database_backup_create_confirm'] = 'Kas olete kindel, et soovite varukoopia kohe luua?';
$lang['admin_database_backup_create_error'] = 'Varukoopiafaili loomine ebaõnnestus. Veenduge, et kaust <b>%s</b> oleks kirjutatav.';
$lang['admin_database_backup_create_success'] = 'Andmebaasi varukoopiafail <b>%s</b> loodi edukalt.';
$lang['admin_database_backup_delete_confirm'] = 'Kas olete kindel, et soovite need varukoopiafailid kustutada?';
$lang['admin_database_backup_delete_error'] = 'Valitud varukoopiafailide kustutamine ebaõnnestus.';
$lang['admin_database_backup_delete_success'] = 'Varukoopiafailid kustutati edukalt.';
$lang['admin_database_backup_download_error'] = 'Valitud varukoopiafaili allalaadimine ebaõnnestus.';
$lang['admin_database_backup_download_success'] = 'Varukoopiafail laaditi edukalt alla.';
$lang['admin_database_backup_lock_confirm'] = 'Kas olete kindel, et soovite need varukoopiafailid lukustada?';
$lang['admin_database_backup_lock_error'] = 'Valitud varukoopiafailide lukustamine ebaõnnestus.';
$lang['admin_database_backup_lock_success'] = 'Varukoopiafailid lukustati edukalt.';
$lang['admin_database_backup_locked_error'] = 'Lukustatud varukoopiafailide kustutamine ebaõnnestus.';
$lang['admin_database_backup_missing_error'] = 'Varukoopiafaili ei leitud.';
$lang['admin_database_backup_unlock_confirm'] = 'Kas olete kindel, et soovite need varukoopiafailid avada?';
$lang['admin_database_backup_unlock_error'] = 'Valitud varukoopiafailide avamine ebaõnnestus.';
$lang['admin_database_backup_unlock_success'] = 'Varukoopiafailid avati edukalt.';
$lang['admin_database_prune'] = 'Puhasta';
$lang['admin_database_prune_confirm'] = 'Kas olete kindel, et soovite andmebaasi puhastada? Enne käivitamist luuakse varukoopia.';
$lang['admin_database_prune_error'] = 'Andmebaasi puhastamine ebaõnnestus.';
$lang['admin_database_prune_next'] = 'Järgmine puhastus: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Andmebaas puhastati edukalt.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Kustuta logid';
$lang['admin_logs_delete_confirm'] = 'Kas olete kindel, et soovite valitud logifailid kustutada?';
$lang['admin_logs_delete_error'] = 'Logifailide kustutamine ebaõnnestus.';
$lang['admin_logs_delete_success'] = 'Logifailid kustutati edukalt.';
$lang['admin_logs_error_disabled'] = 'Logimine ei ole praegu lubatud.';
$lang['admin_logs_error_empty'] = 'Logisid ei leitud.';
$lang['admin_logs_error_missing'] = 'Logifaili ei õnnestunud leida või see oli tühi.';
$lang['admin_logs_tip'] = 'Logimine võib kiiresti luua väga suuri faile. Töötavate saitide puhul tasub kaaluda vanade logide kustutamist.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Kas olete kindel, et soovite valitud e-kirjad kustutada?';
$lang['admin_emails_delete_error'] = 'Valitud e-kirjade kustutamine ebaõnnestus.';
$lang['admin_emails_delete_success'] = 'Valitud e-kirjad kustutati edukalt.';
$lang['admin_emails_email_from'] = 'Saatja';
$lang['admin_emails_mail_queue'] = 'Meilijärjekord';
$lang['admin_emails_mailer'] = 'Masspostitus';
$lang['admin_emails_search'] = 'Otsi e-kirju teema või sisu järgi...';
$lang['admin_emails_send_error'] = 'E-kirja järjekorda lisamine ebaõnnestus. Palun proovige uuesti.';
$lang['admin_emails_send_none'] = 'Ükski kasutaja ei vasta teie valitud kriteeriumidele.';
$lang['admin_emails_send_success'] = 'E-kiri on järjekorda lisatud ja saadetakse peagi.';
$lang['admin_emails_send_to_banned'] = 'Saada blokeeritud kasutajatele.';
$lang['admin_emails_send_to_deleted'] = 'Saada kustutatud kasutajatele.';
$lang['admin_emails_send_to_disabled'] = 'Saada mitteaktiivsetele kasutajatele.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Lisa kasutaja';
$lang['admin_users_all_users'] = 'Kõik kasutajad';
$lang['admin_users_ban_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad blokeerida?';
$lang['admin_users_ban_error'] = 'Valitud kasutajate blokeerimine ebaõnnestus.';
$lang['admin_users_ban_success'] = 'Valitud kasutajad blokeeriti edukalt.';
$lang['admin_users_delete_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad kustutada?';
$lang['admin_users_delete_error'] = 'Valitud kasutajate kustutamine ebaõnnestus.';
$lang['admin_users_delete_success'] = 'Valitud kasutajad kustutati edukalt.';
$lang['admin_users_disable_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad keelata?';
$lang['admin_users_disable_error'] = 'Valitud kasutajate keelamine ebaõnnestus.';
$lang['admin_users_disable_success'] = 'Valitud kasutajad keelati edukalt.';
$lang['admin_users_edit'] = 'Muuda kasutajat';
$lang['admin_users_edit_error'] = 'Kasutaja uuendamine ebaõnnestus.';
$lang['admin_users_edit_success'] = 'Kasutaja uuendati edukalt.';
$lang['admin_users_enable_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad lubada?';
$lang['admin_users_enable_error'] = 'Valitud kasutajate lubamine ebaõnnestus.';
$lang['admin_users_enable_success'] = 'Valitud kasutajad lubati edukalt.';
$lang['admin_users_groups'] = 'Grupid';
$lang['admin_users_lock_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad lukustada?';
$lang['admin_users_lock_error'] = 'Valitud kasutajate lukustamine ebaõnnestus.';
$lang['admin_users_lock_success'] = 'Valitud kasutajad lukustati edukalt.';
$lang['admin_users_logged'] = 'Sisselogitud kasutajad';
$lang['admin_users_manage'] = 'Halda kasutajaid';
$lang['admin_users_remove_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad ja kõik nende andmed jäädavalt kustutada?';
$lang['admin_users_remove_error'] = 'Valitud kasutajate ja kõigi nende andmete jäädav kustutamine ebaõnnestus.';
$lang['admin_users_remove_success'] = 'Valitud kasutajad ja kõik nende andmed kustutati edukalt.';
$lang['admin_users_restore_confirm'] = 'Kas olete kindel, et soovite valitud kasutajad taastada?';
$lang['admin_users_restore_error'] = 'Valitud kasutajate taastamine ebaõnnestus.';
$lang['admin_users_restore_success'] = 'Valitud kasutajad taastati edukalt.';
$lang['admin_users_search'] = 'Otsi nime, kasutajanime või e-posti aadressi järgi...';
$lang['admin_users_unban_confirm'] = 'Kas olete kindel, et soovite valitud kasutajate blokeeringu eemaldada?';
$lang['admin_users_unban_error'] = 'Valitud kasutajate blokeeringu eemaldamine ebaõnnestus.';
$lang['admin_users_unban_success'] = 'Valitud kasutajate blokeering eemaldati edukalt.';
$lang['admin_users_unlock_confirm'] = 'Kas olete kindel, et soovite valitud kasutajate lukustuse eemaldada?';
$lang['admin_users_unlock_error'] = 'Valitud kasutajate lukustuse eemaldamine ebaõnnestus.';
$lang['admin_users_unlock_success'] = 'Valitud kasutajate lukustus eemaldati edukalt.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Tühjenda logid';
$lang['admin_reports_clear_confirm'] = 'Kas olete kindel, et soovite tegevuslogi tühjendada?';
$lang['admin_reports_clear_error'] = 'Tegevuslogi tühjendamine ebaõnnestus.';
$lang['admin_reports_clear_success'] = 'Tegevuslogi tühjendati edukalt.';
$lang['admin_reports_latest_actions'] = 'Viimased tegevused';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Kas olete kindel, et soovite valitud failid kustutada?';
$lang['admin_media_delete_error'] = 'Failide kustutamine ebaõnnestus.';
$lang['admin_media_delete_success'] = 'Failid kustutati edukalt.';
$lang['admin_media_file_delete_error'] = 'Faili kustutamine ebaõnnestus.';
$lang['admin_media_file_delete_success'] = 'Fail kustutati edukalt.';
$lang['admin_media_file_update_error'] = 'Faili uuendamine ebaõnnestus.';
$lang['admin_media_file_update_success'] = 'Fail uuendati edukalt.';
$lang['admin_media_search'] = 'Otsi nime, kirjelduse või failinime järgi...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Aktiivseid mooduleid pole.} other{<b>#</b> moodulit <b>%s</b>-st on aktiivsed.}';
$lang['admin_modules_add'] = 'Lisa moodul';
$lang['admin_modules_delete_confirm'] = 'Kas olete kindel, et soovite kustutada mooduli: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Mooduli kustutamine ebaõnnestus.';
$lang['admin_modules_delete_error_active'] = 'Aktiivseid mooduleid ei saa kustutada.';
$lang['admin_modules_delete_success'] = 'Moodul kustutati edukalt.';
$lang['admin_modules_disable_all_confirm'] = 'Kas olete kindel, et soovite kõik moodulid keelata?';
$lang['admin_modules_disable_all_error'] = 'Kõigi moodulite keelamine ebaõnnestus.';
$lang['admin_modules_disable_all_success'] = 'Kõik moodulid keelati edukalt.';
$lang['admin_modules_disable_confirm'] = 'Kas olete kindel, et soovite keelata mooduli: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Mooduli deaktiveerimine ebaõnnestus.';
$lang['admin_modules_disable_success'] = 'Moodul deaktiveeriti edukalt.';
$lang['admin_modules_enable_all_confirm'] = 'Kas olete kindel, et soovite kõik moodulid lubada?';
$lang['admin_modules_enable_all_error'] = 'Kõigi moodulite lubamine ebaõnnestus.';
$lang['admin_modules_enable_all_success'] = 'Kõik moodulid lubati edukalt.';
$lang['admin_modules_enable_confirm'] = 'Kas olete kindel, et soovite lubada mooduli: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Mooduli aktiveerimine ebaõnnestus.';
$lang['admin_modules_enable_success'] = 'Moodul aktiveeriti edukalt.';
$lang['admin_modules_global'] = 'Globaalne moodul (jagatud)';
$lang['admin_modules_install_confirm'] = 'Kas olete kindel, et soovite installida moodulit: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'Mooduli installimine ebaõnnestus.';
$lang['admin_modules_install_success'] = 'Moodul on edukalt installitud.';
$lang['admin_modules_install_tip'] = 'Moodulid lisavad teie saidile uusi funktsioone ja võimalusi. Sirvige saadaolevaid mooduleid <a href="%s" target="_blank" rel="noopener">moodulikataloogis</a> või laadige mõni üles <b>.zip</b>-paketina.';
$lang['admin_modules_update_confirm'] = 'Kas olete kindel, et soovite selle mooduli värskendada?';
$lang['admin_modules_update_error'] = 'Mooduli värskendamine ebaõnnestus.';
$lang['admin_modules_update_success'] = 'Moodul värskendati edukalt.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Aktiivseid pluginaid pole.} other{<b>#</b> pluginat <b>%s</b>-st on aktiivsed.}';
$lang['admin_plugins_add'] = 'Lisa plugin';
$lang['admin_plugins_delete_confirm'] = 'Kas olete kindel, et soovite kustutada plugina: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Plugina kustutamine ebaõnnestus.';
$lang['admin_plugins_delete_error_active'] = 'Aktiivseid pistikprogramme ei saa kustutada.';
$lang['admin_plugins_delete_success'] = 'Plugin kustutati edukalt.';
$lang['admin_plugins_disable_all_confirm'] = 'Kas olete kindel, et soovite kõik pluginad keelata?';
$lang['admin_plugins_disable_all_error'] = 'Kõigi pluginate keelamine ebaõnnestus.';
$lang['admin_plugins_disable_all_success'] = 'Kõik pluginad keelati edukalt.';
$lang['admin_plugins_disable_confirm'] = 'Kas olete kindel, et soovite keelata plugina: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Plugina deaktiveerimine ebaõnnestus.';
$lang['admin_plugins_disable_success'] = 'Plugin deaktiveeriti edukalt.';
$lang['admin_plugins_enable_all_confirm'] = 'Kas olete kindel, et soovite kõik pluginad lubada?';
$lang['admin_plugins_enable_all_error'] = 'Kõigi pluginate lubamine ebaõnnestus.';
$lang['admin_plugins_enable_all_success'] = 'Kõik pluginad lubati edukalt.';
$lang['admin_plugins_enable_confirm'] = 'Kas olete kindel, et soovite lubada plugina: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Plugina aktiveerimine ebaõnnestus.';
$lang['admin_plugins_enable_success'] = 'Plugin aktiveeriti edukalt.';
$lang['admin_plugins_global'] = 'Globaalne pistikprogramm (jagatud)';
$lang['admin_plugins_install_confirm'] = 'Kas olete kindel, et soovite installida pistikprogrammi: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'Pistikprogrammi installimine ebaõnnestus.';
$lang['admin_plugins_install_success'] = 'Pistikprogramm on edukalt installitud.';
$lang['admin_plugins_install_tip'] = 'Pluginad laiendavad olemasolevaid funktsioone lisavalikute või integratsioonidega. Installige need <a href="%s" target="_blank" rel="noopener">pluginakataloogist</a> või laadige üles <b>.zip</b>-fail.';
$lang['admin_plugins_update_confirm'] = 'Kas olete kindel, et soovite selle pistikprogrammi värskendada?';
$lang['admin_plugins_update_error'] = 'Pistikprogrammi värskendamine ebaõnnestus.';
$lang['admin_plugins_update_success'] = 'Pistikprogramm värskendati edukalt.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Lisa teema';
$lang['admin_themes_delete_confirm'] = 'Kas olete kindel, et soovite kustutada teema: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Teema kustutamine ebaõnnestus.';
$lang['admin_themes_delete_error_active'] = 'Praegu aktiivset teemat ei saa kustutada.';
$lang['admin_themes_delete_success'] = 'Teema kustutati edukalt.';
$lang['admin_themes_disable_confirm'] = 'Kas olete kindel, et soovite deaktiveerida teema: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Teema deaktiveerimine ebaõnnestus.';
$lang['admin_themes_disable_error_active'] = 'Aktiivset teemat ei saa keelata.';
$lang['admin_themes_disable_success'] = 'Teema deaktiveeriti edukalt.';
$lang['admin_themes_enable_confirm'] = 'Kas olete kindel, et soovite aktiveerida teema: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Teema aktiveerimine ebaõnnestus.';
$lang['admin_themes_enable_success'] = 'Teema aktiveeriti edukalt.';
$lang['admin_themes_install_confirm'] = 'Kas olete kindel, et soovite installida teemat: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'Teema installimine ebaõnnestus.';
$lang['admin_themes_install_success'] = 'Teema on edukalt installitud.';
$lang['admin_themes_install_tip'] = 'Teemad muudavad teie saidi välimust ja paigutust. Valige teema <a href="%s" target="_blank" rel="noopener">teemakogust</a> või laadige oma teema installimiseks üles <b>.zip</b>-fail.';
$lang['admin_themes_none_tip'] = 'See rakendus töötab ilma teemata. Paigaldage teema, et kohandada avalikku kasutajaliidest.';
$lang['admin_themes_update_confirm'] = 'Kas olete kindel, et soovite selle teema värskendada?';
$lang['admin_themes_update_error'] = 'Teema värskendamine ebaõnnestus.';
$lang['admin_themes_update_success'] = 'Teema värskendati edukalt.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Menüüd';
$lang['admin_menus_assign_error'] = 'Menüüasukohtade uuendamine ebaõnnestus.';
$lang['admin_menus_assign_success'] = 'Menüüasukohti uuendati edukalt.';
$lang['admin_menus_header'] = 'Saadaval on <b>%s</b> menüüasukohta.';
$lang['admin_menus_location'] = 'Asukoht';
$lang['admin_menus_locations'] = 'Menüüasukohad';
$lang['admin_menus_manage'] = 'Halda menüüsid';
$lang['admin_menus_menu'] = 'Määratud menüü';
$lang['admin_menus_none'] = '&#151; Puudub &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Lisa keel';
$lang['admin_languages_default_confirm'] = 'Kas olete kindel, et soovite määrata selle keele saidi vaikekeeleks?';
$lang['admin_languages_default_error'] = 'Vaikekeele muutmine ebaõnnestus.';
$lang['admin_languages_default_error_nochange'] = 'See keel on juba vaikekeel.';
$lang['admin_languages_default_success'] = 'Vaikekeel muudeti edukalt.';
$lang['admin_languages_delete_confirm'] = 'Kas olete kindel, et soovite kustutada keele: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'Keele kustutamine ebaõnnestus.';
$lang['admin_languages_delete_error_active'] = 'Aktiivseid keeli ei saa kustutada.';
$lang['admin_languages_delete_error_default'] = 'Vaikekeelt ei saa kustutada.';
$lang['admin_languages_delete_success'] = 'Keel on edukalt kustutatud.';
$lang['admin_languages_disable_all_confirm'] = 'Kas olete kindel, et soovite kõik keeled keelata?';
$lang['admin_languages_disable_all_error'] = 'Kõigi keelte keelamine ebaõnnestus.';
$lang['admin_languages_disable_all_success'] = 'Kõik keeled keelati edukalt.';
$lang['admin_languages_disable_confirm'] = 'Kas olete kindel, et soovite keelata keele: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Keele keelamine ebaõnnestus.';
$lang['admin_languages_disable_error_default'] = 'Vaikekeelt ei saa keelata.';
$lang['admin_languages_disable_error_nochange'] = 'See keel on juba keelatud.';
$lang['admin_languages_disable_success'] = 'Keel keelati edukalt.';
$lang['admin_languages_enable_all_confirm'] = 'Kas olete kindel, et soovite kõik keeled lubada?';
$lang['admin_languages_enable_all_error'] = 'Kõigi keelte lubamine ebaõnnestus.';
$lang['admin_languages_enable_all_success'] = 'Kõik keeled lubati edukalt.';
$lang['admin_languages_enable_confirm'] = 'Kas olete kindel, et soovite lubada keele: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Keele lubamine ebaõnnestus.';
$lang['admin_languages_enable_error_nochange'] = 'See keel on juba lubatud.';
$lang['admin_languages_enable_success'] = 'Keel lubati edukalt.';
$lang['admin_languages_install_confirm'] = 'Kas olete kindel, et soovite installida keelt: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'Keele installimine ebaõnnestus.';
$lang['admin_languages_install_success'] = 'Keel on edukalt installitud.';
$lang['admin_languages_install_tip'] = 'Keeled lisavad tõlked teie saidi liidesele ja sisule. Sirvige saadaolevaid keeli <a href="%s" target="_blank" rel="noopener">keelte kataloogis</a> või laadige üles <b>.zip</b>-pakett, et installida oma keel.';
$lang['admin_languages_tip'] = 'Lubage, keelake ja määrake saidi vaikekeel. Lubatud keeled on saidi külastajatele saadaval.';
$lang['admin_languages_update_confirm'] = 'Kas olete kindel, et soovite selle keele värskendada?';
$lang['admin_languages_update_error'] = 'Keele värskendamine ebaõnnestus.';
$lang['admin_languages_update_success'] = 'Keel värskendati edukalt.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Pakett on juba olemas.';
$lang['package_archive_download_failed'] = 'Paketi arhiivi allalaadimine ebaõnnestus.';
$lang['package_backup_create_error'] = 'Paketi varukoopia loomine ebaõnnestus.';
$lang['package_backup_dir_failed'] = 'Varukoopia kausta loomine ebaõnnestus: %s';
$lang['package_backup_missing'] = 'Varukoopia faili ei eksisteeri.';
$lang['package_backup_path_error'] = 'Varukoopia faili teekonda ei õnnestunud tuvastada.';
$lang['package_backup_request_invalid'] = 'Vigane varukoopia päring.';
$lang['package_backup_restore_error'] = 'Paketi varukoopia taastamine ebaõnnestus.';
$lang['package_catalog_type_unknown'] = 'Tundmatu kataloogi tüüp.';
$lang['package_checksum_error'] = 'Paketi kontrollsumma (checksum) kinnitamine ebaõnnestus.';
$lang['package_copy_files_error'] = 'Paketi failide kopeerimine sihtkohta ebaõnnestus.';
$lang['package_copy_updates_error'] = 'Uuendusfailide kopeerimine sihtkohta ebaõnnestus.';
$lang['package_dest_dir_failed'] = 'Sihtkoha kausta loomine ebaõnnestus: %s';
$lang['package_destination_error'] = 'Paketi sihtkohta ei õnnestunud tuvastada.';
$lang['package_download_dir_failed'] = 'Allalaadimise kausta loomine ebaõnnestus: %s';
$lang['package_download_empty'] = 'Paketi allalaadimine tagastas tühja vastuse.';
$lang['package_download_request_invalid'] = 'Vigane paketi allalaadimise päring.';
$lang['package_extract_failed'] = 'ZIP-faili %s lahtipakkimine ebaõnnestus';
$lang['package_invalid_lang_files'] = 'Vigane keel — puuduvad rakenduse jaoks nõutavad keelefailid.';
$lang['package_invalid_lang_structure'] = 'Vigane keel — admin ja/või ci3 kataloogid puuduvad.';
$lang['package_invalid_missing_info'] = 'Vigane %s: fail "info.php" on puudu.';
$lang['package_invalid_module_structure'] = 'Vigane moodul — puuduvad nõutavad config ja/või controllers kataloogid.';
$lang['package_invalid_plugin_boot'] = 'Vigane plugin — "boot.php" on puudu.';
$lang['package_invalid_plugin_contents'] = 'Vigane plugin — pluginad ei tohi sisaldada kontrollereid ega vaateid (views).';
$lang['package_invalid_theme_boot'] = 'Vigane teema — "boot.php" on puudu.';
$lang['package_invalid_theme_views'] = 'Vigane teema — views kataloog on puudu.';
$lang['package_no_root_dir'] = 'Pakett ei sisalda juurkataloogi.';
$lang['package_not_downloadable'] = 'Pakett ei ole avalikult alla laaditav.';
$lang['package_not_in_registry'] = 'Pakett ei ole avalikus registris saadaval.';
$lang['package_request_invalid'] = 'Vigane paketi päring.';
$lang['package_rollback_request_invalid'] = 'Vigane tagasipööramise päring.';
$lang['package_root_mismatch'] = 'Paketi arhiivi juurkaust ei vasta väärtusele %s';
$lang['package_single_root_required'] = 'Pakett peab sisaldama täpselt ühte juurkataloogi.';
$lang['package_source_error'] = 'Paketi lähtekohta ei õnnestunud tuvastada.';
$lang['package_system_core_restricted'] = 'Süsteemikomponente ei saa pakettidena installida.';
$lang['package_temp_dir_failed'] = 'Ajutise kausta loomine ebaõnnestus: %s';
$lang['package_type_unknown'] = 'Tundmatu paketi tüüp.';
$lang['package_update_request_invalid'] = 'Vigane paketi värskendamise päring.';
$lang['package_update_root_mismatch'] = 'Uuenduse arhiivi juurkaust ei vasta väärtusele %s.';
$lang['package_upload_dir_failed'] = 'Üleslaadimise kausta loomine ebaõnnestus: %s';
$lang['package_url_invalid'] = 'Vigane paketi levitamise URL.';
$lang['package_write_failed'] = 'Paketi kirjutamine asukohta %s ebaõnnestus';
$lang['package_zip_not_found'] = 'Paketi ZIP-faili ei eksisteeri: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Uued uuendused on saadaval!';
$lang['update_backup_error'] = 'Olemasolevast paketist varukoopia loomine ebaõnnestus. Uuendamine katkestati.';
$lang['update_check_disabled'] = 'Automaatne uuenduste kontroll on keelatud. Uuenduste vaatamiseks lubage see.';
$lang['update_check_error'] = 'Uuenduste kontrolli käivitamine praegu ebaõnnestus.';
$lang['update_check_success'] = 'Uuenduste kontroll lõpetati edukalt.';
$lang['update_install_error'] = 'Paketti ei õnnestunud installida. Praegune versioon säilitati.';
$lang['update_install_success'] = 'Paketti uuendati edukalt uusimale versioonile.';
$lang['update_interval_3days'] = 'Iga 3 päeva järel';
$lang['update_interval_biweekly'] = 'Iga 2 nädala järel';
$lang['update_interval_daily'] = 'Iga päev';
$lang['update_interval_monthly'] = 'Kord kuus';
$lang['update_interval_weekly'] = 'Kord nädalas';
$lang['update_not_available'] = 'Teie veebisait on ajakohane.';
$lang['update_rollback_confirm'] = 'Kas olete kindel, et soovite eelmise versiooni taastada?';
$lang['update_rollback_error'] = 'Eelmise versiooni taastamine ebaõnnestus. Võib olla vajalik käsitsi sekkumine.';
$lang['update_rollback_success'] = 'Eelmine versioon taastati edukalt.';
$lang['updates_available'] = 'Saadaolevad uuendused';
$lang['updates_check_now'] = 'Kontrolli kohe';
$lang['updates_check_now_confirm'] = 'Kas olete kindel, et soovite kohe uuendusi kontrollida?';
$lang['updates_current_version'] = 'Praegune versioon';
$lang['updates_enable'] = 'Luba uuendused';
$lang['updates_last_check'] = 'Viimane kontroll: %s';
$lang['updates_latest_version'] = 'Uusim versioon';
$lang['updates_next_check'] = 'Järgmine ajastatud kontroll: %s';
$lang['updates_previous_version'] = 'Eelmine versioon';
$lang['updates_recent'] = 'Hiljuti uuendatud';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Määratud IP-aadressi blokeerimine ebaõnnestus.';
$lang['admin_firewall_ban_success'] = 'IP-aadress blokeeriti edukalt.';
$lang['admin_firewall_block_ip'] = 'Blokeeri IP-aadress';
$lang['admin_firewall_delete_confirm'] = 'Kas olete kindel, et soovite valitud IP-aadressid vabastada?';
$lang['admin_firewall_delete_error'] = 'Valitud IP-aadresside vabastamine ebaõnnestus.';
$lang['admin_firewall_delete_success'] = 'Valitud IP-aadresside blokeering eemaldati edukalt.';
$lang['admin_firewall_duration'] = 'Blokeeringu kestus';
$lang['admin_firewall_permanent'] = 'Püsiv';
$lang['admin_firewall_reason'] = 'Blokeerimise põhjus';
$lang['admin_firewall_tip'] = 'Vaadake ja hallake IP-aadresse, mille tulemüür on korduvate rikkumiste või kahtlase tegevuse tõttu blokeerinud.';

// Settings
$lang['404_ban_duration'] = '404 blokeeringu kestus';
$lang['404_threshold'] = '404 tabamuste piir';
$lang['uri_ban_duration'] = 'URI blokeeringu kestus';
$lang['uri_strike_threshold'] = 'URI tabamuste piir';
