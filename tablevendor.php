<?php 
// function to add connection page code 
include"connection.php";
$qv="create table vendor 
(vid int(5) auto_increment primary key ,
name varchar(50) not null,
email varchar(50) not null unique,
password varchar(50) not null,
phone varchar(15) not null,
photo varchar(500) not null,
address varchar(500) not null)";

$sqv=mysqli_query($cn,$qv);
if($sqv)
	{
		echo 'created';
	}
	else 
	{
		// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}

?>