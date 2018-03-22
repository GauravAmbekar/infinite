<?php
	session_start();
	if (!isset($_SESSION['pro_id'])) {
		header("location:login.php");
	}
?>
<form id="password_form">
	Old Password: <input type="password" name="oldPass"><br/>
	New Password: <input type="password" name="newPass"><br/>
	Confirm Password: <input type="password" name="conPass"><br/>
	<input type="button" value="Submit" class="pass_btn">
</form>
<div class="msg">hello</div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="project.js"></script>