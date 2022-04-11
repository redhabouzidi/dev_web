<?php
// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal
try {
    include "pdo.php";
    $comments = $pdo->query('SELECT * FROM compte')->fetchAll();
    header('Content-Type: application/json');
    echo json_encode($comments);

 
    
} catch (Exception $exception) {
    var_dump($exception->getMessage());
}