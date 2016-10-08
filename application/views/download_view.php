<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<form method="POST" action="http://localhost/dz/index.php/start_upload/SortImage">
		
		<p>Введите размер картинки : <input type="text" name="sel" /></p>		
		<p><input type="submit" name="sort" value="Отсортировать"/></p>

	</form>

	<?php
echo '<ul>';

	foreach ($picturies as $i )
	 { 

		echo'<li> Имя: '.$i['nameimage'].'| Имя Юзера :'.$i['nameuser'].
		'| Размер :'.$i['sizeimage'].'| Запросы :'.$i['requested'].'</li>';

	}

echo '</ul>';


	?>
</body>
</html>