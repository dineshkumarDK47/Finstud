<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid']==0)) {
  header('location:logout.php');
  } else{

  
}
  ?>
<!DOCTYPE html>
<html>
<head>
<style>
		html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 2em;
    line-height: 160px;
	margin: 0%;
	padding: 0%;
	width: 100%;
}
#parent{
    display: table;
    width: 100%;
    height: 100%;
}
#side{
    display: table-cell;
    background-color: #f5fffa;
}
#main{
    display: table-cell;
    width: 90%;
    background-color: #f5fffa;
}

</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Expense Tracker || Yearwise Expense Report</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	
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
				<li class="active">Yearwise Expense Report</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Yearwise Expense Report</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
						<div class="col-md-12">
					


							<form role="form" method="post" action="expense-yearwise-reports-detailed.php" name="bwdatesreport">
								<div class="form-group">
									<label>From Date</label>
									<input class="form-control" type="date"  id="fromdate" name="fromdate" required="true">
								</div>
								<div class="form-group">
									<label>To Date</label>
									<input class="form-control" type="date"  id="todate" name="todate" required="true">
								</div>
								
							
								
								<div class="form-group has-success">
									<button type="submit" style="position: initial; width:200px" class="btn btn-primary" name="submit">SUBMIT</button>
								</div>
								
								
								</div>
								
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			
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
	
</body>
</html>
