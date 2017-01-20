<?php
include "db.php";
session_start();
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Tour de la Terreur</title>
  <meta name="description" content="Tour de la Terreur, disney, parc d'attraction">
  <meta name="author" content="SitePoint">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/min370.css" media="all and (min-device-width: 370px) and (max-width: 375px)">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
  <script type="text/javascript" href="js/jquery.js"></script>

</head>



<body class="background_image_index">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KTNXMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTNXMN');</script>
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
      </div>
      <div class="col-xs-4"> 
        <img src="http://mondisneylandparis.fr/wp-content/uploads/2013/05/hollywoodtowerhotel-300x185.png "class="img-responsive " id="disney_logo">
      </div>
      <div class="col-xs-4">
      </div>
    </div>
  </div>


<br>
<center>
<div class="container">
  <div class="row">
    <br>
    <a href="histoire.php"><div class="col-md-3 col-xs-6 "><button class="btn rond">Histoire</button></div></a>
    <a href="photo.php"><div class="col-md-3 col-xs-6"><button class="btn rond">Avis</button></div></a>
    <a href="actualites.php"><div class="col-md-3 col-xs-6 "><button class="btn rond">Actualite</button></div></a>
    <a href="contacter.php"><div class="col-md-3 col-xs-6 "><button class="btn rond">Contacter-nous </button></div></a>
  </div>
</div>
</center>
<br>
<center>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 fadeIn_steve"><img src="img/steve.png" class="img-responsive" id="steve"></div> 
    </div>
  </div>
</center>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78227194-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>