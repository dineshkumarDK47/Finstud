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
#wid{
  margin-left: 250px;
  margin-bottom: 40px;
  margin-top: 30px;
}
.slideshow-container {
    position: relative;
    background: #f1f1f1f1;
    margin-top: 5%;
  }
  
  .motivation {
    display: none;
    padding: 80px;
    text-align: center;
  }
  
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    margin-top: -30px;
    padding: 16px;
    color: #888;
    font-weight: bold;
    font-size: 20px;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  .next {
    position: absolute;
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
    color: white;
  }
  
  .dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
  }
  
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  q {font-style: italic;}
  
  .author {color: cornflowerblue;
}
</style>
    </head>
    <body>
      
    <?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main">
      <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Markets</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "description": "TATA",
      "proName": "NSE:TATAMOTORS"
    },
    {
      "description": "RELIANCE",
      "proName": "NSE:RELIANCE"
    },
    {
      "description": "BAJAJ",
      "proName": "NSE:BAJFINANCE"
    },
    {
      "description": "INFOSYS",
      "proName": "NSE:INFY"
    },
    {
      "description": "HDFC",
      "proName": "NSE:HDFCBANK"
    },
    {
      "description": "TCS",
      "proName": "NSE:TCS"
    },
    {
      "description": "HCL",
      "proName": "NSE:HCLTECH"
    },
    {
      "description": "MAHINDRA",
      "proName": "NSE:M_M"
    },
    {
      "description": "ITC",
      "proName": "NSE:ITC"
    },
    {
      "description": "",
      "proName": "NASDAQ:AAPL"
    },
    {
      "description": "",
      "proName": "NASDAQ:TSLA"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
    <div id="wid">
 <!-- TradingView Widget BEGIN -->
 <div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/stocks-india/" rel="noopener" target="_blank"><span class="blue-text">Stock Market Today</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
      
  "colorTheme": "light",
  "dateRange": "12M",
  "exchange": "BSE",
  "showChart": true,
  "locale": "in",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": true,
  "width": "900",
  "height": "700",
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
}
  </script>
</div>
    </div>
<!-- TradingView Widget END -->
  
<!-- TradingView Widget BEGIN -->
<div class="slideshow-container">

<div class="motivation">
<div id="wid">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/NSE-HDFCBANK/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">HDFCBANK Fundamental Data</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
  {
  "symbol": "NSE:HDFCBANK",
  "colorTheme": "light",
  "isTransparent": false,
  "largeChartUrl": "",
  "displayMode": "regular",
  "width": 780,
  "height": 830,
  "locale": "in"
}
  </script>
</div>
</div>
</div>

<div class="motivation">
  <!-- TradingView Widget BEGIN -->
 <div id="wid">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NSE-TATASTEEL/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">TATASTEEL Fundamental Data</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
  {
  "symbol": "NSE:TATASTEEL",
  "colorTheme": "light",
  "isTransparent": false,
  "largeChartUrl": "",
  "displayMode": "regular",
  "width": 780,
  "height": 830,
  "locale": "en"
}
  </script>
</div>
</div>
<!-- TradingView Widget END -->
</div>

<div class="motivation">
 <!-- TradingView Widget BEGIN -->
 <div id="wid">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NSE-SBIN/financials-overview/" rel="noopener" target="_blank"><span class="blue-text">SBIN Fundamental Data</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js" async>
  {
  "symbol": "NSE:SBIN",
  "colorTheme": "light",
  "isTransparent": false,
  "largeChartUrl": "",
  "displayMode": "regular",
  "width": 780,
  "height": 830,
  "locale": "en"
}
  </script>
</div>
</div>
<!-- TradingView Widget END -->
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


<!-- TradingView Widget END -->
   
   
<br>

<!-- news-->
<!-- TradingView Widget BEGIN -->
<div id="wid">
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/stocks-india/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily stock news</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "market",
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "regular",
  "width": "900",
  "height": "830",
  "locale": "in",
  "market": "stock"
}
  </script>
</div>
    </div>
<!-- TradingView Widget END -->
    </div>
</div>
<?php include_once('includes/footer.php');?>

    </body>
</html>
