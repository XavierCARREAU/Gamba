	<?php afficher("header"); ?>
	
	<div id="introproduct">
		<div class="container">
			<h1><?php echo $titre?></h1>
		</div>
	</div>

	<div id="deal">
		<div class="container">
				<div>
					<p><?php echo $text?></p>
				</div>
		</div>
	</div>

	<?php require("views/produits.php"); ?>

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>