<?php
$titre = "Produit";
if(isset($_GET["id"])){
    $produit = spe("produits","id_produit",($_GET["id"])); // donne la ligne corespondant à l'id
    $leproduit = $produit[0]; //donne le tableau contenu dans la ligne
    //var_dump($leproduit);
    $id     = $leproduit["id_produit"];
    $titre  = $leproduit["nom_produit"]; 
    $nom    = $leproduit["nom_produit"];
    $desc   = $leproduit["desc_produit"];
    $stitre = $leproduit["sous_titre_produit"];

    $nutriments = nutrimentParProduit($id);
}
require("views/page_produit.php");
?>