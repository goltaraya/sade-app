<?php include_once 'templates/header.php' ?>

<main>
    <div class="d-grid gap-2 col-6 mx-auto">
        <div class="header-div">
            <h2 style="text-align: center;">Selecione abaixo o que deseja visualizar: </h2>
        </div>
    </div>

    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="<?= $BASE_URL ?>colaboradores.php" type="button" class="btn">Colaboradores</a>
    </div>
</main>

<?php include_once 'templates/footer.php' ?>