<?php
//Write a program to find out which kind of website this is
$str = "www.google.com";

$ext = substr(strrchr($str, "."), 1);
switch ($ext) {
    case 'com':
        echo "Commercial Site";
        break;

    case 'in':
        echo "Information Site";
        break;

    case 'net':
        echo "Networking Site";
        break;

    case 'org':
        echo "Organisation Site";
        break;

    case 'edu':
        echo "Educational Site";
        break;

    default:
        echo "Idk";
        break;
}

echo "<br>";

function generate_password(int $len) {
    return substr(str_shuffle("abcdefghijklmnopqrstuvwxyz12345567890"), 0, $len);
}

echo generate_password(rand(5, 15))."<br>";

$str_pos = strspn("Football" ^ "Footboll", "\0");
echo "The difference is at: ".$str_pos."<br>";
?>
