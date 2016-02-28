<?php
	$cherry = [
		'img/cherry.jpg' => [
			"Вишня",
			"Вишни",
			"Вишневый",
			"Вишневого",
			"Вишневому"
		]		
	];
	$chehov = [
		'img/chehov.jpg' => [
			"Чехов",
			"Чехову",
			"Чехове",
			"Чеховым",
			"Чехова"
		]
	];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
	<?php
		if ($_SERVER['REQUEST_METHOD'] == 'GET') { 
	?>
	<form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']) ?>" method="POST">
		<input type="text" name="message" size="50"><br>
		<input type="submit" value="Отправить" >
	</form>
	<?php 
		} else {
			$message_str = explode(' ', $_POST['message']);		
			
			foreach ($message_str as $msg) {
				
				foreach ($cherry['img/cherry.jpg'] as $chr) {

					if ($msg == $chr) {
	?>
	<img src="<?=key($cherry);?>" width="100px">
	<?php
					}
				}
				foreach ($chehov['img/chehov.jpg'] as $chv) {
					if ($msg == $chv) {
	?>
	<img src="<?=key($chehov);?>" width="100px">
	<?php
					}
				}
			}
		}
	?>
</body>
</html>

