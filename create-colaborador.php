<?php include_once 'templates/header.php' ?>

<div class="container">
    <h2 style="text-align: center;">Cadastro de colaborador</h2>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
        <div class="form-group">
            <p class="p-div">Nome</p>
            <input class="input-group mb-3" type="text" class="form-control" name="nome" id="nomeColaborador">

            <p class="p-div">CPF</p>
            <input class="input-group mb-3" type="text" class="form-control" name="cpf" id="cpfColaborador">

            <p class="p-div">Senha</p>
            <input class="input-group mb-3" type="text" class="form-control" name="senha" id="senhaColaborador">

            <p class="p-div">Cargo</p>
            <input class="input-group mb-3" type="text" class="form-control" name="cargo" id="cargoColaborador">

            <p class="p-div">Email</p>
            <input class="input-group mb-3" type="text" class="form-control" name="email" id="emailColaborador">

            <p class="p-div">Telefone</p>
            <input class="input-group mb-3" type="text" class="form-control" name="telefone" id="telefoneColaborador">

            <p class="p-div">Este é um usuário administrador?</p>
            <input type="radio" name="admin" value="1">
            <label for="sim">Sim</label>
            <input type="radio" name="admin" value="0">
            <label for="não">Não</label>
            <br>
            <input type="submit" name="Submit" value="Enviar" style="align-self: center;">
        </div>
    </form>
</div>

<?php include_once 'templates/footer.php' ?>