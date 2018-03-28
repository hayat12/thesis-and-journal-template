<?php
session_start();
 if(isset($_SESSION['un'])){
		  }else{
			  header("location:index.php");
		  }
?>
<html>
    <title>Approval </title>
       <head><link type="text/css" rel="stylesheet" href="css/cover_css.css"></head>
    <body>
        
  

        <?php include_once 'tab.php';include_once "connect.php";?>

        <form action="th_acknow.php" method="POST">
            
            
        <div class="cov_display">
      
               <h3 align="center"> Acknowledgment </h3>
                <br><br>
                <textarea cols="200" rows="20" name="acknowledgment" style="max-width:100%;" placeholder="Acknowledgment ..."></textarea>
  <br><br>  <br><br> <input type="submit" value=" Next " name="acknow">
        </div>
 </form>
        
  <?php
		$con = mysql_connect('localhost','root' , '') or die("Not connected");
		  $select_db = mysql_select_db('checker',$con)or die("Database does Not selected");
		  
		if(isset($_POST['acknow'])){
		$myuser = $_SESSION['un'];
		$title = $_SESSION['tit'];
		$acknowledgment = $_POST['acknowledgment'];
		$date = $_POST['date'];
        $sql = "UPDATE thesis SET acknowledgment ='$acknowledgment' WHERE username = '".$myuser."'";
		$qury = mysql_query($sql) or die(mysql_error());
			if($qury){ 
				header('location:th_abstract.php');
			}
	
		}
		?>
        
   
        <div class="footer" style="margin-top: 20px;">
           <?php //include_once 'general/footer.php';?> 
        </div>
    </body>
</html>