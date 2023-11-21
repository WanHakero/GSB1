<?php
include("vues/v_sommaireC.php");
$idVisiteur = $_SESSION['idVisiteur'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
$mois = getMois(date("d/m/Y"));
$numAnnee =substr( $mois,0,4);
$numMois =substr( $mois,4,2);
$action = $_REQUEST['action'];
switch($action){
	case 'selectionner':{
		$lesNomsPrenoms = $pdo-> getToutLesVisiteurs();
		$ToutLesMois = $pdo->getToutLesMoisDisponibles();
		include("vues/v_ValiderFicheMois.php");
		break;
	}
    case 'voirFicheFrais':{
		$lesNomsPrenoms = $pdo-> getToutLesVisiteurs();
		$ToutLesMois = $pdo->getToutLesMoisDisponibles();
		include("vues/v_ValiderFicheMois.php");
		$leNom = $_REQUEST['lstVisiteurs'];
		$laDate = $_REQUEST['lstMoisDis'];
		$ToutlesFraisHorsForfait = $pdo->getToutLesFraisHorsForfait($leNom,$laDate);
		$ToutlesFraisForf = $pdo->getLesFraisFor($leNom,$laDate);
		include("vues/v_ListeAllFraisHorsForfait.php");
	}
}
?>