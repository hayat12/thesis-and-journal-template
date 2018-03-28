<?php 
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
include_once "../connect.php";

if(isset($_POST['addNew'])){
	$addName = $_POST['addName'];$addEmail = $_POST['addEmail'];$addAddress = $_POST['addAddress'];
    $insertNew = "INSERT INTO Journal_Author VALUES('','".$_SESSION['un']."','$addName','$addEmail','$addAddress')";
    $addedNew = mysql_query($insertNew)or die(mysql_error());
    if($addedNew){header("location:../j_cover_page.php");}
}
?>