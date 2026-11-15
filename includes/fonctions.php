<?php
// includes/fonctions.php

/**
 * Affiche les informations d'un livre sous forme de HTML sécurisé.
 */
function afficherLivre(array $livre): string {
    $titre = htmlspecialchars($livre['titre']);
    $auteur = htmlspecialchars($livre['auteur']);
    $annee = htmlspecialchars($livre['annee']);
    $categorie = htmlspecialchars($livre['categorie']);
    $prix = htmlspecialchars($livre['prix']);
    $dispo = $livre['disponible'] ? '<span class="badge disponible">Disponible</span>' : '<span class="badge indisponible">Indisponible</span>';
    $id = (int)$livre['id'];

    return "
        <div class='livre-card'>
            <h3>{$titre}</h3>
            <p><strong>Auteur :</strong> {$auteur}</p>
            <p><strong>Année :</strong> {$annee}</p>
            <p><strong>Catégorie :</strong> {$categorie}</p>
            <p><strong>Prix :</strong> {$prix} Franc cfa</p>
            <p>{$dispo}</p>
            <a href='detail.php?id={$id}' class='btn'>Voir les détails</a>
        </div>
    ";
}

/**
 * Filtre les livres par catégorie.
 */
function filtrerParCategorie(array $livres, string $categorie): array {
    if (empty($categorie)) {
        return $livres;
    }
    
    $resultat = [];
    foreach ($livres as $livre) {
        if (strcasecmp($livre['categorie'], $categorie) === 0) {
            $resultat[] = $livre;
        }
    }
    return $resultat;
}

/**
 * Trouve un livre par son identifiant unique.
 */
function trouverLivreParId(array $livres, int $id): ?array {
    foreach ($livres as $livre) {
        if ((int)$livre['id'] === $id) {
            return $livre;
        }
    }
    return null;
}

/**
 * Compte le nombre de livres disponibles.
 */
function compterLivresDisponibles(array $livres): int {
    $compteur = 0;
    foreach ($livres as $livre) {
        if ($livre['disponible'] === true) {
            $compteur++;
        }
    }
    return $compteur;
}

/**
 * Retourne la date du jour (pour la page À propos).
 */
function obtenirDateDuJour(): string {
    return date('d/m/Y');
}