<?php

session_start();

include_once 'connection.php';
include_once 'url.php';

$data = $_POST;

if (!empty($data)) {
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
