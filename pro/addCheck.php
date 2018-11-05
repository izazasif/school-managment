<?php
       
         if(isset($_POST['sumbit'])){
			 $Fname=$_POST['First_Name'];
			 $Lname=$_POST['Last_Name'];
			 $roll=$_POST['roll'];
			 $Faname=$_POST['Fa_Name'];
			 $Gender=$_POST['Gender'];
			 if($Fname=="" || $Lname=="" || $roll == "" || $Faname=="" || $Gender=="")
			 {
			 echo " null value";
			 }
			 else{
				 $conn = mysqli_connect('', 'root', '', 'web');
				 $sql = "INSERT into student values('','$Fname','$Lname',$roll,'$Faname','$Gender')";
				 $result = mysqli_query($conn, $sql);
			 }
		 
		 
		 }
		 
?>