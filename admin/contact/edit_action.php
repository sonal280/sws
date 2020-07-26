<?php 
	include '../includes/db.php';
	$data = array();
	$about = mysqli_real_escape_string($con, trim($_POST['about']));
	$cid = $_POST['cid'];
	$address = $_POST['address'];
	$phone_number = $_POST['phone_number'];
	$mobile_number = $_POST['mobile_number'];
	$email = $_POST['email'];


	$update = "UPDATE `address` SET `about`='".$about."',`address`='".$address."',`phone_number`='".$phone_number."',`mobile_number`='".$mobile_number."',`email`='".$email."' WHERE cid = '".$cid."'";

	$query = mysqli_query($con, $update);
	$data['success'] = true;
	$data['msg'] = "Contact is Edited";
	$data['location'] = 'contact/contact.php';

	echo json_encode($data);
 ?>