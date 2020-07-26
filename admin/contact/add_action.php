<?php 
	include '../includes/db.php';
	$data = array();
	$about = mysqli_real_escape_string($con, trim($_POST['about']));
	$address = $_POST['address'];
	$phone_number = $_POST['phone_number'];
	$mobile_number = $_POST['mobile_number'];
	$email = $_POST['email'];

	

	$exist = isExist($address, $con);

	if (!$exist) {
		$select = "INSERT INTO `address`(`about`, `address`, `phone_number`, `mobile_number`, `email`) VALUES ('".$about."', '".$address."', '".$phone_number."', '".$mobile_number."', '".$email."')";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Contact is Added";
		$data['location'] = 'contact/contact.php';
	}

	else{

		$data['success'] = false;
		$data['msg'] = $exist;
	}

	echo json_encode($data);


	function isExist($address, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from contact where address = '".$address."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This contact detail is already uploaded";
		}

		return $msg;
	}
 ?>