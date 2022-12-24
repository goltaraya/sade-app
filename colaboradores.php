<?php include_once 'templates/header.php' ?>

<div class="container">
    <h2 class="table-header">Colaboradores</h2>
    <?php if (count($colaboradores) > 0) : ?>
        <table class="table table-hover" id="users-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colaboradores as $colaborador) : ?>
                    <tr>
                        <td scope="row"><?= $colaborador["id"] ?></td>
                        <td scope="row"><?= $colaborador["nome"] ?></td>
                        <td scope="row"><?= $colaborador["cargo"] ?></td>
                        <td scope="row"><?= $colaborador["telefone"] ?></td>
                        <td scope="row"><?= $colaborador["email"] ?></td>
                        <td scope="actions">
                            <a href="<?= $BASE_URL ?>view.php?id=<?= $colaborador['id'] ?>"><i class="fa-solid fa-magnifying-glass icon"></i></a>
                            <a href="<?= $BASE_URL ?>edit.php?id=<?= $colaborador['id'] ?>"><i class="fa-solid fa-pen icon"></i></a>
                            <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST" style="display: inline-block;">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?= $colaborador['id'] ?>">
                                <button><i class="fa-solid fa-trash icon"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p class="p-div">Oops... Aparentemente ainda não há colaboradores cadastrados. Por favor, cadastre-os no botão abaixo.</p>

    <?php endif; ?>
    <div>
        <a href="<?= $BASE_URL ?>create-colaborador.php" type="button" class="btn cadastrar-colaborador-button">Cadastrar</a>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>