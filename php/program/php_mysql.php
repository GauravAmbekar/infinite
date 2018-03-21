<?php
	// $result = mysqli_connect("localhost","root","","gaurav");
	$result = new mysqli( "localhost","root","","gaurav" );
	echo "<pre>";
	print_r($result);

	// var_dump(mysqli_close($result));
	var_dump($result->close());
?>