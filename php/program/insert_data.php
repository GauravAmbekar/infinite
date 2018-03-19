<?php
	$conn = new mysqli("localhost", "root", "", "gaurav");
	$rec = $_REQUEST["userid"];
	$q = "select name, salary from users where id = '$rec'";
	$result = $conn->query($q);
	$ans = $result->fetch_array(MYSQLI_ASSOC);
	// echo $rec;
?>
<form action="get_insert_data.php" method="post">
<input type="text" name="userName" placeholder="Enter Name" value="<?= $ans['name'];?>">
<input type="text" name="userSalary" placeholder="Enter Salary" value="<?= $ans['salary'];?>">
<input type="submit">
</form>