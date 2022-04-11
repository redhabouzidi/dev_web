<?php
    include "pdo.php";
    
    $id=htmlspecialchars($_POST['id']);
    $nom=htmlspecialchars($_POST['nom']);
    $contenu=htmlspecialchars($_POST['contenu']);
    try {
    $statement=$pdo->prepare("INSERT INTO `article`(`id`, `nom`, `contenu`) VALUES (:id, :nom, :contenu)");
    $statement->bindValue("id",$id);
    $statement->bindValue("nom",$nom);
    $statement->bindValue("contenu",$contenu);
    $statement->execute();
} catch (PDOException $exception) {
    http_response_code(400);
    echo json_encode(["error"=> $exception->getMessage()]);
}