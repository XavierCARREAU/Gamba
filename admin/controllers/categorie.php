<?php

    if(isset($_POST["update"])){
        //echo $_POST["nom_cat"];

        $fields=    [
                "id_cat"            => $_POST["id_cat"],
                "nom_cat"           => $_POST["nom_cat"],
                "desc_cat"           => $_POST["desc_cat"],
                "text_cat"           => $_POST["text_cat"],
        ];
        
        update("categorie", $fields ,"id_cat",$_GET["id"]);
        header("Location:".$_SERVER["REQUEST_URI"]);
    }

    // infos du produit

    $categories = spe("categorie","id_cat",$_GET["id"]);
    $categorie = $categories[0];

    $id     = $categorie["id_cat"];
    $nom    = $categorie["nom_cat"];
    $desc   = $categorie["desc_cat"];
    $text   = $categorie["text_cat"];
    

require("views/categorie.php");
?>