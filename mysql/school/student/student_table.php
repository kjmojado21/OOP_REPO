<?php
    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'S'){
        header('Location: ../logout.php');
    }
    require '../function/student.php';

    $list = display_all_student();
    if(isset($_POST['search'])){
        $keyword = $_POST['keyword'];
        //echo $keyword;
        $list = display_random_student($keyword);
        // header('Refresh:0');
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
       
        <div class="card border-dark">
        <h3 class="m-3"><?php echo "Welcome! ".$_SESSION['login_name']; ?>  <a href="../logout.php">Logout</a> </h3>
        <h3 class="m-3 card-title">List of Students</h3>
            <div class="card-body">
            <form action="" method="post" class="form-inline p-3">
                    <label for="">Search</label> <br>
                    <input type="text" name="keyword" id="" class="form-control m-1"> <br>
                    <input type="submit" value="Search" name="search" class="btn btn-success m-1">
            </form>
                <table class="table table-striped">
                    <thead>
                        <th>Save User</th>
                        <th>Student Photo</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                            foreach($list as $key=>$values){
                                echo "<tr>";
                                    $check = search_user_duplicate($values['student_id']);
                                    if($check['duplicate'] > 0){
                                        echo "<td>";
                                            echo "<i class='fas fa-check text-success'></i>";
                                        echo "</td>";
                                    }else{
                                        echo "<td>";
                                        echo "<a href='student_generate.php?id=".$values['student_id']."' class='btn btn-success m-1'> <i class = 'far fa-save'></i> </a>";
                                        echo "</td>";
                                    }
                                    echo "<td><img src='".$values['student_photo']."' alt='Student Photo' class='rounded-circle' width='100' height='100'/></td>";
                                    echo "<td>".$values['student_firstname']."</td>";
                                    echo "<td>".$values['student_lastname']."</td>";
                                    echo "<td>".$values['student_birthday']."</td>";
                                    echo "<td>".$values['student_address']."</td>";
                                    echo "<td>".$values['student_email']."</td>";
                                    echo "<td>";
                                        echo "<a href='student_edit.php?id=".$values['student_id']."' class='btn btn-warning m-1'> <i class = 'fas fa-edit'></i> </a>";
                                        echo "<a href='student_deactivate.php?id=".$values['student_id']."' class='btn btn-danger m-1'> <i class = 'fas fa-trash'></i> </a>";
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