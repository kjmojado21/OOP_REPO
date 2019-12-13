<?php 
    $fact = 0;
    $result=0;
    $str = null;
    function factorial($fact){
    	$string = null;
        for($i=$fact; $i>0; --$i){

            if($fact == $i)
                $fact = $i;
            else
                $fact *= $i;
            $string .= $i." X ";
        }
        return rtrim($string, " X ")." = ".$fact;
    }
    function oddEven($fact){
    	if($fact % 2 == 0){
    		return "This is an even number <br>";
    	}else{
    		return "This is an odd number <br>";
    	}
    }
    if(isset($_POST['get'])){
        $fact = $_POST['factorial'];
        $result = factorial($fact);
        $str = oddEven($fact);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Factorial</title>
</head>
<body>
    <div class="jumbotron">
        <h1>Factorial</h1>
    </div>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="">Enter a number:</label>
                <input type="number" name="factorial" id="" class="form-control">
            </div>
            <input type="submit" value="Get" name="get" class="btn btn-success">
        </form>
    </div>
    <br>
    <div class="container">
    	<p class="lead"><?php echo $str; ?></p>
        <p class="lead">Result: <?php echo "The factorial of ".$fact." is ".$result;?></p>
    </div>
</body>
</html>