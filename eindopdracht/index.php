<?php 

    //require all external files once
    require_once('figuur.class.php');
    require_once('cilinder.class.php');
    require_once('vierkant.class.php');
    
    // Objects from the exersice
    $mijn_cilinder = new Cilinder(10, 3);
    $mijn_cilinder->setOmschrijving("Cilinder");
    $mijn_vierkant = new Vierkant(5);
    $mijn_vierkant->setOmschrijving("vierkant");
    
    // Made up objects
    $mijn_tweede_cilinder = new Cilinder(18, 4);
    $mijn_tweede_vierkant = new Vierkant(12);

    // echo objects
    echo $mijn_cilinder->getOmschrijving();
    echo "<br>";
    echo $mijn_cilinder->berekenOppervlakte();
    echo "<br><br>";
    echo $mijn_vierkant->getOmschrijving();
    echo "<br>";
    echo $mijn_vierkant->berekenOppervlakte();
    echo "<br><br><hr>De 2 objecten met zelf verzonnen afmetingen<hr>";
    echo $mijn_tweede_cilinder->berekenOppervlakte();
    echo "<br>";
    echo $mijn_tweede_vierkant->berekenOppervlakte();

?>
