<?php
session_start();
if(isset($_SESSION['un'])){}
else{header("location:../index.php");}
include "../connect.php";


if(isset($_POST['DeleteR'])){
	//header("location:../t_sub/thesis_view.php");
	echo $id = $_POST['idR'];
	//echo $username = $_POST['username'];

$delete = "DELETE FROM thesis_reference WHERE id = ".$id."";
$mydelete = mysql_query($delete) or die(mysql_error());
if($mydelete){
	/*$deleteSuccess = "Successfully Deleted !!!";
	$_SESSION['delete_successed'] = $deleteSuccess;*/
	header("location:../t_sub/thesis_view.php");
    
}else{
	$deleteDeny= "Please try again !!!";
}}

else if(isset($_POST['UpdateR'])){
	
		echo $id = $_POST['idR'];
	echo $username = $_POST['username'];
	echo $name= $_POST['a_name'];
	echo $organization = $_POST['a_address'];
	echo $address = $_POST['organization'];
	echo $link= $_POST['link'];
	echo $style = $_POST['reference'];
	echo $date = $_POST['mydate'];
	
$delete = "Update thesis_reference SET name = '$name', myorg = '$organization', address = '$address', link = '$link', style = '$style', mydate = '$date' where id = ".$id."";
$mydelete = mysql_query($delete) or die(mysql_error());
if($mydelete){
	header("location:../t_sub/thesis_view.php");
    $deleteSuccess = "Successfully Deleted !!!";
}else {
	$deleteDeny= "Please try again !!!";
}
}
?>