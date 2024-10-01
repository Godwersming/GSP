<?php
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];
switch ($action) {
    case 'demandeConnexion':
    {
        include'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    case 'valideConnexion':
        {
            $login = $_REQUEST['login'];
            $mdp = $_REQUEST['mdp'];
            $comptable = $pdo->estComptable($login, $mdp);
            
            if ($comptable) {
                $id = $comptable['id'];
                $nom = $comptable['nom'];
                $prenom = $comptable['prenom'];
                connecter($id, $nom, $prenom);
                $_SESSION['estComptable'] = true;
                include 'views/v_sommaire_comptable.php';
              //  include 'controllers/c_etatMois.php';
            } else {
                $visiteur = $pdo->getInfosVisiteur($login, $mdp);
                if ($visiteur) {
                    $id = $visiteur['id'];
                    $nom = $visiteur['nom'];
                    $prenom = $visiteur['prenom'];
                    connecter($id, $nom, $prenom);
                    $_SESSION['estComptable'] = false;
                    include 'views/v_sommaire.php';
                } else {
                    ajouterErreur("Login ou mot de passe incorrect");
                    include'views/v_menu.php';
                    include("views/v_erreurs.php");
                    include("views/v_connexion.php");
                }
            }
        //    include 'views/v_accueil.php';
            break;
        }
        
        
    case 'deconnexion':
    {
        deconnecter();
        include'views/v_menu.php';
        include("views/v_connexion.php");
        break;
    }
    default :
    {
        include("views/v_connexion.php");
        break;
    }
}
