<?php


    $people = array("Peter"=>"28",
                    "John"=>"30",
                    "Jenny"=>"24"
                    );
    // this is how you make an associative array
                    
    //display one array
    echo "Age of Peter is ".$people['Peter'];
    $people["Christian"] = "25";
    //display all array values
    echo "<br>";
    foreach($people as $key=>$value){
        echo "$key is $value years old <br>";
    }


    //2D array
    $kredo = array(
        "Web Basic" => array(
            "Student 1" => "Hiromi",
            "Student 2" => "Yunoshin",
            "Student 3" => "Ryohei"
        ),

        "Web Development" => array(
            "Student 4" => "Yuki",
            "Student 5" => "Kazuki",
            "Student 6" => "Naoshi"
        )
    );
    echo "<br>";
    //display one array value
    //echo "Student1 is ".$kredo["Web Basic"]['Student 1'];
    echo "<br>";
    foreach($kredo as $key => $value){
        echo "Subject: $key";
        echo "<br>";
        foreach($value as $key2 => $values){
            echo "$key2 is $values <br>";
        }

    }





?>