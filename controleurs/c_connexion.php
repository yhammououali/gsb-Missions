﻿<?php
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
		if(!is_array( $visiteur)){
			ajouterErreur("Login ou mot de passe incorrect");
			include("vues/v_erreurs.php");
			include("vues/v_connexion.php");
		}
		else{
			$id = $visiteur['id'];
			$nom =  $visiteur['nom'];
			$prenom = $visiteur['prenom'];
                        $statut = $visiteur['statut'];
			connecter($id,$nom,$prenom,$statut);
                        if ($statut=='visiteur')
                            include("vues/v_sommaire.php");
                        if ($statut=='gestionnaire')
                            include("vues/gestionnaire/v_sommaire.gestionnaire.php");
                            echo "<script language='JavaScript'>";
                            echo "alert('Vous êtes connecté en tant que Gestionnaire.')";
                            echo "</script>";
		}
		break;
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}
?>