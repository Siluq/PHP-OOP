<?php 

    //Alle classes worden toegevoegd aan index
    require_once('figuur.class.php');
    require_once('cilinder.class.php');
    require_once('vierkant.class.php');
    
    // Objecten worden gemaakt van opdracht
    $mijn_vierkant = new Vierkant(5);
    $mijn_vierkant->setOmschrijving("vierkant");
    $mijn_cilinder = new Cilinder(10, 3);
    $mijn_cilinder->setOmschrijving("Cilinder");  

    // Objecten worden op beeld weergegeven
    echo $mijn_vierkant->getOmschrijving();
    echo "<br>";
    echo $mijn_vierkant->berekenOppervlakte();
    echo "<br><br>";
    echo $mijn_cilinder->getOmschrijving();
    echo "<br>";
    echo $mijn_cilinder->berekenOppervlakte();


    // De 2 zelfgemaakte figuren
    $mijn_tweede_vierkant = new Vierkant(12);
    $mijn_tweede_cilinder = new Cilinder(18, 4);
    
    // Zelf gemaakte objecten worden op beeld weergegeven
    echo "<br><br><hr>De 2 objecten met zelf verzonnen afmetingen<hr>";
    echo $mijn_tweede_vierkant->berekenOppervlakte();
    echo "<br>";
    echo $mijn_tweede_cilinder->berekenOppervlakte();

?>
