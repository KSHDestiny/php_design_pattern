<?php

include_once 'actions/DefaultAction.php';
include_once 'actions/GreetingFactory.php';
include_once 'actions/GreetingViewHello.php';
include_once 'actions/GreetingViewGoodbye.php';
include_once 'domains/greeting.php';
include_once 'responders/DefaultResponder.php';
include_once 'responders/GreetingViewHelloResponder.php';
include_once 'responders/GreetingViewGoodbyeResponder.php';

$request = isset($_GET['a']) ? $_GET['a'] : 'index';
$module = isset($_GET['m']) ? $_GET['m'] : '';

switch($module) {
    case 'greeting':
        $action = GreetingFactory::getAction($request);
        break;
    default:
        $action = new DefaultAction();
}

$action->run();