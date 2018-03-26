<?php
	session_start();
	$uemail = $_SESSION['pro_email']; 
	$conn = new mysqli("localhost","root","root","gaurav");	
	if (empty($_POST['userOtp'])) {
		$msg = "Please enter Otp";
	}elseif (strlen($_POST['userOtp']) != 4) {
		$msg = "Please enter only four digit";
	}
	else
	{
		$uotp = $conn->real_escape_string(strip_tags(trim($_REQUEST['userOtp'])));
		$q = "SELECT * from ga_users where user_email = '$uemail'"; 
		$rec = $conn->query($q) or die($conn->error);
		$ans = $rec->fetch_array(MYSQLI_ASSOC);
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