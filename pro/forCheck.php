<?php
   if(isset($_POST['sumbit'])) {
	        $id=$_POST['id'];
			 $password=$_POST['password'];
			    if($id=="" || $password=="")
			 {
			 echo " null value1";
			 }
             else {
			
			 $conn = mysqli_connect('', 'root', '', 'web');
			 $sql = "update reg1 SET password=$password WHERE id=$id";
             $result = mysqli_query($conn, $sql);
   
   }   
			 
			 }
			 
?>