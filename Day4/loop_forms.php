<?php
    $result = null;

    function display_fizzbuzz($limit){
        $local_string = null;
        //this variable will hold the result
        for($num = 1; $num <= $limit; $num++ ){
            if(($num % 3) == 0 and ($num % 5) == 0 ){
                $local_string .= "fizzbuzz ";
            }elseif(($num % 3) == 0){
                $local_string .= "fizz ";
            }elseif(($num % 5) == 0){
                $local_string .= "buzz ";
            }else{
                $local_string .= "$num ";
            }
        }
        return $local_string;
    }
    if(isset($_POST['submit'])){
        $limit = $_POST['limit'];
        $result = display_fizzbuzz($limit);
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
                <label for="">Enter a number</label>
                <input type="number" name="limit" id="" class="form-control">
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-primary float-right">
        </form>
    </div>
    <div class="container">
        <?php
            echo $result;
        ?>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d010ca1ee2.js"></script>
</html>