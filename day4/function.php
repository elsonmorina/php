<?php
     
    function pershendetje(){
        echo "hello world";
    }
    pershendetje();
echo "<br>";
    function sum(){
        $value = 120 + 20;
        echo $value;
    }
    sum();
    echo "<br>";
    echo "<br>";
    echo "<br>";

    function maximum($x , $y){
        if($x>$y){
            return $x;
        }else{
            return $y;
        }
    }
    $a = 20;
    $b = 30;
    $test = maximum($a,$b);
    echo "the max of $a and $b is $test";
?>