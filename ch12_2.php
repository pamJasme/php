<?php
$username=$_POST['uname'];
$password=$_POST['pword'];
$color=$_POST['color'];

if($username && $password)
{
	echo "hello";
}

switch($color)
{
 case 'red':
 {
 	echo "Fierce";
 	break;
 }
 case 'green':
 {
 	echo "Earthy";
 	break;
 }
 case 'blue':
 {
 	echo "sad";
 	break;
 }
 default:
 {
 	echo "Wrong";
 	break;
 }
}
?>