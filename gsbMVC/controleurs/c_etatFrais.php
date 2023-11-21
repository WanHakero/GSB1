<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'selectionnerMois':{
		//$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$lesMoisHFFF =$pdo->getLesMoisHFFF($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesMoisHFFF );
		$moisASelectionner = $lesCles[0];
		include("vues/v_listeMois.php");
		break;
	}
	case 'voirEtatFrais':{
		$leMois = $_REQUEST['lstMois']; 
	
		//$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		$lesMoisHFFF =$pdo->getLesMoisHFFF($idVisiteur);
		$moisASelectionner = $leMois;
		include("vues/v_listeMois.php");
		$lesFraisHorsForfaitEtat = $pdo->getLesFraisHorsForfaitMoisEtat($idVisiteur,$leMois);
		$lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
		$lesFraisForfait= $pdo->getLesFraisForfait($idVisiteur,$leMois);
		$lesInfosFicheFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$leMois);
		$numAnnee =substr( $leMois,0,4);
		$numMois =substr( $leMois,4,2);
		if ($lesInfosFicheFrais  == false){
		
		$nbJustificatifs = 0;
		$montantValide = 0;
		$dateModif = null;
		$libEtat = null;
		}else{
			$libEtat = $lesInfosFicheFrais['libEtat'];
			$montantValide = $lesInfosFicheFrais['montantValide'];
			$nbJustificatifs = $lesInfosFicheFrais['nbJustificatifs'];
			$dateModif =  $lesInfosFicheFrais['dateModif'];
			$dateModif =  dateAnglaisVersFrancais($dateModif);
			
		}
		
		
		
		include("vues/v_etatFrais.php");
	}
}
?>