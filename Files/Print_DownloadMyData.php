 <?php 
session_start();
include("../connect.php");
    if(isset($_POST['delete']) AND isset($_POST['checkbox2'])){
		$delete2 = "DELETE FROM journal WHERE username = '".$_SESSION['un']."'";
		$jqd =mysql_query($delete2) or die(mysql_error());
	if($delete2){
			$deleteSMS_Journal = "Succefully Deleted";
			header("location:../Download_Print.php? deleteSMS_Journal= ".$deleteSMS_Journal);
		}
    }
    else if(isset($_POST['delete']) AND isset($_POST['checkbox1'])){
		$delete = "DELETE FROM thesis WHERE username = '".$_SESSION['un']."'";
		$jqd =mysql_query($delete) or die(mysql_error());
		$delete2 = "DELETE FROM thesis_body1 WHERE username = '".$_SESSION['un']."'";
		mysql_query($delete2) or die(mysql_error());
		$delete3 = "DELETE FROM thesis_reference WHERE username = '".$_SESSION['un']."'";
		mysql_query($delete3) or die(mysql_error());
		if($delete AND $delete2 AND $delete3){
			$deleteSMS_thesis = "Succefully Deleted";
			header("location:../Download_Print.php? deleteSMS_thesis= ".$deleteSMS_thesis);
		}else{
			$NotExist_SMS_thesis = "Thesis does not exist";
			header("location:../Download_Print.php? NotExist_SMS_thesis= ".$NotExist_SMS_thesis);
		}
    }
    else if(isset($_POST['printme']) AND isset($_POST['checkbox1'])){
		header('location:../t_sub/thesis_view.php');
	}
	else if(isset($_POST['printme']) AND isset($_POST['checkbox2'])){
		header('location:../j_sub/j_view.php');
	}
	else{
		$CheckSMS = 'Please select the article';
		header("location:../Download_Print.php? checkSMS= ".$CheckSMS);}
		?>