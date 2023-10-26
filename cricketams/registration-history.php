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
			<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Registration Number</th>
                    <th>Registered By</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Player Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $uid=$_SESSION['uuid'];
$sql="SELECT tbluser.ID, tbluser.FullName,tbluser.UserName,tbluser.MobileNumber,tbluser.Email,tblregistration.ID as rid,tblregistration.UserID,tblregistration.RegistrationNumber,tblregistration.PlayerName,tblregistration.Status from tblregistration join tbluser on tbluser.ID=tblregistration.UserID where tblregistration.UserID=:uid";
$query = $dbh -> prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                  <tr>
                    <td><?php echo htmlentities($cnt);?></td>
                    <td><?php  echo htmlentities($row->RegistrationNumber);?></td>
                    <td><?php  echo htmlentities($row->FullName);?>
                    </td>
                    <td><?php  echo htmlentities($row->Email);?></td>
                    <td> <?php  echo htmlentities($row->MobileNumber);?></td>
                    <td> <?php  echo htmlentities($row->PlayerName);?></td>
                    <?php if($row->Status==""){ ?>

                     <td><?php echo "Not Updated Yet"; ?></td>
<?php } else { ?>
                                        <td>
                                            <span class="badge badge-primary"><?php  echo htmlentities($row->Status);?></span>
                                        </td>
<?php } ?> 
                    <td><a href="view-registration-detail.php?regno=<?php echo htmlentities ($row->RegistrationNumber);?>" class="btn btn-primary">View</a></td>
                  </tr>
                  </tbody><?php $cnt=$cnt+1;}} ?> 
                  <tfoot>
                 <tr>
                    <th>S.No</th>
                    <th>Registration Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Player Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
		 </div>

			<div class="clearfix"> </div>
</div>
</div>
		
		<!--content-->
<?php include_once('includes/footer.php');?>
		</body>
		</html><?php }  ?>