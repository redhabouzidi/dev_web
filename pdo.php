<?php

try {
$pdo = new PDO('sqlite:data.db');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS compte (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(28) NOT NULL,
    password VARCHAR(28) NOT NULL,
    mail VARCHAR(100) NOT NULL UNIQUE
)');
    $pdo->query('CREATE TABLE IF NOT EXISTS `commentaire` (
        id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        id_art INT NOT NULL,
        id_per INT NOT NULL,
        username VARCHAR(100) NOT NULL,
        contenu TEXT NOT NULL
      )');
    $pdo->query('CREATE TABLE IF NOT EXISTS article(
        id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
        nom VARCHAR(100) NOT NULL,
        contenu text NOT NULL
        )');
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}