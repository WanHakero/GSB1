<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait
        <?php if($ToutlesFraisHorsForfait == null){
            echo"il n y a pas de fiches";
            }
            else{

        ?>
       </caption>
            <tr>
                <th class="date">Date</th>  
                <th class="libelle">Libelle</th>  
                <th class="montant">Montant</th>  
                <th class="action">&nbsp;</th>
                <th class="action1">&nbsp;</th>                            
             </tr>
          
    <?php
	    foreach($ToutlesFraisHorsForfait as $unFraisHorsForfait) 
		{
			$libelle = $unFraisHorsForfait['libelle'];
			$date = $unFraisHorsForfait['uneDate'];
            $montant = $unFraisHorsForfait['montant'];
	?>		
            <tr>
                <td> <?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=validerFrais&action=refuserFrais<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment refuser ce frais?');">Refuser ce frais</a></td>
                <td><a href="index.php?uc=validerFrais&action=validerFrais<?php echo $id ?>" 
				onclick="return confirm('Voulez-vous vraiment valider ce frais?');">Valider ce frais</a></td>

             </tr>
	<?php		 
          }
	?>	  
                                          
</table>
<?php }?>
<table class="listeLegere">
    <caption>Descriptif des éléments forfait</caption>
    <tr>
    <?php
    foreach($ToutlesFraisForf  as $unFraisForf) {
        $libelle = $unFraisForf['libelle'];

            ?><th class="<?php echo $libelle; ?>"><?php echo $libelle;?></th>                           
    }
    </tr>
    <tr>
    <?php
	    foreach($ToutlesFraisForf  as $unFraisForf) {
            $quantite = $unFraisForf['quantite'];

	?>		
             <td> <?php echo $quantite ?></td>
	<?php		 
          }
	?>
    </tr>
</table>	  