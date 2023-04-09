<?php
session_start();
header("Refresh:120");
include('includes/dbconnection.php');
?>
<html>
    <head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async></script>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async> 
  </script>
  <script src="js/crypto.js"> </script>
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
#mini-wid{
  align-items: center;
  margin-left: 78px;
}
#calc{
  margin-left: 350px;
  margin-bottom: 80PX;
}
#news{
  margin-left: 90px;
  margin-bottom: 80px;
  border-radius: 20px;
}
</style>
<link rel="stylesheet" href="css/home.css">
    </head>
    <body>
      
    <?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main"> 
    <div style="height:62px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;">
    <div style="height:40px; padding:0px; margin:0px; width: 100%;">
    <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
    </iframe></div>
    <div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
    <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px"></a>&nbsp; FINSTUD</div>
</div> <!-- ticker -->
  <br><br>
  <div class="homlog">
    <h6>TREND-IN-LINE</h6>
           <div class="container">
               <div class="coin-price">
                   <div class="logo">
                       <img src="assets/images/bitcoin.jfif" alt="btc">
                   </div>
                   <div>
                       <h3>$<span id="bitcoin"></span></h3>
                       <h3>Bitcoin</h3>
                   </div>
               </div>
               <div class="coin-price">
                   <div class="logo">
                       <img src="assets/images/litecoin.jfif" alt="btc">
                   </div>
                   <div>
                       <h3>$<span id="litecoin"></span></h3>
                       <h3>Litecoin</h3>
                   </div>
               </div>
               <div class="coin-price">
                   <div class="logo">
                       <img src="assets/images/dogecoin.jfif" alt="btc">
                   </div>
                   <div>
                       <h3>$<span id="dogecoin"></span></h3>
                       <h3>Dogecoin</h3>
                   </div>
               </div>
               <div class="coin-price">
                   <div class="logo">
                       <img src="assets/images/eth1.jfif" alt="btc">
                   </div>
                   <div>
                       <h3>$<span id="Ethereum"></span></h3>
                       <h3>Ethereum</h3>
                   </div>
               </div>
           </div>
           <script src="js/home.js"> </script>

           <br><br>
<!-- TradingView Widget BEGIN -->
<div id="mini-wid">
  <h6>TOP COINS</h6>
<div class="tradingview-widget-container">
  <div id="tradingview_bf0ae"> </div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/symbols/AAPL/" rel="noopener" target="_blank"><span class="blue-text"></span></a> </div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "symbols": [
    [
      "Apple",
      "AAPL"
    ],
    [
      "Google",
      "GOOGL"
    ],
    [
      "Microsoft",
      "MSFT"
    ],
    [
      "Bitcoin",
      "BINANCE:BTCUSDT|ALL"
    ],
    [
      "Ethereum",
      "BINANCE:ETHUSDT|12M"
    ],
    [
      "Luna",
      "BINANCE:LUNAUSDT|ALL"
    ],
    [
      "FTM",
      "BINANCE:FTMUSDT|ALL"
    ],
    [
      "sol",
      "BINANCE:SOLUSDT|ALL"
    ],
    [
      "shiba",
      "BINANCE:SHIBUSDT|ALL"
    ],
    [
      "Sand",
      "BINANCE:SANDUSDT|ALL"
    ]
  ],
  "chartOnly": false,
  "width": "1000",
  "height": "400",
  "locale": "in",
  "colorTheme": "light",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "fontColor": "#787B86",
  "isTransparent": false,
  "autosize": false,
  "showVolume": false,
  "scalePosition": "no",
  "scaleMode": "Normal",
  "fontFamily": "-apple-system, BlinkMacSystemFont, SegoeUI, Trebuchet MS, Roboto, Ubuntu, sans-serif",
  "noTimeScale": false,
  "valuesTracking": "1",
  "chartType": "candlesticks",
  "upColor": "#22ab94",
  "downColor": "#f7525f",
  "borderUpColor": "#22ab94",
  "borderDownColor": "#f7525f",
  "wickUpColor": "#22ab94",
  "wickDownColor": "#f7525f",
  "container_id": "tradingview_bf0ae"
}
  );
  </script>
</div>
</div>
<!-- TradingView Widget END -->
  <br>
       <!-- TradingView Widget BEGIN -->
       <div id="mini-wid">
         <h6>ALL COINS LIST</h6>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank" alt="internet disabled"><span class="blue-text"></span></a> by FINSTUD</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>   
  {
  "width": 1000,
  "height": 490,
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
  "colorTheme": "dark",
  "locale": "in"
}
  </script>
</div>
       </div>
<!-- TradingView Widget END -->
<br>
<!-- TradingView Widget END -->

<!-- TradingView Widget END -->

      <div id="calc">
        <h6> CRYPTO CALC</h6>
    <div style="width: 400px; height:335px; background-color: #FAFAFA; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:335px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;margin: 0;width: 400px;padding:1px;padding: 0px; margin: 0px;">
    <div style="height:315px; padding:0px; margin:0px; width: 100%;">
    <iframe src="https://widget.coinlib.io/widget?type=converter&theme=light" width="400" height="310px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;">
    </iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
    <a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp; FINSTUD</div></div>
    </div>
  
    <!-- TradingView Widget BEGIN -->
    <div id="news">
      <h6>UPDATED NEWS</h6>
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/cryptocurrencies/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily cryptocurrency news</span></a> by FINSTUD</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "market",
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "regular",
  "width": 980,
  "height": 830,
  "locale": "in",
  "market": "crypto"
}
  </script>
</div>
    </div>

</div>
 <!-- Parent 2 end -->
      </div>
</div> <!-- parent 1 end -->

 <?php include_once('includes/footer.php');?>

    </body>
    
</html>