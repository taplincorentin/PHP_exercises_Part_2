<?php
    function alimenterListeDeroulante($tab){
        echo "<select>";
        foreach ($tab as $value){
            echo "<option>$value</option>";
        }
        echo "</select>";
    }
    
    $elements = array("Monsieur","Madame","Mademoiselle");
    
    alimenterListeDeroulante($elements);

?>