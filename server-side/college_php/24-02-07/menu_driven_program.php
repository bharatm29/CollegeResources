<?php
//Q1: Write a menu driven program to perform the following operation on a associative array
$arr = array("zero" => 0, "one" => 1, "two" => 2, "three" => 3);
//a) Display the elements of an array along with the keys

foreach($arr as $key => $val){
    echo $key." => ".$val."<br>";
}

echo "Size of the array is: ".count($arr)."<br>";
echo "Size of the array is: ".sizeof($arr)."<br>";

//We can also use print_r to display information about the array
echo "Info of the array is: <br>";
print_r($arr);

//Deleting from array
$arr1 = array_slice($arr, 1);
print_r($arr1);

//Reversing the array
print_r(array_reverse($arr));

//Shuffle

$arr2 = shuffle($arr);
print_r($arr2);

//Double qoutes expansion => can access variables and have escape sequences.
$s = "lol";
echo "\njk $s";

//Heredoc => used to declare a string. Basically backtick strings with variable expansion.
$a = <<<demo
aaa    Not working?
$s
Not working?2
demo;
echo $a;

//Nowdoc => similar to single quotes no variable expansion.
$b = <<<'demo'
aaa    Not working?
$s
Not working?2
demo;
echo $b;
?>
