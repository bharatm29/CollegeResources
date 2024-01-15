<?php

function add(){
    $a = 5;
    $b = 5;
    $c = $a + $b;

    echo "The sum is: ".$c;
    echo "\n";
}

add();

$name = "name.";

function global_var(){
    global $name;
    echo "Global var name is: ".$name;
    echo "\n";
}

global_var();

function static_var(){
    // When we just want one consistent thing to be present throught the application lifetime like a token in shopping mall, we use static vars.
    echo "\n";

    static $num1 = 3;

    $num2 = 6;

    $num1++;
    $num2++;

    echo "Static: ".$num1;
    echo "\n";

    echo "Non-Static: ".$num2;
    echo "\n";
}

static_var();
static_var();

$x = "abc";
$$x = 200;
echo $x."\n";
echo $$x."\n";
echo $abc."\n";

//Write a program to swap two variables without using the third variable

function swap(){
    $n1 = 19;
    $n2 = 91;

    echo "Values before swapping ".$n1." ".$n2."\n";

    $n1 = $n1 + $n2;
    $n2 = $n1 - $n2;
    $n1 = $n1 - $n2;

    echo "Values after swapping ".$n1." ".$n2."\n";
}

swap();
?>
