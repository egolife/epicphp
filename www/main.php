<?php
echo "<br><p>Вывод из 'main.php'</p>";
$test = array(
	'key1' => 'string 1',
	'key2' => 'string 2',
	'key3' => 'string 3',
	'key4' => 143,
	'key5' => 12.85,
	'key6' => 'secter',
	12 => '12й сектор'
);

$test2 = array(12, 24, 48, 124, 8022);

$developers = array(
	"Ivan" => array(
		"surname" => "Smirnov",
		"age" => "23",
		"skills" => "Node JS"),
	"Dmitriy" => array(
		"surname" => "Vasiliev",
		"age" => "27",
		"skills" => "Backbone JS"),
	"Evgeniy" => array(
		"surname" => "Konstantinov",
		"age" => "29",
		"skills" => "Angular JS"),
	"Anastasia" => array(
		"surname" => "Kovaleva",
		"age" => "19",
		"skills" => "Coffee Script"),
	"Svetlana" => array(
		"surname" => "Haritonova",
		"age" => "24",
		"skills" => "Extcore"),
	"Veronika" => array(
		"surname" => "Smirnova",
		"age" => "21",
		"skills" => "Dojo"),
	"Petr" => array(
		"surname" => "Larionov",
		"age" => "28",
		"skills" => "Team Leading")
	);
function arr_out($array){
	echo '<table>';
	echo '<caption>Вывод в таблицу многоуровневого массива</caption>';
	foreach($array as $key => $val){
			echo '<tr><td>'.$key.'</td><td>';
			foreach($val as $key2 => $val2){
				$isComa = ($val2 != end($val)) ? ", " : "";
				echo "<b>".$key2.":</b> <span>".$val2."</span>$isComa";
			}
			echo '</td></tr>';
		}
	echo '</table>';
}
function array_sort($array, $on, $order = SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}
// $justice_league = array(
// 	array(
// 	"name" => "Superman",
// 	"realname" => "clark",
// 	"reallastname" => "kent",
// 	"Birthyear" => "1937"),
// 	array(
// 	"name" => "Batman",
// 	"realname" => "Bruce",
// 	"reallastname" => "Wein",
// 	"Birthyear" => "1933"),
// 	array(
// 	"name" => "Catwomen",
// 	"realname" => "HZ",
// 	"reallastname" => "HZ",
// 	"Birthyear" => "1947")
// 	);
// var_dump($justice_league);
// for($i = 0; $i < count($justice_league); $i++){
// 	for($j = 0; $i < 4; $j++){
// 		echo $justice_league[$i][$j];	
// 	}