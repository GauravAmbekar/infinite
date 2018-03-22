<?php
	print_r($_POST);
	session_start();
	print_r($_SESSION);
	$conn = new mysqli("localhost","root","","gaurav");	
	
?>