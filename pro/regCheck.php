<?php
       
         if(isset($_POST['sumbit'])){
			 $Fname=$_POST['First_Name'];
			 $Lname=$_POST['Last_Name'];
			 $email=$_POST['Email'];
			 $password=$_POST['Password'];
			 $userType=$_POST['userType'];
			 if($Fname=="" || $Lname=="" || $email == "" || $password=="" || $userType=="")
			 {
			 echo " null value";
			 header("Location:reg.php?error=null info");
			 }
			 else{
				 $conn = mysqli_connect('', 'root', '', 'web');
				 $sql = "INSERT into reg1 values('','$Fname','$Lname','$email','$password','$userType')";
				 $result = mysqli_query($conn, $sql);
			 }
		 
		 
		 }
		 
?>