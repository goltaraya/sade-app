<?php include_once("templates/header.php"); ?>
<?php include_once("templates/button.html"); ?>

<div class="container">
    <h2 class="table-header">Perfil de <?= $colaborador['nome'] ?></h2>
    <h3>CPF:</h3>
    <p><?= $colaborador['cpf'] ?></p>
    <h3>Cargo:</h3>
    <p><?= $colaborador['cargo'] ?></p>
    <h3>Email:</h3>
    <p><?= $colaborador['email'] ?></p>
    <h3>Telefone:</h3>
    <p><?= $colaborador['telefone'] ?></p>
    <h3>Usuário administrador:</h3>
    <?php if ($colaborador['admin'] == 0) : ?>
        <p>Não</p>
    <?php else : ?>
        <p>Sim</p>
    <?php endif; ?>
</div>

<?php include_once("templates/footer.php"); ?>