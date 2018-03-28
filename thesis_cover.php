<?php
session_start();
 if(isset($_SESSION['un'])){
		  }else{
			  header("location:index.php");
		  }
?>
<html>
    <head><link type="text/css" rel="stylesheet" href="css/cover_css.css">
    <head><link type="text/css" rel="stylesheet" href="css/file_style.css">
    </head>
    <body>
        <?php include_once('tab.php');
		include_once "connect.php";
		  
		$select_cove = "SELECT * FROM thesis where username = '".$_SESSION['un']."'";
		$cove_query = mysql_query($select_cove) or die(mysql_error());
		while($cov_row = mysql_fetch_array($cove_query)){
			$auto_name = $cov_row['auto_name'];
			$matric = $cov_row['matric'];
			$thesis_submit = $cov_row['thesis_submit'];
			$faculty = $cov_row['faculty'];
		
		?>
        
        <form action="thesis_cover.php" method="POST">
        <h2 align="center">Cover Page</h2>
        <div class="cov_display">

 <table width="100%;">
 <tr><td><h3>Topic </h3></td></tr>
  <tr><td><input id="a" value="<?php echo $_SESSION['tit']; ?>" readonly type="text" id="title" name="title"></td></tr>
    <tr><td><br></td></tr>
   <tr><td> Name: </td></tr>
     <tr><td> <input  value="<?php echo $auto_name; ?>" placeholder="Enter your Name" type="text" name="name"> </td></tr>
       <tr><td><br></td></tr>
      <tr><td><br></td></tr>
         <tr><td>Matric No: </td></tr>
      <tr><td> <input value="<?php echo $matric?>" placeholder="Enter your Matric" type="text" id="matric" name="matric"></td></tr>
       <tr><td><br></td></tr>
      <tr><td><br></td></tr>
      <tr><td> Thesis submitted in partial fulfilment for the degree of </td></tr>
  <tr><td> <input id="d" value="<?php echo $thesis_submit;?>" type="text" id="thesis_submit" name="thesis_submit"></td></tr>
   <tr><td><br></td></tr>
      <tr><td><br></td></tr>
   <tr><td> <input id="e" value="<?php echo $faculty;?>" type="text" id="faculty" name="faculty"><br>UNIVERSITY SAINS ISLAM MALAYSIA NILAI</td></tr>
   
    <tr><td><br></td></tr>
      <tr><td><br></td></tr>
    <tr><td>Date:</td></tr>
     <tr><td> <input id="date" value="<?php echo $mydate; }?>" type="date"  name="date"></td></tr>
      
      <tr><td><br></td></tr>
      <tr><td><br></td></tr>
      <tr><td> <input type="submit" value=" Next " name="thesis_cover"></td></tr>
 
 </table>
 
 
 </div>
 
 </form>
  <?php
		
		if(isset($_POST['thesis_cover'])){
		$myuser = $_SESSION['un'];
		$title= $_SESSION['tit'];
		$name= $_POST['name'];
		$faculty = $_POST['faculty'];
		$matric = $_POST['matric'];
		$thesis_submit = $_POST['thesis_submit'];
		$date = $_POST['date'];
        $sql = "UPDATE thesis SET auto_name ='$name', matric ='$matric', faculty ='$faculty', thesis_submit= '$thesis_submit', mydate ='$date' WHERE username = '".$myuser."' AND title = '".$_SESSION['tit']."'";
		$qury = mysql_query($sql,$con) or die(mysql_error());
		header('location:th_atho_dic.php');
		}
		?>
               

        <script>
        function myfunction(a){
            a = document.getElementById("a").value;
            var result = a;
                    document.getElementById("demo").innerHTML = result;
        }
        </script>
        </div>
    </body>
</html>