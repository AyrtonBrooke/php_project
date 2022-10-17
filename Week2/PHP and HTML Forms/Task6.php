<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Display Form Data</title>
</head>

<body>
<?php
$usernameErr = $password1Err = $password2Err = "";
$username = $password1 = $password2 = "";
$min = 4;
$max = 15;


if (!empty($_POST)) {
    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $usernameErr = "Userame is required";
    } else {
      $username = test_input($_POST["username"]);
    }
  
    if (empty($_POST["password1"])) {
      $password1Err = "First password is required";
    } else {
      $password1 = test_input($_POST["password1"]);
    }

    if (empty($_POST["password2"])) {
        $password2Err = "Second password is required";
      } else {
        $password2 = test_input($_POST["password2"]);
      }
    }

    function validStrLen($username, $min, $max){
        $len = strlen($username);
        if($len < $min){
            return "Field Name is too short, minimum is $min characters ($max max)";
        }
        elseif($len > $max){
            return "Field Name is too long, maximum is $max characters ($min min).";
        }
        return TRUE;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <p><span class="error">* required field</span></p>
            <legend>Personal Details</legend>
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $username;?>">
                <span class="error">* <?php echo $usernameErr;?></span>
            </div>
            <div>
            <label for="password1">Password:</label>
            <input type="password" id="password1" name="password1">
            <span class="error">* <?php echo $password1Err;?></span>
            </div>
            <div>
                <label for="password2">Re-enter password:</label>
                <input type="password" id="password2" name="password2">
                <span class="error">* <?php echo $password2Err;?></span>
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</body><br>
<?php
if ($password1 == $password2) {
    echo "Passwords match!";
} else {
    echo "Passwords do not match!";
}
?>
</html>