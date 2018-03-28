<?php
session_start();
if(isset($_SESSION['un'])){}
else{header("location:../index.php");}
include"../connect.php";
if(isset($_GET['id'])){
include"tab.php";
?>

<html>
<link rel="stylesheet" href="../css/index_js&css/index_css.css">
<link rel="stylesheet" href="../css/thesis_body_css.css">
  <script src="../css/index_js&css/js1.js"></script>
  <script src="../css/index_js&css/js2.js"></script>
  
  <?php 
	 $id = $_GET['id'];
	
	if(isset($_SESSION['delete_successed'])){echo $_SESSION['delete_successed'];}
	
	$selectRF = "SELECT * FROM thesis_reference WHERE id = '".$id."'";
	$query = mysql_query($selectRF)or die(mysql_error());
	$row = mysql_fetch_array($query);
		echo $row[5];
  ?>
  
<body>
    <div class="edit">
    <h3 align="center">Update Reference</h3>
    <form method="POST" action="Delete_Reference.php">
    <table>
    <input type="hidden" value="<?php echo $row[0];?>" name="idR">
    <tr> <td>Author Name:</td><td>*</td><td> <input type="text" name="a_name" value="<?php echo $row[2];?>"></td> </tr><br>
<tr><td><br></td></tr>
<tr><td>Author Address</td><td>*</td><td><input type="text" name="a_address" value="<?php echo $row[4];?>"></td></tr>
<tr><td><br></td></tr>
<tr><td>Organization</td><td>*</td><td><input type="text" name="organization" value="<?php echo $row[3];?>"></td></tr>
<tr><td><br></td></tr>
<tr><td>Linke</td> <td>*</td> <td><input type="text" name="link" placeholder="https://" value="<?php echo $row[5];?>"></td></tr>
<input type="hidden" value="<?php echo $_SESSION['un'];?>" name="username">

<tr><td><br></td></tr>
<input type="hidden" name="reference">

<tr><td><br></td></tr>
<tr><td>Date: </td><td>*</td><td><input type="date" name="mydate" value="<?php echo $row[6];?>"></td></tr>


<tr><td><br></td></tr>
<tr>
<td><br></td>
<td><br></td>
<td><input type="submit" name="UpdateR" value="Upate" style="width:110%;"></td>
<td><input type="submit" name="DeleteR" value="Delete"  style="width:300%;"></td>
<td></td>
</tr>
<tr>

    </table>
    </form>
    </div>

<?php }else{header("location:../t_sub/thesis_view.php");
		   }?>
</body></html>