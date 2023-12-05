<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftyfm/craftcms-filemaker' => 
  array (
    'class' => 'craftyfm\\craftcms-filemaker\\Plugin',
    'basePath' => $rootDir . '/src',
    'handle' => 'filemaker',
    'aliases' => 
    array (
      '@craftyfm/craftcms-filemaker' => $rootDir . '/src',
    ),
    'name' => 'filemaker',
    'version' => '1.0.0',
    'description' => 'A craft CMS plugin to simplify connection to the Filemaker Data API. Connect to a filemaker database and use a button from Filemaker to push data into Craft CMS. This plugin also using webhooks to push dat into Filemaker\'s Data API',
    'developer' => 'Stuart Russell',
    'developerEmail' => 'stuart@x2network.net',
    'documentationUrl' => '',
  ),
);
