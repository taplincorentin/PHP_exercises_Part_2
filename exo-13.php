<?php
    require ("Voiture.php");
    $v1 = new Voiture("Peugeot","408",5);
    $v2 = new Voiture("Citroen","C4",3);
 
    // affInfos($v1); pas de cette façon que l'on utilise une fonction en POO
    $v1->affInfos();
    $v2->affInfos();
    $v1->demarrer();
    echo "<br>";
    $v1->accelerer(50); 
    $v2->demarrer();
    $v2->stopper();
    $v2->accelerer(20);
    $v1->affVitesse();
    $v2->affVitesse();
    
?>