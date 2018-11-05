<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body
		{
			background-color: skyblue;

		}

			

		</style>

	
		
   
</head>



<fieldset>
    <legend><b>REGISTRATION</b></legend>

	<form method="post" action="regCheck.php">
		<br/>
		<table  width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>First Name</td>
				<td>:</td>
				<td><input name="First_Name" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Last Name</td>
				<td>:</td>
				<td><input name="Last_Name" type="text" value=""></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input name= "Email" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="Password" type="password"></td>
				<td></td>
				<td></td>
			</tr>
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>UserType</td>
				<td>:</td>
				<td><input name="userType" type="radio" value="Teacher">Teacher</td>
				<td><input name="userType" type="radio" value="Admin">Admin</td>
				
			</tr>
			
		</table>
		<hr/>
		<input type="submit" name="sumbit" value="Submit">
		</br>
		
		
	</form>
</fieldset>

</div>