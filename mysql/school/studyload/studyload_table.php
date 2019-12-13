<?php
    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'A'){
        header('Location: ../logout.php');
    }
    require '../function/studyload.php';
    $studyloads = display_all_assignedload();
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
            <h3 class="m-3 card-title">List of Generated Studyload </h3>
                <table class="table table-striped">
                    <thead>
                        <th>Study Load Number</th>
                        <th>Student Name</th>
                        <th>Course Name</th>
                        <th>Teacher</th>
                        <th>Date Created</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($studyloads as $key=>$values){
                                echo "<tr>";

                                    echo "<td>".$values['studyload_no']."</td>";
                                    echo "<td>".$values['student_firstname']."</td>";
                                    echo "<td>".$values['course_name']."</td>";
                                    echo "<td>".$values['teacher_firstname']."</td>";
                                    echo "<td>".$values['studyload_date_created']."</td>";
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