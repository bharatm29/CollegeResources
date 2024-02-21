<?php
function insertion_sort($arr){
    for($i = 1; $i < count($arr); $i++){
        $key = $arr[$i];
        $j = $i - 1;

        while ($j >= 0 && $arr[$j] > $key){
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        $arr[$j + 1] = $key;
    }

    return $arr;
}


function bubble_sort($arr){
    for($i = 0; $i < count($arr); $i++){
        for($j = 0; $j < count($arr) - $i - 1; $j++){
            if($arr[$j] > $arr[$j + 1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

function selection_sort($arr){
    for($i = 0; $i < count($arr); $i++){
        $minIdx = $i;
        for($j = $i + 1; $j < count($arr); $j++){
            if($arr[$j] < $arr[$minIdx]){
                $minIdx = $j;
            }
        }

        $tmp = $arr[$i];
        $arr[$i] = $arr[$minIdx];
        $arr[$minIdx] = $tmp;
    }

    return $arr;
}

$arr = array(1, 2, 7, 4, 5, 87);

# print_r(bubble_sort($arr));

# print_r(insertion_sort($arr));

# print_r(selection_sort($arr));

?>
