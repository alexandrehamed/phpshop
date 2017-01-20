 <?php
include "db.php";
session_start();
if (isset($_SESSION["id_members"])){
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
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
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
        
        <div class="row">
           <div class="col-xs-12 title_dashboard text-center"><h2>Mes Informations</h2></div>
        </div><hr>
        <br>
        <br>
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        
                    
                            <div class="row post_content">
                               <div class="post_head text-center">Avis</div>
                               <br>
                                <div class="col-xs-6">                                
                                    <center><a href="post_list.php"><button class="btn btn-success">Afficher</button></a>
                                    </center>                                    
                                </div>
                                <div class="col-xs-6">                               
                                    
                                    <center><a href="add_post.php"><button class="btn btn-success">Publier</button></a></center>
                                
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <div class="col-md-2"></div>
                        <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12">
                        
                    
                            <div class="row post_content">
                               <div class="post_head text-center">Commentaires</div>
                               <br>
                                <div class="col-xs-12">                                
                                    <center><a href="comments_list.php"><button class="btn btn-success">mes commentaires</button></a>
                                    </center>                                    
                                </div>
                                
                            </div>
                        </div>
                </div>
            </div>
           
        </div>

<hr>
    </div>

    <div class="container">
            <div class="row">            <div class="col-md-5">
                                    <?php
                if($_SESSION["is_admin"] == 1){
?>
            <div class="row">
                    <div class="col-md-12">
                        

                            <div class="row post_content">
                               <div class="post_head text-center">Actualités</div>
                               <br>
                                <div class="col-xs-6">                                
                                    <center><a href="actu_list.php"><button class="btn btn-success">Mes articles</button></a>
                                    </center>                                    
                                </div>
                                <div class="col-xs-6">                               
                                    
                                    <center><a href="add_actu.php"><button class="btn btn-success">Publier</button></a></center>
                                
                                </div>
                            </div>
                        </div>
                </div>
                <?php }?>
            </div>

            <div class="col-md-2"></div>
            <div class="col-md-5">
<?php
                if($_SESSION["is_admin"] == 1){
?>
                <div class="row">
                    <div class="col-md-12">
                        
                    
                            <div class="row post_content">
                               <div class="post_head text-center">Membres</div>
                               <br>
                                <div class="col-xs-12">                                
                                    <center><a href="members_list.php"><button class="btn btn-success">Liste des membres</button></a>
                                    </center>                                    
                                </div>
                            </div>
                        </div>
                </div>
<?php
}
?>
            </div>
        </div>        
    </div>

</section>
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
<?php
}
else{
header("Location:index.php");
}
?>