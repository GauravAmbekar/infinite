<?php
	$name = "Gaurav Ambekar";
	$pattern = "/^[a-zA-Z][a-zA-Z ]{1,}[a-zA-Z]$/";

	$ans = preg_match($pattern, $name);
	echo "<b>Regular Expression</b><br/>";
	// var_dump($ans);
	if ($ans == 1) {
		echo "valid";
	}
	else{
		echo "invalid";
	}

?>