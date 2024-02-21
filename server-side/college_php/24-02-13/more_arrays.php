<?php
$a1 = array("1", "2");
$a2 = array("2", "3");

print_r(array_merge($a1, $a2));
echo "<br>";

//Some math functions.
echo abs(-299999.99999)."<br>";

echo ceil(-299999.99999)."<br>";
echo floor(-299999.99999)."<br>";

echo sqrt(rand(1e9, 1e11))."<br>";

echo pi()."<br>";

//where we can use this functions => wtf?
echo decbin(rand(1e9, 1e11))."<br>";
echo dechex(rand(1e9, 1e11))."<br>";
echo decoct(rand(1e9, 1e11))."<br>";

echo base_convert(rand(1e9, 1e11), 10, 32)."<br>";
?>
