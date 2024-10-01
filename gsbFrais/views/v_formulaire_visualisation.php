    <div class="content">
<h2>Etat de tous les frais par mois</h2>
<form method="post" action="index.php?uc=visualisationFrais&action=visualiserFrais">
    <label for="mois">Mois :</label>
    <select name="mois" id="mois">
        <?php for($i=1; $i<=12; $i++): ?>
            <option value="<?php echo sprintf("%02d", $i); ?>"><?php echo sprintf("%02d", $i); ?></option>
        <?php endfor; ?>
    </select>
    
    <label for="annee">Année :</label>
    <input type="number" name="annee" id="annee" min="2019" max="2022" value="<?php echo date('Y'); ?>">
    
    <label for="typeFrais">Type de frais :</label>
    <select name="typeFrais" id="typeFrais">
        <option value="ETP">Forfait étape</option>
        <option value="KM">Frais kilométrique</option>
        <option value="NUI">Nuitée hôtel</option>
        <option value="REP">Repas restaurant</option>
    </select>
    
    <input type="submit" value="Visualiser">
</form>
        </div>
