<?php include "config.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Requests</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">GeoArc</span>
		</a>

		<header class="main-nav">
          <div class="sidebar-user text-center"><a  href="javascript:void(0)"><i data-feather="settings"></i></a><img class="rounded-circle" src="images/gpic.jpg" height="100" width="100" alt="">
            <div class="badge-bottom"><span class="badge badge-primary"></span></div><a href="#">
              <h6 class="mt-4 f-20 f-w-600">Alex</h6></a>
           <div class="follow">
                          <ul class="follow-list">
                            <li>
                              <div class="follow-num counter">Address</div><span>$address</span>
                            </li>
                            <li>
                              <div class="follow-num counter">Email</div><span>$email</span>
                            </li>
                            <li>
                              <div class="follow-num counter">Phone no</div><span>$phone</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
          </div>
		  


		 

		<ul class="side-menu top">
			<li class="active">
				<a href="dashboardcus.php">
				<!-- <?php
  
  $_SESSION["username"]=$username;
?> -->

		
					<i class='bx bxs-dashboard' ></i>
					<span class="text"><h4>
						<!-- <?php 
    echo $_SESSION['username'];  
?> -->
 Dashboard</h4></span>
				</a> 
			</li>
			<li>
				<a href="CusReq.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Requests</span>
				</a>
			</li>
			<li>
				<a href="dashgallery.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Design Gallery</span>
				</a>
			</li>
			<li>
				<a href="chat.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Chat</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Complaints</span>
				</a>
			</li>
		
		</ul>
		<ul class="side-menu">
		<!--	<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a> -->
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

  

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!--<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>-->
			<a href="#" class="profile">
				<img src="images/cus.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!--<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>-->
			</div>

			<ul class="box-info" >
			  <?php
			   $cust = mysqli_query($link,"SELECT * FROM `cushub` where profile=1");
			   $count_cust = mysqli_num_rows($cust);

              $arc = mysqli_query($link,"SELECT * FROM `cushub` where profile=2");
              $count_arc = mysqli_num_rows($arc);

              $cont = mysqli_query($link,"SELECT * FROM `cushub` where profile=3");
              $count_cont = mysqli_num_rows($cont);

			  $total = mysqli_query($link,"SELECT profile FROM `cushub`");
              $count_total = mysqli_num_rows($total);
			  ?>
				
					<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">Total Requests <br> <p><?php echo $count_total;?></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">Accepted Requests<br> <p><?php echo $count_cust;?></p>
					</span>
				</li>
				
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">Pending Requests <br> <p><?php echo $count_arc;?></p>
					</span>
				</li>
			
				
				
			</ul>
</div>

			
		</main>
	</section>
	

	<script src="script.js"></script>
</body>
</html>