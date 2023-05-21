<?php
function afficherTableHTML($tab) {  
    ksort($tab); 
    echo "<table>";
        foreach ($tab as $key=>$value) {
            echo "<tr><td>".strtoupper($key)."</td><td>".$value."</td></tr>";
        }    
    echo "</table>";
}

$pays = array("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");


afficherTableHTML($pays);
?>