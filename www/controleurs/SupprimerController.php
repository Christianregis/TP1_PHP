<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modeles/Produits.php';

class SupprimerController
{
    public function supprimer(PDO $pdo): void
    {
        // TODO étudiant :
        // 1. Récupérer l'identifiant du produit
        // 2. Créer un objet Produits
        // 3. Appeler supprimer(...)
        // 4. Rediriger vers la liste

        /*
         * Indice :
         * header('Location: ../vues/liste.php');
         * exit;
         */
    }
}

// TODO étudiant :
// créer le contrôleur puis appeler supprimer(...)
