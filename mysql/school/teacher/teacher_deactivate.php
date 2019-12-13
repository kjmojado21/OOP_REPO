<?php
    session_start();
    if(empty($_SESSION) || $_SESSION['type'] != 'T'){
        header('Location: ../logout.php');
    }
    $id = $_GET['id'];
    require '../function/teacher.php';
    $teacher_info = get_teacher_info($id);
    if(isset($_POST['deactivate'])){
        $protocol = $_POST['teacher_deactivate'];
        $protocols = array('DEACTIVATE', 'deactivate', 'Deactivate');

        if(in_array($protocol, $protocols)){
           $result =  deactivate_teacher($id);
           if($result === true){
                header('Location: teacher_table.php');
           }else{
               echo "Please check. Error on the function";
           }
        }else{
            header('Location: teacher_table.php');
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
        <div class="card border-danger">
            <h3 class="m-3 card-title text-danger">Deactivate teacher</h3>
            <div class="card-body">
                <p class="lead">
                    teacher Name: <?php echo $teacher_info['teacher_firstname']." ".$teacher_info['teacher_lastname']; ?>
                    <br>
                    teacher Birthday: <?php echo $teacher_info['teacher_birthday']; ?>
                    <br>
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Are you sure you're going to deactivate this teacher? 
                            Type 'deactivate' to proceed, 'cancel' to cancel</label>
                            <input type="text" name="teacher_deactivate" id="" class="form-control">
                        </div>
                        <input type="submit" value="Proceed" name="deactivate" class="btn btn-danger">
                    </form>

                </p>
            </div>
        </div>
    </div>

</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d010ca1ee2.js"></script>
</html>