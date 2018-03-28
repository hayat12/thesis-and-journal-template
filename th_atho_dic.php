<?php
session_start();
 if(isset($_SESSION['un'])){
		  }else{
			  header("location:index.php");
		  }
?>
<html>
    <title>
        Author Declaration 
    </title>
    <body>
     <head><link type="text/css" rel="stylesheet" href="css/cover_css.css"></head>
    <body>
        <?php include_once 'tab.php';include_once "connect.php";?>
        
        
        <?php  
		$select_cove = "SELECT * FROM thesis where username = '".$_SESSION['un']."'";
		$cove_query = mysql_query($select_cove) or die(mysql_error());
		while($cov_row = mysql_fetch_array($cove_query)){
			$auto_name = $cov_row['auto_name'];
			$matric = $cov_row['matric'];
			$address = $cov_row['address'];
			$mydate = $cov_row['mydate'];

		?>
        
        <form action="th_atho_dic.php" method="POST">
        <div class="cov_display">
            
           <h3 align="center">Author Declaration</h3>
          <h3 align="center"> بسم الله الرحمن الرحیم </h3><br><br><br>
            I hereby declare that the work in this thesis is my own except for quotation summary which have duly knowledge
 <br><br><br><br>
            Date:- <input id="date" type="date" name="date" value="<?php echo $mydate;?>"><br><br><br><br>
            <table width="100%;">
                <tr>
                    <td>Signature:</td>
                    <td><input type="text" name="signture" value="......................" readonly style="border: none;"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" value="<?php echo $auto_name;?>"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Matric:<br>
                    <td><input type="text" name="matric" value="<?php echo $matric;?>" placeholder="Matrin No"></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" value="<?php echo $address;}?>" placeholder="Address"></td>
                </tr>
                <tr>
                    <tr><td><br></td></tr>
                    <tr><td> <input type="submit" value=" Next " name="autho_dic"></td></tr>
                </tr>
                
                
                
            </table>
            
        </div>

 </form>
         <?php
		$con = mysql_connect('localhost','root' , '') or die("Not connected");
		  $select_db = mysql_select_db('checker',$con)or die("Database does Not selected");
		  
		if(isset($_POST['autho_dic'])){
		$myuser = $_SESSION['un'];
		$name= $_POST['name'];
		$matric = $_POST['matric'];
		$address = $_POST['address'];
		$date = $_POST['date'];
        $sql = "UPDATE thesis SET auto_name ='$name', matric ='$matric', address ='$address', mydate ='$date' WHERE username = '".$myuser."'";
		$qury = mysql_query($sql,$con) or die(mysql_error());
		header('location:th_approval.php');
		}
		?>

        <script>
        function myfunction(a){
            a = document.getElementById("a").value;
            var result = a;
                    document.getElementById("demo").innerHTML = result;
        }
        </script>
    </body>
</html>