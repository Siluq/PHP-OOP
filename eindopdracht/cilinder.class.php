<?php

class Cilinder extends Figuur {

    public function __construct($Ih, $Ir) {
        parent::__construct($Ih, $Ir);
    }

    public function getH() {
        return $this->x;
    }

    public function getR() {
        return $this->y;
    }

    public function berekenOppervlakte() {
        return 99999;
    }
}

?>