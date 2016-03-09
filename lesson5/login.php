<?php

	session_start();

	if (((isset($_POST["login"])) && ($_POST["login"] != ""))) {
		$_SESSION["login"] = $_POST["login"];

		if (isset($_POST["rememberme"])) {
			$login = $_POST["login"];
			setcookie("login", $login);
		}

		if (isset($_COOKIE["page"])) {
			$page = $_COOKIE["page"];
			header("Location: $page.php");
		} else {
			$page = "page1";
			header("Location: $page.php");
		}
	} 


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 5</title>
	<link href="../css/bootstrap1.min.css" rel="stylesheet">
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
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
		            <div class="panel-heading">Login</div>
		            <div class="panel-body">
						
						<!-- ФОРМА -->
						<form class="form-horizontal" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
					        <div class="form-group">
					        	<label class="col-sm-3 control-label" for="name">Ваш логин:</label>
					        	<div class="col-sm-8">
					        		<input type="text" name="login" id="login" class="form-control" value="">
					        	</div>			            
					        </div>
					        <div class="form-group">
					        	<div class="col-sm-offset-3 col-sm-6">
					        		<div class="checkbox">
							        	<label>
							        		<input type="checkbox" name="rememberme"> Запомнить меня
							        	</label>
							        </div>
					        	</div>					        	
					        </div>					        
					        <div class="form-group">
					        	<div class="col-sm-offset-3 col-sm-6">
					        		<button type="submit" class="btn btn-default ">Войти</button>
					        	</div>			        	
					        </div>
					    </form>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>