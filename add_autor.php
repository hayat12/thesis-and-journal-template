<?php
session_start();

?>        
<html>
        <body>
            <link type="text/css" rel="stylesheet" href="css/file_style.css">
            <?php include_once 'tab.php'; include_once "connect.php";?>
            
            <div class="cove_tab">
            <img src="general/usim.png" style="height: 80px; width: 500px;border-radius: 6px; margin: 20px 0 0 800px;">
            </div>
            
            
            <hr style="height: 4px; background-color: #066d77;">
            <form method="POST" action="j_cover_page.php">   
            <div class="cover">
                   
                    <div id="j_cover" style=" margin: 40px;"> 
                        <?php
                        $sql = "select * from checker.register1 where user = '".$_SESSION['un']."'";
	                      $result = mysql_query($sql);
	                      while($myrow = mysql_fetch_array($result)){;
						  }
						?>
                        
                      
                        <input id="a_name" placeholder="Author Name" required name ="name" type="text" >
                      <br><br>
                    
                    <input id="email"  placeholder=" Email"name ="email" type="text" style="width: 390px">
                  <br><br>  
                <select onload="set_faculty()" id="faculty" name="faculty" style="width: 390px; height: 30px; border-radius: 4px;">
                        <option value="s_faculty" name = "select_f">Faculty</option>
                        <option value="FST">FST</option>
                        <option value="FKP">FKP</option>
                        <option value="FSU">FSU</option>
                        <option value="FPQS">FPQS</option>
                        
                     
                </select><br><br>
                
                <input id="course" placeholder=" Enter your course" name="course" type="text" ><br><br>
                
                <input id="l_name" placeholder=" Enter Lecturer' Name" name="l_name" type="text" ><br><br>
                
                <input id="a_address" placeholder=" Author Address" name ="a_address" type="text"><br><br>
                <input id="date" name="date" placeholder="Select Date"type="date"style="border-radius: 2px; border:2px solid white; height: 30px; width: 390px"><br><br>        
                

                    </div>
                </div>
<?php  $address1 = mysql_insert_id();?>
        <input type="submit" name="submit" value="Add" >

       		<?php
				if(isset($_POST['submit'])){
       
		  $address1 = $_POST['id'];
		  $_session['tt'] = $address1;
		  $address2 = $_POST['name'];
		  $address3 = $_POST['email'];
		  $address4 = $_POST['faculty'];
		  $address5 = $_POST['course'];
		  $address6 = $_POST['l_name'];
		  $address7 = $_POST['a_address'];
		  $address8 = $_POST['date'];
		  $address9 = $_POST['abstract'];
		  $address10 = $_SESSION['un'];
                  
		  $select = "select * from journal";
		  $result = mysql_query($select) or die(mysql_error());
		 // $q = mysql_query($result);
		  $rows = mysql_fetch_array($result);
		  if($rows['title']==$address1 AND $rows['username'] == $address10){
                         echo "<script>alert('this thesis already exist');</script>";
                         //header("location:profile.php");
       	  }
		  else{
                     
		  $sql = "INSERT INTO journal (username,title,aut_name, course, faculty, email, address, lecturer, date, abs, chapter, header1, header2, header3, header4, content) VALUES('".$address10."','','".$address2."','".$address5."','".$address4."','".$address3."','".$address7."','".$address6."','".$address8."','".$address9."','','','','','','')"; 
				$qury = mysql_query($sql,$con) or die(mysql_error());
				
                                header("location:contents.php");
					
		  }
                                }
				?>
         
        </form>
            </body>
        </html>