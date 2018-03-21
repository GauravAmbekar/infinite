<?php
	// print_r($_REQUEST);
	$conn = new mysqli("localhost", "root", "", "gaurav");
	// print_r($conn);

	if (empty($_REQUEST['userName'])) {
		echo"Invalid name";
	}
	elseif (empty($_REQUEST['userSalary']) || !ctype_digit($_REQUEST['userSalary'])) {
		echo"Invalid salary";
	}
	else{
		$uname = $conn->real_escape_string(strip_tags(trim($_REQUEST['userName'])));
		$usalary = $conn->real_escape_string(strip_tags(trim($_REQUEST['userSalary'])));
		$q = "insert into users (name, salary) values ('$uname' ,'$usalary')";
		// echo($q);

		$result = $conn->query($q);
		// var_dump($result);
	

		if ($result) {
			echo "Success";
		}
		else{
			die($conn->error);	
		}
	}
	$conn->close();
?>