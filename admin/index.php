<?php 
	ini_set("display_errors",1); //affichage de erreurs
	session_start();
    require("../core/bdd.php"); //connexion bdd avec un retour en arrière dans l'arborescence 
	require("core/rooter.php"); 
	
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Administration</title>
	<link rel="stylesheet" href="styles/style.css">
	<script src="js/script.js"></script>
</head>
<body>

	<?php echo $content ?>
	
</body>
</html>