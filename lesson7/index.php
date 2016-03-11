<?php

	$max_size = 1024 * 1024 * 5; // 5 Mb
	$upload_dir = 'img/'; // директория для загрузки файлов
	$thumbnails_dir = 'img/thumbs/'; // директория для уменьшенных копий
	$message = ''; // переменная для вывода сообщений под формой
	$message_class = ''; // переменная для класса сообщений

	// файл загружен?
	if (isset($_FILES['file'])) {
		// файл загружен методом POST?
		if (is_uploaded_file($_FILES['file']['tmp_name'])) {
			
			// файл
			$file = $_FILES['file']['tmp_name'];

			// проверяем размер файла
			if (filesize($file) > $max_size) {

				// если больше 5 Мб - выводим ошибку
				$message = "Файл слишком большой";
				$message_class = 'text-danger';
			} else {

				// сохраняем файл в директории
				if (move_uploaded_file($file, $upload_dir . $_FILES['file']['name'])) {

					
					// меняем права
					chmod($upload_dir . $_FILES['file']['name'], 0777);

					// делаем уменьшенную копию загруженного изображения
					$thumbnail = new Imagick();
					$thumbnail->readImage($upload_dir . $_FILES['file']['name']);
					$thumbnail->cropThumbnailImage(180, 135);
					$thumbnail->writeImage($thumbnails_dir . $_FILES['file']['name']);

					// меняем права
					chmod($thumbnails_dir . $_FILES['file']['name'], 0777);			

					// выводим сообщение
					$message = 'Файл успешно загружен';
					$message_class = 'text-success';
				}

			}

			// записываем данные в БД
			$img_path = $upload_dir . $_FILES['file']['name'];
			$thumbs_path = $thumbnails_dir . $_FILES['file']['name'];
			
			$db = mysqli_connect('localhost', 'root', '', 'gallery');

			if (!$db) {
				die('Ошибка подключения (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
			}

			$query = "INSERT INTO images (img_path, thumbs_path) VALUES ('$img_path', '$thumbs_path')";

			mysqli_query($db, $query);

			mysqli_close($db);
		}
	}

?>
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
		            	
		            	<div class="container">
							<div class="row">
								<div class="col-md-7 col-md-offset-2">
									<div class="panel panel-default">
							            <div class="panel-heading">Загрузка изображения</div>
							            <div class="panel-body">
											
											<!-- ФОРМА -->
											<form class="form-horizontal" enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
										        <div class="form-group">
										        	<label class="col-sm-3 control-label" for="file">Выберите файл</label>
										        	<div class="col-sm-8">
										        		<input type="file" accept="image/jpeg" name="file" class="form-control">					        		
										        		<p class="help-block">Загрузите файл в формате .jpg</p>
										        	</div>			            
										        </div>
										        <div class="form-group">
										        	<div class="col-sm-offset-3 col-sm-6">
										        		<input type="submit" class="btn btn-default ">
										        	</div>			        	
										        </div>
										        <div class="col-sm-offset-3 col-sm-6">
										        	<p class="<?=$message_class;?>"><?=$message;?></p>
										        </div>
										    </form>
										    
										</div>
									</div>
								</div>
							</div>		
						</div>
						<hr>

						<?php
							$db = mysqli_connect('localhost', 'root', '', 'gallery');

							if (!$db) {
								die('Ошибка подключения (' . mysqli_connect_errno() . ') '
									. mysqli_connect_error());
							}

							$query = "SELECT * FROM images ORDER BY img_count DESC";

							if ($result = mysqli_query($db, $query)) {
								while ($row = mysqli_fetch_assoc($result)) {
						?>
									<a href="photo.php?id=<?=$row['id_img']?>" target="_blank"><img class="img-thumbnail" src="<?=$row['thumbs_path']?>"></a>
						<?php			
								}
							} 

							mysqli_close($db);
						?>

					</div>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>