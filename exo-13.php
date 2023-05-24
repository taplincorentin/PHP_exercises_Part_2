<?php
    require ("Voiture.php");
    $v1 = new Voiture("Peugeot","408",5);
    $v2 = new Voiture("Citroen","C4",3);
 
    // affInfos($v1);
    $v1->affInfos();
    $v2->affInfos();
    $v1->demarrer();
    echo "<br>";
    $v1->accelerer(50); 
    $v2->demarrer();
    $v2->stopper();
    $v2->accelerer(20);
    echo "<br> vitesse de la Peugeot : " . $v1->get_vitesseActuelle(). "km/h";
    echo "<br> vitesse de la Citroen : ".$v2->get_vitesseActuelle(). "km/h";
?>