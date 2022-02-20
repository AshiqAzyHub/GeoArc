<?php
require_once "config.php";
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <title>Gallery</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="../../css2.css?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-1.css?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="../../css2-2.css?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  
   <!-- Font Awesome-->
   <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="css/feather-icon.css">
    <!-- Plugins css start-->
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link id="color" rel="stylesheet" href="css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" href="style.css">



	<title>CustomerHub</title>
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
				<a href="#">
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
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Requests</span>
				</a>
			</li>
			<li>
				<a href="#">
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
			</div>

            <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h5>IMAGE GALLERY</h5>
                  </div>
                  <div class="gallery my-gallery card-body row" itemscope="">
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Farm House.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Farm House.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Farm House</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Modern House.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Modern House.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">MOdern House</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Apartment.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Apartment.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">8xAppartment</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Appartment2.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Appartment2.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">5xAppartment</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Swimmingpool1.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Swimmingpool1.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Oval Swimming Pool</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Swimmingpool2.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Swimmingpool2.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Rectangular Swimming Pool</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="DashGallery/Park.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="DashGallery/Park.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Park</figcaption>
                    </figure>
                    <!-- <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="#" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/08.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Image caption  10</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/09.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/09.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Image caption  11</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/010.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/010.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Image caption  12</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/011.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/011.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Image caption  11</figcaption>
                    </figure>
                    <figure class="col-xl-3 col-md-4 xl-33" itemprop="associatedMedia" itemscope=""><a href="../assets/images/big-lightgallry/012.jpg" itemprop="contentUrl" data-size="1600x950"><img class="img-thumbnail" src="../assets/images/lightgallry/012.jpg" itemprop="thumbnail" alt="Image description"></a>
                      <figcaption itemprop="caption description">Image caption  12</figcaption>
                    </figure> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Root element of PhotoSwipe. Must have class pswp.-->
          <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
              <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
              </div>
              <div class="pswp__ui pswp__ui--hidden">
              </div>
            </div>
          </div>		
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>