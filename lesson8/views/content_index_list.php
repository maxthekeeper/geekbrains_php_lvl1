<a href="index.php">Таблица</a> | <b>Список</b>

<br/><br/>

<?php foreach ($photos as $photo): ?>

	<a href="photo.php?id=<?=$photo['id_img']?>" target="_blank">
		<img class="img-thumbnail" src="<?=$photo['thumbs_path']?>" />
	</a>
	<br/>

<?php endforeach; ?>

<br><br>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="photo" >
	<input type="submit" value="Загрузить файл!" >
</form>