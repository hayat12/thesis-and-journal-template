<?php
session_start();
if(isset($_POST['submit'])){
include_once("connect.php");
$username = $_POST['user'];
$password = $_POST['pass'];
	$passwordH = md5($password);
$sql = "SELECT * FROM register1 WHERE user = '$username' AND pass = '$passwordH'";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
if ($count == 0){
$message = "wrong username or password";
$_SESSION['error']= $message;
header("location: ../Thesis/index.php? message=".$message);
}
else if ($count == 1){
$fetch = mysql_fetch_assoc($result);
$message2 = "You have Sccucessfully logged in !!!";
$_SESSION["un"] = $fetch['user'];
header("location: MyProfile.php? message2= ".$message2);
}

}
?>

