<?php
session_start();
if(isset($_SESSION['un'])){
}else{
header("location:index.php");
}
include_once "../connect.php";

$name = $_GET['a_name'];
$a_address = $_GET['a_address'];
$ornanization = $_GET['organization'];
$email = $_GET['email'];
$link = $_GET['linke'];
$mydate = $_GET['mydate'];
$no = 1;
//$total += $no;
$style = '';
$username = $_GET['username'];
$name = $_GET['a_name'];
$city = $_GET['a_address'];
mysql_query ("INSERT INTO j_reference VALUES ('','$username', '$name','$a_address','$ornanization','$email','$link','$mydate',$no,'$style')");
$query = "SELECT * FROM j_reference";
$result = mysql_query($query);
echo '<table>
		<tr>
			<th>Reference No</th>
			<th> Name/ Address</th>
			<th>Add Reference</th>
		</tr>';
$num = 1;
while($row = mysql_fetch_array($result)){
	echo '
		<tr>
			<td>'.$num.'</td>
			<td>'.$row['a_name'].'</td>
			<td><button onClick="ref_btn('.$num.')">+</button></td>
		</tr>
	';$num++;
}
echo '</table>';
?>