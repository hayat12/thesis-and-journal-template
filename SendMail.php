<?php
session_start();
include"connect.php";
if(isset($_POST['sendmail'])){
	$selectUser = "SELECT * FROM register1";
	$query = mysql_query($selectUser)or die(mysql_error());
	while($row = mysql_fetch_row($query)){
		echo $row['user'];
		if($_POST['username'] ==1){
			$notexist = "This user is not exit your please try again";
			header("location:ForgetPP.php? notexist= ".$notexist);
			} else{
				echo "exist";
	echo $message = 'Name: ' .$_POST['name']."<br>"
	               .'Email:' .$_POST['mail']."<br>"
			       .'Comment: '.$_POST['comment'];
				 $mail = mail('rahnamoonhayatullah@gmail.com','Just a simple contant',$message);
			if($mail){
					   $reply ="Your request Successfully sent";
					   header("location:ForgetPP.php? reply =".$reply);
					   }
	}}}
	else{header("location:index.php");}

?>