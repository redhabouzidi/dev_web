<?php
// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal
try {
    include "pdo.php";
    $art = $pdo->query('SELECT * FROM article')->fetchAll();
    header("Content-Type: application/json");
    echo json_encode($art);
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}