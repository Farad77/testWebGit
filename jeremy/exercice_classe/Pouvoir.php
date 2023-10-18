<?php

class Pouvoir {

    private $nom;
    private $puissance;

    function _toString () {
        echo $this->nom . "($this->puissance)";
    }

}

?>