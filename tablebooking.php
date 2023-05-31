<?php 
// function to add connection page code 
include"connection.php";
$q="create table booking 
(bid int(5) auto_increment primary key ,
vid int(5) not null,
sid int(5) not null,
quantity int(5) not null,
amount int(8) not null,
date date not null,
status varchar(50) default'pending' not null)";

$sq=mysqli_query($cn,$q);
if($sq)
	{
		echo 'created';
	}
	else 
	{
		// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}

?>