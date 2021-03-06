    <?php if($lesFraisHorsForfait!=null){ ?>
    <h3>Eléments hors forfait</h3>
    <div class="elements">
        <table class="listeLegere">
            <tr>
                <th class="date">Date</th>
      		      <th class="libelle">Libellé</th>  
                <th class="montant">Montant</th>  
                <th class="action">&nbsp;</th>              
            </tr>
     <?php } ?>
        <?php 
    	    foreach( $lesFraisHorsForfait as $unFraisHorsForfait) 
    		{
    			$libelle = $unFraisHorsForfait['libelle'];
    			$date = $unFraisHorsForfait['date'];
    			$montant=$unFraisHorsForfait['montant'];
    			$id = $unFraisHorsForfait['id'];
        ?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=gererFrais&action=supprimerFrais&idFrais=<?php echo $id ?>" 
  				onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer</a></td>
            </tr>
      	<?php		         
          }
        
      	?>	
       
            <script type="text/javascript">
              $(function(){
                $("#txtDateHF").datepicker();
              });
            </script>                                      
        </table>
    </div>
  </div>

  <div id="contenu">
    <h2>Ajouter un élément hors forfait</h2>
    <div class="elements">  
      <form action="index.php?uc=gererFrais&action=validerCreationFrais" method="post"> 
          <div class="corpsForm">     
              <p class="horsforfait">
                  <label for="txtDateHF">Date</label>
                  <input type="text" id="txtDateHF" name="dateFrais" size="12" maxlength="10" value=""  />
              </p>
              <p class="horsforfait">
                  <label for="txtLibelleHF">Libellé</label>
                  <input type="text" id="txtLibelleHF" name="libelle" size="50" maxlength="256" value="" />
              </p>
              <p class="horsforfait">
                  <label for="txtMontantHF">Montant</label>
                  <input type="text" id="txtMontantHF" name="montant" size="12" maxlength="10" value="" />
              </p>
              
          </div>
          
          <div class="piedForm">
              <p>
                  <input id="ajouter" type="submit" value="Ajouter" size="20" />
                  <input id="effacer" type="reset" value="Effacer" size="20" />
              </p> 
          </div> 
      </form>
    </div>
  </div>
</div>
  

