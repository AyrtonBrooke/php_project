<?php
$dice1 = rand(1, 7);
$dice2 = rand(1, 7);
$matches = 0;

while ($dice1 != $dice2) {
        $dice1 = rand(1, 7);
        $dice2 = rand(1, 7);
        $matches++;
        echo "Dice 1: ", $dice1, "| Dice 2: ", $dice2, "\n";
    }
echo "Matching pair in $matches turns!";
?>