<?php
require_once ('db.php');
//var_dump($_POST['connexion']);exit();
//var_dump(!empty( $_POST['connexion']));
if ( empty( $_POST['connexion'] ) ) {
	$motdepasse=$email=$password = '';
} elseif ( !empty( $_POST['connexion']) ) {

	$email					=	( !empty( $_POST['email'] ) )		?	htmlentities( $_POST['email'] )		: '';
	$password				=	( !empty( $_POST['password'] ) )	?	htmlentities( $_POST['password'] )				: '';
	$aError					=	array();

	if( empty($email) ) {
	   $aError[]					=	'Veuillez saisir votre email';
	} elseif (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
	   $aError[]					=	'Veuillez vérifier la synthaxe de votre adresse email';
	}

	if (empty($password)) {
	   $aError[]					=	'Veuillez saisir votre mot de passe';
	}

	if( empty ($aError) ){

    // Récupération de l'utilisateur
	$sUser						=	'
		SELECT *
		FROM users
		where email = :email
		and password = :mdp
	';

	$aParamUser				=	[
		':email'			=>	$email,
		':mdp'				=>	$password
	];
// ---
// Préparation et execution de la requête
	$oQuery					=	$dbh->prepare( $sUser );

	$oQuery->execute( $aParamUser );
	$aUser					=	$oQuery->fetch();


		if ( $email == $aUser['email']
    && $password == $aUser['password'] )
    {
      //var_dump($aUser['user_mdp'],$aUser['user_email'],$email,$password);exit();
			$_SESSION['id']= $aUser['id'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['pseudo'] = $aUser['pseudo'];


			header('Location: index.php');
		} else {
			$aError[]	=	 ' Votre email ou mot de passe est invalide ';
		}
	}

}
