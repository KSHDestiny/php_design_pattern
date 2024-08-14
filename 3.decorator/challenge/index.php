<?php

include_once 'decorator.php';

$object = new Decorator();
$object->sentence = "This is a sample sentence that we're going to manipulate in the Decorator.";

echo $object->lower();

echo $object->uppercase();