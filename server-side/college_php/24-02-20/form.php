<?php
/*
if($_POST){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];

    echo "Name: $name, Email: $email, Contact: $contact, Address: $address, Gender: $gender";
*/

/*
 * 1) Sort array by values(changing the keys) in descending and ascending
 * 2) Sort array by values(without changing the keys) in ascending and descending
 * 3) Filter odd elements from array
 * 4) Sort different array at glance using single function.
 * 5) Merge given two array
 * 6) Find intersection of two array
 * 7) Find union of two array
 * 8) Find set difference of two arrays
 * */

$arr = array(2, 1, 5, 3);
$arr1 = array(4, 2, 7, 5);

if ($_POST){
    $choice = $_POST["ops"];
    switch ($choice) {
        case 1:
            sort($arr);
            echo "Sorting array in ascending order<br>";
            print_r($arr);

            rsort($arr);
            echo "Sorting array in descending order<br>";
            print_r($arr);
            break;
        case 2:
            asort($arr);
            echo "Sorting array in ascending order without changing the keys<br>";
            print_r($arr);

            arsort($arr);
            echo "Sorting array in descending order changing the keys<br>";
            print_r($arr);
            break;
        case 3:
            //TODO: use array_filter
            $temp = array();
            foreach($arr as $v){
                if($v % 2 == 1){
                    array_push($temp, $v);
                }
            }
            echo "Odd elements of array are: <br>";
            print_r($temp);
            break;
        case 4:
            array_multisort($arr, $arr1);
            echo "Array 1<br>";
            print_r($arr);

            echo "Array 2<br>";
            print_r($arr1);
            break;
        case 5:
            print_r(array_merge($arr, $arr1));
            break;
        case 6:
            print_r(array_intersect($arr, $arr1));
            break;
        case 7:
            $union = array_merge($arr, $arr1);
            print_r(array_unique($union));
            break;
        case 8:
            print_r(array_diff($arr, $arr1));
            break;
        default:
            break;
    }
}
