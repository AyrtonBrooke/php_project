<?php
$amount = 40;
$students = 14;

$teachers = ($amount % $students);
$sweets_per_student = floor($amount / $students);

echo "Each student gets ", $sweets_per_student, " sweets.";
echo "\n The teacher get ", $teachers, "sweets.";
?>