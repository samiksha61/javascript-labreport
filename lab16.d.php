<?php
$age = 25;
$is_student = true;

if ($age >= 18 && $is_student) {
    echo "You are eligible for student discounts.";
} else {
    echo "You are not eligible for student discounts.";
}

echo "\n";

$income = 30000;
$is_veteran = false;

if ($income < 25000 || $is_veteran) {
    echo "You are eligible for discounted services.";
} else {
    echo "You are not eligible for discounted services.";
}

echo "\n";

$is_admin = true;
if (!$is_admin) {
    echo "You do not have admin privileges.";
} else {
    echo "You have admin privileges.";
}
?>
