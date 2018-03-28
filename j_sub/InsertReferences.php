<?php
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:../index.php");
}
include_once "../connect.php";

$name = $_GET['a_name'];
$a_address = $_GET['a_address'];
$ornanization = $_GET['organization'];
$email = $_GET['email'];
$link = $_GET['linke'];
$mydate = $_GET['mydate'];
$no = 1;
$total += $no;
$style = $_GET['style'];
$username = $_GET['username'];
$name = $_GET['a_name'];
$city = $_GET['a_address'];
mysql_query ("INSERT INTO j_reference VALUES ('','$username', '$name','$a_address','$ornanization','$email','$link','$mydate',$total,'$style')");
echo "recored inserted !!!";
echo $_SESSION['MyjournalSession'];

?>