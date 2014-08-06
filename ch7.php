<?php
echo "Hard coded login information :)<br>";
$username=$_POST['username'];
$password=$_POST['password'];


	if($username == NULL|| $password==NULL)
	{
		die("Incomplete field. Return to the <a href='ch7.html'>login</a> page.");
	}

	if($username == "pammii" && $password == "oct162010")
	{
		echo "Welcome to Chapter 7!";
	}
	else
	{
		echo "Incorrect!";
	}
	echo "<br><br><br>";
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		
		echo "This form used POST method";
	}
	else 
	{
		echo "method=GET";
	}

	

	
?>