<?php
	echo("<pre>");
	print_r($_FILES);
	echo("</pre>");

	$name = $_FILES['imgData']['name'];
	$tmp = $_FILES['imgData']['tmp_name'];

	$result = move_uploaded_file($tmp, $name);

	var_dump($result);
?>