<html>
<?php
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
include_once "connect.php";
?>
<head>
<script type="text/javascript" src="js.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body onload="iFrameOn();">
<link type="text/css" rel="stylesheet" href="css/file_style.css">
<link type="text/css" rel="stylesheet" href="css/pop_up.css">
<link type="text/css" rel="stylesheet"  href="css/journale_refer.css">
<div class="options">
<?php include'tab.php';?>
<input type="button" name="save" onclick="save" style="background-image: url(images/save.png);">
<input type="button" name="newpage" onclick="edit()" style="background-image: url(images/edit.gif);">
<input type="button" name="find" onclick="search()"style="background-image: url(images/find.png);">
<input type="button" name="eq" onclick="symbole()" style="background-image: url(images/specialchar.png);">
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
<?php 
	$r_select = "SELECT * FROM j_reference  WHERE  username = '".$_SESSION['un']."' ORDER BY no DESC";
	$r_query = mysql_query($r_select);
	$r_row = mysql_fetch_array($r_query);
	$no = $r_row['no'];
	$_SESSION["last_ref"] = $no;
?>
<script>function iPast(){

F_area.document.execCommand('InsertText',false,'[<?php echo isset($_SESSION["last_ref"])?$_SESSION["last_ref"]:$no;?>]');
}
</script>

	<?php 
		$updateContents = "SELECT * FROM journal  WHERE  username = '".$_SESSION['un']."'";
		$UpdateQuery = mysql_query($updateContents);
		while($Uprow = mysql_fetch_array($UpdateQuery)){
		$Upcontent= $Uprow['content'];
	?>
<textarea id="hid" hidden="true"><?php echo $Upcontent;?></textarea>
<script>
	function edit(){
			var x = document.getElementById('hid').value;
			var doc = document.getElementById('F_area').contentWindow.document;
			doc.open();
			doc.write(x);
			doc.close();
		}
	</script>

	<?php }
		if(isset($_POST['update'])){
			$upcontent = $_POST['myTextArea'];
			$MyUpdate = "UPDATE journal SET content = '".$upcontent."' WHERE username = '".$_SESSION['un']."'";
			$UpQuery = mysql_query($MyUpdate)or die(mysql_error());
		if($UpQuery){
		@header("location:refresh.php");

		}}
	?>
<!--            ==================== Table  ======================-->

<input type="button" id="tb" onClick="Showtb()" style="background-image: url(images/inserttable.png);">

<div class="Pop" id="Poptb" hidden="true">
<input type="button" value="&times;" onClick="closePop()" class="pclose">
<h2 class="phead">Table</h2>
<table>
<tr><td>Table Name </td> <td>*</td> <th colspan="4"><input type="text" id="mytable"></th></tr>
<tr><td>Rows </td> <td>*</td> <td><input type="number"></td>
<td>Columuns </td> <td>*</td> <td><input type="number"></td></tr>
<tr><td>Height: </td> <td></td> <td><input type="number"></td>
<td>Width:</td> <td></td> <td><input type="number"></td></tr>
<tr><th colspan="3"> <input type="button" onChange="table()" onclick="Table();" value="Add Table" style="width:30%;"></th></tr>

</table>

</div>
<script>

function Table(){
	alert('working');
	var xmlhttp =new XMLHttpRequest();
xmlhttp.open("GET","j_sub/JournalTable.php?name="+document.getElementById("TBname").value+"&username="+document.getElementById("TBusername").value,false);
xmlhttp.send(null);
document.getElementById("d1").innerHTML = xmlhttp.responseText;
	
	
	var ifr = document.getElementById('F_area');
    ifr.src='javascript:"<table id = "tt"><tr><td>hayat</td></tr></table>"';
	
//F_area.document.execCommand('InsertTable', false, mytr);

}
</script>

<!--=================== Image =====================-->

<input type="button" name="iImage()" onclick="showimg()" style="background-image: url(images/image.png);">

