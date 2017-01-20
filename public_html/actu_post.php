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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-post.css" rel="stylesheet">

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
    <!-- Navigation -->
<?php include("navbar.php") ?>
<?php
if(isset($_GET["id"])){
        $id= htmlspecialchars($_GET["id"]);
?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
            <?php
$request= $db->prepare("SELECT posts.id, title, content, post_date, pseudo FROM 
    posts JOIN members ON posts.member_id= members.id
    WHERE posts.id = :id");
$request->execute(array(
    "id" => $id,
    ));
?>
                <?php
            while ($data = $request->fetch()){
                ?>
                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $data ["title"];?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $data ["pseudo"];?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span><?php echo $data ["post_date"];?></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><p><?php echo $data["content"];?></p>

                <hr>
<?php 
}
$request->closeCursor();?>
                <!-- Blog Comments -->
                <?php
if (isset($_SESSION["id_members"])){
                    ?>
    
    
     <?php
if ((isset($_POST["content"])) && (isset($_GET["id"]))) {
    $content = htmlspecialchars($_POST["content"]);
    $post_id = htmlspecialchars($_GET["id"]);  


$request = $db->prepare("INSERT INTO comments (content, post_id, comment_date, member_id) VALUES (:content, :post_id, NOW(), :member_id )");
$request->execute(array(
    "content"=> $content,
    "post_id"=> $post_id,
    "member_id"=>$_SESSION["id_members"]    
    ));
echo "ok";
}

?>

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="content"><?php echo $data["content"];?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

<?php
}
?>




              
    

                <!-- Posted Comments -->

                <!-- Comment -->
   
<div class="container">
    <div class="row">
        <div class="col-md-8">
<?php
    $request= $db->prepare("SELECT comments.id, content, comment_date, member_id, pseudo FROM 
        comments JOIN members ON comments.member_id= members.id WHERE actu_id = :actu_id");
$request->execute(array(
        "actu_id" => $id,

    ));
?>
                <?php
            while ($data = $request->fetch()){
                ?>

                <div class="media">

                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $data ["pseudo"];?>
                            <small><?php echo $data ["comment_date"];?></small>
                        </h4>   
                       <?php echo $data["content"];?>
                   </div>
                </div>


<?php 
}
$request->closeCursor();?>

<hr>

        



    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
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
    echo"No id specified";
}