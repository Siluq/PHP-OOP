<?php

    /**
     * class Vierkant extends Figuur
     * class Vierkant si an child class of the class Figuur
     */
   class Vierkant extends Figuur {

    /**
     * public construct method
     * 
     * this function will execute the construct method in the parrent
     * with the given values
     * 
     * @return void
     */
    public function __construct($Ix) {
        parent::__construct($Ix, 0);
        
    }

    /**
     * public function getX
     * 
     * this will give the value of $figuur->x
     * 
     * @return int $figuur->x
     */
    public function getX() {
        return $this->x;
    }

    /**
     *  public function berekenOppervlakte()
     * this function will calculate the surface of the object
     * 
     * @var int $opp_totaal
     * 
     * @return string
     */
    public function berekenOppervlakte() {
        $opp_totaal = $this->x * $this->x;
        return "De uitgerekende oppervlakte van het vierkant is: " . $opp_totaal;
    }

   }

?>
