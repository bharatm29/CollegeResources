<?php
// $_REQUEST is same as $_POST. IDK why we need this. Maybe it's the body only?
if(isset($_REQUEST)){
    if(isset($_REQUEST["c1"])){
        echo "Checkbox 1 checked: ".$_REQUEST['c1']."<br>";
    }
    if($_REQUEST["c2"]){
        echo "Checkbox 2 checked: ".$_REQUEST['c2']."<br>";
    }
    if($_REQUEST["c3"]){
        echo "Checkbox 3 checked: ".$_REQUEST['c3']."<br>";
    }

    $sum = 0;
    if(isset($_REQUEST["f1"])){
        $sum += 100;
        echo "Fruit 1 checked: ".$_REQUEST['f1']."<br>";
    }
    if($_REQUEST["f2"]){
        $sum += 50;
        echo "Fruit 2 checked: ".$_REQUEST['f2']."<br>";
    }
    if($_REQUEST["f3"]){
        $sum += 25;
        echo "Fruit 3 checked: ".$_REQUEST['f3']."<br>";
    }

    echo "Total amount is: $sum<br>";
}
?>
