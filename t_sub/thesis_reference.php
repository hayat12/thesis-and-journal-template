<?php 
include'../connect.php';

$query1 = "SELECT * FROM thesis_reference";
$result1 = mysql_query($query1);
$row1 = mysql_fetch_array($result1);
$no = $row1['no'];

$name = $_GET['name'];
$a_address = $_GET['address'];
$ornanization = $_GET['myorg'];
$link = $_GET['link'];
$mydate = $_GET['mydate'];
$total =1;
$total+= $no;
$style = '';
$username = $_GET['username'];
mysql_query ("INSERT INTO thesis_reference VALUES ('','$username', '$name','$a_address','$ornanization','$link','$mydate',$total,'$style')");

$query = "SELECT * FROM thesis_reference";
$result = mysql_query($query);
echo '<table>
		<tr>
			<th>Reference No</th>
			<th> Name/ Address</th>
			<th>Add Reference</th>
		</tr>';
$num =1;
while($row = mysql_fetch_array($result)){
	echo '
		<tr>
			<td>'.$num.'</td>
			<td>'.$row['name'].'</td>
			<td><button onClick="ref_btn('.$num.')">Add</button></td>
		</tr>
	';$num++;
}
echo '</table>';
?>