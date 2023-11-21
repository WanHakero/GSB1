<?php
include("vues/v_sommaireC.php");
$action = $_REQUEST['action'];

switch($action){
	case 'suivreFrais':{
		$VisiteurVA  = $pdo->getVisiteurVA('VA');
		if($VisiteurVA == True){
			include("vues/v_C_listeVisiteurCV.php");
		}else{
			echo"Pas de visiteur disponible";
		}
		
		break;
	}
	case 'visiteurSelectioner':{
		$idVisiteurVA = $_REQUEST['lesVisiteurVA'];
		$_SESSION['idVisiteurVA'] =$idVisiteurVA;
		
		$VisiteurVA  = $pdo->getVisiteurVA('VA');
		$MoisVA =  $pdo->getMoisVisiteurVAVisiteur($_SESSION['idVisiteurVA'],'VA');
		
		
		

		include("vues/v_C_listeVisiteurCV.php");
		include("vues/v_C_listeMoiCV.php");
		
		
		break;
	}
	case 'moisSelectioner':{
		$lesMoisVA = $_REQUEST['lesMoisVA'];
		$_SESSION['lesMoisVA'] =$lesMoisVA;
		 
		
		$VisiteurVA  = $pdo->getVisiteurVA('VA');
		$MoisVA =  $pdo->getMoisVisiteurVAVisiteur($_SESSION['idVisiteurVA'],'VA');
		
		$lesFraisHorsForfaitEtat = $pdo->getLesFraisHorsForfait($_SESSION['idVisiteurVA'],$lesMoisVA );
		$lesFraisForfait= $pdo->getLesFraisForfait($_SESSION['idVisiteurVA'],$lesMoisVA );
		
		include("vues/v_C_listeVisiteurCV.php");
		include("vues/v_C_listeFraisForfaiVA.php");
		break;
	}
	case 'MiseEnPaiement':{
		$idVisiteurVA = $_SESSION['idVisiteurVA'];
		$lesMoisVA = $_SESSION['lesMoisVA'] ;
		
		$pdo->majEtatFicheFrais($idVisiteurVA  ,$lesMoisVA ,'VA');
		
		
		$VisiteurVA  = $pdo->getVisiteurVA('VA');
		$MoisVA = $pdo->getMoisVisiteurVAVisiteur($_SESSION['idVisiteurVA'],'VA');
		include("vues/v_C_listeVisiteurCV.php");
		
		break;	
	}
	case 'Remboursement':{
		$idVisiteurVA = $_SESSION['idVisiteurVA'];
		$lesMoisVA = $_SESSION['lesMoisVA'] ;
		
		$pdo->majEtatFicheFrais($idVisiteurVA,$lesMoisVA,'RB');
		
		$VisiteurVA  = $pdo->getVisiteurVA('VA');
		$MoisVA = $pdo->getMoisVisiteurVA($_SESSION['idVisiteurVA']);
		include("vues/v_C_listeVisiteurCV.php");
		break;
	}

}


	?>