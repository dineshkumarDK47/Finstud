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
.wid{
  width: 90%;
  margin-top: 230px;
  margin-left: 40px;
}
.wid1{
  margin-top: 40px;
  margin-left: 240px;
}
.wid b{
  font-size: 25px;
}
.wid u{
  margin-left: 103px;
  font-size: 40px;
  font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
</style>
    </head>
    <body>
      
    <?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main">
      <div class="wid">
        <U>ADVANCED REAL TIME TECHNICAL ANALYSIS CHART</U> <BR><br>
        <b>Technical analysis charts are graphical displays that show asset price and trade volume data. Charts provide technicians with information about past price fluctuations. We can use such data to predict future market performance. There are different types of charts used in technical analysis.</b>
<!-- TradingView Widget BEGIN -->
<br><br>
<div class="tradingview-widget-container">
  <div id="tradingview_84c22"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text"> Chart</span></a> by FINSTUD</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 1100,
  "height": 810,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": true,
  "withdateranges": true,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "details": true,
  "hotlist": true,
  "calendar": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
  "container_id": "tradingview_84c22"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<p>Are you beginner? want to learn technical analysis - <a href="education.php"> click here </a></p>
      </div>

<!-- TradingView Widget BEGIN -->
<div class="wid1">
  <br>
  <p> Technical Indicator </p>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSDT/technicals/" rel="noopener" target="_blank"><span class="blue-text">Technical Analysis for BTCUSDT</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-technical-analysis.js" async>
  {
  "interval": "1m",
  "width": 725,
  "isTransparent": false,
  "height": 450,
  "symbol": "BINANCE:BTCUSDT",
  "showIntervalTabs": true,
  "locale": "en",
  "colorTheme": "light"
}
  </script>
</div>
</div>

<!-- TradingView Widget END -->


<!-- The End -->
    </div>
</div>
<?php include_once('includes/footer.php');?>
    </body>
</html>