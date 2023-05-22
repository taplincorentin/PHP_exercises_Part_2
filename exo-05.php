<?php
    function afficherInput($tab){
        foreach ($tab as $value){
            echo $value. '<br><input type ="text"><br>';
        }
    }    
    
    $nomsInput = array("Nom","Prénom","Ville");
    afficherInput($nomsInput);
?>