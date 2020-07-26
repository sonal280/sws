<?php 
	include '../includes/db.php';
	session_start();
	$data = array();
	$addTitle = mysqli_real_escape_string($con, trim($_POST['addTitle']));
	$addDescription = mysqli_real_escape_string($con, trim($_POST['addDescription']));
	$section = mysqli_real_escape_string($con, trim($_POST['section']));
	$startDate = date('Y-m-d', strtotime($_POST['startDate']));
	$endDate = date('Y-m-d', strtotime($_POST['endDate']));
	$category = mysqli_real_escape_string($con, trim($_POST['category']));
	$addImage = $_FILES['addImage']['name'];
	$target = '../upload/'.basename($addImage);
	move_uploaded_file($_FILES['addImage']['tmp_name'], $target);

	$exist = isExist($addTitle, $con);

	if (!$exist) {
		$select = "INSERT INTO `advertisement`(`add_title`, `addDescription`, `section`, `start_date`, `end_date`, `category`, `add_image`, `flag`) VALUES ('".$addTitle."', '".$addDescription."', '".$section."', '".$startDate."', '".$endDate."', '".$category."', '".$addImage."', 1)";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Thank You! Your advertisement Process is Completed successfully!";
		$data['location'] = 'advertisement/advertisement_request.php';
	}

	else{

		$data['success'] = false;
		$data['msg'] = $exist;
	}

	echo json_encode($data);


	function isExist($addTitle, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from advertisement where add_title = '".$addTitle."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This Title is already exist";
		}

		return $msg;
	}


 ?>