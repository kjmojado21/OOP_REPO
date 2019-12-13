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
			<form method="POST" action="display.php">
				<div class="form-group">
					<label for="row">Row:</label>
					<input type="number" min="0" max="50" name="row" class="form-control">
				</div>
				<div class="form-group">
					<label for="column">Column:</label>
					<input type="number" min="0" max="50" name="column" class="form-control">
				</div>
				<input type="submit" name="display" class="btn btn-success" value="Display Table">
				<input type="reset" name="display" class="btn btn-danger" value="RESET">
			</form>
		</div>
</body>
</html>