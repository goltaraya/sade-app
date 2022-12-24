<?php

session_start();

include_once 'connection.php';
include_once 'url.php';

$data = $_POST;

if (!empty($data)) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $cargo = $_POST['cargo'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $admin = $_POST['admin'];

    $query = "INSERT INTO users 
    (nome, cpf, senha, cargo, email, telefone, admin) 
    VALUES 
    (:nome, :cpf, :senha, :cargo, :email, :telefone, :admin)";
    $stmt = $conn->prepare($query);
    
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":cpf", $cpf);
    $stmt->bindParam(":senha", $senha);
    $stmt->bindParam(":cargo", $cargo);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":telefone", $telefone);
    $stmt->bindParam(":admin", $admin);

    try {
        $stmt->execute();
    } catch (PDOException $e){
        echo "Error:" . $e->getMessage();
    }

    header("Location: ". $BASE_URL . "../colaboradores.php");
} else {

    if (!empty($_GET)) {
        $id = $_GET["id"];
    }

    if (!empty($id)) { // Retorna dados de apenas um usuário
        $query = "SELECT * FROM users WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $colaborador = $stmt->fetch();
    } else {
        $colaboradores = [];

        $query = "SELECT * FROM users";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $colaboradores = $stmt->fetchAll();
    }
}
