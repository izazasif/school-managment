<?php


if (!empty($_REQUEST['submit'])) {

    header("location: Login.php");

  

}



?>

<?php

session_start();
?>
<!DOCTYPE html>
<html>
<head>
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

 <ul>

  <li><a  href="home.php">Home</a></li>
  <li><a href="admission.php">Admission</a></li>
  <li><a href="adminstration.php">Adminstration</a></li>
  <li><a href="galery.php">Gallery</a></li>
  <li><a href="contact.php">Contacts</a></li>
  <li><a href="login.php">Sing In</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="logout.php">Logout</a></li>
  <li><a href="addt.php">Add teacher</a></li>

  
</ul>  
</ul>

<center>
    <div>
      <input type="text" id='search' name="" onkeyup="loadData()">
      <input type="button"  name="key" value="Search" >
    </div>
    </br>
    </br>
    </br>
    <div id="result">
      
    </div>

  </center>

  <script type="text/javascript">
    
    function loadData(){

      var xmlHttp = new XMLHttpRequest();

      xmlHttp.open('POST', 'search.php', true);
      xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      var abc = "key="+document.getElementById('search').value;
      xmlHttp.send(abc);

      xmlHttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status==200)
        {
          
          var data = "<div style='background-color:#eee;border: 1px solid #000; width:200px'>"+this.responseText+"</div>";
          document.getElementById('result').innerHTML = data;
        }
      }

    }

    function abc(data){

      document.getElementById('search').value=data;
      document.getElementById('result').innerHTML="data";
    }

  </script>
</body>
</html>
<table style="width:600px; margin:auto; color:white;padding:5px;" border="5" bgcolor="black">
    <tr><th colspan="6"><h1>student Record</h1></th></tr>
  <tr>
  <td><h2>id</h2></td>
  <td><h2>First name</h2></td>
  <td><h2>last name</h2></td>
  <td><h2>Roll no</h2></td>
  <td><h2>Father Name</h2></td>
  <td><h2>Gender</h2></td>
</tr> 
<?php
error_reporting(0);
  session_start();
  if(isset($_SESSION['abc'])){
         $conn = mysqli_connect('', 'root', '', 'web');
         $sql = "SELECT * FROM student";
         $result = mysqli_query($conn, $sql);
         
           while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
       {   echo"<tr>";
         echo"<td>".$row[id]."</td>";
         echo"<td>".$row[Fname]."</td>";
         echo"<td>".$row[Lname]."</td>";
         echo"<td>".$row[roll]."</td>";
         echo"<td>".$row[Faname]."<td>";
         echo"<td>".$row[Gender]."</td>";
           echo"</tr>";
       }
  }else{
    header("location: Login.php");
  }


?>

</body>
</html>
<?php
include "footer.php"
?>
