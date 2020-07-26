<?php 
	include '../includes/db.php';
	$data = array();
	$title = mysqli_real_escape_string($con, $_POST['title']);
	$gallery_id = mysqli_real_escape_string($con, $_POST['gallery_id']);

	if (isset($_FILES['file']['name'])) {
		$file = $_FILES['file']['name'];
		$target = '../upload/gallery/'.basename($file);
		move_uploaded_file($_FILES['file']['tmp_name'], $target);
	}

	// $exist = isExist($file, $con);

	if ($file) {
		$select = "UPDATE gallery SET `title` = '".$title."', `image` = '".$file."' where g_id = '".$gallery_id."'";
	}
	else{
		$select = "UPDATE gallery SET `title` = '".$title."' where g_id = '".$gallery_id."'";
	}
		$query = mysqli_query($con, $select);
		$data['success'] = true;
		$data['msg'] = "New Image is Updated in Gallery";
		$data['location'] = 'gallery/gallery.php';

	// else{

	// 	$data['success'] = false;
	// 	$data['msg'] = $exist;
	// }

	echo json_encode($data);


	// function isExist($file, $con)
	// {
	// 	$msg = '';
	// 	$select = mysqli_query($con, "select * from gallery where image = '".$file."' ");
	// 	if (mysqli_num_rows($select)>0) {
	// 		$msg = "This image is already uploaded";
	// 	}

	// 	return $msg;
	// }
 ?>