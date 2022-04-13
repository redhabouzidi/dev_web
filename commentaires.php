<?php
session_start();
try {
    
    include "pdo.php";
    $com = $pdo->query('SELECT * FROM commentaire')->fetchAll();
    echo json_encode($com);
} catch (Exception $exception) {
    http_response_code(400);
    echo json_encode(["error"=> $exception->getMessage()]);
}