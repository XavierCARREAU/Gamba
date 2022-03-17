	<?php afficher("header"); ?>
	
	<div id="introproduct">
		<div class="container">
			<h1>Titre actualité</h1>
		</div>
	</div>
	
	
	<div id="deal">
		<div class="container">
			<h2>Texte d'intro</h2>
			<div class="ligne">
				<div>
					<p>Texte de l'actualité Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
		</div>
	</div>

	
	<div id="products">
		<div class="container">
			<div id="listprod">
				<?php foreach($actualites as $key => $actualite){
					$id = $actualite["id_actu"];
					$nom = $actualite["nom_actu"];
					$desc = $actualite["dec_actu"];
				?>
					<a href="?p=actualite&id=<?php echo $id ?>" class="prod">
						<span>
							<?php echo $nom;?>
						</span>
					</a>
				<?php }?>
			</div>
		</div>
	</div>
	

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>