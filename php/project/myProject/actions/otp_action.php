<?php
	session_start();
	$uemail = $_SESSION['pro_email']; 
	$conn = new mysqli("localhost","root","root","gaurav");	
	if (empty($_POST['userOtp'])) {
		$msg = "Please enter Otp";
	}
	else
	{
		$uotp = $conn->real_escape_string(strip_tags(trim($_REQUEST['userOtp'])));
		$q = "SELECT * from ga_users where user_email = '$uemail'"; 
		// echo($q);
		$rec = $conn->query($q) or die($conn->error);
		$ans = $rec->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);
		if ($ans['user_otp'] == $uotp) {
			$msg = "ok";
		}
		else{
			$msg = "Invalid OTP";
		}
	}
	echo $msg;
	$conn->close();
?>