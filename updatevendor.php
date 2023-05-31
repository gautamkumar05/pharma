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
	$pos=strrpos($fn,'.');
	$cut=substr($fn,$pos+1,$ln);
		$ext=array('jpg','png','jfif','bmp','JPG','jpeg','webp');
		if(in_array($cut,$ext))
		{
			return 'y';
		}
		else 
		{
			return 'n';
		}
	}
	else 
	{
		return 'yy';
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
	if(namecheck()=='y' && emailcheck()=='y'&& passwordcheck()=='y' && phonecheck()=='y' && addresscheck()=='y')
	{
	//$r="name ".$n." email ".$e."password".$pas. "phone ".$p." address ".$a;
	// 	echo $r;
	$vid=$_POST['vid'];
include"connection.php";

		if(photocheck()=='y')
		{
            $fn=$_FILES['m']['name'];
            $ta=$_FILES['m']['tmp_name'];
            $fa='load/'.uniqid().$fn;
            move_uploaded_file($ta,$fa);
	
	$q="update vendor
    set name='".$n."' ,email='".$e."' ,password='".$pas."' ,phone='".$p."' , address='".$a."', photo='".$fa."'
where vid='".$vid."'";
	
		
		}
		else if(photocheck()=='yy')
		{
            $q="update vendor
            set name='".$n."' ,email='".$e."' ,password='".$pas."' ,phone='".$p."' , address='".$a."' where vid='".$vid."'";
		}
	
	// 	echo '<img src="'.$fa.'" width="100" height="100">';
	//

	/// khela start insert 
		
$sq=mysqli_query($cn,$q);
if($sq)
{
    $n=$ns=$e=$es=$pas=$psa=$p=$ps=$m=$ms=$a=$as="";
echo '<script>alert("updated");</script>';
}
else 
{
echo '<br>'.mysqli_error($cn);
}


///		khela end 

}	

else {
echo '<script>alert("check");</script>';

}
}
?>


<?php
if(isset($_GET['vid']))
{
$vid=$_GET['vid'];
include"connection.php";

$q="select * from vendor where vid='".$vid."'";

$sq=mysqli_query($cn,$q);
if($sq)
{
	// check if any value found or not 
		if(mysqli_fetch_array($sq)>0)
		{
		$sq=mysqli_query($cn,$q);
		
			while($r=mysqli_fetch_array($sq))
			{
			//
			?>
			
			
            <form action="" method="POST" enctype="multipart/form-data">
            Vendor id <input type="text" name="vid" value="<?php echo $r['vid']; ?>" readonly> 
<br><br>
NAME : <input type="text" name="n" value="<?php echo $r['name'];?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
EMAIL : <input type="text" name="e" value="<?php echo $r['email'];?>" readonly> 
<span style="color:red"><?php echo $es;?></span>
<br><br>
PASSWORD : <input type="text" name="pas" maxlength="100" value="<?php echo $r['password'];?>"> 
<span style="color:red"><?php echo $psa;?></span>
<br><br>
PHONE : <input type="text" name="p" maxlength="10" value="<?php echo $r['phone'];?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
PHOTO : <input type="file" name="m">
<img src="<?php echo $r['photo'] ?>"width="50" height="50">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
ADDRESS : <textarea name="a"><?php echo $r['address'];?></textarea>
<span style="color:red"><?php echo $as;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>
			
			<?php 
				
			}
			
			
		}
		else 
		{
			echo '<br> no record found ';
		}
}
else 
{
	echo '<br>'.mysqli_error($cn);
}

}
else 
{
	header("location:dispvendortable.php");
}


?>