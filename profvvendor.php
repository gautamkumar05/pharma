<?php
ob_start();
session_start();
if($_SESSION['vvid']!=session_id())
{
	header("location:login.php");
}
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand text-white" href="#">
	
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="yellow" class="bi bi-capsule" viewBox="0 0 16 16">
  <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
</svg>
  <b>YOUNKER PHARMA</b>
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item">
        <a class="nav-link text-white" href="vvendor.php">VENDOR</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vstock.php">PRODUCT AVAILABLE</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vpendingbooking.php">CART</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vconfirmbooking.php">ORDER</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="end.php"><b>LOGOUT</b></a>
      </li>
    </ul>
<!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
!-->
  </div>
</nav>
<style>
	.main{
		margin-top:5px; padding-top: 5px; padding-bottom: 5px;
		color: white; background-color:#FAC5C5;
	}
	</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-12">
<div class="main">
	<center>

<?php
$n=$_SESSION['vv']; 
echo '<br> welcome '.$n;

?>


</center>
</div>
</div>
</div>
</div>

<style>
.m{height:450px;margin-top:5px;}
.h{position:absolute;top:5%;padding-top:3px;padding-bottom:3px; left:3%;width:94%; background-color:palevioletred;text-align:center;color:white;}
.t{position:absolute;bottom:2%;padding-top:3px;padding-bottom:3px;left:3%;width:94%; background-color:lightblue;text-align:center;color:black;}
.p{position:absolute;top:20%;left:20%;width:60%;height:60%;border:50%;
overflow:hidden;border:2px solid pink;}

.ph{position:absolute;top:0%;left:0%;width:100%;height:100%;}
</style>
<div class="fluid-container">
	<div class="row">
<?php
include"connection.php";
$q="select * from vendor where email='".$n."'";

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
		echo '<div class="col-md-3">';
					echo '<div class="m">';
							echo '<div class="h">';
			echo ' VENDOR NAME :- <h4>'.$r['name'].'</h4>';
							echo'</div>';
							
							echo '<div class="p">';
			echo ' <img src="'.$r['photo'].'" class="ph">';
							echo'</div>';
		
							
							echo '<div class="t">';
			echo 'VENDOR ID :- '.$r['vid'];
			echo '<br> CONTACT :- '.$r['phone'];
			echo ' <br> ADDRESS :- '.$r['address'];
            echo ' <br> EMAIL :- '.$r['email'];
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