<?php

include 'strategies.php';

$even = new EvenStrategy();
$filter = new NumberFilter($even);

for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}

$odd = new OddStrategy();
$filter = new NumberFilter($odd);

for ($i = 1; $i <= 10; $i++) {
    $filter->filter($i);
}