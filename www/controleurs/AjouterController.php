<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../modeles/Produits.php';

class AjouterController
{
    public function ajouter(PDO $pdo): void
    {
        // TODO étudiant :
        // 1. Vérifier que le formulaire a été envoyé en POST
        // 2. Récupérer les valeurs du formulaire avec $_POST
        // 3. Créer un objet Produits
        // 4. Appeler sa méthode ajouter(...)
        // 5. Rediriger vers la vue de liste

        /*
         * Indice pour la redirection :
         *
         * header('Location: ../vues/liste.php');
         * exit;
         */

        if (empty($_POST)) {
            // Le formulaire n'a pas été soumis, on peut afficher un message d'erreur ou rediriger vers le formulaire
            echo "Le formulaire n'a pas été soumis.";
            exit;
        }
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        $stock = $_POST['stock'];
        $categorie_id = $_POST['categorie_id'];

        $produit = new Produit(null, $nom, $description, $prix, $stock, $categorie_id);


        if ($produit->ajouter($pdo)) {
            // Redirection vers la vue de confirmation
            header('Location: ../vues/confirmation-ajout.php');
            exit;
        }
    }
}

// TODO étudiant :
// créer un objet AjouterController puis appeler la méthode ajouter(...)
$controller = new AjouterController();
$controller->ajouter($pdo);
