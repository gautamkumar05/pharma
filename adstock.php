<?php
ob_start();
session_start();
if($_SESSION['aid']!=session_id())
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
    /* Googlefont Poppins CDN Link */
    
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    
    .sidebar {
        position: fixed;
        height: 100%;
        width: 200px;
        background:#FF6E6E ;
        transition: all 0.5s ease;
    }
    
    .sidebar.active {
        width: 60px;
    }
    
    .sidebar .logo-details {
        height: 80px;
        display: flex;
        align-items: center;
    }
    
    .sidebar .logo-details i {
        font-size: 28px;
        font-weight: 500;
        color: #fff;
        min-width: 60px;
        text-align: center
    }
    
    .sidebar .logo-details .logo_name {
        color: #fff;
        font-size: 24px;
        font-weight: 500;
    }
    
    .sidebar .nav-links {
        margin-top: 10px;
    }
    
    .sidebar .nav-links li {
        position: relative;
        list-style: none;
        height: 50px;
    }
    
    .sidebar .nav-links li a {
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: all 0.4s ease;
    }
    
    .sidebar .nav-links li a.active {
        background: #450808;
    }
    
    .sidebar .nav-links li a:hover {
        background: #081D45;
    }
    
    .sidebar .nav-links li i {
        min-width: 60px;
        text-align: center;
        font-size: 18px;
        color: #fff;
    }
    
    .sidebar .nav-links li a .links_name {
        color: #fff;
        font-size: 15px;
        font-weight: 400;
        white-space: nowrap;
    }
    
    .sidebar .nav-links .log_out {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
    
    .home-section {
        position: relative;
        background-image:url(load/bkimg.jpg) ;
		background-repeat: no-repeat;
        background-size:1900px 1000px;
		min-height: 100vh;
        width: calc(100% - 240px);
        left: 180px;
        transition: all 0.5s ease;
        overflow: auto;
    }
    
    .sidebar.active~.home-section {
        width: calc(100% - 60px);
        left: 60px;
    }
    
    .home-section nav {
        display: flex;
        justify-content: space-between;
        height: 80px;
        background: #fff;
        display: flex;
        align-items: center;
        position: fixed;
        width: calc(100% - 240px);
        left: 180px;
        z-index: 100;
        padding: 0 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        transition: all 0.5s ease;
    }
    
    .sidebar.active~.home-section nav {
        left: 60px;
        width: calc(100% - 60px);
    }
    
    .home-section nav .sidebar-button {
        display: flex;
        align-items: center;
        font-size: 24px;
        font-weight: 500;
    }
    
    nav .sidebar-button i {
        font-size: 35px;
        margin-right: 10px;
    }
    
    .home-section nav .search-box {
        position: relative;
        height: 50px;
        max-width: 550px;
        width: 100%;
        margin: 0 20px;
    }
    
    nav .search-box input {
        height: 100%;
        width: 100%;
        outline: none;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        font-size: 18px;
        padding: 0 15px;
        
    }
    
    nav .search-box .bx-search {
        position: absolute;
        height: 40px;
        width: 40px;
        background: lightpink;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 4px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
        cursor: pointer;
    }
    
    .home-section nav .profile-details {
        display: flex;
        align-items: center;
        background: #F5F6FA;
        border: 2px solid #EFEEF1;
        border-radius: 6px;
        height: 50px;
        min-width: 190px;
        padding: 0 15px 0 2px;
    }
    
    nav .profile-details img {
        height: 40px;
        width: 40px;
        border-radius: 6px;
        object-fit: cover;
    }
    
    nav .profile-details .admin_name {
        text-transform: uppercase;
        font-size: 15px;
        font-weight: 500;
        color: #333;
        margin: 0 10px;
        white-space: nowrap;
    }
    
    nav .profile-details i {
        font-size: 25px;
        color: #333;
    }
    
    .home-section .home-content {
        position: relative;
        padding-top: 104px;
    }
    
    .home-content .overview-boxes {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 0 20px;
        margin-bottom: 26px;
    }
    
    .overview-boxes .box {
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% / 4 - 15px);
        background: #fff;
        padding: 15px 14px;
        border-radius: 12px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
    }
    
    .overview-boxes .box-topic {
        font-size: 20px;
        font-weight: 500;
    }
    
    .home-content .box .number {
        display: inline-block;
        font-size: 35px;
        margin-top: -6px;
        font-weight: 500;
    }
    
    .home-content .box .indicator {
        display: flex;
        align-items: center;
    }
    
    .home-content .box .indicator i {
        height: 20px;
        width: 20px;
        background: #8FDACB;
        line-height: 20px;
        text-align: center;
        border-radius: 50%;
        color: #fff;
        font-size: 20px;
        margin-right: 5px;
    }
    
    .box .indicator i.down {
        background: #e87d88;
    }
    
    .home-content .box .indicator .text {
        font-size: 12px;
    }
    
    .home-content .box .cart {
        display: inline-block;
        font-size: 32px;
        height: 50px;
        width: 50px;
        background: #cce5ff;
        line-height: 50px;
        text-align: center;
        color: #66b0ff;
        border-radius: 12px;
        margin: -15px 0 0 6px;
    }
    
    .home-content .box .cart.two {
        color: #2BD47D;
        background: #C0F2D8;
    }
    
    .home-content .box .people-fill{
        color: #ffc233;
        background: #ffe8b3;
    }
    
    .home-content .box .cart.four {
        color: #e05260;
        background: #f7d4d7;
    }
    
    .home-content .total-order {
        font-size: 20px;
        font-weight: 500;
    }
    
    
    /* Responsive Media Query */
    
    @media (max-width: 1240px) {
        .sidebar {
            width: 60px;
        }
        .sidebar.active {
            width: 220px;
        }
        .home-section {
            width: calc(100% - 60px);
            left: 60px;
        }
        .sidebar.active~.home-section {
            /* width: calc(100% - 220px); */
            overflow: hidden;
            left: 220px;
        }
        .home-section nav {
            width: calc(100% - 60px);
            left: 60px;
        }
        .sidebar.active~.home-section nav {
            width: calc(100% - 220px);
            left: 220px;
        }
    }
    
    @media (max-width: 1150px) {
        .home-content .sales-boxes {
            flex-direction: column;
        }
        .home-content .sales-boxes .box {
            width: 100%;
            overflow-x: scroll;
            margin-bottom: 30px;
        }
        .home-content .sales-boxes .top-sales {
            margin: 0;
        }
    }
    
    @media (max-width: 1000px) {
        .overview-boxes .box {
            width: calc(100% / 2 - 15px);
            margin-bottom: 15px;
        }
    }
    
    @media (max-width: 700px) {
        nav .sidebar-button .stock,
        nav .profile-details .admin_name,
        nav .profile-details i {
            display: none;
        }
        .home-section nav .profile-details {
            height: 50px;
            min-width: 40px;
        }
        .home-content .sales-boxes .sales-details {
            width: 560px;
        }
    }
    
    @media (max-width: 550px) {
        .overview-boxes .box {
            width: 100%;
            margin-bottom: 15px;
        }
        .sidebar.active~.home-section nav .profile-details {
            display: none;
        }
    }
    
    @media (max-width: 400px) {
        .sidebar {
            width: 0;
        }
        .sidebar.active {
            width: 60px;
        }
        .home-section {
            width: 100%;
            left: 0;
        }
        .sidebar.active~.home-section {
            left: 60px;
            width: calc(100% - 60px);
        }
        .home-section nav {
            width: 100%;
            left: 0;
        }
        .sidebar.active~.home-section nav {
            left: 60px;
            width: calc(100% - 60px);
        }
    }
