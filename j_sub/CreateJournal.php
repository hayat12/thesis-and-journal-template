<?php
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
include_once "../connect.php";

if(isset($_POST['submit'])){			  
  $sql = "select * from checker.register1 where user = '".$_SESSION['un']."'";
	$result = mysql_query($sql);
	while($myrow = mysql_fetch_array($result)){
		$title = $_POST['title'];
		$address2 = $myrow['name'];
		$address3 = $myrow['email'];
		$address4 = $myrow['faculty'];
		$address5 = $myrow['course'];
		//$address6 = $_POST['l_name'];
		$address7 = $_POST['a_address'];
		$address8 = $_POST['mydate'];
		$address9 = $_POST['abs'];
		$address10 = $_SESSION['un'];
		$_SESSION['tit']=$title ; 
		$select = "select * from journal";
		$result = mysql_query($select) or die(mysql_error());
		$rows = mysql_fetch_array($result);   
		$sql = "INSERT INTO journal (username,title,aut_name, course, faculty, email, address, mydate, abs, content)	VALUES('".$address10."','".$title."','".$address2."','".$address5."','".$address4."','".$address3."','".$address7."','".$address8."','".$address9."','')"; 
		$qury = mysql_query($sql,$con) or die(mysql_error());
if($qury){header("location:../j_cover_page.php");
}}}