<?php 
if(isset($_GET['id'])){
		echo $id = $_GET['id'];
		header('location:thesis_contents.php?=id'.$id);
	}
?>