<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
    $userid=$_SESSION['detsuid'];
    $fullname=$_POST['fullname'];
  $mobno=$_POST['contactnumber'];

     $query=mysqli_query($con, "update tbluser set FullName ='$fullname', MobileNumber='$mobno' where ID='$userid'");
    if ($query) {
    $msg="User profile has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }

   
if (strlen($_SESSION['detsuid']==0)) {
	header('location:logout.php');
	} else{
  if(isset($_POST['submit']))
  {
  $userid=$_SESSION['detsuid'];
  $cpassword=md5($_POST['currentpassword']);
  $newpassword=md5($_POST['newpassword']);
  $query=mysqli_query($con,"select ID from tbluser where ID='$userid' and   Password='$cpassword'");
  $row=mysqli_fetch_array($query);
  if($row>0){
  $ret=mysqli_query($con,"update tbluser set Password='$newpassword' where ID='$userid'");
  $msg= "Your password successully changed"; 
  } 
  else {
  
  $msg="Your current password is wrong";
  }
  
  
  
  }

  ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> User Profile</title>
	
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<style>
html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 1em;
    line-height: 200px;
    width: 100%;
}
#parent{
    display: table;
    width: 100%;
    height: 100%;
}
#side{
    display: table-cell;
    width: 10%;
    background-color: #f5fffa;
}
#main{
    display: table-cell;
    width: 90%;
    background-color: #f5fffa;
}
</style>

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include_once('includes/head2.php');?>
	<div id="parent">
       <div id="side"><?php include_once('includes/sidetry.php');?></div>
       <div id="main"> 
	
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Profile</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							 <?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from tbluser where ID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<form role="form" method="post" action="">
								<div class="form-group">
									<label>Full Name</label>
									<input class="form-control" type="text" value="<?php  echo $row['FullName'];?>" name="fullname" required="true">
								</div>
								<div class="form-group">
									<label>Email</label>
<input type="email" class="form-control" name="email" value="<?php  echo $row['Email'];?>" required="true" readonly="true">
								</div>
								
								<div class="form-group">
									<label>Mobile Number</label>
									<input class="form-control" type="text" value="<?php  echo $row['MobileNumber'];?>" required="true" name="contactnumber" maxlength="10">
								</div>
								<div class="form-group">
									<label>Registration Date</label>
									<input class="form-control" name="regdate" type="text" value="<?php  echo $row['RegDate'];?>" readonly="true">
								</div>
								
								<div class="form-group has-success">
									<button type="submit" style="position: initial; width:140px;" class="btn btn-primary" name="submit">Update</button>
								</div>
								
								
								</div>
								<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
	
			<br><br>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Change Password</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Change Password</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
							 <?php
$userid=$_SESSION['detsuid'];
$ret=mysqli_query($con,"select * from tbluser where ID='$userid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
							<form role="form" method="post" action="" name="changepassword" onsubmit="return checkpass();">
								<div class="form-group">
									<label>Current Password</label>
									<input type="password" name="currentpassword" class=" form-control" required= "true" value="">
								</div>
								<div class="form-group">
									<label>New Password</label>
									<input type="password" name="newpassword" class="form-control" value="" required="true">
								</div>
								
								<div class="form-group">
									<label>Confirm Password</label>
									<input type="password" name="confirmpassword" class="form-control" value="" required="true">
								</div>
								
								<div class="form-group has-success">
									<button type="submit" style="position: initial; width:140px;" class="btn btn-primary" name="submit">Change</button>
								</div>
								
								
								</div>
								<?php } ?>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
		</div><!-- /.row -->
	</div><!--/.main-->
		</div><!-- /.row -->
	</div><!--/.main-->
	</div>
	   </div>
	   <?php include_once('includes/footer.php');?>
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
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
</body>
</html>
<?php }  ?>
<?php }  ?>