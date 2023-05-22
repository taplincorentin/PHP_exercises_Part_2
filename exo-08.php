<?php
    function repeterImage ($url, $nb){
        $res ="";
        for($x=0;$x<$nb;$x++){
            $res .=  "<img src = '$url'>";
        }
        return $res;
    }

    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    
    echo repeterImage ($url, 4);
?>