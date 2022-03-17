<?php 
    //conexion à la base de donnée
    $serveur    = "localhost";
    $bdd        = "gamba";
    $user       = "root";
    $password   = "root";
    
    //test de la connexion à la bdd
    try{
        $db = new PDO("mysql:host=$serveur;dbname=$bdd",$user,$password); //connexion bdd
    }catch(PDOException $erreur){ //si connexion fail
        echo "ERROR : ". $erreur->getMessage(); //affiche msg erreur
    }

    
    //------------------------------------------------------------------------------------------------------fonction INSERT 

    function insert($table,$champ,$data){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $sql = "INSERT INTO $table ($champ) values (\"$data\")"; //requête SQL
        //echo $sql;
        $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
    }

     // ----------------------------------------------------------------------------------------------------fonction INSERT par critères

    function insertCriteres($table,$criteres){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $champ = "";
        $data = "";
        $i=1;
        foreach($criteres as $key => $critere){
            $champ  .= "$key";
            $data   .= "\"$critere\"";
            if($i<count($criteres)){
               $champ   .= ",";
               $data    .= ",";
               $i++;
           }
        }

        $sql = "INSERT INTO $table ($champ) values ($data)"; //requête SQL
        
        //echo $sql;
        $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
    }

    // ----------------------------------------------------------------------------------------------------fonction UPDATE 

    function update($table,$fields,$champCondition,$id){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $sql = "UPDATE $table SET "; //requête SQL
        foreach($fields as $key => $value){
            $value = addslashes($value);
            $sql .= "$key = \"$value\", ";
        }
        $sql .= "$champCondition = \"$id\""; //redite à cause de la dernière vigule de la boucle + sécurité (imposible de changer la clé primaire) 
        $sql .= " WHERE $champCondition = $id";
        //echo $sql;
        $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
    }

    // ----------------------------------------------------------------------------------------------------fonction DELETE 

    function delete($table,$champ,$data){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $sql = "DELETE FROM $table WHERE $champ = \"$data\""; //requête SQL
        //echo $sql;
        $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
    }
    
    // ----------------------------------------------------------------------------------------------------fonction DELETE par critères

    function deleteCriteres($table,$criteres){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $sql = "DELETE FROM $table WHERE "; //requête SQL
        $i=1;
        foreach($criteres as $key => $critere){
           $sql .= " $key =\"$critere\" ";
           if($i<count($criteres)){
               $sql .= " AND ";
               $i++;
           }
        }
        //echo $sql;
        $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
    }
    
    // ----------------------------------------------------------------------------------------------------fonction SELECT *

    function all($table){
        $db =   $GLOBALS["db"]; //récupération de la variable globale => (var global != var local)
        $sql = "SELECT * FROM $table"; //requête SQL
        $rst = $db->query($sql); //envoi de la requête à la BDD et fait un retour (format ODJ)
        return $rst->fetchAll(PDO::FETCH_ASSOC); //convertion format OBJ => Array assoc
    }

    // ----------------------------------------------------------------------------------------------------fonction SELECT spécifique

    function spe($table,$champ,$id){
        $db =   $GLOBALS["db"]; //récupération de la variable globale
        $sql = "SELECT * FROM $table WHERE $champ = :id"; //requête SQL
        $rst = $db->prepare($sql); //prépare la requête à la BDD 
        $rst->execute([":id" => $id]); //execute la requête (format ODJ) et la nettoye (car les données de l'utilisateur peuvent créées des failles de sécu)
        return $rst->fetchAll(PDO::FETCH_ASSOC); //convertion format OBJ => Array
    }

    // ----------------------------------------------------------------------------------------------------fonction SELECT LIKE spécifique

    function like($table,$champ,$id){
        $db =   $GLOBALS["db"]; //récupération de la variable globale
        $sql = "SELECT * FROM $table WHERE $champ LIKE :id"; //requête SQL
        $rst = $db->prepare($sql); //prépare la requête à la BDD 
        $rst->execute([":id" => "%".$id."%"]); //execute la requête (format ODJ) et la nettoye (car les données de l'utilisateur peuvent créées des failles de sécu)
        return $rst->fetchAll(PDO::FETCH_ASSOC); //convertion format OBJ => Array
    }

    function nutrimentParProduit($id){
        $db =   $GLOBALS["db"]; //récupération de la variable globale
        $sql = "SELECT * FROM nutriments,produit_nutriment WHERE nutriments.id_nutr = produit_nutriment.id_nutr AND id_prod = :id"; //requête SQL
        $rst = $db->prepare($sql); //prépare la requête à la BDD 
        $rst->execute([":id" => $id]); //execute la requête (format ODJ) et la nettoye (car les données de l'utilisateur peuvent créées des failles de sécu)
        return $rst->fetchAll(PDO::FETCH_ASSOC); //convertion format OBJ => Array
    }

    function etiquetteParAcutalite($id){
        $db =   $GLOBALS["db"]; //récupération de la variable globale
        $sql = "SELECT * FROM etiquettes,actu_etiquette WHERE etiquettes.id_etiquette = actu_etiquette.id_etiquette AND id_actu = :id"; //requête SQL
        $rst = $db->prepare($sql); //prépare la requête à la BDD 
        $rst->execute([":id" => $id]); //execute la requête (format ODJ) et la nettoye (car les données de l'utilisateur peuvent créées des failles de sécu)
        return $rst->fetchAll(PDO::FETCH_ASSOC); //convertion format OBJ => Array
    }

?>
