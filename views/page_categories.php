	<?php afficher("header"); ?>
	
	<div id="introproduct">
		<div class="container">
			<h1>Catégories</h1>
		</div>
	</div>

	<div id="deal">
		<div class="container">
				<div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			
		</div>
	</div>

	
	<div id="products">
		<div class="container">
			<div id="listprod">
				<?php foreach($categories as $key => $categorie){
					$id = $categorie["id_cat"];
					$nom = $categorie["nom_cat"];
				?>
					<a href="?p=categorie&id=<?php echo $id ?>" class="prod">
						<span>
							<?php echo $nom; ?>
						</span>
					</a>
				<?php }?>
			</div>
		</div>
	</div>
	

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>