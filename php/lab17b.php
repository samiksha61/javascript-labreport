<?php
function calculateCircleArea($radius) {
    return pi() * pow($radius, 2);
}

$radius = 5;
$area = calculateCircleArea($radius);
echo "The area of a circle with radius $radius is: $area";
?>
