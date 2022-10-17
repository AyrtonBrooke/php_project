<?php
$number_of_adults = 4;
$number_of_children = 29;

$adult_ticket = 10.50;
$child_ticket = 7.30;

$total_cost = ($number_of_adults * $adult_ticket) + ($number_of_children * $child_ticket);

if ($number_of_children > 20) {
    $ticket_deduct = $total_cost - (2 * $adult_ticket);
}

$percent = ($ticket_deduct / 100) * 10;
$final_cost = $ticket_deduct - $percent;

echo "The total cost is: £", number_format((float)$total_cost,2,'.', ',');
echo "\nThe final cost after deals: £", number_format((float)$final_cost,2,'.', ',');

?>