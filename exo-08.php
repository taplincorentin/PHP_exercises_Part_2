<?php
    function repeterImage ($url, $nb){
        for($x=0;$x<$nb;$x++){
            echo "<img src = '$url'>";
        }
    }

    $url = "http://my.mobirise.com/data/userpic/764.jpg";
    
    repeterImage ($url, 4);
?>