<?php 
if(isset($_GET['eid']))
{
	$eid =$_GET['eid'];
	include"connection.php";
	$q="delete from enquiry where eid='".$eid."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:dispenquirytable.php");
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
	header("location:dispenquirytable.php");
}
?>