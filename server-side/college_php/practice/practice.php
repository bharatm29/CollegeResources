<?php
$str = trim("   this   is SO depressing   ");

echo strrchr($str, "is")."\n";

echo strpos($str, "is")."\n";

print_r(preg_split("/\s+/", $str));

echo date("d/m/y A")
echo "\n";

print_r(explode(" ", $str));
echo "\n";

echo ucfirst($str)."\n";
echo ucwords($str)."\n";

echo chunk_split($str, 2, "-")."\n";

echo substr($str, 10, 10)."\n";

echo strspn($str ^ "this is SO depressing", "\0")."\n";

echo str_shuffle($str)."\n";

echo strlen($str)."\n";

echo str_word_count($str)."\n";

echo strtolower($str)."\n";
echo strtoupper($str)."\n";

echo str_replace("SO", "SO FKING", $str)."\n";

echo strrev($str)."\n";

echo "ARRAY======================================\n";

$arr = preg_split("/\s+/", $str);
echo count($arr)." == ".sizeof($arr)."\n";

print_r(array_slice($arr, 2, 5));
print_r(array_reverse($arr));
print_r(shuffle($arr));
echo "\n";

print_r(array_keys($arr));
echo "\n";

rsort($arr);
print_r($arr);
echo "\n";

sort($arr);
print_r($arr);
echo "\n";

print_r(array_search("SO", $arr));
echo "\n";

print_r(array_intersect(explode("this is not fun", " "), $arr));
echo "\n";

var_dump($arr);

unset($arr);
date_default_timezone_set("Asia/Calcutta");

echo date("d/m/y A")
?>
