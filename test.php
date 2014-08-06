<?php
$crap="So how";
$a=$b="1";
if ($a == $b) {
echo "Rhyme? And Reason?<br>";

}
//echo "Hello, world"; pdfksd
$creator[]=array();
$creator = array(
'Light bulb'=> "Edison",
'Rotary Engine' => "Wankel",
'Toilet' => "Crapper");
foreach ($creator as $invention => $inventor) {
Echo "{$inventor} created the {$invention}<br>";
}
$what = "Fred";
$where =& $what;
echo $what.$where."<br>";
unset ($where);
#echo $where;

function greet($name)
{
echo "Hello, {$name}\n";
}
greet("Janet");


?>