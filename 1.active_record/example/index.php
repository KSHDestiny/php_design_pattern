<?php

require 'vendor/autoload.php';
include_once 'user.php';

$user = User::find(2);

echo '<pre>';
print_r($user);