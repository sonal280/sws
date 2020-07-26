<?php 
	include '../includes/db.php';
	$data = array();
	$title = mysqli_real_escape_string($con, trim($_POST['title']));
	$cat_name = mysqli_real_escape_string($con, trim($_POST['news_category']));
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$publish_date = date('Y-m-d', strtotime($_POST['publish_date']));
	$image = $_FILES['image']['name'];
	$target = '../upload/news/'.basename($image);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);

	$exist = isExist($title, $con);

	if (!$exist) {
		$select = "INSERT INTO `news`(`news_cat`,`title`,`description`, `image`, `publish_date`) VALUES ('".$cat_name."','".$title."', '".$description."', '".$image."', '".$publish_date."')";
		$query = mysqli_query($con, $select);
		if ($query) {
			// header('Location:add_news.php');
			echo "<script>alert('News is added');
			 window.location.replace(\"news.php\")</script>";
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


	function isExist($title, $con)
	{
		$msg = '';
		$select = mysqli_query($con, "select * from news where title = '".$title."' ");
		if (mysqli_num_rows($select)>0) {
			$msg = "This Title is already uploaded";
		}

		return $msg;
	}
 ?>