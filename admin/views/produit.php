<div class="container">
    <a href="?p=produits">Tous les produits</a>
    <h1><?php echo $nom;?></h1>

    <form class="updateForm" action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_produit" value="<?php echo $id;?>">
        <label>
            <span>Nom du produit :</span>
            <input type="text" name="nom_produit" value="<?php echo $nom;?>">
        </label>
        <label>
            <span>Sous titre du produit :</span>
            <input type="text" name="sous_titre_produit" value="<?php echo $sTitre;?>">
        </label>
        <label>
            <span>Description du produit :</span>
            <textarea name="desc_produit" id="" cols="30" rows="10"><?php echo $desc;?></textarea>
        </label>
        <label>
            <span>Catédorie du produit :</span>
            <select name="id_cat_produit" id="">
                <?php foreach($categories as $key => $categorie){
                    $sel = "";
                    if($categorie["id_cat"]==$idCat){
                        $sel = "selected";
                    }
                ?>
                    <option value="<?php echo $categorie["id_cat"]?>" <?php echo $sel ?> >
                        <?php echo $categorie["nom_cat"]?>
                    </option>
                <?php }?>
            </select>
        </label>

        <label>
            <span>Visuel :</span>
            <img src="../products/<?php echo $id ?>.jpg" width="250">
            <input type="file" name="photo" accept="image/jpeg">
        </label>

        <input type="submit" value="Modifier" name="update">
    </form>

    <h2>Les nutriments</h2>

    <ul>
        <?php 
        $listNutr = [];
        foreach($nutriments as $key => $nutriment){
            $nomNutr = $nutriment["nom_nutr"];
            $idNutr = $nutriment["id_nutr"];
            $listNutr[] = $idNutr;
        ?>
            <li>
                <span><?php echo $nomNutr ?></span>
                <form action="" method="post">
                    <input type="hidden" value="<?php echo $idNutr ?>" name="id_nutr">
                    <input type="hidden" value="<?php echo $id ?>" name="id_prod">
                    <input type="submit" value="Retirer de la fiche" name="deleteNutr">
                </form>
            </li>
        <?php }?>
    </ul>

    <h3>Ajouter un nutriment</h3>
    <form action="" method="post">
        <select name="id_nutr" id="">
            <?php foreach($allNutriments as $key => $nutriment){ 
                $idNutr = $nutriment["id_nutr"];
                $nomNutr = $nutriment["nom_nutr"];
                if(in_array($idNutr,$listNutr)){
                    $dis = "disabled";
                }else{
                    $dis = "";
                }
            ?>
            <option value="<?php echo $idNutr ?>" <?php echo $dis ?>>
                <?php echo $nomNutr ?>
            </option>
            <?php }?>
        </select>
        <input type="hidden" value="<?php echo $id ?>" name="id_prod">
        <input type="submit" value="Ajouter" name="add">
    </form>
</div>