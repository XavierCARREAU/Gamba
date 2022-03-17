<?php

if(isset($_POST["delete"])){
    //echo "sup." . $_POST["id"];
    delete("produits","id_produit",$_POST["id"]);
    header("Location:".$_SERVER["REQUEST_URI"]);
}

if(isset($_POST["insert"])){
    insert("produits","nom_produit","nouveau produit");
    header("Location:".$_SERVER["REQUEST_URI"]);
}

$produits = all("produits");

require("views/produits.php");
?>