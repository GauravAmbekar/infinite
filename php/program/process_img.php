<?php
	// $imgData = $_REQUEST['imgData'];
	echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	$imgData = $_FILES['imgData']['name'];
	echo($imgData);
	echo("<br/>");	
	$newData = strrchr($imgData, ".");
	$ext = ltrim($newData, ".");

	if ($ext == "jpg" || $ext == "jpeg" || $ext == "png" ||	 $ext == "gif") {
		echo "valid";
	}else{
		echo"invalid";
	}
?>