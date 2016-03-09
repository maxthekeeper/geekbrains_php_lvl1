<?php

session_start();

if (isset($_POST["style"])) {	
	$style = $_POST["style"];
	setcookie("style", $style);
} else {
	$style = "bootstrap1";
}

if (!(isset($_SESSION["login"])))
		header("Location: login.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 5</title>
	<link href="../css/<?=$style;?>.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">	
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
				
				<a class="navbar-brand" href="../index.php">
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
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
		            <div class="panel-heading">Настройки</div>
		            <div class="panel-body">
		            	<p>Выберите оформление:</p>		            	
		            	<form class="form-inline" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
							<button type="submit" name="style" value="bootstrap1" class="btn btn-default">Вариант 1</button>
							<button type="submit" name="style" value="bootstrap2" class="btn btn-primary">Вариант 2</button>
							<button type="submit" name="style" value="bootstrap3" class="btn btn-success">Вариант 3</button>
						</form>
						<hr>
						<ul class="list-inline">
							<li><a class="btn btn-default" href="page1.php">Страница 1</a></li>
							<li><a class="btn btn-default" href="page2.php">Страница 2</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>