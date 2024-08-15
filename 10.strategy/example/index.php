<?php

require 'vendor/autoload.php';

$input = "This is a string of text that should be filtered & handle 's properly.";

$htmlEntities = new Zend\Filter\HtmlEntities();
echo $htmlEntities->filter($input);

echo '<br />';

$alphanumeric = new \Zend\I18n\Filter\Alnum();
echo $alphanumeric->filter($input);

echo '<br />';

// Now allow whitespace
$alphanumeric = new \Zend\I18n\Filter\Alnum(true);
echo $alphanumeric->filter($input);