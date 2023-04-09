<?php
include('dbconnection.php');
?>


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sidebar Menu with sub-menu | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://kit.fontawesome.com/5ba5ab412f.js" crossorigin="anonymous"></script>
      <style>
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.btn{
  position:absolute;
  top: 150px;
  left: 45px;
  height: 45px;
  width: 45px;
  text-align: center;
  background: #1b1b1b;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn.click{
  left: 5px;
}
.btn span{
  color: white;
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  margin-top: 90px;
  position: absolute;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
  margin-bottom: 0;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
  
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: cyan;
  background: #1e1e1e;
  border-left-color: cyan;
}
nav ul li a:hover{
  background: #1e1e1e;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul .third-show.show2{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a:not(.active){
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 500;
}
#header{
  background-color: #1b1b1b;
  position: relative;
}
         </style>
   </head>
   <body>
     <div class="btn" onclick="openLeftMenu">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            MENU
         </div>
         <ul>
            <li class="active"><a href="home.php">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn">Expense
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="dashboard.php">VIEW</a></li>
                  <li><a href="add-expense.php">ADD</a></li>
                  <li><a href="manage-expense.php">MANAGE</a></li>
                  <li><a href="expense-datewise-reports.php">DAY REPORT</a></li>
                  <li><a href="expense-monthwise-reports.php">MONTH REPORT</a></li>
                  <li><a href="expense-yearwise-reports.php">YEAR REPORT</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="third-btn">ANALYSIS
               <span class="fas fa-caret-down third"></span>
               </a>
               <ul class="third-show">
                  <li><a href="ct2.php">TECHNICAL CHART</a></li>
                  <li><a href="newshome.php">TECHNICAL ANALYSE</a></li>           
               </ul>
            </li>
          
            <li><a href="appoinment.php">CONSULTATION</a></li>
            <li><a href="feedback.php">Feedback</a></li>
         </ul>
      </nav>
     
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('.third-btn').click(function(){
             $('nav ul .third-show').toggleClass("show2");
             $('nav ul .third').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
           function openLeftmenu (){
             document.getElementById("sidebar").style.display="block";
           }
           function openLeftmenu (){
             document.getElementById("sidebar").style.display="none";
           }
      </script>
   </body>
</html>