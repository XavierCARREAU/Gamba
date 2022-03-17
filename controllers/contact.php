<?php
$message = "";
$envoi = false;
        if(isset($_POST["nom"])){ //test si le $_POST existe
            if($_POST["nom"]==""){ //Test si le champ es vide
                $message .= "le nom est obligatoire<br>"; //si champ vide -> message d'erreur
            }
            if($_POST["prenom"]==""){ //Test si le champ es vide
                $message .= "le prenom est obligatoire<br>"; //si champ vide -> message d'erreur
            }
            if($_POST["email"]==""){ //Test si le champ es vide
                $message .= "l'email est obligatoire<br>"; //si champ vide -> message d'erreur
            }
            if($_POST["cp"]==""){ //Test si le champ es vide
                $message .= "le code postal est obligatoire<br>"; //si champ vide -> message d'erreur
            }
            if($_POST["question"]==""){ //Test si le champ es vide
                $message .= "Votre question est obligatoire<br>"; //si champ vide -> message d'erreur
            }
            if($message == ""){ //si aucunes erreurs
                //envoi du form par mail
                $envoi = true;
            }
        }

require("views/contact.php");
?>