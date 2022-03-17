	<?php afficher("header"); ?>
	
	<div id="introproduct">
		<div class="container">
			<h1><?php echo $titre?></h1>
		</div>
	</div>
	
	
	<div id="deal">
		<div class="container">
			<h2><?php echo $titre?></h2>
			<div class="ligne">
				<div>
					<p><?php echo $desc?></p>
					<ul>
						<?php foreach($etiquettes as $key => $etiquette){
							$id = $etiquette["id_etiquette"];
							$nom = $etiquette["nom_etiquette"];
						?>
							<li> <?php echo $nom?> </li>
						<?php }?>
					</ul>
					<p><?php echo $content?></p>
				</div>
			</div>
		</div>
	</div>

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>