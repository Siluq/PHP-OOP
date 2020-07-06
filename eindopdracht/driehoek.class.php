<?php

    /**
     * class Driehoek extends Figuur
     * class Driehoek is an child class of the class Figuur
     */
   class Driehoek extends Figuur {

    /**
     * public construct method
     * 
     * this function will execute the construct method in the parrent
     * with the given values
     * 
     * @return void
     */
    public function __construct($Ib, $Ih) {
        parent::__construct($Ib, $Ih);
        
    }

    /**
     * public function getB
     * 
     * this will give the value of $figuur->b
     * 
     * @return int $figuur->b
     */
    public function getB() {
        return $this->x;
    }

    /**
     * public function getH
     * 
     * this will give the value of $figuur->h
     * 
     * @return int $figuur->h
     */
    public function getH() {
        return $this->y;
    }

    /**
     *  public function berekenOppervlakte()
     * this function will calculate the surface of the object
     * 
     * @var int $opp_grondvlak
     * @var int $opp_totaal
     * 
     * @return string
     */
    public function berekenOppervlakte() {
        $opp_grondvlak = $this->x * $this->y;
        $opp_totaal = $opp_grondvlak / 2;
        return "De uitgerekende oppervlakte van het driehoek is: " . $opp_totaal;
    }

   }

?>
