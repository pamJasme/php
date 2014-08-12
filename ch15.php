<?php
echo "<br><br><table border='0' width='100%' style='background: lightpink'>";
echo "<tr><td><center><b>REST Client</b></center></td></tr></table><br><Br>";

echo "<table border='0' width='100%' style='background: lightblue'>";
echo "<tr><td><b>RESPONSES</b></td></tr></table><br>";
echo "<b>json_encode()</b><br>";
$data = array(1, 2, "three");
$jsonData = json_encode($data);
echo '$data = array(1, 2, "three");'."<br>".'$jsonData = json_encode($data);'."<Br>Output:<br>".$jsonData."<br><br>";

echo "<b>json_decode()</b><br>";
$jsonData = "[1, 2, [3, 4], \"five\"]";
$data = json_decode($jsonData);
echo '$jsonData = "[1, 2, [3, 4], \"five\"]";'."<br>".'$data = json_decode($jsonData);'."<br>"."Output:<Br>";
print_r($data);
echo "<Br><br>";

echo "<br><br><table border='0' width='100%' style='background: lightpink'>";
echo "<tr><td><center><b>XML RPC</b></center></td></tr></table><br><Br>";

?>