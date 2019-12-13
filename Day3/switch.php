<?php

$weather = "Rainy";
$temperature = 25;

switch($weather){
    case "Sunny":
                 echo "It's a good day";
                 break;
                 
    case "Rainy": 
                 if($temperature >= 25){
                    echo "<br> It's unusual. Don't go outside!";
                 }else{
                    echo "It's rainy. Don't forget to bring an umbrella";
                 }
                 break;
                 
    case "Stormy": 
                 echo "Don't go outside! It's dangerous!";
                 break;
              
    default:
                echo "I am not sure with the weather. Try again next time";
}

?>