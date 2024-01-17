<?php
// Data types | scalar, compound, special
// That data type defines what amount of memory should be allocated for that variables.
// We are defining different data types according to memory reqirements.

//array => contains similar data types. Contiguous memory allocation.

$words = array("words1","words2","words3");
var_dump($words); //returns datatype and values.

echo "<br>";
echo "Array element1: ".$words[0]."<br>";
echo "Array element2: ".$words[1]."<br>";
echo "Array element3: ".$words[2]."<br>";

// Array Union -> picks element from first array if it is present in second, otherwise if the element is only there in one of the array, it picks that element.
$words1 = array("words1","words4");
echo $words + $words1;
echo "<br>";

//Control flow
$num = 12;
if ($num % 2 == 0) {
    echo "Number is even"."<br>";
}
else {
    echo "Number is odd"."<br>";
}

$marks = 69;
if ($marks < 33) {
    echo "fail";
}
else if ($marks >= 33 && $marks < 50){
    echo "D grade";
}
else if ($marks >= 50 && $marks < 65){
    echo "C grade";
}
else if ($marks >= 65 && $marks < 80){
    echo "B grade";
}
else if ($marks >= 80 && $marks < 100){
    echo "A grade";
}
echo "<br>";
