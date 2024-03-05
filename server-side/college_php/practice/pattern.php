<?php
function p1($n){
    for ($i=0; $i < $n + 1; $i++) {
        for ($j=0; $j < $i; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

function p2($n){
    $k = 2 * $n - 2;
    for ($i=0; $i < $n; $i++) {
        for ($j=0; $j < $k; $j++) {
            echo " ";
        }
        $k -= 2;
        for ($j=0; $j < $i + 1; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}
function p3($n){
    $k = $n - 1;
    for ($i=0; $i < $n; $i++) {
        for ($j=0; $j < $k; $j++) {
            echo " ";
        }
        $k -= 1;
        for ($j=0; $j < $i + 1; $j++) {
            echo "* ";
        }
        echo "\n";
    }
}

p1(5);
p2(5);
p3(5);
