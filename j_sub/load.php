<?php
 $con = mysql_connect('localhost','root','');
    mysql_select_db('checker');
	if(mysql_error($con)){echo "Not Connect";}else{
		$result = mysql_query('select * from j_reference');
	
			while($row = mysql_fetch_array($result)){
				echo '
				<tr>
					<th>'.$row['8'].'</th>
					<td><input type="button" value="Add Ref" onClick=""></td>
				</tr>
				';
			}
		
	}
?>