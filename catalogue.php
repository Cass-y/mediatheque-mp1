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

// Récupération et nettoyage du paramètre URL
$categorieFiltre = isset($_GET['categorie']) ? trim($_GET['categorie']) : '';

// Extraire la liste unique des catégories pour générer les liens de filtre
$categoriesDisponibles = array_unique(array_column($livres, 'categorie'));

// Logique de filtrage
if ($categorieFiltre !== '') {
    $livresAffiches = filtrerParCategorie($livres, $categorieFiltre);
    $categorieExiste = in_array($categorieFiltre, $categoriesDisponibles, true);
} else {
    $livresAffiches = $livres;
    $categorieExiste = true;
}

include 'includes/header.php';
?>

<h2>Catalogue de la Médiathèque</h2>

<!-- Menu de filtrage -->
<div class="filters">
    <p><strong>Filtrer par catégorie :</strong></p>
    <a href="catalogue.php" class="filter-btn <?= $categorieFiltre === '' ? 'active' : '' ?>">Tous</a>
    <?php foreach ($categoriesDisponibles as $cat): ?>
        <a href="catalogue.php?categorie=<?= urlencode($cat) ?>" class="filter-btn <?= $categorieFiltre === $cat ? 'active' : '' ?>">
            <?= htmlspecialchars($cat) ?>
        </a>
    <?php endforeach; ?>
</div>

<?php if (!$categorieExiste): ?>
    <div class="alert error">
        <p>La catégorie <strong><?= htmlspecialchars($categorieFiltre) ?></strong> n'existe pas dans notre catalogue.</p>
    </div>
<?php elseif (empty($livresAffiches)): ?>
    <p>Aucun livre trouvé dans cette catégorie.</p>
<?php else: ?>
    <p class="count-info">Nombre de livres affichés : <strong><?= count($livresAffiches) ?></strong></p>
    
    <div class="catalogue-grid">
        <?php foreach ($livresAffiches as $livre): ?>
            <?= afficherLivre($livre) ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?php
include 'includes/footer.php';
?>
</body>
</html>