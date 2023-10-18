<?php

require_once("Pouvoir.php");

class MechantPouvoir extends Pouvoir
{
    function __toString()
    {
        return " Mechant " . parent::__toString();
    }
}
