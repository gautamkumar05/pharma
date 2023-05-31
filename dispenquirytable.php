<!--
function to display 
1) mysqli_fetch_row() 0 , 1 , 2 
2) mysqli_fetch_array () 0 , 1 , 2  or colname cid , bid , photo 
3) mysqli_fetch_array () colname cid , bid , photo 

!-->
<?php
include"connection.php";

$qe="select * from enquiry";

$sqe=mysqli_query($cn,$qe);
if($sqe)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sqe)>0)
	{
	$sqe=mysqli_query($cn,$qe);
echo '<table border="1"> <tr bgcolor="lime">
<th>Enquiry id </th><th> Name </th> 
<th> Phone no. </th> <th>Email id </th> 
<th>Message </th>
<th>Date</th>  <th>Delete</th> 
</tr>'; 
		while($r=mysqli_fetch_array($sqe))
		{
			echo '<tr> <th>'.$r['eid'].'</th>';
			echo ' <th> '.$r['name'].'</th>';
			echo ' <th> '.$r['phone'].'</th>';
			echo ' <th> '.$r['email'].'</th>';
			echo ' <th> '.$r['message'].'</th>';
			echo ' <th> '.$r['date'].'</th>';
			$eid=$r['eid'];
			echo ' <th><a href="delenquiry.php?eid='.$eid.'"> delete</a></th>';
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