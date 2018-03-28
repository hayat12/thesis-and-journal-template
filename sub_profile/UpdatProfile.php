<?php
session_start();
if(isset($_SESSION['un'])){}
else{header("location:../index.php");}
include('../connect.php');
    if(isset($_POST['Update_profile'])){
			$u_name =$_POST['name'];
			$u_email = $_POST['email'];
			$u_matirc =$_POST['matric'];
			$u_course = $_POST['course'];
			$u_faculty =$_POST['faculty'];
			$u_level = $_POST['level'];
			$select =  "UPDATE register1 SET name = '".$u_name."',matric = '".$u_matirc."',email = '".$u_email."',course = '".$u_course."',faculty = '".$u_faculty."', level = '".$u_level."' WHERE user = '".$_SESSION['un']."'";
			$query1 = mysql_query($select) or die(mysql_error());
		if(!empty($query1)){
			$successM = 'Successfully Upadeted';
			header("location:../UpdateProfile.php? successM= ".$successM);
		}else{
			$failedM = 'Please try again';
			header("location:../UpdateProfile.php? failedM= ".$failedM);
		}
	}
?>