<?php
$number = rand(0, 8);

if($number == 1) {
    echo "One for sorrow";
} elseif ($number == 2) {
    echo "Two for joy";
} elseif ($number == 3) {
    echo "Three for a girl";
} elseif ($number == 4) {
    echo "Four for a boy";
} elseif ($number == 5) {
    echo "Five for silver";
} elseif ($number == 6) {
    echo "Six for gold";
} elseif ($number == 7) {
    echo "Seven for a secret never to be told";
} else {
    echo "Not a permitted number";
}