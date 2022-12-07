<?php include_once 'templates/header.php' ?>

<?php if (count($colaboradores) > 0) : ?>
    <div class="form-div">
        <table class="table table-hover table-sm" id="colaboradores-table">
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
                        <td scope="row">EDIT</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php else : ?>
    <p>Oops... Aparentemente ainda não há colaboradores cadastrados. Por favor, cadastre-os no botão abaixo.</p>
<?php endif; ?>

<?php include_once 'templates/footer.php' ?>