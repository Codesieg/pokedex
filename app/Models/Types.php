<?php

namespace Pokedex\Models;

use Pokedex\Utils\Database;

class Types
{
    private $id;
    private $name;
    private $color;

    public function findAll()
    {
        $sql = 'SELECT *
        FROM type
        ORDER BY type.name';

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Models\Types');

        return $results;
    }


    public function findByPokemon($id)
    {
        // dump($id);
        $sql =
            'SELECT pokemon_type.pokemon_numero, type.* 
            FROM pokemon_type 
            LEFT JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
            LEFT JOIN type ON pokemon_type.type_id = type.id 
            WHERE pokemon.id =' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Models\Types');
        return $result;
    }

        public function findByPokemonType($id)
    {
        // dump($id);
        $sql =
            'SELECT  pokemon.* 
            FROM pokemon_type 
            LEFT JOIN pokemon ON pokemon_type.pokemon_numero = pokemon.numero
            LEFT JOIN type ON pokemon_type.type_id = type.id 
            WHERE type.id =' . $id;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $result = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, 'Pokedex\Models\Types');
        return $result;
    }


    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}
