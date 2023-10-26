<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Cricket Coach</title>
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
		<!--content-->
		
		<!----start-gallery---->
		<div id="gal" class="gallery">
			<div class="container">
				
				<div class="gallery-grids">
					<div class="gallery-grids-row1">
						<div class="order-content">
					<h3>Coach Details</h3>
					<?php

$sql="SELECT * from  tblcoaches";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
					<div class="container">
						<img class="img-responsive order-left" src="admin/images/<?php echo $row->ProfilePics;?>" height="200" width="200" alt=" " />
						<div class="inner-gear">
							<h5><?php echo $row->Name;?></h5>
							<p><strong>Achivement:</strong> <?php echo $row->Achivement;?>.</p>
					
							<p><strong>Qualification:</strong> <?php echo $row->Qualification;?></p>
							<p><strong>Description: </strong><?php echo $row->Description;?></p>
							
						</div>
						<div class="clearfix"> </div>
				</div>
		</div><hr>
					<?php $cnt=$cnt+1;}} ?>
						
					</div>
					
				
				</div>
			
			</div>
		</div>
		<!----//End-gallery---->
		<!--content-->
	<!--footer-->
	<div class="footer">
		<div class="container">
		
			<div class="foter-bottom">			
				 <p class="footer-grid">Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
				<div class=" nav-top">				
					<ul>
						<li class="active" ><a href="index.html" class="scroll">Home</a></li>
						<li><a href="about.html" class="scroll"> About</a></li>
						<li><a href="teams.html" class="scroll">Team</a></li>					
						<li><a href="services.html" class="scroll">Services</a></li>
						<li><a href="sports.html" class="scroll">Sports </a></li>
						<li><a href="contact.html" class="scroll">Contact</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			</div>
		</body>
		</html>