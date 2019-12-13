<?php

    require '../function/course.php';
    $list = display_all_course();

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
        <h3 class="m-3 card-title">List of All Courses <a href="course_add.php" class="btn btn-outline-primary"><i class="fas fa-plus"></i></a></h3>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <th>Course Name</th>
                        <th>Course Description</th>
                        <th>Course Room</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($list as $key => $values){
                                echo "<tr>";
                                    echo "<td>".$values['course_name']."</td>";
                                    echo "<td><p align='justify'>".$values['course_description']."</p></td>";
                                    echo "<td>".$values['course_room']."</td>";
                                    echo "<td>";
                                        echo "<a href='course_edit.php?id=".$values['course_id']."' class='btn btn-warning m-1'><i class='fas fa-edit'></i></a>";
                                        echo "<a href='course_deactivate.php?id=".$values['course_id']."' class='btn btn-danger m-1'><i class='fas fa-trash'></i></a>";
                                    echo "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d010ca1ee2.js"></script>
</html>