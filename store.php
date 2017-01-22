<?php
require_once ('db.php');
include 'store.traitement.php';
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title>Galerie avec effet de survol CSS3</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />

  <title>Steam Like</title>
  <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
  <!-- Inclure jQuery -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
    <!-- Inclure le script pour la molette pour la galerie si vous souhaitez l'utiliser -->
  <script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
    <!-- Inclure le script de la fancybox -->
  <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>

  <script type="text/javascript">
      $(document).ready(function() {
        /*
        *   Examples - images
        */

        $("a#example1").fancybox();

      });
    </script>


</head>
<body>
  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="masthead clearfix">
          <div class="inner">
            <h3 class="masthead-brand"><?php echo $_SESSION['pseudo'];?></h3>
            <nav>
              <ul class="nav masthead-nav">
                <li ><a href="index.php">Accueil</a></li>
                <li class="active"><a href="store.php">Store</a></li>
                <li><a href="bibliotheque.php">Ma Bibliotheque</a></li>
                <li><a href="profil.php">Mon Profil</a></li>
                <li><a href="ami.php">Amis</a></li>
                <li><a href="utilisateurs.php">Tous les utilisateurs</a></li>
                <li><a href="deconnexion.php"><button type="button" name="deconnexion" class="btn btn-danger">Se déconnecter</button></a></li>
                <li><a href="panier.php?id=<?php echo $_SESSION['id']; ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="content">
  <div id="works">
    <div class="row">
    <form class="formindex" action="" method="get" style="overflow:hidden">

      <div class="col-lg-9">
        <div class="search">
          <input id="recherche"  type="text" class="search-box"  placeholder="Recherche" name="recherche" value="<?php echo $recherche;?>"/>
          <label for="search-box"><span class="glyphicon glyphicon-search search-icon"></span></label>
    			<input id="search-submit" type="submit"value="" placeholder="Search" style="background-color:#1776B5;"/>
    		</div>
      </div>
      <div class="col-lg-3">

        <select style=""name="type" id="categAjoutModif" style="margin-bottom:5%" onchange="this.form.submit()">
          <option  id="option" style="" <?php if(empty($value)) { ?> selected="selected" <?php }?>>Selectionnez une catégorie</option>
        <?php if (!empty($aCategorie) ) {

          foreach ( $aCategorie as $key => $value) { ?>

            <option style="background-color:#1776B5;" value="<?php echo $value['categorie_nom']; ?>" <?php if($_GET['type']==$value['categorie_nom']) {?>selected="selected"<?php }?>><?php echo $value['categorie_nom'];?></option>
        <?php }
      } ?>
        </select>

      </div>
    </form>
    </div>
  <?php foreach ($aJeux as $key => $value){ ?>
  <a id="example1" href="jeux.php?id=<?php echo $value['jeux_id']; ?>">
    <div class="work" >
      <img src="<?php echo $value['image']; ?> " />
      <div class="triangle-gauche"></div><!-- .triangle-gauche -->
      <div class="triangle-droite"></div><!-- .triangle-droite -->
      <span><?php echo $value['jeux_nom']; ?> <br /><?php echo $value['resume']; ?> </span>
    </div><!-- .work -->
  </a>
  <?php } ?>

  </div><!-- #works -->

  </div><!-- #content -->
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
