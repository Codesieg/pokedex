<div class="row align-items-start m-1">
    <h2 class="text-white text-center pb-3"> Détails de <?= $viewData['detailPokemon']['pokemon']->getNom() ?> </h2>
    <div class="row align-items-start ">
        <div class="col-4 g-0 pe-4 pt-5">
            <div><img src="<?= $viewData['urlPrefix'] . "img/" . $viewData['detailPokemon']['pokemon']->getNumero() ?>" alt="Card image" class="card-img">
            </div>
        </div>
        <div class="col-lg-8 bg-danger detail-radius g-0 p-4">
            <h3 class="mb-4 text-white fs-4"><?= "#" . $viewData['detailPokemon']['pokemon']->getNumero() . " " .  $viewData['detailPokemon']['pokemon']->getNom() ?></h3>
            <div class="row align-items-start pb-3">
                <?php foreach($viewData['detailPokemon']['type'] as $type) : ?>
                <h3 class="col-1 me-5 " ><span class="badge" style="background-color: #<?= $type->getColor() ?>"><?= $type->getName() ?></span></h3>
                <?php endforeach ?>
            </div>
            <h3 class="text-white">Statistiques</h3>
            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">PV</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getPv() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getPv() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->

            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">Attaque</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getAttaque() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getAttaque() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->
            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">Defense</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getDefense() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getDefense() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->
            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">Attaque Spé</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getAttaqueSpe() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getAttaqueSpe() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->
            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">Defense Spé</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getDefenseSpe() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getDefenseSpe() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->
            <!-- Debut valeur des stats -->
            <div class="row align-items-start">
                <div class="col-3">
                    <p class="text-white">Vitesse</p>
                </div>
                <div class="col-2">
                    <p class="text-white"><?= $viewData['detailPokemon']['pokemon']->getVitesse() ?></p>
                </div>
                <div class="col">
                    <progress max="255" value="<?= $viewData['detailPokemon']['pokemon']->getVitesse() ?>"></progress>
                </div>
            </div>
            <!-- Fin valeur des stats -->
        </div>
        <a class = "text-center mt-4 text-white fs-4 fw-bold" href="<?= $viewData['urlPrefix'] ?>">Revenir à l'accueil</a>
    </div>
</div>
