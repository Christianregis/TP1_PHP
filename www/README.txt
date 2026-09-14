TP PHP / PDO - Boutique de nains de jardin
===========================================

OBJECTIF
--------
Compléter une mini-application permettant de :

- lister les nains ;
- ajouter un nain ;
- modifier un nain ;
- supprimer un nain.

ARCHITECTURE
------------
config/
    database.php
        Connexion PDO fournie.

modeles/
    Produits.php
        Classe représentant l'accès aux produits.
        Méthodes à compléter :
        - ajouter(...)
        - modifier(...)
        - supprimer(...)
        - lister(...) [statique]

controleurs/
    AjouterController.php
    ModifierController.php
    SupprimerController.php
    ListeController.php

vues/
    ajouter.php
    modifier.php
    supprimer.php
    liste.php

TRAVAIL À FAIRE
---------------
1. Compléter la classe Produits.

2. Compléter AjouterController :
   - récupérer les valeurs de $_POST ;
   - créer un objet Produits ;
   - appeler ajouter(...).

3. Faire la même chose pour la modification et la suppression.

4. Dans ListeController :
   - appeler Produits::lister($pdo).

5. Dans liste.php :
   - appeler le contrôleur ;
   - récupérer les produits ;
   - les afficher avec foreach.

REDIRECTION
-----------
Après un ajout, une modification ou une suppression, on souhaite revenir
automatiquement vers la liste.

En PHP :

    header('Location: ../vues/liste.php');
    exit;

IMPORTANT :
header() doit être appelé AVANT d'envoyer du HTML au navigateur.

CONNEXION MYSQL DANS DOCKER
---------------------------
Serveur : db
Base     : demo
Utilisateur : user
Mot de passe : password
