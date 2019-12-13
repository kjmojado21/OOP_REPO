<?php

    require 'connection.php';

    function login($login_name, $login_pass){
        $sql = "SELECT * FROM users WHERE user_login_name = '$login_name' AND user_login_pass = '$login_pass'";
        $conn = connection();
        $result = $conn->query($sql);
        $info = $result->fetch_assoc();
        return $info;
    }


?>