<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>CHHATTISGARH RAJYA RASHTRIYA MASIK PATRIKA</title>
  
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
  <link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
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
              <h3 class="card-title"><center>Advertisement</center></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                
                <div class="col">
                	<form novalidate name="advertise" id="advertise" method="post" enctype="multipart/form-data" action="">
          					<div class="form-group">
          						<h5>Add Title<span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="text" name="addTitle" id="addTitle" class="form-control hindi-input" data-validation-required-message="This field is required"> </div>
          					</div>
                    <div class="form-group">
                      <h5>Add Description<span class="text-danger">*</span></h5>
                      <div class="controls">
                        <textarea name="addDescription" id="addDescription" cols="30" rows="10" class="form-control hindi-input"></textarea>
                        <!-- <input type="text" name="addTitle" id="addTitle" class="form-control" data-validation-required-message="This field is required"> </div> -->
                    </div>
                    <div class="form-group">
                      <h5>Section<span class="text-danger">*</span></h5>
                      <div class="controls">
                        <select name="section" id="section" class="form-control">
                          <option value="topLeft">Top-Left</option>
                          <option value="topRight">Top-Right</option>
                          <option value="bottomLeft">Bottom-Left</option>
                          <option value="bottomRight">Bottom-Right</option>
                        </select>
                    </div>
          					<div class="form-group">
          						<h5>Start Date<span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="text" name="startDate" id="startDate" class="datepicker form-control" data-validation-required-message="This field is required"> </div>
          					</div>
          					<div class="form-group">
          						<h5>End Date<span class="text-danger">*</span></h5>
          						<div class="controls">
          							<input type="text" name="endDate" id="endDate" class="datepicker form-control" data-validation-required-message="This field is required"> </div>
          					</div>
                    <div class="form-group">
                      <h5>Category<span class="text-danger">*</span></h5>
                      <div class="controls">
                        <input type="text" name="category" id="category" class="form-control hindi-input" data-validation-required-message="This field is required"> </div>
                    </div>

                     <div class="form-group">
                        <h5>Advertisement Image<span class="text-danger">*</span></h5>
                        <div class="controls">
                           <input type="file" name="addImage" id="addImage" class="form-control" data-validation-required-message="This field is required" accept="image/pdf, image/jpeg, image/png">
                        </div>
                     </div>
    
          					<div class="text-xs-right">
          						<button type="submit" class="btn btn-info" name="submit">Submit</button>
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

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>  -->
      
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script> 
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
    
     <script type="text/javascript">
      google.load("elements", "1", { packages: "transliteration" });
      var control;
      function onLoad() {         
        var options = {
          sourceLanguage: google.elements.transliteration.LanguageCode.ENGLISH,
          
          destinationLanguage: [google.elements.transliteration.LanguageCode.HINDI],
          shortcutKey: 'ctrl+g',
          transliterationEnabled: true
        };                     
        var input = document.getElementsByClassName('hindi-input');
        control = new google.elements.transliteration.TransliterationControl(options);  
        //control.makeTransliteratable(['hindi-input']);   
        control.makeTransliteratable(input);   
      }
      google.setOnLoadCallback(onLoad);         
    </script>
    <script> 
        $(function() { 
            $('.datepicker').datepicker({
              autoclose: true,format: 'dd-mm-yyyy',orientation: "top left", todayHighlight: true,
              startDate: "+0d"
            }); 
        }); 
    </script> 

     <script>
      $(function() {
        $('#advertise').validate({
          rules:{
            addTitle:{
              required:true
            },
             startDate:{
              required:true
            },
             endDate:{
              required:true
            },
             category:{
              required:true
            },
             addImage:{
              required:true
            }
          }
        });
      })


      $('#advertise').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData($('#advertise')[0]);        
        if ($('#advertise').valid()) {
          $.ajax({
            url:"advertise_request.php",
            method:'POST',
            data:formData,
            contentType:false,
            processData:false,
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
