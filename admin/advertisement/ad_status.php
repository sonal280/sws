<?php 
	session_start();
	include '../includes/db.php';
	include '../session_check.php';
	$id = $_POST['id'];
	$status = $_POST['status'];
	
		$query = "UPDATE `advertisement` SET `flag`='".$status."' WHERE `add_id` = '".$id."'";
		$result = mysqli_query($con, $query);
		
	
 ?>