<?php 
if(isset($_REQUEST))
{
include_once "connect.php";
$title=$_POST['title'];
$sql="INSERT INTO `checker`.`img_title` (`title`) VALUES ('$title');";
$result=mysql_query($sql);
}