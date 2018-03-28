         <?php
          if(isset($_POST['submit'])){
include_once "../connect.php";
	  $level = $_POST['level'];
          $myname = $_POST['name'];
          $myemail = $_POST['email'];  
          $myuser = $_POST['user'];
		  $matric = $_POST['matric'];
		  $course = $_POST['course'];
		  $faculty = $_POST['faculty'];
	      $matric = $_POST['matric'];
		  $mypass = $_POST['pass'];
	      $re_pass = $_POST['re_pass'];
		   $_SESSION['un']=$myuser;
/*	
$name = $_FILES["myfile"]["name"];
$type = $_FILES["myfile"]["type"];
$size = $_FILES["myfile"]["size"];
$temp = $_FILES["myfile"]["tmp_name"];
$error = $_FILES["myfile"]["error"];
if($type == "image/png")
{
	move_uploaded_file($temp,"profile/".$name);
  
		  }*/
         //          ========= Hashed==============
              $mypassH = md5($mypass);
			  $re_mypassH = md5($re_pass);
         //          ========= Sql Enjection==============
          // $title = stripslashes($title);
		  if($mypassH != $re_mypassH OR empty($mypassH) AND empty($re_mypassH)){
			  $notmatchtedpass = "your password does not matched please try again";
			    header('location:../new_mem.php? notmatchtedpass= '.$notmatchtedpass);
		  }else{
          $select = "SELECT * FROM register1 WHERE user ='$myuser'"; 
          $result = mysql_query($select) or die(mysql_error());
          $rows= mysql_fetch_array($result);
          if($myuser==$rows['user']){
			  $exsituser = 'This username or password already registared';
              header("location:../new_mem.php? exsituser= ".$exsituser);
          }
		  else {
          $query = "insert into register1(name, matric, email, course, faculty,level,user, pass, re_pass)
		  values('$myname','$matric','$myemail','$course','$faculty',$level,'$myuser','$mypassH','$re_mypassH')";
          if(!empty($query)){
          $result = mysql_query($query,$con);
			  $sucess = "Succefully registared";
		  header("location:../new_mem.php? success= ".$sucess);
		  }}}}

          ?>