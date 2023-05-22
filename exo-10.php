<?php
    require "exo-05.php";
    require "exo-09.php";

    $infos = array("Nom","Prenom","Adresse email","Ville","Sexe");
    $intitule = array( "Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

    echo "<form>";
    echo "<h1>Informations : </h1><br>";
    echo afficherInput($infos);

    echo "<br><h2>Choisir un intitulé : </h2><br>";
    echo afficherRadio($intitule);
    echo "</form>"

?>