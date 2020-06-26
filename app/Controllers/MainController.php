<?php

namespace pokedex\controllers;

use Pokedex\Models\Pokedex;
use Pokedex\Models\Detail;

class MainController {

    public function page404() {

        $this->show('404');
    }

    public function show($viewName, $viewVars = []) {

        global $router;

        $viewVars['currentPage'] = isset($_GET['page']) ? $_GET['page'] : 'home';
        $viewVars['BASE_URI'] = $_SERVER['BASE_URI'];

        $pokedexModel = new Pokedex();

        $resultPokedex = $pokedexModel->findAll();

        // $detailModel = new Detail();

        // $resultDetail = $detailModel->findOne();

        $viewVars['allPokemon'] = $resultPokedex;
        // $viewVars['onePokemon'] = $resultDetail;

        extract($viewVars);

        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/'. $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }

public function home() {

    $pokemonModel = new Pokedex();
    $pokemonList = $pokemonModel->findAll();

    $dateToDisplay = [
        'pokemonList' => $pokemonList
    ];

    $this->show('home', $dateToDisplay);
}


}