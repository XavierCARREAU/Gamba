<?php
/*Gestion des pages*/
$p = "";
if(isset($_GET["p"])){
	$p = $_GET["p"];
}
ob_start(); // création de la mémoire tampon
if(isset($_SESSION["admin"]) && $_SESSION["admin"]==1){
	switch($p){
		case "produits":
			require("controllers/produits.php");
		break;
		case "produit":
			require("controllers/produit.php");
		break;
		case "categories":
			require("controllers/categories.php");
		break;
		case "categorie":
			require("controllers/categorie.php");
		break;
		case "logout":
			require("controllers/logout.php");
		break;
		default:
			require("controllers/accueil.php");
	}
}else{
	require("controllers/login.php");
}
$content = ob_get_contents(); // récupération des données de la mémoire tampon
ob_end_clean(); // fin et supression de la mémoire tampon
?>