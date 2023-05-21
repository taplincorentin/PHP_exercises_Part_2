<?php

    function convertirMajRouge($string) {
        $stringMaj = strtoupper($string);
        echo '<span style="color:red;">' .$stringMaj. '</span>';
}

    $texte = "Mon texte en parametre";
  
    convertirMajRouge($texte);

?>