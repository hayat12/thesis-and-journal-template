<html>
<head>
<meta charset="UTF-8">
<?php include('pro.php')?>
</head>

<body>

<div id="hayat" class="tabcontent">

 <div class="sub_b">

   <form method="POST" action="Files/Print_DownloadMyData.php" onClick="return confirm('continue !!!')">
		<table>
			   <tr>
					<td>  <input type="submit" value="Print/Download" name="printme" onclick="myFunction()"></td>
					<td><input type="submit" value="Delete" name="delete"></td>
			   </tr>
		</table>
    
 </div>

<div class="checkbox1">

    	<table class="addmynewFile1" width="100%">
   			
    			<tr>
    				<th colspan="4">Thesis</th>

					<?php
						$sql_thesis = "SELECT * FROM  thesis WHERE username = '".$_SESSION['un']."'";
						$query_thesis = mysql_query($sql_thesis);
						while($thesis_row = mysql_fetch_array($query_thesis)){
					?>
    			</tr>
				<tr>
					<td><input type="hidden" name="id1" value="<?php echo $thesis_row['title'];?>"></td>
					<td><input type="checkbox" name="checkbox1"></td>
					<td><?php echo $thesis_row['title'];}?></td>
				</tr>

    	</table>

    <hr>

 <div id="jur">

    	<table class="addmynewFile1" width="100%">
   					 <tr>
						  <th colspan="3">Journal</th>
					</tr>
			<?php

				$sql_journal = "SELECT * FROM  journal WHERE username = '".$_SESSION['un']."'";
				$query_journal = mysql_query($sql_journal);
				while($journal_row = mysql_fetch_array($query_journal)){
			?>      
					 <tr>
						<td><input type="hidden" name="id2" value="<?php echo $journal_row['title'];?>"></td>
						<td><input type="checkbox" name="checkbox2"></td>
    					<td><?php echo $journal_row['title'];}?></td>
					 </tr>
					 <?php if(isset($_GET['checkSMS'])){
	?>
					 <tr>
						<td colspan="3"><label style="color: #AF4446">  <?php echo($_GET['checkSMS']);?> </label></td>
					 </tr>
  					<?php }?>
  					 
   					 </table>
    </form>
   

    </div>

    </div>
</body>
</html>