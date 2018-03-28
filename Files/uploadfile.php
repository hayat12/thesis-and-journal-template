<?php
session_start();
include '../connect.php';

if(isset($_SESSION['un'])){}else{header("location:../index.php");}
if(isset($_POST['UploadMyFile']) AND !empty($_FILES['myfile']["name"])){
	
	if(file_exists("Myfiles/".$_FILES['myfile']["name"])){
		$exsitfile = "This file is already exist please delete the current file to replace the new file";
		header("location:../UploadNewFile.php? existfile= ".$exsitfile);
	}else{
		
$myuser = $_SESSION['un'];
 $name = $_FILES['myfile']["name"];
 $type = $_FILES["myfile"]["type"];
 $size = $_FILES["myfile"]["size"];
 $temp = $_FILES["myfile"]["tmp_name"];
 $error = $_FILES["myfile"]["error"];
	move_uploaded_file($temp,"Myfiles/".$name);
	$insert_file = "INSERT INTO myfile VALUES ('','$myuser','$name')";
    $file_query = mysql_query($insert_file)or die(mysql_error());
	if($file_query){
		$respondfile = "Sccessfully Uploaded";
		$_SESSION['fileupload'] = $respondfile;
		header("location:../UploadNewFile.php? fileupload= ".$respondfile);
	}
}}
else if(isset($_GET['id'])){
	echo $id = $_GET['id'];
	$sms1 = "One item has deleted";
	$sms2 = "please try again";
	//$fileID = $_POST['hiddenFile'];
	$select = "SELECT * FROM myfile WHERE id = '$id'";
	$query = mysql_query($select);
	while($row = mysql_fetch_array($query)){
		 $fileName= $row["m_file"];
	if($fileName){
   $myunlinke = unlink("Myfiles/$fileName");
   if($myunlinke){
	   $deletefile = "DELETE FROM myfile WHERE id = '$id'";
	   $deletequery = mysql_query($deletefile );
	   if($deletequery){header("location:../UploadNewFile.php? sms1= ".$sms1);
					   }
	   }else {header("location:../UploadNewFile.php? sms2= ".$sms2);
			 }}
  }
}else{
	$fileisrequired = "Please Upload the file ";
	header("location:../UploadNewFile.php? fileisrequired= ".$fileisrequired);
}
		
	

?>
<!--AND isset($_POST['DeleteFile'])-->