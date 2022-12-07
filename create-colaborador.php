<?php include_once 'templates/header.php' ?>

<div class="container">
    <h2 style="text-align: center;">Cadastro de colaborador</h2>
    <form action="<?= $BASE_URL ?>/config/process.php" method="POST">
        <div class="form-group">
            <p class="p-div">Nome</p>
            <input type="text" class="form-control" name="nome" id="nomeColaborador" placeholder="Nome">
        </div>
        <div class="form-group">
            <p class="p-div">CPF</p>
            <input type="text" class="form-control" name="cpf" id="cpfColaborador" placeholder="CPF"> 
        </div>
    </form>
</div>

<?php include_once 'templates/footer.php' ?>