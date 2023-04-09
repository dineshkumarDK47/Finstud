<?php

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
    font-size: 1em;
    line-height: 200px;
    margin: 0;
    padding: 0;
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

</style>
<script src="https://www.cryptohopper.com/widgets/js/script"></script>
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
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily news roundup</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
  {
  "feedMode": "all_symbols",
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "regular",
  "width": 1000,
  "height": 1300,
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
<div class="cryptohopper-web-widget" data-id="5" data-news_count="20" data-news_length="30" data-atid="3"></div>

    </div>
</div>
<?php include_once('includes/footer.php');?>
<script src="https://www.cryptohopper.com/widgets/js/script"></script>
<script src="https://www.cryptohopper.com/widgets/js/script"></script>
	</body>
</html>

