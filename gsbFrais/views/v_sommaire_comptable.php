<!-- Division pour le sommaire -->
<nav class="menuLeft">
    <ul class="menu-ul">
        <li class="menu-item"><a href="index.php">retour</a></li>

        <li class="menu-item">
            Comptable :<br>
            <?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?>
        </li>

        <li class="menu-item">
    <a href="index.php?uc=visualisationFrais&action=afficherFormulaire" title="Visualisation des frais">Visualisation des frais</a>
    </li>

        <li class="menu-item">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</nav>
<section class="content">

<!-- Affiche la page à droite de l'écran quand le comptable se connectera, avec ce qu'il peut apporter, en l'occurence ici visualiser l'ensemble des fraits de chaque utilisateur -->

