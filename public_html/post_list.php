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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KTNXMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTNXMN');</script>

<?php  include("navbar.php") ?>
<?php

if($_SESSION["is_admin"] == 1){
 $request = $db->prepare("SELECT posts.id, title, content, post_date, pseudo FROM 
    posts JOIN members ON posts.member_id= members.id");
$request->execute(
    array(
        )   
    );

while ($data = $request->fetch()) 
    {
    ?>
  <div class="container">  
        <div class="well">
                <div class="row">
                    <div class="col-xs-12">
                        <center><h2><?php echo $data ["title"];?></h2>
                        <h6>by <?php echo $data ["pseudo"];?></h6> <br>
                        <p><?php echo $data ["post_date"];?></p><br>
                        <p><?php echo substr($data["content"], 0,200); ?></p>
                        <center><a class="btn btn-success margin_list" href="update_post.php?id=<?php echo $data["id"];?>">update</a>
                        <a class="btn btn-danger margin_list" href="delete_post.php?id=<?php echo $data["id"];?>">delete</a></center> 
                   </center> </div>
                </div>    
        </div>
</div>
    <?php
   
    }


?>

<?php
}



else {
    $request = $db->prepare("SELECT id, title,content FROM posts WHERE member_id = :member_id");

$request->execute(
    array(
        "member_id"=> $_SESSION["id_members"],
        )
    );

while ($data = $request->fetch()) 
    {
    ?>
    <div class="container">
        <div class="well">
                <div class="row">
                    <div class="col-xs-12">
                        <h3><?php echo $data ["title"];?></h3><br>
                        <p><?php echo substr($data["content"], 0,10000); ?></p>
                        <center><a class="btn btn-success margin_list" href="update_post.php?id=<?php echo $data["id"];?>">update</a>
                        <a class="btn btn-danger margin_list" href="delete_post.php?id=<?php echo $data["id"];?>">delete</a></center> 
                    </div>
                </div>    
        </div>
    </div>
 
    <?php
    }


?>

<?php
}

?>


<?php
}   
else {
header("Location:index.php");
}
?>
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


