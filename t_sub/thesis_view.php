<?php 
session_start();
if(isset($_SESSION['un'])){}
else{header("location:../index.php");}
include"tab.php";
?>
<html>
<title>View</title>
<link type="text/css" rel="stylesheet" href="../css/thesis_body_css.css">
<link type="text/css" rel="stylesheet" href="../css/index_js&css/index_css.css">
  <script src="../css/index_js&css/js1.js"></script>
  <script src="../css/index_js&css/js2.js"></script>
    <body>  
	<?php 
	include_once "../connect.php";
	
            $sql = "select * from checker.thesis WHERE username = '".$_SESSION['un']."'";
            $result = mysql_query($sql);
          $row = mysql_fetch_array($result);
				$username = $_SESSION['un'];
				$auto_name = $row['auto_name'];
				$matric = $row['matric'];
				$email = $row['email'];
				$address = $row['address'];
				$course = $row['course'];
				$faculty = $row['faculty'];
				$lecturer = $row['lecturer'];
				$title = $row['title'];
				$acknow = $row['acknowledgment'];
				$approv = $row['approvale'];
				$thesis_submit = $row['thesis_submit'];
				$e_ab = $row['e_ab'];
				$m_ab = $row['m_ab'];
				$mydate = $row['mydate'];
            ?>

            <!--  ==========================================Hard Cover Page========================-->
           
            
 <style media="print" type="text/css">
@media print
{
body * { visibility: hidden; }
#myprint * { visibility: visible; }
#myprint { position: absolute; top: 40px; left: 30px; }
}
</style>
                             
                    <input type="button" onClick="printDiv()">
            
            <script>
		function printDiv(){
			alert('working');
			window.print('all');
		}
				
		
		</script>
            
       
        <div class="all" id="all" style="border: 1px solid black;">
        <div id="myprint">
        <div class="hard" id="hard">
               <label style="margin-top:4cm"><?php echo strtoupper($title);?></label><br>
                <label style="margin-top:7cm"><?php echo strtoupper($auto_name);?></label><br>
                <label style="margin-top:9cm"><?php echo strtoupper('University Science Islam Malaysia'); ?></label><br>
        </div>
        
        
       <?php /*?> <div class="hard" id="hard">
               <label  style="position:absolute;  margin-top:15%;"><?php echo strtoupper($title);?></label><br>
                <label style=" position:absolute; margin-top:30%;"><?php echo strtoupper($auto_name);?></label><br>
                <label style=" position:absolute; margin-top:800px;"><?php echo strtoupper('University Science Islam Malaysia'); ?></label><br>
        </div><?php */?>
        
        <br><hr>
       
<!--        ==========================Cover Page ============================-->

<div class="cover" style="padding: 5%;">
           <h4><label style="margin-top:2cm"><?php echo $title;?></label></h4>  
               
                <label style="margin-top:3cm"><?php echo ucwords($auto_name);?></label><br>
                <label>(<?php echo ucwords($matric);?>)</label><br>
                <label style="margin-top: 3cm"><?php echo ucfirst($thesis_submit);?></label><br>
                
                <label style="margin-top:3cm;"><?php echo $course;?></label><br>
                <label><?php echo strtoupper('University Science Islam Malaysia');?></label><br>
                <label>Nilai</label><br>
                <label style="margin-top:3cm;"><?php echo $mydate;?></label>

    </div><br><hr>
<!--===================== Author Declaration =====================-->
<div class="cover" style="padding: 5%;">
            
          <h4 style="text-align:center; margin-top: 3cm">Author Declaration</label></h4> <br>
 
                <label style="margin-top:1cm;"><h4> بسم الله الرحمن الرحیم </h4></label><br>
                <label style="margin-top:3cm"><?php echo "I heerby declare that thr working in this thesis is my own except for quoation and summaries which i have been duly acknowledged.";?></label><br>
 
            <label style="margin-top:3cm; float: left">Date:- <?php echo $mydate;?></label>
            
            <table style="margin-top:3cm; float: right; margin-right: 15%;">
               
                <tr>
                    <td>Signature:</td>
                    <td><label>.........................</label></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Name:</td>
                    <td><label> <?php echo $auto_name;?></label></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Matric:<br>
                    <td><label ><?php echo $matric;?></label></td>
                </tr>
                <tr><td><br></td></tr>
                <tr>
                    <td>Address:</td>
                    
                    <td><label><?php echo $address;?></label></td>
                </tr>
            </table>
            </div><br><hr>
<!--=======================Approval=================================-->

<br><div class="cover" style="text-align: justify; padding: 5%;">           
         <br> <h4 style="text-align:center; margin-top: 2cm">APPROVAL</h4> <br> 
         
         <label style=" text-align:justify; margin-top:1cm"></label><?php echo $approv;?> <br>
         <label style="margin-top:3cm;">Approved by: </label><br>
         
                <label style="">signature:  ......................</label><br>
                <label style="">Prof.......</label><br>
                <label style=""><?php echo $course;?></label><br>
                <label style="">University Science Islam Malaysia</label><br>
                <label style="margin-top:2cm;"><?php echo $mydate;?></label>

    </div><br><hr>
 <!--   ============================= ACKNOWLEDEGMENT=========================-->
    <div class="cover" style="text-align: justify; padding: 5%;">
    <h4 style="text-align:center; margin-top: 2cm">ACKNOWLEDEGMENT</h4>
    <label style="margin-top: 1cm"></label><?PHP echo $acknow;?>
    </div><br><hr>
   <!-- ======================================English abstract======================================-->
    <div class="cover" style="text-align: justify; padding: 5%;">           
      
              <h3 style="text-align:center; margin-top: 2cm">English Abstract</h3>
                
                <label style="margin-top: 2cm"></label><?php echo $e_ab;?>
          </div>
    <br><hr>
   <!-- ============================Malay Abstract=============================-->
     <div class="cover" style="text-align: justify; padding: 5%;">           
