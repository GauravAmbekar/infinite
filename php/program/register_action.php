<?php
	print_r($_POST);	
	// $conn = new mysqli("localhost","root","","gaurav");
	// $msg = "";
	// if (empty($_POST['userName'])) {
	// 	$msg = "Please enter name";
	// }
	// elseif (empty($_POST['userMobile'])) {
	// 	$msg = "Please enter Mobile No.";
	// }
	// elseif (empty($_POST['userEmail'])) {
	// 	$msg = "Please enter Email";
	// }	
	// elseif (empty($_POST['userPass'])) {
	// 	$msg = "Please enter Password";
	// }
	// elseif ($_POST['userPass'] != $_POST['userCpass']) {
	// 	$msg = "Please enter Confirm password";
	// }	
	// else{
	// 	$uname = $conn->real_escape_string(strip_tags(trim($_REQUEST['userName'])));
	// 	$umob = $conn->real_escape_string(strip_tags(trim($_REQUEST['userMobile'])));
	// 	$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
	// 	$upass = sha1($conn->real_escape_string(strip_tags(trim($_REQUEST['userPass']))));
	// 	// echo $upass;
	// 	$q = "select count(user_id) as cnt from ga_users where user_email = '$uemail'";
	// 	// echo $q;
	// 	$rec = $conn->query($q);
	// 	// print_r($rec);
	// 	$ans = $rec->fetch_array(MYSQLI_ASSOC);
	// 	// print_r($ans);
	// 	if ($ans['cnt'] > 0) {
	// 		$msg = "User Already Exists";
	// 	}
	// 	else{
	// 		$q = "insert into ga_users(user_name, user_mobile, user_email, user_password) values('$uname', '$umob', '$uemail', '$upass')";
	// 		$result = $conn->query($q) or die($conn->error);

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
	// 		$msg = "ok";
	// 	}
	// }
	// echo $msg;
	// $conn->close();
?>