  <div class="footer">
    <div class="container">
    
      <div class="foter-bottom">      
         <p class="footer-grid">Cricket Academy Management System</a> </p>
        <div class=" nav-top">        
          <ul>
            <li class="active" ><a href="index.php" class="scroll">Home</a></li>
            <li><a href="about.php" class="scroll"> About</a></li>
            <li><a href="coach.php" class="scroll">Coach</a></li>
            <li><a href="contact.php" class="scroll">Contact</a></li>
            <li><a href="training-registration.php" class="scroll">Registration</a></li>
            <?php if (strlen($_SESSION['uuid']!=0)) {?>
            <li><a href="registration-history.php" class="scroll">Registration History</a></li><?php } ?>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
      </div>