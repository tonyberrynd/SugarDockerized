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

if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}

chdir(dirname(__FILE__));
define('ENTRY_POINT_TYPE', 'api');
require_once 'include/entryPoint.php';

// enable portal
$portalConfig = new ParserModifyPortalConfig();
$portalConfig->setUpPortal();
ModuleInstaller::handlePortalConfig();

// refresh cache
MetaDataManager::refreshSectionCache(MetaDataManager::MM_CONFIG, ['base', 'portal']);
MetaDataManager::refreshSectionCache(MetaDataManager::MM_SERVERINFO, ['base', 'portal']);
