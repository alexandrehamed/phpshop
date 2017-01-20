<?php
include "db.php";
session_start();
?>
<?php
if(isset($_POST["pseudo"]) and isset($_POST["password"]) and isset($_POST["email"])){
	$pseudo = htmlspecialchars($_POST["pseudo"]);
	$password = htmlspecialchars($_POST["password"]);
	$email = htmlspecialchars($_POST["email"]);

	$request = $db->prepare("SELECT id FROM members WHERE pseudo LIKE :pseudo OR email LIKE :email");
	$request->execute(

	array(
		"pseudo"=>$pseudo,
		"email"=>$email
	)
);

$members = $request->fetchAll();
if (sizeof($members) == 0){

	$request = $db->prepare("INSERT INTO members (pseudo, password, email, inscription, is_admin)
						VALUES (:pseudo, :password, :email, NOW(), 0)");
	$request->execute(
		array(
			"pseudo" => $pseudo,
			"password"=> $password,
			"email" => $email
			)
		);
	}

	echo "ok";
	header('Location: histoire.php'); 

}

else{
	echo" Error : this member already exists";
}


?>