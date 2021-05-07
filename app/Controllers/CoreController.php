<?php

namespace Pokedex\Controllers;

class CoreController
{

    protected function show($viewName, $viewData = [])
    {
        $viewData['urlPrefix'] = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['BASE_URI'] . '/';
        // On récupére les données via viewData
        // si on récupére une réponse 404 alors on redirige ver la page spécifique 404.tpl.php
        if ($viewName == '404'){
            require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        }else {
        require __DIR__ . '/../views/header.tpl.php';
        require __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require __DIR__ . '/../views/footer.tpl.php';
        }
    }
}