<?php 
	session_start();
	if(!isset($_SESSION['count'])){
		$_SESSION['count'] = 0;
	}
	else {
		$_SESSION['count']++;
	}
	setcookie('count', $count, time() + 3600);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Работа с sessions</title>
	<link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
	<div class="wrap">
		<h1>Счетчик sessions</h1>
		<?php 
			echo $_SESSION['count']; 
			echo "<br>";
			echo session_id();
		?>
	</div>
</body>
</html>