
		  <form action="index.php?uc=suivreFrais&action=moisSelectioner" method="post">
		   <div class="corpsForm">
        <br>
        <label for="SuiviePayement" accesskey="n">Mois : </label>
        <select id="lesMoisVA" name="lesMoisVA">
            <?php
    
      foreach ($MoisVA as $lesMoisVA)
			{
     
			    $numAnnee = $lesMoisVA['numAnnee'];
          $numMois = $lesMoisVA['numMois'];
				$mois= $lesMoisVA['mois'];
        if($mois == $_SESSION['lesMoisVA']){
          ?>
          <option selected value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
          <?php 
          }
          else{ ?>
          <option value="<?php echo $mois ?>"><?php echo  $numMois."/".$numAnnee ?> </option>
          <?php 
          } 

			}
      
		   ?>    
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
	  