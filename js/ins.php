<?php 
$cont = mysql_connect("localhost","root","");
$mydb = mysql_select_db("checker");
$name = $_GET['img_name'];
$IMGusername = $_GET['username'];
$IMGid = "0001";
$rr = mysql_query ("SELECT * FROM `register1` WHERE `user` = '1132430'");
while($row = mysql_fetch_array($rr)){
	echo $row[3];
}
?>