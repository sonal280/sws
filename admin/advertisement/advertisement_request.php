<?php 
session_start();
include('../session_check.php');
include'../includes/db.php';

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
<a href="advertisement/new_advertisement.php" title="Add Category" id="return-to-top" class="btn btn-warning"><i class="fa fa-plus" ></i></a>
<?php include('../includes/header.php'); ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../includes/navigation.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advertisement Request
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Advertisement</li>
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
		                <th>Username</th>
		                <th>Mobile Number</th>
		                <th>Title</th>
		                <th>Category</th>
		                <th>Start Date</th>
		                <th>End Date</th>
		                <th>Image</th>
		                <th>Action</th>
		            </tr>
	        	</thead>
	        	<tbody>
	            <?php 
	            	$select = "SELECT * FROM register r inner join advertisement a on a.rid=r.rid where a.rid=r.rid";
	            	$result = mysqli_query($con, $select);
	            	$i=1;
	            	while ($row = mysqli_fetch_assoc($result)) {
	            ?>
				<?php 
					
					
					$start_date = date('d-m-Y H:i A', strtotime($row['start_date']));
					$end_date = date('d-m-Y H:i A', strtotime($row['end_date']));

				 ?>
	            		<tr>
	            			<td><?=$i;?></td>
	            			<td><?php echo $row['firstName']." ".$row['lastName']; ?></td>
	            			<td><?php echo $row['mobileNumber']; ?></td>
	            			<td><?php echo $row['add_title']; ?></td>
	            			<td><?php echo $row['category']; ?></td>
	            			<td><?php echo $start_date; ?></td>
	            			<td><?php echo $end_date; ?></td>
	            			<td><?php echo $row['add_image']; ?></td>
	            			<td><?php if($row['flag'] == '0'){?>
	            				<a href="" class="btn btn-danger">Reject</a>
	            			<?php }
	            			elseif($row['flag'] == '1')
	            			{?>
	            				<a href="" class="btn btn-warning confirm-btn" data-value="<?=$row['add_id']?>" data-toggle="modal" data-target="#myModal">Pending</a>
	            			<?php }
	            			else{?>
	            				<a href="" class="btn btn-success">Approve</a>
	            			<?php
	            			}
	            			?>
	            			</td>
	            		</tr>
	            <?php	
	            $i++;
		        }
	             ?>
	        	</tbody>
   			 </table>
   		</div>
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
  	
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">
    
       <!-- Modal content-->
        <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Change Status</h4>
	        </div>
	        <div class="modal-body">
		    	<form method="POST" id="ad_status" action="">
		    		<input type="hidden" value="1" name="id" id="id">
			          <select class="form-control" name="status" id="status"> 
			          	<option value="2">Approve</option>
			          	<option value="0">Reject</option>
			          </select>
				      <div class="modal-footer">
				          <button type="submit" class="btn btn-default" name="change" id="change">Change</button>
				      </div>
				 </form>
		    </div>
	    </div>
    </div>
</div>



	
</div>

	  
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
	<script>
		$('.confirm-btn').on('click', function(event) {
			event.preventDefault();
			var value = $(this).attr('data-value');
			$val = $('input[name="id"]').val(value);

		});

		$(function(){
			$('#ad_status').on('submit',function(e){
				e.preventDefault();
				var id = $('#id').val();
				var status = $('#status').val();

				$.ajax({
					url:"advertisement/ad_status.php",
					method:'POST',
					data:{
						id:id, status:status
					},
					success:function(res) {
						$('#myModal').modal('hide');
						location.reload(true);
					}
				});
			});
		})
	</script>
	 
</body>

<!-- Mirrored from minimal-art-admin-templates.multipurposethemes.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Sep 2018 07:16:05 GMT -->
</html>
