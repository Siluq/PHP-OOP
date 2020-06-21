<?php

abstract class Figuur {
    public static $PI = 3.1415;
    protected $x;
    protected $y;
    private $omschrijving;

    public function __construct($Ix, $Iy) {
        $this->setX($Ix);
        $this->setY($Iy);
    }

    public function setX($Ix) {
        if (!is_int($Ix)) {
            die("dat is geen getal, daarmee kun je niet rekenen");
        }
        $this->x = $Ix;
    }

    public function setY($Iy) {
        if (!is_int($Iy)) {
            die("dat is geen getal, daarmee kun je niet rekenen");
        }
        $this->y = $Iy;
    }

    public function setOmschrijving($Iomschrijving) {

    }
    public function getOmschrijving($Iomschrijving) : string {

        return "De omschrijving is" . $een_string;
    }

    public abstract function berekenOppervlakte();
}

?>