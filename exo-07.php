<?php
    function genererCheckbox($tab){
            foreach ($tab as $key => $value){
                echo '<br><input type ="checkbox">'.$key.'<br>';
            }
    }
    $elements = array("Choix 1"=>"Non", "Choix 2"=>"Oui", "Choix 3"=>"Non");
    genererCheckbox($elements);

?>