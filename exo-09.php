<?php
    function afficherRadio($tab){
        $res = "<form>";
        foreach ($tab as $civilite){
            $res .= '<br><input type ="radio" name="civilite">'.$civilite.'<br>';    // name="" important pour les check box
        }
        $res .= "</form>";
        return $res;
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    echo afficherRadio($elements);
?>