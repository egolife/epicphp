<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/blog.css">
	<title>Заготовка формы</title>
</head>
<body>
	<div class="wrap">
		<h1>Простейшая форма</h1>
		<form action = "form.php" method="post">
			<input type="text" name="title" placeholder="Название поста"><br>
			<textarea name="text"></textarea><br>
			<input type="submit" name="submit">
		</form>
		<?php require("blog.php"); ?>
	</div>
</body>
</html>