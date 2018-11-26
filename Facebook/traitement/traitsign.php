<?php
if (isset($_POST['username'])
&& (isset($_POST['prenom'])
&& (isset($_POST['nom'])
&& (isset($_POST['password'])
&& (isset($_POST['password2'])
&& (isset($_POST['email'])){
    $username = ($_POST['username']);
    $prenom = ($_POST['prenom']);
    $nom = ($_POST['nom']);
    $password = ($_POST['password']);
    $password2 = ($_POST['password2']);
    $email = ($_POST['email']);
}
?>