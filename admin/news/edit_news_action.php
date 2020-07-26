<?php 
	include '../includes/db.php';
	$data = array();
	$nid = mysqli_real_escape_string($con, trim($_POST['nid']));
	$title = mysqli_real_escape_string($con, trim($_POST['title']));
	$news_category = mysqli_real_escape_string($con, trim($_POST['news_category']));
	$description = mysqli_real_escape_string($con, $_POST['description']);
	$publish_date = date('Y-m-d', strtotime($_POST['publish_date']));
	$image = $_FILES['image']['name'];
	$target = '../upload/news/'.basename($image);
	move_uploaded_file($_FILES['image']['tmp_name'], $target);

	// $exist = isExist($title, $con);

	if ($image) {
		$select = "UPDATE `news` SET `news_cat`='".$news_category."',`title`='".$title."',`description`='".$description."',`image`='".$image."',`publish_date`='".$publish_date."' WHERE nid = '".$nid."'";
	}
	else{
		$select = "UPDATE `news` SET `news_cat`='".$news_category."',`title`='".$title."',`description`='".$description."',`publish_date`='".$publish_date."' WHERE nid = '".$nid."'";	
	}
		$query = mysqli_query($con, $select);
		if ($query) {
			// header('Location:add_news.php');
			echo "<script>alert('News is updated');
			 window.location.replace(\"news.php\")</script>";
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