<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<style>
    
.m{height:450px;margin-top:5px;}
.h{position:absolute;top:5%;padding-top:3px;padding-bottom:3px; left:3%;width:94%; background-color:yellow;text-align:center;color:red;}
.t{position:absolute;bottom:30%;padding-top:3px;padding-bottom:3px;left:3%;width:94%; background-color:lightblue;text-align:center;color:black;}
.p{position:absolute;top:30%;left:8%;width:85%;height:20%;border:70%;padding-top:0px;padding-left:4px;background-color:lightgreen;
overflow:hidden;border:3px solid black;}

</style>
<div class="fluid-container">
	<div class="row">
<?php
include"connection.php";
$q="select * from booking";

$sq=mysqli_query($cn,$q);
if($sq)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sq)>0)
	{

	$sq=mysqli_query($cn,$q);

		while($r=mysqli_fetch_array($sq))
		{
		//
		echo '<div class="col-md-2">';
					echo '<div class="m">';
							echo '<div class="h">';
			echo ' BOOKING ID :- '.$r['bid'];
            echo '<br> VENDOR ID :- '.$r['vid'];
            echo '<br> STOCK ID :- '.$r['sid'];
							echo'</div>';
							
							echo '<div class="p">';
			echo '<br> QUANTITY :- '.$r['quantity'].' pcs.';
            echo '<br> AMOUNT (Rs.) :- '.$r['amount'].' /-';
							echo'</div>';
		
							
							echo '<div class="t">';
			echo 'BOOKING DATE :- '.$r['date'];
			echo '<br> STATUS :- '.$r['status'];
							echo'</div>';
					echo'</div>';
		echo'</div>';
		//
		
		
		
			
			echo'</tr>';
		}
	
	}
	else 
	{
		echo'<br> no record found ';
	}
}
else 
{
	echo '<br>'.mysqli_error($cn);
}


?>

</div>
</div>