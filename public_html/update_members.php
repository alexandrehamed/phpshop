<?php
include "db.php";
session_start();
if (isset($_SESSION["is_admin"])){
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


if(isset($_GET["id"])){
        $id= htmlspecialchars($_GET["id"]);
if($_SESSION["is_admin"] == 1){
 $request = $db->prepare("SELECT is_admin FROM members WHERE id =:id");
$request->execute(
    array(
        "id"=> $_GET["id"],
        )   
    );

while ($data = $request->fetch()) 
    {
    ?>
<center>
    <h3>Mettre cette utilisateur administrateur</h3>
<form role="form" method="post">
<input type="checkbox" name="is_admin"<?php if ($data["is_admin"] == 1) {echo"checked";}?>>
<input type="submit" name="submit">
</form>
</center>
<?php
}

if (isset($_POST["submit"])){
    if (isset($_POST["is_admin"])){
$request = $db->prepare ("UPDATE `members` SET `is_admin` = '1' WHERE members.id = :members_id");
   $request->execute(
    array( 
        "members_id" => $_GET["id"],
        )   
    );
   echo "<center>il a rejoint le coté obscur</center>";
}
    }
    else {
        $request = $db->prepare ("UPDATE `members` SET `is_admin` = '0' WHERE members.id = :members_id");
   $request->execute(
    array( 
        "members_id" => $_GET["id"],
        )   
    );
}
    }
   
}

}

 
else 
{
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


