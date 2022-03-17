<div class="container">
    <a href="?p=categories">Tous les produits</a>
    <h1><?php echo $nom;?></h1>

    <form class="updateForm"action="" method="post">
        <input type="hidden" name="id_cat" value="<?php echo $id;?>">
        <label>
            <span>Nom de la categorie :</span>
            <input type="text" name="nom_cat" value="<?php echo $nom;?>">
        </label>
        <label>
            <span>Description de la categorie :</span>
            <textarea name="desc_cat" id="" cols="30" rows="10"><?php echo $desc;?></textarea>
        </label>
        <label>
            <span>Description de la categorie :</span>
            <textarea name="text_cat" id="" cols="30" rows="10"><?php echo $text;?></textarea>
        </label>
        
        </label>
        <input type="submit" value="Modifier" name="update">
    </form>
</div>