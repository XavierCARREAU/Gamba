<?php
$titre = "Actualité";
if(isset($_GET["id"])){
    $actu = spe("actualites","id_actu",($_GET["id"])); // donne la ligne corespondant à l'id
    $lactu = $actu[0]; //donne le tableau contenu dans la ligne
    //var_dump($leproduit);
    $id         = $lactu["id_actu"];
    $titre      = $lactu["nom_actu"]; 
    $nom        = $lactu["nom_actu"];
    $desc       = $lactu["dec_actu"];
    $content    = $lactu["content_actu"];

    $etiquettes = etiquetteParAcutalite($id);
}
require("views/page_actualite.php");
?>