<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
require_once 'data/livres.php';
require_once 'includes/fonctions.php';

$totalLivres = count($livres);
$totalDisponibles = compterLivresDisponibles($livres);

include 'includes/header.php';
?>

<section class="welcome">
    <h2>Bienvenue sur le portail de la Médiathèque IPNET</h2>
    <p>Consultez notre collection d'ouvrages académiques et littéraires mis à disposition des étudiants.</p>
    
    <div class="stats">
        <div class="stat-card">
            <h3><?= $totalLivres ?></h3>
            <p>Livres référencés</p>
        </div>
        <div class="stat-card">
            <h3><?= $totalDisponibles ?></h3>
            <p>Livres disponibles</p>
        </div>
    </div>

    <div class="actions">
        <a href="catalogue.php" class="btn btn-primary">Explorer le Catalogue</a>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
</body>
</html>