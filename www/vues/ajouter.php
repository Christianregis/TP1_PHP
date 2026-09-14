<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un nain</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<main class="container">
    <h1>Ajouter un nouveau nain</h1>

    <form action="../controleurs/AjouterController.php" method="post">

        <label for="nom">Nom du nain</label>
        <input type="text" id="nom" name="nom" required>

        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <label for="prix">Prix</label>
        <input type="number" id="prix" name="prix" step="0.01" min="0" required>

        <label for="stock">Stock</label>
        <input type="number" id="stock" name="stock" min="0" required>

        <label for="categorie_id">Catégorie</label>
        <select id="categorie_id" name="categorie_id" required>
            <option value="1">Classiques</option>
            <option value="2">Geek</option>
            <option value="3">Fantasy</option>
            <option value="4">Métiers</option>
            <option value="5">Éditions limitées</option>
        </select>

        <button type="submit">Ajouter le nain</button>
    </form>

    <p><a href="liste.php">← Retour à la liste</a></p>
</main>

</body>
</html>
