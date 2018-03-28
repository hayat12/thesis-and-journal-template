<?php
session_start();
include('../connect.php');
		
if(isset($_POST['save'])){		  
				$area = $_POST['myTextArea'];
				$myuser = $_SESSION['un'];
				$mydate = Date('Y-m-d h:i:sa');

				$select = "select * from journal WHERE username ='".$myuser."'  ORDER BY mydate DESC LIMIT 1";
				$result = mysql_query($select) or die(mysql_error());
				$rows_rr = mysql_fetch_array($result);
				$content = $rows_rr['content'];

				$mycontent = $content." ".$area;
			if(!empty($area)){
				$header1_update = "update journal SET content = '".$mycontent."' where username = '".$myuser."' ORDER BY mydate DESC LIMIT 1";
				$header1_update = mysql_query($header1_update);
				if($header1_update){
				header('location:../contents.php');  
			}}else{
				$sql = "INSERT INTO journal(username,title,aut_name, course, faculty, email, address, mydate, abs, content) VALUES('".$myuser."','','','','','','','$mydate','','$area')"; 
				$qury12 = mysql_query($sql) or die(mysql_error());
			if($qury12){
				header('location:../contents.php');  
			}
			}}
elseif(isset($_POST['update'])){
	
				$area = $_POST['myTextArea'];
				$myuser = $_SESSION['un'];
				$mydate = Date('Y-m-d h:i:sa');
	
				$header1_update = "update journal SET content = '".$area."' where username = '".$myuser."' ORDER BY mydate DESC LIMIT 1";
				$header1_update = mysql_query($header1_update);
				if($header1_update){
				header('location:../contents.php');  
			}
			}

else{header('location:../contents.php');}

		?>
</div>   