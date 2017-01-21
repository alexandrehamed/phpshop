<?php
$bdd = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8','root','root');
$jeux = $bdd->query('SELECT * FROM jeux WHERE nomJeux = "mario kart"');

?>

<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
  <link rel="stylesheet" href="css/bobo.css">
</head>

<body>
<div class="table-title">
<h3>Information Jeux</h3>
</div>
<table class="table-fill">
<thead>
<tr>
  <? while($row = $jeux->fetch()) { ?>
    <th><p class="text-error">#</p></th>
<td><? echo $row['id']; ?></td>
</tr>
<tr>
  <th><p class="text-error">Nom</p></th>
<td><? echo $row['nomJeux']; ?></td>
</tr>
<tr>
<th><p class="text-error">dateDeSortie</p></th>
<td><? echo $row['dateDeSortie']; ?></td>
</tr>
<tr>
<th><p class="text-error">pegi</p></th>
<td><? echo $row['pegi']; ?></td>
</tr>
<tr>
<th><p class="text-error">categorie</p></th>
<td><? echo $row['categorie']; ?></td>
</tr>
<tr>
<th><p class="text-error">prix</p></th>
<td><? echo $row['prix']; ?></td>
</tr>
<tr>
<th><p class="text-error">resume</p></th>
<td><? echo $row['resume']; ?></td>
</tr>
<tr>
<th><p class="text-error">image</p></th>
<td><img src="<?php echo $row['image']; ?>" width="100"></td>
</tr>

</thead>
<? }
$req->closeCursor();
?>
</table>


  </body>
