
<?php
$n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps="";
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

//check units
function unitscheck()
{
	$u=trim($_POST['u']);
	$uc='/^[0-9]{1,10}$/';
	if(preg_match($uc,$u))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check purchase rate
function purcheck()
{
	$p=trim($_POST['p']);
	$pc='/^[0-9.]{1,10}$/';
	if(preg_match($pc,$p))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

//check Dealer rate
function dealcheck()
{
	$d=trim($_POST['d']);
	$dc='/^[0-9.]{1,10}$/';
	if(preg_match($dc,$d))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check Retailer rate
function retcheck()
{
	$ret=trim($_POST['ret']);
	$retc='/^[0-9.]{1,10}$/';
	if(preg_match($retc,$ret))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//Batch check
function batchcheck()
{
	$b=trim($_POST['b']);
	$bc='/^[0-9]{1,10}$/';
	if(preg_match($bc,$b))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

// mfg date check 
function mfgcheck()
{
	if($_POST['mfg']!='')
	{
		//system date or current date
		$sy=Date('Y');  
		$sm=Date('m');  
		$sd=Date('d');
// change days 
			$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// enter date 
		$mfg=$_POST['mfg'];
		$ey=Date('Y',strtotime($mfg));
		$em=Date('m',strtotime($mfg));
		$ed=Date('d',strtotime($mfg));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff<=0)
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
		return 'n';
	}
}

// exp date check 
function expcheck()
{
	if($_POST['exp']!='')
	{
		//system date or current date
		$sy=Date('Y');  
		$sm=Date('m');  
		$sd=Date('d');
// change days 
			$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// enter date 
		$exp=$_POST['exp'];
		$ey=Date('Y',strtotime($exp));
		$em=Date('m',strtotime($exp));
		$ed=Date('d',strtotime($exp));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff>=0)
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
		return 'n';
	}
} 

//details check 
function Detailcheck()
{	
$det=trim($_POST['det']);
	if(strlen($det)>0)
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
//check GST
function gstcheck()
{
	$g=trim($_POST['g']);
	$gc='/^[0-9]{1,10}$/';
	if(preg_match($gc,$g))
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
	// units
	if(unitscheck()=='y')
	{
		$u=trim($_POST['u']);
	}
	else 
	{
		$us="*** check units ";
	}
	
	
	// purchase rate
	if(purcheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** Enter vallid Rate ";
	}

    // Dealer rate
	if(dealcheck()=='y')
	{
		$d=trim($_POST['d']);
	}
	else 
	{
		$ds="*** Enter vallid Rate ";
	}

    // Retailer rate
	if(retcheck()=='y')
	{
		$ret=trim($_POST['ret']);
	}
	else 
	{
		$rets="*** Enter vallid Rate ";
	}
    // batch
	if(batchcheck()=='y')
	{
		$b=trim($_POST['b']);
	}
	else 
	{
		$bs="*** check Batch ";
	}

	//mfg date check 
	if(mfgcheck()=='y')
	{
		$mfg=Date('Y-m-d',strtotime($_POST['mfg']));
	}
	else 
	{
		$mfgs="** check date";
	}
	
	 //exp date check 
	 if(expcheck()=='y')
	 {
	 	$exp=Date('Y-m-d',strtotime($_POST['exp']));
	 }
	 else 
	{
	 	$exps="** check date";
	 }


	// Details check 
	if(detailcheck()=='y')
	{
		$det=trim($_POST['det']);
	}
	else 
	{
		$dets="** check details";
	}	

	

	//Photo check
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
//GST check
	if(gstcheck()=='y')
	{
		$g=trim($_POST['g']);
	}
	else 
	{
		$gs="*** check gst ";
	}
	
	// all check 
	if(namecheck()=='y' && unitscheck()=='y'&& purcheck()=='y'&& dealcheck()=='y' && retcheck()=='y' && batchcheck()=='y' && Detailcheck()=='y' && gstcheck()=='y' && mfgcheck()=='y' && expcheck()=='y')
	{
	// 	$r="name ".$n.' detail '.$a. ' rate '.$p;
	// 	echo $r;
	$sid=$_POST['sid'];
include"connection.php";

$dt=Date('Y-m-d');
		if(photocheck()=='y')
		{
            $fn=$_FILES['m']['name'];
            $ta=$_FILES['m']['tmp_name'];
            $fa='load/'.uniqid().$fn;
            move_uploaded_file($ta,$fa);
	
	$q="update stock 
    set name='".$n."' ,unit='".$u."' ,prate='".$p."' ,drate='".$d."' ,rrate='".$ret."' , batchno='".$b."', mfgdate='".$mfg."', expdate='".$exp."', detail='".$det."', photo='".$fa."', gst='".$g."'
where sid='".$sid."'";
	
		
		}
		else if(photocheck()=='yy')
		{
		$q="update item 
        set name='".$n."' ,unit='".$u."' ,prate='".$p."' ,drate='".$d."' ,rrate='".$ret."' , batchno='".$b."', mfgdate='".$mfg."', expdate='".$exp."', detail='".$det."', gst='".$g."'
        where sid='".$sid."'";
		}
	
	// 	echo '<img src="'.$fa.'" width="100" height="100">';
	//

	/// khela start insert 
		
$sq=mysqli_query($cn,$q);
if($sq)
{
    $n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps="";
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
if(isset($_GET['sid']))
{
$sid=$_GET['sid'];
include"connection.php";

$q="select * from stock where sid='".$sid."'";

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
            Stock id <input type="text" name="sid" value="<?php echo $r['sid']; ?>" readonly> 
<br><br>
Product NAME : <input type="text" name="n" value="<?php echo $r['name'];?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
UNITS : <input type="text" name="u" maxlength="10" value="<?php echo $r['unit'];?>"> 
<span style="color:red"><?php echo $us;?></span>
<br><br>
PUR. RATE : <input type="text" name="p" maxlength="10" value="<?php echo $r['prate'];?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
D. RATE : <input type="text" name="d" maxlength="10" value="<?php echo $r['drate'];?>"> 
<span style="color:red"><?php echo $ds;?></span>
<br><br>
RET. RATE : <input type="text" name="ret" maxlength="10" value="<?php echo $r['rrate'];?>"> 
<span style="color:red"><?php echo $rets;?></span>
<br><br>
BATCH NO. : <input type="text" name="b" maxlength="10" value="<?php echo $r['batchno'];?>"> 
<span style="color:red"><?php echo $bs;?></span>
<br><br>
 MFG date : 
<input type="date" name="mfg" value="<?php echo $r['mfgdate']; ?>">
<span style="color:red"><?php echo $mfgs;?></span>
<br><br>
EXP date : 
<input type="date" name="exp" value="<?php echo $r['expdate']; ?>">
<span style="color:red"><?php echo $exps;?></span>
<br><br>
DETAILS : <textarea name="det"><?php echo $r['detail'];?></textarea>
<span style="color:red"><?php echo $dets;?></span>
<br><br>
PHOTO : <input type="file" name="m">
<img src="<?php echo $r['photo'] ?>"width="50" height="50">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
GST rate : <input type="text" name="g" maxlength="10" value="<?php echo $r['gst'];?>"> 
<span style="color:red"><?php echo $gs;?></span>
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
	header("location:dispstocktable.php");
}


?>