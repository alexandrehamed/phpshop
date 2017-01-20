
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
<?php  include("navbar.php") ?>
<?php

    if(isset($_GET["id"]) && isset($_POST["title"]) && isset($_POST["content"]))
{
        $id= htmlspecialchars($_GET["id"]);
        $title= htmlspecialchars($_POST["title"]);
        $content= htmlspecialchars($_POST["content"]);
   
$request = $db->prepare("UPDATE actu SET title = :title, content= :content WHERE id = :id");
$request->execute(
            array(
                "title"=> $title,
                "content" => $content,
                "id"=>$id 
                )
        );

}

?>

<?php
if(isset($_GET["id"])){
        $id= htmlspecialchars($_GET["id"]);
    }

    $request= $db->prepare("SELECT title, content FROM actu WHERE id = :id");
    $request->execute(
        array(
                "id" =>$id
            )
        );
    while ($data = $request->fetch()) {
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            
<form method="post" action="update_actu.php?id=<?php echo $id; ?>">
<input type="text" name="title" size="100"value="<?php echo $data ["title"];?>">
<textarea name="content" size="100" cols="100" rows="25"><?php echo $data["content"];?></textarea>
<a href="actu_list.php"><input type="submit" value="update"> </a>
</form>
<button class="btn btn-success"><a href="actu_list.php">retour a la liste</a></button>
           
        </div>
    </div>
</div>
<?php
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
<?php
}
else{
header("Location:index.php");
}
?>