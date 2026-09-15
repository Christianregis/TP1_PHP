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

        if (empty($_POST)) {
            echo "Le formulaire n'est pas totalement rempli !";
            exit;
        }
        $id = $_POST['id'];
        $produit = new Produit($id, '', '', 0.0, 0, 0);
        if ($produit->supprimer($pdo)) {
            header('Location: ../vues/confirmation-suppression.php');
            exit;
        }
    }
}

// TODO étudiant :
// créer le contrôleur puis appeler supprimer(...)
$controller = new SupprimerController();
$controller->supprimer($pdo);
