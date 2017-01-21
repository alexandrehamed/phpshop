<?php require_once("conf.php") ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
    <title>Login and Registration Form with HTML5 and CSS3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
    <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
    <meta name="author" content="Codrops" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bibliotheque.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Lora|Francois+One|Montserrat+Alternates" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/store.css">
<?php include_once("header.php")?>
    <?php

    $bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');

    $jeux = $bdd->query('SELECT nomJeux,image,resume FROM jeux ORDER BY id DESC');
    if(isset($_GET['q']) AND !empty($_GET['q'])) {
       $q = htmlspecialchars($_GET['q']);
       $jeux = $bdd->query('SELECT nomJeux,image,resume FROM jeux WHERE nomJeux LIKE "%'.$q.'%" ORDER BY id DESC');
       /*if($jeux->rowCount() == 0) {
          $jeux = $bdd->query('SELECT nom FROM jeux WHERE CONCAT(nom, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
       }
       */
    //$monImage = $bdd->query('SELECT image FROM jeux WHERE nomJeux = "mario kart"');
    }
    ?>


</head>





<body>



<div class="container-fluid margin_t_50">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>Bibliotheque</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="games_list text-center margin_t_50">
                        <ul>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>
                            <br>
                            <li>zaeazezaeazezaea</li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>







        </div>



    <div class="col-md-6 ">

            <div class="dropdown pos" style="position: absolute">
                <button class=" dropdown-toggle btn-5" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Catégorie
                    <span class="caret"></span>
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <select class="texte" name="id">


                </select>
                </ul>

            </div>
            <br>


            <form method="GET">
               <input type="search" name="q" placeholder="Recherche..." />
               <input type="submit" value="Valider" />
            </form>
        <?php if($jeux->rowCount() > 0) { ?>
           <ul>
           <?php while($a = $jeux->fetch()) { ?>
             <th>
              <td><li><?= $a['nomJeux'] ?></li></td>
              
              <td><li><a href="jeux.php?nomJeux=<?php echo $a['nomJeux'];?>">
                        <img src=<?= $a['image'] ?>  />
                        <strong><?= $a['nomJeux'] ?></strong>
                      </a>
                  </li>
              </td>
              <td><li><?= $a['resume'] ?></li></td>
            </th>
              <br>
           <?php } ?>
           </ul>
        <?php } else { ?>
        Aucun résultat pour : <?= $q ?>...
        <?php } ?>



        </div>
        <div class="col-md-3">
            <button type="button" class="amis margin_t_50" data-toggle="modal" data-target="#myModal">
                <h3>Amis en ligne</h3>
            </button>

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            ICI liste amis
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
