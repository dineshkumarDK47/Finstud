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
  <link href="css/support1.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap5.min.css" rel="stylesheet" type="text/css">
  <link href="css/helper.css" rel="stylesheet" type="text/css">
      <link href="css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/responsive.css" rel="stylesheet" type="text/css">
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">

  <style>
html,body{
    height: 100%;
   background-color: #ccffee;
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
#feedback{
   margin: 50px 30px 50px 10px;
  margin-right: 90px;
   background-color: #acf2e7;
   padding: 30px;
}
#feedback button{
   background-color: black;
   color: white;
   margin-left: 400px;
   padding: 20px;
}
#feedback button a{
   color: white;
}
.col-lg-4 col-sm-6 mt_30{
   border-style: solid;
  border-color: black;
  border-width: 15px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0,0,0,0.6);
  -moz-box-shadow: 0 0 20px rgba(0,0,0,0.6);
  -webkit-box-shadow: 0 0 20px rgba(0,0,0,0.6);
  -o-box-shadow: 0 0 20px rgba(0,0,0,0.6);
}
.dark-mode {
  background-color: black;
  color: white;
}
</style>

  
</head>

<body>
<?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main"> 
   
	
    <hr>
    <div id="move">
            <div class="slideshow">
                    <img class="mySlides"  src="assets/images/FINSTUD 2.png" width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/FINSTUD 1.png"width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/COINBASE.jpg"width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/features.png"width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/features-2.png"width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/features-3.png"width="100%" height="100%"/>
                    <img class="mySlides" src="assets/images/img-offer-4.jpg"width="100%" height="100%"/>
                   
           </div>
    </div>
           <script>
           var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
         <hr>
         <div id="poster">
             <img src="assets/images/FINSTUD 1.png" width="90%" height="800px"/>
         </div>   
         
<hr>
     <div id="det1">
          <!-- start trust area -->
          <div class="trust-area">
            <div class="container">
               <div class="section-title">
                  <p>Build trust first</p>
              <fontsize="15px"><h2>ONE TAP - FINSTUD</h2></fontsize>    
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="trust-box text-center">
                        <img src="assets/images/anchor.png" alt="anchor"/>
                        <h4>Complete business<br> Control</h4>
                        <p>which is a desirable goal but can be challenging to achieve.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="trust-box text-center">
                        <img src="assets/images/archive.png" alt="anchor"/>
                        <h4>Critical analytics<br> and report</h4>
                        <p>"Data is just data, unless you turn it into insights." </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="trust-box text-center">
                        <img src="assets/images/user.png" alt="anchor"/>
                        <h4>User satisfaction<br> guarranted</h4>
                        <p>Customer satisfaction is the foundation of business success </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end trust area -->
     </div>
     <div id="det2">
 <!-- start service area -->
 <div class="service-area" id="service">
            <div class="container">
               <div class="section-title">
                  <p>what we do</p>
                  <h2 style="font-size: 35px;">Service to solve all kinds of<br> financial problem</h2>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/grid.png" class="img-fluid" alt="grid"/>
                        </div>
                        <h4>live market values</h4>
                  
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/cart.png" class="img-fluid" alt="cart"/>
                        </div>
                        <h4>personal education Support</h4>
                       
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/camera.png" class="img-fluid" alt="camera"/>
                        </div>
                        <h4>live news</h4>
                       
                       
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/headphone.png" class="img-fluid" alt="headphone"/>
                        </div>
                        <h4>Realtime Support </h4>
                       
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/location.png" class="img-fluid" alt="location"/>
                        </div>
                        <h4>expense tracking</h4>
                       
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt_30">
                     <div class="service-box">
                        <div class="service_icon">
                           <img src="assets/images/file.png" class="img-fluid" alt="file"/>
                        </div>
                        <h4>market value analysis & prediction</h4>
                       
                        <a class="box-arrow" href="#">
                        <i class="fal fa-long-arrow-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end service area -->
     </div>
           
    
            <div class="slideshow-container">

                <div class="motivation">
                  <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                  <p class="author">- John Keats</p>
                </div>
                
                <div class="motivation">
                  <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                  <p class="author">- Ernest Hemingway</p>
                </div>
                
                <div class="motivation">
                  <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                  <p class="author">- Thomas A. Edison</p>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                
                </div>
            <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> 
                <span class="dot" onclick="currentSlide(3)"></span> 
              </div>
              
              <script>
              var slideIndex = 1;
              showSlides(slideIndex);
              
              function plusSlides(n) {
                showSlides(slideIndex += n);
              }
              
              function currentSlide(n) {
                showSlides(slideIndex = n);
              }
              
              function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("motivation");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
              }
              </script>
              <hr>
              <br>
      
              <script>
               function myFunction() {
  var element = document.body;
  element.classList.body("dark-mode");
}
               </script>
    <div id="feedback">
       <button><a href="https://us14.list-manage.com/survey?u=0c17e707a800559a7063a54ed&id=eb68da4bb6&attribution=false"> PROVIDE FEEDBACK </a></button>
    </div>   
</div>

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