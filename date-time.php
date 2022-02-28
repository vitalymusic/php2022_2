<?php
    return "ups";
//$time1 = time(); //sec from 1970/1/01
// $date = date_create();
// $time3 = date_timezone_set($date,timezone_open('Europe/Riga'));
 

date_default_timezone_set('Europe/Riga');

$time3 = time();
$time2 = mktime(0,0,0,1,31,2020); 
$nextweek = $time3+(3600*24*7);
//echo $time2;


    $format = "d m Y H:i:s";
    echo "Сегодня: " .date("H",$nextweek) . " часов и ". date("i",$nextweek) . " минут!";



?>