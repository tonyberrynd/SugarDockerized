<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Instalirani su sljedeći moduli:',
	'DESC_MODULES_QUEUED'						=> 'Sljedeći moduli spremni su za instalaciju:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nije moguće odrediti grupu',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Nije moguće odrediti vlasnika',
	'ERR_UW_CONFIG_WRITE'						=> 'Pogreška pri ažuriranju datoteke config.php s informacijama o novoj verziji.',
	'ERR_UW_CONFIG'								=> 'Omogućite zapisivanje u datoteku config.php i ponovno učitajte ovu stranicu.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Nije moguće pisanje u direktoriju',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Datoteka nije kopirana',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Problem pri uklanjanju paketa ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Nije moguće čitati datoteku.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Nije moguće premjestiti datoteku ili pisati u nju',
	'ERR_UW_FLAVOR_2'							=> 'Nadogradi izdanje: ',
	'ERR_UW_FLAVOR'								=> 'Izdanje sustava SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> 'Nije moguće stvoriti/pisati u ./upgradeWizard.log. Popravite dozvole na svom direktoriju za SugarCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload postavljeno na vrijednost koja je veća od 1.<br/>Promijenite to u datoteci php.ini i ponovno pokrenite mrežni poslužitelj.',
	'ERR_UW_MYSQL_VERSION'						=> 'Za SugarCRM potrebna je verzija MySQL-a 4.1.2 ili novija. Pronađeno: ',
	'ERR_UW_OCI8_VERSION'				        => 'Sugar ne podržava vašu verziju Oraclea. Morate instalirati verziju koja je kompatibilna s aplikacijom Sugar. Podržane verzije Oraclea potražite u matrici kompatibilnosti u Bilješkama o izdanju. Trenutačna verzija: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Odredite datoteku i pokušajte ponovno!',
	'ERR_UW_NO_FILES'							=> 'Došlo je do pogreške, nema datoteka za provjeru.',
	'ERR_UW_NO_MANIFEST'						=> 'U zip datoteci nedostaje datoteka manifest.php. Nije moguće nastaviti.',
	'ERR_UW_NO_VIEW'							=> 'Naveden je neispravan prikaz.',
	'ERR_UW_NO_VIEW2'							=> 'Prikaz nije definiran. Idite na početnu stranicu administracije da biste otišli na tu stranicu.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Neispravno učitavanje.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Nije moguće stvoriti privremeni direktorij. Provjerite dozvole datoteke.',
	'ERR_UW_ONLY_PATCHES'						=> 'Na ovoj stranici možete učitati samo popravke.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Pronađene pogreške tijekom provjere prije pokretanja',
	'ERR_UW_UPLOAD_ERR'							=> 'Došlo je do pogreške pri učitavanju datoteke, pokušajte ponovno!<br>\n',
	'ERR_UW_VERSION'							=> 'Verzija sustava SugarCRM: ',
    'ERR_UW_WRONG_TYPE'							=> 'Ova se stranica ne pokreće ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Učitana datoteka premašuje smjernicu upload_max_filesize u datoteci php.ini.',
													2 => 'Učitana datoteka premašuje smjernicu MAX_FILE_SIZE koja je navedena u HTML obrascu.',
													3 => 'Učitana datoteka samo je djelomično učitana.',
													4 => 'Datoteka nije učitana.',
													5 => 'Nepoznata pogreška.',
													6 => 'Nedostaje privremena mapa.',
													7 => 'Neuspješno pisanje datoteke na disk.',
													8 => 'Proširenje je zaustavilo učitavanje datoteke.',
),

    'ERROR_HT_NO_WRITE'                         => 'Nije moguće pisati na datoteku: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Datoteka manifesta mora odrediti vrstu paketa.',
    'ERROR_PACKAGE_TYPE'                        => 'Datoteka manifesta određuje neprepoznatu vrstu paketa: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Paket za nadogradnju nije kompatibilan s ovom verzijom Sugara: %s',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Učitana datoteka nije kompatibilna s ovim izdanjem (Professional, Enterprise ili Ultimate izdanje) Sugara: %s',

    'ERROR_UW_CONFIG_DB'                        => 'Pogreška pri spremanju konfiguracijske varijable %s u bazu podataka (ključ %s, vrijednost %s).',
    'ERR_NOT_ADMIN'                             => "Neovlašteni pristup administraciji.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Nemate dozvolu za pristup ovoj stranici.',

    'LBL_BUTTON_BACK'							=> '< Natrag',
	'LBL_BUTTON_CANCEL'							=> 'Odustani',
	'LBL_BUTTON_DELETE'							=> 'Izbriši paket',
	'LBL_BUTTON_DONE'							=> 'Dovršeno',
	'LBL_BUTTON_EXIT'							=> 'Izađi',
	'LBL_BUTTON_INSTALL'						=> 'Nadogradnja prije pokretanja',
	'LBL_BUTTON_NEXT'							=> 'Sljedeće >',
	'LBL_BUTTON_RECHECK'						=> 'Pon. provjeri',
	'LBL_BUTTON_RESTART'						=> 'Ponovno pokreni',

	'LBL_UPLOAD_UPGRADE'						=> 'Učitaj paket za nadogradnju ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Datoteka za učitavanje nije pronađena',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Sigurn. kop. datoteke',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Sigurnosno kopirane datoteke iz ove nadogradnje moguće je pronaći u',
	'LBL_UW_BACKUP'								=> 'SIGURN. KOP. datoteke',
	'LBL_UW_CANCEL_DESC'						=> 'Otkazana je nadogradnja. Izbrisane su sve privremene datoteke koje su kopirane i datoteke nadogradnje koje su učitane.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Promjene sheme skupa znakova',
	'LBL_UW_CHECK_ALL'							=> 'Provjeri sve',
	'LBL_UW_CHECKLIST'							=> 'Koraci nadogradnje',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Sigurnosne kopije prebrisanih datoteka nalaze se u sljedećem direktoriju: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Ručno spoji sljedeće datoteke:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proces nadogradnje: ručno spajanje datoteka',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Odaberite s kojom ste metodom diferencijacije najupoznatiji za spajanje datoteka. Dok se ovo ne dovrši, instalacija aplikacije SugarCRM bit će u neodređenom stanju, a nadogradnja nedovršena.',
	'LBL_UW_COMPLETE'							=> 'Dovršeno',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Ova nova verzija Sugara sadrži novi licencni ugovor. Želite li nastaviti?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Zadovoljeni su svi preduvjeti za postavke sustava',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Postavka za PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Modul cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Modul IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Modul MBStrings',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'Parametar mbstring.func_overload za modul MBStrings',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Postavka za PHP: ograničenje pohrane',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'Postavka za PHP: pregled',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server i PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimalna verzija za MySQL',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimalna verzija baze podataka',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Lokacija datoteke php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'Verzija PHP-a',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Postavka za PHP: sigurni način',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Provjera postavki poslužitelja',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Otkrivene postavke',
	'LBL_UW_COMPLIANCE_XML'						=> 'Raščlanjivanje XML-a',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Podrška za datoteke zip',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Datoteke uspješno kopirane',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Promjene sheme prilagođene tablice',

	'LBL_UW_DB_CHOICE1'							=> 'Čarobnjak za nadogradnju pokreće SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Ručno pokretanje upita za SQL',
	'LBL_UW_DB_INSERT_FAILED'					=> 'UMETANJE nije uspjelo - razlikuju se uspoređeni rezultati',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Povlastice baze podataka',
	'LBL_UW_DB_ISSUES'							=> 'Problemi s bazom podataka',
	'LBL_UW_DB_METHOD'							=> 'Način ažuriranja baze podataka',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'IZMIJENI TABLICU [table] DODAJ STUPAC [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'IZMIJENI TABLICU [table] PROMIJENI STUPAC [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'STVORI TABLICU [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'IZBRIŠI IZ TABLICE [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'IZMIJENI TABLICU [table] ODBACI STUPAC [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'ODBACI TABLICU [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Sve povlastice dostupne',
	'LBL_UW_DB_NO_INSERT'						=> 'UMETNI U TABLICU [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'ODABERI [x] IZ TABLICE [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'AŽURIRAJ TABLICU [table]',
	'LBL_UW_DB_PERMS'							=> 'Potrebna povlastica',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Instalirani su sljedeći paketi nadogradnje:',
	'LBL_UW_END_DESC'							=> 'Sustav je nadograđen.',
	'LBL_UW_END_DESC2'							=> 'Ako ste odabrali da ručno izvršite korake poput spajanja datoteka i upita za SQL, učinite to sada. Vaš će sustav biti u nestabilnom stanju dok ne dovršite te korake.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Nadogradnja je dovršena.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Kliknite na Dovršeno da biste izašli iz čarobnjaka za nadogradnju.',
	'LBL_UW_END_LOGOUT'							=> 'Ako namjeravate primijeniti drugi paket nadogradnje putem čarobnjaka za nadogradnju, prije toga se morate odjaviti i zatim ponovno prijaviti.',
	'LBL_UW_END_LOGOUT2'						=> 'Odjava',
	'LBL_UW_REPAIR_INDEX'						=> 'Za poboljšanje rada baze podataka, pokrenite skriptu <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Popravak indeksa</a>.',

	'LBL_UW_FILE_DELETED'						=> " uklonjeno: .<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grupa',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Dozvole za datoteku',
	'LBL_UW_FILE_ISSUES'						=> 'Problemi s datotekom',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Za datoteku je potrebna ručna diferencijacija',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Na sve je datoteke moguće pisati</b>',
	'LBL_UW_FILE_OWNER'							=> 'Vlasnik',
	'LBL_UW_FILE_PERMS'							=> 'Dozvole',
	'LBL_UW_FILE_UPLOADED'						=> ' učitano',
	'LBL_UW_FILE'								=> 'Naziv datoteke',
	'LBL_UW_FILES_QUEUED'						=> 'Sljedeći paketi nadogradnje spremni su za instalaciju:',
	'LBL_UW_FILES_REMOVED'						=> "Sljedeće će se datoteke ukloniti iz sustava:<br>\n",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Kliknite na Sljedeće da biste učitali pakete nadogradnje.</b>",
	'LBL_UW_FROZEN'								=> 'Prije nastavka učitajte paket.',
	'LBL_UW_HIDE_DETAILS'						=> 'Sakrij detalje',
	'LBL_UW_IN_PROGRESS'						=> 'U tijeku',
	'LBL_UW_INCLUDING'							=> 'Uključujući',
	'LBL_UW_INCOMPLETE'							=> 'Nepotpuno',
	'LBL_UW_INSTALL'							=> 'INSTALACIJA datoteke',
	'LBL_UW_MANUAL_MERGE'						=> 'Spajanje datoteke',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modul je spreman za deinstalaciju. Kliknite na „Potvrdi” da biste nastavili s deinstalacijom.<br>\n",
	'LBL_UW_MODULE_READY'						=> "Modul je spreman za instalaciju. Kliknite na „Potvrdi” da biste nastavili s instalacijom.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nema zabilježenih nadogradnji.',
	'LBL_UW_NONE'								=> 'Nema',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nije dostupno',
	'LBL_UW_OVERWRITE_DESC'						=> "Sve će promijenjene datoteke biti prebrisane, uključujući prilagodbe koda i promjene predložaka. Jeste li sigurni da želite nastaviti?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Prebriši sve datoteke',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Ručno spajanje - sačuvaj sve',
	'LBL_UW_OVERWRITE_FILES'					=> 'Način spajanja',
	'LBL_UW_PATCH_READY'						=> 'Popravak je spreman za nastavak. Kliknite na gumb „Potvrdi” u nastavku da biste dovršili proces nadogradnje.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Obavijest: pronađeni su prilagođeni izgledi</h2><br />Sljedeće datoteke imaju nova polja ili izmijenjen izgled zaslona koji je primijenjen putem Studija. Popravak koji ćete instalirati također sadrži izmjene datoteke/a. Za <u>svaku datoteku</u>možete izabrati:<br><ul><li>[<b>Zadano</b>] Zadržite svoju verziju tako da potvrdni okvir ostavite prazan. Ignorirat će se izmjene popravka.</li>ili<li>Prihvatite ažurirane datoteke tako da odaberete potvrdni okvir. Morat ćete ponovno primijeniti izglede putem Studija.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Stvoriti stavku zadatka iz ručnog spajanja?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Provjera prije pokretanja',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferencirano ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Pošaljite poruku e-pošte samom sebi kao podsjetnik za ručno spajanje?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Izmijenjene su datoteke navedene u nastavku. Odznačite stavke za koje je potrebno ručno spajanje. <i>Sve će se promjene izgleda automatski odznačiti; označite one koje je potrebno prebrisati.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nije potrebno ručno spajanje datoteke.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nije potrebno.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Automatski sačuvane datoteke:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Zadovoljena sva testiranja prije pokretanja.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Kliknite na Sljedeće da biste kopirali nadograđene datoteke u sustav.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Napomena:</b> obavezan je ostatak postupka nadogradnje te će se klikom na Sljedeće od vas zahtijevati da dovršite postupak. Ako ne želite nastaviti, kliknite na gumb Odustani.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Prebaci sve datoteke',

	'LBL_UW_REBUILD_TITLE'						=> 'Rezultat ponovne izgradnje',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Promjene sheme',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Prikaži otkrivene postavke',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Prikaži dozvole za bazu podataka koje nedostaju',
	'LBL_UW_SHOW_DETAILS'						=> 'Prikaži detalje',
	'LBL_UW_SHOW_DIFFS'							=> 'Prikaži datoteke za koje je potrebno ručno spajanje',
	'LBL_UW_SHOW_NW_FILES'						=> 'Prikaži datoteke s neispravnim dozvolama',
	'LBL_UW_SHOW_SCHEMA'						=> 'Prikaži skriptu promjene sheme',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Prikaži neispravne upite',
	'LBL_UW_SHOW'								=> 'Prikaži',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Preskočene datoteke',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Preskakanje prebrisanja datoteke - odabrano ručno spajanje.',
	'LBL_UW_SQL_RUN'							=> 'Provjeri kada se SQL ručno pokreće',
	'LBL_UW_START_DESC'							=> 'Čarobnjak će vam pomoću u nadogradnji ove instance Sugara.',
	'LBL_UW_START_DESC2'						=> 'Napomena: preporučujemo da sigurnosno kopirate bazu podataka Sugara i datoteke sustava (sve datoteke u mapi SugarCRM) prije nadogradnje sustava proizvodnje. Preporučujemo da najprije provedete testnu nadogradnju na kloniranoj instanci vašeg sustava proizvodnje.',
	'LBL_UW_START_DESC3'						=> 'Kliknite na Sljedeće da biste izvršiti provjeru sustava kako biste provjerili je li sustav spreman za nadogradnju. Provjera obuhvaća dozvole za datoteku, povlastice baze podataka i postavke poslužitelja.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Novi čarobnjak za nadogradnju sada će nastaviti s postupkom nadogradnje. Nastavite svoju nadogradnju.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Dobro došli u novi čarobnjak za nadogradnju',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Provjera u tijeku, pričekajte. To može potrajati do 30 sekundi.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Pronalazak značajnih datoteka za provjeru.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Datoteke',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Pronađeno',

	'LBL_UW_TITLE_CANCEL'						=> 'Odustani',
	'LBL_UW_TITLE_COMMIT'						=> 'Potvrdi nadogradnju',
	'LBL_UW_TITLE_END'							=> 'Ispitaj',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Provjera prije pokretanja',
	'LBL_UW_TITLE_START'						=> 'Dobro došli',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Provjera sustava',
	'LBL_UW_TITLE_UPLOAD'						=> 'Učitaj paket',
	'LBL_UW_TITLE'								=> 'Čarobnjak za nadogradnju',
	'LBL_UW_UNINSTALL'							=> 'Deinstaliraj',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Prihvati licencu',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Pretvori licencu',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Nadograđeni/prilagođeni moduli',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Sljedeći su moduli otkriveni kao prilagođeni i sačuvani',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Sljedeći su moduli otkriveni kao prilagođeni za Studio i nadograđeni su',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Pokretanje u tijeku',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Provjera sustava u tijeku',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Provjera licence u tijeku',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Provjera prije pokretanja u tijeku',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Kopiranje datoteke u tijeku',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Potvrđivanje nadogradnje u tijeku',
    'LBL_UW_COMMIT_DESC'						=> 'Kliknite na Sljedeće da biste pokrenuli dodatne skripte za nadogradnju.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Nadogradnja skripta u tijeku',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Nadogradnja sažetka u tijeku',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'u tijeku     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Isteklo vrijeme',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Otkazivanje i čišćenje nadogradnje u tijeku',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Nadogradnja može potrajati',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Provjere učitavanja u tijeku',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Učitavanje paketa za nadogradnju ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Želite li da Sugar odbaci zastarjelu shemu 451?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Nadogradi odbačenu staru shemu 451 čarobnjaka',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Shema ručnog odbacivanja nakon nadogradnje',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Način odbacivanja stare sheme',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Prikaži staru shemu koju je moguće odbaciti',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Preskočeni upiti',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Sugar ne podržava vašu verziju PHP-a. Morate instalirati verziju koja je kompatibilna s aplikacijom Sugar. Podržane verzije PHP-a potražite u matrici kompatibilnosti u Bilješkama o izdanju. Vaša je verzija ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Uključen je način rada kompatibilnosti s ranijim verzijama PHP-a. Za nastavak postavite zend.ze1_compatibility_mode na Isključeno',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Radnja',
    'LBL_ML_CANCEL'             => 'Odustani',
    'LBL_ML_COMMIT'=>'Potvrdi',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Datum instalacije',
    'LBL_ML_NAME' => 'Naziv',
    'LBL_ML_PUBLISHED' => 'Datum objave',
    'LBL_ML_TYPE' => 'Vrsta',
    'LBL_ML_UNINSTALLABLE' => 'Ne može se instalirati',
    'LBL_ML_VERSION' => 'Verzija',
	'LBL_ML_INSTALL'=>'Instaliraj',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Pratitelj',
	'LBL_MODULE_NAME' => 'Čarobnjak za nadogradnju',
	'LBL_MODULE_NAME_SINGULAR' => 'Čarobnjak za nadogradnju',
	'LBL_UPLOAD_SUCCESS' => 'Paket za nadogradnju uspješno je učitan. Kliknite na Sljedeće da biste proveli konačnu provjeru.',
	'LBL_UW_TITLE_LAYOUTS' => 'Potvrdi izglede',
	'LBL_LAYOUT_MODULE_TITLE' => 'Izgledi',
	'LBL_LAYOUT_MERGE_DESC' => 'Dostupna su nova polja koja su dodana kao dio ove nadogradnje i moguće ih je automatski dodati postojećim izgledima modula. Više informacija o novi poljima potražite u Bilješkama o izdanju za verziju koju nadograđujete.<br><br>Ako ne želite dodati nova polja, odznačite modul i vaši se prilagođeni izgledi neće promijeniti. Sva će polja biti dostupna u Studiju nakon nadogradnje. <br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Kliknite na Sljedeće da biste potvrdili promjene i dovršili nadogradnju.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Kliknite na Sljedeće da biste dovršili nadogradnju.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Potvrdi izglede',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Potvrdi rezultate izgleda',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Sljedeći su izgledi uspješno spojeni:',
	'LBL_SELECT_FILE' => 'Odaberite datoteku:',
	'LBL_LANGPACKS' => 'Jezični paketi' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Učitavač modula' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Nadogradnje popravka' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Teme' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'Tijek rada' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Nadogradnja' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'Obrada' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Globalno vidljivo',
);
