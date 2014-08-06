<?php

//Variable Interpolation

$name="Pam";
$gender="Male haha!";
echo "User info<br>Name: $name<br>Gender: {$gender}\n";

echo "<br>This is a Double Quoted statement, it accepts escape sequence\n<br>"; #escape sequence is not working.
echo 'This is a Single Quoted statement,  no escape sequence accepted\n<br><br>'; #escape sequence is not working.

print "Single Quoted example:<bR>";
print 'It\'s 4:10P.M, use \\ to display \'.<br>';
print "Double Quoted example:<bR>";
print "It's 4:10P.M, no need to use \\ to display '.";
echo "<br><br>";
$advertise = <<< haha
Example of a Heredoc function: <br>
Watsons Mini Wet Wipes Sweet Scent <br>
Made with a soft cotton fabric and are<br>
Gentle to your skin <br><br>
haha;
echo $advertise;

echo "Printing Strings :)";
print "<br>$name $gender<br>";
printf('This is not an integer %.2f!!<br>', 24.56905) ;
printf('I am %.2f%% complete.<br><br>', 15.453) ;
//print_r(expression)

$a = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
print_r($a)."<br><br>";

$string = htmlentities("Einstürzende Neubauten&<br><br>");
echo $string;

echo "<br><br>";
$known = "Hi";
$query = "High";
if (soundex($known) == soundex($query)) {
print "soundex: {$known} sounds like {$query}<br>";
}
else {
print "soundex: {$known} doesn't sound like {$query}<br>";
}
if (metaphone($known) == metaphone($query)) {
print "metaphone: {$known} sounds like {$query}<br>";
}
else {
print "metaphone: {$known} doesn't sound like {$query}<br>";
}

$string1 = "Rasmus Lerdorf";
$string2 = "Razmus Lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("<br>They have %d chars in common (%.2f%%).<bR><br>", $common, $percent);

$sketch = <<< EndOfSketch
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
and spam; spam egg spam spam bacon and spam; spam sausage spam spam
bacon spam tomato and spammer
EndOfSketch;
$count = substr_count($sketch, "spam");
print("The word spam occurs {$count} times.<br><br>");

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 10);
echo $farewell."<br><br>";

echo str_repeat("pam", 5)."<br>";
$string = str_pad('Fred Flintstone', 30, '. ');
echo "{$string}35<br><br>";

echo '['.str_pad('Fred Flintstone', 100, ' ', STR_PAD_LEFT)."]<br>";
echo '['.str_pad('Fred Flintstone', 100, ' ', STR_PAD_BOTH)."]<br><br>";

echo "***End of Chapter 4 exercises Part 1"
;
?>