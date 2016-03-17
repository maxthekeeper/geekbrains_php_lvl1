<b>Таблица</b> | <a href="index.php?view=list">Список</a>

<br/><br/>

<table>
	<tr>
	<?php 
		$i = 0; 
		foreach ($photos as $photo): ?>

			<?php if ($i % 5 == 0): ?>
				</tr><tr>
			<?php endif; ?>
			<td>
				<a href="photo.php?id=<?=$photo['id_img']?>" target="_blank">
					<img class="img-thumbnail" src="<?=$photo['thumbs_path']?>" />
				</a>
			</td>
		<?php $i++; ?>

	<?php endforeach; ?>
	</tr>
</table>

<br/><br/>