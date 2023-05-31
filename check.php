<?php
if(isset($_POST['s']))
{
	$n=trim($_POST['n']);
	$p=trim($_POST['p']);
	if($n=='argus' && $p=='academy')
	{
	session_start();
	$_SESSION['a']=$n;
	$_SESSION['aid']=session_id();
		header("location:admin.php");
	}
	else 
	{
		//

		include"connection.php";
		$q="select * from vendor where email='".$n."' and password='".$p."'";
		$sq=mysqli_query($cn,$q);
		if($sq)
		{
			if(mysqli_fetch_array($sq)>0)
			{
				session_start();
				$_SESSION['vv']=$n;
				$_SESSION['vvid']=session_id();
					header("location:vvendor.php");
			}
			else
			{
				session_start();
				$_SESSION['wrong']="** id or password doesn't match"; 
				header("location:login.php");	
			}
		}
		else
		{
			echo'<br'.mysqli_error($cn);
		}
		//
	session_start();
	$_SESSION['wrong']="** id or password doesn't match"; 
	header("location:login.php");	
	}
}
else 
{
	header("location:login.php");
}

?>