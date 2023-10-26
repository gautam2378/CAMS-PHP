<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{
      if(isset($_POST['submit']))
  {

 $name=$_POST['name'];
 $mobilenumber=$_POST['mobilenumber'];
 $email=$_POST['email'];
 $comadd=$_POST['comadd'];
 $qualification=$_POST['qualification'];
 $achivement=$_POST['achivement'];
 $desc=$_POST['desc'];
 $timg=$_FILES["timage"]["name"];

$extension1 = substr($timg,strlen($timg)-4,strlen($timg));
$allowed_extensions1 = array(".jpg","jpeg",".png",".gif");

if(!in_array($extension1,$allowed_extensions1))
{
echo "<script>alert('Trainer image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

 $timg=md5($timg).time().$extension1;
 move_uploaded_file($_FILES["timage"]["tmp_name"],"images/".$timg);
$sql="insert into tblcoaches(Name,MobileNumber,Email,CommunicationAddress,Qualification,Achivement,Description,ProfilePics)values(:name,:mobilenumber,:email,:comadd,:qualification,:achivement,:desc,:timg)";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobilenumber',$mobilenumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':comadd',$comadd,PDO::PARAM_STR);
$query->bindParam(':qualification',$qualification,PDO::PARAM_STR);
$query->bindParam(':achivement',$achivement,PDO::PARAM_STR);
$query->bindParam(':desc',$desc,PDO::PARAM_STR);
$query->bindParam(':timg',$timg,PDO::PARAM_STR);
$query->execute();

   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Coach detail has been added.")</script>';
echo "<script>window.location.href ='add-coaches.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
} 
  ?>
<!DOCTYPE html>
<html>
<head>
 
  <title>Cricket Academy Management System | Add Coaches</title>
 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
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
            <h1>Add Coaches</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Coaches</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Coaches</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
               
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="name" value="" required='true'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                  <input type="text" class="form-control" name="mobilenumber" value="" required='true' maxlength="10" pattern="[0-9]+">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" name="email" value="" required='true'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Communication Address</label>
                   <textarea class="form-control" name="comadd" id="comadd"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification</label>
                   <textarea class="form-control" name="qualification" id="qualification"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Achivement</label>
                 <textarea class="form-control" name="achivement" id="achivement"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                 <textarea class="form-control" name="desc" id="desc"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Profile Pics</label>
                 <input type="file" class="form-control" name="timage" value="" required='true'>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <!--/.col (left) -->
  
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html><?php }  ?>
