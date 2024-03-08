<?php
return [
  'database' => [
    'host' => '127.0.0.1',
    'port' => '3306',
    'charset' => NULL,
    'dbname' => 'espocrm',
    'user' => 'ali',
    'password' => 'aliraxa229',
    'platform' => 'Mysql'
  ],
  'smtpPassword' => '',
  'logger' => [
    'path' => 'data/logs/espo.log',
    'level' => 'WARNING',
    'rotation' => true,
    'maxFileNumber' => 30,
    'printTrace' => false
  ],
  'restrictedMode' => false,
  'webSocketMessager' => 'ZeroMQ',
  'clientSecurityHeadersDisabled' => false,
  'clientCspDisabled' => false,
  'clientCspScriptSourceList' => [
    0 => 'https://maps.googleapis.com'
  ],
  'adminUpgradeDisabled' => false,
  'isInstalled' => true,
  'microtimeInternal' => 1709903073.338192,
  'passwordSalt' => '80e455fcf5d11547',
  'cryptKey' => '1aefc88a61afb833b6458931c337122b',
  'hashSecretKey' => '16dcfa669d36a7e387925eb06a4cf0aa',
  'actualDatabaseType' => 'mariadb',
  'actualDatabaseVersion' => '10.4.32',
  'instanceId' => '0cb9149a-7e3b-4897-a3ef-338659a79825'
];
