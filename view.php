<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM image ORDER BY id DESC";
          $res = mysqli_query($link,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($image = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="Certificate/<?=$image['image']?>">
             </div>
          		
    <?php } }?>
</body>
</html>