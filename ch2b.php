<html>
<input type="text" name="first_name" value="<?= "Dawn"; ?>">
</html>
<br><br><br>
<?php
#For null value sample code
$var1 = NULL;
$var2 = "";
$var3 = " ";

if($var1 == NULL && $var2 == NULL && $var3 != NULL)
{
	echo "Variables 1 and 2 are NULL, Variable 3 isn't.";
}
else if($var3 == NULL)
{
	echo "Variable 3 is not equal to null";
}
else
{
	echo "No they're not.";
}

$foo = "bar";
$$foo = "baz";
echo "<br>{$bar}";

$bigLongVariableName = "PHP";
$short =& $bigLongVariableName;
$bigLongVariableName .= " rocks!";
print "<br>\$short is $short\n<br>";
print "Long is $bigLongVariableName\n";


/*function updateCounter($counter)
{
	$counter++;
}
$counter = 10;
updateCounter($counter);
echo "<br>".$counter;

function updateCounter_b()
{
global $counter;
$counter++;
}
$counter = 10;
updateCounter_b();
echo "<br>".$counter;*/
function updateCounter()
{
	static $counter = 0;
	$counter++;
	echo "<br>Static counter is now {$counter}";
	$GLOBALS['counter']++;
}
$counter = 10;
updateCounter();
updateCounter();
updateCounter();
echo "<br>Global counter is {$counter}\n";

function test() {
    $foo = "local variable";

    echo "<br>$foo in global scope: " . $GLOBALS['foo'] . "\n";
    echo '<br>$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

function greet($namea,$nameb)
{
	echo "<br>Hello, {$namea}<br>";
	echo "<br>Hello, {$nameb}<br>";
}
greet("Janet","Pam");

$a = "5.90";
$a = (int) $a;
echo $a."<br>";

$i=1;
while($i<=10)
{
	echo "Pamela".$i."<br>";
	$i++;
}

?>