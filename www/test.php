<?php
require_once __DIR__ . "/modeles/Produits.php";

$host = 'db';
$dbname = 'nainternet';
$user = 'user';
$password = 'password';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>PHP fonctionne ✅</h1>";
    echo "<p>Connexion MySQL réussie ✅</p>";

} catch (PDOException $e) {
    echo "<h1>PHP fonctionne ✅</h1>";
    echo "<p>Erreur MySQL : " . $e->getMessage() . "</p>";
}

// Test de la classe Produit
$produit = new Produit(29, 'paul', 'Good', 0.0, 2, 1);
echo "<h1>Ancien Stock : ".$produit->getStock()."</h1>";

// Modification du stock
$produit->setStock(12);
echo "<h1>Nouveau Stock : ".$produit->getStock()."</h1>";

// Ajout du produit dans la base de données
echo "".$produit->ajouter($pdo)."";

// Modification du stock
$produit->setStock(10);

// Modification du produit courant
if($produit->modifier($pdo)){
    echo "<h1>Nouveau Stock : ".$produit->getStock()."</h1>";
}

// Suppression du produit courant
if($produit->supprimer($pdo)){
    echo "<h1>Produit supprimé avec succès !</h1>";
}

var_dump(Produit::lister($pdo));

