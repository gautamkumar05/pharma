<?php
$a=$as=$qq=$qqs="";
// QUANTITY CHECK 
function quantitycheck()
{
	$qq=trim($_POST['qq']);
	$qc='/^[0-9]{1,10}$/';
	if(preg_match($qc,$qq))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}	
// AMOUNT CHECK
function amountcheck()
{
	$a=trim($_POST['a']);
	$ac='/^[0-9.]{2,10}$/';
	if(preg_match($ac,$a) )
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
//FOR QUANTITY 
	if(quantitycheck()=='y')
	{
		$qq=trim($_POST['qq']);
	}
	else 
	{
		$qqs="*** check quantity ";
	}
//FOR AMOUNT
	if(amountcheck()=='y')
	{
		$a=trim($_POST['a']);
	}
	else 
	{
		$as="*** check amount ";
	}

// FOR ALL
	if(quantitycheck()=='y' && amountcheck()=='y' )
	{
		//$r="bookingquantity ".$qq.' totalamount '.$a.' date '.$d;
		//echo $r;
		$dt=Date('Y-m-d');
		$bid=$_POST['bid'];

	
include"connection.php";
    
	$q="update booking
    set quantity='".$qq."' ,amount='".$a."' ,date='".$dt."'
where bid='".$bid."'";

	/// khela start insert 
		
$sq=mysqli_query($cn,$q);
if($sq)
{
    $a=$as=$qq=$qqs="";
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
if(isset($_GET['bid']))
{
$bid=$_GET['bid'];
include"connection.php";

$q="select * from booking where bid='".$bid."'";

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
            Booking id <input type="text" name="bid" value="<?php echo $r['bid']; ?>" readonly > 
            <br><br>
            Vendor id <input type="text" name="vid" value="<?php echo $r['vid']; ?>" readonly > 
            <br><br>
            Stock id <input type="text" name="sid" value="<?php echo $r['sid']; ?>" readonly > 
<br><br>
<form action="" method="POST"  enctype="multipart/form-data">
BOOKING QUANTITY : <input type="text" maxlength="10" name="qq" value="<?php echo $r['quantity']; ?>"> 
<span style="color:red"> <?php echo $qqs; ?></span>
<br><br>

TOTAL AMOUNT : <input type="text" name="a" value="<?php echo $r['amount']; ?>"> 
<span style="color:red"> <?php echo $as; ?></span>
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
	header("location:dispbookingtable.php");
}


?>