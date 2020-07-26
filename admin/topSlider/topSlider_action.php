<?php 
	include '../includes/db.php';
	session_start();
	$data = array();
	$addTitle = mysqli_real_escape_string($con, trim($_POST['addTitle']));
	$addDescription = mysqli_real_escape_string($con, trim($_POST['addDescription']));
	$addImage = $_FILES['addImage']['name'];
	$target = '../upload/topSlider/'.basename($addImage);
	move_uploaded_file($_FILES['addImage']['tmp_name'], $target);

	$exist = isExist($addTitle, $con);

	if (!$exist) {
		$select = "INSERT INTO `topslider`(`title`, `description`, `image`) VALUES ('".$addTitle."', '".$addDescription."', '".$addImage."')";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Thank You! Your Slider is Added!";
		$data['location'] = 'topSlider/topSlider.php';
	}

	else{

		$data['success'] = false;
		$data['msg'] = $exist;
	}

	echo json_encode($data);


	function isExist($addTitle, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from topslider where title = '".$addTitle."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This Title is already exist";
		}

		return $msg;
	}


 ?>