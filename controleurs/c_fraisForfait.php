<?php
include("vues/v_sommaire.php");
$action = $_REQUEST['action'];
$idVisiteur = $_SESSION['idVisiteur'];
switch($action){
	case 'consulterFraisForfait':{
		$tousFraisForfait=$pdo->getTousFraisForfait();
		include("vues/v_fraisForfaitSimple.php");
		break;
	}
        
        case 'consulterFraisForfaitParMois':{
            $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
            $lesCles = array_keys( $lesMois );
            $moisASelectionner = $lesCles[0];
            $tousFraisForfaitMois=$pdo->getTousFraisForfaitMois($mois);
            $mois = $_REQUEST['lstmois'];
            include("vues/v_tousFraisForfaits.php");
            break;
        }
}
?>