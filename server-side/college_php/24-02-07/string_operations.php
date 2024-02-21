<?php
$str = "Hello world!          ";

//String length
echo "String length: ".strlen($str)."\n<br>";

//Word count separated by whitespaces
echo "Word count: ".str_word_count($str)."\n<br>";

echo strtoupper($str)."\n<br>";
echo strtolower($str)."\n<br>";

echo str_replace("Sharma", "Pal", "Naman Sharma")."\n<br>";

echo strrev($str)."\n<br>";

function isPalindrome($str){
    return strrev($str) == $str;
}

$s = "naman";

if (isPalindrome($s)) {
    echo "$s is a Palindrome";
}
else{
    echo "$s is not a Palindrome";
}
echo "\n<br>";

//Trim removes while space like characters
echo trim("            Hll")."\n<br>";

// Split function but keep in mind it also splits the trailing and leading one
print_r(explode(" ", $str));
?>
