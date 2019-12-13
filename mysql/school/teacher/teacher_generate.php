<?php

    require '../function/teacher.php';

    $teacher_id = $_GET['id'];

    $stud_info = get_teacher_info($teacher_id);

    $teacher_login_name = strtolower($stud_info['teacher_firstname'].".".$stud_info['teacher_lastname']);

    $teacher_login_pass = "teacher12345";


    $result = save_login_credentials($teacher_id, $teacher_login_name, $teacher_login_pass);
    if($result === true){
        header('Location: teacher_table.php');
    }else{
        echo "Generating user credentials failed!";
    }


?>