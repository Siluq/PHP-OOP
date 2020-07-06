<?php

    /**
     * class Cilinder extends Figuur
     * class Cilinder is an child class of the class Figuur
     */
    class Cilinder extends Figuur {

         /**
         * public construct method
         * 
         * this function will execute the construct method in the parrent
         * with the given values
         * 
         * @return void
         */
        public function __construct($Ih, $Ir) {
            parent::__construct($Ih, $Ir);
        }

        /**
         * public function getH
         * 
         * this will give the value of $figuur->x
         * 
         * @return int $figuur->x
         */
        public function getH() {
            return $this->x;
        }

        /**
         * public function getR
         * 
         * this will give the value of $figuur->y
         * 
         * @return int $figuur->y
         */
        public function getR() {
            return $this->y;
        }

        /**
         *  public function berekenOppervlakte()
         * this function will calculate the surface of the object
         * 
         * @var int $opp_grondvlak
         * @var int $opp_mantel
         * @var int $opp_totaal
         * 
         * @return string
         */
        public function berekenOppervlakte() {
            $opp_grondvlak = Figuur::$PI * $this->y * $this->y;
            $opp_mantel = 2 * Figuur::$PI * $this->y * $this->x;
            $opp_totaal = $opp_grondvlak + $opp_grondvlak + $opp_mantel;

            return "De uitgerekende oppervlakte van de cilinder is: " . $opp_totaal;
        }

    }

?>
