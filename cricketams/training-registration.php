<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['uuid']==0)) {
  header('location:logout.php');
  } else{
     if(isset($_POST['submit']))
  {
    $uid=$_SESSION['uuid'];
    $category=$_POST['category'];
  $pname=$_POST['pname'];
  $duration=$_POST['duration'];
  $nationality=$_POST['nationality'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $dob=$_POST['dob'];
  $sex=$_POST['sex'];
  $gmobnum=$_POST['gmobnum'];
  $resllnum=$_POST['resllnum'];
  $emailid=$_POST['emailid'];
  $height=$_POST['height'];
  $residentadd=$_POST['residentadd'];
  $district=$_POST['district'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $weight=$_POST['weight'];
  $tshirtsize=$_POST['tshirtsize'];
  $level=$_POST['level'];
  $bowlingarm=$_POST['bowlingarm'];
  $bowlingpace=$_POST['bowlingpace'];
  $wicketkeeping=$_POST['wicketkeeping'];
  $batting=$_POST['batting'];
  $fpreference=$_POST['fpreference'];
  $capexperience=$_POST['capexperience'];
  $registnum=mt_rand(100000000, 999999999);
  $photo=$_FILES["photo"]["name"];
 $extension = substr($photo,strlen($photo)-4,strlen($photo));
 $allowed_extensions = array(".jpg","jpeg",".png",".gif");
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('photo has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$photo=md5($photo).time().$extension;
 move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".$photo);
  $sql="insert into tblregistration(UserID,RegistrationNumber,Duration,Category,PlayerName,Nationality,FatherName,MotherName,DateofBirth,Sex,GuardianMobilenumber,Residentlandlinenumber,Emailid,Height,ResidentAddress,District,State,Pincode,Weight,Tshirtsize,Level,BowlingArm,BowlingPace,WicketKeeping,Batting,FirstPreference,CaptancyExperience,Photo)values(:uid,:registnum,:duration,:category,:pname,:nationality,:fathername,:mothername,:dob,:sex,:gmobnum,:resllnum,:emailid,:height,:residentadd,:district,:state,:pincode,:weight,:tshirtsize,:level,:bowlingarm,:bowlingpace,:wicketkeeping,:batting,:fpreference,:capexperience,:photo)";
  $query=$dbh->prepare($sql);
$query->bindParam(':uid',$uid,PDO::PARAM_STR);
$query->bindParam(':registnum',$registnum,PDO::PARAM_STR);
$query->bindParam(':duration',$duration,PDO::PARAM_STR);
$query->bindParam(':category',$category,PDO::PARAM_STR);
$query->bindParam(':pname',$pname,PDO::PARAM_STR);
$query->bindParam(':nationality',$nationality,PDO::PARAM_STR);
$query->bindParam(':fathername',$fathername,PDO::PARAM_STR);
$query->bindParam(':mothername',$mothername,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);
$query->bindParam(':sex',$sex,PDO::PARAM_STR);
$query->bindParam(':gmobnum',$gmobnum,PDO::PARAM_STR);
$query->bindParam(':resllnum',$resllnum,PDO::PARAM_STR);
$query->bindParam(':emailid',$emailid,PDO::PARAM_STR);
$query->bindParam(':height',$height,PDO::PARAM_STR);
$query->bindParam(':residentadd',$residentadd,PDO::PARAM_STR);
$query->bindParam(':district',$district,PDO::PARAM_STR);
$query->bindParam(':state',$state,PDO::PARAM_STR);
$query->bindParam(':pincode',$pincode,PDO::PARAM_STR);
$query->bindParam(':weight',$weight,PDO::PARAM_STR);
$query->bindParam(':tshirtsize',$tshirtsize,PDO::PARAM_STR);
$query->bindParam(':level',$level,PDO::PARAM_STR);
$query->bindParam(':bowlingarm',$bowlingarm,PDO::PARAM_STR);
$query->bindParam(':bowlingpace',$bowlingpace,PDO::PARAM_STR);
$query->bindParam(':wicketkeeping',$wicketkeeping,PDO::PARAM_STR);
$query->bindParam(':batting',$batting,PDO::PARAM_STR);
$query->bindParam(':fpreference',$fpreference,PDO::PARAM_STR);
$query->bindParam(':capexperience',$capexperience,PDO::PARAM_STR);
$query->bindParam(':photo',$photo,PDO::PARAM_STR);
 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your training registration form has been submitted succeffuly.")</script>';
echo "<script>window.location.href ='training-registration.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}}
  ?>
<!DOCTYPE html>
<html>
<head>
<title>Cricket Academy Management System | Training Regitration Form</title>
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
		  	  <form method="post" enctype="multipart/form-data"> 
				 <div class="register-top-grid">
					<h3>Training Registration Form</h3>
					<div class="mation">
						<span> Training Duration</span>
						<select class="form-control" required="true" name="duration">
						
							<option value="">Choose Duration</option>
								<?php
						 
$sql="SELECT * from tblfees";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<option value="<?php echo $row->ID;?>"><?php echo $row->Duration;?></option>
							<?php $cnt=$cnt+1;}} ?>
						</select></div>
					<div class="mation">
						<span> Registration For Category</span>
						<select class="form-control" required="true" name="category">
							<option value="">Choose Category</option>
							<option value="Under 12">Under 12</option>
							<option value="Under 14">Under 14</option>
							<option value="Under 17">Under 17</option>
							<option value="Under 23">Under 23</option>
							<option value="Above 23">Above 23</option>
						</select></div>
						<div class="mation">
						 <span>Player Name</span>
						 <input type="text" class="form-control" placeholder="Enter player name" required="true" name="pname" value="" >
					</div>
					<div class="mation">
						<span> Nationality</span>
						<input type="text" class="form-control" placeholder="Enter Nationality" required="true" name="nationality"></div>
						<div class="mation">
						 <span>Father's Name</span>
						  <input type="text" class="form-control" placeholder="Enter Father's Name" required="true" name="fathername" value="" >
					</div>
					<div class="mation">
						<span> Mother's Name</span>
						<input type="text" class="form-control" placeholder="Enter Mother's Name" required="true" name="mothername" value="" ></div>
						<div class="mation">
						 <span>Date of Birth</span>
						  <input type="date" class="form-control" required="true" name="dob" value="" >
					</div>
					<div class="mation">
						<span> Sex</span>
						<select class="form-control" required="true" name="sex">
							<option value="">Choose Sex</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select></div>
						<div class="mation">
						<span>Guardian Mobile Number</span>
						<input type="text" class="form-control" placeholder="Enter Mobile Number" required="true" name="gmobnum" value="" maxlength="10" pattern="[0-9]{10}">
					</div>
					<div class="mation">
						<span> Residence Landline Number</span>
						<input type="text" class="form-control" placeholder="Enter landline Number" name="resllnum"  value="" maxlength="10" pattern="[0-9]{10}">
					
					</div>
					<div class="mation">
						<span> Email ID</span>
						<input type="email" class="form-control" placeholder="Enter email id" name="emailid" required="true" value="">
					
					</div>
					<div class="mation">
						<span> Height(inches)</span>
						<input type="text" class="form-control" placeholder="Enter height" name="height" required="true" value="">
					</div>

		<div class="mation">
						<span> Weight(Kg)</span>
						<input type="text" class="form-control" placeholder="Enter Weight" name="weight" required="true" value="">
					
					</div>

					
					<div class="mation">
						<span> Resident Address</span>
						<textarea  class="form-control" name="residentadd" required="true"></textarea>
					</div>
					<div class="mation">
						<span> District</span>
						<input type="text" class="form-control" placeholder="Enter District" name="district" required="true" value="">
					
					</div>
					<div class="mation">
						<span> State</span>
						<input type="text" class="form-control" placeholder="Enter State" name="state" required="true" value="">
					
					</div>
					<div class="mation">
						<span> Pincode</span>
						<input type="text" class="form-control" placeholder="Enter Pincode" name="pincode" required="true" value="">
					
					</div>
			
					
<div class="mation">
					<span>T-Shirt Size</span>
						<select class="form-control" required="true" name="tshirtsize">
							<option value="">Choose T-Shirt Size</option>
							<option value="Male">Small</option>
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>
						</select></div>


						<h3 style="color: blue;">About Your Game</h3>
						<br>
						<div class="mation">
					<span>Level</span>
						<select class="form-control" required="true" name="level">
							<option value="">Choose Level</option>
							<option value="Club Level">Club Level</option>
							<option value="School Level">School Level</option>
							<option value="Causal">Causal</option>
							<option value="Locality">Locality</option>
						</select></div>

						<div class="mation">
					<span>Bowling Arm</span>
						<select class="form-control" required="true" name="bowlingarm">
							<option value="">Choose Bowling Arm</option>
							<option value="Left">Left</option>
							<option value="Right">Right</option>
							<option value="Both">Both</option>
						
						</select></div>
						<div class="mation">
					<span>Bowling Pace</span>
						<select class="form-control" required="true" name="bowlingpace">
							<option value="">Choose Bowling Pace</option>
							<option value="Medium">Medium</option>
							<option value="Off Spinner">Off Spinner</option>
							<option value="Leg Spinner">Leg Spinner</option>
						
						</select></div>
						<div class="mation">
						<span> Wicket Keeping</span>
						<input type="radio"  name="wicketkeeping" value="Yes">Yes
						<input type="radio" name="wicketkeeping" value="No">No
					
					</div>

					<div class="mation">
						<span> Batting</span>
						<input type="radio"  name="batting" value="Left">Left
						<input type="radio" name="batting" value="Right">Right
					
					</div>
					<div class="mation">
						<span> First Preference</span>
						<input type="radio"  name="fpreference" value="Batting">Batting
						<input type="radio" name="fpreference" value="Bowling">Bowling
					
					</div>
					<div class="mation">
						<span> Captancy Experience</span>
						<input type="radio"  name="capexperience" value="Yes">Yes
						<input type="radio" name="capexperience" value="No">No
					
					</div>
						<div class="mation">
						<span> Player Photo</span>
						<input type="file" class="form-control" name="photo" required="true" value="">
					
					</div>
					 <div class="clearfix"> </div>
					   
						 <button type="submit" class="btn btn-primary" name="submit">Submit</button>
					  
					 </div>
				    
				</form>
				<div class="clearfix"> </div>
</div>
</div>	
		<!--content-->
	<!--footer-->
	<?php include_once('includes/footer.php');?>
		</body>
		</html><?php }  ?>