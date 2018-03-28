<?php
session_start();
if(isset($_SESSION['un'])){
	session_destroy();
session_unset();
unset($_SESSION["un"]);
$_SESSION = array();
}
?>
<html>
    <head>
        <title> Thesis</title>
        <?php include "NewTab.html"?>
    </head>
     <body background="general/logpic.jpg">
    <link type="text/css" rel="stylesheet" href="css/home_style.css">

<link rel="stylesheet" href="login/css/style.css"> 
  <div class="cont" style="margin-left:5%;">

    <div class="login" style="padding:2%;float: left;">
      <form method="POST" action="Profileimg/register.php">
       <table>     
        <!--<div class="img"><label><input type="file" name="myfile"></label></div>--><br><br>

         <tr><td>Name: </td><td><input type="text" name="name" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Email: </td><td><input type="email" name="email" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Matric No: </td><td><input type="text" name="matric" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Program: </td><td><input type="text" name="course" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Faculty: </td><td><input type="text" name="faculty" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Level Of Study:</td><td><select name="level">
         <option value="0">Select</option>
         <option value="1">Undergraduate</option>
         <option value="1">Postgraduate</option>
         </select></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Username: </td><td><input type="text" name="user" required></td></tr>
         <tr><td><br></td></tr>
         <tr><td>Password: </td><td><input type="password" name="pass"></td></tr>
          <tr><td><br></td></tr>
         <tr><td>Confirm Password: </td><td><input type="password" name="re_pass"></td></tr>
         <tr><td><br></td></tr>
          <tr><td></td><td><input type="submit"  value="Register" name="submit"></td></tr> 
          <tr><td><br></td></tr>
          <tr><td colspan="2"><label style="color: #AD5254">
          	<?php
			  if(isset($_GET['exsituser'])){
				  echo($_GET['exsituser']);
			  }else if(isset($_GET['notmatchtedpass'])){
				  echo($_GET['notmatchtedpass']);
			  }
			   else if(isset($_GET['success'])){
				  echo($_GET['success']);
			  }
			  ?>
          </label></td></tr>
</table>
      </form>
  </div>
</div>
    <script src="login/js/index.js"></script>
    


     <div class="register">
   
            </div>
    </body>
</html>