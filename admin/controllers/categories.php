<?php

if(isset($_POST["delete"])){
    //echo "sup." . $_POST["id"];
    delete("categorie","id_cat",$_POST["id"]);
    header("Location:".$_SERVER["REQUEST_URI"]);
}

if(isset($_POST["insert"])){
    insert("categorie","nom_cat","Nouvelle catégorie");
    //header("Location:".$_SERVER["REQUEST_URI"]);
}

$categories = all("categorie");

require("views/categories.php");
?>