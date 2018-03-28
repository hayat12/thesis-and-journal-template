<?php session_start();
include"NewTab.html";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Forget Password</title>
<style>
body{
	background-color:#8EC8B1	
	}
.myforget{
	padding:8%;
	margin-left:25%;
	}
	.myforget input[type = "text"],input[type = "email"],input[type = "submit"],textarea{
		width:140%;
		height:180%;
		padding:2%;
		}
</style>
</head>

<body>
<div class="myforget">
<form method="POST" action="SendMail.php">
	<table>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="mail" required placeholder="Email"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr><tr>
			<td><br></td>
		</tr>
		<tr>
			<td>Username: </td><td><input type="text" name="username" required placeholder="Username"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="sendmail"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
	</table>
<br>
<p style="color:blue; margin-left:7%;">

   <?php 
		if(isset($_SESSION['reply'])){
			echo $_SESSION['notexist'];
		}
		else if(isset($_GET['notexist'])){
		echo($_GET['notexist']);
   		}
	
	?></p>


</form>
</div>
</body>
</html>
