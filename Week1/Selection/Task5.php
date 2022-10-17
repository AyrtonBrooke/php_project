<?php
$num1 = readline("Enter the first integer: ");
$num2 = readline("Enter the first integer: ");

echo <<<MENU
1. Add
2. Subtract
3. Multiply
4. Divide
5. Remainder\n
MENU;

$operation = readline("Select the menu number: ");

if ($operation == 1) {
    $ans = $num1 + $num2;
    echo $num1, " + ", $num2, " = ", $ans;
}
elseif ($operation == 2) {
    $ans = $num1 - $num2;
    echo $num1, " - ", $num2, " = ", $ans;
}
elseif ($operation == 3) {
    $ans = $num1 * $num2;
    echo $num1, " multiplied by ", $num2, " = ", $ans;
}
elseif ($operation == 4) {
    $ans = $num1 / $num2;
    echo $num1, " divided by ", $num2, " = ", $ans;
}
elseif ($operation == 5) {
    $ans = $num1 % $num2;
    echo $num1, " remainder ", $num2, " = ", $ans;
} 
else {
    echo "Enter a number between 1 - 5";
}


?>