<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="main.css">
	<title>Comparison tables</title>
</head>
<body>
	<table>
		<thead>
			<tr class="exter">
				<th>Expression</th>
				<th>gettype()</th>
				<th>empty()</th>
				<th>is_null()</th>
				<th>isset()</th>
				<th>boolean : if($x)</th>
			</tr>
		</thead>
		<tbody>
	<?php
	$left_col = array('$x = "";', '$x = null;', 'var $x;', '$x is undefined', '$x = array();', '$x = false;', 
	'$x = true;', '$x = 1;', '$x = 42;', '$x = 0;', '$x = -1;', '$x = "1";',
	 '$x = "0";', '$x = "-1";', '$x = "php";', '$x = "true";', '$x = "false";');
	$x_array = array("", null, $x, $x1, array(), false, true, 1, 42, 0, -1, "1", "0", "-1", "php", "true", "false");

		for($i = 0; $i < 17; $i++){
			echo "<tr>";
			for($j = 0; $j < 6; $j++){
				echo "<td>";
				if($j === 0) echo $left_col[$i];
				if($j === 1) echo gettype($x_array[$i]);
				if($j === 2) echo empty($x_array[$i]) ? "TRUE" : "FALSE";
				if($j === 3) echo is_null($x_array[$i]) ? "TRUE" : "FALSE";
				if($j === 4) echo isset($x_array[$i]) ? "TRUE" : "FALSE";
				if($j === 5) echo ($x_array[$i]) ? "TRUE" : "FALSE";
				echo "</td>";
			}
			echo "</tr>";
		}
	?>
		</tbody>
	</table>

</body>
</html>