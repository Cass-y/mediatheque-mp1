Journal de Bord - TP 1(IT 231)

1. Difficultés rencontrées
• Gestion du filtrage par URL et des paramètres vides : Au début, lors de la mise en
place de la page catalogue.php, le filtrage par catégorie renvoyait des erreurs
lorsque le paramètre URL était mal formé ou inexistant. Il a fallu mettre en place
des vérifications robustes (isset(), trim()) couplées à une fonction de recherche
insensible à la casse pour stabiliser le comportement.

• Validation stricte de l'identifiant dans la page détail : Gérer proprement le cas où
l'utilisateur saisit un ID inexistant ou non numérique dans l'URL
(detail.php?id=abc) a nécessité l'utilisation combinée de filter_var() avec le filtre
FILTER_VALIDATE_INT pour éviter les avertissements PHP.

• Séparation propre de la structure modulaire : L'organisation des fichiers selon
l'arborescence exigée (includes/, data/, css/) a demandé de la rigueur dans la
gestion des chemins relatifs lors des inclusions de scripts (require_once).


2. Solutions apportées
• Centralisation de toute la logique métier et des traitements de tableaux dans le
fichier includes/fonctions.php pour garder les pages de vues (index.php,
catalogue.php, detail.php) propres et lisibles.

• Application systématique de la fonction htmlspecialchars() sur toutes les
variables affichées à l'écran afin de garantir la sécurité de base exigée contre les
injections de code.

• Utilisation de classes CSS modulaires (.livre-card, .badge, .alert) pour structurer
un rendu visuel propre, moderne et responsive.


3. Ce qui a été appris
• Maîtrise de la manipulation avancée des tableaux associatifs et
multidimensionnels en PHP (recherche, filtrage, comptage conditionnel).

• Compréhension du passage de paramètres via la méthode GET et de leur
sécurisation sur le web.

• Mise en pratique d'une architecture simplifiée (séparation Données, Fonctions et
Vues) en PHP pur, sans l'aide de frameworks.