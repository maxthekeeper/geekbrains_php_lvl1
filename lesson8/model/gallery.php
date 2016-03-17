<?php

require_once('config/db.php');

$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if (!$db) {
	die('Ошибка подключения (' . mysqli_connect_errno() . ') '
		. mysqli_connect_error());
}

// Функция возвращает объект фотографии (ассоциативный массив).
function gallery_item($id)
{
	global $db;
	$id = $_GET['id'];

	$query = "SELECT * FROM images WHERE id_img=$id";

	if ($result = mysqli_query($db, $query)) {
		$row = mysqli_fetch_assoc($result);
	}

	$count = $row['img_count'];
	$count++;

	$query = "UPDATE images	SET img_count=$count WHERE id_img=$id";

	mysqli_query($db, $query);
	
	return $row;
}

// Функция возвращает список фотографий.
function gallery_list()
{	
	global $db;

	$query = "SELECT * FROM images ORDER BY img_count DESC";

	if ($result = mysqli_query($db, $query)) {
		while ($row = mysqli_fetch_assoc($result))
			$rows[] = $row;
	}

	return $rows;
}

// Функция добавляет в галерею новую фотографию.
function gallery_add($file)
{
	$max_size = 1024 * 1024 * 5; // 5 Mb
	$upload_dir = 'img/'; // директория для загрузки файлов
	$thumbnails_dir = 'img/thumbs/'; // директория для уменьшенных копий
	$message = ''; // переменная для вывода сообщений под формой
	$message_class = ''; // переменная для класса сообщений

	// файл загружен методом POST?
	if (is_uploaded_file($file['tmp_name'])) {
		
		// файл
		$f = $file['tmp_name'];

		// проверяем размер файла
		if ((filesize($f) > $max_size) || (in_array($file['name'], scandir($upload_dir)))) {

			// если больше 5 Мб или файл с таким именем существует - выводим ошибку
			$message = "Файл существует или он слишком большой";
			$message_class = 'text-danger';
			echo $message;
			exit();
		} else {

			if (move_uploaded_file($f, $upload_dir . $file['name'])) {
				
				// меняем права
				chmod($upload_dir . $file['name'], 0777);

				// делаем уменьшенную копию загруженного изображения
				$thumbnail = new Imagick();
				$thumbnail->readImage($upload_dir . $file['name']);
				$thumbnail->cropThumbnailImage(180, 135);
				$thumbnail->writeImage($thumbnails_dir . $file['name']);

				// меняем права
				chmod($thumbnails_dir . $file['name'], 0777);			

				// выводим сообщение
				$message = 'Файл успешно загружен';
				$message_class = 'text-success';
			}
		}

		// записываем данные в БД
		$img_path = $upload_dir . $file['name'];
		$thumbs_path = $thumbnails_dir . $file['name'];
		
		global $db;

		$query = "INSERT INTO images (img_path, thumbs_path) VALUES ('$img_path', '$thumbs_path')";

		mysqli_query($db, $query);

	}
}
?>
