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
           <?php include_once('edunav.php'); ?>
           <br>
            <center><h1>WHAT IS CRYPTOCURRENCY?</h1></center><br>
            <center><p>A cryptocurrency, crypto-currency, or crypto is a digital currency<br> designed to work as a medium of exchange through a computer network that<br> is not reliant on any central authority, such as a government or bank, to uphold or maintain it.</p><center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/1YyAzVmP9xQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             <br><br>
            <center><h1>WHAT IS BLOCKCHAIN?</h1></center><br>
            <center>
                <p>
                    A blockchain is a digitally distributed, decentralized, public ledger that exists across a network.<br>
                    It is most noteworthy in its use with cryptocurrencies   
                </p>
            </center>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/93E_GzvpMA0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <br>
         </div>
   </div>
   <?php include_once('includes/footer.php');?>
    </body>
</html>