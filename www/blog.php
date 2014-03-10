<?php
	$posts = array(
		"Заголовок1" => "Пост №1",
		"Заголовок2" => "Пост №2",
		"Заголовок3" => "Пост №3"
		);
	$key = $_POST["title"];
	$posts[$key] = $_POST["text"];
	foreach($posts as $key => $value){
		echo "<article>";
		echo "<h2>$key</h2>";
		echo "<p>$value</p>";
		echo "</article>";
	}