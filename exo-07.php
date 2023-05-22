<?php
    function genererCheckbox($tab){
        $res ="";
            foreach ($tab as $key => $value){
                $res .= '<br><input type ="checkbox">'.$key.'<br>';
            }
        return $res;
    }
    $elements = array("Choix 1"=>"Non", "Choix 2"=>"Oui", "Choix 3"=>"Non");
    echo genererCheckbox($elements);

?>