		  <?php
		  
		  session_start();
		 if(isset($_SESSION['un']) || isset($_POST['un'])){
		 }
		 else{
			 header('location:index.php');
		 } 
	include_once "connect.php";
		  ?>
		  
		  <html>
		  <head>
		  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		  <script type="text/javascript" src="js.js"></script>
		  </head>
		  <body onload="iFrameOn();">
		  <link type="text/css" rel="stylesheet" href="css/file_style.css">
		  <link type="text/css" rel="stylesheet" href="css/pop_up.css">
          <link type="text/css" rel="stylesheet" href="css/sidbar.css">
          <link type="text/css" rel="stylesheet"  href="css/journale_refer.css">
		   <div class="options">
          <?php include_once 'tab.php'; ?>
          
		  <input type="button" name="save" onclick="save" style="background-image: url(images/save.png);">
		  <input type="button" name="newpage" onclick="newPage" style="background-image: url(images/page.png);">
		  <input type="button" name="preview" onclick="check()" style="background-image: url(images/preview.png);">
		  <input type="button" name="find" onclick="search()"style="background-image: url(images/find.png);">
		  <input type="button" name="symbol" onclick="Sympol" style="background-image: url(images/reset.png);">
		  <input type="button" name="eq" onclick="Equasion" style="background-image: url(images/specialchar.png);">
		  <input type="button" name="h_light" onclick="iLink()" style="background-image: url(images/unlink.png);">
		  <input type="button" name="h_light" onclick="iUnLink()" style="background-image: url(images/unlink.png);">
		  <input type="button" name="bold" onclick="iBold()" style="background-image: url(images/bold.png);">
		  <input type="button" name="italic" onclick="iItalic()" style="background-image: url(images/italic.png);">
		  <input type="button" name="underline" onclick="iUnderline()" style="background-image: url(images/under.png);">
		  <input type="button" name="Strikthrough" onclick="iStrikethrough()" style="background-image: url(images/strike.png);">
		  <input type="button" name="Superscript" onclick="iSuperscript()" style="background-image: url(images/superscript.png);">
		  <input type="button" name="Subscript" onclick="iSubscript()" style="background-image: url(images/subscript.png);">
		  <input type="button" name="num_line" onclick="Dot()" style="background-image: url(images/ul-circle.png);">
		  <input type="button" name="num_line" onclick="iUnorderedList()" style="background-image: url(images/ul-disc.png);">
		  <input type="button" name="Align-left" onclick="" style="background-image: url(images/ul-square.png);">
		  <input type="button" name="Align-center" onclick="Align_left()" style="background-image: url(images/left.png);">
		  <input type="button" name="Align-right" onclick="Align_center()" style="background-image: url(images/center.png);">
		  <input type="button" name="t_position" onclick="Align_right()" style="background-image: url(images/right.png);">
		  <input type="button" name="h_line" onclick="iHorizontalRule()" style="background-image: url(images/ruler-horizontal.png);">
		  
		              <!--==================== Table  ======================-->
		 <!-- <input type="button" name="table" onclick="iTable()" style="background-image: url(images/inserttable.png);">-->
		  <input type="button" onclick="img()" style="background-image: url(images/image.png);">
		    
             <div class="Pop" id="img" hidden="true">
           <input type="button" value="&times;" onClick="closePop()" class="pclose">
           <h2 class="phead">Image</h2>
           <table>
           <tr>
				<td>Image:</td> 
				<td>*</td> 
				<td><input type="file" id="myfile"></td>
           </tr>
           <tr>
           		<td>Name: </td>
           		<td>*</td>
           		<td><input type="text" id="myimge"></td>
		   </tr>
           <tr>
           		<th colspan="3"><input type="button" name="Image" onclick="myImage()" value="Add Image">
           		</th>
           		<tr><td><p id="d1"></p></td></tr>
           </tr>
           
           </table>
           </div>
		  <!--=================== Image =====================-->
          <script>  
		 function myImage(){
			 
			 var img = prompt('insert image','');
			F_area.document.execCommand('insertImage',false,img);
				var imgName = document.getElementById('myimge').value;
			F_area.document.execCommand('insertText',false,'\n'+imgName);
				alert(imgName);	
			 
	    var xmlhttp =new XMLHttpRequest();
	xmlhttp.open("GET","t_sub/thesis_image.php?ImageName="	+document.getElementById("myimge").value,false);
	xmlhttp.send(null);
    document.getElementById("d1").innerHTML = xmlhttp.responseText;
		 }
			  
		function closePop(){
			  document.getElementById('img').hidden = true;
			  document.getElementById('tb').hidden = true;
		  }
		  function img(){
          document.getElementById('img').hidden = false;
		  }
		  function tb(){
			document.getElementById('tb').hidden = false;  
		  }
          </script>
          
		  <!--=====================font style ==============================-->
		  <select id="fonts" class="g-button" onclick="FontStyle();">
		  <option value="Normal">Font Style</option>
		  <option value="Arial">Arial</option>
		  <option value="Comic Sans MS">Comic Sans MS</option>
		  <option value="Courier New">Courier New</option>
		  <option value="Monotype Corsiva">Monotype</option>
		  <option value="Tahoma New">Tahoma</option>
		  <option value="Times">Times</option>
		  <option value="Trebuchet New">Trebuchet</option>
		  <option value="Ubuntu">Ubuntu</option>
		  </select>

			   <script>
			   function FontStyle(){
					var font = document.getElementById('fonts').value;
					F_area.document.execCommand('FontName', false,font);
					}
			   
			   </script>

		  <select id="FZise" onchange="FontZise()"> 
				<option value=" ">Font Size</option>
				<option value="1">10</option>
				<option value="2">11</option>
				<option value="3">12</option>
				<option value="4">13</option>
				<option value="5">14</option>
				<option value="6">15</option>
				<option value="7">16</option>
		  </select>
			   <script>
			   Function iFontSize(){
				   var x = document.getElementById('fsize').value;
				   F_area.document.execCommand('FontSize',false,x); 
			   }
			   
			   </script>
        <!--  ==================================Color=======================================-->
          
		  <input type="button" id="text_color" onclick="iColor()" value="Color" style=" width:8%"> 
             
          <div class="mycolor" id="textColor" hidden="true">
