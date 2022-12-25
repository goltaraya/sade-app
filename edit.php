<?php include_once("templates/header.php"); ?>
<?php include_once("templates/button.html"); ?>

<div class="container">
    <h2 class="table-header">Editando perfil de <?= $colaborador["nome"] ?></h2>
    <form action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $colaborador['id'] ?>">
        <table>
            <tr>
                <label for="nome">Nome:</label>
                <input type="text" value="<?= $colaborador['nome'] ?>" name="nome" id="nome">
            </tr>
            <td>
                
            </td>
            <label for="cpf">CPF:</label>
            <input type="text" value="<?= $colaborador['cpf'] ?>" name="cpf" id="cpf">
            <label for="cargo">Cargo:</label>
            <input type="text" value="<?= $colaborador['cargo'] ?>" name="cargo" id="cargo">
            <label for="email">Email:</label>
            <input type="text" value="<?= $colaborador['email'] ?>" name="email" id="email">
            <label for="telefone">Telefone:</label>
            <input type="text" value="<?= $colaborador['telefone'] ?>" name="telefone" id="telefone">
            <br>
            <input class="btn btn-atualizar" style="margin: 10px 20px" type="submit" name="edit" value="Atualizar">

        </table>
    </form>
</div>

<?php include_once("templates/footer.php") ?>