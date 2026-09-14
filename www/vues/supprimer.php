<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un nain</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<main class="container">
    <h1>Supprimer un nain</h1>

    <p class="warning">
        Attention : un nain supprimé quitte définitivement le jardin.
    </p>

    <form action="../controleurs/SupprimerController.php" method="post">

        <label for="id">Identifiant du nain à supprimer</label>
        <input type="number" id="id" name="id" min="1" required>

        <button type="submit" class="danger">Supprimer le nain</button>
    </form>

    <p><a href="liste.php">← Retour à la liste</a></p>
</main>

</body>
</html>
