<?php
require_once ('db.php');


$sJeux ='
select *
from jeux
where id = "'.$_GET['id'].'"
';

$oJeux				=	$dbh->query($sJeux);
$aJeux				=	$oJeux->fetchAll(PDO::FETCH_ASSOC);



if(!empty($_POST['inserer'])){
  $sInsert ='
  INSERT INTO
  `Panier`
      (
        `jeux_id`,`id`
      )
  VALUES
    (
      :jeux_id, :id
    )
  ;
  ';
  $aParamUser			=	[
  ':jeux_id'			=>	$_GET['id'],
  ':id'			=>	$_SESSION['id'],

  ];

  $oInsert	=	$dbh->prepare ( $sInsert );
  $bReturn = $oInsert->execute( $aParamUser );

}
if ($bReturn){
  header('Location: store.php');
}
