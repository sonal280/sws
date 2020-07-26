<?php 
	include '../includes/db.php';
	$data = array();
	$cat_name = mysqli_real_escape_string($con, trim($_POST['cat_name']));
	$cat_image = $_FILES['image']['name'];
	$target = '../upload/news_category/'.basename($cat_image);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);

	$exist = isExist($cat_name, $con);

	if (!$exist) {
		$select = "INSERT INTO `news_category`(`cat_name`, `cat_image`) VALUES ('".$cat_name."', '".$cat_image."')";
		$query = mysqli_query($con, $select);
		if ($query) {
			// header('Location:add_news.php');
			echo "<script>alert('News Category is added');
			 window.location.replace(\"news_category.php\")</script>";
		}
		
		// $data['success'] = true;
		// $data['msg'] = "News is Added";
		// $data['location'] = 'news/news.php';
	}
	else{
			// header('Location:add_news.php');
			echo "<script>alert('News is already Exist');
			 window.location.replace(\"add_news.php\")</script>";	
		}


	// else{

	// 	$data['success'] = false;
	// 	$data['msg'] = $exist;
	// }

	

	// echo json_encode($data);


	function isExist($cat_name, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from news_category where title = '".$cat_name."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This Title is already uploaded";
		}

		return $msg;
	}
 ?>