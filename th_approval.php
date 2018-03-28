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
        
<?php	  
		$select_cove = "SELECT * FROM thesis where username = '".$_SESSION['un']."'";
		$cove_query = mysql_query($select_cove) or die(mysql_error());
		while($cov_row = mysql_fetch_array($cove_query)){
			$mydate = $cov_row['mydate'];

		?>
        <form action="th_approval.php" method="POST">
            
            
        <div class="cov_display">
              <h3 align="center"> Approval </h3>
                <br><br>
                <textarea cols="200" rows="6"style="max-width:100%;" name="approvale"> </textarea>
           <br><br>  <br><br>
             Signature
              <br>
             .............................
             <br><br>  <br><br>
             Faculty of Science and Technology 
             <br><br>  <br><br>
             University of Science Islam Malaysia 
             <br><br>
             Date: <input type="date" name="date" value="<?php echo $mydate;} ?>">
               <br><br>  <br><br>
 <input type="submit" value=" Next " name="myapprovale">
        </div>

 </form>
        
          <?php
		  
		if(isset($_POST['myapprovale'])){
		$myuser = $_SESSION['un'];
		$approvale = $_POST['approvale'];
		$date = $_POST['date'];
        $sql = "UPDATE thesis SET approvale ='$approvale', mydate ='$date' WHERE username = '".$myuser."'";
		$qury = mysql_query($sql,$con) or die(mysql_error());
		header('location:th_acknow.php');
		}
		?>

    </body>
</html>