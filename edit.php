<?php include_once("templates/header.php") ?>

<div class="container">

    <h2 class="table-header">Editando perfil de <?= $colaborador["nome"] ?></h2>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
        <h3>Nome:</h3>
        <input type="text" value="<?= $colaborador['nome'] ?>" name="nome" id="nome">
        <h3>CPF:</h3>
        <input type="text" value="<?= $colaborador['cpf'] ?>" name="cpf" id="cpf">
        <h3>Cargo:</h3>
        <input type="text" value="<?= $colaborador['cargo'] ?>" name="cargo" id="cargo">
        <h3>Email:</h3>
        <input type="text" value="<?= $colaborador['email'] ?>" name="email" id="email">
        <h3>Telefone:</h3>
        <input type="text" value="<?= $colaborador['telefone'] ?>" name="telefone" id="telefone">
        <br>
        <input class="btn btn-atualizar" style="margin: 10px 20px;" type="submit" name="edit" value="Atualizar">
    </form>
</div>

<?php include_once("templates/footer.php") ?>