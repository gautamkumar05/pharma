
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<style>
@import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing:border-box;
}

body {
	content: "";
  background: url("signup.jpg") center center/cover no-repeat;
  font-family: "Poppins", sans-serif;
  background-color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100vh;
  color: black;
}

.container {
  min-width: 50%;
  min-height: 80%;
  border-radius: 23px;
  box-shadow: 0px 12px 24px 6px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  background-color: rgba(254, 232, 230  0.8);
  position: relative;
}

.container::after {
  content: "";
  position: absolute;
  top: 0;
  left: -50%;
  width: 100%;
  height: 100%;
  background-color: rgb(254, 232, 230 );
  box-shadow: 10em 0 7em 5em rgb(231, 209, 207 );
  transform: skew(35deg);
  z-index: -1;
}

.container::before {
  content: "";
  filter: hue-rotate(15deg);
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
}

ul {
  display: flex;
  margin-left: 2em;
}

li {
  list-style: none;
  padding-top: 1em;
  padding-bottom: 1em;
  padding-left: 5em;
  position: relative;
}

.blue {
  color: rgb(0, 128, 255);
  cursor: pointer;
}

.gray1 {

  color: white;
}

.gray {
  color: gray;
}

.blue-logo {
  width: 23px;
  height: 23px;
  border-radius: 50%;
  background-color: rgb(0, 128, 255);
  cursor: pointer;
  position: absolute;
  left: 20%;
}

.hero {
  padding-top: 2em;
  padding-left: 4em;
}

legend {
  color: gray;
  font-size: 12px;
}

.form {
  width: 40%;
  margin-top: 1em;
}

.input-icons {
  background-color: rgba(128, 128, 128, 0.1);
  padding: 8px 1em;
  margin-bottom: 0.5em;
  margin-right: 0.5em;
  border-radius: 18px;
  position: relative;
  border: 2px solid transparent;
}

.input-icons:hover {
  border: 2px solid rgb(0, 128, 255);
}

