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

	<title>AdminHub</title>
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
				<img src="images/admin.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard </h1>
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
				<!-- <a href="#" class="btn-download"> 
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
         

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Complaints</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User Name</th>
								<th>Date of complaint</th>
								<th>Complaint Against</th>
								<th>profile</th>
								<th>Action Status</th>
								
							</tr>
						</thead>
						<?php 
						$sql = "SELECT * from login where profile=2 or profile=3;";
						$query = mysqli_query($link,$sql);
						
						?>
						<tbody>
							<?php while($row = mysqli_fetch_array($query)){?>
							<tr>
								<td>
									<img src="img/people.png">
									<p><?php echo $row['name'] ?></p>
								</td>
								<td><?php echo $row['registerdate'] ?></td>
								<td><span ><?php if($row['profile']==3){echo"Contractor";}else if($row['profile']==2){echo"Architect";} ?></span></td>
								<td><span ><a href="Certificate/<?php echo $row['image']; ?>"><?php echo $row['image'];?></a></span></td>
								<td><a class="status completed" href="edit-user.php?id=8">Block</a> | <a class="status completed" href="delete-user.php?id=8">Deny</a></td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
	</section>
	

	<script src="script.js"></script>
</body>
</html>