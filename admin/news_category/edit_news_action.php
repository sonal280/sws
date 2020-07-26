<?php 
	include '../includes/db.php';
	$data = array();
	$cat_id = mysqli_real_escape_string($con, trim($_POST['cat_id']));
	$cat_name = mysqli_real_escape_string($con, trim($_POST['cat_name']));
	$image = $_FILES['image']['name'];
	$target = '../upload/news_category/'.basename($image);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);

	// $exist = isExist($title, $con);

	if ($image) {
		$select = "UPDATE `news_category` SET `cat_name`='".$cat_name."',`cat_image`='".$image."' WHERE cat_id = '".$cat_id."'";
	}
	else{
		$select = "UPDATE `news_category` SET `cat_name`='".$cat_name."' WHERE cat_id = '".$cat_id."'";	
	}
		$query = mysqli_query($con, $select);
		if ($query) {
			// header('Location:add_news.php');
			echo "<script>alert('News Category is updated');
			 window.location.replace(\"news_category.php\")</script>";
		}
		
		// $data['success'] = true;
		// $data['msg'] = "News is Added";
		// $data['location'] = 'news/news.php';
	// }



	// else{

	// 	$data['success'] = false;
	// 	$data['msg'] = $exist;
	// }

	

	// echo json_encode($data);


	// function isExist($title, $con)
	// {
	// 	$msg = '';
	// 	$select = mysqli_query($con, "select * from news where title = '".$title."' ");
	// 	if (mysqli_num_rows($select)>0) {
	// 		$msg = "This Title is already uploaded";
	// 	}

	// 	return $msg;
	// }
 ?>