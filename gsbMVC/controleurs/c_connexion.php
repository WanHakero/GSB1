<?php
if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		$login = $_REQUEST['login'];
		$mdp = $_REQUEST['mdp'];
		$visiteur = $pdo->getInfosVisiteur($login,$mdp);
		$Comptable = $pdo->getInfosComptable($login,$mdp);
		if(is_array( $Comptable)){
			$id1 = $Comptable['id'];
			$nom1 =  $Comptable['nom'];
			$prenom1 = $Comptable['prenom'];
			connecterC($id1,$nom1,$prenom1);
			include("vues/v_sommaireC.php");
		}
		else {
			if(!is_array( $visiteur)){
				ajouterErreur("Login ou mot de passe incorrect");
				include("vues/v_erreurs.php");
				include("vues/v_connexion.php");
			}
			else{
				$id = $visiteur['id'];
				$nom =  $visiteur['nom'];
				$prenom = $visiteur['prenom'];
				$adresse = $visiteur['adresse'];
				$cp = $visiteur['cp'];
				$ville = $visiteur['ville'];
				$dateEmbauche = $visiteur['dateEmbauche'];
				connecter($id,$nom,$prenom,$adresse,$cp,$ville,$dateEmbauche);
				include("vues/v_sommaire.php");
				include("vues/v_infoVisiteur.php");
			} 
		}
		break;
	}
	case 'deconnexion' : {
		deconnecter();
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>