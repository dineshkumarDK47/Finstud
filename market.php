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
</style>
    </head>
    <body>
      
    <?php include_once('includes/head2.php');?>

<div id="parent">
    <div id="side"><?php include_once('includes/sidetry2.php');?></div>
    <div id="main">
	<div class="cryptohopper-web-widget" data-id="3" data-coins="terra-luna,polkadot,fantom,the-graph" data-card_design="3" data-realtime="on">

</div>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Market summary</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
  {
  "width": 770,
  "height": 450,
  "symbolsGroups": [
    {
      "name": "Indices",
      "originalName": "Indices",
      "symbols": [
        {
          "name": "FOREXCOM:SPXUSD",
          "displayName": "S&P 500"
        },
        {
          "name": "FOREXCOM:NSXUSD",
          "displayName": "US 100"
        },
        {
          "name": "FOREXCOM:DJI",
          "displayName": "Dow 30"
        },
        {
          "name": "INDEX:NKY",
          "displayName": "Nikkei 225"
        },
        {
          "name": "INDEX:DEU40",
          "displayName": "DAX Index"
        },
        {
          "name": "FOREXCOM:UKXGBP",
          "displayName": "UK 100"
        }
      ]
    },
    {
      "name": "Futures",
      "originalName": "Futures",
      "symbols": [
        {
          "name": "CME_MINI:ES1!",
          "displayName": "S&P 500"
        },
        {
          "name": "CME:6E1!",
          "displayName": "Euro"
        },
        {
          "name": "COMEX:GC1!",
          "displayName": "Gold"
        },
        {
          "name": "NYMEX:CL1!",
          "displayName": "Crude Oil"
        },
        {
          "name": "NYMEX:NG1!",
          "displayName": "Natural Gas"
        },
        {
          "name": "CBOT:ZC1!",
          "displayName": "Corn"
        }
      ]
    },
    {
      "name": "Bonds",
      "originalName": "Bonds",
      "symbols": [
        {
          "name": "CME:GE1!",
          "displayName": "Eurodollar"
        },
        {
          "name": "CBOT:ZB1!",
          "displayName": "T-Bond"
        },
        {
          "name": "CBOT:UB1!",
          "displayName": "Ultra T-Bond"
        },
        {
          "name": "EUREX:FGBL1!",
          "displayName": "Euro Bund"
        },
        {
          "name": "EUREX:FBTP1!",
          "displayName": "Euro BTP"
        },
        {
          "name": "EUREX:FGBM1!",
          "displayName": "Euro BOBL"
        }
      ]
    },
    {
      "name": "Forex",
      "originalName": "Forex",
      "symbols": [
        {
          "name": "FX:EURUSD",
          "displayName": "EUR/USD"
        },
        {
          "name": "FX:GBPUSD",
          "displayName": "GBP/USD"
        },
        {
          "name": "FX:USDJPY",
          "displayName": "USD/JPY"
        },
        {
          "name": "FX:USDCHF",
          "displayName": "USD/CHF"
        },
        {
          "name": "FX:AUDUSD",
          "displayName": "AUD/USD"
        },
        {
          "name": "FX:USDCAD",
          "displayName": "USD/CAD"
        }
      ]
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "dark",
  "isTransparent": false,
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
<br>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/currencies/forex-heat-map/" rel="noopener" target="_blank"><span class="blue-text">Forex market heatmap</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
  {
  "width": 770,
  "height": 400,
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY"
  ],
  "isTransparent": false,
  "colorTheme": "dark",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
<br>

<!-- news-->
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://in.tradingview.com/markets/stocks-india/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily stock news</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "market",
  "colorTheme": "dark",
  "isTransparent": false,
  "displayMode": "regular",
  "width": "800",
  "height": "830",
  "locale": "in",
  "market": "stock"
}
  </script>
</div>
<!-- TradingView Widget END -->

    </div>
</div>
<?php include_once('includes/footer.php');?>
<script src="https://www.cryptohopper.com/widgets/js/script"></script>
	</body>
</html>
