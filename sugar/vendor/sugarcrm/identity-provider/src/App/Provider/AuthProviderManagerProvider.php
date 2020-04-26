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

namespace Sugarcrm\IdentityProvider\App\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Sugarcrm\IdentityProvider\App\Application;
use Sugarcrm\IdentityProvider\App\Authentication\AuthProviderManagerBuilder;

class AuthProviderManagerProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['authManager'] = function ($app) {
            /** @var Application $app */
            $authProviderManager = (new AuthProviderManagerBuilder())->buildAuthProviderManager($app);
            $authProviderManager->setEventDispatcher($app->getEventDispatcher());
            return $authProviderManager;
        };
    }
}
