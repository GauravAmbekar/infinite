<?php
	session_start();
	session_unset($_SESSION['pro_id']);
	session_unset($_SESSION['pro_name']);
	session_unset($_SESSION['pro_mobile']);
	session_unset($_SESSION['pro_email']);
	session_regenerate_id(true);
	session_destroy();

	header("location:login.php");
?>