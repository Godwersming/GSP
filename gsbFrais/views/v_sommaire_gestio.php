<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            Gestionnaire :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        <li class="menu-item">
    <a href="index.php?uc=visualisationFrais&action=afficherFormulaire" title="Visualisation des frais">Page gestionnaire</a>
    </li>

        <li class="menu-item">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</nav>
<section class="content">

<!-- Affiche la page à droite de l'écran quand le gestionnaire se connectera, avec ce qu'il peut apporter -->

