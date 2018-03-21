<?php
	$data = array("sachin", "ramesh", "tendulkar");

	print_r($data);

	echo implode("-", $data);
	echo "<br/>";
	$dob = "08/08/1990";
	echo $dob. "<br/>";
	$ans = explode("/", $dob);
	print_r($ans);
?>