<?php
    function afficherRadio($tab){
        $res = "";
        foreach ($tab as $key){
            $res .= '<br><input type ="radio">'.$key.'<br>';
        }
        return $res;
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    //echo afficherRadio($elements);
?>