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
      <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">

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

    <!-- Begin Mailchimp Signup Form -->

<div id="mc_embed_signup">
<form action="https://gmail.us14.list-manage.com/subscribe/post?u=0c17e707a800559a7063a54ed&amp;id=f622e0a2c9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2>Subscribe</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div hidden="true"><input type="hidden" name="tags" value="7263697"></div>
	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0c17e707a800559a7063a54ed_f622e0a2c9" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                <p class="brandingLogo"><a href="http://eepurl.com/hZS4F1" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
            </div>
        </div>
    </div>
</form>
</div>
<div id="feedback">
       <button><a href="https://us14.list-manage.com/survey?u=0c17e707a800559a7063a54ed&id=eb68da4bb6&attribution=false"> PROVIDE FEEDBACK </a></button>
    </div>   
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
    </div>
</div>
<?php include_once('includes/footer.php');?>
</body>
</html>