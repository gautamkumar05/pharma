<?php 
if(isset($_GET['vid']))
{
	$vid =$_GET['vid'];
	include"connection.php";
	$q="delete from vendor where vid='".$vid."'";
	$sq=mysqli_query($cn,$q);
	if($sq)
	{
		header("location:dispvendortable.php");
	}
	else 
	{
		echo'<br>'.mysqli_error($cn);
	}
	
}
else 
{
	header("location:dispvendortable.php");
}
?>