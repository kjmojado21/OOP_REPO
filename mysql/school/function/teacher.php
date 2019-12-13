<?php

require 'connection.php';

function add_teacher($teacher_firstname, $teacher_lastname, $teacher_specialization, $teacher_birthday, $teacher_address, $teacher_email){

    $sql = "INSERT INTO teacher (teacher_firstname, teacher_lastname, teacher_specialization, teacher_birthday, teacher_address, teacher_email)
            VALUES ('$teacher_firstname', '$teacher_lastname', '$teacher_specialization', '$teacher_birthday', '$teacher_address', '$teacher_email')";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function search_duplicate($teacher_firstname, $teacher_lastname, $teacher_birthday){

    $sql = "SELECT COUNT(*) AS duplicate FROM teacher WHERE teacher_firstname = '$teacher_firstname' AND 
            teacher_lastname = '$teacher_lastname' AND teacher_birthday = '$teacher_birthday'";
    $conn = connection();
    $result = $conn->query($sql);

    $count = $result->fetch_assoc();
    //the function fetch_assoc() fetches the data from the database and converts it to an associative array.
    return $count;
}

function display_all_teacher(){
    $sql = "SELECT * FROM teacher WHERE teacher_status != 'D'";
    $conn = connection();
    $result = $conn->query($sql);

    $list = $result->fetch_all(MYSQLI_ASSOC);
    return $list;

}

function get_teacher_info($teacher_id){
    $sql = "SELECT * FROM teacher WHERE teacher_id = '$teacher_id'";
    $conn = connection();
    $result = $conn->query($sql);

    $id = $result->fetch_assoc();
    return $id;
}

function update_teacher($teacher_firstname, $teacher_lastname, $teacher_specialization, $teacher_birthday, $teacher_address, $teacher_email, $teacher_id){
    $sql = "UPDATE teacher SET teacher_firstname = '$teacher_firstname', teacher_lastname = '$teacher_lastname', teacher_specialization = '$teacher_specialization',
            teacher_birthday = '$teacher_birthday', teacher_address = '$teacher_address', teacher_email = '$teacher_email'
            WHERE teacher_id = '$teacher_id'";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function deactivate_teacher($id){

    $sql = "UPDATE teacher SET teacher_status = 'D' WHERE teacher_id = '$id'";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}
function save_login_credentials($teacher_id, $teacher_login_name, $teacher_login_pass){

    $sql = "INSERT INTO users (user_id, user_login_name, user_login_pass, user_type)
            VALUES ('$teacher_id', '$teacher_login_name', '$teacher_login_pass', 'T')";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function search_user_duplicate($user_id){
    $sql = "SELECT COUNT(*) AS duplicate FROM users WHERE user_id = '$user_id' AND user_type='T'";
    $conn = connection();
    $result = $conn->query($sql);

    $count = $result->fetch_assoc();
    return $count;
}

function get_my_teaching_load($teacher_id){
    $sql = "SELECT * FROM studyload JOIN student ON studyload.student_id = student.student_id
            JOIN course ON studyload.course_id = course.course_id
            WHERE studyload.teacher_id = '$teacher_id'";
     $conn = connection();
     $result = $conn->query($sql);

     $list = $result->fetch_all(MYSQLI_ASSOC);
     return $list;
}
?>