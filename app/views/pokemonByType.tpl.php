    <div class="row mx-0">
        <?php foreach ($viewData['allTypes'] as $pokemon) : ?>
            <div class="col-lg-4">
                <div class="card card-radius text-center p-4 m-4 bg-danger  ">
                    <a href="<?= $viewData['urlPrefix'] . "details/" . $pokemon->getId() ?>">
                        <img src="<?= $viewData['urlPrefix'] . "img/" . $pokemon->numero ?>" alt="Card image" class="card-img"></a>
                    <a class="mb-4 text-white fs-4" href="<?= $viewData['urlPrefix'] . "details/" . $pokemon->getId() ?>"><?= "#" . $pokemon->numero. " " .  $pokemon->nom ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>