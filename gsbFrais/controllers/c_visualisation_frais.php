<?php
// Si y'a pas d'action, on met 'afficherFormulaire' par défaut
if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'afficherFormulaire';
}
$action = $_REQUEST['action'];

//  menu du comptable
include 'views/v_sommaire_comptable.php';

// On gère les différents cas
switch($action){
    case 'afficherFormulaire':
        // Affiche le formulaie
        include("views/v_formulaire_visualisation.php");
        break;
    case 'visualiserFrais':
        // Récup infos du formulaire
        $mois = $_REQUEST['mois'];
        $annee = $_REQUEST['annee'];
        $typeFrais = $_REQUEST['typeFrais'];
        
        // récup infos base
        $cumulFrais = $pdo->getCumulFraisParVisiteur($mois, $annee, $typeFrais);
        
        // affichage résultat
        include("views/v_resultat_visualisation.php");
        break;
}
