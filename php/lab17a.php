<?php
$grades = array(
    "samiksha" => 85,
    "saayam" => 90,
    "Supriya" => 78,
    "kaira" => 95,
    "laluu" => 82
);

$totalGrades = 0;
foreach ($grades as $student => $grade) {
    $totalGrades += $grade;
}


$averageGrade = $totalGrades / count($grades);

echo "The average grade of the students is: " . $averageGrade;
?>
