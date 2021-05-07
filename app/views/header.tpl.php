<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $viewData['urlPrefix'] ?>/css/style.css">
</head>

<body>
    <div class="container">
        <header>
        <!--    <nav class="nav bg-light m-4 p2">
                <a class="navbar-brand ms-4 fw-bold fs-4 text-danger" href="<?= $viewData['urlPrefix'] ?>">Pokédex</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?= $viewData['urlPrefix'] ?>">List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= $viewData['urlPrefix'] ?>types">Types</a>
                        </li>
                    </ul>
                </div>
-->
                <nav class="nav bg-light m-4 p-2">
                    <a class="nav-link fw-bold fs-4 text-danger" href="<?= $viewData['urlPrefix'] ?>">Pokédex</a>
                        <div class="d-flex">
                            <a class="nav-link fw-bold fs-6 text-danger" href="<?= $viewData['urlPrefix'] ?>">List</a>
                            <a class="nav-link fw-bold fs-6 text-danger" href="<?= $viewData['urlPrefix'] ?>types">Types</a>
                        </div>
                    
                </nav>

            </nav>
        </header>