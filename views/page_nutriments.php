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
					<ul>
						<li><a href="#">Etiquette 1</a></li>
						<li><a href="#">Etiquette 2</a></li>
						<li><a href="#">Etiquette 3</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	
	<div id="products">
		<div class="container">
			<div id="listprod">
				<?php foreach($nutriments as $key => $nutriment){
					$id = $nutriment["id_nutr"];
					$nom = $nutriment["nom_nutr"];
				?>
					<a href="" class="prod">
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