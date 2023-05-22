<?php
function afficherTableHTML($tab) {  
    ksort($tab); 
    echo "<table>";
        foreach ($tab as $key=>$value) {
            $link = "https://fr.wikipedia.org/wiki/$value";
            echo "<tr><td>".strtoupper($key)."</td><td>".$value."</td><td><a href= ".$link.' target="_blank">Lien</a></td></tr>';
        }    
    echo "</table>";
}


$pays = array("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");


afficherTableHTML($pays);
?>