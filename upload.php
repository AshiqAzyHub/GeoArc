<?php 

if (isset($_POST['register']) && isset($_FILES['Certificate'])) {
	include "config.php";
    echo'<script>alert("hello");</script>';
	echo "<pre>";
	print_r($_FILES['Certificate']);
	echo "</pre>";

	$img_name = $_FILES['Certificate']['name'];
	$img_size = $_FILES['Certificate']['size'];
	$tmp_name = $_FILES['Certificate']['tmp_name'];
	$error = $_FILES['Certificate']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'Certificate/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO login(image) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");
	}

}else {
	header("Location: index.php");
}
