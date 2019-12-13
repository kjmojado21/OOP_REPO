<?php

    $id = $_GET['id'];
    require '../function/course.php';
    $course_info = get_course_info($id);
    if(isset($_POST['update'])){
        $course_name = $_POST['course_name'];
        $course_desc = $_POST['course_desc'];
        $course_room = $_POST['course_room'];

        $count = search_duplicate_course($course_name, $course_room);

        if($count['duplicate'] > 0){
            echo "Course already existing!";
        }else{
            $result = update_course($course_name, $course_desc, $course_room, $id);
            if($result === true){
                header('Location: course_table.php');
            }else{
                echo "There is something wrong with the function. Please check!";
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
        <h3 class="m-3 card-title">Update Course</h3>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input type="text" name="course_name" id="" class="form-control" value="<?php echo $course_info['course_name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Course Description</label>
                        <textarea name="course_desc" id="" cols="30" rows="10" class="form-control"><?php echo $course_info['course_description']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Course Room</label>
                        <select name="course_room" id="" class="form-control">
                           <?php
                                $room_string = null;
                                for($r = 0; $r <10; $r++){
                                    $room_string = "G".$r;
                                    if($room_string == $course_info['course_room']){
                                        echo "<option value='$room_string' selected>$room_string</option>";
                                    }else{
                                        echo "<option value='$room_string'>$room_string</option>";
                                    }
                                }

                           ?>
                        </select>
                    </div>
                    <input type="submit" value="Update Course" name = "update" class="btn btn-outline-warning float-right">
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