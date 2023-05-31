<!--
function to display 
1) mysqli_fetch_row() 0 , 1 , 2 
2) mysqli_fetch_array () 0 , 1 , 2  or colname cid , bid , photo 
3) mysqli_fetch_array () colname cid , bid , photo 

!-->
<?php
include"connection.php";

$qv="select * from vendor";

$sqv=mysqli_query($cn,$qv);
if($sqv)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sqv)>0)
	{
	$sqv=mysqli_query($cn,$qv);
echo '<table border="1"> <tr bgcolor="lime">
<th>Vender id </th><th> Name </th> 
<th> Email id </th> <th>Password </th> 
<th>Phone no. </th>
<th>Photo </th>
<th>Address </th> 
<th>Delete </th>  <th>UPDATE </th> 
</tr>'; 
		while($r=mysqli_fetch_array($sqv))
		{
			echo '<tr> <th>'.$r['vid'].'</th>';
			echo ' <th> '.$r['name'].'</th>';
			echo ' <th> '.$r['email'].'</th>';
			echo ' <th> '.$r['password'].'</th>';
			echo ' <th> '.$r['phone'].'</th>';
			echo ' <th> <img src="'.$r['photo'].'" width="50" height="50"></th>';
			echo ' <th> '.$r['address'].'</th>';
			$vid=$r['vid'];
			echo ' <th><a href="delvendor.php?vid='.$vid.'"> delete</a></th>';
			echo ' <th><a href="updatevendor.php?vid='.$vid.'"> update</a></th>';
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