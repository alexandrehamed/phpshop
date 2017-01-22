<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="icon" href="../../favicon.ico">
    <title>Steam Like</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
<div class="container">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <p class="flotte">
              </p>
              <h3 class="masthead-brand"><?php echo $_SESSION['pseudo'];?></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li><a href="login.php">Login</a></li>
                  <li class="active"><a href="signin.php">Inscription</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="stars"></div>
          <div class="stars1"></div>
          <div class="stars2"></div>
          <div class="shooting-stars"></div>
          <?php ?>
          <div class="col-lg-12 formulaire">
            <form method="post" id="form" autocomplete="off" action="signin.traitement.php" >
              <h1 id="titre">Inscription</h1>
              <?php
              //var_dump($aError);exit();
              if ( !empty($aError) ) {

                ?>
              <div class="erreurs">
                <?php
                  foreach( $aError as $iError ) {
                    ?> <div class="logerreur"><?php echo $iError; ?> </div> <?php
                  }
                ?>
              </div>
              <?php } ?>
              <div class="col-lg-6 col-lg-offset-3 champ">
                <input type="text" id="email" name="pseudo" placeholder="Nom de compte"/>
              </div>
              <div class=" col-lg-6 col-lg-offset-3 champ">
                <input type="password" id="password" name="password" placeholder="Mot de Passe"/>
              </div>
              <div class=" col-lg-6 col-lg-offset-3 champ">
                <input type="password" id="password" name="confirme_password" placeholder="Confirmer le mot de passe"/>
              </div>
              <div class=" col-lg-6 col-lg-offset-3 champ">
                <input id="email" type="email" name="email"  placeholder="Email"/>
              </div>
              <div class=" col-lg-6 col-lg-offset-3 champ">
                <input id="email" type="email" name="confirme_email"  placeholder=" Confirmer l'Email"/>
              </div>
              <div class=" col-lg-4 col-lg-offset-4 bouton">
                <input id="connexion" type="submit" name="inscription" value="Inscription" />
              </div>

            </form>

          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Site customisé par <a href="http://www.iim.fr/">l'IIM</a>.</p>
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
  <footer>
    <div class="text-center">
      <h4>Site intégré par L'iim</h4>
    </div>
  </footer>
</html>
