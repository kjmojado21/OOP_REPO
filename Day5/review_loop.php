<?php
    $rowno = 0;
    function generateClass($hit){
        if($hit == 1){
            return 12;
        }elseif($hit == 2){
            return 6;
        }else{
            return 4;
        }
    }
    function generatePic($rown){
            $classno = 4;
            echo "<div class='row'>";
                for($num = 0; $num < $rown; $num++){
                    echo "<div class = 'col-4'>";
                        echo "<img src = 'images/joy.jpg' class='img-thumbnail'/>";
                    echo "</div>";
                }
            echo "</div>";
    }
    if(isset($_POST['generate'])){
        $rowno = $_POST['pic'];
        //this is the time we update the value rowno
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d010ca1ee2.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">How many pictures do you want?</label>
                <input type="number" name="pic" id="" class="form-control">
            </div>
            <input type="submit" value="Generate" name="generate" class="btn btn-primary float-right">
        </form>
    </div>
    <div class="container"></div>
    <div class="container mt-5 justify-content-center">
        <?php

           generatePic($rowno);

        ?>
    </div>
</body>
</html>