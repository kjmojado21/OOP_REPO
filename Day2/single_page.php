<?php

function check_number($num1){
    if($num1 == 2){
        echo "True";
    }elseif($num1 >= 0){
        echo "Always True";
    }
    else{
        echo "<br> I am an else";
        echo "<br> False";
    }    
}

//$num1 = 0; // global variable
// a global variable is a kind of variable that can be accessed all throughout

if(isset($_POST['send'])){
    $num1 = $_POST['num1'];
    //check_number($num1);
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
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Num 1</label>
                <input type="number" name="num1" id="" class="form-control">
            </div>
            <input type="submit" value="Send" name="send" class="btn btn-outline-primary float-right">
        </form>

        <div class="card">
            <div class="card-body">
                <p class="lead">
                    <?php check_number($num1); ?>
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