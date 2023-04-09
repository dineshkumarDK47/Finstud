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
  <link href="css/style5.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap5.min.css" rel="stylesheet" type="text/css">
  <link href="css/helper.css" rel="stylesheet" type="text/css">
      <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/responsive.css" rel="stylesheet" type="text/css">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">

      <link href="css/style3.css" rel="stylesheet">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <style>
html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 1em;
    line-height: 150px;
    width: 100%;
}
#mc_embed_signup{
    background:#fff;
     clear:left; 
     margin-top: 150px;
     font:14px Helvetica,Arial,sans-serif;
       width:600px;}
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
#feedback{
   margin: 40px 40px 50px 10px;
   background-color: lightseagreen;
   padding: 60px;
}
#feedback button{
   background-color: black;
   color: white;
   margin-left: 400px;
   padding: 50px;
}
#feedback button a{
   color: white;
}
</style>
</head>
<body>
<?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main"> 
<!-- ======= Services Section ======= -->
<section id="services" class="services">

<div class="container" data-aos="fade-up">

  <header class="section-header" style="position: static;">
    <h2>Services</h2>
    <p>MAKE A STOP AT ONE DESTINATION </p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200" >
      <div class="service-box blue">
        <i class="ri-discuss-line icon"></i>
        <h3>BUDGET TRACKER</h3>
        <p>TRACK YOUR INCOME AND EXPENSE EASILY WITH FINSTUD </p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
      <div class="service-box orange">
        <i class="ri-discuss-line icon"></i>
        <h3>LIVE NEWS</h3>
        <p>24*7 ALERT NEWS ABOUT FINANCIAL STATEMENT ACROSS GLOBE</p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
      <div class="service-box green">
        <i class="ri-discuss-line icon"></i>
        <h3>INVESTMENT ANALYSIS</h3>
        <p>WE BE HERE CHOICING YOU THE BEST INVESTMENT FOR YOU</p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
      <div class="service-box red">
        <i class="ri-discuss-line icon"></i>
        <h3>EDUCATION </h3>
        <p>LEARN ABOUT ALL FINANCIAL AND DIGITAL CHAIN HERE TO BUILD KNOWLEDGE</p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
      <div class="service-box purple">
        <i class="ri-discuss-line icon"></i>
        <h3>TAX CALCULATOR</h3>
        <p> MAKE A SMART WAY TO CALCULATE YOUR ALL CALCULATIONS</p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
      <div class="service-box pink">
        <i class="ri-discuss-line icon"></i>
        <h3>FUTURE CRYPTO</h3>
        <p>ALL ABOUT BLOCKCHAIN AND CRYPTO WORLD </p>
        <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>

  </div>

</div>

</section><!-- End Services Section -->

    </div>
</div>
<?php include_once('includes/footer.php');?>

 <!-- Vendor JS Files -->
 <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>
</html>