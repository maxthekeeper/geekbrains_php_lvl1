<?php
header("Content-Type: text/html; charset=utf-8");

// Подключение библиотек
include_once('model/gallery.php');

// Загружаем фотографию, если пользователь отправил файл
if (isset($_FILES['photo']))
{
	gallery_add($_FILES['photo']);
	header('Location: index.php');
	exit();
}

// Подготовка данных
$photos = gallery_list();

// Заголовок страницы
$title = 'Галерея фотографий';

// Выбор шаблона содержимого
if (isset($_GET['view']))
	$content = 'views/content_index_list.php';
else
	$content = 'views/content_index_table.php';

// Вывод HTML
include 'views/main.php';

