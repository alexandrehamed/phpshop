<?php
require_once ('config.php');
include 'panier.traitement.php';
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>Galerie avec effet de survol CSS3</title>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" media="screen" href="css/style.css" />


  <title>Steam Like</title>



</head>
<body>
  <div class="site-wrapper">
    <div class="site-wrapper-inner">
      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <p class="flotte">
            <img src="pic/user.png" class="img-circle" alt="Responsive image" width= "50px;">
            </p>
            <h3 class="masthead-brand"><?php echo $_SESSION['pseudo'];?></h3>
            <nav>
              <ul class="nav masthead-nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="store.php">Store</a></li>
                <li><a href="bibliotheque.php">Ma Bibliotheque</a></li>
                <li class="active"><a href="profil.php">Mon Profil</a></li>
                <li><a href="ami.php">Amis</a></li>
                <li><a href="utilisateurs.php">Tous les utilisateurs</a></li>
                <li><a href="deconnexion.php"><button type="button" name="deconnexion" class="btn btn-danger">Se déconnecter</button></a></li>
                <li><a href="panier.php"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="container marg">
      <div class="row">
        <div class="col-xs-7 col-md-8 col-sm-8 col-lg-8">
          <div class="panel panel-primary">
            <div id="divTotal" class="panel-heading">
              <h3 class="panel-title">Récapitulatif du panier</h3>
            </div>
          </div>
          <div class="well">
           <table id="black" class="table">
              <tr>
                <td>
                  Image du jeu
                </td>
                <td>
                   Nom du jeu
                </td>
                <td>
                   Prix
                </td>
                <td>
                Supprimer</td>
              </tr>
              <?php foreach($aPanier as $key => $value) { ?>
                <tr>
                  <td><img src="<?php if(!empty($value['jeux_image'])){echo $value['jeux_image']; } else {echo 'pic/LEAME.jpg'; }?>" class="img-circle" alt="Responsive image" width= "50px;"></td>
                  <td><?php echo $value['jeux_nom']; ?></td>
                  <td><?php echo $value['jeux_prix']; ?> €</td>
                  <td><a style="color:red" href="suppression.php">Supprimer <?php $_SESSION['jeux_id'] = $value['jeux_id']; ?></a></td>
                </tr>
            <?php  } ?>
           </table>
         </div>
        </div>
        <div class="col-xs-5 col-md-4 col-sm-4 col-lg-4" data-spy="affix" data-offset-top="20">
          <div class="panel panel-primary">
            <div id="divTotal" class="panel-heading">
                <h3 class="panel-title">Total</h3>
            </div>
            <div id="black" class="panel-body text-center">
                <h2><?php echo $aPrix[0]['jeux_prix']; ?> €</h2>
            </div>
          </div>
          <div class="text-center">
            <a href="checkout.php" class="btn btn-success">Valider  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
          </div>
        </div>
      </div><!-- /.row  -->
    </div>
  </body>
</html>

<?php } else {
  header('Location: login.php');
}?>
