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
<tr><td>Password:</td><td><input type="text" name="name"></td></tr>
<tr><td><br></td></tr><tr><td><br></td></tr>
<tr><td>New Password:</td><td><input type="text" name="mail"></td></tr>
<tr><td><br></td></tr><tr><td><br></td></tr>
<tr><td></td><td><input type="submit" name="sendmail"></td></tr>
</table>
<?php if(isset($_SESSION['reply'])){echo "<script>alert(".$_SESSION['reply'].");</script>";}?>
</form>
</div>

</body>
</html>
