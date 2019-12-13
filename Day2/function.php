<?php

function write_msg(){
    //echo "I am an extra!";
    //use echo to display messages
    //return "I am a function!";
    //use return for calculations or results
}

//$return = writeMsg();
//echo $return;

function add_numbers($num1, $num2, $num3 = 4){
    $sum = $num1 + $num2 + $num3;
    return $sum;
}

$num_1 = 6;
$num_2 = 4;
$result = add_numbers($num_1, 5);
echo $result;


//function that calls another function
function call_function($num1, $num2){
    $product = $num2 * add_numbers($num1, $num2, 0);
    return $product;
}

echo "<br>";
$result = call_function($num_1, $num_2);
echo $result;


?>