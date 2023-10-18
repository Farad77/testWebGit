<?php

require_once("Pouvoir.php");

class GentilPouvoir extends Pouvoir {
    
    function _toString() {
    return "Gentil" . parent::_toString();
    }
}

?>