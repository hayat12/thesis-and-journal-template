<?php session_start();
if(session_destroy()) // Destroying All Sessions
?>
<html>
    <title>Thesis</title>
    <?php include "NewTab.html"
	?>
    <body background="general/logpic.jpg">
    
 <link rel="stylesheet" href="login/css/style.css" type="text/css"> 
  <div class="cont" style="margin-right:50%; margin-top:-4%;">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
        <div class="login__row">
        <form method="POST" action="check_login.php">
          <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
          </svg>
          <input type="text" class="login__input name" placeholder="Username" name="user"required/>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" class="login__input pass" placeholder="Password" name="pass" required/>
        </div>
        <button type="submit" name="submit" style=" background-color:#19C422; height:50px; width:180px; border-radius:12px; margin-top:2%; font-size:16px">Login</button>
        <div class="cont" style="height:30px; width:200px; font-size:14px; color:#F00408"><?php if(isset($_SESSION['error']))echo $_SESSION['error']?></div>
        <p class="login__signup"><a href="ForgetPP.php">Forget Password</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
    <script src="login/js/index.js"></script>
      
    </body>
</html>