<?php
$titre = "Recherche";
$mot = "";
if(isset($_POST["recherche"]) && $_POST["recherche"] != ""){
    $mot = $_POST["recherche"];
    $produits = like("produits","nom_produit",$_POST["recherche"]);
}



require("views/page_recherche.php");
?>