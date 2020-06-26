<?php

namespace pokedex\models;

use pokedex\models\Detail;

class CoreModel {
    protected $id;
    protected $nom;
    protected $pv;
    protected $attaque;
    protected $defense;
    protected $attaqueSpe;
    protected $defenseSpe;
    protected $vitesse;
    protected $numero;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaqueSpe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaqueSpe;
    }

    /**
     * Get the value of defenseSpe
     */ 
    public function getDefenseSpe()
    {
        return $this->defenseSpe;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }
}