


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
        <a class="nav-link text-white" href="vstock.php">IN STOCK</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vpendingbooking.php">PENDING</a>
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

@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
body{background-color: #eeeeee;font-family: 'Open Sans',serif}
.container{margin-top:50px;margin-bottom: 50px;width: auto;height:auto;}
.card{position: relative;display: flex;flex-direction: column;min-width: 10px;background-color: #fff;background-clip: border-box;border: 1px solid rgba(0, 0, 0, 0.1);border-radius: 0.10rem}
.card-header:first-child{border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0}
.card-header{padding: 0.75rem 1.25rem;margin-bottom: 0;background-color: #fff;border-bottom: 1px solid rgba(0, 0, 0, 0.1)}
.track{position: relative;background-color: #ddd;height: 7px;display: -webkit-box;display: -ms-flexbox;display: flex;margin-bottom: 60px;margin-top: 50px}
.track .step{-webkit-box-flex: 1;-ms-flex-positive: 1;flex-grow: 1;width: 25%;margin-top: -18px;text-align: center;position: relative}
.track .step.active:before{background: #FF5722}
.track .step::before{height: 7px;position: absolute;content: "";width: 100%;left: 0;top: 18px}
.track .step.active .icon{background: #ee5435;color: #fff}
.track .icon{display: inline-block;width: 40px;height: 40px;line-height: 40px;position: relative;border-radius: 100%;background: #ddd}
.track .step.active .text{font-weight: 400;color: #000}.track .text{display: block;margin-top: 7px}
.itemside{position: relative;display: -webkit-box;display: -ms-flexbox;display: flex; width: 100%}
.itemside .aside{position: relative;-ms-flex-negative: 0;flex-shrink: 0}
.img-sm{width: 100px;height: 120px;padding: 7px}
ul.row, ul.row-sm{list-style: none;padding: 0}
.itemside .info{padding-left: 15px;padding-right: 7px}
.itemside .title{display: block;margin-bottom: 5px;color: #212529}
p{margin-top: 0;margin-bottom: 1rem}
.btn-warning{color: #ffffff;background-color: #ee5435;border-color: #ee5435;border-radius: 1px}
.btn-warning:hover{color: #ffffff;background-color: #ff2b00;border-color: #ff2b00;border-radius: 1px}
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

<?php
include"connection.php";
$q="select *, booking.sid as 'ssid' from booking,stock  where booking.sid=stock.sid and vid='".$_SESSION['vid']."' and status='confirm'";

$sq=mysqli_query($cn,$q);
if($sq)
{
	// check if any data found or not 
	if(mysqli_fetch_array($sq)>0)
	{

	$sq=mysqli_query($cn,$q);

		while($r=mysqli_fetch_array($sq))
		{
            echo'<div class="container">';
                echo'<article class="card">';

               echo' <header class="card-header"> My Order </header>';
                   echo' <div class="card-body">';

           echo' <h6>Order ID: '.$r['bid'].'</h6>';

           echo'<article class="card">
           <div class="card-body row">
           <div class="col"> <strong>Stock Id :</strong> <br> '.$r['ssid'].' </div>
               <div class="col"> <strong>Order Date :</strong> <br>'.$r['date'].' </div>
               <div class="col"> <strong>Shipping BY:</strong> <br> Younker Pharma, | <i class="fa fa-phone"></i> +91 7909024770 </div>
               <div class="col"> <strong>Status:</strong> <br> '.$r['status'].' </div>
           </div>
       </article>';

           echo' <div class="track">';
               echo' <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text">Order confirmed</span> </div>';
           echo' </div>';
            echo'<hr>';
            echo'<ul class="row">';
               echo' <li class="col-md-4">';
                   echo' <figure class="itemside mb-3">';
                       echo' <div class="aside">';
                       echo ' <img src="'.$r['photo'].'" class="img-sm border">';
                        echo'</div>';
                       echo' <figcaption class="info align-self-center">';
                           echo '<p class="title"> <h4>'.$r['name'].' </h4><br>
                           Mfg date : '.$r['mfgdate'].'<br>
                           Exp date : '.$r['expdate'].'<br><br>
                           QUANTITY : '.$r['quantity']. ' pcs. 
                           </p> <span class="text-muted"> Rs.'.$r['amount'].' </span>';
                        echo'</figcaption>';
                   echo' </figure>';
                echo'</li>';
                    
           echo' </ul>';
           echo' <hr>';
           echo' <a href="vstock.php" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back to Product</a>';
       echo' </div>
    </article>
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
