<?php

class Personnage
{
    // String
    private $nom;

    // Float
    private $force;
    private $endurance;

    // Fonctions de Nom
    function setNom($valeur)
    {
        $this->nom = $valeur;
        return $this;
    }

    function getNom()
    {
        return $this->nom;
    }

    // Fonctions de force
    function setForce($valeur)
    {
        $this->force = $valeur;
        return $this;
    }

    function getForce()
    {
        return $this->force;
    }

    // Fonctions de Endurance
    function setEndurance($valeur)
    {
        $this->endurance = $valeur;
        return $this;
    }

    function getEndurance()
    {
        return $this->endurance;
    }

    // Fonctions autres
    function __toString()
    {
        return $this->nom . " (Force = " . $this->force . " : Endurance = " . $this->endurance . ")";
    }
}
