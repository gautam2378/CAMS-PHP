<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uuid']==0)) {
  header('location:logout.php');
  } else{
     if(isset($_POST['submit']))
  {
    $uid=$_SESSION['uuid'];
    $fname=$_POST['fname'];
  $mobno=$_POST['mobilenumber'];
  $email=$_POST['email'];
  $sql="update tbluser set FullName=:fname,MobileNumber=:mobilenumber,Email=:email where ID=:uid";
     $query = $dbh->prepare($sql);
     $query->bindParam(':fname',$fname,PDO::PARAM_STR);
     $query->bindParam(':email',$email,PDO::PARAM_STR);
     $query->bindParam(':mobilenumber',$mobno,PDO::PARAM_STR);
     $query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();

        echo '<script>alert("Profile has been updated")</script>';
     

  }
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Profile</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
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
	<div class="header">
	<?php include_once('includes/header.php');?>
		<!--content-->
		<div class="container">
			<div class="contact">
			<div class="col-md-6 send-contact">
			<h4>Profile Details</h4>
			<form method="post">
				<?php
$uid=$_SESSION['uuid'];
$sql="SELECT * from  tbluser where ID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
				<div class="grid-contact">
					<div class="col-md-12 contact-left">
						<p class="your-para"> Full Name<span>*</span></p>
						<input type="text"  id="fname" name="fname" value="<?php  echo $row->FullName;?>" required='true'>
					</div>
					<div class="col-md-12 contact-left">
						<p class="your-para"> User Name <small>(Used for Login can't be chnaged)</small><span>*</span></p>
						<input type="text" id="username" name="username" value="<?php  echo $row->UserName;?>" readonly="true">
					</div>
					<div class="col-md-12 contact-left">
						<p class="your-para"> Email<span>*</span></p>
						<input type="text" id="email" name="email" value="<?php  echo $row->Email;?>" required='true'>
					</div>
					<div class="col-md-12 contact-left">
						<p class="your-para"> Contact Number<span>*</span></p>
						<input type="text" id="mobilenumber" name="mobilenumber" value="<?php  echo $row->MobileNumber;?>" required='true' maxlength='10'>
					</div>
					<div class="col-md-12 contact-left">
						<p class="your-para">Registration Date<span>*</span></p>
						<input type="text" id="" name="" value="<?php  echo $row->RegDate;?>" readonly="true">
					</div>
					<div class="clearfix"> </div>
				</div>
				
					
					<?php $cnt=$cnt+1;}} ?>
					<div class="send">
						<input type="submit" value="Update" name="submit">
					</div>
					<div class="clearfix"> </div>
			</form>
		 </div>

			<div class="clearfix"> </div>
</div>
</div>
		
		<!--content-->
<?php include_once('includes/footer.php');?>
		</body>
		</html><?php }  ?>