<?php 
	include '../includes/db.php';
	$data = array();
	$magazine_id = mysqli_real_escape_string($con, trim($_POST['magazine_id']));
	$magazine_name = mysqli_real_escape_string($con, trim($_POST['magazine_name']));
	$magazine_status = $_POST['magazine_status'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	if (isset($_FILES['file']['name'])) {
		$file = $_FILES['file']['name'];
		$target = '../upload/pdf/'.basename($file);
		move_uploaded_file($_FILES['file']['tmp_name'], $target);
	}

	if (isset($_FILES['cover_image']['name'])) {
		$cover_image = $_FILES['cover_image']['name'];
		$target = '../upload/cover_image/'.basename($cover_image);
		move_uploaded_file($_FILES['cover_image']['tmp_name'], $target);
	}

	// $exist = isExist($file, $con);

		if (!empty($file) && !empty($cover_image)) {
			$select = "UPDATE `magazine` SET `magazine_name`='".$magazine_name."',`magazine_status`='".$magazine_status."',`cover_image`='".$cover_image."',`magazine_pdf`='".$file."',`magazine_month`='".$month."',`magazine_year`='".$year."' WHERE `magazine_id` = '".$magazine_id."'";
		}
		elseif ($cover_image) {
			$select = "UPDATE `magazine` SET `magazine_name`='".$magazine_name."',`magazine_status`='".$magazine_status."',`cover_image`='".$cover_image."',`magazine_month`='".$month."',`magazine_year`='".$year."' WHERE `magazine_id` = '".$magazine_id."'";
		}
		elseif (!empty($file)) {
			$select = "UPDATE `magazine` SET `magazine_name`='".$magazine_name."',`magazine_status`='".$magazine_status."',`magazine_pdf`='".$file."',`magazine_month`='".$month."',`magazine_year`='".$year."' WHERE `magazine_id` = '".$magazine_id."'";
		}
		else{
		$select = "UPDATE `magazine` SET `magazine_name`='".$magazine_name."',`magazine_status`='".$magazine_status."',`magazine_month`='".$month."',`magazine_year`='".$year."' WHERE `magazine_id` = '".$magazine_id."'";
		}
		$query = mysqli_query($con, $select);

		$data['success'] = true;
		$data['msg'] = "Magazine is Updated";
		$data['location'] = 'magazine/magazine.php';
	

	// else{

	// 	$data['success'] = false;
	// 	$data['msg'] = $exist;
	// }

	echo json_encode($data);


	// function isExist($file, $con)
	// {
	// 	$msg = '';
	// 	$select = mysqli_query($con, "select * from magazine where magazine_pdf = '".$file."' ");
	// 	if (mysqli_num_rows($select)>0) {
	// 		$msg = "This magazine is already uploaded";
	// 	}

	// 	return $msg;
	// }
 ?>