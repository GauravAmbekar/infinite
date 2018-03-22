<?php
	$conn = new mysqli("localhost","root","","gaurav");	
	// print_r($_POST);
	if (empty($_POST['userEmail'])) {
		$msg = "Please enter Email";
	}
	else{
		$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
		$q = "select count(*) as cnt, user_mobile from ga_users where user_email = '$uemail'";
		// echo($q);
		$rec = $conn->query($q) or die($conn->error);
		$ans = $rec->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);

		if ($ans['cnt'] > 0) {
			$umob = $ans['user_mobile'];
			// echo($umob);
			$otp = rand(1000, 9999);
			//do sms

			$q = "update ga_users set user_otp='$otp' where user_email = '$uemail'";
			// echo $otp;
			$conn->query($q) or die($conn->error);
			$msg= "ok";
		}
		else{
			$msg = "Email not exists";
		}
	}
	echo $msg;
	$conn->close();
?>