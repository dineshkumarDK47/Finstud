<?php
session_start();
include('includes/dbconnection.php');
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
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
    width: 10%;
    background-color: #f5fffa;
}
#main{
    display: table-cell;
    width: 90%;
    background-color: #f5fffa;
}
#parent2{
    display: table;
    width: 100%;
    height: 100%;
}
#side1{
    display: table-cell;
    width: 40%;
    background-color: #f5fffa;
    left: 30%;
}
#side2{
    display: table-cell;
    width: 60%;
    background-color: #f5fffa;
}
#calc{
    margin-left: 10%;
}
#calcimg{
    margin-left: 25%;

}
#calcimg img{
border-radius: 20px;
border-width: 5px;
border-style: solid;
}
</style>
    </head>
    <body>
      
    <?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main">
        <br><br><br>
        <div id="calcimg">
            <img src="assets/images/FINSTUD 18 IN 1 CALCULATOR.png" width="700" height="300" alt="">
            <div style="width:40%;height:0;padding-bottom:20%;position:relative;">
            <iframe src="https://giphy.com/embed/4W1TiR55poT3ONPffO" width="70%" height="50%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen>
            </iframe>
        </div><p><a href=""></a></p>
        </div>
        <br><br>
        <div id="calc">

        <iframe src="https://app.calconic.com/api/embed/calculator/64047df5f5bc80001e6bff61" sandbox="allow-same-origin allow-forms allow-scripts allow-top-navigation allow-popups-to-escape-sandbox allow-popups" title="Calconic_ Calculator" name="Calconic_ Calculator" height="354px" scrolling="no" style="width: 80%; border: 0; outline: none;"></iframe>
<script>
  (function() {
    window.addEventListener("message",function(t){
      var e="https://www.paypalobjects.com/api/checkout.4.0.141.js";
      if(!document.querySelector('script[src="'+e+'"]')&&t.data&&"LOAD_PAYPAL"===t.data.action){
      var a=document.createElement("script");a.src=e,a.async=!0,a.dataset={paypalCheckout:!0,noBridge:!0,state:"ppxo_meta",env:"production"},document.body.append(a)
      }if(t.data&&"CALCONIC_UPDATE_HEIGHT"===t.data.action){
      var s=document.querySelector('iframe[src="https://app.calconic.com/api/embed/calculator/'+t.data.payload.id+'"]');
      if(s){s.height=t.data.payload.height}}
    });
  })();
</script>


        <iframe src="https://app.calconic.com/api/embed/calculator/64047bbbf5bc80001e6bff57" sandbox="allow-same-origin allow-forms allow-scripts allow-top-navigation allow-popups-to-escape-sandbox allow-popups" title="Calconic_ Calculator" name="Calconic_ Calculator" height="500px" scrolling="no" style="width: 80%; border: 0; outline: none;"></iframe>
<script>
  (function() {
    window.addEventListener("message",function(t){
      var e="https://www.paypalobjects.com/api/checkout.4.0.141.js";
      if(!document.querySelector('script[src="'+e+'"]')&&t.data&&"LOAD_PAYPAL"===t.data.action){
      var a=document.createElement("script");a.src=e,a.async=!0,a.dataset={paypalCheckout:!0,noBridge:!0,state:"ppxo_meta",env:"production"},document.body.append(a)
      }if(t.data&&"CALCONIC_UPDATE_HEIGHT"===t.data.action){
      var s=document.querySelector('iframe[src="https://app.calconic.com/api/embed/calculator/'+t.data.payload.id+'"]');
      if(s){s.height=t.data.payload.height}}
    });
  })();
</script>


        <iframe src="https://app.calconic.com/api/embed/calculator/64047bd5f5bc80001e6bff58" sandbox="allow-same-origin allow-forms allow-scripts allow-top-navigation allow-popups-to-escape-sandbox allow-popups" title="Calconic_ Calculator" name="Calconic_ Calculator" height="371px" scrolling="no" style="width: 80%; border: 0; outline: none;"></iframe>
<script>
  (function() {
    window.addEventListener("message",function(t){
      var e="https://www.paypalobjects.com/api/checkout.4.0.141.js";
      if(!document.querySelector('script[src="'+e+'"]')&&t.data&&"LOAD_PAYPAL"===t.data.action){
      var a=document.createElement("script");a.src=e,a.async=!0,a.dataset={paypalCheckout:!0,noBridge:!0,state:"ppxo_meta",env:"production"},document.body.append(a)
      }if(t.data&&"CALCONIC_UPDATE_HEIGHT"===t.data.action){
      var s=document.querySelector('iframe[src="https://app.calconic.com/api/embed/calculator/'+t.data.payload.id+'"]');
      if(s){s.height=t.data.payload.height}}
    });
  })();
</script>
        </div>
   
    </div>
</div>
<?php include_once('includes/footer.php');?>
    </body>
</html>