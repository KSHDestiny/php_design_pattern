<?php

require 'vendor/autoload.php';

$configArray = array(
    'driver' => 'Mysqli',
    'database' => 'adapter_example',
    'username' => 'admin',
    'password' => 'password'
);

$adapter = new Zend\Db\Adapter\Adapter($configArray);

$configArray = array(
    'driver' => 'Pdo_Sqlite',
    'database' => './WSDA_Music.db'
);

$adapter = new Zend\Db\Adapter\Adapter($configArray);