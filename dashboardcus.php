<?php
include 'config.php';
session_start();

$id= $_SESSION['username'];
require_once "config.php";
$errorMsg=NULL;
$registerMsg=NULL;
$sql = mysqli_query($link,"SELECT * from cushub join login on cushub.id=login.id where login.id = '$id'");
if(isset($_POST['Request'])) 
{
	$design = $_POST['design'];
	$soil = $_POST['soil']; 
	$altitude = $_POST['altitude'];
	$topography = $_POST['topography'];
	$price = $_POST['price'];
	$others  = $_POST['others']; 
	$plot = $_POST['plot'];
	$insert_stmt="INSERT INTO cushub (Designfor,Soil,Altitude,Topography,Price,Oth_spec,Plot_img,id) VALUES('$design','$soil','$altitude','$topography','$price','$others','$plot','$id')"; 
	mysqli_query($link,$insert_stmt);

header('location:dashboardcus.php');
}
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
    <title>CustomerHub</title>
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
          <div class="sidebar-user text-center"><a  href="javascript:void(0)">
			  <i data-feather="settings"></i></a>
			  <?php while($row = mysqli_fetch_array($sql)){ ?>
			  <img class="rounded-circle" src="Profile/<?php echo $row['Pro_pic']; ?>" height="100" width="100" alt="<?php echo $row['Pro_pic']; ?>">
			  
            <div class="badge-bottom"><span class="badge badge-primary"></span></div><a href="#">
              <h6 class="mt-4 f-20 f-w-600"><?php echo $row['username']; ?></h6></a>
           <div class="follow">
		   <?php } ?>
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


		
					<i class='bx bxs-dashboard' ></i>
					<span class="text"><h4>

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

			<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
.container {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: skyblue;  
  outline: none;  
}  
 div  {  
            padding: 10px 0;  
		  

         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}    
</style>  

			<form method="post">  
  <div class="container" >  
  <center>  <h2> New Request</h2> </center>  
  <hr>  <center>
  <div class="form-group">  
 		<label>   Design For  </label>   
		<div class="col-sm-6">
			<select name="design" style="width:100%;height:40px"class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">  
				<option value="1">House</option>  
				<option value="2">Appartment</option>  
				<option value="3">Swimming Pool</option>  
				<option value="4">Park</option>  
			</select>  
	</div>  
</div>
  <label> Soil type </label>   
<div class="col-sm-6">
			<select name="soil" style="width:100%;height:40px"class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">  
				<option value="1">Mud</option>  
				<option value="2">Sand</option>  
				<option value="3">Rock</option>  
				<option value="4">Wetland</option>  
			</select> </div>
<label> Altitude: </label>  
<div class="col-sm-6">
<input type="text" name="altitude" placeholder="Altitude" size="15" required />   </div>
<label> Topography: </label>    
<div class="col-sm-6">
<input type="text" name="topography" placeholder="Topography" size="15"required />  </div>
<label> Price</label>
<div class="col-sm-6">
<select name="price" style="width:100%;height:40px"class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">  
				<option value="1">1-5 Lakh</option>  
				<option value="2">5-10 Lakh</option>  
				<option value="3">10-50</option>  
				<option value="4">About 1 Cr</option> 
				</select> </div>
<label> Other Specifications</label>
<div class="col-sm-6">
<input type="text" name="others" placeholder="Other Specification" size="15"required />  
 </div>
<label> Upload Plot Image: </label>
<input type="file" name="plot">
<div>
	
 <div >
 <input type="submit"  name="Request" class="btn btn-outline-dark" value="Request">
 </div>
 </center>



					</ul>
				</div>
			</div>
		</main>
	</section>
	

	<script src="script.js"></script>
</body>
</html>