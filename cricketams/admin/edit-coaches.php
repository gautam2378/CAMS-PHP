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
$eid=$_GET['editid'];
$sql="update tblcoaches set Name=:name,MobileNumber=:mobilenumber,Email=:email,CommunicationAddress=:comadd,Qualification=:qualification,Achivement=:achivement,Description=:desc where ID=:eid";
$query=$dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':mobilenumber',$mobilenumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':comadd',$comadd,PDO::PARAM_STR);
$query->bindParam(':qualification',$qualification,PDO::PARAM_STR);
$query->bindParam(':achivement',$achivement,PDO::PARAM_STR);
$query->bindParam(':desc',$desc,PDO::PARAM_STR);
$query->bindParam(':eid',$eid,PDO::PARAM_STR);
 $query->execute();
    echo '<script>alert("Coach detail has been updated")</script>';
    echo "<script>window.location.href ='manage-coaches.php'</script>";

  }
  ?>
 
<!DOCTYPE html>
<html>
<head>
 
  <title>Cricket Academy Management System | Update Coach</title>
 
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
            <h1>Update Class</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Coach</li>
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
                <h3 class="card-title">Coach</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" enctype="multipart/form-data">
               <?php
$eid=$_GET['editid'];
$sql="SELECT * from  tblcoaches where ID=$eid";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php  echo $row->Name;?>" required='true'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile Number</label>
                  <input type="text" class="form-control" name="mobilenumber" value="<?php  echo $row->MobileNumber;?>" required='true' maxlength="10" pattern="[0-9]+">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" name="email" value="<?php  echo $row->Email;?>" required='true'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Communication Address</label>
                   <textarea class="form-control" name="comadd" id="comadd" value=""><?php  echo $row->CommunicationAddress;?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Qualification</label>
                   <textarea class="form-control" name="qualification" id="qualification"><?php  echo $row->Qualification;?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Achivement</label>
                 <textarea class="form-control" name="achivement" id="achivement"><?php  echo $row->Achivement;?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                 <textarea class="form-control" name="desc" id="desc"><?php  echo $row->Description;?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Coach Profile Pics</label>
                 <img src="images/<?php echo $row->ProfilePics;?>" width="100" height="100" value="<?php  echo $row->ProfilePics;?>">
<a href="changeimage1.php?editid=<?php echo $row->ID;?>"> &nbsp; Edit Image</a>
                  </div>
                </div>

                <!-- /.card-body -->
<?php $cnt=$cnt+1;}} ?>    
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
