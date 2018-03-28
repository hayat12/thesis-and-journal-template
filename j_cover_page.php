<?php
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
?>        
<html>
<body>
<link type="text/css" rel="stylesheet" href="css/file_style.css">
<link type="text/css" rel="stylesheet"  href="css/css_for_journal_delete.css">
<?php include_once 'tab.php'; include_once "connect.php";?>
<form method="POST" action="j_sub/CreateJournal.php">   
<div class="not_required" id="no_jr"> 
<img src="general/error.PNG" style="margin-left:45%; height:280px;"><br>
</div>

     <div id="journalTab" style="width:15%; margin-left:2%; margin-top:5%; position:fixed;">
   <div class="panel-group" id="accordion">
   
  <div class="panel panel-default">
  <br><strong style="margin-left:20%;">Manage Journal</strong><br><br>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Create Journal</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body"><input type="submit" name="submit" value="Creat Journal" id="creatJournal" style=" background-color:inherit"></div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Edit Journal</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"> <a href="contents.php" id="a">Edit</a></div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Manage Author</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><input type="button" onClick="addNewAutor()" value="Add New Autor" id="addNew" style=" background-color:inherit"></div>
       <div class="panel-body"><input type="button" onClick="DeleteAutor()" value="Delete Author" id="addNew" style=" background-color:inherit"></div>
    </div>
  </div>

</div>

</div> 

<div id="jcover">
<?php 
$check_level = "SELECT * FROM register1 WHERE user = '".$_SESSION['un']."'";
$quer_level = mysql_query($check_level)or die(mysql_error());
$row_level = mysql_fetch_array($quer_level);
?>
<input type="hidden" value="<?php echo $row_level['level']?>" id="lev">

<script>
var x = document.getElementById('lev').value;
if(x ==2){
document.getElementById('journalTab').hidden = false;
document.getElementById('no_jr').hidden = true;
document.getElementById('jcover').hidden = false;
}else{
  document.getElementById('no_jr').hidden = false;
  document.getElementById('journalTab').hidden = true;
}
</script>

<h2 style="margin-left:40%;">Journal Cover Page</h2>
 
  <div class="jcc" style="background-color:#CCC8C8; width:70%; padding:5%; margin-left:20%; border-radius:12px">
<table class="cover">

	<tr>
		<td>Please insert your journal titile: </td>
		<td><label> * </label></td>
		<td><input id="title" placeholder="Journal" name ="title"  required type="text"></td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td>Please insert your address:</td><td><label> * </label></td><td><input id="a_address" placeholder=" Author Address" name ="a_address" type="text"></td>
	</tr>
	<tr>
		<td><br></td>
	</tr>
	<tr>
		<td>Please insert the date:</td>
		<td><label> * </label></td>
		<td><input id="date" name="mydate" placeholder="Select Date"type="date"></td>
	</tr>
	<tr>
		<td><br></td>
	</tr>

	<tr>
		<td>Enter your Abstract here, the maximum<br> length of abstract is 250 words.</td>
	<td><label>*</label></td>
	</tr>

<tr><td><br></td></tr>

</table><br><textarea class="abs" rows="3" cols="4" style="display:inline;" name="abs" id="abs"> </textarea>
</div>
<?php
$Avcheck = "SELECT * FROM journal WHERE username = '".$_SESSION['un']."'";
$avquery = mysql_query($Avcheck);
while($avrow = mysql_fetch_array($avquery)){
$avuser = $avrow['username'];
if($avuser == $_SESSION['un']){
?>
<script>
document.getElementById('title').disabled = true;
document.getElementById('a_address').disabled = true;
document.getElementById('date').disabled = true;
document.getElementById('abs').disabled= true;
document.getElementById('addNew').disabled = false;
document.getElementById('creatJournal').disabled = true;
document.getElementById('creatJournal').value = "Already Exist";
/*document.getElementById('a').hidden = true;*/

</script>
<?php
}else if($avuser != $_SESSION['un']){
?>
<script>
document.getElementById('addNew').hidden= true;

</script>
<?php
}
}
$address10 = $_SESSION['un'];
$check_journal = "select * from journal where username = '".$address10."' limit 1";
$query22 = mysql_query($check_journal);
while($check_row = mysql_fetch_array($query22)){
$myUserName = $check_row['username'];
$_SESSION['un'] = $myUserName;
?>
<div class="created_journal"><strong>Eidt your journal</strong><a href="#"><?php echo $check_row['title'];}?></a></div>

</form>
</div>
<form method="POST" action="j_sub/Journal_NewAuthor.php">
<div class="addAutor" id="addAutor">
<table width="200" border="1">
<tr><th> <li><a href="#news">Author's name</a></th>
<th><li><a href="#news">Author's email</a></th>
<th><li><a href="#news">Author's address</a></th></tr>

<tr><td colspan="3"><br></td></tr>
<tr>
<td><li><input type="text" name="addName"></li></td>
<td><li><input type="email" name="addEmail"></li></td>
<td><li><input type="text" name="addAddress"></li></td>
</tr>
<tr><td ><br></td></tr>
<tr><td colspan="3" onClick="addNew()"> <input type="submit" name="addNew" value=""></td></tr>
</table>
</form>
</div>

<div class="DeleteAothor" hidden="true" id="deleteAuthor">
<form method="POST" action="">
<table width="100%">
<ul>
<tr><th><li><a href="#">Name</a></li></th>
  <th><li><a href="#">Email</a></li></th>
  <th><li><a href="#">Address</a></li></th>
  <th><li style="float:right"><a class="active" href="#about">Delete</a></li><br /></th></tr>
</ul>
<?php $seletAuthors = "select * from journal_author WHERE username = '".$_SESSION['un']."'";
$authorQuery = mysql_query($seletAuthors) or die();
while($authorRow = mysql_fetch_array($authorQuery)){ ?>
<input type="hidden" value="<?php echo $authorRow[0];?>" name="AuthorID">
<ul>
<tr><td><li><a href="#home"><?php echo $authorRow[2];?></a></li></td>
  <td><li><a href="#news"><?php echo $authorRow[4];?></a></li></td>
  <td><li><a href="#contact"><?php echo $authorRow[3];?></a></li></td>
  <td><li style="float:right"><a class="ddAuthor" href="j_sub/DeleteAuthor.php?id= <?php echo $authorRow[0];?>">X</a></li>
</td></tr></ul><?php }?>
</table>
<script>
function DeleteAutor(){
document.getElementById('deleteAuthor').hidden = false;
document.getElementById('jcover').hidden = true;
document.getElementById('addAutor').hidden = true;
}
document.getElementById('addAutor').hidden = true;
function addNew(){
document.getElementById('addAutor').hidden = true;
document.getElementById('deleteAuthor').hidden = true;
document.getElementById('jcover').hidden = false;
}
function addNewAutor(){
document.getElementById('jcover').hidden = true;
document.getElementById('deleteAuthor').hidden = true;
document.getElementById('addAutor').hidden = false;
}
</script>

</body>
</html>