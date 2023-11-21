<div class="encadre">
<table class="listeLegere">
  	   <caption>Eléments forfaitisés de <?php echo $_SESSION['idVisiteurVA'];?>  du  <?php echo $_SESSION['lesMoisVA']?>; </caption>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
        <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
    </table>
    <table class="listeLegere">
    <caption>Eléments hors forfaits </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>                
             </tr>
        <?php      
         $totaMontant = 0;		
          foreach ( $lesFraisHorsForfaitEtat as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
			$montant = $unFraisHorsForfait['montant'];
			$totaMontant = $totaMontant + $unFraisHorsForfait['montant'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
             </tr>
			 
        <?php 
          }
		?>
	
	 
     
    </table>
    <div class="encadre">
     <?php echo 'Total : ' ,$totaMontant ;?>
    </div>
 </div>
 <br>

 <form action="index.php?uc=suivreFrais&action=MiseEnPaiement" method="post">
 <input id="ok" type="submit" value="Mise En Paiement" size="20" />
 </form>
 <form action="index.php?uc=suivreFrais&action=Remboursement" method="post">
 <input id="ok" type="submit" value="Remboursement" size="20"  />
 </form>
 