<?php
// Vérification de l'action demandée
if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = 'demandeConnexion';
}
$action = $_REQUEST['action'];

switch ($action) {
    case 'demandeConnexion':
        include 'views/v_menu.php';
        include "views/v_connexion.php";
        break;

    case 'valideConnexion':
        $login = $_REQUEST['login'];
        $mdp = $_REQUEST['mdp'];

        // Vérification du comptable
        $comptable = $pdo->estComptable($login, $mdp);
        if ($comptable) {
            $id = $comptable['id'];
            $nom = $comptable['nom'];
            $prenom = $comptable['prenom'];
            connecter($id, $nom, $prenom);
            $_SESSION['estComptable'] = true;
            include 'views/v_sommaire_comptable.php';
        } 
        // Vérification du gestionnaire
        else {
            $gestionnaire = $pdo->estGestio($login, $mdp);
            if ($gestionnaire) {
                $id = $gestionnaire['id'];
                $nom = $gestionnaire['nom'];
                $prenom = $gestionnaire['prenom'];
                connecter($id, $nom, $prenom);
                $_SESSION['estGestio'] = true;
                include 'views/v_sommaire_gestio.php';
            } 
            // Vérification du visiteur
            else {
                $visiteur = $pdo->getInfosVisiteur($login, $mdp);
                if ($visiteur) {
                    $id = $visiteur['id'];
                    $nom = $visiteur['nom'];
                    $prenom = $visiteur['prenom'];
                    connecter($id, $nom, $prenom);
                    $_SESSION['estComptable'] = false;
                    $_SESSION['estGestio'] = false;
                    include 'views/v_sommaire.php';
                } 
                // Échec de connexion
                else {
                    ajouterErreur("Login ou mot de passe incorrect");
                    include 'views/v_menu.php';
                    include "views/v_erreurs.php";
                    include "views/v_connexion.php";
                }
            }
        }
        break;

    case 'deconnexion':
        deconnecter();
        include 'views/v_menu.php';
        include "views/v_connexion.php";
        break;

    default:
        include "views/v_connexion.php";
        break;
}
