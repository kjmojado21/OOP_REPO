<?php

/**
 * Nested Loop is a loop within a loop
 * If you have a nested loop. The execution is from inside (inner loop) to outside (outer loop)
 */

    // while(){
    //     while(){

    //     }
    // }

    // for(){
    //     while(){

    //     }
    // }

        for($row = 0; $row <=5; $row++){
            echo "Row Number $row <br><br>";
            for($col = 0; $col <= 5; $col++){
                echo "Column Number $col <br>";
                $result = $row * $col;
                echo "Row x Column = $result <br><br>";
            }

        }


?>