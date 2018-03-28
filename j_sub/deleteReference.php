<?php 
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
include_once "../connect.php";
$id = $_GET['id'];
$delect = mysql_query("select from j_reference where id = ".$id."") or die(mysql_error());
?>