<?php
// prepend zero to single digits
// prepend means adding before
$num = 9;
$prepend = 0;
if($num >=0 AND $num <=9){
    $prepend = sprintf("0%d", $num);
    echo $prepend;
}else{
    echo $num;
}
$num = $prepend + 4;
echo "<br>";
echo $num;
echo "<br>";

$price = 1000;
echo "Php".number_format($price, 2);
//Php10.00


$vehicle = "Car";
$totalhrs = 90;
$totalmins = 10;

$totalprice = 10;
function add_minutes($totalprice, $vehicle, $totalmins){
    switch($vehicle){
        case "Car":
        case "Motorbike":
            if($totalmins >=0 AND $totalmins <= 30){
                    $totalprice += 5;
            }else{
                    $totalprice += 10;
            }
            return $totalprice;
            break;
        case "Bike":
            
        
    }
}
$trueprice = add_minutes($totalprice, $totalmins, $vehicle);


?>