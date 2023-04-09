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
  <meta content="" name="keywords">
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
    position: initial;
}
#main{
    display: table-cell;
    width: 80%;
    background-color: #f5fffa;
}
.bottom-container{
  background-color: #66BFBF;
  position:relative;
}
.pca{
  padding-bottom: 15px;
}


h2 {
  color: #66bfbf;
  font-family: 'Montserrat', sans-serif;
  font-size: 1rem;
  margin: 15px auto 15px auto;
  padding-bottom: 10px;
}

h3 {
  color: #11999e;
  font-family: 'Montserrat', sans-serif;
  font-size: 1.5rem;
}
a{
  color: #11999E;
  font-family: 'Montserrat', sans-serif;
  margin: 10px 20px;
  text-decoration: none;
}

a:hover{
  color: #EAF6F6;
}
p{
  line-height: 2;
}
.cr{
 color: #EAF6F6;
 font-size: 0.75rem;
 padding: 20px 0px;
}

.Contact-me{
  width: 50%;
  
  text-align: center;
  }

.top{
    background-color: #E4F9F5;
    height: 550px;
    position: absolute;
    font-size: 15px;
}

.sk{
    color: #66bfbf;
   
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    padding: 50px;
    position: relative;
   
    
}

.rg{
    text-align: center;
    color: #000000;
    font-family: Arial, Helvetica, sans-serif;
    padding: 80px;

}



table.one, th, td{
border : 1px solid black;
border-collapse: separate;
text-align: center;
}
th, td{
  padding: 10px;
}
tr:nth-child(odd){
  background-color: #f5fffa;
}
th{
background-color: #20b2aa;
}
img{
  width: 200px;
}
</style>

  
</head>

<body>
<?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main"> 
    <div class="top" style="position: initial;">
        <h1 class="sk" style="position: initial;">
            ABOUT
        </h1>
       <p class="rs" style="position: initial;">
       <h2>WE ARE A STUDENTS WHO DECIDED TO WORK FOR YOUNGSTERS</h2>
              <p>
                Our goals for this start-up, Youngsters who struggle in teen age about financial we involves motivating them with money and things associated with money.
                We came up with motivation with high energetic to achieve our dreams .We are gaining pro-tips from all over faculties, students, developers etc..
                Hope we will do a better more innovative ideas to a eco-friendly global technology.
              </p>
       </p>
        
        
        
    </div>
<h1 class="rg" style="position: initial;">
        TEAM WORK
</h1>
<table class="one" style="width: 100%"><br><br>
  <thead>
   <tr>
    <th><img src="assets/images/a.png"></th>
    <th><img src="assets/images/b.png"></th>
    <th><img src="assets/images/c.png"></th>
    <th><img src="assets/images/d.png"></th>
   </tr>
 </thead>
  <tbody>
    <tr><td>ECO-FRIENDLY</td><td >WORKING WITH HIGH MOTIVE</td><td>GOOD INFRASTRUCTURE DESIGNERS</td><td>GAINING KNOWLEDGE ALL-OVER TECHNOLOGIES</td></tr>
    
  </tbody>
</table>
<br>
<br></div>
</div>
  <?php include_once('includes/footer.php'); ?>
</body>
</html>