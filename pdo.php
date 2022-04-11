<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=site;port=3306', 'root', '');
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->query('CREATE TABLE IF NOT EXISTS compte (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(28) NOT NULL,
    password VARCHAR(28) NOT NULL,
    mail VARCHAR(100) NOT NULL UNIQUE
)');
    $pdo->query('CREATE TABLE IF NOT EXISTS `commentaire` (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        id_art INT NOT NULL,
        username VARCHAR(100) NOT NULL,
        contenu TEXT NOT NULL
      )');
    $pdo->query('CREATE TABLE IF NOT EXISTS article(
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nom VARCHAR(100) NOT NULL,
        contenu text NOT NULL
        )');
} catch (PDOException $exception) {
    var_dump($exception->getMessage());
}