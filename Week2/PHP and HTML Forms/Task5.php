<?php
if (!empty($_POST)) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
}
echo <<<MENU
1. Add
2. Subtract
3. Multiply
4. Divide
5. Remainder\n
MENU;

$operation = readline("Select the menu number: ");

if ($operation == 1) {
    $ans = $int1 + $int2;
    echo $int1, " + ", $int2, " = ", $ans;
}
elseif ($operation == 2) {
    $ans = $int1 - $int2;
    echo $int1, " - ", $int2, " = ", $ans;
}
elseif ($operation == 3) {
    $ans = $int1 * $int2;
    echo $int1, " multiplied by ", $int2, " = ", $ans;
}
elseif ($operation == 4) {
    $ans = $int1 / $int2;
    echo $int1, " divided by ", $int2, " = ", $ans;
}
elseif ($operation == 5) {
    $ans = $int1 % $int2;
    echo $int1, " remainder ", $int2, " = ", $ans;
}
else {
    echo "Enter a number between 1 - 5";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>
<body>
<form method="post">
    <fieldset>
        <div>
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1">
        </div>
        <div>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2">
        </div>
    </fieldset>
</form>
</body>
</html>
