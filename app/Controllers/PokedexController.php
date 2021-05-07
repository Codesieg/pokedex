<?php

namespace Pokedex\Controllers;

use Pokedex\Models\Pokemon;
use Pokedex\Models\Types;

class PokedexController extends CoreController
{
    public function home()
    {
             // Création de nos pokemon
        $pokemons = new Pokemon();
        $allPokemons = $pokemons->findAll();
        $this->show('home', ['allPokemons' => $allPokemons]);
    }

    public function details($id)
    {
        $pokemon = new Pokemon();
        $detailPokemon['pokemon'] = $pokemon->findByPokemon($id["pokemonId"]);

        $type = new Types();
        $detailPokemon['type'] = $type->findByPokemon($id["pokemonId"]);
        // var_dump($detailPokemon);
        $this->show('details', ['detailPokemon' => $detailPokemon]);
    }

    public function allTypes()
    {
        $types = new Types();
        $allTypes = $types->findAll();
        $this->show('types',['allTypes' => $allTypes]);
    }

    public function type($id)
    {
        $type = new Types();
        $resultType = $type->findByPokemonType($id['typeId']);
        $this->show('pokemonByType',['allTypes' => $resultType]);
    }
}
