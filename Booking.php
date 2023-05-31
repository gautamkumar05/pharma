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
		
// MY SQL PART
$dt=Date('Y-m-d');
include"connection.php";
$q="insert into booking 
(vid ,sid ,quantity ,amount ,date )
values('1','1','".$qq."','".$a."','".$dt."')";

$sq=mysqli_query($cn,$q);
if($sq)
	{
	$a=$as=$qq=$qqs=""; // to clear form after sucess submit
echo '<script> alert("thank for booking")</script>';
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
<form action="" method="POST"  enctype="multipart/form-data">
BOOKING QUANTITY : <input type="text" maxlength="10" name="qq" value="<?php echo $qq; ?>"> 
<span style="color:red"> <?php echo $qqs; ?></span>
<br><br>

TOTAL AMOUNT : <input type="text" maxlength="10" name="a" value="<?php echo $a; ?>"> 
<span style="color:red"> <?php echo $as; ?></span>
<br><br>


<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>