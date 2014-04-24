<div id="contenu">
    <h2>Renseigner ma fiche de frais du mois <?php echo $numMois."/".$numAnnee ?></h2>
    <h3>Eléments forfaitisés</h3>
    <div class="elements">    
		<form method="POST"  action="index.php?uc=gererFrais&action=validerMajFraisForfait">
			<div class="corpsForm">
						<?php
							$i = 1;
							foreach ($lesFraisForfait as $unFrais)
							{
								$idFrais = $unFrais['idFrais'];
								$libelle = $unFrais['libelle'];
								$quantite = $unFrais['quantite'];
						?>
						
						<p id="forfait">
							<label for=<?php echo('IdFrais'.$i);?>><?php echo $libelle ?></label>
							<input type="text" id=<?php echo('IdFrais'.$i);?> name="lesFrais[<?php echo $idFrais?>]" size="12" maxlength="5" value="<?php echo $quantite?>" >
						</p>
					
						<?php
							$i = $i +1;
							}
						?> 
		      	</div>

		      	<div class="piedForm">
			    	<p>
			    		<input id="ok" type="submit" value="Valider" size="20" />
			      	  	<input id="annuler" type="reset" value="Effacer" size="20" />
			    	</p> 
		      	</div>
	    </form>
	</div>
