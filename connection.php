<?php
$server="localhost"; // same for all 
$user="root"; // same for all 
$password="gautam"; // mysql password 
$database="bharat"; // mysql password 

// function to connect to mysql database 
$cn=mysqli_connect($server,$user,$password,$database);
if(!$cn)
{
	// function to check connection error 
	echo '<br>'.mysqli_connect_error();
	echo '<br>'.mysqli_connect_errno();
}

?>