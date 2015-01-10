<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Super Hexagon 2048 </title>
  <script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok9v=02fcfa4f56/"},atok:"f7eb81c1c8f7a0576d565428bfbd1573",petok:"6c062dc5fd79627d2eaac046e9c0950032f79639-1396303384-1800",zone:"anilshanbhag.in",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];CloudFlare.push({"apps":{"ape":"b5c46fa9cbadd2c50d8d918fb71a4c7a"}});var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok9v=b064e16429/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
//]]>
</script>
<link href="2048.css" rel="stylesheet" type="text/css">
  <link rel="shortcut icon" href="/static/favicon.ico">
  <link rel="apple-touch-icon" href="/static/meta/apple-touch-icon.png">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, maximum-scale=1, user-scalable=no, minimal-ui">
  <style>
  .tile.tile-2 .tile-inner {
    background: #fff url('img/2.jpg');
  }
  .tile.tile-4 .tile-inner {
    background: #fff url('img/4.jpg');
  }
    .tile.tile-8 .tile-inner {
    background: #fff url('img/8.jpg');
  }
    .tile.tile-16 .tile-inner {
    background: #fff url('img/16.jpg');
  }
    .tile.tile-32 .tile-inner {
    background: #fff url('img/32.jpg');
  }
    .tile.tile-64 .tile-inner {
    background: #fff url('img/64.jpg');
  }
    .tile.tile-128 .tile-inner {
    background: #fff url('img/128.jpg');
  }
    .tile.tile-256 .tile-inner {
    background: #fff url('img/256.jpg');
  }
    .tile.tile-512 .tile-inner {
    background: #fff url('img/512.jpg');
  }
    .tile.tile-1024 .tile-inner {
    background: #fff url('img/1024.jpg');
  }
    .tile.tile-2048 .tile-inner {
    background: #fff url('img/2048.jpg');
  }

  </style>
</head>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-24280526-3', 'anilshanbhag.in');
  ga('send', 'pageview');
</script>
<body>
  <div class="container">
    <div class="heading">
      <h1>Super Hexagon 2048 </h1>
      <div class="scores-container">
        <div class="score-container">0</div>
        <div class="best-container">0</div>
      </div>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>

    <p class="game-explanation">
      <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>
    <hr>
    <!-- <p>Built using <a href="http://2048.anilshanbhag.in">2048 Creator</a><br/>Create your own 2048 game at <a href="http://2048.anilshanbhag.in">2048 Creator</a></p>
     <hr>-->
  </div>

  <script src="js/animframe_polyfill.js"></script>
  <script src="js/keyboard_input_manager.js"></script>
  <script src="js/html_actuator.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/tile.js"></script>
  <script src="js/local_score_manager.js"></script>
  <script src="js/game_manager.js"></script>
  <script src="js/application.js"></script>
  <script>var imgs = ['img/2.jpg','img/4.jpg','img/8.jpg','img/16.jpg','img/32.jpg','img/64.jpg','img/128.jpg','img//256.jpg','img/512.jpg','img/104.jpg', 'img/2048.jpg']; for(var i=0; i<imgs.length; i++) { document.createElement('img').src = imgs[i]; }</script>
</body>
</html>
