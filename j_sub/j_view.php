<?php
session_start();
?>
<html>
    <link type="text/css" rel="stylesheet" href="../css/j_preview.css">
    <body>
       
       <style media="print" type="text/css">
@media print
{
body * { visibility: hidden; }
#pageing * { visibility: visible; }
#pageing { position: absolute; top: 40px; left: 30px; }
}
</style>
       
        <div class="pageing" id="pageing">
                  
                        <?php 
include_once "../connect.php";

            $sql = "SELECT * FROM journal  WHERE username = '".$_SESSION['un']."'";
            $result = mysql_query($sql);
            while($row = mysql_fetch_array($result)){
            echo'<h3 style="text-align: center; margin-top:2cm;">'.
			$row['title'].'</h3><h5 style="text-align: center">'.'<br><br>[1] '.
			$row['aut_name'].'<br>'.
			$row['email'].'<br>'.
            $row['course'].' ('.
			$row['faculty'].')'.'<br>'.
			$row['address'].' ('.
			$row['mydate'].')<br>';}
			//=============Add author =================
			$count = 2;
			$sql1 = "SELECT * FROM Journal_Author WHERE username = '".$_SESSION['un']."'";
            $result1 = mysql_query($sql1) or die(mysql_error());
            while($row = mysql_fetch_array($result1)){
				
				echo "[".$count."](".$row[2].')<br>'.$row[4].'-'.$row[3].'<br>';
				$count++;
				}
			
			//=================================Abstract============
			$sql2 = "SELECT * FROM journal WHERE username = '".$_SESSION['un']."'";
            $result2 = mysql_query($sql2);
            while($row = mysql_fetch_array($result2)){
           echo '<h3>Abstract</h3><div style ="text-align: justify; margin-top:1cm" >'.
			$row['abs'].'</div';
			}
			?>

<!--        ========================Body==============================-->
<p style="margin-top:1cm"></p>
        <?php
        $sql1 = "select * from checker.journal where username = '".$_SESSION['un']."'";
            $result1 = mysql_query($sql1);
            $row = mysql_fetch_array($result1);
            $contents = $row['content'];
			$count = count($contents);
			echo $contents;
		?>
            
            <!--===================Reference===================-->

        <strong><h3 style="text-align:center">References</h3></strong>
        <?php
        $sql1 = "select * from checker.j_reference where username = '".$_SESSION['un']."'";
            $result1 = mysql_query($sql1);
			$refe_cont =1;
            while($row2 = mysql_fetch_array($result1)){
         $id =  $row2['0'];
		 $username =  $row2['1'];
		 $title =  $row2['2'];
		 $au_name =  $row2['2'];
		 $address =  $row2['3'];
		 $organization =  $row2['5'];
		 $email =  $row2['5'];
		 $link =  $row2['7'];
		 $date =  $row2['7'];
		 $no =  $row2['8'];
		 
		 echo "[".$refe_cont."] ".$au_name.'.'.$date.'."'.$address.'"<br><br>';
			$refe_cont++;}?>

              </div>
<button type="button" onclick="window.open('j_view.php', '_self', '' ); window.close();" style=" margin-left: 20px; position: relative;">
Close</button>

    </body>
</html>