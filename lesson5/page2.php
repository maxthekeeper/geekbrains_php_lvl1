<?php

session_start();

if (isset($_COOKIE["style"])) {	
	$style = $_COOKIE["style"];
} else {
	$style = "bootstrap1";
}

if (!(isset($_SESSION["login"])))
		header("Location: login.php");

setcookie("page", "page2", time() + 3600 * 24 * 30);

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
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
		            <div class="panel-heading">Страница 2</div>
		            <div class="panel-body">
		            	<ul class="list-inline">
							<li><a class="btn btn-default" href="page1.php">Страница 1</a></li>
							<li><a class="btn btn-default active" href="page2.php">Страница 2</a></li>
						</ul>						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro ab ex numquam inventore, aliquid impedit molestias quam vitae architecto fugiat accusamus sequi nam magnam possimus, eius officia sed at alias.</p>
						<p>Perferendis quod cupiditate maiores, dolorum eveniet porro quis placeat delectus vel explicabo sint culpa quisquam molestias asperiores, alias voluptates adipisci laboriosam unde quia reprehenderit eius? Praesentium neque animi mollitia voluptates.</p>
						<p>Perferendis eum rem nihil, doloremque sint autem, cumque quasi distinctio dolor ducimus dolore omnis. Odit a unde repudiandae, minus, earum mollitia nihil, minima deleniti praesentium laudantium similique architecto optio voluptatum.</p>
						<a class="btn btn-default" href="setting.php">Настройки стилей</a>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>