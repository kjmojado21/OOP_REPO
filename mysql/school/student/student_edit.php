<?php
    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'S'){
        header('Location: ../logout.php');
    }
    $id = $_GET['id'];
    require '../function/student.php';

    $student_info = get_student_info($id);

    if(isset($_POST['update'])){

        $student_firstname = $_POST['student_firstname'];
        $student_lastname = $_POST['student_lastname'];
        $student_birthday = $_POST['student_birthday'];
        $student_address = $_POST['student_address'];
        $student_email = $_POST['student_email'];

        $count = search_duplicate($student_firstname, $student_lastname, $student_birthday);
       // print_r($count);

        if($count['duplicate'] > 0){
            echo "Student already existing";
        }else{

            $result = update_student($student_firstname, $student_lastname, $student_birthday, $student_address, $student_email, $id);
        
            if($result === true){
                echo "Added Successfully";
                header('Location: student_table.php');
            }else{
                echo "Failed to Register. Kindly check your code.";
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
        <div class="card border-dark">
            <h3 class="m-3 card-title">Update Student</h3>
            <div class="card-body">

                <form action="" method="post">
        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Firstname</label>
                                <input type="text" name="student_firstname" id="" class="form-control" value="<?php echo $student_info['student_firstname']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Lastname</label>
                                <input type="text" name="student_lastname" id="" class="form-control" value="<?php echo $student_info['student_lastname']; ?>">
                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group">
                        <label for="">Address</label>
                        <textarea name="student_address" id="" cols="30" rows="10" class="form-control"><?php echo $student_info['student_address'];?></textarea>
                    </div>
        
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Birthday</label>
                                <input type="date" name="student_birthday" id="" class="form-control" value="<?php echo $student_info['student_birthday']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="student_email" id="" class="form-control" value="<?php echo $student_info['student_email'];?>">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Update" name="update" class="btn btn-warning float-right">
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