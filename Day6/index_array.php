<?php


    $cars = array("Volvo", "Mitsubishi", "Toyota", "Subaru", "Kia");
    // this is an array of cars.

    //echo $cars[0]; Displays only one value;
    //this will display volvo.

    //display all array values
    for($i=0; $i<count($cars); $i++){
        echo $cars[$i]." ";
    }
    echo "<br>";
    //$cars[3] = "Ferrari"; // manual change

    //automatic change
    for($j=0; $j<count($cars); $j++){

        if($cars[$j] == "Mitsubishi"){
            $cars[$j] = "Jeep";
        }
    }

    //display again
    for($i=0; $i<count($cars); $i++){
        echo $cars[$i]." ";
    }

    //automatically adds the new array value;
    $new_index = count($cars);
    $cars[$new_index] = "Ferrari";
    //$cars[] = "Ferrari";

    echo "<br>";

    for($i=0; $i<count($cars); $i++){
        echo $cars[$i]." ";
    }

?>