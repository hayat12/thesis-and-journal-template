<html>
<head>
<meta charset="UTF-8">
<?php include'pro.php';?>
</head>

<body>
    <div id="update" class="tabcontent">

    <form method="POST" action="sub_profile/UpdatProfile.php">

    <?php $sql2 = "select * from checker.register1 where user = '".$_SESSION['un']."'";

    $result2 = mysql_query($sql2);

    while($row1= mysql_fetch_array($result2)){
    ?>

    <table class="addmynewFile1" width="100%">
    <tr><th colspan="3"> Update Profile </th></tr>

    <tr><td>Name: </td><td> <input id="1" type="text" name="name" value="<?php echo $row1['name'];?>"></td></tr>

    <tr><td>Maric No: </td> <td> <input id="2" type="text" name="matric" value="<?php echo $row1['matric'];?>"></td></tr>

    <tr><td>Email:</td> <td> <input id="3" type="text" name="email" value="<?php echo $row1['email'];?>"></td></tr>

    <tr><td>Course: </td> <td> <input id="4" type="text" name="course" value="<?php echo $row1['course'];?>"></td></tr>

    <tr><td>Faculty:</td> <td> <input id="5" type="text" name="faculty" value="<?php echo $row1['faculty'];}?>"></td></tr>

	<tr>
		<td>Level Of Study:</td>
		<td> 
			<select id="6" name="level">
				<option value="1"> Undergraduate </option>
				<option value="2"> Postgraduate</option>
			</select>
		</td>
    </tr>
    	<tr><td colspan="2"><input id="7" type="submit" name="Update_profile" value="Update"></td
    </tr>
    <tr>
    	<td colspan="2" align="center"><label style="color: #CC5557">
    		<?php 
			if(isset($_GET['successM'])){
				echo($_GET['successM']);
			}
			else if(isset($_GET['failedM'])){
				echo($_GET['failedM']);
			}
			?>
    	</label></td>
    </tr>
    
</table>
    </form>
   
 <style>
		#update input[type = 'password']{
			width: 100%;
			padding: 1%;
			height: 100%;
		}
	 #update input[type = 'text']{
			width: 100%;
			padding: 1%;
		 height: 100%;
		}
	 #update input[type = 'email']{
			width: 100%;
			padding: 1%;
		 height: 100%;
		}
	 #update select{
			width: 100%;
			padding: 1%;
		 height: 100%;
		}
	 
	 
	</style>
	</div>
</body>
</html>