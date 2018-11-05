<?php
	
	if(isset($_GET['status'])){
		$status = $_GET['status'];

		if($status == "invaliduser"){
			echo "Invalid username/password";
		}else if($status == "nullvalue"){
			echo "username/password can't be empty";
		} 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>

<style type="text/css">
	body{
		background-color: skyblue;

	}
</style>
<body>
	<fieldset>
	<legend>LOGIN</legend>
		<form method="post" action="logCheck.php" >
			User Name: <input type="text" name="username"/>
			<br><br>
			Password  : <input type="password" name="password"/>
			<br>
			<input type="submit" name="submit" value="Login">
			
			<input type="checkbox" name="remember" value="1"><b>Remember me</b>
			<br>
			<a href="for.php"> forget password </a>
			<a href="reg.php"> Sing Up</a>
		</form>
	</fieldset>

</body>

</html>