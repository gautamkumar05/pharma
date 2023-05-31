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
        <a class="nav-link text-white" href="vvendor.php">MY PROFILE</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vstock.php">IN STOCK</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vpendingbooking.php">PENDING</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vconfirmbooking.php">MY ORDER</a>
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
.cart-container {
  display: flex;
  flex-direction: column;
  gap: 10px;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.cart-item {
  display: flex;
  gap: 20px;
  align-items: center;
 
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background-color: rgb(254, 232, 230 );
  box-shadow: 10em 0 7em rgb(231, 209, 207 );
  transform: skew(0deg);
  z-index: -1;
}

.cart-item img {
  width: 100px;
  height: 100px;
  object-fit: cover;
  border-radius: 5px;
}

.cart-item h3 {
  font-size: 18px;
  margin: 0;
}

.cart-item p {
  margin: 0;
}

.remove-button {
  background-color: #f44336;
  color: white;
  border: none;
  border-radius: 5px;
  padding: 10px 15px;
  
}

.remove-button:hover {
  background-color: #d32f2f;
}
</style>


<div class="cart-container">



<?php
include"connection.php";
$q="select *, booking.sid as 'ssid' from booking,stock  where booking.sid=stock.sid and vid='".$_SESSION['vid']."' and status='pending'";

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
        
  echo'<div class="cart-item">
  Vendor Id : '.$r['vid'].'<br>
  Book Id : '.$r['bid'].'<br> Product Id : '.$r['ssid'].'
  <img src="'.$r['photo'].'" alt="Item">
    <h3>'.$r['name'].'</h3>
    <h7>'.$r['quantity'].' pcs. </h7>';

    echo'<p>Amount: Rs. '.$r['amount'].'</p>
    <button class="remove-button">'.$r['status'].'</button>

  </div>';
	
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
