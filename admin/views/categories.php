<a href="http://localhost/php-cdaw/projet-gamba/admin/">Admin</a>
<h1>Liste des categories</h1>

<form action="" method="post">
    <input type="submit" name="insert" value="Ajouter une catégorie">
</form>
<p id="message"></p>

<ul>
    <?php 
    foreach($categories as $key => $categorie){
        $id = $categorie["id_cat"];
        $nom = $categorie["nom_cat"];
        ?>
        <li>
            <span><?php echo $nom; ?></span>
            <a href="?p=categorie&id=<?php echo $id; ?>">Modifier</a>
            <form action="" method="post" onSubmit="return confirmDelete();">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="delete" value="Supprimer">
            </form>
        </li> 
        <?php
    }
    ?>
</ul>