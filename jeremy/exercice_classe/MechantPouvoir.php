<?php

require_once("Pouvoir.php");

class MechantPouvoir extends Pouvoir {

    function _toString() {
    return "Mechant" . parent::_toString();
    }
}

?>