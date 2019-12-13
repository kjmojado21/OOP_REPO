<?php

    require 'connection.php';

    function add_course($course_name, $course_desc, $course_room){

        $sql = "INSERT INTO course (course_name, course_description, course_room) VALUES
                ('$course_name', '$course_desc', '$course_room')";
        $conn = connection();
        $result = $conn->query($sql);
        return $result;
    }

    function search_duplicate_course($course_name, $course_room){
        $sql = "SELECT COUNT(*) AS duplicate FROM course WHERE course_name = '$course_name' 
        AND course_room = '$course_room'";
        $conn = connection();
        $result = $conn->query($sql);
        $count = $result->fetch_assoc();
        return $count;
    }
    function display_all_course(){
        $sql = "SELECT * FROM course WHERE course_status != 'D'";
        $conn = connection();
        $result = $conn->query($sql);
        $list = $result->fetch_all(MYSQLI_ASSOC);
        return $list;
    }
    function get_course_info($id){
        $sql = "SELECT * FROM course WHERE course_id = '$id'";
        $conn = connection();
        $result = $conn->query($sql);
        $info = $result->fetch_assoc();
        return $info;
    }

    function update_course($course_name, $course_desc, $course_room, $id){
        $sql = "UPDATE course SET course_name = '$course_name', course_description = '$course_desc',
                course_room = '$course_room' WHERE course_id = '$id'";
        $conn = connection();
        $result = $conn->query($sql);
        return $result;
    }

    function deactivate_course($id){
        $sql = "UPDATE course SET course_status = 'D' WHERE course_id = '$id'";
        $conn = connection();
        $result = $conn->query($sql);
        return $result;
    }

?>