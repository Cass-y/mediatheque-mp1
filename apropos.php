<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'includes/fonctions.php';
include 'includes/header.php';
?>

<div class="apropos-container">
    <h2>À propos de la Médiathèque IPNET</h2>
    <p>Ce portail web a été développé dans le cadre du module <strong>IT 231 - Développement Web I</strong>[cite: 1]. Il permet de gérer dynamiquement un catalogue documentaire en PHP sans recours à une base de données relationnelle[cite: 1].</p>
    
    <h3>Filières concernées</h3>
    <ul>
        <li>Génie Logiciel (GL)[cite: 1]</li>
        <li>Web & Multimédia (WIM)[cite: 1]</li>
        <li>Développement Web & Mobile (DWM)[cite: 1]</li>
        <li>Informatique de Gestion (IG)[cite: 1]</li>
        <li>Intelligence Artificielle (IA)[cite: 1]</li>
    </ul>

    <div class="date-box" style="margin-top: 20px;">
        <p><em>Date du jour : <?= obtenirDateDuJour() ?></em></p>
    </div>
</div>

<?php
include 'includes/footer.php';
?>
</body>
</html>