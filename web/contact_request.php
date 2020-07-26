<?php 
	include '../admin/includes/db.php';
	$data = array();
	$name = mysqli_real_escape_string($con, trim($_POST['name']));
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$message = $_POST['message'];


	$select = "INSERT INTO `contact`(`name`, `email`, `telephone`, `message`) VALUES ('".$name."', '".$email."', '".$telephone."', '".$message."')";
	$query = mysqli_query($con, $select);

	$data['success'] = true;
	$data['msg'] = "Thank you for showing your concern!";


	echo json_encode($data);
 ?>