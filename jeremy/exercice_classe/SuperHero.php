<?php
require_once('Personnage.php');  // éviter les doublons, au cas ou si le fichier php est appeler à un autre endroit.

class SuperHero extends Personnage {
    private $pouvoirs;

    public function ajouterPouvoir($pouvoir){
        if($this->pouvoirs==null){
            $this->pouvoirs=array();
        }
        array_push($this->pouvoirs,$pouvoir);
    }

    function _toString (){
        return parent::_toString();
    }

    /**
     * Get the value of pouvoir
     */ 
    public function getPouvoir()
    {
        return $this->pouvoirs;
    }

    /**
     * Set the value of pouvoir
     *
     * @return  self
     */ 
    public function setPouvoir($pouvoir)
    {
        $this->pouvoirs = $pouvoir;

        return $this;
    }
}

?>