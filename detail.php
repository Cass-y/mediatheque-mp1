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

$erreurMessage = '';
$livre = null;

// Vérification de la présence et de la validité de l'ID passé en GET
if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    $id = (int)$_GET['id'];
    $livre = trouverLivreParId($livres, $id);
    
    if ($livre === null) {
        $erreurMessage = "Aucun livre ne correspond à l'identifiant #{$id}.";
    }
} else {
    $erreurMessage = "Identifiant de livre manquant ou invalide.";
}

include 'includes/header.php';
?>

<div class="detail-container">
    <a href="catalogue.php" class="btn-back">← Retour au catalogue</a>

    <?php if ($erreurMessage): ?>
        <div class="alert error">
            <h3>Erreur</h3>
            <p><?= htmlspecialchars($erreurMessage) ?></p>
        </div>
    <?php else: ?>
        <div class="book-detail-card">
            <h2><?= htmlspecialchars($livre['titre']) ?></h2>
            <ul class="detail-list">
                <li><strong>Auteur :</strong> <?= htmlspecialchars($livre['auteur']) ?></li>
                <li><strong>Année de publication :</strong> <?= htmlspecialchars($livre['annee']) ?></li>
                <li><strong>Catégorie :</strong> <?= htmlspecialchars($livre['categorie']) ?></li>
                <li><strong>Prix :</strong> <?= htmlspecialchars($livre['prix']) ?> Franc cfa</li>
                <li><strong>Statut :</strong> 
                    <?= $livre['disponible'] ? '<span class="badge disponible">Disponible en stock</span>' : '<span class="badge indisponible">Emprunté / Indisponible</span>' ?>
                </li>
            </ul>
        </div>
    <?php endif; ?>
</div>

<?php
include 'includes/footer.php';
?>
</body>
</html>