<div class="Pop" id="Popimg" hidden="true">
	<input type="button" value="&times;" onClick="closePop()" class="pclose">
	<h2 class="phead">Image</h2>
	<table>
		<tr><td>Image:</td> <td>*</td> <td><input type="file" id="myfile" name="myfile"></td></tr>
		<tr><td>Name: </td> <td>*</td> <td><input id="IMGname" type="text"></td></tr>
		<tr><td>Height: </td> <td></td> <td><input type="number"></td></tr>
		<tr><td>Width:</td> <td></td> <td><input type="number"></td></tr>
		<tr><th colspan="3"><input id="img" type="button" name="Image" onclick="image()" value="Add Image"></th></tr>
		<input type="hidden" value="<?php echo $_SESSION['un'];?>" id="IMGusername">
	</table>
	<p id="d1"></p>
</div>
<script>
function image(){	
    var xmlhttp =new XMLHttpRequest();
	
	xmlhttp.open("GET","j_sub/Inser_IMG.php?img_name="	+document.getElementById("IMGname").value+"&myfile="+document.getElementById("myfile").value+"&username="+document.getElementById("IMGusername").value,false);
	xmlhttp.send(null);
    document.getElementById("d1").innerHTML = xmlhttp.responseText;
//var img0 = document.getElementById('fsize').value;
var img = prompt('insert image','');
F_area.document.execCommand('insertImage',false,img);
	var imgName = document.getElementById('IMGname').value;
F_area.document.execCommand('insertText',false,'\n'+imgName);
}
</script>
<!--  ================================================Video=================================-->

<!--input type="button" name="iVideo" onclick="showvid()" style="background-image: url(images/video.png);">

<div class="Pop" id="Popvid" hidden="true">
<input type="button" value="&times;" onClick="closePop()" class="pclose">
<h2 class="phead">Video</h2>
<table>
<tr><td>Image:</td> <td>*</td> <td><input type="file" id="myfile"></td></tr>
<tr><td>Name: </td> <td>*</td> <td><input type="text"></td></tr>
<tr><td>Height: </td> <td></td> <td><input type="number"></td></tr>
<tr><td>Width:</td> <td></td> <td><input type="number"></td></tr>
<tr><th colspan="3"><input type="button" name="iVideo" onclick="iVideo()" value="Add Video"></th></tr>
</table>
</div>-->
<!--===================================================-->
<select id="fonts" class="g-button" onChange="iFonts()">
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
	
	//font Style 
function iFonts(){
var font = document.getElementById('fonts').value;
F_area.document.execCommand('FontName', false,font);
}
	
function header(){
document.getElementById('headers').hidden = false;
}
function colseHead(){
document.getElementById('headers').hidden = true; 
}
function Colorfun(){
document.getElementById('textColor').hidden = false;
}
function coloseColor(){
document.getElementById('textColor').hidden = true; 
}

</script>
<input type="button" onClick="header()" value="Headers" style="width:6%;"> 

<select name="font_size" id="FZise" onChange="FontZise()"> 
<option>Font Size</option>
<option value="1">10</option>
<option value="2">11</option>
<option value="3">12</option>
<option value="4">13</option>
<option value="5">14</option>
<option value="6">15</option>
<option value="7">16</option>
</select>

<input type="button" onClick="Colorfun()" value=" Color " style="width: 8%; background-color: #0bb5c6;">

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


<select onclick = "iBackcolor()"> 
<option>Highlight color</option>
</select>
<!--================================Reference===================================================-->

<input type="button" value="Reference" onclick="myrefer()" style="width: 10%; background-color: #0bb5c6;">
<div class="refe1" id="refe" hidden="true">
<strong style=" margin-left:40%;">Reference</strong><input type="button" onClick="referColose()" value="&times;" id="closeR">
<div class="refe">
<table>
	<tr> 
		<td>Author Name:</td><td>*</td><td> <input type="text" name="a_name" id="a_name"></td> 
	</tr>
	<tr>
		<td>Author Address</td><td>*</td><td><input type="text" name="a_address" id="a_address"></td>
	</tr>
	<tr>
		<td>Organization</td><td>*</td><td><input type="text" name="organization" id="organization"></td>
	</tr>
	<tr> 
		<td>Email</td><td>*</td><td><input type="text" name="email" id="email"></td> 
	</tr>
	<tr>
		<td>Linke</td> 
		<td>*</td> 
		<td><input type="text" name="link" id="link" placeholder="https://"></td>
	</tr>
	<input type="hidden" value="<?php echo $_SESSION['un'];?>" id="username" name="username">
	<tr><td>Date: </td><td>*</td><td><input type="date" name="mydate" id="mydate"></td></tr>
	<tr>    
	<td><input type="button" onClick="aa();" name="submit" value="  Add  " ></td>
	<td></td>
	</tr>
