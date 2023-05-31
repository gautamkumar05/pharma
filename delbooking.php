<?php 
if(isset($_GET['bid']))
{
	$bid =$_GET['bid'];
	include"connection.php";
	$q="delete from booking where bid='".$bid."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:dispbookingtable.php");
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
	header("location:dispbookingtable.php");
}
?>