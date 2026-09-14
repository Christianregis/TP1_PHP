<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modeles/Produits.php';

class ListeController
{
    public function lister(PDO $pdo): array
    {
        // TODO étudiant :
        // appeler la méthode statique Produits::lister(...)
        // puis retourner le tableau obtenu

        return [];
    }
}

// Ce contrôleur peut être appelé depuis la vue liste.php.
