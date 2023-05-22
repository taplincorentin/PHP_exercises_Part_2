<?php

    function convertirMajRouge($string, $color) {
        $stringMaj = strtoupper($string);
        return "<span style='color:".$color."'>" .$stringMaj. "</span>";
}

    $texte = "Mon texte en parametre";
  
    echo convertirMajRouge($texte, "red");
    echo convertirMajRouge($texte, "#AAD231");

?>