<?php 
	session_start();
	include('../session_check.php');
	include'../includes/db.php';

	if (isset($_REQUEST['magazine_id'])) {
		$delete = "DELETE FROM magazine WHERE magazine_id = '".$_REQUEST['magazine_id']."'";
		$result = mysqli_query($con, $delete);
		if ($result) {
			echo "<script>alert('Your Magazine is deleted');</script>";
			echo "<script>window.location('magazine.php')</script>";
		}
		// echo "<script>location.reload();</script>";
	}

 ?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from minimal-art-admin-templates.multipurposethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Sep 2018 07:15:22 GMT -->
<head>
    <meta charset="utf-8">
    <!-- <base href="http://localhost/sws/admin/"> -->
      <?php include '../includes/base_url.php'; ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Dashboard</title>
    
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
	
	<!-- font awesome -->
	<link  rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">
	
	<!-- ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.css">
	
	<!-- theme style -->
	<link rel="stylesheet" href="css/master_style.css">
	
	<!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">
	
	<!-- jvectormap -->
	<link rel="stylesheet" href="assets/vendor_components/jvectormap/jquery-jvectormap.css">
	
	<!-- Morris charts -->
	<link rel="stylesheet" href="assets/vendor_components/morris.js/morris.css">
	
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
   	<style type="text/css">
  #return-to-top {
    position: fixed;
    bottom: 63px;
    right: 20px;
    background: #071c33;
    width: 50px;
    height: 50px;
    display: block;
    text-decoration: none;
    -webkit-border-radius: 35px;
    -moz-border-radius: 35px;
    border-radius: 35px;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    z-index: 500;
  }
  #return-to-top i {
      color: #fff;
      margin: 0;
      position: relative;
      left: 0px;
      top: 9px;
      font-size: 19px;
      -webkit-transition: all 0.3s ease;
      -moz-transition: all 0.3s ease;
      -ms-transition: all 0.3s ease;
      -o-transition: all 0.3s ease;
      transition: all 0.3s ease;
  }
  #return-to-top:hover {
      background: #ffbf36;
  }
  #return-to-top:hover i {
      color: #fff;
      /*top: 5px;*/
      -webkit-transform: rotate(360000deg);
    -ms-transform: rotate(360000deg);
    transform: rotate(360000deg);
  }
</style> 
  </head>

