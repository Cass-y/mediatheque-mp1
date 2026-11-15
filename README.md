DESCRIPTION DU PROJET
Ce projet consiste en la création d'un mini-site web dynamique développé en PHP. Il gère un catalogue de manuels d'informatique structuré à partir d'un tableau PHP et offre des fonctionnalités de filtrage et de consultation détaillée.

PREREQUIS ET INSTALLATION
Pour exécuter ce projet localement :
- Installer un serveur local supportant PHP (XAMPP, WAMP).
- Cloner ou placer le dossier complet du projet (ici: ATAYI_Joana_IA_2026-2027_TP_1_IT231) dans le répertoire racine de WAMP.
- Démarrer le serveur Apache depuis votre panneau de contrôle.
- Ouvrir un navigateur web et accéder à l'URL : http://localhost/ATAYI_Joana_IA_2025_TP_1_%20IT231/mediatheque-mp1/catalogue.php


FONCTIONNALITES REALISEES

- Page d'accueil (index.php) : Message de bienvenue, statistiques dynamiques (nombre total de livres et nombre de livres disponibles calculés en PHP).

- Catalogue dynamique (catalogue.php) : Affichage de l'ensemble des manuels d'informatique sous forme de cartes, avec compteur dynamique des éléments affichés.

- Filtrage par catégorie (catalogue.php?categorie=...) : Filtrage des ouvrages via les paramètres URL, avec vérification de la validité de la catégorie demandée et message d'alerte en cas d'erreur.

- Page de détail (detail.php?id=...) : Affichage complet des informations d'un livre sélectionné, avec contrôle strict de l'existence et de la validité de l'identifiant.

- Page À propos (apropos.php) : Présentation institutionnelle de la médiathèque et affichage dynamique de la date du jour via une fonction PHP.

- Sécurité et Modularité : Utilisation de htmlspecialchars() pour contrer les failles XSS, validation des paramètres GET, et structuration des pages via des inclusions (include/require) et un fichier de fonctions centralisé.