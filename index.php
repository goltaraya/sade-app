<?php include_once 'templates/header.php' ?>

<main>
    <div class="d-grid gap-2 col-6 mx-auto">
        <div class="header-div">
            <h3 style="text-align: center;">Selecione abaixo o que deseja visualizar: </h3>
        </div>
    </div>

    <div class="d-grid gap-2 col-4 mx-auto">
        <a href="<?= $BASE_URL ?>eventos.php" type="button" class="btn btn-secondary btn-lg">Evento</a>
        <a type="button" class="btn btn-secondary btn-lg">Colaborador</a>
    </div>
</main>

<?php include_once 'templates/footer.php' ?>