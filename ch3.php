<?php

	//die("Plese comment Line 3 of ch3.php to view the entire code.");

	$length = strlen ("The thesis feel while doing this. Dark circles everywhere");
	print "String length is ".$length.".<br>";

	function strcat($left, $right)
	{
		return $left . $right;
	}

	$first = "This is a ";
	$second = " complete sentence!";
	echo strcat($first, $second);

	$a = 1 >> 2;
	echo "<br>".$a;

	$a = 3;
	
	function foo()
	{
		global $a;
	}

	$a += 2;
	foo();
	echo "<br>".$a;


	function counter()
	{
		static $count = 0;
		return $count++;
	}

	for ($i = 1; $i <= 5; $i++) {
		print "<BR>".counter();
	}

	function doubler(&$value)
	{
		$value = $value << 1; #In binary, 3 = 0011. Weird di ko gets.
	}
	$a = 3;
	doubler($a);
	echo "<br>".$a."<Br><br>";

$names = array("Fred", "Barney", "Wilma", "Betty");

function &findOne($n) {
	global $names;
	return $names[$n];
}
$person =& findOne(1);
$person = "Barnetta";
print $person;

echo "<br>Binary places<br>";
$bin[]=array();

	function bin(){

		for($i=1;$i<=10;$i++)
		{
			echo "2 raised to {$i} is";
			$sqr=pow(2, $i);
			echo" $sqr.<br>";
		}
	}

	bin();

?>