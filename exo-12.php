<?php
    function aff_tableau($tab){
        foreach ($tab as $value){
            var_dump($value);
            echo "<br>";
        }
    }
    
    $tableauValeurs = array(true,"texte",10,25.369,array("valeur1","valeur2"));

    aff_tableau($tableauValeurs);
?>