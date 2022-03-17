	<div id="products">
		<div class="container">
			<h1>our product</h1>
			<div id="listprod">
				<?php 
				foreach($produits as $key => $produit){
					$id = $produit["id_produit"];
					$nom = $produit["nom_produit"];	
				?>
					<a href="?p=produit&id=<?php echo $id ?>" class="prod">
						<img src="products/<?php echo $id ?>.jpg" alt="">
						<span>
							<?php echo $nom ?>
						</span>
					</a>
				<?php }
				
				if(count($produits)==0){
					echo "Il n'y a aucun produit ici";
				}
					
				?>
			</div>
		</div>
	</div>