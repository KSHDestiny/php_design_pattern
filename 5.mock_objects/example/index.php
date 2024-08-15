<?php

require_once 'vendor/autoload.php';
include_once 'email.php';

$email = \Mockery::mock('\Email')->makePartial();
$email->shouldReceive('send')->andReturn(true);

$email->setProperties('test@example.com', 'from@example.com', 'Subject', 'This is the body');

$email->send();