
<?php
$n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps=$det=$dets=$g=$gs=$m=$ms="";
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
	if(namecheck()=='y' && unitscheck()=='y'&& purcheck()=='y'&& dealcheck()=='y' && retcheck()=='y' && batchcheck()=='y' && Detailcheck()=='y' && photocheck()=='y' && gstcheck()=='y' && mfgcheck()=='y' && expcheck()=='y')
	{
		/* $r="name ".$n." unit ".$u." pur rate ".$p." deal check ".$d." ret. rate ".$sk." batch ".$q. "Details ".$det."GST : ".$g. "mfg : ".$mfg." Exp : ".$exp;
		echo $r; */
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='load/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
		//echo '<br> <img src="'.$fa.'" width="100" height="100">';
	// MY SQL PART
		include"connection.php";
		$qs="insert into stock 
			(name ,unit ,prate ,drate ,rrate , batchno, mfgdate, expdate, detail, photo, gst )
			values('".$n."','".$u."','".$p."','".$d."','".$ret."','".$b."','".$mfg."','".$exp."','".$det."','".$fa."','".$g."')";

		$sqs=mysqli_query($cn,$qs);
	if($sqs)
		{
			$n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps=$g=$gs=$det=$dets=""; // to clear form after sucess submit
			echo '<script> alert("STOCK ADD")</script>';
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
Product NAME : <input type="text" name="n" value="<?php echo $n;?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
UNITS : <input type="text" name="u" maxlength="10" value="<?php echo $u;?>"> 
<span style="color:red"><?php echo $us;?></span>
<br><br>
PUR. RATE : <input type="text" name="p" maxlength="10" value="<?php echo $p;?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
D. RATE : <input type="text" name="d" maxlength="10" value="<?php echo $d;?>"> 
<span style="color:red"><?php echo $ds;?></span>
<br><br>
RET. RATE : <input type="text" name="ret" maxlength="10" value="<?php echo $ret;?>"> 
<span style="color:red"><?php echo $rets;?></span>
<br><br>
BATCH NO. : <input type="text" name="b" maxlength="10" value="<?php echo $b;?>"> 
<span style="color:red"><?php echo $bs;?></span>
<br><br>
 MFG date : 
<input type="date" name="mfg" value="<?php echo $mfg; ?>">
<span style="color:red"><?php echo $mfgs;?></span>
<br><br>
EXP date : 
<input type="date" name="exp" value="<?php echo $exp; ?>">
<span style="color:red"><?php echo $exps;?></span>
<br><br>
DETAILS : <textarea name="det"><?php echo $det;?></textarea>
<span style="color:red"><?php echo $dets;?></span>
<br><br>
PHOTO : <input type="file" name="m">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
GST rate : <input type="text" name="g" maxlength="10" value="<?php echo $g;?>"> 
<span style="color:red"><?php echo $gs;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>