<table>
<tr>
<td><input type="button" style="background-color:inherit"></td>
<td><input type="button" style="background-color: inherit"></td>
<td><input type="button"  style="background-color: inherit"></td>
<td><input type="button" onClick="coloseColor()" value="&times;" style="background-color: inherit"></td>
</tr>

<tr>
<td><input type="button" onClick="iColor1()" style="background-color: #000000"></td>
<td><input type="button" onClick="iColor2()" style="background-color: #b000ff"></td>
<td><input type="button" onClick="iColor3()" style="background-color: #a7664a"></td>
<td><input type="button" onClick="iColor4()" style="background-color: #2f2459"></td>
</tr>
<tr>
<td><input type="button" onClick="iColor5()" style="background-color: #005f0b"></td>
<td><input type="button" onClick="iColor6()" style="background-color: #bb1d1d"></td>
<td><input type="button" onClick="iColor7()" style="background-color: #ffa500"></td>
<td><input type="button" onClick="iColor8()" style="background-color: #5d99ff"></td>
</tr>
<tr>
<td><input type="button" onClick="iColor9()" style="background-color: #2f3c40"></td>
<td><input type="button" onClick="iColor10()" style="background-color: #2600AA"></td>
<td><input type="button" onClick="iColor11()" style="background-color: #f4d6cd"></td>
<td><input type="button" onClick="iColor12()" style="background-color: #FFFFFF"></td>
</tr>
</table>
</div>

<script>
function iColor(){
	document.getElementById('textColor').hidden = false;
}
function coloseColor(){
	document.getElementById('textColor').hidden = true;
}
</script>
<!--=======================================Hilight Color==================================-->
		  
			<input type="button" value="Hilight Color" style=" width:8%">
		   
          <div class="mycolor" id="textColor" hidden="true">
<table>
<tr>
<td><input type="button" style="background-color:inherit"></td>
<td><input type="button" style="background-color: inherit"></td>
<td><input type="button"  style="background-color: inherit"></td>
<td><input type="button" onClick="coloseColor()" value="&times;" style="background-color: inherit"></td>
</tr>

<tr>
<td><input type="button" onClick="iColor1()" style="background-color: #000000"></td>
<td><input type="button" onClick="iColor2()" style="background-color: #b000ff"></td>
<td><input type="button" onClick="iColor3()" style="background-color: #a7664a"></td>
<td><input type="button" onClick="iColor4()" style="background-color: #2f2459"></td>
</tr>
<tr>
<td><input type="button" onClick="iColor5()" style="background-color: #005f0b"></td>
<td><input type="button" onClick="iColor6()" style="background-color: #bb1d1d"></td>
<td><input type="button" onClick="iColor7()" style="background-color: #ffa500"></td>
<td><input type="button" onClick="iColor8()" style="background-color: #5d99ff"></td>
</tr>
<tr>
<td><input type="button" onClick="iColor9()" style="background-color: #2f3c40"></td>
<td><input type="button" onClick="iColor10()" style="background-color: #2600AA"></td>
<td><input type="button" onClick="iColor11()" style="background-color: #f4d6cd"></td>
<td><input type="button" onClick="iColor12()" style="background-color: #FFFFFF"></td>
</tr>
</table>

