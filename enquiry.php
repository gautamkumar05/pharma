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

      <li class="nav-item">
        <a class="nav-link text-white" href="index.php">HOME</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="vendorreg.php">SIGNUP</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="login.php">LOGIN</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-white" href="enquiry.php">ENQUIRY</a>
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
		color: black; background-color:rgba(226, 249, 252,0.4);
	}
	.yy
	{
		background:transparent; color:black;border: 2px solid;
		text-align: center;box-shadow: 5px 5px black;

	}
	</style>
<div class="fluid-container">
<div class="row">
<div class="col-md-6 offset-md-3">
<div class="main">
	<center>

	<?php
$name=$ns=$email=$es=$phone=$ps=$message=$ms=$check="";
//check NAME
function namecheck()
{
	$name=trim($_POST['name']);
	$nc='/^[A-Za-z ]*$/';
	if(preg_match($nc,$name) && strlen($name)>0)
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//PHONE CHECK
function phonecheck()
{
	$phone=trim($_POST['phone']);
	$pc='/^[0-9]{10,10}$/';
	if(preg_match($pc,$phone) && $phone[0]>=6 )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//EMAIL CHECK
function emailcheck()
{
	$email=trim($_POST['email']);
	$ec='/^[a-zA-Z0-9._]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(preg_match($ec,$email) )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//MESSAGE CHECK
function messagecheck()
{	
$message=trim($_POST['message']);
	if(strlen($message)>0)
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
		$name=trim($_POST['name']);
	}
	else 
	{
		$ns="*** check name ";
	}

// phone
	if(phonecheck()=='y')
	{
		$phone=trim($_POST['phone']);
	}
	else 
	{
		$ps="*** check phone ";
	}
//Email
    if(emailcheck()=='y')
	{
		$email=trim($_POST['email']);
	}
	else 
	{
		$es="*** check email ";
	}
//Message
    if(messagecheck()=='y')
    {
        $message=trim($_POST['message']);
    }
    else 
    {
        $ms="*** Enter correct message";
    }
//all valid 
if(namecheck()=='y' && phonecheck()=="y" && emailcheck()=="y" && messagecheck()=="y")
{
    //$r="name ".$name."  PHONE :-".$phone."  Email:- ".$email."  Message :- ".$message;
    //echo $r;
	//my sql start
	$dt=Date('Y-m-d');
	include"connection.php";
	$qe="insert into enquiry 
		(name ,phone ,email , message, date )
		values('".$name."','".$phone."','".$email."','".$message."','".$dt."')";

	$sqe=mysqli_query($cn,$qe);
if($sqe)
	{
		$name=$ns=$email=$es=$phone=$ps=$message=$ms=""; // to clear form after sucess submit
		echo '<script> alert("THANK YOU..VISIT AGAIN")</script>';
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
	<br><br><br>
    <h1><b>ENQUIRY</b></h1><br>
Name : <input type="text" name="name" value="<?php echo $name;?>" class="yy"> 
<span style="color:red"><?php echo $ns;?></span>

<br><br>
Phone : <input type="text" name="phone" maxlength="10" value="<?php echo $phone;?>"class="yy"> 
<span style="color:red"><?php echo $ps;?></span>

<br><br>
Email : <input type="text" name="email" value="<?php echo $email;?>"class="yy"> 
<span style="color:red"><?php echo $es;?></span>

<br><br>
Message : <textarea name="message"class="yy"><?php echo $message;?></textarea>
<span style="color:red"><?php echo $ms;?></span>

<br><br>

<input type="submit" name="s">
<input type="submit" name="s1" value="clear">
</form>

</center>
</div>
</div>
</div>
</div>


<img src="enqimg.jpg" style="top:0%;left:0%;width:100%;height:100%;position:fixed;
z-index:-10; opacity: 0.7;">