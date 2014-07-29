<html>
<head>
  <title></title>
  <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
  <link rel="stylesheet/less" type="text/less" href="../less/servi.less"/>
  <script>

$('.flip-container').mouseenter(function(){
  $('body').addClass('body_m', 1000);
});
$('.flip-container').mouseleave(function(){
  $('body').stop().removeClass('body_m', 900);
});


  </script>
</head>
<body>

<div class="flip-container">
  <div class="flipper">
    <div class="front">
      <img src="http://www.web-freelancer.com/images/eu.png"/>
      <p>Oeiras, Portugal</p>
      <div class="sub"><p>José Dias</p></div>
    </div>
    <div class="back">
      <p id="titulo">José Dias</p>
      <p>WebDesigner</p>
      <p>skype: jmldias</p>
      <p>Birth: 21 Feb 1984</p>
      <a href="https://www.facebook.com/jose.dias.792740" id="social">f</a>
      <a href="https://twitter.com/JoseDias_PT" id="social">t</a>
      <a href="http://pt.linkedin.com/pub/jos%C3%A9-dias/27/928/913" id="social">in</a>
    </div>
  </div>
</div>
</body>
</html>