<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/screen.css">
	<title>Второе занятие epicskills по php</title>
</head>
<body>
	<?php require("header.php"); ?>
	<section class="content">
		<div class="task task1">
			<?php
				require_once("main.php");
				$input = isset($_GET['page']) ? $_GET['page'] : "nothing! Input get ?page=###";
				printf('You have asked for include(require) page \'%s\'<br>', htmlspecialchars($input, ENT_QUOTES, 'UTF-8'));
				switch($input){
					case "about": $temp = require_once "about.php"; break;
					case "contacts": $temp = require "contacts.php"; break;
					case "main": $temp = require_once("main.php"); break;
					default:	echo "No such file or directory!";
				}
				if($temp == 1) echo '<br>Успешо подключен внешний файл';
				else echo "<br>Не удалось подключить внешний файл";
				echo "<p>";
				var_dump($test);
				echo "</p>";
				echo $test['key1']."<br>";
				foreach($test2 as $item){
					echo $item/2 ."<br>";
				}
				echo '<table>';
				echo '<caption>Проверка работы цикла foreach</caption>';
				echo '<tr><th>Ключ</th><th>Значение</th></tr>';
				foreach($test as $key => $val){
					echo'<tr><td>'.$key.'</td><td>'.$val.'</td></tr>';
					$val = "Замена";
					echo'<tr><td>'.$key.'</td><td>'.$val.'</td></tr>';
				}
				foreach($test as $key => $val){
					echo'<tr><td>'.$key.'</td><td>'.$val.'</td></tr>';
				}
				echo '</table>';
			?>
		</div>
		<div class="task task2">
			<?php
				echo "<h2>Вывод многоуровневого массива функцией var_dump:</h2>";
				var_dump($developers);
				arr_out($developers);
			?>
		</div>
		<div class="task task3">
			<?php
				echo "<h2>Применяем к нашим массивам функции шафл и сорт по ссылкам</h2>";
				shuffle(&$developers);
				sort(&$developers);
				arr_out($developers);
			?>
		</div>
		<div class="task task4">
			<?php
				echo "<h2>Разделение массива на два фрагмента</h2>";
				$dev_part1 = array_slice($developers, 0, count($developers)/2);
				$dev_part2 = array_slice($developers, count($developers)/2);
				arr_out($dev_part1);
				arr_out($dev_part2);
			?>
		</div>
		<div class="task task5">
			<form>
				<input type='text' name='pager' placeholder='Введите номер страницы' require />
			</form>
			<?php
				$input = is_numeric($_GET['pager']) ? $_GET['pager'] : "Incorrect input";
				$length = count($developers);
				for($i = 0; $i < ceil($length/2);  $i++){
					echo "<a href='http://epicskills/?pager=".($i+1)."'> ".($i+1)."</a>";
				}
				echo "<br>";
				if(is_numeric($input) && $input <= ceil($length/2)){
					$cout = "";
					$first_elem_index = ($input-1)*2;
					foreach($developers[$first_elem_index] as $key => $value) {
						$cout .= $key;
						$cout .= " => ";
						$cout .= $value;
						$cout .= ", ";
					}
					$cout .= "<br>";
					if($developers[$first_elem_index] < end($developers)){
						foreach($developers[$first_elem_index + 1] as $key => $value) {
							$cout .= $key;
							$cout .= " => ";
							$cout .= $value;
							$cout .= ", ";
						}
					}
					echo $cout;
				}
				else echo "Вы превысили максимальное значение страницы!";	
			?>
		</div>
		<div class="task task6">
			<form>
				<input type='text' name='name' placeholder='Введите имя' required />
				<input type='text' name='email' placeholder='Введите email' required />
				<input type='text' name='age' placeholder='Введите возраст' required />
				<input type='text' name='comment' placeholder='Введите комментарий' />
				<input type="submit" name='confirm' />
			</form>
			<?php
				$form = "name: ".$_GET['name']."<br>email: ".$_GET['email'].
				"<br>age: ".$_GET['age'].
				"<br>comment".(isset($_GET['comment']) ? $_GET['comment'] : "");
				echo $form;
			?>
		</div>
		<div class="task task7">
			<form>
				<input type='text' name='str' placeholder='Введите строку' require />
				<select name="func" id="func">
					<option value="domen_from_email">domen from email</option>
					<option value="str_from_array">no edge bsp lowercase</option>
					<option value="count_even">count words with even char num</option>
					<option value="count_words">count words in str</option>
					<option value="even_uppercase">every second char to uppercase</option>
					<option value="word_shuffle">shuffle chars in every word except 1st and last</option>
					<option value="name_from_path">find filename from path</option>
				</select>
			</form>
			<?php
				$str = isset($_GET['str']) ? $_GET['str'] : "NO STRING";
				$func = isset($_GET['func']) ? $_GET['func'] : "NO FUNC";
				switch($func){
					case "domen_from_email": $result = substr($str,strpos($str, "@")+1); break;
					case "str_from_array": $result = mb_strtolower(trim($str), 'UTF-8'); break;
					case "count_even": $temp = require_once("main.php"); break;
					case "count_words": $temp = require_once("main.php"); break;
					case "even_uppercase": $temp = require_once("main.php"); break;
					case "word_shuffle": $temp = require_once("main.php"); break;
					case "name_from_path": $temp = require_once("main.php"); break;
					default:	echo "Not found!";
				}
				echo "<p>$result</p>";
			?>
		</div>
		<div class="task task8">
			<?php
				echo "<p class='ev'>";
				var_dump($GLOBALS);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_SERVER);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_GET);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_POST);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_FILES);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_SESSION);
				echo "</p>";
				echo "<p class='ev'>";;
				var_dump($_ENV);
				echo "</p>";
				echo "<p class='ev'>";
				var_dump($_COOKIE);
				echo "</p>";
			?>
		</div>
	</section>
	<?php require("footer.php"); ?>
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>



<?php
//В чем разница записи require"###" и require("###")
//У меня установлен php 5.3, как можно в Denver поставить 5.4? 
//Хочу синтаксис маccива $x = []; А не array
//Нельзя обращаться в хэш-массиву по числовому индексу???
//unset($array[0]) - удаляет ключ массива, не производя переиндексацию
//&$val - передает значение по ссылке, те в цикле foreach не будет создана копия
//При этом в исходниках перезапись массива не происходит оО?????
//как запустить сайт с CMS На локальном сервере
//Не совсем понял что делает и как работает функция List