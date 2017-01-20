
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
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-KTNXMN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KTNXMN');</script>


<?php  include("navbar.php") ?>
    <div class="container">
        <div class="row">


<?php
$request = $db->prepare("SELECT id, pseudo, password, email, inscription  FROM members ");
$request->execute(
    array()
    );

while ($data = $request->fetch()) 
    {
    ?>
            
            <div class="col-lg-4">
               <center> <h2><a href="#"><?php echo $data["pseudo"];?> id :<?php echo $data["id"];?></a></h2>
                
                <br><p>email : <?php echo $data["email"];?></p>
                <br><p>mot de passe : <?php echo $data["password"];?></p>
                <br><p>date d'inscription : <?php echo $data["inscription"];?></p>
                <a class="btn btn-danger" href="delete_member.php?id=<?php echo $data["id"];?>">delete</a>
                <a class="btn btn-success" href="update_members.php?id=<?php echo $data["id"];?>">update</a>
            </center>            
            </div>    <?php
    }


?>

        </div>
    </div>



<?php
}   
else {
header("Location:dashboard.php");
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


