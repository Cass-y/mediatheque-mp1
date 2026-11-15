<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

// Catalogue dzs livres de la mediatheque

$livres = [
    [
        'id' => 1,
        'titre' => 'Réseaux informatiques : Notions fondamentales',
        'auteur' => 'Guy Pujolle',
        'annee' => 2020,
        'categorie' => 'Réseaux',
        'prix' => 25000,
        'disponible' => true
    ],
    [
        'id' => 2,
        'titre' => 'Algorithmique et Programmation en PHP',
        'auteur' => 'Christophe Blaess',
        'annee' => 2021,
        'categorie' => 'Programmation',
        'prix' => 18000,
        'disponible' => true
    ],
    [
        'id' => 3,
        'titre' => 'Bases de données et modélisation SQL',
        'auteur' => 'Stéphane Faroult',
        'annee' => 2019,
        'categorie' => 'Base de Données',
        'prix' => 20000,
        'disponible' => false
    ],
    [
        'id' => 4,
        'titre' => 'Administration Système Linux',
        'auteur' => 'Bastien Guerry',
        'annee' => 2022,
        'categorie' => 'Système',
        'prix' => 22000,
        'disponible' => true
    ],
    [
        'id' => 5,
        'titre' => 'Conception orientée objet avec UML',
        'auteur' => 'Pascal Roques',
        'annee' => 2018,
        'categorie' => 'Génie Logiciel',
        'prix' => 28000,
        'disponible' => true
    ],
    [
        'id' => 6,
        'titre' => 'Sécurité des réseaux et des systèmes',
        'auteur' => 'Laurent Bloch',
        'annee' => 2023,
        'categorie' => 'Sécurité',
        'prix' => 30000,
        'disponible' => false
    ],
    [
        'id' => 7,
        'titre' => 'Python pour l’analyse de données',
        'auteur' => 'Wes McKinney',
        'annee' => 2022,
        'categorie' => 'Programmation',
        'prix' => 24000,
        'disponible' => true
    ],
    [
        'id' => 8,
        'titre' => 'Architecture et protocoles TCP/IP',
        'auteur' => 'Olivier Hersent',
        'annee' => 2021,
        'categorie' => 'Réseaux',
        'prix' => 21000,
        'disponible' => true
    ]
];
?>
</body>
</html>