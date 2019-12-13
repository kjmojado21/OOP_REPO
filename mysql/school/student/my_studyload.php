<?php
    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'S'){
        header('Location: ../logout.php');
    }
    require '../function/student.php';
    $stud_info = get_student_info($_SESSION['id']);
    $list = get_my_courses($_SESSION['id']);

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
            <div class="float-left">
                <h3 class="m-3"><?php echo "Welcome! ".$_SESSION['login_name']; ?>  <a href="../logout.php">Logout</a> </h3>
                <h3 class="m-3 card-title">Your StudyLoad</h3>
            </div>
            <div class="float-right">
                    <img src="<?php echo $stud_info['student_photo']; ?>" alt="" class="rounded-circle" width="100" height="100">
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <p class="lead">
                            Name: <?php echo $stud_info['student_firstname']." ". $stud_info['student_lastname']; ?>
                        </p>
                    </div>
                    <div class="col-6">
                        <p class="lead">
                            Birthday: <?php echo $stud_info['student_birthday'];?>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="lead">
                            Email: <?php echo $stud_info['student_email'];?>
                        </p>
                    </div>
                </div>

               <table class=" table table-striped ">
                   <thead>
                       <th>Subject</th>
                       <th>Room No.</th>
                       <th>Teacher Name</th>
                   </thead>
                   <tbody>
                        <?php
                            foreach($list as $key => $values){
                                echo "<tr>";
                                    echo "<td>".$values['course_name']."</td>";
                                    echo "<td>".$values['course_room']."</td>";
                                    echo "<td>".$values['teacher_firstname']." ".$values['teacher_lastname']."</td>";
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