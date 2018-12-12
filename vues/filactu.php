<?php
session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

?>

<html>
      <link href="https://fonts.googleapis.com/css?family=Oswald|Righteous" rel="stylesheet"> 
      <link href="../style.css" rel="stylesheet">
	<body>
	<h3>Bienvenue jeune padawan!</h3>
    <div class="accueil">
        <input type="button" href="profil.php" value="Profil">
	<input type="button" href="index.php?action=connexion" value="Deconnexion">
        </div>
	<?php
		include("nouveaupost.php");
		include("ancienpost.php");
	?>
        
	</body>
</html>
