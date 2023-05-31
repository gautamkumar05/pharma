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
<style>

.profile-details {
    display: flex;
    min-width:auto;
    min-height: fit-content;
    align-items: center;
    background:#dc3545 ;
    border: 1px solid #EFEEF1;
    border-radius: 6px;
    height: 50px;
    min-width: 190px;
    padding: 0 15px 0 2px;
   
}

.profile-details .admin_name {
    font-size: 15px;
    font-weight: 500;
    width: auto;
    color: #333;
    margin: 0 10px;
    white-space: nowrap;
    color: #e0e0e0;
}

</style>

<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <a class="navbar-brand text-white" href="#">
	
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="yellow" class="bi bi-capsule" viewBox="0 0 16 16">
  <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
</svg>
  <b>BHARAT PHARMA</b>
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="profile-details">
             <a href="vvendor.php" class="admin_name"><center><b>PROFILE :</b> <?php  $n=$_SESSION['vv']; echo '<br>'.$n; ?> </b> </center></a>
    </li>
	 
	  <li class="nav-item">
        <a class="nav-link text-white" href="vpendingbooking.php">PENDING</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vconfirmbooking.php">MY ORDER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="enquiry.php">ENQUIRY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="end.php"><b>LOGOUT</b></a>
      </li>

   
    </ul>

    <form class="form-inline my-2 my-lg-0" action=" " method="POST">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="n">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="s">Search</button>
    </form>

  </div>
</nav>


<style>
	body{
		background-color:#FFF3F3 ;
	}
	.container
	{
		padding-right:15px;
		padding-left:15px;
		margin-right:auto;
		margin-left:auto;
		margin-top:20Px;
	}
.card {
	height: 95%;
  margin-bottom: 30px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}

.card-img-top {
	margin-top:5px;
  height: 200px;
  object-fit: cover;
}

.btn-group button {
  width: 100%;
}

.btn-group button:first-child {
  border-radius: 5px 5px 0 0;
}

.btn-group button:last-child {
  border-radius: 0 0 5px 5px;
}
.mrp {
    text-decoration: line-through;
    color: #999;
  }

  .discounted-price {
    font-weight: bold;
    color: #c00;
  }
  .mrp {
    text-decoration: line-through;
    color: #999;
  }

  .discounted-price {
    font-weight: bold;
    color: #c00;
  }
  

</style>

<div class="container">
  <div class="row">

  <?php
include"connection.php";
if(isset($_POST['s']))
{
	$n=$_POST['n'];
	$q="select * from stock where name like '%".$n."%' or detail like '%".$n."%'";
}
else
{
$q="select * from stock";
}
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
		if($r['unit']>0)

		{

    echo'<div class="col-md-4">
      <div class="card">';
     echo' <img src="'.$r['photo'].'" class="card-img-top" alt="Product Image">';
        echo'<div class="card-body">
          <h5 class="card-title">'.$r['name'].'</h5>
          <p class="card-text">'.$r['detail'].'</p>
          <p class="card-text">MRP: <span class="mrp">Rs. '.$r['rrate'].'</span></p>
          <p class="card-text">Our Price: <span class="discounted-price">Rs. '.$r['drate'].'</span></p>';


          $sid=$r['sid'];
			$name=$r['name'];
			$units=$r['unit'];
			$drate=$r['drate'];
			$photo=$r['photo'];
			$mfgdate=$r['mfgdate'];
			$expdate=$r['expdate'];
			$mrp=$r['rrate'];


         echo' <a href="vbook.php?sid='.$sid.'&name='.$name.'&units='.$units.'&rate='.$drate.'&photo='.$photo.'&mfgdate='.$mfgdate.'&expdate='.$expdate.'&rrate='.$mrp.'" class="btn btn-primary" >Buy Now</a>';
       echo' </div>
      </div>
    </div>';

}
}

}
else 
{
	echo'<br> <h2> <center> No match Found...!!!<br> Kindly Enter Valid Search...</center></h2>';
}
}
else 
{
echo '<br>'.mysqli_error($cn);
}


?>



  </div>
</div>


