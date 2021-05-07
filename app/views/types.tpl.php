<div class="row mx-0">
    <p class=" text-white fw-bold m-2">Cliquez sur un type pour voir tous les Pokémon de ce type : </p>
        <?php foreach ($viewData['allTypes'] as $type) : ?>
            <div class="col-lg-3">
                <div class="card text-center m-1 p-2" style="background-color: #<?= $type->getColor()?>">
                    <a class="text-white fs-5 p-2" href="<?= $viewData['urlPrefix'] . "types/" . $type->getId() ?>"><?=$type->getName()?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>