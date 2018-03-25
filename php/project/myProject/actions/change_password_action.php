<?php
	session_start();
	// print_r($_SESSION);
	$pro_id = $_SESSION['pro_id'];
	$conn = new mysqli("localhost","root","root","gaurav");	
	// print_r($_POST);
	if (empty($_POST['oldPassword'])) {
		$msg = "Please enter Current Password";
	}
	elseif(empty($_POST['newPassword'])){
		$msg = "Please enter new Password";
	}
	elseif ($_POST['newPassword'] != $_POST['confirmPassword']) {
		$msg = "Confirm and New password are mismatch";
	}
	elseif($_POST['oldPassword'] == $_POST['newPassword']){
		$msg = "New and Current Password should be different";
	}
	else{
		$q = "select user_password from ga_users where user_id = '$pro_id' ";
		$record = $conn->query($q)or die($conn->error);
		// echo $q;
		// print_r($record);
		$ans = $record->fetch_array(MYSQLI_ASSOC);
		// print_r($ans);
		$dbpass = $ans['user_password'];
		// echo $dbpass."<br/>";
		// echo sha1($_POST['oldPass']);
		if ($dbpass != sha1($_POST['oldPassword'])) {
			$msg = "Invalid Current Password";
		}
		else{
			$newPass = sha1($_POST['newPassword']);
			$q = "update ga_users set user_password = '$newPass' where user_id = '$pro_id'";
			// echo $q;
			$res = $conn->query($q)or die($conn->error);
			if ($res) {
				$msg = "ok";
			}
		}
	}
	echo $msg;
	$conn->close();
?>