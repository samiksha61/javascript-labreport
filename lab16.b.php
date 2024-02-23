<?php
function calculateRectangleArea($length, $width) {
    return $length * $width;
}

$length = 10; 
$width = 5;   

$area = calculateRectangleArea($length, $width);

echo "The area of the rectangle with length $length and width $width is: $area";
?>
