<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uuid']==0)) {
  header('location:logout.php');
  } else{
     
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | View Registration Details</title>
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
			<div class="col-md-12 send-contact">
			<h4>Registration Details</h4>
			 <?php
                  
                  $regno=$_GET['regno'];

$sql="SELECT tbluser.ID, tbluser.FullName,tbluser.UserName,tbluser.MobileNumber,tbluser.Email,tblregistration.ID as rid,tblregistration.UserID,tblregistration.RegistrationNumber,tblregistration.PlayerName,tblregistration.Duration,tblregistration.Category,tblregistration.Nationality,tblregistration.FatherName,tblregistration.MotherName,tblregistration.DateofBirth,tblregistration.Sex,tblregistration.GuardianMobilenumber,tblregistration.Residentlandlinenumber,tblregistration.Emailid,tblregistration.Height,tblregistration.ResidentAddress,tblregistration.District,tblregistration.State,tblregistration.Pincode,tblregistration.Weight,tblregistration.Tshirtsize,tblregistration.Level,tblregistration.BowlingArm,tblregistration.BowlingPace,tblregistration.WicketKeeping,tblregistration.Batting,tblregistration.FirstPreference,tblregistration.CaptancyExperience,tblregistration.Photo,tblregistration.RegistrationDate,tblregistration.Remark,tblregistration.UpdationDate,tblregistration.Status,tblfees.ID,tblfees.Duration,tblfees.NumberofSession,tblfees.Fees,tblfees.CreationDate from tblregistration join tbluser on tbluser.ID=tblregistration.UserID left join tblfees on tblfees.ID=tblregistration.Duration where tblregistration.RegistrationNumber=:regno";
$query = $dbh -> prepare($sql);
$query-> bindParam(':regno', $regno, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                            <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                              <tr>
  <th colspan="4" style="color: red;font-weight: bold;text-align: center;font-size: 20px"> Registration Number: <?php echo $row->RegistrationNumber;?></th>
</tr>
<tr>
  <th colspan="4" style="color: blue;font-weight: bold;font-size: 15px"> Registered User Detail:</th>
</tr>
<tr>
    <th>Full Name</th>
    <td><?php  echo $row->FullName;?></td>
   
  </tr>
  <tr>
   <th>Mobile Number</th>
    <td><?php  echo $row->MobileNumber;?></td>
</tr>
  <tr>
   <th>Email</th>
    <td><?php  echo $row->Email;?></td></tr>
    <tr>
   
  
  <tr>
   <th>User Name</th>
    <td><?php  echo $row->UserName;?></td></tr>
    <tr>
    <th>Registration Date</th>
    <td><?php  echo $row->RegistrationDate;?></td>
  </tr>
 </table>
 <br />
 <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
    <tr>
  <th colspan="4" style="color: blue;font-weight: bold;font-size: 15px"> Registration Detail:</th>
</tr>
<tr>
    <th>Name of Player</th>
    <td><?php  echo $row->PlayerName;?></td>

    <th>Player Photo</th>
    <td><img src="images/<?php echo $row->Photo;?>" width="100" height="100" value="<?php  echo $row->Photo;?>"></td>
  </tr>
 
 <tr>
    
    <th>Category for Playing</th>
    <td><?php  echo $row->Category;?></td>
   
    <th>Nationality</th>
    <td><?php  echo $row->Nationality;?></td>
  </tr>

    <tr>
    <th>Father's Name</th>
    <td><?php  echo $row->FatherName;?></td>
    <th>Mother's Name</th>
    <td><?php  echo $row->MotherName;?></td>
  </tr>
<tr>
    <th>Date of Birth</th>
    <td><?php  echo $row->DateofBirth;?></td>
    <th>Sex</th>
    <td><?php  echo $row->Sex;?></td>
  </tr>
   
    <tr>
    <th>Guardian Mobile Number</th>
    <td><?php  echo $row->GuardianMobilenumber;?></td>
    <th>Resident landline Number</th>
    <td><?php  echo $row->Residentlandlinenumber;?></td>
  </tr>

  <tr>
 <th>Email ID</th>
    <td><?php  echo $row->Emailid;?></td>
    <th>Player Height</th>
    <td><?php  echo $row->Height;?></td>
  </tr>
<tr>
 <th>Resident Address</th>
    <td><?php  echo $row->ResidentAddress;?></td>
    <th>District</th>
    <td><?php  echo $row->District;?></td>
  </tr>
  <tr>
 <th>State</th>
    <td><?php  echo $row->State;?></td>
    <th>Pincode</th>
    <td><?php  echo $row->Pincode;?></td>
  </tr>
  <tr>
 <th>Player Weight</th>
    <td><?php  echo $row->Weight;?></td>
    <th>T-shirt Size</th>
    <td><?php  echo $row->Tshirtsize;?></td>
  </tr>
  <tr>
 <th>Level</th>
    <td><?php  echo $row->Level;?></td>
    <th>Bowling Arm</th>
    <td><?php  echo $row->BowlingArm;?></td>
  </tr>
  <tr>
 <th>Bowling Pace</th>
    <td><?php  echo $row->BowlingPace;?></td>
    <th>Wicket Keeping</th>
    <td><?php  echo $row->WicketKeeping;?></td>
  </tr>
  <tr>
 <th>Batting</th>
    <td><?php  echo $row->Batting;?></td>
    <th>First Preference</th>
    <td><?php  echo $row->FirstPreference;?></td>
  </tr>
  <tr>
 <th>Captancy Experience</th>
    <td><?php  echo $row->CaptancyExperience;?></td>
    <th>Registration Date</th>
    <td><?php  echo $row->RegistrationDate;?></td>
  </tr>
 
</table>
  <br />
  <table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
   <tr>
  <th colspan="4" style="color: blue;font-weight: bold;font-size: 15px"> Admin Remarks:</th>
</tr>
  
  <tr>
    
     <th>Final Status</th>

    <td> <?php  $status=$row->Status;
    
if($row->Status=="Approved")
{
  echo "Your registration has been approved";
}

if($row->Status=="Cancelled")
{
 echo "Your registration has been cancelled";
}


if($row->Status=="")
{
  echo "Not Response Yet";
}


     ;?></td></tr>
     <tr>
     <th >Admin Remark</th>
    <?php if($row->Status==""){ ?>

                     <td><?php echo "Not Updated Yet"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row->Status);?>
                  </td>
                  <?php } ?>
  </tr>
  
 
<?php $cnt=$cnt+1;}} ?>

</table> 
<?php 

if ($status=='Approved'){
?>
<table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
  <tr>
  <th colspan="4" style="color: blue;font-weight: bold;font-size: 15px"> Fees Detail:</th>
</tr>
  <tr>

 <th>Duration</th>
    <td><?php  echo $row->Duration;?></td>
   
  </tr>
  <tr>
    <th>Number of Session</th>
    <td colspan="4"><?php  echo $row->NumberofSession;?></td>
  </tr>
  <tr>
  <th>Fees</th>
    <td>Rs <?php  echo $row->Fees;?></td></tr>
  </table><?php } ?>
		 </div>

			<div class="clearfix"> </div>
</div>
</div>
		
		<!--content-->
<?php include_once('includes/footer.php');?>
		</body>
		</html><?php }  ?>