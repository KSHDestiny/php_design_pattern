<?php

include_once 'shapes.php';

$shape = Shape::getShape('circle', 3);
// This should output 9*Pi
echo $shape->getArea();


$shape = Shape::getShape('square', 3);
// This should output 9
echo $shape->getArea();