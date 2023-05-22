<?php
    function afficherInput($tab){
        $res ="<form>";
        foreach ($tab as $value){
            $res .= $value. '<br><input type ="text"><br>';
        }
        $res .= "</form>";
        return $res;
    }    
    
    $nomsInput = array("Nom","Prénom","Ville");
    //echo afficherInput($nomsInput);
?>