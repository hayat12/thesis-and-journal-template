<?php 
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:../index.php");
}
include_once "../connect.php";
if(isset($_GET['id'])){
	echo $authorID = $_GET['id'];
	$delete = "delete from  journal_author where id = '$authorID'";
	$qury = mysql_query($delete);
	if($qury ){
		header('location:../j_cover_page.php');
	}
}else{echo "not set please try again";}
?>