<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><?php
$this->load->helper('date');
$now = time();
echo '<br>Системное время : '.unix_to_human($now, TRUE, 'eu'); // Время в Европейском формате с секундами
?>
	<form enctype="multipart/form-data" method="POST" action="http://localhost/dz/index.php/start_upload/UploadError">
		<p>Введите название картинки - <input type="text" name="nameimage"/></p>
		<p>Введите имя пользователя загрузившего картинку - <input type="text" name="username"/></p>
		<input type="file" name="userfile"/>
		<input type="submit" name="add" value="Загрузить картинку"/>

	</form>
</body>
</html>