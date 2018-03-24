<?php
	// print_r($_POST);
	session_start();
	$pro_id = $_SESSION['pro_id']; 
	$conn = new mysqli("localhost","root","root","gaurav");	
	if (empty($_POST['userPassword'])) {
		$msg = "Please enter New Password";
	}
	elseif (empty($_POST['userConfirmPassword'])) {
		$msg = "Please enter New Confirm Password";
	}
	elseif ($_POST['userPassword'] != $_POST['userConfirmPassword']) {
		$msg = "Password mismatch";
	}
	else{
		$newPass = sha1($_POST['userPassword']);
		$q = "update ga_users set user_password = '$newPass' where user_id = '$pro_id'";
		$res = $conn->query($q)or die($conn->error);
		if ($res) {
			$msg = "ok";
		}
	}
	echo $msg;
	$conn->close();
?>