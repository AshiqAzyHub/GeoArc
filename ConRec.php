<?php
session_start();
ob_start();
$id=$_SESSION['id'];
//echo $id;

if(empty($_SESSION['id']))
{
//header("location:index.php?err=session not expired...");
}
?><html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Contractor Record</title>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-building-house'></i>
			<span class="text">GeoArc</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Admin Dashboard</span>
				</a>
			</li>
			<li>
				<a href="CusRec.php">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">Customer</span>
				</a>
			</li>
			<li>
				<a href="ArcRec.php">
					<i class='bx bx-arch' ></i>
					<span class="text">Architects</span>
				</a>
			</li>
			<li>
				<a href="ConRec.php">
					<i class='bx bxs-traffic-cone' ></i>
					<span class="text">Contractor</span>
				</a>
			</li>
			<li>
				<a href="Complaints.php">
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
			
			<a href="#" class="profile">
				<img src="images/4490381.png">
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
							<a href="dashboard.php">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="dashboard.php">Home</a>
						</li>
					</ul>
				</div>
<br>
<br>
<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>COntractors List</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
<table >
  <thead>
    <tr>
      <th>Sr No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone Number</th>
	  <th>Profile</th>
	   <th>Action</th>
    </tr>
  </thead>
  <?php 
 require 'config.php';
 $i=1;
 $sql="SELECT * from login where profile=3";
$query = mysqli_query($link,$sql);
 if(mysqli_num_rows($query)){

               while($row=mysqli_fetch_assoc($query)){
               ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['phone'];?></td>
	    <td>Contractor</td>
	  <td><a href="edit-user.php?id=<?php echo $row['id'];?>">Edit</a> | <a href="delete-user.php?id=<?php echo $row['id'];?>">Delete</a></td>
    </tr>
	<?php $i++;}}
	else{
		 echo "No record Found!";
		
	} ?>
  <tbody>

  </tbody>
</table> 
</div>
</body>
</html>