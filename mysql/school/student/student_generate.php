<?php

    require '../function/student.php';

    $student_id = $_GET['id'];

    $stud_info = get_student_info($student_id);

    $student_login_name = strtolower($stud_info['student_firstname'].".".$stud_info['student_lastname']);

    $student_login_pass = "student12345";


    $result = save_login_credentials($student_id, $student_login_name, $student_login_pass);
    if($result === true){
        header('Location: student_table.php');
    }else{
        echo "Generating user credentials failed!";
    }


?>