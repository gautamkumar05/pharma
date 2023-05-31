<!--
function to display 
1) mysqli_fetch_row() 0 , 1 , 2 
2) mysqli_fetch_array () 0 , 1 , 2  or colname cid , bid , photo 
3) mysqli_fetch_array () colname cid , bid , photo 

!-->
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
echo '<table border="1"> <tr bgcolor="lime">
<th>Booking id </th> <th>Vender id </th>
<th>Stock id </th> <th> Quantity </th> 
<th> Amount </th>
<th>Date </th> <th>Status</th> <th>Delete</th> 
<th>Update</th> 
</tr>'; 
		while($r=mysqli_fetch_array($sq))
		{
			echo '<tr> <th>'.$r['bid'].'</th>';
			echo ' <th>'.$r['vid'].'</th>';
			echo ' <th>'.$r['sid'].'</th>';
			echo ' <th> '.$r['quantity'].'</th>';
			echo ' <th> '.$r['amount'].'</th>';
			echo ' <th> '.$r['date'].'</th>';
			echo ' <th>'.$r['status'].'</th>';
			$bid=$r['bid'];
			echo ' <th><a href="delbooking.php?bid='.$bid.'"> delete</a></th>';
			echo ' <th><a href="updatebooking.php?bid='.$bid.'"> Update</a></th>';
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