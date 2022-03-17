<?php
$titre = "Catégorie";
if(isset($_GET["id"])){
    $categorie = spe("categorie","id_cat",$_GET["id"]);
    $lacategorie = $categorie[0];

    $id     = $lacategorie["id_cat"];
    $titre  = $lacategorie["nom_cat"];
    $nom    = $lacategorie["nom_cat"];
    $desc   = $lacategorie["desc_cat"];
    $text   = $lacategorie["text_cat"];

    $titre = "categorie $nom";
    
    $produits = spe("produits","id_cat_produit",$_GET["id"]);
}

require("views/page_categorie.php");
?>