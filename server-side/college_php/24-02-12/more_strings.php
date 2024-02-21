<?php
//strrchr basically gives the string including and after the provided string. This finds the last separator.
echo strrchr("Hello World!", "World");
echo "<br>";

//strpos => checking if the substring exists or not
function findMyWord($s, $w){
    if(strpos($s, $w) != false){
        echo "String contains ".$w."<br>";
    }
    else {
        echo "String does not contains ".$w."<br>";
    }
}

findMyWord("Hello World!", "World");

$str = "123, 234, 345, 456, 567";

//regex.split
$str_arr = preg_split("/,\s?/", $str);
print_r($str_arr);
echo "<br>";

$str_arr = explode(",", $str);
print_r($str_arr);
echo "<br>";

//ucfirst => make the first character uppercase (not the first character of the each word)
$str = "what are we even doing?";
echo ucfirst($str);
echo "<br>";

//ucwords => make the first character uppercase of the each word)
echo ucwords($str);
echo "<br>";

//chunk_split
echo chunk_split("012345", 2, ":");
echo "<br>";

//strpos returns pos when used in this type of usecase and boolean when used in control statments.
echo strpos($str, "even");
echo "<br>";

//extracting name of the php file
$path = "http://localhost/~bharat/24-02-12/more_strings.php";

//substr function
echo "Opened file is: ".substr(strrchr($path, "/"), 1)."<br>";
?>
