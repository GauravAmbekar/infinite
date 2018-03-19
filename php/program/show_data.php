<?php
	$conn = new mysqli("localhost", "root", "", "gaurav");
	$q = "select id, name, salary from users";
	// echo($q);
	$result = $conn->query($q);
	// echo"<pre>";
	// print_r($result);
	// echo"</pre>";

	if ($result->num_rows > 0) {
		//fetch_array() => Mixed Array (Default)
		//fetch_array(MYSQLI_BOTH) => Mixed Array (Default)
		//fetch_array(MYSQLI_NUM) => Numeric Array
		//fetch_array(MYSQLI_ASSOC) => Associative Array

		while ($ans = $result->fetch_array(MYSQLI_ASSOC)) {
			// echo"<pre>";
			// print_r($ans);
			// echo"</pre>";

			$id = $ans['id'];
			echo"<div>";
			echo $ans['id']. "&nbsp;";
			echo $ans['name']. "&nbsp;";
			echo $ans['salary']. "&nbsp;";
			echo"<a href='deleteData.php?userid=$id'>Delete</a>";
			echo"<a href='update_data.php?userid=$id'>Edit</a>"."&nbsp";
			echo"</div>";

		}

	}
	else{
		echo"No record found";
	}
	$conn->close();
?>