<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Süsteemi värskendused saadaval';
$lang['emails_updates_available_message'] = <<<EOT
Tere,

Tuvastati uued süsteemiuuendused saidile {site_anchor}.

Need uuendused võivad sisaldada turvaparandusi, jõudluse täiustusi või uusi funktsioone.
Soovitame need esimesel võimalusel üle vaadata.

Saate saadaolevaid uuendusi üle vaadata ja hallata halduspaneelilt:
{link}

Kui olete uuendused juba üle vaadanud või rakendanud, pole edasisi toiminguid vaja.

See on automaatne süsteemiteade, mille saatis {site_name}.
Palun ärge vastake sellele e-kirjale.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Konto aktiveerimine';
$lang['emails_account_activation_request_message'] = <<<EOT
Tere {name},

Aitäh, et registreerusite saidil {site_anchor}. Teie konto on loodud ja see tuleb enne kasutamist aktiveerida.

Konto aktiveerimiseks klõpsake järgmisel lingil või kopeerige see oma brauserisse:
{link}

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Uus aktiveerimislink';
$lang['emails_account_activation_resend_message'] = <<<EOT
Tere {name},

Taotlesite hiljuti saidil {site_anchor} uut aktiveerimislinki, kuna teie konto ei olnud aktiivne.
Konto aktiveerimiseks klõpsake järgmisel lingil või kopeerige see oma brauserisse:
{link}

Kui teie seda ei taotlenud, pole edasisi toiminguid vaja.

See toiming taotleti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Konto aktiveeritud';
$lang['emails_account_activation_success_message'] = <<<EOT
Tere {name},

Teie konto saidil {site_anchor} aktiveeriti edukalt. Nüüd saate igal ajal <a href="{login_url}" target="_blank" rel="noopener">sisse logida</a>.

Loodame, et naudite siin viibimist.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Konto ootab kinnitamist';
$lang['emails_account_approval_pending_message'] = <<<EOT
Tere {name},

Aitäh, et liitusite meiega saidil {site_anchor}. Teie konto on loodud, kuid vajab enne aktiveerimist saidi administraatori heakskiitu.
Vabandame selle olulise sammu pärast, kuid see on vajalik ainult turvalisuse tagamiseks.

Saate kinnituskirja kohe, kui teie konto on heaks kiidetud.

Loodame, et naudite siin viibimist.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Konto kinnitatud';
$lang['emails_account_approval_success_message'] = <<<EOT
Tere {name},

Head uudised! Teie konto saidil {site_anchor} on just heaks kiidetud.

Nüüd saate sisse logida ja hakata oma kontot kohe kasutama:
{link}

Meil on hea meel, et olete meiega.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Konto taastatud';
$lang['emails_account_restored_message'] = <<<EOT
Tere {name},

See e-kiri kinnitab, et teie konto saidil {site_anchor} on edukalt taastatud.

Tere tulemast tagasi, loodame, et seekord naudite siin viibimist.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Tere tulemast saidile {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Tere {name},

Enamik inimesi saadab pärast oma saidil registreerumist väga pika tervituskirjade jada.

Hea uudis: meie ei ole enamik inimesi.
Aga siiski tahame teid tervitada ja tänada, et liitusite meiega saidil {site_anchor}.

Loodame, et naudite siin viibimist.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'E-posti muutmise taotlus';
$lang['emails_email_change_request_message'] = <<<EOT
Tere {name},

Saate selle e-kirja, kuna saime teie saidi {site_anchor} konto jaoks e-posti aadressi muutmise taotluse.

Kui soovite jätkata, klõpsake järgmisel lingil või kopeerige see oma brauserisse:
{link}

Kui teie ei taotlenud e-posti aadressi muutmist, pole edasisi toiminguid vaja.

See toiming taotleti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'E-posti aadress muudetud';
$lang['emails_email_change_success_message'] = <<<EOT
Tere {name},

See e-kiri kinnitab, et teie saidil {site_anchor} kasutatav e-posti aadress on edukalt muudetud.

Kui teie seda toimingut ei teinud, võtke meiega selle probleemi lahendamiseks võimalikult kiiresti ühendust.

See toiming tehti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Ebaõnnestunud sisselogimise hoiatus';
$lang['emails_login_alert_failure_message'] = <<<EOT
Tere {name},

Keegi kasutas hiljuti valesid paroole, et proovida teie {site_name} kontole sisse logida.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Kui see ei olnud teie, siis ärge muretsege, nende sisselogimiskatse ei õnnestunud.

Kui see olite teie ja te ei mäleta oma parooli, klõpsake selle lähtestamiseks alloleval lingil:
{reset_link}

Kui teil on oma kontole sisselogimisega probleeme, võtke ühendust meie meeskonnaga või taotlege ühe klõpsuga sisselogimislinki.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Eduka sisselogimise teade';
$lang['emails_login_alert_success_message'] = <<<EOT
Tere {name},

Saadame teile selle e-kirja seoses eduka sisselogimisega teie {site_name} kontole.

Server Date: {date}
Device: {browser}, {platform}
IP Address: {ip_link}

Kui see olite teie, võite selle e-kirja turvaliselt tähelepanuta jätta.

Kui teie ei loginud sisse, muutke oma konto kaitsmiseks kohe parooli.

Abi saamiseks võtke ühendust meie tugimeeskonnaga.

-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Kiire sisselogimislink';
$lang['emails_login_magic_link_message'] = <<<EOT
Tere {name},

Taotlesite ühe klõpsuga sisselogimist oma kontole saidil {site_anchor}.

Klõpsake alloleval lingil või kopeerige see oma brauserisse ning teid logitakse kohe sisse:
{link}

See link aegub 15 minuti pärast. Kui teie seda ei taotlenud, ignoreerige seda e-kirja.

See toiming taotleti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Kaheastmeline autentimine';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Tere {name},

Teie kahefaktorilise autentimise kood on: <strong>{code}</strong>

Saate alati kahefaktorilise autentimise oma konto seadetes välja lülitada.

See toiming tehti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Parooli lähtestamise taotlus';
$lang['emails_password_change_request_message'] = <<<EOT
Tere {name},

Saate selle e-kirja, kuna saime teie saidi {site_anchor} konto jaoks parooli lähtestamise taotluse.

Kui soovite jätkata, klõpsake järgmisel lingil või kopeerige see oma brauserisse:
{link}

Kui teie ei taotlenud parooli lähtestamist, pole edasisi toiminguid vaja.

See toiming taotleti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Parool muudetud';
$lang['emails_password_change_success_message'] = <<<EOT
Tere {name},

See e-kiri kinnitab, et teie parool saidil {site_anchor} on edukalt muudetud. Nüüd saate uuega <a href="{login_url}" target="_blank" rel="noopener">sisse logida</a>.

Kui teie seda toimingut ei teinud, võtke meiega selle probleemi lahendamiseks võimalikult kiiresti ühendust.

See toiming tehti sellelt IP-aadressilt: {ip_link}.

Lugupidamisega,
-- {site_name} meeskond.
EOT;
