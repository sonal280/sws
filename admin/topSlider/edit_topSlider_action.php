<?php 
	include '../includes/db.php';
	session_start();
	$data = array();
	$editId = mysqli_real_escape_string($con, trim($_POST['editId']));
	$addTitle = mysqli_real_escape_string($con, trim($_POST['addTitle']));
	$addDescription = mysqli_real_escape_string($con, trim($_POST['addDescription']));
	$addImage = $_FILES['addImage']['name'];
	$target = '../upload/topSlider/'.basename($addImage);
	move_uploaded_file($_FILES['addImage']['tmp_name'], $target);

	// $exist = isExist($addTitle, $con);

	// if (!$exist) {
	if ($addImage) {
		$select = "UPDATE `topslider` SET `title`='".$addTitle."', `description`='".$addDescription."', `image`='".$addImage."' WHERE id= '".$editId."'";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Thank You! Your Slider is Edited!";
		$data['location'] = 'topSlider/topSlider.php';
	}
	else{
		$select = "UPDATE `topslider` SET `title`='".$addTitle."', `description`='".$addDescription."' WHERE id= '".$editId."'";
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Thank You! Your Slider is Edited!";
		$data['location'] = 'topSlider/topSlider.php';
	}
	// }

	// else{

	// 	$data['success'] = false;
	// 	$data['msg'] = $exist;
	// }

	echo json_encode($data);


	// function isExist($addTitle, $con)
	// {
	// 	$msg = '';
	// 	$select = mysqli_query($con, "select * from topslider where title = '".$addTitle."' ");
	// 	if (mysqli_num_rows($select)>0) {
	// 		$msg = "This Title is already exist";
	// 	}

	// 	return $msg;
	// }


 ?>