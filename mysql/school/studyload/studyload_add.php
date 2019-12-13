<?php

    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'A'){
        header('Location: ../logout.php');
    }

    require '../function/studyload.php';
    $studlist = display_all_student();
    $courselist = display_all_course();
    $teachlist = display_all_teacher();

    if(isset($_POST['generate'])){
        $student_id = $_POST['student_id'];
        $course_id = $_POST['course_id'];
        $teacher_id = $_POST['teacher_id'];
        $studyload_date_created = $_POST['studyload_date_created'];

        $count = search_duplicate($student_id, $course_id);
        if($count['duplicate'] > 0){
            echo "Student was already enrolled to this course";
        }else{
            $result = add_studyload($student_id, $course_id, $teacher_id, $studyload_date_created);
            if($result === true){
                header('Location: studyload_table.php');
            }else{
                echo "There is something wrong with the function. Please check.";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-3">
        <div class="card">
            <div class="card-body">
            <h3 class="m-3"><?php echo "Welcome! ".$_SESSION['login_name']; ?> <a href="../logout.php" class="btn btn-secondary">Logout</a></h3> 
            <h3 class="m-3 card-title">Study Load Maker</h3>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Student Name</label>
                                <select name="student_id" id="" class="form-control">
                                    <?php
                                        foreach($studlist as $key => $values){
                                            echo "<option value='".$values['student_id']."'>".$values['student_firstname']." ".$values['student_lastname']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Course</label>
                                <select name="course_id" id="" class="form-control">
                                <?php
                                        foreach($courselist as $key => $values){
                                            echo "<option value='".$values['course_id']."'>".$values['course_name']." ".$values['course_room']."</option>";
                                        }
                                ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Teacher Name</label>
                                <select name="teacher_id" id="" class="form-control">
                                <?php
                                        foreach($teachlist as $key => $values){
                                            echo "<option value='".$values['teacher_id']."'>".$values['teacher_firstname']." ".$values['teacher_lastname']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Date Created</label>
                                <input type="date" name="studyload_date_created" id="" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Generate" name="generate" class="btn btn-primary float-right">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d010ca1ee2.js"></script>
</html>