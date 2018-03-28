<html>
<head>
<meta charset="UTF-8">
<?php include('pro.php')?>
</head>

<body>

    <div id="change_pass" class="tabcontent">
    <form method="POST" action="Files/changePass.php">
    	<table class="addmynewFile1" width="100%">
				<tr>
					<th colspan="3"> Change Password</th>
				</tr>
				<tr>
					<td>Current Password: </td> 
					<td> <input type="Password" name="password" placeholder="****"> </td>
				</tr>
				<tr>
					<td>New Password: </td> 
					<td> <input type="Password" name="n_password" placeholder="****"> </td>
				</tr>
				<tr>
					<td>Conferm Password: </td> 
					<td> <input type="Password" name="c_password" placeholder="****"> </td>
				</tr>
   
				<tr>
					<td colspan="2"><input type="submit" name="Update_password" value="Save" style="margin: 10px 0 0 10px" id="pass1"></td>
				</tr>
  	 	<tr><td colspan="2" align="center"><label style="color:#D95D5F;">
  	 		
  	 		<?php 
			if(isset($_GET['updateM'])){
						echo($_GET['updateM']);
			}
			elseif(isset($_GET['WrongCurrentM'])){
						echo($_GET['WrongCurrentM']);
			}
			elseif(isset($_GET['NotMachtchM'])){
						echo($_GET['NotMachtchM']);
			}
			elseif(isset($_GET['EmptyNewM'])){
						echo($_GET['EmptyNewM']);
			}
			?>
  	 	</label></td></tr>
   	 	</table> 
   	 </form>

    </div>
    <style>
		#chage_pass{
			font-size: 28px;
		}
		#change_pass input[type = 'password']{
			width: 100%;
			height: 100%;
			padding: 1%;
		}
	</style>
</body>
</html>