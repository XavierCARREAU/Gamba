	<div id="contact">
		<div class="container">
			<h2>Contact</h2>
			<div class="duo">
				<div>infos</div>
				<div>
					<?php 
					if($message!=""){ echo $message;}
					if($envoi==true){ echo "Votre message à bien été envoyé<br>";}
					?>
					<form id="monForm" action="#contact" method="post">
						
						<label for="inpType">Type :</label>
						<select name="type" id="inpType">
							<option value="part">Particulier</option>
							<option value="asso">Assos</option>
						</select>
						
						<label for="inpNom">nom :</label>
						<input type="text" name="nom" id="inpNom">
						
						<label for="inpPre">prénom :</label>
						<input type="text" name="prenom" id="inpPre">
						<!-- text checkbox radio color -->
						
						<label for="inpEmail">Email :</label>
						<input type="text" name="email" id="inpEmail">
						
						<label for="inpCpde">Code postal :</label>
						<input type="text" name="cp" id="inpCode">
						
						<label for="inpDate">Date naissance :</label>
						<input type="date" name="date" id="inpDate">
						
						<label for="inpQues">Question:</label>
						<textarea name="question" id="inpQues" cols="30" rows="10"></textarea>
						
						<input type="submit" value="Contacter">
					
					</form>
				
				</div>
			</div>
		</div>
	</div>