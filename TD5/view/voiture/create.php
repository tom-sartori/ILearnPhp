
<form method="get" action="index.php?">
	<fieldset>
		<legend>Mon formulaire :</legend>
		<p>
			<label for="immat_id">Immatriculation</label> :
			<input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id" required/>
		</p>

		<p>
			<label for="marque_id">Marque</label> :
			<input type="text" placeholder="Ex : Tesla" name="marque" id="marque_id" required/>
		</p>

		<p>
			<label for="couleur_id">Couleur</label> :
			<input type="text" placeholder="Ex : Violet" name="couleur" id="couleur_id" required/>
		</p>


		<p>
			<input type='hidden' name='action' value='created'>
			<input type="submit" value="Envoyer" />
					<!-- Ajoute les élements dans le query string du lien 
						Cela remplit le tableau $_Get, puis lance le script formmulaireVoiture.php
					-->
				</p>
			</fieldset> 
		</form>
