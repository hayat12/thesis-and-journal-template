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
            <?php include_once'tab.php';include_once "connect.php";?>
            
            <form method="POST" action="t_sub/CreateThesisCovers.php">
              
              <?php  
			$creat = "SELECT * FROM thesis WHERE username = '".$_SESSION['un']."'";
			$creatqury = mysql_query($creat)or die(mysql_error());
			$creatrow = mysql_fetch_array($creatqury);
				
				$Thesis_user = $creatrow['username'];
				?>
              
        <div style="width:15%; margin-left:2%; margin-top:5%; position:fixed;">
   <div class="panel-group" id="accordion">
  
  <div class="panel panel-default"> 
  <br><strong style="margin-left:15%;">Manage Your Thesis</strong><br><br>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Create Thesis </a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body"><input name="hard_cover" type="submit" value="Create Thesis" id="creatThesis" style="background-color:inherit"></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Edit Thesis</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><?php if($Thesis_user != $_SESSION['un'] || empty($Thesis_user)){echo "Emapy";}else{ echo"<a href='thesis_contents.php'>".$creatrow['title']."</a>";}?></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Edit Thesis Cover Pages</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"> <a href="Update Thesis Cover.php">Edit</a></div>
    </div>
  </div>
</div>

</div> 
        
        

<h1 style="margin-left:40%;">Thesis hard cover</h1>
            <div class="createThesisCover">
            
           
            <table class="cover">
            <tr>
            <td>Please select your faculty: </td>
            <td>*</td>
            <td><select id="faculty" name="faculty" required id="faculty">
                <option>Faculty</option>
                <option>FST</option>
                <option>FKP</option>
                <option>FSU</option>
                <option>FPQS</option>
                </select></td>
            </tr>
            
            <tr><td><br></td></tr>
            
            <tr>
            <td>Please insert your program: </td>
            <td>*</td>
            <td><input id="course" id="course" placeholder=" Enter your program" name="course" type="text" required></td>
            </tr>
            
            <tr><td><br></td></tr>
            
            <tr>
            <td>Please insert your thesis title: </td>
            <td>*</td>
            <td><input id="title" placeholder="Please inter your thesis title" name ="title" type="text" required ></td>
            </tr>
            
            <tr><td><br></td></tr>
            
            <tr>
            <td>Please insert your supervisor's name: </td>
            <td>*</td>
            <td><input id="l_name" placeholder=" Please insert your supervisor's name " name="l_name" type="text" required></td>
            </tr>
            
            <tr><td><br></td></tr>
            
            <tr>
            <td>Please insert your name: </td>
            <td>*</td>
            <td><input id="a_name" placeholder=" Please insert your name" name ="a_name" type="text" required></td>
            </tr>
            
            <tr><td><br></td></tr>
            
            <tr>
            <td>Please select the date: </td>
            <td>*</td>
            <td><input id="mydate" name="date" placeholder="Select Date"type="date"></td>
            </tr>
 
            <tr><td></td><td></td></tr>
            </table>
            
        </form>
        <?php
			
			$Avcheck = "SELECT * FROM thesis WHERE username = '".$_SESSION['un']."'";
			$avquery = mysql_query($Avcheck);
			while($avrow = mysql_fetch_array($avquery)){
				$avuser = $avrow['username'];
				if($avuser == $_SESSION['un']){
					?>
					<script>
                    document.getElementById('title').disabled = true;
					document.getElementById('faculty').disabled = true;
					document.getElementById('course').disabled = true;
					document.getElementById('l_name').disabled = true;
					document.getElementById('a_name').disabled = true;
					document.getElementById('mydate').disabled = true;
					document.getElementById('creatThesis').disabled= true;
                    </script>
					<?php
				}
			}
		
		
		?>
        </div>
    </body>
</html>