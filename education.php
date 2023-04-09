<?php
session_start();
header("Refresh:120");
include('includes/dbconnection.php');
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 2em;
    line-height: 200px;
}
#parent{
    display: table;
    width: 100%;
    height: 100%;
}
#side{
    display: table-cell;
    width: 20%;
    background-color: #f5fffa;
}
#main{
    display: table-cell;
    width: 80%;
    background-color: #f5fffa;
}

</style>
    </head>
    <body>
    <body>
      
      <?php include_once('includes/head2.php');?>
  
  <div id="parent">
      <div id="side"><?php include_once('includes/sidetry2.php');?></div>
      <div id="main"> 
<br>
<?php include_once('edunav.php'); ?>

<br>
<div ">
    <img src="assets/images/FINSTUD LEARNING POINT.png" style="position: relative; width:95%; height:700px;"/>
</div>

      </div>
  </div>
  <?php include_once('includes/footer.php'); ?>

</body>
    </html>