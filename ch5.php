<?php

$scores = array(5, 10);
$padded = array_pad($scores, 5, 0);

for($i=0;$i<5;$i++)
{
	echo $padded[$i];
	echo "<br>"	;
}

$row0 = array('Pam', 'Jasme', 17);
$row1 = array('Nicki', 'Minaj', 65);
$row2 = array('Cher', 'Lloyd', 11);
$multi = array($row0, $row1, $row2);
echo "<br>";
for($a=0;$a<3;$a++)
{
	if(array_key_exists(0, $row0))
	{
		print("Yeah, exists.");
	}
	else
	{
		print("Nah..");
	}
	echo "<br>";
	for($b=0;$b<3;$b++)
	{
		//echo "The value of row $a column $b is {$multi[$a][$b]}<br>";
		//list ($fname, $lname, $age) = $multi[$a];
		//echo "First name {$fname}, Last name {$lname}, age {$age}<br><br>";
		//$ch=array_chunk($multi, 2);
		//print_r($ch);
		//$keys=array_keys($multi);
		//echo "{$keys[$b]}<br>";
	}
	//echo "<br>";
}
echo "Natuwa ako dito<br>";
$a = array(0, NULL, '');
function tf($v)
{
return $v ? 'T' : 'F';
}
for ($i=0; $i < 4; $i++) {
printf("%d: %s %s\n", $i, tf(isset($a[$i])), tf(array_key_exists($i, $a)));
echo "<br>";
}

$subjects = array("physics", "chem", "math", "bio", "cs", "drama", "classics");
$new = array("law", "business", "IS");
array_splice($subjects, 4, 3, $new);
for ($i=0; $i < 7; $i++) { 
	//echo "Array SUBJECT: {$subjects[$i]}<br>Array NEW: {$new[$i]}<br>";
}
/*$shape = "round";
$array = array('cover' => "bird", 'shape' => "rectangular");
extract($array, EXTR_PREFIX_ALL, "book"); //book serves as the prefix of the keys. naks.
echo "Cover: {$book_cover}, Book Shape: {$book_shape}, Shape: {$shape}";*/
$color = "indigo";
$shape = "curvy";
$floppy = "none";
$a = compact("color", "shape", "floppy");
print_r($a);
#$names = array("color", "shape", "floppy");
#$a = compact($names);
function printRow($value, $key, $color)
{
echo "<tr>\n<td bgcolor=\"{$color}\">{$value}</td>";
echo "<td bgcolor=\"{$color}\">{$key}</td>\n</tr>\n";
}
$person = array('name' => "Fred", 'age' => 35, 'wife' => "Wilma");
echo "<table border=\"1\">";
array_walk($person, "printRow", "lightpink"); //parang nareturn.
echo "</table><br>";

/*$callback = function addItUp($runningTotal, $currentValue)
{
$runningTotal += $currentValue * $currentValue;
return $runningTotal;
};
$numbers = array(2, 3, 5, 7);
$total = array_reduce($numbers, $callback);
echo $total;*/





?>