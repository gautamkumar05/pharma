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
        width: 240px;
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
        background: #f5f5f5;
        min-height: 100vh;
        width: calc(100% - 240px);
        left: 240px;
        transition: all 0.5s ease;
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
        left: 240px;
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
        background: #2697FF;
        right: 5px;
        top: 50%;
        transform: translateY(-50%);
        border-radius: 4px;
        line-height: 40px;
        text-align: center;
        color: #fff;
        font-size: 22px;
        transition: all 0.4 ease;
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
        nav .sidebar-button .dashboard,
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
                <a href="admin.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="adbooking.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Booking</span>
                </a>
            </li>
            <li>
                <a href="adstock.php">
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
                <span class="dashboard">Dashboard</span>
            </div>
           <!-- <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div> !-->
            <div class="profile-details">
            <img src="pic.jpg" alt="">
                <span class="admin_name">ADMIN : ARGUS</span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <div class="home-content">
            <div class="overview-boxes">
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Order</div>
                        <div class="number">
                                        <?php
                                        include"connection.php";
                                        $q="select * from booking";
                                        $sq=mysqli_query($cn,$q);
                                        $book=0;
                                        while($r=mysqli_fetch_array($sq))
                                        {
                                          $book++;
                                        }
                                        echo '<br>'.$book;
                                        ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bx-cart-alt cart'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Product</div>
                        <div class="number">
                                        <?php
                                        include"connection.php";
                                        $q="select * from stock";
                                        $sq=mysqli_query($cn,$q);
                                        $stk=0;
                                        while($r=mysqli_fetch_array($sq))
                                        {
                                          $stk++;
                                        }
                                        echo '<br>'.$stk;
                                        ?>

                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <i class='bx bxs-cart-add cart two'></i>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Vendor</div>
                        <div class="number">
                                        <?php
                                           include"connection.php";
                                           $q="select * from vendor";
                                           $sq=mysqli_query($cn,$q);
                                           $vnd=0;
                                           while($r=mysqli_fetch_array($sq))
                                           {
                                             $vnd++;
                                           }
                                           echo '<br>'.$vnd;
                                            ?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bx bxs-cart-add cart three" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    </svg>
                </div>
                <div class="box">
                    <div class="right-side">
                        <div class="box-topic">Total Enquiry</div>
                        <div class="number">
                        <?php
include"connection.php";
$q="select * from enquiry";
$sq=mysqli_query($cn,$q);
$enq=0;
while($r=mysqli_fetch_array($sq))
{
  $enq++;
}
echo '<br>'.$enq;
?>
                        </div>
                        <div class="indicator">
                            <i class='bx bx-up-arrow-alt'></i>
                            <span class="text">Up from yesterday</span>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bx bxs-cart-add cart two" viewBox="0 0 16 16">
  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 4.697v4.974A4.491 4.491 0 0 0 12.5 8a4.49 4.49 0 0 0-1.965.45l-.338-.207L16 4.697Z"/>
  <path d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z"/>
</svg>
                </div>
            </div>
        </div>

<!-- CHART CODE !-->
        <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      var enq=<?php echo $enq;  ?>;
      var book=<?php echo $book;  ?>;
      var vnd=<?php echo $vnd;  ?>;
      var stk=<?php echo $stk;  ?>;


      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['record', 'no. of record'],
          ['ENQUIRY = '+enq,     enq],
          ['BOOKING = '+book,      book],
          ['VENDOR = '+vnd,  vnd],
          ['PRODUCT = '+stk, stk]
        ]);

        var options = {
          title: 'TOTAL RECORD TILL DATE',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }


    </script>
  </head>
  <body>
    <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
  </body>
</html>
           
    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function() {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        }
    </script>

</body>

</html>