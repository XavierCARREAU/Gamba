<?php

function afficher($view){
	if($view == "header"){
		require("controllers/header.php");
	}
	if($view == "footer"){
		require("controllers/footer.php");
	}
	if($view == "contact"){
		require("controllers/contact.php");
	}
	if($view == "produits"){
		require("controllers/produits.php");
	}
}

/*Gestion des pages*/
$p = "";
if(isset($_GET["p"])){
	$p = $_GET["p"];
}
ob_start(); // création de la mémoire tampon
switch($p){
	case "produit":
		require("controllers/page_produit.php");
	break;
	case "categorie":
		require("controllers/page_categorie.php");
	break;
	case "categories":
		require("controllers/page_categories.php");
	break;
	case "panier":
		require("controllers/page_panier.php");
	break;
	case "recherche":
		require("controllers/page_recherche.php");
	break;
	case "actualites":
		require("controllers/page_actualites.php");
	break;
	case "actualite":
		require("controllers/page_actualite.php");
	break;
	case "nutriments":
		require("controllers/page_nutriments.php");
	break;
	default:
		require("controllers/page_accueil.php");
}
$content = ob_get_contents(); // récupération des données de la mémoire tampon
ob_end_clean(); // fin et supression de la mémoire tampon
?>