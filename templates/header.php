<?php include_once 'config/url.php' ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>SADE - Sistema de avisos de eventos</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php "><img src="<?= $BASE_URL ?>img/clipboard-icon.png" alt=""></a>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="<?= $BASE_URL ?>index.php">Início</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>eventos.php">Eventos</a>
                    <a class="nav-link" href="<?= $BASE_URL ?>colaboradores.php">Colaboradores</a>
                </div>
            </div>
        </div>