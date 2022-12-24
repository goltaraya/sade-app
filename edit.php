<?php include_once("templates/header.php") ?>

<div class="container">

    <h2 class="table-header">Editando perfil de <?= $colaborador["nome"] ?></h2>
    <form action="config/process.php">
        <label for="nome">Nome:</label>
        <input type="text" placeholder="<?= $colaborador['nome'] ?>">
    </form>
</div>

<?php include_once("templates/footer.php") ?>