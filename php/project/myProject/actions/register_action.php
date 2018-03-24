<?php
	// print_r($_POST);	
	$conn = new mysqli("localhost","root","root","gaurav");
	$msg = "";
	if (empty($_POST['userName'])) {
		$msg = "Please enter name";
	}
	elseif (empty($_POST['userMobile'])) {
		$msg = "Please enter Mobile No.";
	}
	elseif (empty($_POST['userEmail'])) {
		$msg = "Please enter Email";
	}	
	elseif (empty($_POST['userPassword'])) {
		$msg = "Please enter Password";
	}
	elseif ($_POST['userPassword'] != $_POST['userConfirmPassword']) {
		$msg = "Password and Confirm Password are mismatch";
	}	
	else{
		$uname = $conn->real_escape_string(strip_tags(trim($_REQUEST['userName'])));
		// $msg = $uname;
		$umobile = $conn->real_escape_string(strip_tags(trim($_REQUEST['userMobile'])));
		// $msg = $umobile;
		$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
		// $msg = $uemail;
		$upass = sha1($conn->real_escape_string(strip_tags(trim($_REQUEST['userPassword']))));
		// $msg = $upass;
		$q = "select count(user_id) as cnt from ga_users where user_email = '$uemail'";
		// echo $q;
		$rec = $conn->query($q) or die($conn->error);
		// print_r($rec);
		$ans = $rec->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);
		if ($ans['cnt'] > 0) {
			$msg = "User Already Exists";
		}
		else{
			$q = "insert into ga_users(user_name, user_mobile, user_email, user_password) values('$uname', '$umobile', '$uemail', '$upass')";
			// echo $q;

			$result = $conn->query($q) or die($conn->error);

	// 		// Sending SMS
	// 		$username = "ambekar.gaurav08@gmail.com";
	// 		$hash = "19a59ef8c94352f689c1f25231145e2bf957ada5b98b9053d7acaf3847dcbd7a";
	// 		$test = "0";
	// 		$sender = "TXTLCL";
	// 		$numbers = $umob;
	// 		$message = "This is a test message from the PHP API script.";
	// 		$message = urlencode($message);
			
	// 		$url = "http://api.textlocal.in/send/?username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
			
	// 		$res = file($url);
	// 		print_r($res);
			$msg = "ok";
		}
	}
	echo $msg;
	$conn->close();
?>