<?php
    function afficherInput($tab){
        $res ="";
        foreach ($tab as $value){
            $res .= $value. '<br><input type ="text"><br>';
        }
        return $res;
    }    
    
    $nomsInput = array("Nom","Prénom","Ville");
    //echo afficherInput($nomsInput);
?>