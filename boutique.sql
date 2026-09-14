USE nainternet;

DROP TABLE IF EXISTS lignes_commande;
DROP TABLE IF EXISTS commandes;
DROP TABLE IF EXISTS produits;
DROP TABLE IF EXISTS categories;
DROP TABLE IF EXISTS clients;

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    description TEXT,
    prix DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    categorie_id INT,
    FOREIGN KEY (categorie_id) REFERENCES categories(id)
);

CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    ville VARCHAR(100)
);

CREATE TABLE commandes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    client_id INT NOT NULL,
    date_commande DATE NOT NULL,
    statut VARCHAR(50) NOT NULL,
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

CREATE TABLE lignes_commande (
    commande_id INT NOT NULL,
    produit_id INT NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,

    PRIMARY KEY (commande_id, produit_id),

    FOREIGN KEY (commande_id) REFERENCES commandes(id),
    FOREIGN KEY (produit_id) REFERENCES produits(id)
);

INSERT INTO categories (nom) VALUES
('Classiques'),
('Geek'),
('Fantasy'),
('Métiers'),
('Éditions limitées');

INSERT INTO produits
(nom, description, prix, stock, categorie_id)
VALUES
(
    'Gérard le traditionnel',
    'Nain rouge classique. Regarde sévèrement les mauvaises herbes.',
    19.90,
    15,
    1
),
(
    'Kevin le nain hacker',
    'Capuche noire, ordinateur portable et connaissance inquiétante de votre Wi-Fi.',
    34.90,
    8,
    2
),
(
    'SELECT * FROM Jardin',
    'Nain spécialiste SQL. Refuse les jointures sans condition.',
    29.90,
    12,
    2
),
(
    '404 Gnome Not Found',
    'Un nain introuvable. Pourtant il est bien dans le carton.',
    27.50,
    4,
    2
),
(
    'Gandalf le petit',
    'Vous ne passerez pas... la haie.',
    39.90,
    6,
    3
),
(
    'Gromul le barbare',
    'Armé d une minuscule hache pour protéger vos salades.',
    42.00,
    3,
    3
),
(
    'Jean-Michel développeur',
    'Boit du café et affirme que ça fonctionne sur sa machine.',
    31.90,
    11,
    4
),
(
    'Monique RH',
    'Organise des entretiens annuels avec les autres nains.',
    28.90,
    9,
    4
),
(
    'Didier chef de projet',
    'Demande si le jardin peut être terminé pour vendredi.',
    33.50,
    7,
    4
),
(
    'Michel stagiaire',
    'Ne sait pas pourquoi il est là mais fait de son mieux.',
    14.90,
    20,
    4
),
(
    'Bernard ninja',
    'Invisible dans les massifs. Sauf quand il tombe.',
    38.90,
    5,
    3
),
(
    'Josiane disco',
    'Pantalon pattes d éléphant et boule à facettes intégrée.',
    36.90,
    8,
    1
),
(
    'Raymond punk',
    'Crête rose et regard hostile envers les rosiers.',
    35.00,
    10,
    1
),
(
    'Ginette licorne',
    'Un nain avec une corne. Personne ne sait vraiment pourquoi.',
    44.90,
    4,
    3
),
(
    'Albert astronaute',
    'Premier nain officiellement prêt à jardiner sur Mars.',
    54.90,
    2,
    5
),
(
    'Nain doré collector',
    'Doré, inutilement luxueux et beaucoup trop cher.',
    129.90,
    1,
    5
),
(
    'Robert zombie',
    'Revient chaque printemps. Même quand personne ne le souhaite.',
    41.90,
    6,
    3
),
(
    'Martine influenceuse',
    'Photographie les tomates avant de les manger.',
    32.90,
    13,
    4
),
(
    'Patrick télétravail',
    'Installé dans son transat avec son ordinateur depuis 2020.',
    37.50,
    9,
    4
),
(
    'Nain mystère',
    'Vous ne savez pas quel nain vous recevrez. Nous non plus.',
    12.90,
    30,
    5
);

INSERT INTO clients
(prenom, nom, email, ville)
VALUES
('Alice', 'Martin', 'alice.martin@example.com', 'Rennes'),
('Bob', 'Dupont', 'bob.dupont@example.com', 'Brest'),
('Chloé', 'Bernard', 'chloe.bernard@example.com', 'Nantes'),
('David', 'Robert', 'david.robert@example.com', 'Quimper'),
('Emma', 'Petit', 'emma.petit@example.com', 'Vannes'),
('Lucas', 'Durand', 'lucas.durand@example.com', 'Lorient');

INSERT INTO commandes
(client_id, date_commande, statut)
VALUES
(1, '2026-09-01', 'Livrée'),
(2, '2026-09-03', 'Livrée'),
(3, '2026-09-06', 'Expédiée'),
(1, '2026-09-10', 'En préparation'),
(5, '2026-09-11', 'En préparation'),
(6, '2026-09-12', 'Payée');

INSERT INTO lignes_commande
(commande_id, produit_id, quantite, prix_unitaire)
VALUES
(1, 2, 1, 34.90),
(1, 4, 1, 27.50),

(2, 7, 2, 31.90),
(2, 10, 1, 14.90),

(3, 5, 1, 39.90),
(3, 11, 1, 38.90),

(4, 9, 1, 33.50),
(4, 10, 3, 14.90),

(5, 14, 1, 44.90),
(5, 18, 1, 32.90),

(6, 16, 1, 129.90);