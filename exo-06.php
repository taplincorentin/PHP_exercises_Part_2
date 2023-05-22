<?php
    function alimenterListeDeroulante($tab){
        $res = "<form><select>";
        foreach ($tab as $value){
            $res .= "<option>$value</option>";
        }
        $res .= "</select></form>";
        return $res;
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    
    echo alimenterListeDeroulante($elements);

?>