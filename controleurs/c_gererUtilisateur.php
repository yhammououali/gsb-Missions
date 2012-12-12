<?php
include("vues/gestionnaire/v_sommaire.gestionnaire.php");
$idVisiteur = $_SESSION['idVisiteur'];

if(!isset($_REQUEST['action']))
{
    $_REQUEST['action'] = 'voirTousProduits';
}

$action = $_REQUEST['action'];
switch($action)
{
    case'voirTousUtilisateurs':
    {
        $lesUtilisateurs = $pdo->getTousLesUtilisateurs();
        include("vues/gestionnaire/v_listeUtilisateurs.gestionnaire.php");
        break;
    }
    case 'ajouterUtilisateur':
    {
        include("vues/gestionnaire/v_formAjoutUtilisateur.php");
        break;
    }
    case 'confirmerAjouterProduit':
    {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $mdp = $_POST['MDP1'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateEmbauche = $_POST['dateEmbauche'];
        $statut = $_POST['statut'];
        
        $ajouter = $pdo->ajouterNouveauVisiteur($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche, $statut);
       
        if($ajouter == 0)
        {
            ajouterErreur("Échec de l'ajout de l'utilisateur " . $nom . " !");
            include("vues/v_erreurs.php");
        }
        else
            {
                echo ("*** AJOUT DE L'UTILISATEUR $nom EFFECTUEE ***");
                $lesUtilisateurs = $pdo->getTousLesUtilisateurs();
                include("vues/gestionnaire/v_listeUtilisateurs.gestionnaire.php");
            }
        break;
       }
    case 'supprimerUtilisateur': //Affiche le formulaire de suppression
    {
        include("vues/gestionnaire/v_formSuppressionUtilisateur.gestionnaire.php");
        break;
    }
    case 'confirmerSupprimerUtilisateur': //Effectue la suppression dans la BDD
    {
       $id=$_GET["id"];
       $nom=$_GET["nom"];
       $supprimer=$pdo->supprimerUtilisateur($id);
       if ($supprimer == 0)
       {
           ajouterErreur("Échec de la suppression de l'utilisateur " . $nom . " !");
           include("vues/v_erreurs.php");
       }
       else
       {
           echo ("*** SUPPRESION DE L'UTILISATEUR $nom EFFECTUEE ***");
           $lesUtilisateurs = $pdo->getTousLesUtilisateurs();
           include("vues/gestionnaire/v_listeUtilisateurs.gestionnaire.php");
       }
       break;
    }
    case 'modifierProduit':
    {
        $nom = $_GET['nom'];
        $lutilisateur = $pdo->getInfoUtilisateur($nom);
        include("vues/gestionnaire/v_formModifUtilisateur.gestionnaire.php");
        break;
    }
    case 'confirmerModifierProduit':
    {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $login = $_POST['login'];
        $mdp = $_POST['MDP1'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $dateEmbauche = $_POST['dateEmbauche'];
        $statut = $_POST['statut'];
        
        $ajouter=$pdo->modifierUtilisateur($id, $nom, $prenom, $login, $mdp, $adresse, $cp, $ville, $dateEmbauche, $statut);
 
           if ($ajouter == 0)
            {
                ajouterErreur("ÉCHEC DE LA MODIFICATION DE L'UTILISATEUR $nom !");
                include("vues/v_erreurs.php");
                $lutilisateur = $pdo->getInfoUtilisateur($nom);
                include("vues/gestionnaire/v_formModifUtilisateur.gestionnaire.php");
            }
            else
            {
                echo ("*** MODIFICATION DE L'UTILISATEUR $nom EFFECTUEE ***");
                $lesUtilisateurs = $pdo->getTousLesUtilisateurs();
                include("vues/gestionnaire/v_listeUtilisateurs.gestionnaire.php");
            }
       }
       break;
}
?>