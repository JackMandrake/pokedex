<?php

namespace pokedex\models;

use Pokedex\utils\Database;
use Pokedex\Models\CoreModel;

use PDO;

class Pokedex extends CoreModel {

    public function findAll() {

        $sql = 'SELECT *
            FROM `pokemon`';
        
        $pdo = Database::getPDO($sql);

        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'pokedex\models\Pokedex');

        return $results;
    }
}