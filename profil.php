<?php
require_once ('db.php');
include 'profil.traitement.php';
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" href="../../favicon.ico">

    <title>Steam Like</title>
    <!-- Bootstrap core CSS -->
    <link href="css/profil.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">

    <div class="site-wrapper">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h1 class="masthead-brand text-center"><?php echo $_SESSION['pseudo'];?>, Voici votre page profil</h1>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="store.php">Store</a></li>
                  <li><a href="bibliotheque.php">Ma Bibliotheque</a></li>
                  <li class="active"><a href="profil.php">Mon Profil</a></li>
                  <li><a href="ami.php">Amis</a></li>
                  <li><a href="utilisateurs.php">Tous les utilisateurs</a></li>
                  <li><a href="deconnexion.php"><button type="button" name="deconnexion" class="btn btn-danger">Se déconnecter</button></a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="stars"></div>
          <div class="stars1"></div>
          <div class="stars2"></div>
          <div class="shooting-stars"></div>
          <div class="inner cover ami">
            <div class="row">
              <div class="col-lg-7">
                <h2> Vos informations </h2>
                <h3 class="cover-heading">Pseudo : <?php echo $aMoi[0]['pseudo']; ?></h3>
              </div>
              <div class="col-lg-12">
                <h3 class="cover-heading">E-Mail : <?php echo $aMoi[0]['email']; ?></h3>
              </div>
              <div class="col-lg-7" style="margin-top:5%;">
                <a href="modifier.php" style="color:orange">Modifier mon profil</a>
              </div>
            </div>


          </div>

        </div>

      </div>

    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php } else {
  header('Location: login.php');
}?>
