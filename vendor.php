
<?php
$n=$ns=$e=$es=$pas=$psa=$p=$ps=$m=$ms=$a=$as="";
//check name 
function namecheck()
{
	$n=trim($_POST['n']);
	$nc='/^[a-zA-Z ]*$/';
	if(preg_match($nc,$n) && strlen($n)>0)
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

//check email 
function emailcheck()
{
	$e=trim($_POST['e']);
	$ec='/^[a-zA-Z0-9._]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(preg_match($ec,$e) )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check password
function passwordcheck()
{	
$pas=trim($_POST['pas']);
	if(strlen($pas)>=5)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}
//check phone
function phonecheck()
{
	$p=trim($_POST['p']);
	$pc='/^[0-9]{10,10}$/';
	if(preg_match($pc,$p) && $p[0]>=6 )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
// photo check 
function photocheck()
{
	if($_FILES['m']['name']!='')
	{
		$fn=$_FILES['m']['name'];
		$ln=strlen($fn);
		$dot=strrpos($fn,".");
		$ext=substr($fn,$dot+1,$ln);
		$col=array('jpg','png','jpeg','bmp','jfif');
		if(in_array($ext,$col))
		{
			return 'y';
		}
		else 
		{
			return 'n';
		}
	}
}


//address check 
function addresscheck()
{	
$a=trim($_POST['a']);
	if(strlen($a)>0)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}




if(isset($_POST['s']))
{
	// name 
	if(namecheck()=='y')
	{
		$n=trim($_POST['n']);
	}
	else 
	{
		$ns="*** check name ";
	}
	
	// email
	if(emailcheck()=='y')
	{
		$e=trim($_POST['e']);
	}
	else 
	{
		$es="*** check email ";
	}
	//password check 
	if(passwordcheck()=='y')
	{
		$pas=trim($_POST['pas']);
	}
	else 
	{
		$psa="*** Enter valid password";
	}	
	
	// phone
	if(phonecheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** check phone ";
	}
	//photo check
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
	
	//address check 
	if(addresscheck()=='y')
	{
		$a=trim($_POST['a']);
	}
	else 
	{
		$as="** check address";
	}	
	
	// all check 
	if(namecheck()=='y' && emailcheck()=='y'&& passwordcheck()=='y' && phonecheck()=='y' && addresscheck()=='y' && photocheck()=='y')
	{
		//$r="name ".$n." email ".$e."password".$pas. "phone ".$p." address ".$a;
		//echo $r;
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='load/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
		//echo '<br> <img src="'.$fa.'" width="100" height="100">';

		//my sql start
		include"connection.php";
		$qv="insert into vendor 
			(name ,email ,password ,phone ,photo , address )
			values('".$n."','".$e."','".$pas."','".$p."','".$fa."','".$a."')";

		$sqv=mysqli_query($cn,$qv);
	if($sqv)
		{
			 $n=$ns=$e=$es=$pas=$psa=$p=$ps=$m=$ms=$a=$as=""; // to clear form after sucess submit
			echo '<script> alert("THANK YOU")</script>';
		}
	else 
		{
			// function to show sql query error 
			echo'<br>'.mysqli_error($cn);
		}

// MY SQL END 
	}
	else 
	{
		echo '<script>alert("CHECK");</script>';
	}
}
?>
<form action="" method="POST" enctype="multipart/form-data">
NAME : <input type="text" name="n" value="<?php echo $n;?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
EMAIL : <input type="text" name="e" value="<?php echo $e;?>"> 
<span style="color:red"><?php echo $es;?></span>
<br><br>
PASSWORD : <input type="text" name="pas" maxlength="10" value="<?php echo $pas;?>"> 
<span style="color:red"><?php echo $psa;?></span>
<br><br>
PHONE : <input type="text" name="p" maxlength="10" value="<?php echo $p;?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
PHOTO : <input type="file" name="m">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
ADDRESS : <textarea name="a"><?php echo $a;?></textarea>
<span style="color:red"><?php echo $as;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>