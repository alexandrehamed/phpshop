<meta charset="utf-8" />
<?php

$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');

$jeux = $bdd->query('SELECT nom FROM jeux ORDER BY id DESC');
if(isset($_GET['q']) AND !empty($_GET['q'])) {
   $q = htmlspecialchars($_GET['q']);
   $jeux = $bdd->query('SELECT nom FROM jeux WHERE nom LIKE "%'.$q.'%" ORDER BY id DESC');
   /*if($jeux->rowCount() == 0) {
      $jeux = $bdd->query('SELECT nom FROM jeux WHERE CONCAT(nom, contenu) LIKE "%'.$q.'%" ORDER BY id DESC');
   }
   */

}
?>
<form method="GET">
   <input type="search" name="q" placeholder="Recherche..." />
   <input type="submit" value="Valider" />
</form>
<?php if($jeux->rowCount() > 0) { ?>
   <ul>
   <?php while($a = $jeux->fetch()) { ?>
      <li><?= $a['nom'] ?></li>
   <?php } ?>
   </ul>
<?php } else { ?>
Aucun résultat pour: <?= $q ?>...
<?php } ?>
