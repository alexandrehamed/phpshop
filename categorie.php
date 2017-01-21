<meta charset="utf-8" />
<link rel="stylesheet" href="css/store.css">
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

<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($jeux->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $jeux->fetch()) { ?>
     <th>
      <td><li><?= $a['nomJeux'] ?></li></td>
      <td><li><a href="#">
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
