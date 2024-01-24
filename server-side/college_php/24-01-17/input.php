<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Taking input from user</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        Enter details
        <form method="post">
            <input type="text" name="name" placeholder="type your name">
            <input type="number" name="age" placeholder="type your age">
            <input type="number" name="num" placeholder="type a number">
            <input type="submit" value="Submit">
        </form>
    </body>
</html>

<?php
if($_POST){
    /*if ($_POST['age']) {
        echo "You have provided an age value<br>";
    }
    $age = $_POST['age'];
    $name = $_POST['name'];

    echo "You are ".$name.", and you are ".$age." years old<br>";

    if($age % 2 == 0){
        echo "Your age is even";
    }
    else {
        echo "Your age is odd";
    }
    echo "<br>";

    $num = $_POST['num'];
    for ($i=0; $i <= $num; $i++) {
        echo $i.", ";
    }
    echo "<br>";
    */

    //write a program to find factorial of input number
    $num = $_POST['num'];

    /*$f = 1;
    for ($i=1; $i <= $num; $i++) { 
        $f *= $i;
    }
    echo "Factorial of ".$num." is ".$f."<br>";
     */

    //write an program to print table of a number
    for($i=1; $i <= 10; $i++){
        echo $num." x ".$i." = ".($num * $i)."<br>";
    }
}
?>
