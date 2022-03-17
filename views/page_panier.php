	<?php afficher("header"); ?>
	

	<div id="introproduct">
		<div class="container">
			<h1>Panier</h1>
		</div>
	</div>
	

	<div id="deal">
		<div class="container">
			<h2>Your Products</h2>
			<div class="ligne">
				<div>
					<img src="styles/imgs/products/cabbage.jpg" width="100" alt="">
				</div>
				<div>
					<h3>Organic cabbage soup mix 500g</h3>
				</div>
				<div>
					<form action="" method="post" class="addtocart">
						<input type="number" class="qte" name="qte" value="1">
						<input type="submit" class="button green" name="addcart" value="Modifier">
					</form>
				</div>
				<div>
					<form action="" method="post" class="delltocart">
						<input type="submit" class="button red" name="dellcart" value="X">
					</form>
				</div>
			</div>
			
		</div>
	</div>


	<?php afficher("contact"); ?>

	<?php afficher("footer"); ?>