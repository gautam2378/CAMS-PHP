<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);
if (strlen($_SESSION['uuid']==0)) {
  header('location:logout.php');
  } else{
if(isset($_POST['submit']))
{
$uid=$_SESSION['uuid'];
$cpassword=md5($_POST['currentpassword']);
$newpassword=md5($_POST['newpassword']);
$sql ="SELECT ID FROM tbluser WHERE ID=:uid and Password=:cpassword";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uid', $uid, PDO::PARAM_STR);
$query-> bindParam(':cpassword', $cpassword, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);

if($query -> rowCount() > 0)
{
$con="update tbluser set Password=:newpassword where ID=:uid";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':uid', $uid, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();

echo '<script>alert("Your password successully changed")</script>';
} else {
echo '<script>alert("Your current password is wrong")</script>';

}



}

  
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Change Password </title>
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
  <script type="text/javascript">
function checkpass()
{
if(document.changepassword.newpassword.value!=document.changepassword.confirmpassword.value)
{
alert('New Password and Confirm Password field does not match');
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}   

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
			<h4>Change Password</h4>
			<form method="post" onsubmit="return checkpass();" name="changepassword">
				
				<div class="grid-contact">
					<div class="col-md-12 contact-left">
						<p class="your-para"> Current Password<span>*</span></p>
						<input type="password" class="form-control" name="currentpassword" id="currentpassword"required='true'>
					</div>
					<br>
					<div class="col-md-12 contact-left" style="padding-top: 20px;">
						<p class="your-para"> New Password<span>*</span></p>
						<input type="password" class="form-control" name="newpassword"  class="form-control" required="true">
					</div>
					<br>
					<div class="col-md-12 contact-left" style="padding-top: 20px;">
						<p class="your-para"> Confirm Password<span>*</span></p>
						<input type="password" class="form-control"  name="confirmpassword" id="confirmpassword"  required='true'>
					</div>
					
					<div class="clearfix"> </div>
				</div>
				<br>
				
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