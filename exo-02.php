<?php
function afficherTableHTML($tab) {  
    ksort($tab); 
    $result = "<table>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitale</th>
                        </tr>
                    </thead><tbody>";
        foreach ($tab as $pays=>$capitale) {
            $result .= "<tr><td>".mb_strtoupper($pays)."</td><td>".$capitale."</td></tr>";   //mb_strtoupper met en majuscules et prend en compte les accents
        }    
    $result .= "</tbody></table>";
    return $result;
}

$pays = [
    "France"=>"Paris",
    "Allemagne"=>"Berlin",
     "USA"=>"Washington", 
     "Italie"=>"Rome",
     "Pérou" => "Lima"
    ];


echo afficherTableHTML($pays);
?>