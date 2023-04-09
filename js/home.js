
var btc = document.getElementById("bitcoin");
var ltc = document.getElementById("litecoin");
var doge = document.getElementById("dogecoin");
var eth = document.getElementById("Ethereum");

var liveprice = {
    "async": true,
    "scroosDomain": true,
    "url": "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin%2Clitecoin%2Cdogecoin%2Cetheruem&vs_currencies=usd",

    "method": "GET",
    "headers": {}

}

$.ajax(liveprice).done(function(response)
{
    btc.innerHTML = response.bitcoin.usd;
    ltc.innerHTML = response.litecoin.usd;
    doge.innerHTML = response.dogecoin.usd;
    eth.innerHTML = response.Ethereum.usd;

});
