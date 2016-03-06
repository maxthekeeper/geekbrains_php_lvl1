<?php

session_start();

if (isset($_COOKIE["style"])) {	
	$style = $_COOKIE["style"];

} else {
	$style = "bootstrap1";
}

if (!(isset($_SESSION["login"])))
		header("Location: login.php");

setcookie("page", "page1", time() + 3600 * 24 * 30);

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
		            <div class="panel-heading">Страница 1</div>
		            <div class="panel-body">
		            	<ul class="list-inline">
							<li><a class="btn btn-default active" href="page1.php">Страница 1</a></li>
							<li><a class="btn btn-default" href="page2.php">Страница 2</a></li>
						</ul>						
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque voluptas illo molestiae sapiente reprehenderit culpa excepturi nemo, ipsum sed ab tempore, voluptates laborum. Debitis adipisci est itaque ipsum aspernatur? Explicabo!</p>
						<p>Vitae, incidunt, esse. Iure dolores eum corrupti numquam, soluta suscipit quam voluptate consectetur commodi nam, quidem necessitatibus quibusdam optio eius aperiam dolore obcaecati voluptatum facere fugiat deleniti magni vero! Vel!</p>
						<p>Iste assumenda possimus ex consequatur cumque soluta provident autem eos et eveniet. Dolorum, totam, officia! Dignissimos nesciunt delectus labore ea illum, tempora, repellendus, perspiciatis laudantium at impedit non nisi est!</p>
						<p>Harum architecto omnis rem fugiat aperiam soluta in non sint est aliquid obcaecati doloremque eius, ducimus consequuntur, error labore fuga? Laborum illum vel, incidunt inventore soluta sunt, culpa omnis voluptatem?</p>
						<p>Excepturi veritatis neque maxime quam quod voluptatibus accusantium dolore eveniet fugit quibusdam molestiae voluptatem obcaecati culpa odio, perspiciatis consectetur nemo tempora reiciendis? Nesciunt impedit nulla, corporis maiores libero soluta excepturi.</p>
						<a class="btn btn-default" href="setting.php">Настройки стилей</a>
					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>