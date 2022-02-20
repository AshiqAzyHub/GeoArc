<?php
session_start();
include "config.php";



$user_id=intval($_GET['id']);

	
	$query="delete from `login` where id=$user_id";
	
	$res=mysqli_query($link,$query);
	if($res){
		$_SESSION['success']="Delete Successfully successfully!";
		header('Location:dashboard.php');
	}else{
		echo "Not Deleted , please try again!";
	}




?>