<?php
	session_start();
	// print_r($_SESSION);
	if (!isset($_SESSION['pro_id'])) {
		header("location:login.php");
	}
	echo "Welcome ".$_SESSION['pro_name'];
?>
<a href="logout.php">Logout</a>
<a href="password.php">Change Password</a>