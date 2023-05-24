<?php
    function validiteEmail($mail){
        if (filter_var($mail,FILTER_VALIDATE_EMAIL)){
            return "L'adresse ".$mail." est une adresse e-mail valide";
        }
        else{
            return "L'adresse ".$mail." est une adresse e-mail invalide";
        }
    }

    $mail1 = "elan@elan-formation.fr";
    $mail2 = "contact@elan";

    echo validiteEmail($mail1). "<br>". validiteEmail($mail2);
?>