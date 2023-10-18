<?php

require_once('Personnage.php');
require_once("MechantPouvoir.php");

class SuperVillain extends Personnage
{
    private $pouvoirs;

    function __toString()
    {
        $resultat = "";
        for ($i = 0; $i < count($this->pouvoirs); $i++) {
            $resultat .= $this->pouvoirs[$i];
        }
        return parent::__toString() . " Pouvoir = " . $resultat;
    }

    public function ajouterPouvoir($pouvoir)
    {
        if ($this->pouvoirs == null) {
            $this->pouvoirs = array();
        }
        array_push($this->pouvoirs, $pouvoir);
    }

    /**
     * Get the value of pouvoirs
     */
    public function getPouvoirs()
    {
        if ($this->pouvoirs == null) {
            $this->pouvoirs = array();
        }
        return $this->pouvoirs;
    }

    /**
     * Set the value of pouvoirs
     *
     * @return  self
     */
    public function setPouvoirs($pouvoirs)
    {
        $this->pouvoirs = $pouvoirs;

        return $this;
    }
}
