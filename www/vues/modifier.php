<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un nain</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<main class="container">
    <h1>Modifier un nain</h1>

    <form action="../controleurs/ModifierController.php" method="post">

        <label for="id">Identifiant du nain</label>
        <input type="number" id="id" name="id" min="1" required>

        <label for="nom">Nouveau nom</label>
        <input type="text" id="nom" name="nom" required>

        <label for="description">Nouvelle description</label>
        <textarea id="description" name="description" rows="4"></textarea>

        <label for="prix">Nouveau prix</label>
        <input type="number" id="prix" name="prix" step="0.01" min="0" required>

        <label for="stock">Nouveau stock</label>
        <input type="number" id="stock" name="stock" min="0" required>

        <label for="categorie_id">Catégorie</label>
        <select id="categorie_id" name="categorie_id" required>
            <option value="1">Classiques</option>
            <option value="2">Geek</option>
            <option value="3">Fantasy</option>
            <option value="4">Métiers</option>
            <option value="5">Éditions limitées</option>
        </select>

        <button type="submit">Modifier le nain</button>
    </form>

    <p><a href="liste.php">← Retour à la liste</a></p>
</main>

</body>
</html>
