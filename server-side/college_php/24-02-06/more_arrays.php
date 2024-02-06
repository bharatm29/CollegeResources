<?php
//In-built functions
$season = array("one", "two", "three");

// Finding number of occurences of word in an array
$wordCount = count(array_keys($season, "one"));

echo "word count ".$wordCount."<br>";

//Finding transpose of the matrix

$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9),
);

for ($row=0; $row < count($matrix); $row++) { 
    for ($col=0; $col < count($matrix[0]); $col++) { 
        echo $matrix[$row][$col];
    }

    echo "<br>";
}

echo "<br>";

for ($row=0; $row < count($matrix); $row++) { 
    for ($col=0; $col < count($matrix[0]); $col++) { 
        echo $matrix[$col][$row];
    }

    echo "<br>";
}

echo "<br>";

for ($row=0; $row < count($matrix); $row++) { 
    for ($col=0; $col < count($matrix[0]); $col++) { 
        if($row < $col){
            echo $matrix[$row][$col];
        }
    }

    echo "<br>";
}

//finding out the maximum element

$arr = array(1, 5, 6, 2, 69, 0);

function getMaxElement($arr){
    $mx = $arr[0];

    foreach($arr as $x) {
        if($mx < $x){
            $mx = $x;
        }
    }

    return $mx;
}

echo getMaxElement($arr)."<br>";

function getMinElement($arr){
    $mx = $arr[0];

    foreach($arr as $x) {
        if($mx > $x){
            $mx = $x;
        }
    }

    return $mx;
}

echo getMinElement($arr)."<br>";
?>
