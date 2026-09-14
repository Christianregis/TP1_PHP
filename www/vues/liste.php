<?php
// TODO étudiant :
// 1. Inclure le contrôleur ListeController
// 2. Créer le contrôleur
// 3. Récupérer le tableau des produits dans une variable $produits
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des nains</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<main class="container">
    <h1>Le catalogue des nains</h1>

    <nav>
        <a href="ajouter.php">Ajouter un nain</a>
        <a href="modifier.php">Modifier un nain</a>
        <a href="supprimer.php">Supprimer un nain</a>
    </nav>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Catégorie</th>
        </tr>
        </thead>

        <tbody>

        <?php
        // TODO étudiant :
        // parcourir le tableau $produits avec foreach
        // et générer une ligne <tr> par produit
        ?>

        <!-- Exemple de structure HTML attendue :

        <tr>
            <td>1</td>
            <td>Gérard le traditionnel</td>
            <td>Nain rouge classique...</td>
            <td>19.90 €</td>
            <td>15</td>
            <td>1</td>
        </tr>

        -->

        </tbody>
    </table>
</main>

</body>
</html>
