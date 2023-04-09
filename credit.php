<?php
session_start();
include('includes/dbconnection.php');
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/home.css">

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    </head>
    <body>
    <?php include_once('includes/head2.php');?>

   <div id="parent">
       <div id="side"><?php include_once('includes/sidetry2.php');?></div>
       <div id="main"> 
           <br>
           <?php include_once('edunav.php');?>
           <br>
           <center>
                 <center><h1>WHAT IS CREDIT CARD?</h1></center><br>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/krxH8XidOHk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <center><h1>HOW TO EARN FROM IT</h1></center><br>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/vhaA2rAoBLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 <center><h1>TYPES OF CARDS</h1></center><br>
                 <iframe width="560" height="315" src="https://www.youtube.com/embed/qGEcQaAvRbw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </center>
           

       </div>
   </div>
   <?php include_once('includes/footer.php');?>
    </body>
</html>