<h4 style="text-align:center; margin-top: 2cm">Malay Abstract</h4> 
                
                <label style="margin-top: 2cm"></label><?php echo $m_ab;?>
  </div><br><hr>
   <!-- ====================================table of contents =============================================================-->
   
   <br><div class="cover" style="padding: 5%" id="content_list">
   
 <h4 style="text-align:center;margin-top:2cm">Table of Contents </h4>
 <table width="100%">
 <label style="margin-top: 2cm"></label>
<?php
$select_tables = "SELECT * FROM thesis_body1 WHERE username = '".$_SESSION['un']."'";
$tables_query = mysql_query($select_tables) or die(mysql_error());
while($tables_row = mysql_fetch_array($tables_query)){
	$chapter = $tables_row['chapter'];
	$header1 = $tables_row['header1'];
	$header2  = $tables_row['header2'];
	$header3  = $tables_row['header3'];
	$pageNo  = $tables_row['id'];
	
	//$pageNo  = $body_row['id'];
	
	if($chapter != NULL){
		?>
		<tr><td id="d"><?php echo $chapter;?>1</td> <td><?php echo $pageNo?></td></tr>
		<?php 
	}
	else if($header1 != NULL){
		?>
		<tr><td id="d"><?php echo $header1;?>1</td> <td><?php echo $pageNo?></td></tr>
		<?php 
	}
	else if($header2 != NULL){
		?>
		<tr><td id="d"><?php echo $header2;?>1</td> <td><?php echo $pageNo?></td></tr>
		<?php 
	}
	else if($header3 != NULL){
		?>
		<tr><td id="d"><?php echo $header3;?>1</td> <td><?php echo $pageNo?></td></tr>
		<?php 
	}
}
	?>
		</table>
		<style>
			#content_list tr{
				text-align: left;
			}
		</style>
 </div><br><hr>
 
<!-- ================================================table of figures===================================-->
<div class="cover" style="padding: 5%;">
<h4 style="text-align:center;">Lisit Of Figures</h4>

<table width="100%" style="margin-top: 2cm">
<?php 
	$select = "select * from thesisimage";
	$query = mysql_query($select);
	while($row = mysql_fetch_array($query)){
		
	?>
<tr style="text-align: left"><td id="d"><?php echo($row['ImageName']);?> </td><td><?php echo($row['imageNo'])?></td></tr>
<?php }?>
</table>
</div><br><hr>
<!--======================================================List of table =========================================-->
<!--<div class="cover">
<h3 style="text-align:center;">List of Table</h3>
<table>
<tr><td id="d">table  name </td><td>table Number</td></tr>
</table>
</div><br><hr>-->
<!--===========================================================Contents====================================-->
<div class="Contents" style="text-align: justify; padding: 5%;">
	<p style="margin-top: 1cm"></p>
<?php 
$select_body = "SELECT * FROM thesis_body1 WHERE username = '".$_SESSION['un']."'";
$body_query = mysql_query($select_body) or die(mysql_error());
while($body_row = mysql_fetch_array($body_query)){
	$chapter = $body_row['chapter'];
	$header1 = $body_row['header1'];
	$content = $body_row['content'];
	$header2  = $body_row['header2'];
	$content = $body_row['content'];
	$header3  = $body_row['header3'];
	$content = $body_row['content'];
	$content = $body_row['content'];


echo "<h3 align='center'>$chapter</h3><br>";
echo "<h3>$header1</h3><br>";
echo $content;

echo "<h4>$header2</h4><br>";
echo $content;

echo "<h5>$header3</h5><br>";
echo $content;
}
?> h
</div><br><hr>
<!--==============================List of Reference===============================================-->

<div class="cover" style="padding: 5%;" id="refer_list">
    
<h4 style="text-align:center; margin-top: cm">List of Reference</h4>
<table width="100%" style="margin-top: cm">
<?php 
$select_reference = "select * from thesis_reference where username = '".$_SESSION['un']."'";
$Rfquery = mysql_query($select_reference);
while($Rrow = mysql_fetch_array($Rfquery)){
	$id = $Rrow['id'];
	echo '<tr style = "text-align: left;"><td>['.$Rrow['no'].'] '.$Rrow['name'].', '.$Rrow['address'].', '.$Rrow['mydate'].'.';
	?><form method="post" action="../References/EditReference.php">
	</td>
    	<td><input type="hidden" value="<?php echo $Rrow['id']?>" name="idR" id="idRefer"></td>
    	<td> <?php echo '<a href="../References/EditReference.php?id='.$id.'">X</a>'; ?></td>
      </tr>
      <?php }?>
    </form>
   
	</table>
	
</div>

    </div>
    </div>
    </body>
</html>