</style>




<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
    <link rel="stylesheet" href="style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
    <div class="sidebar">
        <div class="logo-details">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="yellow" class="bi bi-capsule" viewBox="0 0 16 16">
                <path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
              </svg>
            <span class="logo_name">BHARAT PHARMA</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" >
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="adbooking.php" >
                    <i class='bx bx-box'></i>
                    <span class="links_name">Booking</span>
                </a>
            </li>
            <li>
                <a href="adstock.php" class="active">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Inventory</span>
                </a>
            </li>
            <li>
                <a href="advendor.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Vendor</span>
                </a>
            </li>
            <li>
                <a href="adenquiry.php">
                    <i class='bx bx-coin-stack'></i>
                    <span class="links_name">Enquiry</span>
                </a>
            </li>
            </li>
            <li class="log_out">
                <a href="end.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
	<section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Inventory</span>
            </div>
           <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>

                
            </div> 
            <div class="profile-details">
                <img src="pic.jpg" alt="">
                <span class="admin_name">ADMIN : <?php echo $_SESSION['a']; ?> </span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>
		

<style>
	.main{
		margin-top:60px; padding-top: 5px; padding-bottom: 5px;
		color: black;
	}
	.mai{
		margin-top:110px; padding-top: 5px; padding-bottom: 5px;
		color: white;
	}

    .inventory {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
}

.inventory p {
  font-size: 24px;
  margin-bottom: 10px;
}

.inventory .delete {
  display: inline-block;
  padding: 10px 20px;
  background-color: #BE3D3D ;
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  border-radius: 10px;
}
.inventory .update {
  display: inline-block;
  padding: 10px 20px;
  background-color: #438C40 ;
  color: #fff;
  text-decoration: none;
  font-size: 15px;
  border-radius: 10px;
}
.inventory a:hover {
  background-color: #3e8e41;
}
table{
    text-align: center;
}

	</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-4">
