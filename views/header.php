	<header id="navmenu">
		<div class="container ligne">
			<a href="" id="logo">
				<img src="styles/imgs/logo.png" alt="">
			</a>
			<div id="menu" class="ligne">
				<?php foreach($menu as $key => $lien){ ?>
					<a href="<?php echo $lien["url"] ?>" class="menu"><?php echo $lien["text"] ?></a>
				<?php } ?>
			</div>
		</div>
	</header>