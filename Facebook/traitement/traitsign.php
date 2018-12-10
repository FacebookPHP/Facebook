<?php

//Test de toutes les variable dans le form
if (isset($_POST['username'])
&& isset($_POST['prenom'])
&& isset($_POST['nom'])
&& isset($_POST['password'])
&& isset($_POST['password2'])
&& isset($_POST['email'])){
    $username = ($_POST['username']);
    $prenom = ($_POST['prenom']);
    $nom = ($_POST['nom']);
    $password = ($_POST['password']);
    $password2 = ($_POST['password2']);
    $email = ($_POST['email']);
}

//On regarde si le nom d'utilisateur n'existe pas deja
$req = $pdo -> prepare("SELECT * FROM user WHERE username=?");
$req -> execute(array($username));
if($username = $req->fetch()){
    echo("Ce nom d'utilisateur est deja pris, veuillez en choisir un autre");
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo("Votre email est incorrect");
}elseif($password != $password2){
    echo("Vos mots de passe sont differents");
}else{
      

    //On ajoute l'utilisateur a la bdd
    $req = $pdo -> prepare("INSERT INTO user(username,prenom,nom,pass,email) VALUE (?,?,?,PASSWORD(?),?)");
    $req -> execute(array($username,$prenom,$nom, $password,$email));
    
    $_SESSION['id'] = $pdo->lastInsertId();
    $_SESSION["username"] = $username;
    echo("Bienvenue sur Starbook !");
}


?>