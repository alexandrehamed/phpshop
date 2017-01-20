<?php
include "db.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
       <title>Tour de la Terreur</title>
    <meta name="description" content="Tour de la Terreur, disney, parc d'attraction">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body class="background_photo">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KTNXMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTNXMN');</script>
<section>
          
<?php
include("navbar.php");
?>
        <div class="container">
            <br><br>
            <div class="jumbotron center">
            <h2 class=" text-center">Avis</h2>
            </div>  
            

             <?php
$request= $db->prepare("SELECT posts.id, title, content, post_date, pseudo FROM 
    posts JOIN members ON posts.member_id= members.id ORDER BY post_date DESC");
$request->execute(array());
?>
                <?php
            while ($data = $request->fetch()){
                ?>

            <div class="well">
                <div class="row">
                    <div class="col-xs-12">
                        <h2><?php echo $data ["title"];?></h2>
                        <h6>by <?php echo $data ["pseudo"];?></h4> <br>
                        <p><?php echo $data ["post_date"];?></p><br>
                        <p><?php echo substr($data["content"], 0,400); ?></p>
                    </div>
                </div>    
            </div>
<?php 
}
$request->closeCursor();?>

        </div>



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