.icon-center {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.name {
  display: flex;
}

.id {
  width: 100%;
}

.input {
  background-color: transparent;
  border: none;
  outline: none;
  font-size: 16px;
  color: white;
  width: 100%;
  margin-right: 1em;
}

.footer {
  position: absolute;
  right: 3%;
  bottom: 3%;
  font-size: 3em;
  cursor: pointer;
}

.btn {
  padding: 0.7em 2em;
  color: white;
  border-radius: 23px;
  font-size: 1em;
  margin: 1em 0.5em;
  border: none;
  cursor: pointer;
}

.gray-btn {
  background-color: gray;
}

.blue-btn {
  background-color: #9C0F01 ;
}

.buttons {
  display: flex;
  justify-content: space-around;
}

@media only screen and (max-width: 900px) {
  .form {
    width: 90%;
  }

  li {
    padding-left: 1em;
  }

  .blue-logo {
    left: -10%;
  }

  .footer {
    display: none;
  }

  .container::after {
    width: 180vw;
    left: -150%;
  }

  .btn {
    padding: 0.5em 1em;
    font-size: 0.95em;
  }

  .hero {
    padding: 1em 1em;
    margin: auto;
  }

  .form {
    margin: 1em auto;
  }
}
.nav{
	background-color: #dc3545!important;
}
.navbar-brand
{
display: inline-block;
    padding-top: .3125rem;
    padding-bottom: .3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap;
}
.text-white{
	color: #fff !important;
}
.navbar-nav{
display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}
.mr-auto, mx-auto{
	margin-right: auto!important;
}
.nav-link{
    padding-right: .5rem;
    padding-left: .5rem;
	display: block;
    padding: .5rem 1rem;
}
.text-white
{
    color: #fff!important;
}
</style>

<div class="container">
        <div class="nav">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <span> <a class="navbar-brand text-white" href="#">
	
	<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="yellow" class="bi bi-capsule" viewBox="0 0 16 16">
	<path d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
  </svg>
	<b>YOUNKER PHARMA</b>
  </a></li> </span>
                <li class="nav-item"><a class="nav-link text-white" href="index.php">HOME</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="enquiry.php">ENQUIRY</a></li>
            </ul>
			<hr>
        </div>
        <div class="hero">
            <div class="text">
                <p class="gray"></p>
                <h1>Create new account <span class="blue"></span></h1>
                <p class="gray">Already A Member ? <span class="blue"> <a class="blue" href="login.php">Log in</a></span></p>
            </div>


<?php
$n=$ns=$e=$es=$pas=$psa=$p=$ps=$m=$ms=$a=$as="";
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

//check email 
function emailcheck()
{
	$e=trim($_POST['e']);
	$ec='/^[a-zA-Z0-9._]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
	if(preg_match($ec,$e) )
	{
		return 'y';
	}
	else 
	{
		return 'n';
	}
}
//check password
function passwordcheck()
{	
$pas=trim($_POST['pas']);
	if(strlen($pas)>=5)
	{
		return 'y'; 
	}
	else 
	{
		return 'n';
	}
	
}
//check phone
function phonecheck()
{
	$p=trim($_POST['p']);
	$pc='/^[0-9]{10,10}$/';
	if(preg_match($pc,$p) && $p[0]>=6 )
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
    else{
        return 'n';
    }
}


//address check 
function addresscheck()
{	
$a=trim($_POST['a']);
	if(strlen($a)>0)
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
	
	// email
	if(emailcheck()=='y')
	{
		$e=trim($_POST['e']);
	}
	else 
	{
		$es="*** check email ";
	}
	//password check 
	if(passwordcheck()=='y')
	{
		$pas=trim($_POST['pas']);
	}
	else 
	{
		$psa="*** Enter valid password";
	}	
	
	// phone
	if(phonecheck()=='y')
	{
		$p=trim($_POST['p']);
	}
	else 
	{
		$ps="*** check phone ";
	}
	//photo check
	if(photocheck()=='n')
	{
		$ms="** check photo";
	}
	
	//address check 
	if(addresscheck()=='y')
	{
		$a=trim($_POST['a']);
	}
	else 
	{
		$as="** check address";
	}	
	
	// all check 
	if(namecheck()=='y' && emailcheck()=='y'&& passwordcheck()=='y' && phonecheck()=='y' && addresscheck()=='y' && photocheck()=='y')
	{
		//$r="name ".$n." email ".$e."password".$pas. "phone ".$p." address ".$a;
		//echo $r;
		
		$fn=$_FILES['m']['name'];
		$ta=$_FILES['m']['tmp_name'];
		$fa='vendor/'.uniqid().$fn;
		move_uploaded_file($ta,$fa);
		//echo '<br> <img src="'.$fa.'" width="100" height="100">';

		//my sql start
		include"connection.php";
		$qv="insert into vendor 
			(name ,email ,password ,phone ,photo , address )
			values('".$n."','".$e."','".$pas."','".$p."','".$fa."','".$a."')";

		$sqv=mysqli_query($cn,$qv);
	if($sqv)
		{
			 $n=$ns=$e=$es=$pas=$psa=$p=$ps=$m=$ms=$a=$as=""; // to clear form after sucess submit
			echo '<script> alert("REGISTRATION SUCCESS")</script>';
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



            <div class="form">

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="id">
                    <div class="input-icons">
                        <legend for="name">Name</legend>
                        <div class="icon-center">
                        <input class="input" type="text" name="n" value="<?php echo $n;?>"> 
                            <span style="color:red"><?php echo $ns;?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="id">
                    <div class="input-icons">
                        <legend for="email">Email</legend>
                        <div class="icon-center">
                        <input class="input" type="text" name="e" value="<?php echo $e;?>"> 
                        <span style="color:red"><?php echo $es;?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="input-icons">
                        <legend for="password">Password</legend>
                        <div class="icon-center">
                        <input class="input" type="text" name="pas" maxlength="10" value="<?php echo $pas;?>"> 
                            <span style="color:red"><?php echo $psa;?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                <path
                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                            </svg>
                        </div>
                    </div>
                    <div class="input-icons">
                        <legend for="password">Phone</legend>
                        <div class="icon-center">
                        <input class="input" type="text" name="p" maxlength="10" value="<?php echo $p;?>"> 
                        <span style="color:red"><?php echo $ps;?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
</svg>
                        </div>
                    </div>
                    <div class="input-icons">
                        <legend for="photo">Photo/ID</legend>
                        <div class="icon-center">
                        <input class="input" type="file" name="m">
                            <span style="color:red"><?php echo $ms;?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
                        </div>
                    </div>
                    <div class="input-icons">
                        <legend for="address">Address</legend>
                        <div class="icon-center">
                        <textarea class="input" name="a"><?php echo $a;?></textarea>
                            <span style="color:red"><?php echo $as;?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
  <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
</svg>
                        </div>
                    </div>
                </div>

                <div class="buttons">
                    <input class="btn gray-btn" type="submit" name="s1" value="Clear">
                    <input class="btn blue-btn"type="submit" name="s" value="Create Account">
                
                </div>
            </div>
</form>
<!-- 
END OF FORM -->

        </div>
        <div class="footer">
            GK
        </div>
    </div>