<?php 
	ini_set("display_errors",1); //affichage de erreurs
    require("core/bdd.php"); //connexion bdd 
	require("core/rooter.php"); 
	
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo $titre ?></title>
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>

	<?php echo $content ?>
	
</body>
</html>