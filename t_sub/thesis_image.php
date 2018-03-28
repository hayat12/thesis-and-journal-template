<?php 
session_start();
$cont = mysql_connect("localhost","root","");
$mydb = mysql_select_db("checker");
$name = $_GET['ImageName'];
$IMGusername = $_SESSION['un'];
$IMGid = "0001";
mysql_query ("INSERT INTO `thesisimage`VALUES ('','$IMGusername','$name','2')");
//echo "recored inserted !!!";
echo('hello');
//echo $name = $_GET['myfile'];
/*echo $name = $_GET["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];
if($type == "image/png")
    {
	move_uploaded_file($temp,"j_sub/".$name);
	}*/ 
?>