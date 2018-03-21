<?php
	// print_r($_GET);
	$value1 = $_GET['value1'];
	$value2 = $_GET['value2'];

	$add = $value1 + $value2;
	$sub = $value1 - $value2;
	$mul = $value1 * $value2;
	$div = $value1 / $value2;

	echo("Operations");
	echo("<br/>");
	echo $value1 . "+" . $value2."=" .$add;
	echo("<br/>");
	echo $value1 . "-" . $value2."=" .$sub;
	echo("<br/>");
	echo $value1 . "*" . $value2."=" .$mul;
	echo("<br/>");
	echo $value1 . "/" . $value2."=" .$div;

?>