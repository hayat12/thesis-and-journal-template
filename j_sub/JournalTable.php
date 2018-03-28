<?php
$cont = mysql_connect("localhost","root","");
$mydb = mysql_select_db("checker");
$name = $_GET['name'];
$IMGusername = $_GET['username'];
$IMGid = "0001";
mysql_query ("INSERT INTO journal_video VALUES ('','$IMGusername','$IMGid','$name')");
echo "recored inserted !!!";
?>