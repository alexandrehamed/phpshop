<?php
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
            $request = $db->prepare("SELECT id FROM users WHERE pseudo LIKE :pseudo");
            $request->execute(
                array(
                    "pseudo" => $pseudo,
                )
            );
            $joueurs = $request->fetchAll();
            if (sizeof($joueurs) ==0){
            }
            else{
                echo "Erreur : ce joueurs existe déjà";
            }
            $request = $db->prepare("INSERT INTO users (pseudo, password ) VALUES (:pseudo, :password)");
            $request->execute(
                array(
                    "pseudo" => $pseudo,
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

    <html>
    <head>
    <title>Inscription</title>
    </head>

    <body>
    Inscription à l'espace membre :<br />
    <form action="signindeux.php" method="post">
    Login : <input type="text" name="pseudo"><br />
    Mot de passe : <input type="password" name="password"><br />
    <input type="submit" name="action" value="Inscription">
    </form>

    </body>
    </html>
