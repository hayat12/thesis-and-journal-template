    <html>
    <head>
    <?php 
    session_start();
    if(isset($_SESSION['un'])){}
    else{header('location:index.php');}
    ?>
    
        <link rel="stylesheet" href="tab/mytab.css">
        <link type="text/css" rel="stylesheet" href="tab/pro.css">
        <link media="all" type="text/css" rel="stylesheet" href="tab/mytab.css">
        <link href="tab/css1.css" rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link type="text/css" rel="stylesheet" href="css/home_style.css">
        <!--Inspiration from: https://dribbble.com/shots/1428271-iOS7-Challenge-App-->
    </head>
    <body>
    
        <div class="container-fluid" style="height: 90%;">
        
            <div class="row">
            <?php
            include 'tab.php';
    include_once("connect.php");  
    
    $sql = "select * from checker.register1 where user = '".$_SESSION['un']."'";
    $result = mysql_query($sql);
    while($row = mysql_fetch_array($result)){
    ?>
    <div class="col-md-3 col-sm-3 sidebar2" style="margin-top:-1.5%;">
    
    <div class="logo text-center">
    
    <img src="image_profile/<?php ?>" style="height:20%; width:30%; border-radius:45%;">
    <h4><?php echo $row['name'];?>.</h4>
    <p class="coins"><?php echo $row['matric'];}?>.</p>
    
    <div style="width: 140px; margin-left: 30%">
    	<i class="fa fa-rocket" aria-hidden="true"><label class="btn btn-default Add-friend"><input type="file" style="visibility: hidden"> Upload Image </label></i> 
    </div>

    </div>
                    <br>
                    <div class="left-navigation" style=" background-color:#131111;">
                        <ul class="list">
								<li onclick="openCity1()"> <i class="fa fa-safari" aria-hidden="true"></i><a href="MyProfile.php">My Profile</a></li>
								<li onclick="openCity2()"><i class="fa fa-thumbs-up" aria-hidden="true"></i><a href="UpdateProfile.php">Update Profile</a></li>
								<li onclick="openCity3()"><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="ChangePassword.php">Change Password</a></li>
								<li onclick="openCity4()"><i class="fa fa-trophy" aria-hidden="true"></i><a href="Download_Print.php">Downlaod/ Print</a></li>
								<li onclick="openCity5()"><i class="fa fa-certificate" aria-hidden="true"></i><a href="UploadNewFile.php">Upload New File</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
    </body>
    </html>