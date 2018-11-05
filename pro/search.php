<?php
	
	$key = $_POST['key'];
	$conn = mysqli_connect('', 'root', '', 'web');
	$sql = "select Fname from reg1 where Fname like '".$key."%'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	echo $row['Fname'];

?>