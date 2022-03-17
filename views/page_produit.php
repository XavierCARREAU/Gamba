	<?php afficher("header"); ?>

	<div id="introproduct">
		<div class="container">
			<h1><?php echo $nom?></h1>
		</div>
	</div>

	
	<div id="deal">
		<div class="container">
			<h2>Your Product</h2>
			<div class="ligne">
				<div>
					<img src="products/<?php echo $id ?>.jpg" width="400" alt="">
				</div>
				<div>
					<h3><?php echo $stitre?></h3>
					<p><?php echo $desc?></p>
					<ul>
						<?php foreach($nutriments as $key => $nutriment){
							$id = $nutriment["id_nutr"];
							$nom = $nutriment["nom_nutr"];
						?>
							<li><?php echo $nom?> </li>
						<?php }?>
					</ul>
					<form action="" method="post" class="addtocart">
						<input type="number" class="qte" name="qte" value="1">
						<input type="submit" class="button green" name="addcart" value="Ajouter au panier">
					</form>
				</div>
			</div>
			<div class="ligne">
				<img class="ombre" src="styles/imgs/soup1.jpg"  width="200"  alt="">
				<img class="ombre" src="styles/imgs/soup2.jpg"  width="200"  alt="">
				<img class="ombre" src="styles/imgs/soup3.jpg"  width="200"  alt="">
			</div>
		</div>
	</div>

	<?php afficher("produits"); ?>

	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>