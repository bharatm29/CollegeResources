<?php
/*function fib($n) {
    if($n < 2){
        return $n;
    }

    return fib($n - 1) + fib($n - 2);
}

echo fib(9)*/

/*$arrayName = array("one", "two", "three");

foreach ($arrayName as $elem) {
    echo "Elem is: ".$elem."<br>";
};*/

/*$a = 1;

while ($a <= 10) {
    echo $a."<br>";
    $a++;
}*/

//Write a php program to display factors of a given number
/*$factor = 1;
$num = 6;

$factorSum = 0;

echo "Factors of ".$num." are: ";

while ($factor <= $num - 1){
    if($num % $factor == 0){
        echo $factor.", ";
        $factorSum += $factor;
    }

    $factor++;
}
echo "<br>";

//prefect number => factorSum == num
if ($factorSum == $num){
    echo $num." is a perfect number";
}
else {
    echo $num." is not a perfect number";
}
echo "<br>";*/

//Finding out seperate digits of a number

$num = 123;
$rev = 0;

while ($num > 0){
    $r = $num % 10;
    /* echo $r." "; */
    $rev = $rev * 10 + $r;
    $num = floor($num / 10);
}
echo $rev."<br>"
?>
