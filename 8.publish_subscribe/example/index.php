<?php

require 'vendor/autoload.php';

use Zend\EventManager\EventManager;

$events = new EventManager();
$events->attach('load', function ($e) {
    $event = $e->getName();
    $params = $e->getParams();
    echo "Just captured event $event with these parameters: " . json_encode($params) . "\n";
});

$params = array('city' => 'Austin', 'state' => 'Texas');
$events->trigger('load', null, $params);
$events->trigger('test', null, $params);
