<?php
$item_cost = 3.3;
$item_price = 5;
$overheads = 20;

$profit = $item_price - $item_cost;
$breakeven = ($overheads / $profit);

echo "Profit: £", number_format((float)$profit,2,'.',',');
echo "\nItems sold to break even: ", ceil($breakeven);
?>