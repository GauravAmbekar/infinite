<?php
	$data = ["PHP", "MySql", "Ajax", "Jquery", "Bootstrap"];


	print_r($data);

	echo("<hr/>");

	for ($i=0; $i<count($data) ; $i++) { 
		echo $data[$i]."<br>";
	}

	echo("<hr/>");
	$i=0; 
	while($i<count($data)) { 
		echo $data[$i]."<br>";
		$i++;
	}
	echo("<hr/>");
	foreach ($data as $value) {
		echo $value."<br/>";
	}
?>