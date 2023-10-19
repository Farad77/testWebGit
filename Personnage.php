<?php

class Personnage {

    //String
    private $nom;

    //Float
    private $force;

    //Float
    private $endurance;

    public function setNom($valeur){
        
        $this->nom=$valeur;
        return $this;
    }

    function getNom(){
        return $this->nom;
    }

    function __toString()
    {
        return $this->nom."(force=".$this->force.
                            ",endurance=".$this->endurance.")";
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
}


?>