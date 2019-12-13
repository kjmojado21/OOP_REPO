<?php

    require 'connection.php';

    function add_studyload($student_id, $course_id, $teacher_id, $studyload_date_created){
        $sql = "INSERT INTO studyload (student_id, course_id, teacher_id, studyload_date_created)
                VALUES ('$student_id', '$course_id', '$teacher_id', '$studyload_date_created')";
        $conn = connection();
        $result = $conn->query($sql);
        return $result;
    }
    function search_duplicate($student_id, $course_id){
        $sql = "SELECT COUNT(*) AS duplicate FROM studyload WHERE student_id = '$student_id'
                AND course_id = '$course_id'";
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

    function display_all_teacher(){
        $sql = "SELECT * FROM teacher WHERE teacher_status != 'D'";
        $conn = connection();
        $result = $conn->query($sql);
    
        $list = $result->fetch_all(MYSQLI_ASSOC);
        return $list;
    
    }

    function display_all_student(){
        $sql = "SELECT * FROM student WHERE student_status != 'D'";
        $conn = connection();
        $result = $conn->query($sql);
    
        $list = $result->fetch_all(MYSQLI_ASSOC);
        return $list;
    
    }

    function display_all_assignedload(){
        $sql = "SELECT * FROM studyload JOIN student ON studyload.student_id = student.student_id
                JOIN course ON studyload.course_id = course.course_id
                JOIN teacher ON studyload.teacher_id = teacher.teacher_id
                WHERE studyload.studyload_status != 'D'";
        $conn = connection();
        $result = $conn->query($sql);
    
        $list = $result->fetch_all(MYSQLI_ASSOC);
        return $list;
    }

?>