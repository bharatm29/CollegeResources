<?php
    $i = 3;
    $a = 2;
    while($i < $a){
        echo "hi?";
    }

    $i = 3;
    $a = 2;
    do{
        echo "Hello from do while<br>";
        break;
    }while($i < $a);

    for ($i=1; $i <= 3; $i++) {
        for ($j=1; $j <= 3; $j++) {
            if($i != $j){
                continue;
            }

            echo $i.$j;
            echo "<br>";
        }
    }

    for ($i=1; $i <= 4; $i++) {
        for ($j=1; $j <= $i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
    echo "<br>";
    $n = 10;

    //Write a program to calculcate 1! + 2! + ... + n!
    $sum = 0;
    for ($i=1; $i <= $n; $i++) {
        $f = 1;
        for ($j=1; $j <= $i; $j++) { 
            $f *= $j;
        }
        $sum += $f;
    }

    echo $sum
?>
