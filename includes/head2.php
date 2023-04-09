<html>
    <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"> </script>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');

body {
  min-width: 800px;
  background: #0febf2;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0febf2,#0febf2);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right,#0febf2,#0febf2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  margin:0px;
}


#trapezoid {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  border: 80px solid rgba(0,0,0,0);
  border-top: 0 solid;
  border-bottom: 100px solid rgba(1, 1, 1, .4);
  -webkit-border-radius: 20px 20px 0 0;
  border-radius: 20px 20px 0 0;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: rgba(0,0,0,0.7);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
  margin-top:-53px;
  width: 700px;
  position: relative;
  transition: all 0.7s ease;
  padding-left:7%;
  margin-left: 80px;
}

#trapezoid a, .subnavbtn {
 -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
}

.sub-home {
  display: none;
  position: absolute;
  right: 0;
  left: 0; 

  z-index: 1;   
  transform: perspective(-10px);
}

#trapezoid:hover .sub-home {
  justify-content: center;
  margin-top: 53px;
}

.navbar {
  position: sticky;
  top: 0;
  display:flex;
  overflow:hidden;
  justify-content: center;
  height: 100px;
  margin-left: 200px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 25px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background:#8CA6DB;
  color: black;
  border-radius:5px;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 1;   
  transform: perspective(-10px);
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none; 
}

.subnav-content a:hover {
  background:#B993D6;
  color: black;
}

.subnav:hover .subnav-content {
  display: flex;
  justify-content: center;
}


section  {
  margin:0em 10em 10em 10em;
  padding:3em 10em 3em 10em;
}

h1{
  color: #111; 
  font-family: 'Helvetica Neue', sans-serif; 
  font-size: 200px; 
  font-weight: bold; 
  letter-spacing: -1px; 
  text-align: center;
  padding: 0;
  margin: 0;
}

p {
  color: #111; 
  font-family: 'Calibri', sans-serif; 
  font-size: 25px; 
  line-height: 1.5;
}

hr {
  background-color: #000;
}

    </style>
    </head>

<body>
<nav class="navbar">
  <H4><font size="15" color="#F0F8FF">FINSTUD</font></H4>
  <div id="trapezoid">
    <a class="sub-home" href="free.php">Home</a>
    <a class="expandHome" href="about.php" >About</a>
     <div class="subnav">
     <button class="subnavbtn">services<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
        <div id="subnav-trapezoid">
          <a href="education.php">education</a>
          <a href="calc.php">calculator</a>
          <a href="cryptotech.php">technical view</a>
        </div>
       </div>
    </div>
  
     <div class="subnav">
     <button class="subnavbtn">Login<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
        <div class="subnav-trapezoid">
          <a href="admin/">admin</a>
          <a href="login.php">user</a>
         </div>
       </div>
      </div>
    <a href="contact.php" class="expandHome">Contact</a>
  </div>
</nav>


    <script>
$('.expandHome').mouseover(function() {
  $('.sub-home').css({
        'display': 'block'
    }); 
});
$('.subnavbtn').mouseover(function() {
  $('.sub-home').css({
        'display': 'none'
    }); 
});

$('#trapezoid').mouseleave(function() {
  $('#trapezoid').css({
        'margin-top': '-53px'
    }); 
    $('.sub-home').css({
        'display': 'none'
    }); 
}).mouseenter(function() {
  $('#trapezoid').css({
        'margin-top': '0px'
    }); 
});
              

</script>


</body>
</html>