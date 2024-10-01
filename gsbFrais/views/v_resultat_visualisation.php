<div class="content">
    <h2 class="titre">Résultat de la visualisation</h2>
    <table class="listeLegere">
        <caption>Cumul des frais par visiteur</caption>
        <tr>
            <th class="libelle">Visiteur</th>
            <th class="montant">Cumul des frais</th>
        </tr>
        <?php foreach($cumulFrais as $frais): ?>
        <tr>
            <td><?php echo $frais['nom'] . ' ' . $frais['prenom']; ?></td>
            <td><?php echo $frais['cumul']; ?> €</td>
        </tr>
        <?php endforeach; ?>
    </table>
        </div>
