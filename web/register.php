<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Minimal-Art Admin - Dashboard  Form Validation </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../admin/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../admin/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../admin/assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="../admin/assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../admin/css/master_style.css">

	<link rel="stylesheet" href="../admin/css/skins/_all-skins.css">

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition skin-orange-light sidebar-mini">
<div class="wrapper ">

    <section class="content ">
     
     <!-- Basic Forms -->
     <div class="row">
        <div class="w-25"></div>
        <div class="col">
          <div class="box box-default ">
            <div class="box-header with-border">
              <h3 class="card-title"><center>Registration</center></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                
                <div class="col">
                	<form novalidate name="register" id="register" method="post">
          					<div class="form-group">
          						<h5>First Name <span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="text" name="firstName" id="firstName" class="form-control" required data-validation-required-message="This field is required"> </div>
          	
          					</div>
          					<div class="form-group">
          						<h5>Last Name <span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="text" name="lastName" id="lastName" class="form-control" required data-validation-required-message="This field is required"> </div>
          					</div>
          					<div class="form-group">
          						<h5>Mobile Number<span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="number" name="mobileNumber" id="mobileNumber" class="form-control" required data-validation-required-message="This field is required"> </div>
          					</div>
    
          					<div class="text-xs-right">
          						<button type="submit" class="btn btn-info">Submit</button>
          					</div>
          				</form>
                	
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="w-25"></div>
      </div>
      <!-- /.box -->
      
    </section>
   
  


	<!-- jQuery 3 -->
	<script src="../admin/assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../admin/assets/vendor_components/popper/dist/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../admin/assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Minimal-art Admin App -->
	<script src="../admin/js/template.js"></script>
	
	<!-- Minimal-art Admin for demo purposes -->
	<script src="../admin/js/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
	
	<!-- Form validator JavaScript -->
    <script src="../admin/js/pages/validation.js"></script>
    <script>
    ! function(window, document, $) {
        "use strict";
        $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(), $(".skin-square input").iCheck({
            checkboxClass: "icheckbox_square-green",
            radioClass: "iradio_square-green"
        }), $(".touchspin").TouchSpin(), $(".switchBootstrap").bootstrapSwitch();
    }(window, document, jQuery);
    </script>

    <script>
      $(function() {
        $('#register').validate({
          rules:{
            firstName:{
              required:true
            },
             lastName:{
              required:true
            },
             mobileNumber:{
              required:true,
              maxlength:10,
              minlength:10
            }
          }
        });
      })

      $('#register').on('submit', function(e) {
        e.preventDefault();
        var formData = $('#register').serialize();
          if ($('#register').valid()) {
            $.ajax({
              url:"request.php",
              method:"POST",
              data:formData,
              success:function(result) {
                var data = $.parseJSON(result);
                if (data.success) {
                  alert(data.msg);
                  window.location=data.location;

                }
                else{
                  alert(data.msg);
                }
              }
            })
          }
      })
    </script>
	
</body>
</html>
