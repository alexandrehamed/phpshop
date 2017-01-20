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