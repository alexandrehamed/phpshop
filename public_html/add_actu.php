
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

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">

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
if ((isset($_POST["title"])) && (isset($_POST["content"])) && (isset($_POST["url_image"]))) {
    $title= htmlspecialchars($_POST["title"]);
    $content = htmlspecialchars($_POST["content"]);
    $url_image = htmlspecialchars($_POST["url_image"]);


$request = $db->prepare("INSERT INTO actu (title, content, post_date, member_id, category_id, url_image) VALUES (:title, :content, NOW(), :member_id, 1, :url_image)");
$request->execute(array(
    "title" => $title,
    "content"=> $content,
    "member_id"=>$_SESSION["id_members"],
    "url_image"=>$url_image
    ));
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">      
          <form role="form" method="post" action="add_actu.php">
              <div class="form-group">
                <label for="email">Titre: </label>
                <input type="text" name="title" placeholder="titre">
              </div>
              <div class="form-group">
                <label for="comment">Commenter:</label>
                        <textarea class="form-control" rows="5" id="comment" type="text" name="content" placeholder="texte"></textarea>
              </div>
              <div class="form-group">
                  <label for="comment">Lien de votre image</label>
                  <input type="text" name="url_image" placeholder="lien">
              </div>
                <button type="submit" class="btn btn-default">Submit</button>
</form>
        </div>
    </div>
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
<?php
}
else{
header("Location:index.php");
}
?>