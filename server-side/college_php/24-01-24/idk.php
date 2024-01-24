<?php
//Write a program to check weather given number is palindrome or not
/*$num = 111;
$num_copy = $num;

$rev = 0;

while ($num_copy > 0){
    $rev = $rev * 10 + ($num_copy % 10);

    $num_copy = floor($num_copy / 10);
}

if ($num == $rev){
    echo "Number ".$num." is palindrome";
}
else {
    echo "Number ".$num." is not palindrome";
}*/

//Write a program to check whether given 3-digit number is armstrong number or not.

$num = 153;
$num_copy = $num;

$cube_sum = 0;

while($num_copy > 0){
    $r = $num_copy % 10;
    $cube_sum += $r ** 3;
    $num_copy = floor($num_copy / 10);
}

if($num == $cube_sum){
    echo "Number ".$num." is an armstrong number";
}
else {
    echo "Number ".$num." is not an armstrong number";
}

//Write a program to check whether given number is prime number or not
function isPrime($num) {
    if($num < 2){
        return false;
    }
    for($i = 2; $i <= floor(sqrt($num)); $i++){
        if($num % $i == 0){
            return false;
        }
    }

    return true;
}

$num = 127;

echo "<br>";
echo isPrime($num) ? $num." is prime" : $num." is not prime";

//Write a program to find x raise to y
function power($x, $y){
    if ($y == 0){
        return 1;
    }

    if ($y < 0){
        $y = abs($y);
        $x = floor(1 / $x);
    }

    $res = 1;

    while ($y > 0){
        if ($y % 2 != 0) {
            $res *= $x;
        }

        $x *= $x;
        $y = floor($y / 2);
    }

    return $res;
}

echo "<br>";
echo power(2, 4);
?>
