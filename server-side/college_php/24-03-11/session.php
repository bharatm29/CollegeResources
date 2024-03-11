<?php
session_start();
?>

<html>
<body>

<?php
$_SESSION["Rollnumber"] = "11";
$_SESSION["Name"] = "Bharat";
if(!isset($_SESSION["Counter"])){
    $_SESSION["Counter"] = 1;
} else {
    $_SESSION["Counter"] += 1;
}

if ($_SESSION["Counter"] > 10){
    unset($_SESSION["Counter"]);
}

echo "Counter: ".$_SESSION["Counter"]."<br>";

echo "Session information set successfully<br>";
?>

<a href="p1.php">Visit next page</a>
</body>
</html>
