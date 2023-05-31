<?php 
// function to add connection page code 
include"connection.php";
$qe="create table enquiry 
(eid int(5) auto_increment primary key ,
name varchar(50) not null,
phone varchar(50) not null,
email varchar(50) not null,
message varchar(500) not null,
date date not null)";

$sqe=mysqli_query($cn,$qe);
if($sqe)
	{
		echo 'created';
	}
	else 
	{
		// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}

?>