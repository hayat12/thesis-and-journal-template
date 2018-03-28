
        <?php
		session_start();
		 if(isset($_SESSION['un'])){
		  }else{
			  header("location:index.php");
		  }
include_once "connect.php";
?>  
<html>
<div style="position:fixed; width:100%;"><?php include_once 'tab.php';?></div><br>
    <body>
    <link rel="stylesheet" type="text/css" href="css/file_style.css">
     
    <!--    <div style="width:15%; margin-left:2%; margin-top:10%; position:fixed;">
   <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Thesis User Guide</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body"> Thesis </div>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Journal User Guide</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"> Journal </div>
    </div>
  </div>

</div>
</div>--> 

<div class="IMG_Guide">

<div class="img_titleimages">
<h1 align="center"><strong>User Guide</strong></h1>
<h2 align="center">Login</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/login.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Update Profile </h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/update pro.png"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Change Password </h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/changePass.PNG"></div></div><p></p>


<div class="img_titleimages">
<h2 align="center">Print ot Download The Articles</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/print.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Create New Jouranl</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/creat New Journal.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Edit Journal</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/edit Journal.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Manage Journal AUthor</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/Manage author.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Journal Contents</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/journal Contents.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Manage Journal Contnets</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/addUpdate Journal.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Thesis Hard Cover </h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/create Thesis.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Edit Thesis Hard Cover </h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/editThesis.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Journal Cover</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/thesis_contents.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Update Thesis Contents </h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/update thesis contents.PNG"></div></div><p></p>

<div class="img_titleimages">
<h2 align="center">Add Thesis Contents</h2>
<div class=""><img height="55%" width="95%" src="User_Guide_Imges/thesis add apdate.PNG"></div></div><p></p>

</div>
    </body>
</html>

