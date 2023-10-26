<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Passion+One:400,700,900' rel='stylesheet' type='text/css'>
<!--//fonts-->
 <script src="js/responsiveslides.min.js"></script>
 <script>
    // You can also use "$(window).load(function() {"
    $(function () {
      $("#slider2").responsiveSlides({
        auto: true,
        pager: true,
        speed: 300,
        namespace: "callbacks",
      });
    });
  </script>
</head>
<body> 
<!--header-->
	<?php include_once('includes/header.php');?>
		<!--banner-->
		 <div class="slider">
			<ul class="rslides" id="slider2">
			  <li><a href="#"><img src="images/ban.jpg" alt="">
			  <div class="banner">
			  <span class=" matter "> </span>
			  </div>
			  </a></li>
			  <li><a href="#"><img src="images/bb.jpg" alt="">
			   <div class="banner">
			  <span class=" matter"> </span>
			  </div>
			   </a></li>
			  <li><a href="#"><img src="images/ban.jpg" alt="">
				<div class="banner">
			  <span class="matter "> </span>
			  </div>
			  </a></li>
			   
			  </a></li>
			</ul>
		</div>
		
	<!--footer-->
<?php include_once('includes/footer.php');?>
		</body>
		</html>