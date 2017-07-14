<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'wordpress';
$app['version'] = '1.0.0';
$app['release'] = '1';
$app['vendor'] = 'Vendor'; // e.g. Acme Co
$app['packager'] = 'Packager'; // e.g. Gordie Howe
$app['license'] = 'MyLicense'; // e.g. 'GPLv3';
$app['license_core'] = 'MyLicense'; // e.g. 'LGPLv3';
$app['description'] = lang('wordpress_app_description');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('wordpress_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = 'Developer'; // e.g. lang('base_subcategory_settings');


/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////


$app['core_requires'] = array(
    'mariadb-server >= 5.5.40',
    'app-webapp',
    'app-system-database >= 1:1.6.1',
    'webconfig-php-mysql',
    'app-webapp-core',
);

$app['requires'] = array(
    'phpMyAdmin >= 4.4.9',
    'app-webapp-core',
    'app-system-database-core >= 1:1.6.1',
    'app-mariadb >= 2.3.3',
);

$app['core_directory_manifest'] = array(
    '/var/clearos/wordpress' => array(),
    '/var/clearos/wordpress/backup' => array(),
    '/var/clearos/wordpress/verions' => array(),
);
