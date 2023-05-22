<?php
    function afficherInput($tab){
        $res ="";
        foreach ($tab as $value){
            $res .= $value. '<br><input type ="text"><br>';
        }
        return $res;
    }   

    function afficherRadio($tab){
        $res = "";
        foreach ($tab as $intitule){
            $res .= '<br><input type ="radio" name="intitulé">'.$intitule.'<br>';   
        }
        return $res;
    }


    function createForm($questions,$description){
        $res ="<form><h1>Informations : </h1><br>";
        $res .= afficherInput($questions);
        $res .= "<br><h2>Choisir un intitulé : </h2>";
        $res .= afficherRadio($description);
        $res .= '<br><br><input type="submit" value="SUBMIT"></form>';
        return $res;
    }

    $infos = array("Nom","Prenom","Adresse email","Ville","Sexe");
    $intitule = array( "Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");
    
    echo createForm($infos, $intitule);



?>