<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 7</title>
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
			<div class="col-md-12">
				<div class="panel panel-default">
		            <div class="panel-heading">Галерея</div>
		            <div class="panel-body">
		            	
						<?php
	
							$id = $_GET['id'];
							
							$db = mysqli_connect('localhost', 'root', '', 'gallery');

							if (!$db) {
								die('Ошибка подключения (' . mysqli_connect_errno() . ') '
									. mysqli_connect_error());
							}

							$query = "SELECT * FROM images WHERE id_img=$id";

							if ($result = mysqli_query($db, $query)) {
								while ($row = mysqli_fetch_assoc($result)) {
									$count = $row['img_count'];
									$count++;

						?>
									<img class="img-responsive center-block" src="<?=$row['img_path'];?>">
									<hr>
									<div class="text-center">
										<p>Кол-во просмотров картинки: <?=$count;?></p>
									</div>


						<?php		
										
								}
							}

							$query = "UPDATE images	SET img_count=$count WHERE id_img=$id";

							mysqli_query($db, $query);

							mysqli_close($db);
						?>

					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>