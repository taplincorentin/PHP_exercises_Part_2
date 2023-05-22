<?php
function afficherTableHTML($tab) {  
    ksort($tab);
    $res = "";
    $res .= "<table><thead><tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                    <th>Lien wiki</th>
            </tr></thead><tbody>";
        foreach ($tab as $pays=>$capitale) {
            $link = "https://fr.wikipedia.org/wiki/$capitale";
            $res .= "<tr><td>".mb_strtoupper($pays)."</td><td>".$capitale."</td><td><a href= ".$link.' target="_blank">Lien</a></td></tr>';
        }    
    $res .= "</tbody></table>";
    return $res;
}


$data = array("France"=>"Paris","Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome");


echo afficherTableHTML($data);
?>