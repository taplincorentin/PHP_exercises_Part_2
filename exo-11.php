<?php
  function formaterDateFr($date){
    $dateF = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE);
    $dateF->setPattern('EEEE dd MMMM YYYY');
    $res = $dateF->format(new DateTime($date));
    return $res;
  }

  $date = "2018-02-23";
  echo formaterDateFr($date);
    // IntlDateFormatter 

?>