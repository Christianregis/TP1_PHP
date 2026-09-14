<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modeles/Produits.php';

class ModifierController
{
    public function modifier(PDO $pdo): void
    {
        // TODO étudiant :
        // 1. Récupérer les données envoyées par le formulaire
        // 2. Créer un objet Produits
        // 3. Appeler la méthode modifier(...)
        // 4. Rediriger vers la liste

        /*
         * Indice :
         * header('Location: ../vues/liste.php');
         * exit;
         */
    }
}

// TODO étudiant :
// créer le contrôleur puis appeler modifier(...)
