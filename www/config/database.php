<?php

// Connexion PDO fournie pour le TP.
// Dans Docker, le nom du serveur MySQL est "db" et non "localhost".

$pdo = new PDO(
    'mysql:host=db;dbname=nainternet;charset=utf8mb4',
    'root',
    'root',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
