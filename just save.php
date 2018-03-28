<div id="profile" class="tabcontent">
    <table>
    <?php $sql = "select * from checker.register1 where user = '".$_SESSION['un']."'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){?>
    <tr><th colspan="3">  Profile Details </th></tr>
    <tr><td>Name: </td><td><?php echo $row['name'];?></td></tr>
    <tr><td>Maric No: </td> <td><?php echo $row['matric'];?></td></tr>
    <tr><td>Email:</td> <td><?php echo $row['email'];?></td></tr>
    <tr><td>Course: </td> <td><?php echo $row['course'];?></td></tr>
    <tr><td>Faculty: </td> <td><?php echo $row['faculty'];?></td></tr>
    <tr><td>Level of Studey: </td> <td><?php $t = $row['level'];
    if($t ==1){
    echo "Undergradute";
    }else{
    echo "Postgradute";}
    ?></td></tr>
    
    <tr><td>Username: </td> <td><?php echo $row['user'];}?></td></tr>
   
    </table>
    </div>
<!--======================Upload File=====================================-->

     <div id="UploadNewFile" class="tabcontent">
     <?php if(isset($_SESSION['fileupload'])){ echo $_SESSION['fileupload'];}?>
     <form method="POST" action="Files/uploadfile.php" enctype="multipart/form-data">
     <table class="addmynewFile">
     <tr><ul> <th><li>File</li></th> <th><li>Uplaod</li></th></ul></tr>
     <tr><td><br></td><td><br></td></tr>
     <tr><td><br></td><td><br></td></tr>
     <?php 
	 $selectfile = "select * from myfile where username = '".$_SESSION['un']."'";
	 $filequery = mysql_query($selectfile);
	 $mycount = 1;
	 while($filerow = mysql_fetch_array($filequery)){
	 ?>
    
     <tr><td><?php echo $mycount;?>:<input type="submit" name="DeleteFile" value="Delete"> 
     <input type="hidden" value="<?php echo $filerow['id'];?>" name="hiddenFile">
     </td><td><a href="Files/Myfiles/<?php echo $filerow['m_file'];?>"><?php echo $filerow['m_file'];?></a></td></tr>
      <tr><td><hr></td><td><hr></td></tr><?php $mycount++;}?>
     <tr><td><input type="file" name="myfile" style="visibility:visible; height:25px; width:56px; background-color:inherit;"></td> 
     <td><input type="submit" name="UploadMyFile"> 
     </td></tr>
     </table>
     </form>
    </div>
    

    
    <!--=============================Update Profile====================================-->
    <div id="update" class="tabcontent">
    <form method="POST">
    <?php $sql2 = "select * from checker.register1 where user = '".$_SESSION['un']."'";
    $result2 = mysql_query($sql2);
    while($row1= mysql_fetch_array($result2)){
    ?>
    <table><br>
    <input type="button" onClick="func()" value="Edit" style="background-color:inherit; border:1px solid gray; margin-left:30%;">
    <br><br>
    <tr><th colspan="3"> Update Profile </th></tr>
    <tr><td>Name: </td><td> <input id="1" type="text" name="name" value="<?php echo $row1['name'];?>"></td></tr>
    <tr><td>Maric No: </td> <td> <input id="2" type="text" name="matric" value="<?php echo $row1['matric'];?>"></td></tr>
    <tr><td>Email:</td> <td> <input id="3" type="text" name="email" value="<?php echo $row1['email'];?>"></td></tr>
    <tr><td>Course: </td> <td> <input id="4" type="text" name="course" value="<?php echo $row1['course'];?>"></td></tr>
    <tr><td>Faculty:</td> <td> <input id="5" type="text" name="faculty" value="<?php echo $row1['faculty'];}?>"></td></tr>
    <tr><td>Level Of Study:</td> <td> <select id="6" name="level">
    <option value="1"> Undergraduate </option>
    <option value="2"> Postgraduate</option>
    </select></td></tr>
    </table>
    <input id="7" type="submit" name="Update_profile" value="Save" style="margin: 10px 0 0 10px">
    </form>
    <script>
    document.getElementById('1').disabled = true;
    document.getElementById('2').disabled = true;
    document.getElementById('3').disabled = true;
    document.getElementById('4').disabled = true;
    document.getElementById('5').disabled = true;
    document.getElementById('6').disabled = true;
    document.getElementById('7').disabled = true;
    
    function func(){
    document.getElementById('1').disabled = false;
    document.getElementById('2').disabled = false; 
    document.getElementById('3').disabled = false; 
    document.getElementById('4').disabled = false; 
    document.getElementById('5').disabled = false; 
    document.getElementById('6').disabled = false;
    document.getElementById('7').disabled = false;
    
    }
    </script>
    <?php 
    if(isset($_POST['Update_profile'])){
    $u_name =$_POST['name'];
    $u_email = $_POST['email'];
    $u_matirc =$_POST['matric'];
    $u_course = $_POST['course'];
    $u_faculty =$_POST['faculty'];
    $u_level = $_POST['level'];
    $select =  "UPDATE register1 SET name = '".$u_name."',matric = '".$u_matirc."',email = '".$u_email."',course = '".$u_course."',faculty = '".$u_faculty."', level = '".$u_level."' WHERE user = '".$_SESSION['un']."'";
    $query1 = mysql_query($select) or die(mysql_error());
    if(!empty($query1)){
    header("refresh:0");
    }else{
    ?>
    <script>alert("Your password did not matched Please try again with differnt password")</script>
    <?php	
    }}?>
    </div>
    
 <div id="change_pass" class="tabcontent">
 <form>
    <table>
    		<tr>
    			<th colspan="3"> Change Password</th>
    		</tr>
    			<input type="button" style="background-color:inherit" value="Edit"><br>
    		<tr>
    			<td>Current Password: </td> 
    			<td> <input type="text" name="password"> </td>
    		</tr>
    		<tr>
    			<td>New Password: </td> 
    			<td> <input type="text" name="n_password"> </td>
    		</tr>
    		<tr>
    			<td>Conferm Password: </td> 
    			<td> <input type="text" name="n_password"> </td>
    		</tr>
    </table>
    			<input type="submit" name="Update_password" value="Save" style="margin: 10px 0 0 10px">
 </form>
    <?php
    	if(isset($_POST['Update_password'])){
    		$checkpass = "SELECT * FROM register1 where user = '".$_SESSION['un']."'";
    		$qpass = mysql_query($checkpass);
    while($qr = mysql_fetch_array($qpass)){
    		$mypass = $qpass['pass'];
    		$pass =$_POST['pass'];
    		$new_pass = $_POST['new_pass'];
			$confer_pass = $_POST['conferm'];
    	if($mypass == $pass){
    
			$select =  "UPDATE register1 SET name = '".$u_name."', email = '".$u_email."' WHERE user = '".$_SESSION['un']."'";
    		$query1 = mysql_query($select) or die(mysql_error());
    	if(!empty($query1)){
    ?>
    		<script>alert("Seccessefully Updated")</script>';
    <?php
			header("refresh:0");
    }}	else{
    ?>
    
    		<script>alert("Your password did not matched Please try again with differnt password")</script>
    
    <?php	
    }}}
    ?>
 </div>
    
 <div id="hayat" class="tabcontent">
    <div class="sub_b">
    <form method="POST" action="" onClick="return confirm('continue !!!')">
    <table>
    <tr>
    <td>  <input type="submit" value="Print" name="print" onclick="myFunction()"></td>
    <td>  <input type="submit" value="Download" name="download"></td>
    <td><input type="submit" value="Delete" name="delete"></td>
    </tr>
    </table>
    </div>
    <div class="checkbox1">
    <table class="thesis">
    <tr>
    <th colspan="4">Thesis</th>
    <?php
    
    $sql_thesis = "SELECT * FROM  thesis WHERE username = '".$_SESSION['un']."'";
    $query_thesis = mysql_query($sql_thesis);
    $thesis_row = mysql_fetch_array($query_thesis);
    ?>
    </tr>
    <tr><td>
    <input type="hidden" name="id1" value="<?php echo $thesis_row['title'];?>"></td>
    <td><input type="checkbox" name="checkbox1"></td>
    <td><?php echo $thesis_row['title'];?></td>
    </tr>
    </table>
    <hr>
    <div id="jur">
    <table class="thesis">
    
    <tr>
    <th colspan="3">Journal</th>
    <?php
    $sql_journal = "SELECT * FROM  journal WHERE username = '".$_SESSION['un']."'";
    $query_journal = mysql_query($sql_journal);
    $journal_row = mysql_fetch_array($query_journal);
    ?>      
    </tr>
    <tr>
    <td><input type="hidden" name="id2" value="<?php echo $journal_row['title'];?>"></td>
    <td><input type="checkbox" name="checkbox2">
    </td>
    <td><?php echo $journal_row['title'];?></td>
    </tr>
    </form>
    
    <script>
    function myFunction(){
    var check2 = document.getElementById('checkbox2').value;
    if(document.getElementById('checkbox2').checked){
    var printContents = document.getElementById('all').innerHTML;
    var originalContents = document.body.innerHTML;
    
    document.body.innerHTML = printContents;
    
    window.print();
    
    document.body.innerHTML = originalContents;
    }}
    
    </script>
    
    </table>
    <?php 
    if(isset($_POST['delete']) AND isset($_POST['checkbox2'])){
		 header("refresh:0");
    $delete2 = "DELETE FROM journal WHERE username = '".$_SESSION['un']."'";
    $jqd =mysql_query($delete2) or die(mysql_error());
     header("refresh:0");
    }
    if(isset($_POST['delete']) AND isset($_POST['checkbox1'])){
		
    $delete2 = "DELETE FROM thesis WHERE username = '".$_SESSION['un']."'";
    $jqd =mysql_query($delete2) or die(mysql_error());
    $delete3 = "DELETE FROM thesis_body1 WHERE username = '".$_SESSION['un']."'";
    mysql_query($delete3) or die(mysql_error());
    
    $delete3 = "DELETE FROM thesis_reference WHERE username = '".$_SESSION['un']."'";
    mysql_query($delete3) or die(mysql_error());
     header("refresh:0");
    }
    ?>
    </div>
    </div>
    <script>
    var p = document.getElementById('profile').hidden = false;
    var u = document.getElementById('update').hidden = true;
    var c = document.getElementById('change_pass').hidden = true;
    var h = document.getElementById('hayat').hidden = true;
	 document.getElementById('UploadNewFile').hidden = true;
    function openCity5(){
    document.getElementById('UploadNewFile').hidden = false;
	document.getElementById('profile').hidden = true;
    document.getElementById('update').hidden = true;
    document.getElementById('change_pass').hidden = true;
    document.getElementById('hayat').hidden = true;
    }
	 function openCity1() {
		  document.getElementById('UploadNewFile').hidden = true;
    document.getElementById('profile').hidden = false;
    document.getElementById('update').hidden = true;
    document.getElementById('change_pass').hidden = true;
    document.getElementById('hayat').hidden = true;
    }
	
    function openCity2() {
	 document.getElementById('UploadNewFile').hidden = true;
    document.getElementById('profile').hidden = true;
    document.getElementById('update').hidden = false;
    document.getElementById('change_pass').hidden = true;
    document.getElementById('hayat').hidden = true;
    }
    function openCity3() {
	 document.getElementById('UploadNewFile').hidden = true;
    document.getElementById('profile').hidden = true;
    document.getElementById('update').hidden = true;
    document.getElementById('change_pass').hidden = false;
    document.getElementById('hayat').hidden = true;
    }
    function openCity4() {
	 document.getElementById('UploadNewFile').hidden = true;
    document.getElementById('profile').hidden = true;
    document.getElementById('update').hidden = true;
    document.getElementById('change_pass').hidden = true;
    document.getElementById('hayat').hidden = false;
    var j = document.getElementById('level').value;
    if(j ==2){
    document.getElementById('jur').hidden = false;
    }else 
    document.getElementById('jur').hidden = true;
    }
    </script>
    
    </div>