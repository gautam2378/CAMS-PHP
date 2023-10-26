<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
  if(isset($_POST['submit']))
  {
    $regno=$_GET['regno'];
    $status=$_POST['status'];
   $remark=$_POST['remark'];
$sql= "update tblregistration set Status=:status,Remark=:remark where RegistrationNumber=:regno";
$query=$dbh->prepare($sql);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->bindParam(':remark',$remark,PDO::PARAM_STR);
$query->bindParam(':regno',$regno,PDO::PARAM_STR);

 $query->execute();

  echo '<script>alert("Remark has been updated")</script>';
 echo "<script>window.location.href ='all-registration.php'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>

  <title>Cricket Academy Management System | View Registration Detail</title>
  <!-- Tell the browser to be responsive to screen width -->
  
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <?php include_once('includes/header.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include_once('includes/sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Registration Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">View Registration Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
             <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">
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
    <td><img src="../images/<?php echo $row->Photo;?>" width="100" height="100" value="<?php  echo $row->Photo;?>"></td>
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
    <th>Player Height (In inches)</th>
    <td><?php  echo $row->Height;?></td>
  </tr>
<tr>
   <th>Player Weight (In Kg)</th>
    <td><?php  echo $row->Weight;?></td>
 <th>Resident Address</th>
    <td><?php  echo $row->ResidentAddress;?></td>

  </tr>
  <tr>
        <th>District</th>
    <td><?php  echo $row->District;?></td>
 <th>State</th>
    <td><?php  echo $row->State;?></td>
    
  </tr>
  <tr>
<th>Pincode</th>
    <td><?php  echo $row->Pincode;?></td>
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
<br />
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
<?php 

if ($status==""){
?> 
<p align="center"  style="padding-top: 20px">                            
 <button class="btn btn-primary waves-effect waves-light w-lg" data-toggle="modal" data-target="#myModal">Take Action</button></p>  

<?php } ?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
      <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                 <table class="table table-bordered table-hover data-tables">
                                 <form method="post" name="submit">
                               
     <tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="Remark" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
  </tr> 
  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="Approved" selected="true">Approved</option>
     <option value="Cancelled">Cancelled</option>
   </select></td>
  </tr>
</table>
</div>
<div class="modal-footer">
 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 <button type="submit" name="submit" class="btn btn-primary">Update</button>
  </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include_once('includes/footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
<?php }  ?>