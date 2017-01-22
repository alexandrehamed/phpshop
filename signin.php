<?php
<<<<<<< HEAD
session_start();
include "db.php"
?>
    <?php

    if (isset($_POST["pseudo"]) &&
        isset($_POST["password"]) &&
        isset($_POST["email"])){
        if( !empty($_POST["pseudo"]) &&
            !empty($_POST["password"]) &&
            !empty($_POST["email"])){
            $pseudo =htmlspecialchars($_POST["pseudo"]);
            $password = htmlspecialchars ($_POST["password"]);
            $email = htmlspecialchars ($_POST["email"]);
            $request = $db->prepare("SELECT id FROM users WHERE pseudo LIKE :pseudo OR email LIKE :email");
            $request->execute(
                array(
                    "pseudo" => $pseudo,
                    "email" => $email
                )
            );
            $joueurs = $request->fetchAll();
            if (sizeof($joueurs) ==0){
            }
            else{
                echo "Erreur : ce joueurs existe déjà";
            }
            $request = $db->prepare("INSERT INTO users (pseudo, email, password ) VALUES (:pseudo, :email, :password)");
            $request->execute(
                array(
                    "pseudo" => $pseudo,
                    "email" => $email,
                    "password" => $password
                )
            );
            header('Location: index.php');
        }
        else{
            echo "Merci de renseigner tous les champs";
        }
    }
    ?>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="../../assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script type="js/script.js">

</script>


</body>
</html>
=======
      session_start();
      include ("db.php");



		if (isset($_POST["pseudo"]) &&
			isset($_POST["password"]) &&
			isset($_POST["email"]))  {


	$pseudo = htmlspecialchars($_POST["pseudo"]);
	$password = htmlspecialchars($_POST["mdp"]);
	$email = htmlspecialchars($_POST["email"]);
	// préparation de la requête : est-ce qu'un membre avec ce pseudo ou cet email existe déjà?
	$request = $db->prepare("SELECT id FROM members WHERE pseudo LIKE :pseudo OR email LIKE :email");
	// execution de la requête : on remplace :pseudo et :email par les valeurs entrées dans le formulaire
	$request->execute(
		array(
			"pseudo" => $pseudo,
			"email" => $email
		)
	);
	// on récupère tous les membres correspondant ) la requête
	$members = $request->fetchAll();
	// sil il y en a 0, c'est qu'aucun membre avec ces identifiants existe, on peut le créer
	if (sizeof($members) == 0){

		// on code ici l'insertion
		// par défaut, la date d'inscription est maintenant (NOW()), et l'utilisateur n'est pas admin(0)
		$request = $db->prepare("INSERT INTO members (pseudo, password, email, inscription_date, is_admin)
								 Values (:pseudo, :password, :email, NOW(), 0)");
	$request->execute(
		array(
			"pseudo" => $pseudo,
			"password" => $password,
			"email" => $email
			)
		);
$request = $db->prepare("SELECT id, is_admin FROM members WHERE pseudo LIKE :pseudo AND password = :password");
	$request->execute(
		array(
			"pseudo" => $pseudo,
			"password" => $password
		)
	);
//fetchAll renvoie un tableau avec tous les membres correspondant à la requête
$members = $request->fetchAll();
// si il y en a plus de 0, c'est qu'un membre avec ces identifiants existe. On le connecte.
if (sizeof($members) > 0) {
	//on récupère l'id du membre (le[0] est le premier du tableau)
	//(et le seul puisqu'on n'autorise pas les doublons)
	$id_member = $members[0]["id"];

	//on crée la variable de session qui nou permettra de savoir qu'il est connecté
	$_SESSION["id_member"] = $id_member;
	$is_admin = $members[0]["is_admin"];

	//on crée la variable de session qui nou permettra de savoir qu'il est connecté
	$_SESSION["is_admin"] = $is_admin;
	header("Location:index.php"); //on redirige vers la home
}
}
else{   //sinon on ne veut pas de doublon donc on ne le crée pas
		echo"Error : this member already exists";
		?> <a href="signin.php">Try again</a>
		<?php
	}
}
else {
?>
>>>>>>> bdd