<body class="hold-transition skin-orange-light sidebar-mini">
<div class="wrapper">
<a href="magazine/new_magazine.php" title="Add Category" id="return-to-top" class="btn btn-warning"><i class="fa fa-plus" ></i></a>
<?php include('../includes/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../includes/navigation.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Magazine
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Magazine</li>
      </ol>
    </section>

    <section class="content">
    <!-- Main content -->
    
      <div class="box">
      	<div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
		            <tr>
		                <th>S. No.</th>
		                <th>Magazine Name</th>
		                <th>Magazine</th>
		                <th>Month</th>
		                <th>Year</th>
		                <th>Created at</th>
		                <th>Action</th>
		            </tr>
	        	</thead>
	        	<tbody>
	            <?php 
	            	$select = "SELECT * FROM magazine order by magazine_id desc";
	            	$result = mysqli_query($con, $select);
	            	$i=1;
	            	while ($row = mysqli_fetch_assoc($result)) {
	            ?>
				<?php 
					
					
					$t2 = date('d-m-Y H:i A', strtotime($row['created_at']));

				 ?>
	            		<tr>
	            			<td><?=$i;?></td>
	            			<td><?php echo $row['magazine_name']; ?></td>
	            			<td><?php echo $row['magazine_pdf']; ?></td>
	            			<td><?php echo $row['magazine_month']; ?></td>
	            			<td><?php echo $row['magazine_year']; ?></td>
	            			<td><?php echo $t2 ?></td>
	            			<td><a href="magazine/edit_magazine.php?editid=<?=$row['magazine_id']?>" class="btn btn-warning">Edit</a>  <a href="magazine/magazine.php?magazine_id=<?=$row['magazine_id']?>" class="btn btn-danger" onclick = "return confirm('Are you sure want to delete')">Delete</a></td>
	            		</tr>
	            <?php	
	            $i++;
		        }
	             ?>
	        	</tbody>
   			 </table>
   		</div>
   	  </div>
      <div id="myModal" class="modal fade" role="dialog">
		  	<form action="" method="post">
			  	<div class="modal-dialog">

			    <!-- Modal content-->
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        	<h4 class="modal-title">Add New Category</h4>
				      	</div>
				     	<div class="modal-body">
				        	<div class="row">
				          		<div class="col-lg-6"><label for="">Category Name</label></div>
				          		<div class="col-lg-6"><input type="text" class="form-control" name="cat_name">
				          		</div>
				        	</div>

				        	<div class="row">
				          		<div class="col-lg-6"><label for="">Category Name</label></div>
				          		<div class="col-lg-6">
				          		<select class="form-control select2" style="width: 100%;">
                  					<option selected="selected" value="1">Active</option>
                  					<option value="0">Deactive</option>
             					</select>
				          		</div>
				        	</div>
				    	</div>
				    	<div class="modal-footer">
				            <button type="submit" class="btn btn-default" name="save">Save</button>
				            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				    	</div>
					</div>
				</div>
			</form>
	  </div>
		 <button id="up" type="button" style="display: none" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal2">Add Category</button>

	<div id="myModal2" class="modal fade" role="dialog">
			  	<form action="" method="post">
				  	<div class="modal-dialog">

				    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Edit Category Name</h4>
					      	</div>
					      	<?php 
						      	$select = "SELECT * FROM `category` WHERE cat_id='".$_REQUEST['editid']."'";
						      	$result = mysql_query($select, $con);
						      	$rr = mysql_fetch_assoc($result); 
	            			?>
					     	<div class="modal-body">
					        	<div class="row">
					          		<div class="col-lg-6"><label for="">Category Name</label></div>
					          		<div class="col-lg-6"><input type="text" class="form-control" name="up_cat_name" value="<?=$rr['cat_name']?>">
					          		</div>
					        	</div>

					        	<br>
				        	<div class="row">
				          		<div class="col-lg-6"><label for="">Status</label></div>
				          		<div class="col-lg-6">
				          		<select class="form-control select2" style="width: 100%;" name="up_cat_status">
				          		<?php 
		          					$query = "SELECT * FROM `category`";
		          					$result = mysql_query($query, $con);
		          					if (mysql_num_rows($result)>0) {
		          						while ($row1 = mysql_fetch_assoc($result)) {
		          							?>
                  					<option selected="selected" value="<?=$row1['cat_status']?>"><?php echo $row1['cat_status'] ?>	</option>

                  					<?php 
                  				}}

                  					 ?>
                  					
             					</select>
				          		</div>
				        	</div>

					        	<!-- <div class="row">
					          		<div class="col-lg-6"><label for="">Category Status</label></div>
					          		<div class="col-lg-6"><input type="text" class="form-control" name="up_cat_status" value="<?=$rr['cat_status']?>">
					          		</div>
					        	</div>

					        	<div class="row">
					          		<div class="col-lg-6"><label for="">Cover Image</label></div>
					          		<div class="col-lg-6"><input type="file" class="form-control" name="up_cover_image" value="<?=$rr['cover_image']['name']?>">
					          		</div>
					        	</div> -->
					    	</div>
					    	<div class="modal-footer">
					            <button type="submit" class="btn btn-default" name="update">Update</button>
					            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					    	</div>
						</div>
					</div>
				</form>
	</div>
</section>
	
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('../includes\footer.php') ?>
  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  
  
</div>
<!-- ./wrapper -->
  	
  	
	  
	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
	<!-- popper -->
	<script src="assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>	
	
	<!-- ChartJS -->
	<script src="assets/vendor_components/chart-js/chart.js"></script>
	
	<!-- Sparkline -->
	<script src="assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
	
	<!-- jvectormap -->
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>	
	<script src="assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>	
	
	<!-- Morris.js charts -->
	<script src="assets/vendor_components/raphael/raphael.min.js"></script>
	<script src="assets/vendor_components/morris.js/morris.min.js"></script>
	
	<!-- Slimscroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Minimal-art Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Minimal-art Admin dashboard demo (This is only for demo purposes) -->
	<script src="js/pages/dashboard.js"></script>
	
	<!-- Minimal-art Admin for demo purposes -->
	<script src="js/demo.js"></script>
	<script src="assets/vendor_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendor_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
	  
    
    <!-- start - This is for export functionality only -->
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.flash.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/jszip.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/pdfmake.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/ex-js/vfs_fonts.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.php5.min.js"></script>
    <script src="assets/vendor_plugins/DataTables-1.10.15/extensions/Buttons/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->
	
	<!-- Minimal-art Admin for Data Table -->
	<script src="js/pages/data-table.js"></script> 
	<?php 
  	if (isset($_REQUEST['editid']) && $_REQUEST['editid']!="") {
  	 	?>
  	 	<script type="text/javascript">
  	 		document.getElementById("up").click();
  	 	</script><?php
  	 } ?>
	 
</body>

<!-- Mirrored from minimal-art-admin-templates.multipurposethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Sep 2018 07:16:05 GMT -->
</html>
