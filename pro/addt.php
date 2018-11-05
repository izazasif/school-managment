<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	$data ='<user>
		  		<username>'.$_POST['user'].'</username>
		  		<teacher>'.$_POST['te'].'</teacher>
		  		<date>'.$_POST['de'].'</date>
		  	</user>';

	$myfile = fopen('user.xml', "w");
	fwrite($myfile, $data);
}
?>


<form method="post" action="#">
	ID:
	<input type="text" name="user"><br/>
	Teacher:
	<input type="text" name="te"><br/>
    Joining Date:
	<input type="text" name="de"><br/>

	<input type="submit" name="" value="submit">
</form>