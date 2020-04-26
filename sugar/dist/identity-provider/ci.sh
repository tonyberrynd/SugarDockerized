# Your installation or use of this SugarCRM file is subject to the applicable
# terms available at
# http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
# If you do not agree to all of the applicable terms or do not have the
# authority to bind the entity as an authorized representative, then do not
# install or use this SugarCRM file.
#
# Copyright (C) SugarCRM Inc. All rights reserved.

cp app/config/parameters.php.test app/config/parameters.php
cp -rf app/config/certs/travis.crt.dist app/config/certs/travis.crt
cp -rf app/config/certs/travis.key.dist app/config/certs/travis.key

# Setup real database for Functional Tests suite
mysql -uroot -e "create database idm_db;" -pSugar123
./bin/console migrations:migrate --no-interaction && ./bin/console fixtures:load
