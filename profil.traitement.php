<?php
require_once ('db.php');

$sMoi =
'
select *
from users
where id = "'.$_SESSION['id'].'"
';
$oMoi				=	$dbh->query($sMoi);
$aMoi				=	$oMoi->fetchAll(PDO::FETCH_ASSOC);
