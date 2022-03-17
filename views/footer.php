	<footer id="footer">
		<div class="container">
			<img src="styles/imgs/logo.png" alt="">
			<div class="ligne">
				<div class="footer">
					<h4>Catégories</h4>
					<?php foreach($categories as $key => $categorie){
						$id = $categorie["id_cat"];
						$nom = $categorie["nom_cat"];	
					?>
						<a href="#" title="" class="menufoot"><?php echo $nom ?></a>		
					<?php }?>
				</div>
				<div class="footer">
					<h4>Produits</h4>
					<?php foreach($produits as $key => $produit){
						$id = $produit["id_produit"];
						$nom = $produit["nom_produit"];	
					?>
						<a href="#" title="" class="menufoot"><?php echo $nom ?></a>		
					<?php }?>
				</div>
				<div class="footer">
					<h4>Liens importants</h4>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
				</div>
				<div class="footer">
					<h4>Nos fournisseurs</h4>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
					<a href="#" title="" class="menufoot">Lien</a>
				</div>
			</div>
		</div>
	</footer>
	