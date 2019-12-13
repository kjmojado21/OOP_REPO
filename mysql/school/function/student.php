<?php

require 'connection.php';

function add_student($student_firstname, $student_lastname, $student_birthday, $student_address, $student_email, $student_photo_filename, $student_photo_tmpname, $directory){

    //EXTRACTS THE FILE EXTENSION FROM THE FILENAME AND ASSIGN TO EXTENSION VARIABLE
    $extension = pathinfo($student_photo_filename, PATHINFO_EXTENSION);
    //AN ARRAY OF POSSIBLE PHOTO FILE EXTENSION
    $photo_extension = array('png', 'jpg', 'jpeg', 'gif', 'jfif');

    if(in_array($extension, $photo_extension)){
        $new_directory = $directory.$student_photo_filename;
        if(move_uploaded_file($student_photo_tmpname, $new_directory)){

            $sql = "INSERT INTO student (student_firstname, student_lastname, student_birthday, student_address, student_email, student_photo)
            VALUES ('$student_firstname', '$student_lastname', '$student_birthday', '$student_address', '$student_email', '$new_directory')";
            $conn = connection();
            $result = $conn->query($sql);
            return $result;
        }else{
            echo "Photo Not Uploaded. Record not saved!";
        }
    }else{
        echo "Invalid File Format";
    }


   
}

function search_duplicate($student_firstname, $student_lastname, $student_birthday){

    $sql = "SELECT COUNT(*) AS duplicate FROM student WHERE student_firstname = '$student_firstname' AND 
            student_lastname = '$student_lastname' AND student_birthday = '$student_birthday'";
    $conn = connection();
    $result = $conn->query($sql);

    $count = $result->fetch_assoc();
    //the function fetch_assoc() fetches the data from the database and converts it to an associative array.
    return $count;
}

function display_all_student(){
    $sql = "SELECT * FROM student WHERE student_status != 'D'";
    $conn = connection();
    $result = $conn->query($sql);

    $list = $result->fetch_all(MYSQLI_ASSOC);
    return $list;

}

function get_student_info($student_id){
    $sql = "SELECT * FROM student WHERE student_id = '$student_id'";
    $conn = connection();
    $result = $conn->query($sql);

    $id = $result->fetch_assoc();
    return $id;
}

function update_student($student_firstname, $student_lastname, $student_birthday, $student_address, $student_email, $student_id){
    $sql = "UPDATE student SET student_firstname = '$student_firstname', student_lastname = '$student_lastname',
            student_birthday = '$student_birthday', student_address = '$student_address', student_email = '$student_email'
            WHERE student_id = '$student_id'";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function deactivate_student($id){

    $sql = "UPDATE student SET student_status = 'D' WHERE student_id = '$id'";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function save_login_credentials($student_id, $student_login_name, $student_login_pass){

    $sql = "INSERT INTO users (user_id, user_login_name, user_login_pass, user_type)
            VALUES ('$student_id', '$student_login_name', '$student_login_pass', 'S')";
    $conn = connection();
    $result = $conn->query($sql);
    return $result;
}

function search_user_duplicate($user_id){
    $sql = "SELECT COUNT(*) AS duplicate FROM users WHERE user_id = '$user_id' AND user_type='S'";
    $conn = connection();
    $result = $conn->query($sql);

    $count = $result->fetch_assoc();
    return $count;
}

function get_my_courses($student_id){
    $sql = "SELECT * FROM studyload JOIN teacher ON studyload.teacher_id = teacher.teacher_id
            JOIN course ON studyload.course_id = course.course_id
            WHERE studyload.student_id = '$student_id'";
            
    $conn = connection();
    $result = $conn->query($sql);

    $list = $result->fetch_all(MYSQLI_ASSOC);
    return $list;
}
function display_random_student($keyword){
    $sql = "SELECT * FROM student WHERE (student_firstname LIKE '%$keyword%' OR student_lastname LIKE '%$keyword%'
            OR student_email LIKE '%$keyword%') AND student_status != 'D'";
     $conn = connection();
     $result = $conn->query($sql);
 
     $list = $result->fetch_all(MYSQLI_ASSOC);
     return $list;
}
?>
