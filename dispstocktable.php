<!--
function to display 
1) mysqli_fetch_row() 0 , 1 , 2 
2) mysqli_fetch_array () 0 , 1 , 2  or colname cid , bid , photo 
3) mysqli_fetch_array () colname cid , bid , photo 

!-->
<?php
include"connection.php";

$qs="select * from stock";

$sqs=mysqli_query($cn,$qs);
if($sqs)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sqs)>0)
	{
	$sqs=mysqli_query($cn,$qs);
echo '<table border="1"> <tr bgcolor="silver">
<th>Stock id </th><th> Name </th> 
<th> unit </th> <th>Purchase Rate</th> 
<th>Dealer Rate</th> <th>Retailer Rate</th> 
<th>Batch no. </th> <th>Manufact. Date</th> 
<th>exp. Date</th> <th>Details</th> 
<th>Photo</th> <th>GST</th> <th>DELETE</th><th>UPDATE</th>
</tr>'; 
		while($r=mysqli_fetch_array($sqs))
		{
			echo '<tr> <th>'.$r['sid'].'</th>';
			echo ' <th> '.$r['name'].'</th>';
			echo ' <th> '.$r['unit'].'</th>';
			echo ' <th> '.$r['prate'].'</th>';
			echo ' <th> '.$r['drate'].'</th>';
			echo ' <th> '.$r['rrate'].'</th>';
			echo ' <th> '.$r['batchno'].'</th>';
			echo ' <th> '.$r['mfgdate'].'</th>';
			echo ' <th> '.$r['expdate'].'</th>';
			echo ' <th> '.$r['detail'].'</th>';
			echo ' <th> <img src="'.$r['photo'].'" width="50" height="50"></th>';
			echo ' <th> '.$r['gst'].'</th>';
			$sid=$r['sid'];
			echo ' <th><a href="delstock.php?sid='.$sid.'"> delete</a></th>';
			echo ' <th><a href="updatestock.php?sid='.$sid.'"> update</a></th>';
			echo'</tr>';
		}
	echo '</table>';
	}
	else 
	{
		echo'<br> DATA not found ';
	}
}
else 
{
	echo '<br>'.mysqli_error($cn);
}


?>