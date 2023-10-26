<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['submit']))
  {
    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $mobno=$_POST['mobno'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $ret="select Email,UserName from tbluser where Email=:email || UserName=:uname";
    $query= $dbh -> prepare($ret);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':uname',$uname,PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() == 0)
{
$sql="Insert Into tbluser(FullName,UserName,MobileNumber,Email,Password)Values(:fname,:uname,:mobno,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':uname',$uname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobno',$mobno,PDO::PARAM_INT);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{

echo "<script>alert('You have successfully registered with us');</script>";
}
else
{

echo "<script>alert('Something went wrong.Please try again');</script>";
}
}
 else
{

echo "<script>alert('Email-id already exist. Please try again');</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Signup</title>
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
<?php include_once('includes/header.php');?>
		<!--content-->
		<div class="container">
			<div class="register">
		  	  <form method="post"> 
				 <div class="register-top-grid">
					<h3>Register with us</h3>
					<div class="mation">
						<span> Full Name</span>
						<input type="text" class="form-control" placeholder="Enter your name" required="true" name="fname" value="" >
						 <span>User Name <small>(used for login)</small></span>
						 <input type="text" class="form-control" placeholder="Enter user name" required="true" name="uname" value="" >
		

						<span> Mobile Number</span>
						<input type="text" class="form-control" placeholder="Enter your Mobile Number" required="true" name="mobno" value="" maxlength="10" pattern="[0-9]{10}">
						
						 <span>Email Address</span>
						  <input type="email" class="form-control" placeholder="Enter your email id" required="true" name="email" value="" >
				
						<span> Password</span>
						<input type="password" class="form-control" placeholder="Password" name="password" required="true" value="">
					
					</div>
					 <div class="clearfix"> </div>
					   
						 <button type="submit" class="btn btn-primary" name="submit">Signup</button>
					  
					 </div>
				    
				</form>
				<div class="clearfix"> </div>
</div>
</div>	
		<!--content-->
	<!--footer-->
	<?php include_once('includes/footer.php');?>
		</body>
		</html>