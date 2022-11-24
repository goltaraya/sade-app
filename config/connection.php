<?php

// Dados para a conexão com o banco de dados
$host =  '127.0.0.1';
$dbname = 'sade';
$user = 'admin';
$passwd = '1234';

try {
    // Instancia uma nova conexão ao banco de dados
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $passwd);

    // Ativa o debug do PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    // Recebe a mensagem de erro e exibe no log
    $error = $e->getMessage();
    echo $error;
}