</div>

		  <!--================================Reference===================================================-->
<script>
function Refenece(){
	document.getElementById('refe').hidden = false;
}
function referColose(){
	document.getElementById('refe').hidden = true;
}
</script>

<input type="button" value="Reference" onclick="Refenece()" style="width: 10%; background-color: #0bb5c6;">
<div class="refe1" id="refe" hidden="true">
<strong style=" margin-left:40%;">Reference</strong><input type="button" onClick="referColose()" value="&times;" id="closeR">

<div class="refe">

<table>
		<tr> 
			<td>Author Name:</td><td>*</td><td> <input type="text" id="a_name"></td> 
		</tr>
		
		<tr>
			<td>Author Address</td><td>*</td><td><input type="text" id="a_address"></td>
		</tr>
		
		<tr>
			<td>Publisher</td><td>*</td><td><input type="text" id="organization"></td>
		</tr>
		
		<tr>
			<td>Linke</td> <td>*</td> <td><input type="text" id="link" placeholder="https://"></td>
		</tr>
		
			<input type="hidden" value="<?php echo $_SESSION['un'];?>" id="username">

		<tr>
			<td>Date: </td><td>*</td><td><input type="datetime" name="mydate" id="mydate"></td>
		</tr>
		
		<tr>    
			<td><input type="button" onClick="aa()" name="submit" value="  Add  " ></td>
			<td></td>
		</tr>
	</table>

<div id="ref_list">
<?php
$query = "SELECT * FROM thesis_reference";
$result = mysql_query($query);
echo '<table>
		<tr>
			<th>Reference No</th>
			<th> Name/ Address</th>
			<th>Add Reference</th>
		</tr>';
	$no = 1;
while($row = mysql_fetch_array($result)){
	//echo "'<input type ='hidden' value = '".$row['no']."' id ='hayat'>";
	echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$row['name'].'</td>
			<td><button onClick="ref_btn('.$no.')">Add</button></td>
		</tr>
	';
	$no++;
}
echo '</table>';
?>
</div>

</div>
	
	</div>
	
<script>
function ReferenceType(){
	var rtry = document.getElementById('reference').value;
	document.getElementById('rtry').value = rtry;
}
	function ref_btn(x){
	//	alert(x);
	F_area.document.execCommand('InsertText',false,'['+x+']');
}
	
function delete_ref_btn(){
	var xmlhttp =new XMLHttpRequest();
	xmlhttp.open("GET","t_sub/thesis_reference.php",false);
	}
	
function aa(){
var xmlhttp =new XMLHttpRequest();
xmlhttp.open("GET","t_sub/thesis_reference.php?name="+document.getElementById("a_name").value+"&address="+document.getElementById("a_address").value+"&myorg="+document.getElementById("organization").value+"&link="+document.getElementById("link").value+"&mydate="+document.getElementById("mydate").value+"&username="+document.getElementById("username").value,false);xmlhttp.send(null);
document.getElementById("ref_list").innerHTML = xmlhttp.responseText;

document.getElementById("ref_list").innerHTML = xmlhttp.responseText;
}

//function ref_btn(){
//	var RNo = document.getElementById('ref_txt').value;
//	alert(RNo);
//}
function myrefer(){
var rr = document.getElementById('refe').value;
if(document.getElementById('refe').hidden == false){
document.getElementById('refe').hidden = true;

}else if(document.getElementById('refe').hidden == true){
document.getElementById('refe').hidden = false;
}}
function referColose(){
document.getElementById('refe').hidden = true;
}
</script>

