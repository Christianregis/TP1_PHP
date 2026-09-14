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

        if (empty($_POST)) {
            echo "Le formulaire n'est pas totalement rempli !";
            exit;
        }
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $categorie_id = $_POST['categorie_id'];

        $produit = new Produit($id, $nom, $description, $prix, $stock, $categorie_id);

        if ($produit->modifier($pdo)) {
            header('Location: ../vues/confirmation-modification.php');
        }
    }
}

// TODO étudiant :
// créer le contrôleur puis appeler modifier(...)
$controller = new ModifierController();
$controller->modifier($pdo);