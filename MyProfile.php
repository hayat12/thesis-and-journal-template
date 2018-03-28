
<html>
<head>
<meta charset="UTF-8">
<?php include('pro.php')?>
</head>

<body>
<div id="profile" class="tabcontent">
   
   <?php 
	if(isset($_GET['message2'])){
		?>
	<script>
		alert('<?php echo $_GET['message2']?>');
    </script>
		<?php }?>
   
    <table class="addmynewFile1" width="100%">
    <?php $sql = "select * from checker.register1 where user = '".$_SESSION['un']."'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){?>
    <tr><th colspan="3" align="center">  Profile Details </th></tr>
    <tr><td>Name: </td><td><?php echo $row['name'];?></td></tr>
    <tr><td>Maric No: </td> <td><?php echo $row['matric'];?></td></tr>
    <tr><td>Email:</td> <td><?php echo $row['email'];?></td></tr>
    <tr><td>Course: </td> <td><?php echo $row['course'];?></td></tr>
    <tr><td>Faculty: </td> <td><?php echo $row['faculty'];?></td></tr>
    <tr><td>Level of Studey: </td> <td><?php $t = $row['level'];
    if($t ==1){
    echo "Undergradute";
    }else{
    echo "Postgradute";
    }
    ?></td></tr>
    
    <tr><td>Username: </td> <td><?php echo $row['user'];}?></td></tr>
    
    </table>
    </div>

</body>
</html>