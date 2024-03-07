<?php
$a = 5;
$b = 10;

echo "Before swapping:\n";
echo "a = $a\n";
echo "b = $b\n";

$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo "\nAfter swapping:\n";
echo "a = $a\n";
echo "b = $b\n";
?>
