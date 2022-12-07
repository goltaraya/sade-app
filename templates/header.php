<?php
include_once 'config/url.php';
include_once 'config/connection.php';
include_once 'config/process.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>SADE - Sistema de avisos de eventos</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/icon.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php ">
                <svg id="icon-img" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                </svg>
            </a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= $BASE_URL ?>index.php">Home</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>eventos.php">Eventos</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>colaboradores.php">Colaboradores</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>sobre.php">Sobre</a>
                </div>
            </div>
        </div>
    </nav>