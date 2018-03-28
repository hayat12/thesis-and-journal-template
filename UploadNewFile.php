<html>
<head>
<meta charset="UTF-8">
<?php include('pro.php')?>
</head>

<body>
<div id="UploadNewFile" class="tabcontent">
     <?php 
			if(isset($_GET['fileupload'])){ 
					echo '<label style = "color:green;">'.$_GET['fileupload'].'</label>';
			}
			else if(isset($_GET['sms1'])){
				echo '<label style = "color:blue;">'.$_GET['sms1'].'</label>';
			}
			else if(isset($_GET['sms2'])){
					echo '<label style = "color:#C84F51;">'.$_GET['sms2'].'</label>';
			}
	else if(isset($_GET['fileisrequired'])){
					echo '<label style = "color:#C84F51;">'.$_GET['fileisrequired'].'</label>';
			}
	else if(isset($_GET['existfile'])){
					echo '<label style = "color:#C84F51;">'.$_GET['existfile'].'</label>';
			}
	 ?>
     <form method="POST" action="Files/uploadfile.php" enctype="multipart/form-data">
     <table class="addmynewFile1" width="100%">
		 <tr>
		     <th>No</th> 
			 <th>File</th> 
			 <th>Delete</th>
        </tr>

     <?php 
	 $selectfile = "select * from myfile where username = '".$_SESSION['un']."'";
	 $filequery = mysql_query($selectfile);
	 $mycount = 1;
	 while($filerow = mysql_fetch_array($filequery)){
		 $id = $filerow['id'];
	 ?>
     <tr>
    		<td><?php echo $mycount;?>:</td>
     		<td style="float: left"><a href="Files/Myfiles/<?php echo $filerow['m_file'];?>"><?php echo $filerow['m_file'];?></a></td>
     		<td><a href="Files/uploadfile.php?id=<?php echo $id;?>">X</a></td>
   			<!--<td class="deletefile"><input type="submit" name="DeleteFile" value="X">-->
   			<input type="hidden" value="<?php echo $filerow['id'];?>" name="hiddenFile"></td>
   			
     </tr><?php $mycount++;}?>
     <tr>
		 <td>
		 	<input type="file" name="myfile" style="visibility:visible; height:25px; width:56px; background-color:inherit;">
		 </td> 
     	<td colspan="2">
     		<input type="submit" name="UploadMyFile" value="Uplaod File" style="float: right">
     	</td>
     </tr>
     </table>
     </form>
    </div>
    
   <style>
	   
	   .deletefile input[type = "submit"]{
		   width: 15px;
		   background:inherit;
	   }
	   .deletefile input[type = "submit"]:hover{
		   color: red;
	   }
</style>
</body>
</html>