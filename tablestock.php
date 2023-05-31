<?php 
// function to add connection page code 
include"connection.php";
$qs="create table stock 
(sid int(5) auto_increment primary key ,
name varchar(50) not null,
unit varchar(5) not null,
prate varchar(5) not null,
drate varchar(5) not null,
rrate varchar(5) not null,
batchno varchar(50) not null,
mfgdate date not null,
expdate date not null,
detail varchar(500) not null,
photo varchar(500) not null,
gst varchar(8) not null)";

$sqs=mysqli_query($cn,$qs);
if($sqs)
	{
		echo 'created';
	}
	else 
	{
		// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}

?>