<div class="main">
	<center>

<?php
$n=$_SESSION['a']; 
echo '<br>';

?>


<?php
$n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps=$g=$gs=$det=$dets=$m=$ms="";
//check name 
function namecheck()
{
	$n=trim($_POST['n']);
	$nc='/^[a-zA-Z ]*$/';
	if(preg_match($nc,$n) && strlen($n)>0)
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

//check units
function unitscheck()
{
	$u=trim($_POST['u']);
	$uc='/^[0-9]{1,10}$/';
	if(preg_match($uc,$u))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check purchase rate
function purcheck()
{
	$p=trim($_POST['p']);
	$pc='/^[0-9.]{1,10}$/';
	if(preg_match($pc,$p))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

//check Dealer rate
function dealcheck()
{
	$d=trim($_POST['d']);
	$dc='/^[0-9.]{1,10}$/';
	if(preg_match($dc,$d))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check Retailer rate
function retcheck()
{
	$ret=trim($_POST['ret']);
	$retc='/^[0-9.]{1,10}$/';
	if(preg_match($retc,$ret))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//Batch check
function batchcheck()
{
	$b=trim($_POST['b']);
	$bc='/^[0-9]{1,10}$/';
	if(preg_match($bc,$b))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

// mfg date check 
function mfgcheck()
{
	if($_POST['mfg']!='')
	{
		//system date or current date
		$sy=Date('Y');  
		$sm=Date('m');  
		$sd=Date('d');
// change days 
			$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// enter date 
		$mfg=$_POST['mfg'];
		$ey=Date('Y',strtotime($mfg));
		$em=Date('m',strtotime($mfg));
		$ed=Date('d',strtotime($mfg));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff<=0)
		{
		return 'y';
		}
		else 
		{
		return 'n';
		}

	}
	else 
	{
		return 'n';
	}
}

// exp date check 
function expcheck()
{
	if($_POST['exp']!='')
	{
		//system date or current date
		$sy=Date('Y');  
		$sm=Date('m');  
		$sd=Date('d');
// change days 
			$sdays=($sy-1)*365 + ($sm-1)*30 +$sd;
	// enter date 
		$exp=$_POST['exp'];
		$ey=Date('Y',strtotime($exp));
		$em=Date('m',strtotime($exp));
		$ed=Date('d',strtotime($exp));
	$edays=($ey-1)*365 + ($em-1)*30 +$ed;
	
$diff =($edays-$sdays);
		if($diff>=0)
		{
		return 'y';
		}
		else 
		{
		return 'n';
		}

	}
	else 
	{
		return 'n';
	}
} 

//details check 
function Detailcheck()
{	
$det=trim($_POST['det']);
	if(strlen($det)>0)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}

// photo check 
function photocheck()
{
	if($_FILES['m']['name']!='')
	{
		$fn=$_FILES['m']['name'];
		$ln=strlen($fn);
		$dot=strrpos($fn,".");
		$ext=substr($fn,$dot+1,$ln);
		$col=array('jpg','png','jpeg','bmp','jfif');
		if(in_array($ext,$col))
		{
			return 'y';
		}
		else 
		{
			return 'n';
		}
	}
}
//check GST
function gstcheck()
{
	$g=trim($_POST['g']);
	$gc='/^[0-9]{1,10}$/';
	if(preg_match($gc,$g))
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}

if(isset($_POST['s']))
{
	// name 
	if(namecheck()=='y')
	{
		$n=trim($_POST['n']);
	}
	else 
	{
		$ns="*** check name ";
	}
	// units
	if(unitscheck()=='y')
	{
		$u=trim($_POST['u']);
	}
	else 
	{
		$us="*** check units ";
	}
	
	
	// purchase rate
	if(purcheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** Enter valid Rate ";
	}

    // Dealer rate
	if(dealcheck()=='y')
	{
		$d=trim($_POST['d']);
	}
	else 
	{
		$ds="*** Enter valid Rate ";
	}

    // Retailer rate
	if(retcheck()=='y')
	{
		$ret=trim($_POST['ret']);
	}
	else 
	{
		$rets="*** Enter valid Rate ";
	}
    // batch
	if(batchcheck()=='y')
	{
		$b=trim($_POST['b']);
	}
	else 
	{
		$bs="*** check Batch ";
	}

	//mfg date check 
	if(mfgcheck()=='y')
	{
		$mfg=Date('Y-m-d',strtotime($_POST['mfg']));
	}
	else 
	{
		$mfgs="** check date";
	}
	
	 //exp date check 
	 if(expcheck()=='y')
	 {
	 	$exp=Date('Y-m-d',strtotime($_POST['exp']));
	 }
	 else 
	{
	 	$exps="** check date";
	 }


	// Details check 
	if(detailcheck()=='y')
	{
		$det=trim($_POST['det']);
	}
	else 
	{
		$dets="** check details";
	}	

	

	//Photo check
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
//GST check
	if(gstcheck()=='y')
	{
		$g=trim($_POST['g']);
	}
	else 
	{
		$gs="*** check gst ";
	}
	
	// all check 
	if(namecheck()=='y' && unitscheck()=='y'&& purcheck()=='y'&& dealcheck()=='y' && retcheck()=='y' && batchcheck()=='y' && Detailcheck()=='y' && photocheck()=='y' && gstcheck()=='y' && mfgcheck()=='y' && expcheck()=='y')
	{
		/* $r="name ".$n." unit ".$u." pur rate ".$p." deal check ".$d." ret. rate ".$sk." batch ".$q. "Details ".$det."GST : ".$g. "mfg : ".$mfg." Exp : ".$exp;
		echo $r; */
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='stock/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
		//echo '<br> <img src="'.$fa.'" width="100" height="100">';
	// MY SQL PART
		include"connection.php";
		$qs="insert into stock 
			(name ,unit ,prate ,drate ,rrate , batchno, mfgdate, expdate, detail, photo, gst )
			values('".$n."','".$u."','".$p."','".$d."','".$ret."','".$b."','".$mfg."','".$exp."','".$det."','".$fa."','".$g."')";

		$sqs=mysqli_query($cn,$qs);
	if($sqs)
		{
			$n=$ns=$u=$us=$p=$ps=$d=$ds=$ret=$rets=$b=$bs=$mfg=$mfgs=$exp=$exps=$g=$gs=$det=$dets=$m=$ms=""; // to clear form after sucess submit
			echo '<script> alert("STOCK ADD")</script>';
		}
	else 
		{
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

<form action="" method="POST" enctype="multipart/form-data">
    <h3 style="color: red;">ADD INVENTORY PORTFOLIO</h3>
PRODUCT NAME : <input type="text" name="n" value="<?php echo $n;?>"> 
<span style="color:red"><?php echo $ns;?></span>
<br><br>
UNITS : <input type="text" name="u" maxlength="10" value="<?php echo $u;?>"> 
<span style="color:red"><?php echo $us;?></span>
<br><br>
PUR. RATE : <input type="text" name="p" maxlength="10" value="<?php echo $p;?>"> 
<span style="color:red"><?php echo $ps;?></span>
<br><br>
D. RATE : <input type="text" name="d" maxlength="10" value="<?php echo $d;?>"> 
<span style="color:red"><?php echo $ds;?></span>
<br><br>
RET. RATE : <input type="text" name="ret" maxlength="10" value="<?php echo $ret;?>"> 
<span style="color:red"><?php echo $rets;?></span>
<br><br>
BATCH NO. : <input type="text" name="b" maxlength="10" value="<?php echo $b;?>"> 
<span style="color:red"><?php echo $bs;?></span>
<br><br>
 MFG date : 
<input type="date" name="mfg" value="<?php echo $mfg; ?>">
<span style="color:red"><?php echo $mfgs;?></span>
<br><br>
EXP date : 
<input type="date" name="exp" value="<?php echo $exp; ?>">
<span style="color:red"><?php echo $exps;?></span>
<br><br>
DETAILS : <textarea name="det"><?php echo $det;?></textarea>
<span style="color:red"><?php echo $dets;?></span>
<br><br>
PHOTO : <input type="file" name="m">
<span style="color:red"><?php echo $ms;?></span>
<br><br>
GST rate : <input type="text" name="g" maxlength="10" value="<?php echo $g;?>"> 
<span style="color:red"><?php echo $gs;?></span>
<br><br>
<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>
<hr color="red">

</div>
</div>
<div class="inventory">
<div class="col-md-4">
<div class="mai">
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
echo ' <h3 style="color:black">**Product List**</h3><br> <table border="1"> <tr bgcolor="#FDE8D0 ">
<th>Stock id </th><th> Name </th> 
<th> unit </th> <th>Purchase Rate</th> 
<th>Dealer Rate</th> <th>Retailer Rate</th> 
<th>Batch no. </th> <th>Manufact. Date</th> 
<th>exp. Date</th> <th>Details</th> 
<th>Photo</th> <th>GST</th> <th>DELETE</th>
<th>UPDATE</th>
</tr>'; 
		while($r=mysqli_fetch_array($sqs))
		{
			echo '<tr> <th>'.$r['sid'].'</th>';
			echo ' <th> <center>'.$r['name'].'</center></th>';
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
			echo ' <th><a class="delete" href="addelstock.php?sid='.$sid.'"> delete</a></th>';
			echo ' <th><a class="update"href="adupdatestock.php?sid='.$sid.'"> update</a></th>';
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
</div>

</center>
</div>
</div>
</div>
</div>