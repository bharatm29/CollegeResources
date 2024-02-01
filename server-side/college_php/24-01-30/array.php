<?php
//Types of array
//1. Index array -> represented by index which starts at 0.
$a = array("one", "two", "three");

//2. Associtative array -> maps
$salary = array('Sonoo' => 35_000_000, "John" => 65_000_000);

echo "Sonoo salary: ".$salary["Sonoo"]."<br>";
echo "John salary: ".$salary["John"]."<br>";

foreach ($salary as $key => $value) {
    echo $key." => ".$value."<br>";
}

//3. Multidimentional array
$twoD = array(
    array("one", "two", "three"),
    array("one", "two", "three"),
    array("one", "two", "three"),
)

//Array operations

?>
