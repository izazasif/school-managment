<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
		



		$isValid = "";

		if($username == "" && $password == "" ){
			header("location: Login.php?status=nullvalue");
		
		}

		else{

               $conn = mysqli_connect('', 'root', '', 'web');
			   $sql = "SELECT * FROM reg1 WHERE Fname = '$username' and password = '$password'";
				 $result = mysqli_query($conn, $sql);
				 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         
          $count = mysqli_num_rows($result);
			  if($count  == 1){
		
					$_SESSION['abc'] = "validuser";

					$isValid = "valid";
					$row['Type']=$_SESSION['userType'];
                   
                  
					
				}
			}
			
			

			     if($isValid == "valid")
				{ 
			
					if(isset($_POST['remember']))
			       {
			
			       	 setcookie('username',$username,time()+60*60);
			       	 setcookie('password',$password,time()+60*60);

                       if($_SESSION['userType']==Teacher)
                    {
                  
                    	header("location:teacher.php");

                    }

                  
                  

			    }

			      else
			     {
			   
			     	header("location:admin.php");

			     }
			     
			}

			else
			{
				header("location: Login.php?status=invaliduser");
			}
			
			
		}

	
	
	else{
		echo "invalid Reguest!";
	}
?>