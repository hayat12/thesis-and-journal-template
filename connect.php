<?php
$tbl_user_info = "register1";

$db_name = "checker";
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$con = mysql_connect($db_host, $db_username, $db_password)or die (mysql_error("can not connect to database"));
mysql_select_db($db_name) or die ("can not select from database");
?>