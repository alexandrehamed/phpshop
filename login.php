<?php
// on se connecte à MySQL
$db = mysql_connect('localhost', 'root', 'root');
mysql_select_db('mydb',$db);

if(isset($_POST) && !empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
$_POST['mdp'] = hash("pseudo", $_POST['mdp']);
  extract($_POST);
  // on recupére le password de la table qui correspond au login du visiteur
  $sql = "select mdp from users where pseudo='".$user."'";
  $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

  $data = mysql_fetch_assoc($req);

  if($data['mdp'] != $password) {
    echo '<div class="alert alert-dismissable alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>Oh Non !</strong> Mauvais login / password. Merci de recommencer !
</div>';
  }

  else {
    session_start();
    $_SESSION['pseudo'] = $login;

    echo '<div class="alert alert-dismissable alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Yes !</strong> Vous etes bien logué, Redirection dans 5 secondes ! <meta http-equiv="refresh" content="5; URL=dashboard">
</div>';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres
  }
}
else {
  $champs = '<p><b>(Remplissez tous les champs pour vous connectez !)</b></p>';
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" action="">

    <legend>Connexion au Panel</legend>

    <div class="form-group">
      <label class="col-lg-2 control-label">Login</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="login" placeholder="Login">
      </div>
    </div><br/><br/><br/>

    <div class="form-group">
      <label class="col-lg-2 control-label">Mot de passe</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
    </div>

<br/><br/><center><button type="submit" name="submit" class="btn btn-primary">Connexion</button></center>
</form>

  </body>
</html>
