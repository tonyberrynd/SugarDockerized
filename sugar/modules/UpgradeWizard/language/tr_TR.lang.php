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
	'DESC_MODULES_INSTALLED'					=> 'Yüklenen modüller:',
	'DESC_MODULES_QUEUED'						=> 'Yüklenmeye hazır olan modüller:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Grup belirlenemiyor',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Sahip belirlenemiyor',
	'ERR_UW_CONFIG_WRITE'						=> 'Config.php yeni versiyon bilgisi ile güncellenirken bir hata oluştu.',
	'ERR_UW_CONFIG'								=> 'Lütfen config.php dosyasını yazılabilir hale getirin ve bu sayfayı tekrar yükleyin.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Dizin yazılabilir değil',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Dosya kopyalanmadı',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Paket silinirken problem oluştu',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Dosya okunamıyor.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Dosya taşınamıyor veya yazılamıyor',
	'ERR_UW_FLAVOR_2'							=> 'Niteliği güncelle:',
	'ERR_UW_FLAVOR'								=> 'SugarCRM Sistem Niteliği:',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log oluşturulamıyor/yazılamıyor. Lütfen SugarCRM dizinindeki izin ayarlarını düzeltin.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload 1 den yüksek bir değer olarak atanmış. php.ini dosyasında bu değişikliği yapın ve Web servisini yeniden başlatın.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM çalışması için, MySQL versiyon 4.1.2 ve üstü gerekmekte. Bulunan:',
	'ERR_UW_OCI8_VERSION'				        => 'Oracle sürümü Sugar  tarafından desteklenmiyor. Sugar uygulaması ile uyumlu bir sürümünü yüklemeniz gerekiyor. Oracle&#39;ın desteklenen sürümleri için Sürüm Notları içinde Uyumluluk Matrisine danışın. Güncel sürüm:',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Bir dosya belirtin ve tekrar deneyin!',
	'ERR_UW_NO_FILES'							=> 'Bir hata oluştu, kontrol edilecek dosyalar bulunamadı.',
	'ERR_UW_NO_MANIFEST'						=> 'Zip dosyasında bir manifest.php dosyası eksik. Devam edilemiyor.',
	'ERR_UW_NO_VIEW'							=> 'Geçersiz görünümü.',
	'ERR_UW_NO_VIEW2'							=> 'Görünüm tanımlı değil. Bu sayfayı açmak için lütfen Sistem Yöneticisi ana sayfasına gidin.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Geçerli yükleme değil.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Temp dizini oluşturulamadı. Dosya izinlerini kontrol edin.',
	'ERR_UW_ONLY_PATCHES'						=> 'Bu sayfadan sadece yama yükleyebilirsiniz.',
    'ERR_UW_PREFLIGHT_ERRORS'					=> 'Ön Kontrol Sırasında Hatalar Bulundu',
	'ERR_UW_UPLOAD_ERR'							=> 'Dosya yüklenirken bir hata oluştu, tekrar deneyin!<br>\n',
	'ERR_UW_VERSION'							=> 'SugarCRM Sistem Versiyonu:',
    'ERR_UW_WRONG_TYPE'							=> 'Bu sayfa çalıştırmak için değil',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Yüklenen dosya php.ini dosyasında belirtilen upload_max_filesize direktifini geçiyor.',
													2 => 'Yüklenen dosya, HTML formunda belirtilen MAX_FILE_SIZE direktifini geçiyor.',
													3 => 'Yüklenen dosyanın sadece bir kısmı yüklenebildi.',
													4 => 'Herhangi bir dosya yüklenmedi.',
													5 => 'Bilinmeyen hata.',
													6 => 'Geçici bir dosya yok.',
													7 => 'Dosyanın diske yazılması başarısız.',
													8 => 'Dosyanın yüklenmesi eklenti tarafından durduruldu.',
),

    'ERROR_HT_NO_WRITE'                         => 'Dosyaya yazılamıyor: %s',
    'ERROR_MANIFEST_TYPE'                       => 'Bildirim dosyası paket türü belirtmelisiniz.',
    'ERROR_PACKAGE_TYPE'                        => 'Bildirim dosyası, tanınmayan bir paket türünü belirtiyor: %s',
    'ERROR_VERSION_INCOMPATIBLE'                => 'Yüklenen dosya Sugar&#39;ın bu sürümü ile uyumlu değildir:',
    'ERROR_FLAVOR_INCOMPATIBLE'                 => 'Yüklenen dosya, Sugar&#39;ın bu sürümüyle (Professional, Enterprise or Ultimate edition) uyumlu değil: %s',

    'ERROR_UW_CONFIG_DB'                        => '%s config değişkeninin veritabanına (anahtar %s, değer %s) kaydı sırasında hata.',
    'ERR_NOT_ADMIN'                             => "Sistem Yönetimi Fonksiyonlarına izin verilmemiş erişim.",
    'ERR_NO_VIEW_ACCESS_REASON'                 => 'Bu sayfaya erişmek için yetkiniz yok.',

    'LBL_BUTTON_BACK'							=> '< Önceki',
	'LBL_BUTTON_CANCEL'							=> 'İptal',
	'LBL_BUTTON_DELETE'							=> 'Paketi Sil',
	'LBL_BUTTON_DONE'							=> 'Tamam',
	'LBL_BUTTON_EXIT'							=> 'Çık',
	'LBL_BUTTON_INSTALL'						=> 'Ön Kontrol Yükseltme',
	'LBL_BUTTON_NEXT'							=> 'Sonraki >',
	'LBL_BUTTON_RECHECK'						=> 'Tekrar kontrol',
	'LBL_BUTTON_RESTART'						=> 'Yeniden Başlat',

	'LBL_UPLOAD_UPGRADE'						=> 'Yükseltme Paketini Yükle',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Yüklenecek dosya bulunamadı',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Dosya Yedekle',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Bu yükseltme işleminde yedeklenen dosyaların bulunduğu yer',
	'LBL_UW_BACKUP'								=> 'Dosya YEDEKLE',
	'LBL_UW_CANCEL_DESC'						=> 'Yükseltme işlemi iptal edildi. Yüklenen Yükseltme dosyaları ve geçici dosyaların hepsi silindi.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Karakter Kümesi Şema Değişiklikleri',
	'LBL_UW_CHECK_ALL'							=> 'Tümünü Seç',
	'LBL_UW_CHECKLIST'							=> 'Yükseltme Adımları',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Üstüne yazılan dosyaların yedeklerinin bulunduğu yer:",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Dosyaları manuel bir şekilde birleştir:",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Yükseltme Süreci: Dosyaları Manuel Birleştir',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Bu dosyaları birleştirmek için size en uygun yöntemi kullanın. Bu işlem tamamlanana kadar, SugarCRM yükseltme işlemi belirsiz bir durumda olacak ve yükseltme tamamlanmayacaktır.',
	'LBL_UW_COMPLETE'							=> 'Tamamlandı',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Bu yeni Sugar Versiyonu için yeni bir lisans anlaşması gerekmekte. Devam etmek istiyor musunuz?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Tüm Sistem Ayar Gereksinimleri uygun',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP Ayarları: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL Modülü',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Modülü',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Modülü',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parametresi',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP Ayarları: Hafıza Limiti',
    'LBL_UW_COMPLIANCE_STREAM'                  => 'PHP Ayarı: Akış',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Sunucusu & PHP Sihirli Tırnaklar GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Minimum MySQL Versiyon',
    'LBL_UW_COMPLIANCE_DB'                      => 'Minimum Veri Tabanı Sürümü',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'php.ini dizini',
    'LBL_UW_COMPLIANCE_PHP_VERSION'             => 'PHP Versiyon',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP Ayarlar: Güvenlik Modu',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Sunucu Ayar Kontrolü',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Tespit edilen Ayarlar',
	'LBL_UW_COMPLIANCE_XML'						=> 'XML Çözümleme',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE'				=> 'Zip Destek',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Dosyalar Başarılıyla Kopyalandı',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Uyarlanmış Tablo Şema Değişiklikleri',

	'LBL_UW_DB_CHOICE1'							=> 'Yükseltme Sihirbazı SQL çalıştırır',
	'LBL_UW_DB_CHOICE2'							=> 'Manuel SQL Sorguları',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Ekleme başarısız - karşılaştırılmış sonuçlar farklılık',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Veritabanı Ayrıcalıkları',
	'LBL_UW_DB_ISSUES'							=> 'Veritabanı Problemleri',
	'LBL_UW_DB_METHOD'							=> 'Veritabanı Yükseltme Metodu',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'TABLOYU DEĞİŞTİR [table] SÜTUN EKLE [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'TABLOYU DEĞİŞTİR [table] SÜTUNU DEĞİŞTİR [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'TABLO OLUŞTUR [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'ŞURADAN SİL [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'TABLOYU DEĞİŞTİR [table] SÜRUNU BIRAK [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'TABLOYU BIRAK [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Tüm Ayrıcalıklar Mevcut',
	'LBL_UW_DB_NO_INSERT'						=> 'ŞURAYA EKLE [table]',
	'LBL_UW_DB_NO_SELECT'						=> '[table] TABLOSUNDAN [x] SEÇ',
	'LBL_UW_DB_NO_UPDATE'						=> '[table] TABLOSUNU GÜNCELLE',
	'LBL_UW_DB_PERMS'							=> 'Gerekli Ayrıcalık',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Aşağıdaki güncelleme paketleri yüklenmiştir:',
	'LBL_UW_END_DESC'							=> 'Sistem yükseltildi.',
	'LBL_UW_END_DESC2'							=> 'Eğer Dosya birleştirme veya SQL sorguları gibi bir adımı manuel olarak çalıştırmak istediyseniz, bunu şimdi yapın. Bu adımları tamamlamadığınız sürece, sisteminiz dengesiz durumda kalacaktır.',
	'LBL_UW_END_LOGOUT_PRE'						=> 'Yükseltme tamamlandı.',
	'LBL_UW_END_LOGOUT_PRE2'					=> 'Tamama tıklayarak Yükseltme Sihirbazından çıkabilirsiniz.',
	'LBL_UW_END_LOGOUT'							=> 'Eğer Yükseltme Sihirbazını kullanarak başka bir yükseltme paketi uygulamak istiyorsanız, çıkış yapın ve tekrar giriş yaparak devam edin.',
	'LBL_UW_END_LOGOUT2'						=> 'Çıkış',
	'LBL_UW_REPAIR_INDEX'						=> 'Veritabanı performans geliştirmeleri için, lütfen <a href="index.php?module=Administration&action=RepairIndex" target="_blank">İndeksleri Onar</a> komutunu çalıştırın.',

	'LBL_UW_FILE_DELETED'						=> "kaldırıldı.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grup',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Dosya İzni',
	'LBL_UW_FILE_ISSUES'						=> 'Dosya Problemleri',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Dosya Manuel Diff gerektirir',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Tüm Dosyalar Yazılabilir</b>',
	'LBL_UW_FILE_OWNER'							=> 'Sahibi',
	'LBL_UW_FILE_PERMS'							=> 'İzinler',
	'LBL_UW_FILE_UPLOADED'						=> 'yüklendi',
	'LBL_UW_FILE'								=> 'Dosya İsmi',
	'LBL_UW_FILES_QUEUED'						=> 'Aşağıdaki yükseltme paketleri yüklenmeye hazır:',
	'LBL_UW_FILES_REMOVED'						=> "Aşağıdaki dosyalar sistemden silinecek:<br>",
	'LBL_UW_NEXT_TO_UPLOAD'						=> "<b>Yükseltme dosyalarını yüklemek için İleri butonuna tıklayın.</b>",
	'LBL_UW_FROZEN'								=> 'Devam etmeden önce bir paket yükleyin.',
	'LBL_UW_HIDE_DETAILS'						=> 'Detayları Sakla',
	'LBL_UW_IN_PROGRESS'						=> 'İşlemde',
	'LBL_UW_INCLUDING'							=> 'İçeriyor',
	'LBL_UW_INCOMPLETE'							=> 'Eksik',
	'LBL_UW_INSTALL'							=> 'Dosya KURULUM',
	'LBL_UW_MANUAL_MERGE'						=> 'Dosya Birleştir',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modül kaldırılmak için hazır. \"Onayla\" butonuna tıklayarak kaldırma işlemine devam edebilirsiniz.<br>",
	'LBL_UW_MODULE_READY'						=> "Modül kurulum için hazır. \"Onay\" butonuna tıklayarak kurma işlemine devam edebilirsiniz.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Kaydedilmiş bir Yükseltme saptanamadı.',
	'LBL_UW_NONE'								=> 'Yok',
	'LBL_UW_NOT_AVAILABLE'						=> 'Mevcut değil',
	'LBL_UW_OVERWRITE_DESC'						=> "Yaptığınız herhangi bir kod özelleştirmesi ve şablon değişikliği dahil, değiştirilen tüm dosyaların, üzerine yazılacaktır. Devam etmek istediğinizden emin misiniz?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Tüm Dosyaların Üzerine Yaz',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manuel Birleştirme - Tümünü Koru',
	'LBL_UW_OVERWRITE_FILES'					=> 'Birleştirme Metodu',
	'LBL_UW_PATCH_READY'						=> 'Yama devam etmek için hazırdır. Yükseltme işlemini tamamlamak için aşağıdaki "Onay" butonuna tıklayın.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Bilgi: Özelleştirilmiş Düzenler Bulundu</h2><br />Aşağıdaki dosya(lar)da yeni alanlar veya Stüdyo aracılığı ile değiştirilmiş ekran yerleşimleri bulunmakta. Kurmak üzere olduğunuz yamada bu dosya(lar)da değişikliğe sebep olacak. <u>Tüm Dosyalar</u> için:<br><ul><li>[<b>Varsayılan</b>] Onay kutusunu boş bırakarak sürümü saklayın. Yama değişiklikleri dikkate alınmayacaktır.</li>veya<li>Onay kutusunu seçerek güncel dosyaları kabul edin. Yerleşimleri yeniden Stüdyo ile uygulamak gerekecektir.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Manuel Birleştirme için Görev Öğesi Oluştur?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Ön Kontrol',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Farklılaştırılmış',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Kendinize Manuel Birleştirme için bir hatırlatma e-postası atmak ister misiniz?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Aşağıda listelenen dosyalar değiştirilmiştir. Manuel birleştirme gerektiren öğelerin işaretini kaldırın. <i>Saptanan yerleşim değişikliklerinin işaretleri otomatik olarak kaldırılır; üstüne yazılması gerekenleri yeniden işaretleyin.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Manuel Dosya Birleştirme Gerekmiyor.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Gerekli değil.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Otomatik-Saklanmış Dosyalar:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Tüm ön testler tamamlandı.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED2'			=> 'Yükseltilen dosyaları sisteme kopyalamak için İleri&#39;ye tıklayın.',
	'LBL_UW_PREFLIGHT_TESTS_PASSED3'			=> '<b>Not:</b> Yükseltme işleminin geri kalanı zorunludur, İleri butonuna tıklarsanız işlemi tamamlamanız gerekir. Devam etmek istemiyorsanız İptal butonuna tıklayın.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Tüm Dosyaları Değiştir',

	'LBL_UW_REBUILD_TITLE'						=> 'Sonuçları Tekrar Hesapla',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Şema Değişiklikleri',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Algılanan Ayarları Göster',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Eksik Veritabanı İzinlerini Göster',
	'LBL_UW_SHOW_DETAILS'						=> 'Detayları Göster',
	'LBL_UW_SHOW_DIFFS'							=> 'Manuel Birleşme Gerektiren Dosyaları Göster',
	'LBL_UW_SHOW_NW_FILES'						=> 'Kötü İzinli Dosyaları Göster',
	'LBL_UW_SHOW_SCHEMA'						=> 'Şema Değiştirme Komut Dizisini Göster',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Kötü Sorguları Göster',
	'LBL_UW_SHOW'								=> 'Göster',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Atlanan Dosyalar',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Dosya Üstüne Yazma Atlanıyor - Manuel Birleştirme Seçildi.',
	'LBL_UW_SQL_RUN'							=> 'SQL Manuel çalıştırıldığında kontrol et',
	'LBL_UW_START_DESC'							=> 'Bu sihirbaz, Sugar yükseltilirken size yardımcı olacaktır.',
	'LBL_UW_START_DESC2'						=> 'NOT: Üretim sistemini yükseltmeden önce, Sugar Veritabanını ve sistem dosyalarını yedeklemeniz tavsiye edilir (SugarCRM klasöründeki tüm dosyalar). İlk olarak, daha önceden aynı kayıttan oluşturulmuş (klonlanmış) bir üretim ortamı örneğinin üzerinde yükseltme testi yapmanız önerilir.',
	'LBL_UW_START_DESC3'						=> 'Sistemin yükseltme için hazır olduğundan emin olmak için İleri butonuna tıklayın. Kontrol; dosya izinleri, veritabanı ayrıcalıkları ve sunucu ayarlarını içerir.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Yeni Yükseltme Sihirbazı şimdi devam edecektir. Lütfen Yükseltme işlemine devam edin.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Yeni Yükseltme Sihirbazına hoş geldiniz',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Kontrol ediliyor, lütfen bekleyin. İşlem 30 saniye kadar sürebilir.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Kontrol edilmesi gereken tüm ilgili dosyaları bulunuyor.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Dosyalar',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Bulundu',

	'LBL_UW_TITLE_CANCEL'						=> 'İptal',
	'LBL_UW_TITLE_COMMIT'						=> 'Yükseltmeyi Onayla',
	'LBL_UW_TITLE_END'							=> 'Bilgi',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Ön Kontrol',
	'LBL_UW_TITLE_START'						=> 'Hoş geldiniz',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Sistem Kontrolü',
	'LBL_UW_TITLE_UPLOAD'						=> 'Yükleme Paketi',
	'LBL_UW_TITLE'								=> 'Yükseltme Sihirbazı',
	'LBL_UW_UNINSTALL'							=> 'Kaldır',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Lisansı Kabul Et',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Lisans Değiştir',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Yükseltilmiş/Kişiselleştirilmiş Modüller',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'Aşağıdaki modüller, özelleştirilmiş ve saklanmış olarak belirlenmiştir',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'Aşağıdaki modüller, Stüdyo-Kişiselleştirilmiş ve Yükseltilmiş olarak belirlenmiştir',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Başlatma devam ediyor',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'Sistem Kontrolü devam ediyor',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'Lisans Kontrolü devam ediyor',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Ön Kontrol devam ediyor',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS'       => 'Dosya Kopyalama devam ediyor',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Yükseltmeye Devam Etmek İçin Onaylayın',
    'LBL_UW_COMMIT_DESC'						=> 'Ek Yükseltme Komut Dizisi çalıştırmak için İleri butonuna tıklayın.',
	'LBL_UPGRADE_SCRIPTS_IN_PROGRESS'			=> 'Yükseltme Komut Dizisi devam ediyor',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Yükseltme Özeti devam ediyor',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'devam ediyor',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Geçen zaman',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Yükseltme İptal ve Temizleme devam ediyor',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Yükseltme biraz zaman alabilir',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Yükleme Kontrolleri devam ediyor',
	'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Yükseltme Paketi Yükleniyor',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Sugar&#39;ın eskimiş 451 Şemasını silmesini ister misiniz?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Yükseltme Sihirbazı eski 451 şemasını düşürür',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Yükseltme sonrasında manuel bir şekilde şemayı sil',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Eski Şema Silme Yöntemi',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Silinebilecek eski Şemaları göster',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Atlanan Sorgular',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'PHP versiyonunuz Sugar tarafından desteklenmemekte. Sugar uygulaması ile uyumlu bir versiyon indirmeniz gerekiyor. Desteklenen PHP sürümleri için Sürüm Notlarındaki Uyumluluk Matrisini inceleyin',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Geri Uyumluluk modu açık. Devam etmek için zend.ze1_compatibility_mod u kapalı duruma getirin',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Aksiyon',
    'LBL_ML_CANCEL'             => 'İptal',
    'LBL_ML_COMMIT'=>'Onay',
    'LBL_ML_DESCRIPTION' => 'Tanım',
    'LBL_ML_INSTALLED' => 'Yükleme Tarih',
    'LBL_ML_NAME' => 'İsim',
    'LBL_ML_PUBLISHED' => 'Yayınlanma Tarihi',
    'LBL_ML_TYPE' => 'Tipi',
    'LBL_ML_UNINSTALLABLE' => 'Kaldırılabilir',
    'LBL_ML_VERSION' => 'Versiyon',
	'LBL_ML_INSTALL'=>'Kur',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Takip Edici',
	'LBL_MODULE_NAME' => 'Yükseltme Sihirbazı',
	'LBL_MODULE_NAME_SINGULAR' => 'Yükseltme Sihirbazı',
	'LBL_UPLOAD_SUCCESS' => 'Yükseltme paketi başarılı bir biçimde yüklendi. İleri butonuna tıklayarak son bir kontrol yapın.',
	'LBL_UW_TITLE_LAYOUTS' => 'Yerleşimleri Onayla',
	'LBL_LAYOUT_MODULE_TITLE' => 'Yerleşimler',
	'LBL_LAYOUT_MERGE_DESC' => 'Bu yükseltmenin bir parçası olarak eklenmiş yeni alanlar mevcut, ve bu alanlar otomatik olarak var olan modülün yerleşimine eklenebilir. Yeni alanlar hakkında daha fazla bilgi edinmek için Sürüm Notlarını inceleyebilirsiniz.<br><br>Eğer yeni alanları eklemek istemiyorsanız, modülün işaretini kaldırın. Böylece kendi yerleşiminiz üzerinde herhangi bir değişiklik olmayacaktır. Bu alanlara daha sonra Stüdyodan ulaşabilirsiniz.<br><br>',
	'LBL_LAYOUT_MERGE_TITLE' => 'Değişiklikleri onaylamak ve yükseltme işlemini bitirmek için İleri butonuna tıklayın.',
	'LBL_LAYOUT_MERGE_TITLE2' => 'Yükseltmeyi tamamlamak için İleri butonuna tıklayın.',
	'LBL_UW_CONFIRM_LAYOUTS' => 'Yerleşimleri Onayla',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Yerleşim Sonuçlarını Onayla',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Aşağıdaki yerleşim başarıyla birleştirildi:',
	'LBL_SELECT_FILE' => 'Dosya Seçin:',
	'LBL_LANGPACKS' => 'Dil Paketleri' /*for 508 compliance fix*/,
	'LBL_MODULELOADER' => 'Modül Yükleyici' /*for 508 compliance fix*/,
	'LBL_PATCHUPGRADES' => 'Yama Güncellemeleri' /*for 508 compliance fix*/,
	'LBL_THEMES' => 'Temalar' /*for 508 compliance fix*/,
	'LBL_WORKFLOW' => 'İş Akışı' /*for 508 compliance fix*/,
	'LBL_UPGRADE' => 'Versiyon Yükseltme' /*for 508 compliance fix*/,
	'LBL_PROCESSING' => 'İşlenen' /*for 508 compliance fix*/,
    'LBL_GLOBAL_TEAM_DESC'                      => 'Global Olarak Görünür',
);
