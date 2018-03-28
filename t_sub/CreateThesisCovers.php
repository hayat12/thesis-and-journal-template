<?php 
session_start();
if(isset($_SESSION['un'])){
		  }else{
			  header("location:../index.php");
		  }
include "../connect.php";
/*===================1====================*/
if(isset($_POST['hard_cover'])){
		$myuser = $_SESSION['un'];
		$course = $_POST['course'];
		$title = $_POST['title'];
		$faculty = $_POST['faculty'];
		$author_name = $_POST['a_name'];
		$lecturer = $_POST['l_name'];
		$date = $_POST['date'];
		$chck = "SELECT * FROM thesis WHERE username = '".$myuser."'";
		$chckquery = mysql_query($chck) or die(mysql_error());
		$chckrow = mysql_fetch_array($chckquery);
		if($chckrow['username'] == $_SESSION['un']){
			
		}else{
        $sql = "INSERT INTO thesis(username,auto_name,matric,email,address, course, faculty, lecturer,title, acknowledgment, approvale, thesis_submit, e_ab, m_ab, mydate) VALUES('".$myuser."','$author_name','','','','$course','$faculty','$lecturer','$title','','','','','','')"; 
		  $qury = mysql_query($sql,$con) or die(mysql_error());

		 $_SESSION['tit']=$title; 
		 
		 header('location:../thesis_cover.php');
		}}


?>