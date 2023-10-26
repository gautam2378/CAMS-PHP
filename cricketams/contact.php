<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);


 if(isset($_POST['submit']))
  {


 $fname=$_POST['fname'];
  $lname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

$sql="insert into tblcontact(FirstName,LastName,MobileNumber,Email,Message)values(:fname,:lname,:phone,:email,:message)";
$query=$dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':lname',$lname,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
 $query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
   echo "<script>alert('Your message was sent successfully!.');</script>";
echo "<script>window.location.href ='contact.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Contact Us</title>
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
			<h4>Send us message</h4>
			<form method="post">
				<div class="grid-contact">
					<div class="col-md-6 contact-left">
						<p class="your-para"> First Name<span>*</span></p>
						<input type="text" placeholder="First Name"  name="fname" required="true">
					</div>
					<div class="col-md-6 contact-left">
						<p class="your-para"> Last Name<span>*</span></p>
						<input type="text" placeholder="Last Name" name="lname" required="true">
					</div>
					<div class="col-md-6 contact-left">
						<p class="your-para"> Email address<span>*</span></p>
						<input type="text" name="email" required="true" placeholder="Your Email">
					</div>
					<div class="col-md-6 contact-left">
						<p class="your-para"> Phone Number<span>*</span></p>
						<input type="text" placeholder="Phone Number" name="phone" required="true" maxlength="10" pattern="[0-9]+">
					</div>
					<div class="clearfix"> </div>
				</div>
				
					<p class="message-para">Message<span>*</span></p>
					<textarea cols="77" rows="6" value=" " placeholder="Message" name="message" required="true"></textarea>
					<div class="send">
						<input type="submit" value="send" name="submit">
					</div>
					<div class="clearfix"> </div>
			</form>
		 </div>
		 <div class="col-md-6 send-contact">
			<h4>Get in touch</h4>
			<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
			<div class="con-info">
						<h3>Visit the Cricket Academy</h3>
						<ul>
							<li><i class="material-icons"></i><?php  echo htmlentities($row->PageDescription);?></li>
						</ul>
					</div>

<div class="con-info">
						<h3>Message Us</h3>
						<ul>
							<li><i class="material-icons"></i><?php  echo htmlentities($row->MobileNumber);?></li>
							<li><i class="material-icons"></i><?php  echo htmlentities($row->Email);?></li>
						</ul>
					</div>
					<div class="con-info">
						<h3>Opening Hours</h3>
						<ul>
							<li><i class="material-icons"></i><?php  echo htmlentities($row->OpenningTime);?></li>
							
						</ul>
					</div>
					<?php $cnt=$cnt+1;}} ?>
		</div>
			<div class="clearfix"> </div>
</div>
</div>
		
		<!--content-->
<?php include_once('includes/footer.php');?>
		</body>
		</html>