<?php

/**
 * Connection.php is the file that connects
 * the PHP Files to MySQL database
 */

function connection(){
    $servername = "localhost"; //  the server where the mysql is located
    $username = "root"; // the username that you use to login to access the server
    $password = ""; // for MAMP, the password is 'root'
    $dbname = "school"; //this is the database we want to access

    //Create the connection using mysqli (mysql improved)

    $conn = new mysqli($servername, $username, $password, $dbname);
    return $conn;
}

?>