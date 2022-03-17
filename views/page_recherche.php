	<?php afficher("header"); ?>
	
	<div id="introproduct">
		<div class="container">
			<h1><?php echo $titre?></h1>
		</div>
	</div>

	<div id="deal">
		<div class="container">
				<form action="" method="post">
					<input type="text" name="recherche" value="<?php echo $mot?>">
					<input type="submit" name="rechercher">
				</form>
		</div>
	</div>

	<?php 
		if(isset($produits)){
			require("views/produits.php");
		}
	?>

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>