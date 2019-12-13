<?php
    session_start();
    require 'function/login.php';
    if(isset($_POST['login'])){
        $login_name = $_POST['login_name'];
        $login_pass = $_POST['login_pass'];

        $info = login($login_name, $login_pass);
        if(!empty($info)){

            $_SESSION['id'] = $info['user_id'];
            $_SESSION['login_name'] = $info['user_login_name'];
            $_SESSION['type'] = $info['user_type'];

            if($info['user_type'] == 'S'){
                header('Location: student/my_studyload.php');
            }elseif($info['user_type'] == 'A'){
                header('Location: studyload/studyload_add.php');
            }
            else{
                header('Location: teacher/my_teachingload.php');
            }

           
        }else{
            echo "Invalid credentials";
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
            <h3 class="card-text m-3">School Login</h3>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Login Name</label>
                        <input type="text" name="login_name" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Login Pass</label>
                        <input type="password" name="login_pass" id="" class="form-control">
                    </div>
                    <input type="submit" value="Login" name="login" class="btn btn-primary float-right">
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