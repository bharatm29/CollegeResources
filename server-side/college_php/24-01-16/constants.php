<?php
    // There are total 9 global magic constants
    echo __LINE__;
    echo "<br>";

    echo __DIR__;
    echo "<br>";

    echo __FILE__;
    echo "<br>";

    function doSomething(){
        echo __FUNCTION__;
        echo "<br>";
    }

    doSomething();

    (function(){
        echo __FUNCTION__;
        echo "<br>";
    })();

    echo __TRAIT__;
    echo "<br>";

    echo __NAMESPACE__;
    echo "<br>";

    class MyClass {
        public function __construct(){}

        public function printClassName(): void {
            echo __CLASS__."<br>";
        }
    }

    $c = new MyClass;
    $c->printClassName();

    class Name {
        public function __construct(){
            echo "This line will print on calling namespace. <br>";
        }
    }

    $n = __NAMESPACE__."\Name";
    $a = new $n;
?>
