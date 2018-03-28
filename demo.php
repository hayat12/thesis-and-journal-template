
<html>
<head>
<?php include "connect.php";
$select = "select * from register1";
$qq = mysql_query($select);
while($row = mysql_fetch_array($qq)){
	echo $row[1]."<br>";
	echo $row[2]."<br>";
	echo $row[3]."<br>";
	echo $row[4]."<br>";
	echo $row[5]."<br>";
	echo $row[6]."<br>";
}
?>
</head>
<body>
 <input type = "button" onClick="setContent()" value="getContent"/>
  <div id="divId"></div>
</body>

</html>

<!-- end snippet -->

