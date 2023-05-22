<?php
    function genererCheckbox($tab){
        $res ="<form>";
            foreach ($tab as $choix => $checked){
                $res .= "<br><input type ='checkbox' $checked>".$choix."<br>";
            }
        $res .= "</form>";
        return $res;
    }
    $elements = array("Choix 1"=>"", "Choix 2"=>"checked", "Choix 3"=>"");
    echo genererCheckbox($elements);

?>