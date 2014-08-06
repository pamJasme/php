<?php

$string = "Fred,Flintstone,35,Wilma";
$token = strtok($string, ",");
while ($token !== false) {
echo("{$token}<br />");
$token = strtok(",");
}

echo "<Br><br>";
echo preg_match("/dog$|cat/", "A goater named Andy is once a doggy");
echo "<Br><br>";

echo preg_match("/ca{5}t/", "caaaaat");
echo "<Br><br>";

echo preg_match("/Documents\/PHP\/git\/php/", "Git folder path: Documents/PHP/git/php");
echo "<Br><br>";

echo preg_match("{Documents/PHP/git/php}", "Git folder path: Documents/PHP/git/php");
echo "<Br><br>";

//echo preg_match("[@[:upper:][:lower:]]", "My name is Pamela Dhoreen Guevarra Jasme", $upper);
//echo "<Br><br>"; not working

//echo preg_match("/[= 1 =]/", "1231456");
//echo "<Br><br>"; not working

//echo preg_match("/[[:<:]]c/", "lala caaaaat");
echo "<Br><br>";

preg_match("/(<.*?>)/", "do <b>not</b> press the button", $match);
echo "$match[1]<Br><br>";

$string = "Fred\tFlintstone (35)";
$n = sscanf($string, "%s%s (%d)", $first, $last, $age);
echo "Matched {$n} fields: {$first} {$last} is {$age} years old<br><br>";

$record = "Fred,Flintstone,35,Wilma";
$pos = strrpos($record, ","); // find last comma
echo("The last comma in the record is at position {$pos}<br><br>");

echo preg_match("/gun/", "the Burgundy exploded<br>");
echo preg_match("/(<.*>)/", "do <b>not</b> press the button<br>", $match);
echo preg_match("/(?:ello)(.*)/", "jello biafra qwerty", $match);
echo $match[1];
$string = <<< END
13 dogs
12 rabbits
8 cows
1 goat
END;

echo preg_match_all('/(\d+) (\S+)/', $string, $m1, PREG_PATTERN_ORDER);
preg_match_all ('/(\d+) (\S+)/', $string, $m2, PREG_SET_ORDER);

$contractions = array("/don't/i", "/won't/i", "/can't/i");
$expansions = array('do not', 'will not', 'can not');
$string = "Please don't yell—I can't jump while you won't speak";
$longer = preg_replace($contractions, $expansions, $string);
echo "<br><br>{$longer}";

$ops = preg_split('{[+*/−]}', '3+5*9/2');
echo "<br><Br>{$ops[0]}";

echo "<br><br>";


?>