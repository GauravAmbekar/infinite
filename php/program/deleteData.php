<?php
	$conn = new mysqli("localhost", "root", "", "gaurav");
	// print_r($_REQUEST);
	$rec = $_REQUEST["userid"];
	// echo $rec;
	$q = "delete from users where id='$rec'";
	echo $q;

	$result = $conn->query($q);

	if ($result) {
		header("Location:show_data.php");
	}else{
		die($conn->error);
	}
?>