<?php

include_once 'component.php';
include_once 'dispatcher.php';

$componentA = new Component('Component A');
$dispatcher = Dispatcher::getInstance();

$componentB = new Component('Component B');
$dispatcher::subscribe($componentA, $componentB);

$componentC = new Component('Component C');
$dispatcher::subscribe($componentA, $componentC);

$i = 0;
$componentA->addOneAndEcho($i++);