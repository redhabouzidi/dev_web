<?php
    include "pdo.php";
    $nom=htmlspecialchars($_POST['nom']);
    $contenu=htmlspecialchars($_POST['contenu']);
    try {
    $statement=$pdo->prepare("INSERT INTO `article`( `nom`, `contenu`) VALUES ( :nom, :contenu)");
    $statement->bindValue("nom",$nom);
    $statement->bindValue("contenu",$contenu);
    $statement->execute();
    header("Location:resources.php");
} catch (PDOException $exception) {
    http_response_code(400);
    echo json_encode(["error"=> $exception->getMessage()]);
}