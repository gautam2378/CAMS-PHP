<div class="header">
    <div class="header-top">
      <div class="container">
      <p class="header-para">Cricket Academy Management System</p>
      <?php if (strlen($_SESSION['uuid']==0)) {?>
        <ul class="sign">
          <li ><a href="signup.php" >SIGN UP</a></li>||
          <li ><a href="signin.php" >LOGIN</a></li> ||
          <li><a href="admin/login.php" >Admin</a></li>    
        </ul><?php } ?>
        <?php if (strlen($_SESSION['uuid']!=0)) {?>
        <ul class="sign">
          <li ><a href="profile.php" >Profile</a></li>||
          <li ><a href="setting.php" >Setting</a></li>||
          <li ><a href="logout.php" >Logout</a></li>
          <li><a href="#" ></a></li>    
        </ul><?php } ?>
      </div>
      <div class="clearfix"> </div>
  </div>
  <div class="header-bottom-top">
    <div class="container">
     
      <div class="clearfix"> </div>
      <div class="header-bottom">     
        <div class="logo">
          <a href="index.php"><img src="images/log.png" alt=" " width="100" height="100" /><strong style="color: white;">Cricket Academy Management System</strong></a>
        </div>
        <div class="top-nav">
          <span class="menu"> </span>
          <ul>
            <li class="active" ><a href="index.php" class="scroll">Home</a></li>
            <li><a href="about.php" class="scroll"> About</a></li>
            <li><a href="coach.php" class="scroll">Coach</a></li>
            <li><a href="contact.php" class="scroll">Contact</a></li>
            <li><a href="training-registration.php" class="scroll">Registration</a></li>
            <?php if (strlen($_SESSION['uuid']!=0)) {?>
            <li><a href="registration-history.php" class="scroll">Registration History</a></li><?php } ?>
          </ul>
          <!--script-->
        <script>
          $("span.menu").click(function(){
            $(".top-nav ul").slideToggle(500, function(){
            });
          });
      </script>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    </div>
  </div>