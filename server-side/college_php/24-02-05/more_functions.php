<?php
$season = array("one", "two", "three");
rsort($season);

foreach ($season as $key) {
    echo $key.", ";
}

echo "<br>";

$key = array_search("one", $season);
echo $key."<br>";

$season2 = array("one", "cp", "sudo");

$inter = array_intersect($season, $season2);

foreach ($inter as $key) {
    echo $key.", ";
}
echo "<br>";

var_dump($inter);
//read about unset

unset($inter);
echo "a";
var_dump($inter);
?>
