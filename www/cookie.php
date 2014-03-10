<?php 
			if(isset($_COOKIE['count'])){
				$count = $_COOKIE['count'] + 1;
			}
			else {
				$count = 1;
			}
			setcookie('count', $count, time() + 3600);
			
		?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Работа с cookie</title>
	<link rel="stylesheet" type="text/css" href="css/blog.css">
</head>
<body>
	<div class="wrap">
		<h1>Счетчик cookie</h1>
		<?php echo $count; ?>
	</div>
</body>
</html>