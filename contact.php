<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FINSTUD</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <link href="assets/images/favicon.png" rel="icon">
  <link href="assets/images/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="css/style3.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="css/support1.css"/>
        <script src="https://kit.fontawesome.com/5ba5ab412f.js" crossorigin="anonymous"></script>
  <meta content="" name="keywords">
  <link href="css/style5.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap5.min.css" rel="stylesheet" type="text/css">
  <link href="css/helper.css" rel="stylesheet" type="text/css">
      <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/responsive.css" rel="stylesheet" type="text/css">
  <style>
html,body{
    height: 100%;
   background-color: #87ceeb;
    font-size: 1em;
    line-height: 150px;
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
#poster img{
  border-style: solid;
  border-color: black;
  border-width: 15px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0,0,0,0.6);
-moz-box-shadow: 0 0 20px rgba(0,0,0,0.6);
-webkit-box-shadow: 0 0 20px rgba(0,0,0,0.6);
-o-box-shadow: 0 0 20px rgba(0,0,0,0.6);
}
#det1 p{
font-size:20px;
}
#det1 h4 {
   font-size: 15px;
}
#det1{
   margin-right: 180px;
   margin-left: 0px;
   margin-bottom: 10px;
}
#det2{
   margin-right: 180px;
   margin-left: 0px;
   margin-bottom: 10px;
}
#det2 p{
font-size:20px;
}
#det2 h4 {
   font-size: 15px;
}
</style>

</head>

<body>
<?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main"> 

    <section id="contact" class="contact">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Contact</h2>
    <p>Contact Us</p>
  </header>

  <div class="row gy-4">

    <div class="col-lg-6">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>Brahmapuram, vellore<br>India - 632014</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+91 6380043725<br>+91 7871863323</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>Finofficial@gmail.com<br>dineshr15grey@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info-box">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>Monday - Friday<br>5:00PM - 9:00PM</p>
            <p>Saturday - Sunday<br>12:00PM - 9:00PM</p>
          </div>
        </div>
      </div>

    </div>

    <div class="col-lg-6">
      <form action="forms/contact.php" method="post" class="php-email-form">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="col-md-6 ">
            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
          </div>

          <div class="col-md-12">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
          </div>

          <div class="col-md-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
          </div>

          <div class="col-md-12 text-center">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>

            <button type="submit">Send Message</button>
          </div>

        </div>
      </form>

    </div>

  </div>

</div>

</section>
</div>
</div>
<?php include_once('includes/footer.php');?>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src='js/anime.min.js'></script>
		<script src='js/pieces.min.js'></script>
		<script src='js/demo.js'></script>

</body>

</html>

