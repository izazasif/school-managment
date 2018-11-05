<!DOCTYPE html>
<html>
<head>

  <script type="text/javascript">
    
    fuction validetion()

    {
      if(document.myfrom.First_Name.value=="")
        alert(" first name null");
      document.myfrom.First_Name.focus();
      return false ;

      if(document.myfrom..value=="")
        alert(" last name null");
      document.myfrom.Last_Name.focus();
      return false ;

      if(document.myfrom.roll.value=="")
        alert("roll null");
      document.myfrom.roll.focus();
      return false ;


      if(document.myfrom.Fa_Name.value=="")
        alert("name null");
      document.myfrom.Fa_Name.focus();
      return false ;


      if(document.myfrom.Gender.value=="")
        alert("name null");
      document.myfrom.Gender.focus();
      return false ;
    }

    return (true);

  }

  </script>
<style>



ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;


}

 h1 {
  font: red;
  text-align: center;
  
  
}
</style>
</head>
<body>
 
<div style="background-color:lightblue">

<img src ="1.png" height="90px" width="100px" >
<h1>American International Scool</h1>



</div>





<ul>

  <li><a  href="home.php">Home</a></li>
  <li><a href="admission.php">Admission</a></li>
  <li><a href="adminstration.php">Adminstration</a></li>
  <li><a href="galery.php">Gallery</a></li>
  <li><a href="contact.php">Contacts</a></li>
  <li><a href="login.php">Sing In</a></li>
  <li><a href="about.php">About</a></li>
  
</ul>

<div>

  <fieldset>
    <legend><b>NEW STUDENT ADMISSION FORM</b></legend>

  <form method="post" action="addCheck.php" name ="myfrom" onsubmit="return(validetion());">
    <br/>
    <table width="100%" cellpadding="0" cellspacing="0" bgcolor="skyblue">
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
        <td>Roll No</td>
        <td>:</td>
        <td><input name= "roll" type="text"></td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
            <tr>
        <td>Father Name</td>
        <td>:</td>
        <td><input name="Fa_Name" type="text" value=""></td>
        <td></td>
      </tr>   
      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Gender</td>
        <td>:</td>
        <td><input name="Gender" type="radio" value="Male">Male</td>
        <td><input name="Gender" type="radio" value="Female">Female</td>
      </tr>
    </table>
    <hr/>
    <input type="submit" name="sumbit" value="Submit">
    </br>
  </form>
</fieldset>


   </div>

</body>
</html>
<?php
include "footer.php"
?>