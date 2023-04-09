<?php
session_start();
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> Index</title>
  <meta content="" name="description">
  <link rel="stylesheet" type="text/css" href="css/support1.css"/>
        <script src="https://kit.fontawesome.com/5ba5ab412f.js" crossorigin="anonymous"></script>
  <meta content="" name="keywords">
  
  <style>
html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 2em;
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
<?php include_once('includes/head3.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry.php');?></div>
    <div id="main"> 
   <div id="img1">
       <img src="assets/images/apt1.jpg" />
   </div>
   <div id="img2">
       <img src="assets/images/apt2.jpg" />
   </div>
   <br><br>
   <a link href="https://finstud.mailchimpsites.com/book-online/" target="_self"> CLICK HERE TO BOOK APPOINMENT</a>
    </div>
</div>
<?php include_once('includes/footer.php');?>
</body>
</html>
   