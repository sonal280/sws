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
        Add New Contact
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
        <li class="breadcrumb-item active">Add New Contact</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <!-- Basic Forms -->
      <div class="box box-default">
        
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form method="post" enctype="multipart/form-data" name="myForm" id="myForm">
                <div class="row">
                  <div class="form-group col-md-12">
                    <h5>About <span class="text-danger">*</span></h5>
                    <div class="controls">
                     <textarea name="about" id="about" cols="30" rows="10" class="form-control hindi-input"></textarea>
                     </div>
                  </div>
                  <div class="form-group col-md-12">
                    <h5>Address <span class="text-danger">*</span></h5>
                    <div class="controls">
                    <input type="text" name="address" id="address" class="form-control hindi-input">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="form-group col-md-12">
                    <h5>Phone Number<span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="number" name="phone_number" id="phone_number" accept="image/jpeg, image/png" class="form-control"> 
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <h5>Mobile Number<span class="text-danger">*</span></h5>
                    <div class="controls">
                      <input type="number" name="mobile_number" id="mobile_number"  class="form-control"> 
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-md-12">
                    <h5>E-mail<span class="text-danger">*</span></h5>
                    <input type="email" name="email" id="email" class="form-control">
                  </div>
                </div>


                <div class="text-xs-right">
                  <button type="submit" class="btn btn-info" name="submit" >Submit</button>
                </div>
              </form>
              
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
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
    $("#myForm").validate({
      rules:{
        about:{
          required:true
        },
        email:{
          required:true
        },
         mobile_number:{
          required:true
        }
      }
    });
  });


  $("#myForm").on('submit', function(e) {
    e.preventDefault();
    if ($('#myForm').valid()) {
      var formData = $('#myForm').serialize()
      // var formData = new FormData($('#myForm')[0]);
      $.ajax({
        url:'contact/add_action.php',
        method:'POST',
        data: formData,
        // contentType:false,
        // processData:false,
        success:function(data) {
          var data = $.parseJSON(data);
          if (data.success) {
            window.location = data.location;
            alert(data.msg);
            // location.reload(true);
          }
          else{
             alert(data.msg);
          }
        }
      })
    }
  })
</script>

<script>
  var start = 2020;
  var end = new Date().getFullYear();
  var options = "";
  for(var year = start ; year <=end; year++){
    options += "<option>"+ year +"</option>";
  }
  document.getElementById("year").innerHTML = options;
</script>
</body>
</html>
