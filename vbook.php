
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
  .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(255, 248, 242  , 1), rgba(255, 248, 242 , 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(255, 248, 242 , 1), rgba(255, 248, 242 , 1))
}
</style>

<div class="fluid-container">
<div class="row">
<div class="col-md-12">
<div class="main">


<?php
$n=$_SESSION['vv']; 

if(!isset($_GET['sid']))
{
    header("location:vstock.php");
}
?>

<?php
$a=$as=$qq=$qqs="";
// QUANTITY CHECK 
function quantitycheck()
{
	$qq=trim($_POST['qq']);
	$qc='/^[0-9]{1,10}$/';
	if(preg_match($qc,$qq))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}	
// AMOUNT CHECK

if(isset($_POST['s']))
{
//FOR QUANTITY 
	if(quantitycheck()=='y')
	{
		$qq=trim($_POST['qq']);
	}
	else 
	{
		$qqs="*** check quantity ";
	}
//FOR AMOUNT

// FOR ALL
	if(quantitycheck()=='y'  )
	{
		//$r="bookingquantity ".$qq.' totalamount '.$a.' date '.$d;
		//echo $r;
		
// MY SQL PART
$dt=Date('Y-m-d');
$qq=$_POST['qq'];
$ra=$_POST['ra'];
$vid=$_POST['vid'];
$sid=$_POST['sid'];
$photo=$_POST['photo'];
$a=$qq*$ra;
include"connection.php";
$q="insert into booking 
(vid ,sid ,quantity ,amount ,date )
values('".$_SESSION['vid']."','".$sid."','".$qq."','".$a."','".$dt."')";

$sq=mysqli_query($cn,$q);
if($sq)
	{
	$a=$as=$qq=$qqs=$ra=""; // to clear form after sucess submit
header("location:vpendingbooking.php");
	}
	else 
	{
		echo'<br>'.$vid;
		// function to show sql query error 
		echo'<br>'.mysqli_error($cn);
	}

// MY SQL END 
	
	}
	else 
	{
		echo '<script>alert("CHECK");</script>';
	}
}
?>

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">ORDER SUMMARY</h5><br>

			
          </div>
          <div class="card-body">
            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                <img src="<?php echo $_GET['photo']; ?>"
                    class="w-100" alt="<?php echo $_GET['name']; ?>" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <p><strong><?php echo $_GET['name']; ?></strong></p>
				<p><?php echo "MRP : ".$_GET['rrate']; ?> </p>
                <p><?php echo "MANUFACTURE : ".$_GET['mfgdate']; ?></p>
                <p><?php echo "EXPIRY : ".$_GET['expdate']; ?> </p>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                   
					<form action="" method="POST" enctype="multipart/form-data">
                  <div class="form-outline">
                  <lable class="form-label">BOOKING QUANTITY : </lable> 
                    <select name="qq" class="form-control">
                    <?php 
                    $q=$_GET['units'];

                    for($i=1;$i<=$q;$i++)
                    {
                    echo '<option value="'.$i.'">'.$i.' pcs</option>';
                    
                    }
                    ?>
                    </select>
                  </div>
				  <br><br>
			<h7>STOCK ID: <input type="text" maxlength="100" name="sid" value="<?php echo $_GET['sid']; ?>" size="3" readonly> </h7>
<span style="color:red"> <?php echo $as; ?></span>
<br><br>
<h7> @ RATE : <input type="text" maxlength="100" name="ra" value="<?php echo $_GET['rate']; ?>" size="3" readonly> </h7>
<span style="color:red"> <?php echo $as; ?></span>
<br><br>
				  <input type="submit" class="btn btn-primary btn-lg btn-block" name="s" value="ORDER">
                  </form>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <!-- Single item -->
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
               
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
              
                <!-- Quantity -->

                <!-- Price -->
                
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
          </div>
        </div>
      </div>
      <div class="col-md-4">
        
      </div>
    </div>
  </div>
</section>