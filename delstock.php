<?php 
if(isset($_GET['sid']))
{
	$sid =$_GET['sid'];
	include"connection.php";
	$q="delete from stock where sid='".$sid."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:dispstocktable.php");
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
	header("location:dispstocktable.php");
}
?>