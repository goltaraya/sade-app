<?php include_once 'templates/header.php' ?>

<div class="container">
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
                        <td scope="row">EDIT VIEW DELETE</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Oops... Aparentemente ainda não há colaboradores cadastrados. Por favor, cadastre-os no botão abaixo.</p>
    <?php endif; ?>
</div>

<?php include_once 'templates/footer.php' ?>