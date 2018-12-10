<?php
session_start();
ob_start(); // Je démarre le buffer de sortie : les données à afficher sont stockées

?>

<html>
	<body>
	<h3>Bienvenue jeune padawan!</h3>
    <input type="button" href="profil.php" value="Profil">
	<input type="button" href="index.php?action=connexion" value="Deconnexion">
	<?php
		include("nouveaupost.php");
		include("ancienpost.php");
	?>
        
	</body>
</html>
