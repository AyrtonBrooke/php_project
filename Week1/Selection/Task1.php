<?php
$number = rand(1,20);

if ($number % 2 == 0) {
    echo $number, "\nThe number is even";
} else {
    echo $number, "\nThe number is odd";
}
?>