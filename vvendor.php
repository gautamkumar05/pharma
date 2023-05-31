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
            
                <a href="vvendor.php" class="admin_name"><center><b>PROFILE :</b> <?php
                                                            $n=$_SESSION['vv']; echo '<br>'.$n; ?> </center></a>
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
        <a class="nav-link text-white" href="enquiry.php">ENQUIRY</a>
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
		color: white; background-color:white;

    }

	</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-12">
<div class="main">
	<center>

<!-- DISPLAY MESSAGES AREA !-->

</center>
</div>
</div>
</div>
</div>

<style>
body {
    background-color: #f9f9fa;
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 50px;
    width: fit-content;
    height: fit-content;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
   
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 2px;
    width: 100%;
    height: 50%;
}


 
h6 {
    font-size: 20px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}





</style>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-12 col-md-12">

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
		//<img src="'.$r['photo'].'"
        $_SESSION['vid']=$r["vid"];
		                        echo '<div class="card user-card-full">';
                                echo '<div class="row m-l-0 m-r-0">';
                                echo '<div class="col-sm-4 bg-c-lite-green user-profile">';
                                echo '<div class="card-block text-center text-black">';
                                echo '<div class="m-b-25">';
                                echo '<img src="'.$r['photo'].'" class="img-radius" alt="User-Profile-Image">';
                                echo ' </div>';
                                echo '<h3 class="f-w-600">
                                VENDER ID :-'.$r["vid"].'<br><br>
                                NAME :-'.$r["name"].'</h3>';
                                echo '<i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>';
                                echo ' </div>';
                                echo ' </div>';
                                echo '<div class="col-sm-8">';
                                echo '<div class="card-block">';
                                echo '<h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>';
                                echo '<div class="row">';
                                echo '<div class="col-sm-6">';
                                echo '<p class="m-b-10 f-w-600">Email</p>';
                                echo '<h6 class="text-muted f-w-400">'.$r["email"].'<h6>';
                                echo '</div>';
                                echo '<div class="col-sm-6">';
                                echo '<p class="m-b-10 f-w-600">Phone</p>';
                                echo '<h6 class="text-muted f-w-400">'.$r["phone"].'</h6>';
                                echo '</div>';
                                echo ' </div>';
                                echo ' <div class="col-sm-6">';
                                echo '<p class="m-b-10 f-w-600">Address</p>';
                                echo ' <h6 class="text-muted f-w-400">'.$r["address"].'</h6><br><br><br>
                                <a href="enquiry.php" style="color:red">For UPDATE<br>**Contact Admin** </a>';
                                echo ' </div>
                                 </div>
                                </div>
                                 </div>
                                </div>
                                 </div>
                                </div>
                                 </div>
                                </div>
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
</div>