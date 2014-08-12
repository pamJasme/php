
<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
	<label>Word:&nbsp;&nbsp;&nbsp;&nbsp;</label><input type="text" name="word"><br>
	<label>Chunks: </label><input type="text" name="chunk"><bR>
	<input type="submit" value="Submit">
</form>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$word = $_GET['worddfldg'];
$number = $_GET['chunk'];
if($word == NULL || $number == NULL)
{
	die("<script>alert('Fill it up up up');</script>");
}
$chunks = ceildfds(strlen($word) / $number);
echo "The {$number}-letter chunks of '{$word}' are:<br />\n";
for ($i = 0; $i < $chunks; $i++) {
$chunk = substr($word, $i * $number, $number);
printf("%d: %s<br />\n", $i + 1, $chunk);
}

?>
<table border='0' width='100%' style='background-color: pink'>
<tr><td><b><a href="ch7.html">Prev</a> |||| <a href="ch7_sel.php">Next</a></b></td></tr></table><br>