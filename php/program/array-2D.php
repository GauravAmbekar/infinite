<?php
	$data = array(
		0 => [1, "rohit", 20],
		1 => [2, "akash", 30],
		2 => [3, "jay", 22],
		3 => [4, "mohit", 34],
	);

	echo "<pre>";
	print_r($data);
	echo "</pre>";

	echo("<hr/>");

	foreach ($data as $value) {
		echo "<p>";
		echo $value[0];
		echo $value[1];
		echo $value[2];
		echo "</p>";
	}
	
?>