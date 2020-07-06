<?php
    
    /**
     * This is an abstract class named Figuur
     * 
     * @var int public static $PI
     * @var int protected $x
     * @var int protected $y
     * @var string private $omschrijving
     * 
     * @return void
     */
    abstract class Figuur {
        public static $PI = 3.1415;
        protected $x;
        protected $y;
        private $omschrijving;
    
        /**
         * this is a public construct method
         * 
         * in the cunstruct method funcion setX & funcion setY & funcion setB & funcion setH
         * will be executed
         * 
         * @var int $Ix
         * @var int $Iy
         * 
         * @return void
         */
        public function __construct($Ix, $Iy) {
            $this->setX($Ix);
            $this->setY($Iy);
        }

        /**
         * public function setX
         * 
         * this will set the value of $figuur->x
         * id the given value is not equal to a int die()
         * 
         * @return void
         */
        public function setX($Ix) {
            if(!is_int($Ix)) {
                die("Not a Number");
            }
            $this->x = $Ix;
        }

        /**
         * public function setY
         * 
         * this will set the value of $figuur->y
         * id the given value is not equal to a int die()
         * 
         * @return void
         */
        public function setY($Iy) {
            if(!is_int($Iy)) {
                die("Not a Number");
            }
            $this->y = $Iy;
        }

        /**
         * public function setOmschrijving()
         * 
         * this function will set the name of figuur
         * 
         * @var string $figuur->omschrijving
         * 
         * @return void
         */
        public function setOmschrijving($Iomschrijving) {
            $this->omschrijving = $Iomschrijving;
        }

        /**
         * public function getOmschrijving()
         * 
         * this function will get the name of figuur
         * 
         * @var string $figuur->omschrijving
         * 
         * @return string
         */
        public function getOmschrijving() : string {
            return "Dit figuur is een: " . $this->omschrijving;
        }

        /**
         * public abstract function berekenOppervlakte()
         * this function needs to be executed with every object
         * 
         * @return string
         */
        public abstract function berekenOppervlakte();
    }

?>
