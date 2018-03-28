<?php
session_start();
include('../connect.php');
		  $con = mysql_connect('localhost','root' , '') or die("Not connected");
		  $select_db = mysql_select_db('checker',$con)or die("Database does Not selected");
			   
		  if(isset($_POST['save'])){  
	        $header1 = $_POST['check_header'];
			$header = $_POST['header'];
			$chapter = $_POST['chepter'];
			$area = $_POST['myTextArea'];
			$myuser = $_SESSION['un'];
			//$title = $_SESSION['tit'];
			/*
			$select = "SELECT * FROM thesis_body1 where username = '$myuser' ORDER BY header1 DESC limit 1";
		  $result = mysql_query($select) or die(mysql_error());
		  while($rowHeader = mysql_fetch_array($result)){
			  $myheader1 = $rowHeader['header1']; 
			  $myheader2 = $rowHeader['header2']; 
			  $myheader3 = $rowHeader['header3'];
			  $mycontent = $rowHeader['content'];
			  $totalContent = $mycontent.'<br>'.$area;
			   echo('<h1>hayat</h1>');
			  
			if($_POST['check_header'] =='1'){
				
		  $sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','$chapter','$header',NULL,NULL,'$area')"; 
		  $qury = mysql_query($sql,$con) or die(mysql_error()); 
				if($qury){echo('yes');}
			}
			else if($_POST['check_header'] =='2'){
				 $sql = "INSERT INTO thesis_body1(username, chapter, header1, header2, header3, content) VALUES('".$myuser."','".$title."','$chapter','','$header','','$area')";  
		  $qury = mysql_query($sql,$con) or die(mysql_error());
		  }else if($_POST['check_header'] =='3'){
				 $sql = "INSERT INTO thesis_body1(username, chapter, header1, header2, header3, content) VALUES('".$myuser."','".$title."','$chapter','','','$header','$area')"; 
		    mysql_query($sql,$con) or die(mysql_error());
		  }
		  else if(!empty($myheader1) AND empty($chapter)){
			  if(!empty($myheader1)){
				  $SQ1 = "Update thesis_body1 SET content ='$totalContent' where header1 = '$myheader1' AND username = '$myuser'"; 
		   mysql_query($SQ1,$con) or die(mysql_error());
			  }else if(!empty($myheader2)){
				  $sqlQ2 = "Update thesis_body1 SET content ='$totalContent' where header2 = '$myheader2' AND username = '$myuser'"; 
		   mysql_query($sqlQ2,$con) or die(mysql_error());
			  }
			  else if(!empty($myheader3)){
				  $sqlQ3 = "Update thesis_body1 SET content ='$totalContent' where header3 = '$myheader3' AND username = '$myuser'"; 
		  $qury = mysql_query($sqlQ3,$con) or die(mysql_error());
			  }
		  }}}
		  
		if(isset($_POST['update'])){
			$hdr1 = $_POST['hdr1'];
				$hd2 = $_POST['hdr2'];
					$hd3 = $_POST['hdr3'];

			$area = $_POST['myTextArea'];
			$myuser = $_SESSION['un'];
			$title = $_SESSION['tit'];
			if(!empty($header1)){
			$updateMe1 = "UPDATE thesis_body SET contetent = '$area' where  header1 = '$hdr1' AND username = '$myuser'";
			mysql_query($updateMe1);
		}
		else if(!empty($header2)){
			$updateMe2 = "UPDATE thesis_body SET contetent = '$area' where  header2 = '$hdr2' AND username = '$myuser'";
			mysql_query($updateMe2);
		} 
		else if(!empty($header3)){
			$updateMe3 = "UPDATE thesis_body SET contetent = '$area' where  header3 = '$hdr3' AND username = '$myuser'";
			mysql_query($updateMe3);
		}*/
			  
	if($header1 =='1' AND $chapter !=NULL AND $header !=NULL){
		  $sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','$chapter','$header',NULL,NULL,'$area')"; 
		  $qury = mysql_query($sql,$con) or die(mysql_error()); 
		  if($qury){
			  header('location:../thesis_contents.php');
				   }
	}
			  
	else if($header1 =='2' AND $chapter !=NULL AND $header !=NULL){
		$sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','$chapter',NULL,'$header',NULL,'$area')"; 
		$qury = mysql_query($sql,$con) or die(mysql_error()); 
		if($qury){
			header('location:../thesis_contents.php');
				 }
	}
			  
    else if($header1 =='3' AND $chapter !=NULL AND $header !=NULL){
		$sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','$chapter',NULL,NULL,'$header','$area')"; 
		$qury = mysql_query($sql,$con) or die(mysql_error()); 
		if($qury){
			header('location:../thesis_contents.php');
		}
	}else if($chapter ==NULL AND $header ==NULL){
		
		$select = "SELECT * FROM thesis_body1 where username = '$myuser' ORDER BY header1 DESC limit 1";
		  $result = mysql_query($select) or die(mysql_error());
		  while($rowHeader = mysql_fetch_array($result)){
			  $myheader1 = $rowHeader['header1']; 
			  $myheader2 = $rowHeader['header2']; 
			  $myheader3 = $rowHeader['header3'];
			  $mycontent = $rowHeader['content'];
			  $totalContent = $mycontent.'<br>'.$area;
			  
			  $sqlQ2 = "Update thesis_body1 SET content ='$totalContent' where username = '$myuser' ORDER BY id DESC limit 1"; 
		   $qryupdate = mysql_query($sqlQ2,$con) or die(mysql_error());
			  if($qryupdate){
				  header('location:../thesis_contents.php');
			  }
		  }}
	
		else if($header1 =='1' AND $chapter ==NULL AND $header !=NULL){
				$sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','NULL','$header',NULL,NULL,'$area')"; 
				$qury = mysql_query($sql,$con) or die(mysql_error()); 
				if($qury){
					header('location:../thesis_contents.php');
				}
	    }
		else if($header1 =='2' AND $chapter ==NULL AND $header !=NULL){
				$sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','NULL',NULL,'$header',NULL,'$area')"; 
				$qury = mysql_query($sql,$con) or die(mysql_error()); 
				if($qury){
					header('location:../thesis_contents.php');
				}
		}		  
		else if($header1 =='3' AND $chapter ==NULL AND $header !=NULL){
					$sql = "INSERT INTO thesis_body1 VALUES('','$myuser','','NULL',NULL,NULL,'$header','$area')"; 
					$qury = mysql_query($sql,$con) or die(mysql_error()); 
					if($qury){echo('h3');}
		}else if($area ==NULL AND $chapter ==NULL AND $header ==NULL){
					header('location:../thesis_contents.php');
		}		  
		}else if(isset($_POST['update'])){
			  $area = $_POST['myTextArea'];
			$myuser = $_SESSION['un'];
			  
			  $update_C = "update thesis_body1 set contents ='".$area."' where id = '".$id."'";
			  $qury = mysql_query($update_C);
			  if($qury){header('location:../thesis_contents.php');}
		  }
		  ?>