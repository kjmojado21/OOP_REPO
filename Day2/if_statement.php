<?php

    $num1 = -1;

    // if($num1 == 2){
    //     echo "True";
    // }elseif($num1 >= 0){
    //     echo "Always True";
    // }
    // else{
    //     echo "<br> I am an else";
    //     echo "<br> False";
    // }
    
    function check_number($num1){
        if($num1 == 2){
            echo "True";
        }elseif($num1 >= 0){
            echo "Always True";
        }
        else{
            echo "<br> I am an else";
            echo "<br> False";
        }    
    }

    check_number($num1);


?>