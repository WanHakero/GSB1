<div id="contenu">
      <h2>Mes fiches de frais</h2>
	  <?php  ?>
      <h3>Visiteurs à sélectionner : </h3>
      <form action="index.php?uc=validerFrais&action=voirFicheFrais" method="post">
      <div class="corpsForm">
      <p>
      <label for="lstVisiteurs" accesskey="n">Visiteurs : </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
            <?php
			foreach ($lesNomsPrenoms as $unVisiteur)
			{
			          $nom = $unVisiteur['nom'];
                $prenom = $unVisiteur['prenom'];
				?>
				<option selected value="<?php echo $nom ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
				}    
		   ?>
       </select>
        <select id="lstMoisDis" name="lstMoisDis">
            <?php
			foreach ($ToutLesMois as $unMois)
			{
          $mois = $unMois['mois'];
				  $numAnnee =  $unMois['numAnnee'];
				  $numMois =  $unMois['numMois'];
            ?>
            <option selected value="<?php echo $numAnnee.$numMois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
				<?php
      }
      ?>
 
     
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
      </p> 
      </div>
        
      </form>