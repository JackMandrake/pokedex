<?php
namespace pokedex\models;

use PDO;
use pokedex\models\CoreModel;
use pokedex\utils\Database;

class Detail extends CoreModel {

    public function findOne() {

        $sql = 'SELECT *
                FROM `pokemon`
                WHERE `numero` ';

        $pdo = Database::getPDO();

        $pdoStatement = $pdo->query($sql);
        $resultForOne = $pdoStatement->fetchObject('pokedex\models\Detail');

        return $resultForOne;
    }
}