</table>
<div id="ref_list">
	<?php
		$query = "SELECT * FROM j_reference";
		$result = mysql_query($query);
		echo '<table>
				<tr>
					<th>Reference No</th>
					<th> Name/ Address</th>
					<th>Add Reference</th>
				</tr>';
	$in=1;
		while($row = mysql_fetch_array($result)){
			echo '
				<tr>
					<td>'.$in.'</td>
					<td>'.$row['a_name'].'</td>
					<td><button onClick="ref_btn('.$in.')">+</button></td>
				</tr>
			';$in++;
		}
		echo '</table>';
	?>
</div>
</div>
</div>
<script src="js/jquery-3.1.1.min.js"></script>
	<!--<form method="POST" id="myform">-->
	<script>
		function ref_btn(x){
			F_area.document.execCommand('InsertText',false,'['+x+']');
		}
		function delete_ref_btn(){
			var xmlhttp =new XMLHttpRequest();
			xmlhttp.open("GET","j_sub/deleteReference.php",false);
			}

		function aa(){
			var xmlhttp =new XMLHttpRequest();
			xmlhttp.open("GET","j_sub/JournalReference.php? a_name="+document.getElementById("a_name").value
			+"&a_address="+document.getElementById("a_address").value
			+"&organization="+document.getElementById("organization").value
			+"&email="+document.getElementById("email").value
			+"&linke="+document.getElementById("link").value
			+"&mydate="+document.getElementById("mydate").value
			+"&username="+document.getElementById("username").value,false);
			xmlhttp.send(null);
			document.getElementById("ref_list").innerHTML = xmlhttp.responseText;
		}

		function myrefer(){
			if(document.getElementById('refe').hidden == false){
				document.getElementById('refe').hidden = true;
			}else if(document.getElementById('refe').hidden == true){
				document.getElementById('refe').hidden = false;
			}}
			function referColose(){
				document.getElementById('refe').hidden = true;
		}
	</script>


<!--====================================================================-->
<div class="headers" id="headers" hidden="true">
	<table>
		<tr>
			<td></td>
			<td><input type="button" onClick="colseHead()" style="background-color:inherit; float:right; border:none;" value="&times;"></td>
		</tr>
		<tr>
			<td><input type="button" onclick="iFontSize1()" style="background-color: #a7664a" value="Chapter "></td>
			<td><input type="button" onclick="iFontSize2()" style="background-color: #a7664a" value="Header 1"></td>
		</tr>
		<tr>
			<td><input type="button" onclick="iFontSize3()" style="background-color: #a7664a" value="Header 2"></td>
			<td><input type="button" onclick="iFontSize4()" style="background-color: #a7664a" value=" Header 3 "></td>
		</tr>
			<tr><th colspan="2"><input type="button" onclick="iFontSize4()" style="background-color: #a7664a" value=" Nornaml "></th>
		</tr>
	</table>
</div>
<!--   -----------------------------new-tab-show---------------------------------  -->
<hr style="background-color: #066d77;">

</div><br>
<form method="POST" id="myform" action="j_sub/CreatContents.php">

	<div class="mybody" style="margin-top:10%">
	<div class="area" id="mytt">   
			<textarea name="myTextArea" id="myTextArea" onclick="myfunction();"></textarea>
			<iframe name="F_area" id="F_area" enctype="multipart/form-data"></iframe>
	</div><hr>

	<div class="footer">
			<input name="mybtn" type="submit" onclick="View();" value="View"/> <script>function View(){  window.open("j_sub/j_view.php", "toolbar=no,scrollbars=yes,resizable=no,top=500,left=500,width=750,height=800"); } </script>					   <br>
			<input type="submit" value="Save" name="save" onClick="javascript:submit_form();" style=" margin-top: -20px; margin-left: 450px; position: absolute;"/>                           
			<input type="submit" value="update" name="update" onClick="javascript:submit_form();" style=" margin-top: -20px; margin-left: 230px; position: absolute;"/>
	</div>
	</form>
		
</body>
</html>
