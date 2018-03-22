<?php
	session_start();
	if (isset($_SESSION['pro_id'])) {
		header("location:welcome.php");
	}
?>
<form id="login_form">
	Email: <input type="text" name="userEmail"><br/>
	Password: <input type="password" name="userPass"><br/>
	<input type="button" value="login" class="login_btn">
</form>
<div class="msg"></div>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="project.js"></script>