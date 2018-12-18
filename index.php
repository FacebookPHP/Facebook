<?php

include("config/bd.php");
include("config/actions.php");
session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées


?>

<html>
    <head>
        <title>Facebook</title>
        <meta charset ="UTF-8">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Oswald|Righteous" rel="stylesheet"> 
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div>
            
        <header>
            <h1><a href="index.php?action=accueil">Starbook</a></h1>
        </header>
            </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php
                    // Quelle est l'action à faire ?
                    if (isset($_GET["action"])) {
                        $action = $_GET["action"];
                    } else {
                        $action = "accueil";
                    }
        
                    // Est ce que cette action existe dans la liste des actions
                    if (array_key_exists($action, $listeDesActions) == false) {
                        include("vues/404.php"); // NON : page 404
                    } else {
                        include($listeDesActions[$action]); // Oui, on la charge
                    }
        
                    ob_end_flush(); // Je ferme le buffer, je vide la mémoire et affiche tout ce qui doit l'être
                    ?>
                </div>
                <div class="col">
                    <div id="login">
                    <?php
                        if (isset($_SESSION['id'])) {
                            echo "<li>Bonjour " . $_SESSION['username'] . " <a href='index.php?action=deconnexion'>Deconnexion</a></li>";
                        } else {
                            echo '<a href="index.php?action=connexion">Log in</a><br>
                            <a href="index.php?action=inscription">Sign up</a>';
                        }
                        ?>

                    </div>
                    <div id="navigation">
                        <a href="index.pg"
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>