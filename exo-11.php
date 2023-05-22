<?php
    $date = "2018-02-23";
    $datef = DateTime::createFromFormat("Y-m-d",$date);

    echo $datef->l;
?>