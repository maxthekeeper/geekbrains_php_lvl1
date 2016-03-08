<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Урок 6</title>
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
		            	
		            	<div class="container">
							<div class="row">
								<div class="col-md-7 col-md-offset-2">
									<div class="panel panel-default">
							            <div class="panel-heading">Загрузка изображения</div>
							            <div class="panel-body">
											
											<!-- ФОРМА -->
											<form class="form-horizontal" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
										        <div class="form-group">
										        	<label class="col-sm-3 control-label" for="name">Выберите файл</label>
										        	<div class="col-sm-8">
										        		<input type="file" name="file" class="form-control">
										        		<p class="help-block">Загрузите файл в формате .jpg</p>
										        	</div>			            
										        </div>
										        <div class="form-group">
										        	<div class="col-sm-offset-3 col-sm-6">
										        		<button type="submit" class="btn btn-default ">Загрузить</button>
										        	</div>			        	
										        </div>
										    </form>
										</div>
									</div>
								</div>
							</div>		
						</div>
						<hr>

						<?php
						$dir = "img/";

						if (is_dir($dir)) {
							if ($fd = opendir($dir)){
								while (($file = readdir($fd)) !== false) {
									if (substr($file, -4) == '.jpg') {				
						?>
										<a href="<?=$dir.$file;?>" target="_blank"><img src="<?=$dir.$file;?>" alt="" width="180"></a>
						<?php
									}
								}
							}
						}
						?>

					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>