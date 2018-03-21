<?php
	
	$conn = new mysqli("localhost","root","","gaurav");
	$msg = "";
	if (empty($_POST['userEmail'])) {
		$msg = "Please enter Email";
	}	
	elseif (empty($_POST['userPass'])) {
		$msg = "Please enter Password";
	}	
	else{
		$uemail = $conn->real_escape_string(strip_tags(trim($_REQUEST['userEmail'])));
		$upass = sha1($conn->real_escape_string(strip_tags(trim($_REQUEST['userPass']))));
		// echo $upass;
		// $q = "select count(user_id) as cnt from ga_users where user_email = '$uemail' and user_password = '$upass'";

		$q = "select * from ga_users where user_email = '$uemail'";
		// echo $q;
		$rec = $conn->query($q) or die($conn->error);
		// print_r($rec);
		if($rec->num_rows > 0){
			$ans = $rec->fetch_array(MYSQLI_ASSOC);
			$dbpass = $ans['user_password'];			
			// print_r($ans);

			if($upass = $dbpass){
				$msg = "Login Successfully";	
			}else{
				$msg = "Login Failed";	
			}
		}
		
		// if ($ans['cnt']) {
		// 	$msg = "Login Successfully";
		// }
		// else{
		// 	$msg = "Login Failed";
		// }
		// $msg = "ok";
	}
	echo $msg;
	$conn->close();
?>