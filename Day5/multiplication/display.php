<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Loop Activity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="jumbotron">
			<h1 class="display-4">Multiplication Table</h1>
			<small>Created by: Christian C. Barral</small>
		</div>
		<div class="container mt-3 p-3">
			<?php

				if(isset($_POST['display'])){
					$table = "";
					$rows = $_POST['row'];
					$cols = $_POST['column'];
					
					if($rows != null and $cols != null){
						echo "<div class = 'alert alert-success'>";
						echo "<strong>Success!</strong> <a href='form.php' class='alert-link'>Go back here!</a></div>";
						echo "<h1 class='display-4 text-center'>".$rows." x ".$cols." Multiplication Table </h1>";
						echo "<table class = 'table table-hover table-striped table-bordered text-center'>";
							for ($i=0; $i <= $rows ; $i++) { 
							$table .= "<tr>";
							for ($j=0; $j <= $cols; $j++) { 
								if($i == 0){
									if($j == 0) //headers
										$table .= "<td>r/c</td>";
									else
										$table .= "<td>".$j."</td>";
								}else{
									if( $j == 0)
										$table.= "<td>".$i."</td>";
									else
										$table .= "<td>".$i * $j."</td>";
								}// body of the table
							}//column
						 $table .= "</tr>";
						}//row

						echo $table;
						echo "</table>";
					}else{
						echo "<div class = 'alert alert-danger'>";
						echo "<strong>Error!</strong> No data was passed <a href='form.php' class='alert-link'>Go back here!</a></div>";
					}
					
					
				}else{
					echo "<div class = 'alert alert-danger'>";
					echo "<strong>Error!</strong> No data was passed <a href='form.php' class='alert-link'>Go back here!</a> </div>";
				}

			?>
		</div>
</body>
</html>