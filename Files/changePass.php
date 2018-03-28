<?php
session_start();
if($_SESSION['un']){}
else{header('location:../index.php');}
include("../connect.php");

			if(isset($_POST['Update_password']) AND !empty($_POST['n_password']) AND !empty($_POST['n_password'])){
					echo $mypass = $_POST['password'];
					echo $new_pass = $_POST['n_password'];
				    echo $confer_pass = $_POST['c_password'];
				if($new_pass ==$confer_pass){
					$checkpass = "SELECT * FROM register1 where user = '".$_SESSION['un']."'";
					//$fetch_row = mysql_fetch_row($checkpass);
					$qpass = mysql_query($checkpass)or die(mysql_error());
				while($qr = mysql_fetch_array($qpass)){
					echo $pass = $qr['pass'];
			if($mypass == $pass){
			
					$select =  "UPDATE register1 SET pass = '".$new_pass."', re_pass = '".$new_pass."' WHERE user = '".$_SESSION['un']."'";
					$query1 = mysql_query($select) or die(mysql_error());
			if(!empty($query1)){
				$updateM = 'Successfully Updated';
			 	header('location:../ChangePassword.php? updateM='.$updateM);
				}				
    			}else{
					 $WrongCurrentM = 'your current password is wrong';
			 		 header('location:../ChangePassword.php? WrongCurrentM='.$WrongCurrentM);
				}}				
				}else{echo('your Password does not matched');
					$NotMachtchM = 'your Password does not matched';			
			 	header('location:../ChangePassword.php? NotMachtchM='.$NotMachtchM);					 
			    }
				}else{
					$EmptyNewM = 'New password is required';
					header('location:../ChangePassword.php? EmptyNewM='.$EmptyNewM); 
				}




