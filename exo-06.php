<?php
    function alimenterListeDeroulante($tab){
        $res = "<form><select>";
        foreach ($tab as $civilite){
            $res .= "<option value = ".$civilite.">$civilite</option>";
        }
        $res .= "</select></form>";
        return $res;
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    
    echo alimenterListeDeroulante($elements);

?>