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
        
        <div class="cove_tab"> 
           <img src="general/usim.png" style="height: 80px; width: 500px;border-radius: 6px; margin: 20px 0 0 800px;">
        </div>
        
        <hr style="height: 4px; background-color: #066d77;">

        <form action="th_abstract.php" method="POST">
            
            
        <div class="cov_display">
                
               <h3 align="center"> English Abstract </h3>
                <br><br>
                <textarea cols="200" rows="6" name="e_ab"style="max-width:100%;"> </textarea>
             <br><br><br>

                <h3 align="center"> Malay Abstract </h3>
                <br><br>
                <textarea cols="200" rows="6"style="max-width:100%;" name="m_ab"> </textarea>
            
         <br><br> <br><br>
 <input type="submit" value=" Next " name="abstract">
 </div>
 </form>
        
<?php
		if(isset($_POST['abstract'])){
		$myuser = $_SESSION['un'];
		$title = $_SESSION['tit'];
		$e_ab = $_POST['e_ab'];
		$m_ab = $_POST['m_ab'];
        $sql = "UPDATE thesis SET e_ab ='$e_ab', m_ab ='$m_ab' WHERE username = '".$myuser."'";
		$qury = mysql_query($sql,$con) or die(mysql_error());
			if($qury){
			header('location:thesis_contents.php');	
			}
		
		}
		?>
        
        
   
        <div class="footer" style="margin-top: 20px;">
           <?php //include_once 'general/footer.php';?> 
        </div>
    </body>
</html>