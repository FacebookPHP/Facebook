<?php
if (isset($_POST['username'])
    && isset($_POST['password'])){
        $sql = "SELECT * FROM user WHERE login=?";
        $q = $pdo->prepare($sql);
        $q->execute(array($_POST['username']));
        if($line=$q->fetch()){
            if ($_GET['password'] == PASSWORD($line.['password'])){
                session_start();
                include("vues/accueil.php");
            }
        }
    }
?>