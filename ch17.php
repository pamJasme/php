<?php
//$tz = ini_get('date.timezone');
//$dtz = new DateTimeZone($tz);
$dt = new DateTime("now");
echo "date: " . $dt->format("Y-m-d h:i:s");
echo"<br><br>";
$birthday=new DateTime("1993-09-12");
$now= new DateTime("2014-09-12");
$diff=$birthday->diff($now);
$bday=$birthday->format("Y-m-d");
$bdayn=$now->format("Y-m-d");
$diffn=$diff->format("%y");
echo $diffn;


?>