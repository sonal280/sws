<?php 
session_start();
include('../includes/db.php');
include('../session_check.php');
?>

<!DOCTYPE html>
<html lang="en">

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
<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.css">

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">

<!-- font awesome -->
<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.css">

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
<link href= 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
 
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

</head>

<body class="hold-transition skin-orange-light sidebar-mini">
<?php include('../includes/header.php') ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php include('../includes/navigation.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Advertisement
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="category.php">Advertisement</a></li>
        <li class="breadcrumb-item active">Add New Magazine</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content ">
     
     <!-- Basic Forms -->
     <div class="row">
        <div class="w-55"></div>
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
    
                    <div class="text-xs-right w-50">
                      <button type="submit" class="btn btn-info w-100" name="submit">Submit</button>
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
    <!-- /.content -->
  </div>
<!-- ./wrapper -->
  

<!-- jQuery 3 -->
<script src="assets/vendor_components/jquery/dist/jquery.js"></script>
<!-- popper -->
<script src="assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>  

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
 
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
    
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script> 
  <!-- Form validator JavaScript -->
<script src="../admin/js/pages/validation.js"></script>
  <script> 
        $(function() { 
            $('.datepicker').datepicker({
              autoclose: true,format: 'dd-mm-yyyy',orientation: "top left", todayHighlight: true,
              startDate: "+0d"
            }); 
        }); 
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
            url:"advertisement/advertise_action.php",
            method:'POST',
            data:formData,
            contentType:false,
            processData:false,
            success:function(result) {
              var data = $.parseJSON(result);
              if (data.success) {
                // alert("hello");
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
