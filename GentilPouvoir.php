<?php
require_once("Pouvoir.php");

class GentilPouvoir extends Pouvoir {
    
    function __toString()
    {
        return "Gentil ".parent::__toString();
    }
}


?>