<?php 
	include '../admin/includes/db.php';
	$data = array();
	$firstName = mysqli_real_escape_string($con, trim($_POST['firstName']));
	$lastName = mysqli_real_escape_string($con, trim($_POST['lastName']));
	$mobileNumber = $_POST['mobileNumber'];
	$username = $firstName;
	$password = rand(1000,9999);

	$exist = isExist($mobileNumber, $con);

	if (!$exist) {
		$select = "INSERT INTO `register`(`firstName`, `lastName`, `mobileNumber`, `username`, `password`) VALUES ('".$firstName."', '".$lastName."', '".$mobileNumber."', '".$username."', '".$password."')";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Registration Completed Successfully! Your username is ".$username." AND password is ".$password ;
		$data['location'] = 'advertisement.php';
	}

	else{

		$data['success'] = false;
		$data['msg'] = $exist;
	}

	echo json_encode($data);


	function isExist($mobileNumber, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from register where mobileNumber = '".$mobileNumber."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This number is already exist";
		}
		return $msg;
	}


 ?>