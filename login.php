<?php
include ('db.php')
?>
<?php
if(isset($_POST["pseudo"]) and isset($_POST["password"])){
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);

    $request = $db->prepare("SELECT id FROM users WHERE pseudo LIKE :pseudo AND password = :password");
    $request->execute(
        array(
            "pseudo" => $pseudo,
            "password" => $password
        )
    );

    $members = $request->fetchAll();
    if(sizeof($members) > 0){

        $id_members = $members[0]["id"];
        $_SESSION["id_members"] = $id_members;

        header('Location: index.php');

    }

    else {
        echo "Error : your pseudo/password is incorrect";
    }
}
?>