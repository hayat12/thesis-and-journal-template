<?php
session_start();
 if(isset($_SESSION['un'])){
		  }else{
		header("location:index.php");
	  }
	  include"tab.php";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thesis</title>
<link type="text/css" rel="stylesheet" href="css/UpdateThesis_CSS.css">
</head>
<h3 align="center">Upadte Cover Pages </h3>
<body>
<div class="UpdateThesisCover">
<?php 
//".$_SESSION['un']."
include_once "connect.php";
$selec = "select * from thesis where username = '".$_SESSION['un']."'";
$query = mysql_query($selec);
while($row = mysql_fetch_array($query)){

?>
<form method="POST">
<table style="width:100%;">

<br>
<script>
function mytry(){
/*	var x = document.getElementById('oo').value
	var n = document.getElementById('name').value
	if(document.getElementById('mycheck').checked){
		document.getElementById('name').value = x;
	}*/
}
</script>

<!--

<tr><td>Other Auther </td><td><input type="checkbox" id="mycheck">

<select onChange="mytry()" id="oo">
<option value=" ">Others Author</option>
<option value=" "></option>
</select></td></tr>-->


<tr><td>Username</td><td><input type="text"  name="username" readonly value=" <?php echo $row['0'];?>" id="name"></td></tr>
<tr><td>Name</td><td><input type="text" name="name" value=" <?php echo $row['1'];?>"></td></tr>
<tr><td>Matric No</td><td><input type="text" name="matric" value=" <?php echo $row['2'];?>"></td></tr>
<tr><td>Email</td><td><input type="email" name="email" value=" <?php echo $row['3'];?>"></td></tr>
<tr><td>Address</td><td><input type="text" name="address" value=" <?php echo $row['4'];?>"></td></tr>
<tr><td>Program</td><td><input type="text" name="course" value=" <?php echo $row['5'];?>"></td></tr>
<tr><td>Faculty</td><td><input type="text" name="faculty" value=" <?php echo $row['6'];?>"></td></tr>
<tr><td>Supervisor</td><td><input type="text" name="lecturer" value=" <?php echo $row['7'];?>"></td></tr>
<tr><td>Tille</td><td><input type="text" name="title" value=" <?php echo $row['8'];?>"></td></tr>
<tr><td>Acknowledgemnt</td><td><textarea name="Acknowledgemnt" rows="8" cols="84"> <?php echo $row['9'];?></textarea></td></tr>
<tr><td>Approvale</td><td><textarea name="Approvale" rows="8" cols="84"> <?php echo $row['10'];?></textarea></td></tr>
<tr><td>Thesis Submit</td><td><textarea name="ThesisSubmit" rows="8" cols="84"> <?php echo $row['11'];?></textarea></td></tr>
<tr><td>English Abstract</td><td><textarea name="EnglishAbstract" rows="8" cols="84"> <?php echo $row['12'];?></textarea></td></tr>
<tr><td>Malay Abstract</td><td><textarea name="MalayAbstract" rows="8" cols="84"> <?php echo $row['13'];?></textarea></td></tr>
<tr><td>Date</td><td><input type="date" value="<?php echo $row['14'];}?>" name="mydate"></td></tr>
<tr><td colspan="2"><input type="submit" value="Update" name="update"></td></</tr>
</table>
</form>
<?php 
if(isset($_POST['update'])){
	$name = $_POST['name'];
	$matric = $_POST['matric'];
		$email = $_POST['email'];
			$address = $_POST['address'];
			$title = $_POST['title'];
				$course = $_POST['course'];
					$faculty = $_POST['faculty'];
						$lecturer = $_POST['lecturer'];
							$Acknowledgemnt = $_POST['Acknowledgemnt'];
							$Approvale = $_POST['Approvale'];
							$ThesisSubmit = $_POST['ThesisSubmit'];
								$EnglishAbstract = $_POST['EnglishAbstract'];
									$MalayAbstract = $_POST['MalayAbstract'];
										$date = $_POST['mydate'];
										
$updateMe = "UPDATE thesis SET auto_name='$name',
matric='$matric',
email='$email',
address='$address',
course='$course',
faculty='$faculty',
lecturer='$lecturer',
title='$title',
acknowledgment='$Acknowledgemnt',
approvale='$Approvale',
thesis_submit='$ThesisSubmit',
e_ab='$EnglishAbstract',
m_ab='$MalayAbstract ',
mydate='$date'
WHERE username 
= '".$_SESSION['un']."'";
$updated = mysql_query($updateMe);
if($updated ){
	//echo "Successfully Updated !!!";
	header('refresh:0');
		
}
}
?>
</div>
</body></html>
