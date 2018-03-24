<?php
	session_start();
	$conn = new mysqli("localhost","root","root","gaurav");
	$msg = "";
	if (empty($_POST['userEmail'])) {
		$msg = "Please enter Email";
	}
	elseif (empty($_POST['userPassword'])) {
		$msg = "Please enter Password";
	}
	else{
		$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
		$upass = sha1($conn->real_escape_string(strip_tags(trim($_REQUEST['userPassword']))));
		$q = "select * from ga_users where user_email = '$uemail'";
		// echo $q;
		$rec = $conn->query($q) or die($conn->error);
		if($rec->num_rows > 0){
			$ans = $rec->fetch_array(MYSQLI_ASSOC);
			$dbpass = $ans['user_password'];			
			// print_r($ans);
			if($upass = $dbpass){
				$_SESSION['pro_id'] = $ans['user_id'];
				$_SESSION['pro_name'] = $ans['user_name'];
				$_SESSION['pro_mobile'] = $ans['user_mobile'];
				$_SESSION['pro_email'] = $ans['user_email'];
				$msg = "ok";	
			}else{
				$msg = "Login Failed";	
			}
		}
	}
	echo $msg;
	$conn->close();
?>