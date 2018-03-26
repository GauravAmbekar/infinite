<?php
	session_start();
	$conn = new mysqli("localhost","root","root","gaurav");	
	if (empty($_POST['userEmail'])) {
		$msg = "Please enter Email";
	}
	else
	{
		$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
		// $q = "select count(*) as cnt, user_mobile from ga_users where user_email = '$uemail'";
		$q = "SELECT * from ga_users where user_email = '$uemail'"; 
		// echo($q);
		$rec = $conn->query($q) or die($conn->error);
		$ans = $rec->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);
		if (!is_null($ans)) {
			$_SESSION['pro_email'] = $uemail;
			$umob = $ans['user_mobile'];
			// echo($umob);
			$otp = mt_rand(1000, 9999);

			// send sms

			$q = "update ga_users set user_otp='$otp' where user_email = '$uemail'";
			$conn->query($q) or die($conn->error);
			$msg = "ok";
		}
		else{
			$msg = "Email not exists";
		}
	}
	echo $msg;
	$conn->close();
?>