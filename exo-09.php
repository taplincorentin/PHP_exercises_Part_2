<?php
    function afficherRadio($tab){
        foreach ($tab as $key){
            echo '<br><input type ="radio">'.$key.'<br>';
        }
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    afficherRadio($elements);
?>