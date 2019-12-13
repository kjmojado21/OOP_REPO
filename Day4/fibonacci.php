<?php
    $decimal = 0; $final = null;
    if(isset($_POST['send'])){

       $decimal = $_POST['num1']; //5

       function fibonacci($number){
            $fibonacci = null; // this will hold the concatenated series of numbers
            $x = 0; $y=1; $z=0;
            $fibonacci = $y;

            for($i=0;$i<=$number;$i++)    
            {    
                $z = $x + $y;    
                $fibonacci .= " ".$z;   // 1 1 2 3 5 8 13
                //the swapping begins
                $x = $y;   //x becomes the previous value of y which is 1       
                $y = $z;   //y becomes z  
            }  
            return $fibonacci;
        }
        $final = fibonacci($decimal);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="num1">Enter a number:</label>
                <input type="number" name="num1" id="" class="form-control">
            </div>
            <input type="submit" value="Send" name="send" class="btn btn-primary">
        </form>
    </div>
    <div class="container mt-5">
            <h1 class="display-5">RESULT</h1>
            <p class="p-3 display-5"><?php echo $final; ?></p>
    </div>
</body>
</html>