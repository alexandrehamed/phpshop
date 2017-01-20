<?php
//Connexion à la BDD
  try
  {

   $bdd = new PDO ('mysql:host=localhost;dbname=mydb', 'pseudo', 'password');

  }

  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }

    if(ISSET($_POST['submit']))
{


//On créer les variables
$login =   $_POST['pseudo'];
$password = $_POST['mdp'];





$req = $bdd->prepare('INSERT INTO users(pseudo, mdp) VALUES (:pseudo, :mdp)');


$req->execute(array("pseudo" => $login, "mdp" => $password));


if(!empty($login) && !empty($password))
{


}else{
?>


<b>Pseudo ou MDP vide !</b>


<?php
}


if(empty($login) && empty($password))
{


}else{


session_start();
$_SESSION['pseudo'] = $_POST['mdp'];
header('Location: dashboard');


}


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

        <legend>S'inscrire sur le site</legend>

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

    <br/><br/><center><button type="submit" name="submit" class="btn btn-primary">S'Inscrire</button></center>
    </form>

  </body>
</html>
