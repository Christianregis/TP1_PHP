<?php

class Produit
{
    /*
     * À compléter par les étudiants :
     *
     * - déclarer les attributs correspondant à un produit :
     *      id
     *      nom
     *      description
     *      prix
     *      stock
     *      categorieId
     *
     * - écrire le constructeur
     *
     * - écrire les getters et setters nécessaires
     */
    private int $id;
    private string $nom;
    private string $description;
    private float $prix;
    private int $stock;
    private int $categorieId;


    public function __construct(int $id, string $nom, string $description, float $prix, int $stock, int $categorieId)
    {
        $this->id  = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->stock = $stock;
        $this->categorieId = $categorieId;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;
    }

    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix(float $prix)
    {
        $this->prix = $prix;
    }

    public function getStock()
    {
        return $this->stock;
    }
    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }

    /**
     * Ajoute le produit courant dans la base de données.
     *
     * Cette méthode doit :
     * - préparer une requête INSERT avec PDO ;
     * - utiliser les attributs de l'objet ;
     * - exécuter la requête ;
     * - indiquer si l'ajout a réussi.
     */
    public function ajouter(PDO $pdo): bool
    {
        // À compléter
            $stmt = $pdo->prepare('INSERT INTO produits(id, nom, description, prix, stock, categorie_id) VALUES(?, ?, ?, ?, ?, ?)');
            $stmt->bindValue(1, $this->id);
            $stmt->bindValue(2, $this->nom);
            $stmt->bindValue(3, $this->description);
            $stmt->bindValue(4, $this->prix);
            $stmt->bindValue(5, $this->stock);
            $stmt->bindValue(6, $this->categorieId);

            return $stmt->execute();
    }


    /**
     * Modifie dans la base de données le produit courant.
     *
     * Cette méthode doit :
     * - utiliser l'identifiant du produit courant ;
     * - préparer une requête UPDATE avec PDO ;
     * - mettre à jour les valeurs à partir des attributs de l'objet ;
     * - exécuter la requête ;
     * - indiquer si la modification a réussi.
     */
    public function modifier(PDO $pdo): bool
    {
        // À compléter
        $stmt = $pdo->prepare('UPDATE produits SET nom = ?, description = ?, prix = ?, stock = ?, categorie_id = ? WHERE id = ?');
        $stmt->bindValue(1, $this->nom);
        $stmt->bindValue(2, $this->description);
        $stmt->bindValue(3, $this->prix);
        $stmt->bindValue(4, $this->stock);
        $stmt->bindValue(5, $this->categorieId);
        $stmt->bindValue(6, $this->id);

        return $stmt->execute();
    }


    /**
     * Supprime le produit courant de la base de données.
     *
     * Cette méthode doit :
     * - utiliser l'identifiant du produit courant ;
     * - préparer une requête DELETE avec PDO ;
     * - exécuter la requête ;
     * - indiquer si la suppression a réussi.
     */
    public function supprimer(PDO $pdo): bool
    {
        // À compléter
    }


    /**
     * Retourne la liste de tous les produits présents dans la base.
     *
     * Cette méthode doit :
     * - préparer puis exécuter une requête SELECT ;
     * - récupérer l'ensemble des produits ;
     * - retourner un tableau contenant les produits.
     *
     * Cette méthode est statique :
     * elle peut être appelée sans créer auparavant un objet Produit.
     */
    public static function lister(PDO $pdo): array
    {
        // À compléter
    }
}
