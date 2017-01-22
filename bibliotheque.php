<?php
require_once ('config.php');
include 'bibliotheque.traitement.php';
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
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">

    <div class="site-wrapper">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <p class="flotte">
              <img src="<?php if(!empty($_SESSION['image'])){echo $_SESSION['image']; } else {echo 'pic/LEAME.jpg'; }?>" class="img-circle" alt="Responsive image" width= "50px;">
              </p>
              <h3 class="masthead-brand"><?php echo $_SESSION['pseudo'];?></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="store.php">Store</a></li>
                  <li class="active"><a href="bibliotheque.php">Ma Bibliotheque</a></li>
                  <li><a href="profil.php">Mon Profil</a></li>
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
              <div class="col-lg-2 imgprofil">
                <img src="<?php if(!empty($_SESSION['image'])){echo $_SESSION['image'];} else {echo 'pic/LEAME.jpg'; } ?>" width="100" style="border-radius: 50px;">
              </div>
              <div class="col-lg-7">
                <h1 class="cover-heading"> <?php echo $_SESSION['pseudo']; ?></h1>
              </div>
            </div>
          <h3>Jeux de ma bibliothèque</h3>
          <table style="margin-top:10%;">
            <tr>
              <td style="color:#e62e00">Image</td>
              <td style="color:#e62e00">Nom du jeu</td>
              <td style="color:#e62e00">Temps de jeu en seconde</td>
            </tr>
            <?php foreach($aJeux as $key => $value){ ?>
            <tr>
                <td><img src="<?php echo $value['jeux_image']; ?>"width="50"></td>
                <td><?php echo $value['jeux_nom']; ?></td>
                <td><?php echo $value['temps_de_jeux']; ?> </td>
            </tr>
            <?php } ?>
          </table>


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
  <footer>
    <div class="text-center">
      <h4>Site intégré par L'iim</h4>
    </div>
  </footer>
</html>
<?php } else {
  header('Location: login.php');
}?>
