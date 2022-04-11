<?php
// fichier appelé par l'appel AJAX pour charger les commentaires dans le fichier principal
try {
    include "pdo.php";
    $com = $pdo->query('SELECT * FROM commentaire')->fetchAll();
    echo json_encode($com);
} catch (Exception $exception) {
    http_response_code(400);
    echo json_encode(["error"=> $exception->getMessage()]);
}