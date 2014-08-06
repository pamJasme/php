<?php

echo('Hello!\n');		#Sample Codes for 
ECHO("\nHi!");			//Lexical Structures
eChO("<br>Hi Hello!<br>");

class Person
	{
		public $name = '';
		function name ($newname = NULL)
		{
			if (!is_null($newname)) {
			$this->name = $newname;
			}
		return $this->name;
		}
	}

/**Next: Data Types**/
	$ints = '1094';
	$floats = '.56';
	$strs = "Strings";

	echo "<br>Sample Data Types<br> Integer = $ints<br> Floats=$floats<br> String=$strs<br><br>";
	echo "Given conditional statement: if (Integer < 0)<br>";
	if ($ints < 0)
	{
		echo "Boolean: False";
	}
	else
	{
		echo "Boolean: True";	
	}

	echo "<br><br>";
	#$php_tc[]=array();
	$php_tc[0] = "Pam";
	$php_tc[1] = "Kay";
	$php_tc[2] = "Geno";
	$php_tc[3] = "Tan";
	$php_tc[4] = "Romz";

	foreach ($php_tc as $index => $name)
	{
		echo "PHP Trainee {$index}: $name";
		echo "<br>";
	}

	
	$ed = new Person;
	$ed->name('Edison');
	echo "Hello, {$ed->name}\n";
	$tc = new Person;
	$tc->name('Crapper');
	echo "Look out below {$tc->name}\n";

	$foo = "bar";
	$$foo = "baz";
	echo $foo;

	/**$callback = function myCallbackFunction()
	{
		echo "callback achieved";
	}
	call_user_func($callback);**/

	


?>