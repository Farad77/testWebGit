<?php

class Personnage {

    // Encapsulation
    // string
    private $nom;

    // float
    private $force;

    // float
    private $endurance;

    function setNom($nom){
        $this->nom = $nom;
        return $this;
    }

    function getNom(){
        return $this->nom;
    }

    function _toString(){
        echo $this->nom . "(force= $this->force, endurance= $this->endurance)";
    }


    /**
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        $this->force = $force;

        return $this;
    }

    /**
     * Get the value of endurance
     */ 
    public function getEndurance()
    {
        return $this->endurance;
    }

    /**
     * Set the value of endurance
     *
     * @return  self
     */ 
    public function setEndurance($endurance)
    {
        $this->endurance = $endurance;

        return $this;
    }


}

?>