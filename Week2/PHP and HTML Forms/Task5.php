<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>
<body>
<form method="get">
    <fieldset>
        <div>
            <label for="num1">Number 1:</label>
            <input type="number" id="num1" name="num1">
        </div>
        
        <div>
            <label for="num2">Number 2:</label>
            <input type="number" id="num2" name="num2">
        </div>
        <div>
            <h3>Operation</h3>
                <li>        +          =         addition</li><br>
                <li>        -          =         minus</li><br>
                <li>        x          =         multiply</li><br>
                <li>        /          =         division</li><br>
                <li>        %          =         remainder</li><br>
        </div>
        <p>Enter the calculator symbol</p>
        <input type="text" name="operation">
        <button>Calculate</button>
    </fieldset>
</form>
</body><br>
<?php
if (!empty($_GET)) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
}

if ($operation == '+') {
    $ans = $num1 + $num2;
    echo $num1, " + ", $num2, " = ", $ans;
}
elseif ($operation == '-') {
    $ans = $num1 - $num2;
    echo $num1, " - ", $num2, " = ", $ans;
}
elseif ($operation == 'x') {
    $ans = $num1 * $num2;
    echo $num1, " multiplied by ", $num2, " = ", $ans;
}
elseif ($operation == '/') {
    $ans = $num1 / $num2;
    echo $num1, " divided by ", $num2, " = ", $ans;
}
elseif ($operation == '%') {
    $ans = $num1 % $num2;
    echo $num1, " remainder ", $num2, " = ", $ans;
}
?>
</html>
