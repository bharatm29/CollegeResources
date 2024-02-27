<?php
$str = trim("   this   is SO depressing   ");

echo strrchr($str, "is") . "\n";

echo strpos($str, "is") . "\n";

print_r(preg_split("/\s+/", $str));

echo "\n";

print_r(explode(" ", $str));
echo "\n";

echo ucfirst($str) . "\n";
echo ucwords($str) . "\n";

echo chunk_split($str, 2, "-") . "\n";

echo substr($str, 10, 10) . "\n";

echo strspn($str ^ "this is SO depressing", "\0") . "\n";

echo str_shuffle($str) . "\n";

echo strlen($str) . "\n";

echo str_word_count($str) . "\n";

echo strtolower($str) . "\n";
echo strtoupper($str) . "\n";

echo str_replace("SO", "SO FKING", $str) . "\n";

echo strrev($str) . "\n";

echo "ARRAY======================================\n";

$arr = preg_split("/\s+/", $str);
echo count($arr) . " == " . sizeof($arr) . "\n";

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

echo date("d/m/y A") . "\n";

echo decbin(rand(1e9, 1e11)) . "\n";
echo dechex(rand(1e9, 1e11)) . "\n";
echo decoct(rand(1e9, 1e11)) . "\n";

echo base_convert(rand(1e9, 1e11), 10, 32) . "\n";

//generate password
echo substr(str_shuffle("abcdefghikjlmnopqrstuvwxyz0123456789"), 0, rand(5, 10)) . "\n";

echo __LINE__ . "\n";
echo __FUNCTION__ . "\n";
echo __METHOD__ . "\n";
echo __CLASS__ . "\n";
echo __DIR__ . "\n";
echo __NAMESPACE__ . "\n";
echo __FILE__ . "\n";
echo __TRAIT__ . "\n";
echo Stringable::class . "\n";

print_r(array_change_key_case(array("one"=>1, "two"=>2), CASE_UPPER));
var_dump(array_change_key_case(array("one"=>1, "two"=>2), CASE_UPPER));

$arr = array(1);

$arr[]  = 'fk php';
$arr[]  = 'fk php';
$arr[]  = 'hew';

echo implode(", ", $arr)."\n";

echo preg_replace("/\d+/", "-FUCK-", "abcdefghikjlmnopqrstuvwxyz0123456789")."\n";

echo htmlspecialchars("hey shawty")."\n";

unset($arr[0]);
print_r(array_values($arr));

echo "The thing appears ".count(array_keys($arr, "fk php"))." times.\n";

print_r(array_values(array_diff($arr, array("hew"))));
print_r(array_merge(array("hew"), array("hew")));