<!--=======================End of reference ================================-->
	  
	  
		<!--  =======================headers=================================-->
	  
		  <form method="POST" id="myform" action="t_sub/ThesisInsertData.php">
		  
		  <select name="check_header" id="check_header" style="margin-top: -40px; float: right; margin-right: 40px"> 
			<option value=" ">Select Headers</option>
			<option value="1">First Header</option>
			<option value="2">Second Header</option>
			<option value="3">Third Header</option>
		  </select>

		  
		  <hr style="background-color: #066d77;">
		  </div><br>
          <div class="mybody" style="margin-top:10%">
          
  <!--         =================================Sider========================-->
           <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
  <?php 
			   if(isset($_GET['id'])){
				   $idd = $_GET['id'];
	  $sql1 = "select * from checker.thesis_body1 where username = '".$idd."'";
      $result1 = mysql_query($sql1);
            while($row = mysql_fetch_array($result1)){
				echo('hayat');
			}
				   
			   }else{
      $sql = "select * from checker.thesis_body1 where username = '".$_SESSION['un']."'";
      $result = mysql_query($sql);
            while($row = mysql_fetch_array($result)){
				 $chapter =$row['chapter'];
				 $header1 = $row['header1'];
				 $header2 = $row['header2'];
				 $header3 = $row['header3'];
				 $content = $row['content'];
				 $headerID = $row['id'];
				//if($header1 != NULL){
					$update = "UPDATE thesis_body1 header1 = '".$header1."' where chapter = '".$chapter."'";
					$query = mysql_query($update);
					?>
                   <textarea id='hid1' hidden='true'><?php if($header1=='NULL'){}else{ echo $content;}?></textarea>
					<?php
				 if($header2 != NULL){
					$update = "UPDATE thesis_body1 header12= '".$header2."' where chapter = '".$header2."'";
					$query = mysql_query($update);
					?>
                   <textarea id='hid2' hidden='true'><?php if($header1=='NULL'){}else{  echo $content;}?></textarea>
					<?php
				}
				else if($header3 != NULL){
					$update = "UPDATE thesis_body1 header3 = '".$header3."' where chapter = '".$header3."'";
					$query = mysql_query($update);
					?>
                   <textarea id='hid3' hidden='true'><?php if($header1=='NULL'){}else{  echo $content;}?></textarea>
					<?php
				}
				?>
<script>
function myli1(){
document.getElementById('li').style.height ="35";
//document.getElementById('li').hidden = false;
}
function myh1(){
var a = document.getElementById('hid1').value;
var doc = document.getElementById('F_area').contentWindow.document;
doc.open();
doc.write(a);
doc.close();
}
function myh2(){
var b = document.getElementById('hid2').value;
var doc = document.getElementById('F_area').contentWindow.document;
doc.open();
doc.write(b);
doc.close();
}
function myh3(){
var c = document.getElementById('hid3').value;
var doc = document.getElementById('F_area').contentWindow.document;
doc.open();
doc.write(c);
doc.close();
}
</script>
<details>
<summary onClick="ShowHs()"><?php echo $chapter; ?></summary>
                
				<?php echo "<samp class='setH' id='setH1' onClick='myh1()'><a href='checkID.php' style='height:20px; font-size:12px;' href='checkID.php?id=".$row['id']."'>".$header1."</a></samp>"; 
				
				echo "<samp class='setH' id='setH2' onClick='myh2()'><a href ='checkID.php?id= ".$row['id']."'>".$header2."</a></samp>"; 
				
				echo "<samp class='setH' id='setH3' onClick='myh3()'><a>".$header3."</a></samp>"; ?>
</details>
		   
				<?php	
			}}
  ?>
  </div>
  <span style="font-size:20px;cursor:pointer;" onclick="openNav()">&#9776; Update</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
<!--  ========================end of sider===================================-->
             
          <div class="save_option" style=" margin-left:19%"><input placeholder="Chapter" name="chepter" id="chepter" type="text" style="width:25%" maxlength="40">
          <input placeholder="Hearder" name="header" id="header" type="text" style="width:25%" maxlength="40">
		  </div>
		  <div class="area" id="mytt">   
		  <textarea name="myTextArea" id="myTextArea" onclick="myfunction();"></textarea>
		  <iframe name="F_area" id="F_area" enctype="multipart/form-data"></iframe>
		  </div><hr>
				   <div class="footer">
		  <input name="mybtn" type="button" onclick="View();" value="View"/> <script>function View(){  window.open("t_sub/thesis_view.php", "toolbar=no,scrollbars=yes,resizable=no,top=500,left=500,width=750,height=800"); } </script>
					   <br>
		  <input type="submit" value="Save" name="save" onClick="javascript:submit_form();" style=" margin-top: -20px; margin-left: 450px; position: absolute;"/>                           
          <input type="submit" value="Update" name="update" style=" margin-top: -20px; margin-left: 230px; position: absolute;"/>
			   </div>
			  
		   </form>
	
		  
			   </div>
		  </body>
		   </html>
       