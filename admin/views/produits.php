<a href="http://localhost/php-cdaw/projet-gamba/admin/">Admin</a>
<h1>Liste des produits</h1>

<form action="" method="post">
    <input type="submit" name="insert" value="Ajouter un produit">
</form>
<p id="message"></p>

<ul>
    <?php 
    foreach($produits as $key => $produit){
        $id = $produit["id_produit"];
        $nom = $produit["nom_produit"];
        ?>
        <li>
            <span><img src="../products/<?php echo $id; ?>.jpg" alt=""></span>
            <span><?php echo $nom; ?></span>
            <a href="?p=produit&id=<?php echo $id; ?>">Modifier</a>
            <form action="" method="post" onSubmit="return confirmDelete();">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="delete" value="Supprimer">
            </form>
        </li> 
        <?php
    }
    ?>
</ul>