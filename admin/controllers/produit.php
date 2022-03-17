<?php
    
    //---------------------------------------------------------ajout des nutriments
    if(isset($_POST["add"])){
        $criteres =[
            "id_nutr" => $_POST["id_nutr"],
            "id_prod" => $_POST["id_prod"],
        ];
        insertCriteres("produit_nutriment",$criteres);
        header("Location:".$_SERVER["REQUEST_URI"]);
    }
    
    // --------------------------------------------------------supr des nutriments
    if(isset($_POST["deleteNutr"])){
        //echo "supr " . $_POST["id_nutr"] . " " . $_POST["id_prod"];
        $criteres =[
            "id_nutr" => $_POST["id_nutr"],
            "id_prod" => $_POST["id_prod"],
        ];
        deleteCriteres("produit_nutriment",$criteres);
        header("Location:".$_SERVER["REQUEST_URI"]);
    }

    // -------------------------------------------------------------maj du produit
    if(isset($_POST["update"])){
        //echo $_POST["nom_produit"];

        $fields=    [
                "id_produit"            => $_POST["id_produit"],
                "nom_produit"           => $_POST["nom_produit"],
                "desc_produit"          => $_POST["desc_produit"],
                "sous_titre_produit"    => $_POST["sous_titre_produit"],
                "id_cat_produit"        => $_POST["id_cat_produit"],
        ];
        
        update("produits", $fields ,"id_produit",$_GET["id"]);
        //gestion de l'image
        if(isset($_FILES["photo"]) && $_FILES["photo"]["error"]==0){
            if($_FILES["photo"]["size"]<=3000000){
                //upload
                $infosFichier   = pathinfo($_FILES["photo"]["name"]); // segmenter le nom en infos dans un tableau
                $fichier        = $_FILES["photo"]["tmp_name"]; //url du fichier
                $listeExt = ["jpg","jpeg"];
                if(in_array($infosFichier["extension"],$listeExt)){
                    move_uploaded_file($fichier,"../products/".$_GET["id"].".jpg");
                }
            }
        }
        
        header("Location:".$_SERVER["REQUEST_URI"]);
    }

    // --------------------------------------------------------------infos du produit

    $produits = spe("produits","id_produit",$_GET["id"]);
    $produit = $produits[0];

    $id     = $produit["id_produit"];
    $nom    = $produit["nom_produit"];
    $desc   = $produit["desc_produit"];
    $sTitre = $produit["sous_titre_produit"];
    $idCat  = $produit["id_cat_produit"];

    // ----------------------------------------------------------------récup des catédories

    $categories = all("categorie");

    //---------------------------------------------------------------- récup des nutriments du produit

    $nutriments = nutrimentParProduit($_GET["id"]);

    //------------------------------------------------------------------récup de tous les nutriments

    $allNutriments = all("nutriments");

require("views/produit.php");
?>