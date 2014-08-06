<html>
<head><title>Temperature Conversion</title></head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'GET') { ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
Fahrenheit temperature:
<input type="text" name="fahrenheit" /><br />
<input type="submit" value="Convert to Celsius!" />
</form>
<?php }
else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$fahrenheit = $_POST['fahrenheit'];
$celsius = ($fahrenheit - 32) * 5 / 9;
printf("%.2fF is %.2fC", $fahrenheit, $celsius);
echo "<br>Note to self: May ganito palang function :(";
}
else {
die("This script only works with GET and POST requests.");
} ?>
<form enctype="multipart/form-data"
action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="10240">
File name: <input name="toProcess" type="file" />
<input type="submit" value="Upload" />
</form>
<?php
if (is_uploaded_file($_FILES['toProcess']['tmp_name'])) {
echo "successfully uploaded";
}
?>
</body>
</html>
