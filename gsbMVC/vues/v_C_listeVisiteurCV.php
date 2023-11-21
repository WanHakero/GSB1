<div id="contenu">
      <h2>Suivre Payement Fiche de Frais</h2>

      <h3>Visiteur a sélectionner : </h3>
      <form action="index.php?uc=suivreFrais&action=visiteurSelectioner" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="SuiviePayement" accesskey="n">Visiteur : </label>
        <select id="lesVisiteurVA" name="lesVisiteurVA">
            <?php
           
			foreach ($VisiteurVA as $Visiteur)
			{
			    $nom = $Visiteur['nom'];
                $prenom = $Visiteur['prenom'];
				$id = $Visiteur['id'];
				 if($id == $_SESSION['idVisiteurVA']){
				?>
				<option selected value="<?php echo  $id ?>"><?php echo  $nom,' ', $prenom   ?> </option>
				<?php 
				 }else{ ?>
				<option value="<?php echo  $id ?>"><?php echo  $nom,' ', $prenom   ?> </option>
				<?php 
				}
			}
		   ?>    
        </select>
		   </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
	  
		