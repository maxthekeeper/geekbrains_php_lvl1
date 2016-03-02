<?php

	if(isset($_POST["input_str"])) {

		$input = explode(' ', $_POST["input_str"]);
		
		echo '<pre>';
		print_r($input);
		echo '<hr>';

		$stack = array();
		$output = array();

		foreach ($input as $value) {
		 	if (is_numeric($value))
		 		$output[] = $value;
		 	elseif (in_array($value, array('*', '/', '+', '-'))) {
		 		$stack[] = $value;
		 	}
		 } 

		 print_r($output);
		 echo '<hr>';
		 print_r($stack);
    } else {
        $input = "";
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 4 / Задание 4</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">	
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">

				<!-- Collapsed Hamburger -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<!-- Branding Image -->
				
				<a class="navbar-brand" href="index.php">
					PHP Level 1
				</a>
			</div>
			<div class="collapse navbar-collapse" id="app-navbar-collapse">
				<!-- Left Side Of Navbar -->
				<ul class="nav navbar-nav">
					<li><a href="#">PHP Level 2</a></li>                    
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="panel panel-default">
            <div class="panel-heading">Урок 4 / Задание 4</div>
            <div class="panel-body">
				
				<!-- ФОРМА -->
				<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
			        <div class="form-group">
			            <input type="text" name="input_str" class="form-control" value="">
			        </div>
			        <button type="submit" class="btn btn-default">Посчитать</button>
			    </form>
			</div>
		</div>
	</div>
</body>
</html>