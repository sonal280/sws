<?php include '../admin/includes/db.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>CHHATTISGARH RAJYA RASHTRIYA MASIK PATRIKA</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Chhattisgarh Rashtriya Patrika,Masik Patrika,Chhattisgarh Rajya News,Raipur latest News,magzines,advertisement,todays latest,cricket news,sports news,health tips,dainik bhaskar news,hindi news english news " />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){window.scrollTo(0,1); }</script>

<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-151366195-1');
</script>

<script data-ad-client="ca-pub-6627393698013162" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

</head>
<body>

<div class="main-agile">
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="col-md-4 swsl_header_right swsl-r">
				<ul>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:info@chhattisgarhrajya.com">info@chhattisgarhrajya.com</a></li>
				</ul>
			</div>
			<div class="col-md-4 swsl_header_left">
				<div class="swsls-social-icons">
					<a class="facebook" href="https://www.facebook.com/Chhattisgarh-Rajya-388929701920670/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				</div>
			</div>
			<div class="col-md-4 swsl_header_right">
				<div class="agileinfo_search">
					<!--form action="#" method="post"-->
						<!-- input type="text" name="Search" placeholder="Type text here..." required="" -->
						<ul>
							<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><a href="tel:91 98262 37000">Mobile No. :9826237000</a></li>
						</ul>
						<!-- input type="submit" value=" " -->
					<!--/form -->
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="header-bottom">
		<!-- navigation section -->
		<?php include_once("navMenu.php"); ?>
		<!-- /navigation section -->
	</div>
	<!-- //header -->
</div>
<br>	<!-- //header -->
</div>
<!-- Slider -->
<div class="contact_banner">
</div>
<!-- contact -->
	<div class="contact">
		<div class="container"> 
			<div class="sws-agileits-heading">
				<h3 class="title">Contact</h3> 
			</div>		
			<div class="map"> 
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14874.599902309661!2d81.63017611864446!3d21.245724223514284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssws%20raipur!5e0!3m2!1sen!2sin!4v1582911907958!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div> 
			<div class="contact-agileinfo"> 
				<div class="col-md-7 contact-right">				
					<form method="post" enctype="multipart/form-data" name="myForm" id="myForm"> 
						<input type="text" name="name" placeholder="Name" required="">
						<input type="email" name="email" placeholder="Email" required=""> 
						<input type="text" name="telephone" placeholder="Telephone" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<?php 
					$select = "SELECT * FROM `address` order by cid desc limit 0,1";
					$query = mysqli_query($con, $select);
					$result = mysqli_fetch_array($query);
					?>
					
						<div class="col-md-5 contact-left">
						<p>"<?php echo $result['about'] ?>"</p>
						<ul>
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								<?php echo $result['address'] ?>
							</li>					
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<?php echo $result['mobile_number'] ?>
							</li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
								<?php echo $result['phone_number'] ?>
							</li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								<a href="mailto:example@mail.com"><?php echo $result['email'] ?></a>
							</li>
						</ul>
					</div>
				
										
				<div class="clearfix"> </div>  
			</div>			
		</div>			
	</div>
	<!-- //contact -->  

<!-- Footer -->
<div class="footer swsls">
	<div class="footer-2 swsls">
		<div class="container">
			<div class="footer-main">
				<div class="footer-top">
					<div class="col-md-4 ftr-grid fg2">
						<h3>Our Address</h3>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p>+1 (512) 154 8176</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="ftr-address">
							<div class="local">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="ftr-text">
								<p><a href="mailto:info@example.com">info@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-4 ftr-grid">
						<div class="logo-fo">
							<h2><a href="index.html">Corporate</a></h2>
						</div>
					</div>
					<div class="col-md-4 swsl_header_left-2">
						<div class="swsls-social-icons-2">
							<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
							<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyrights">
		<p>&copy; 2018 Corporate. All rights reserved | Design by <a href="http://swslayouts.com">swslayouts</a></p>
	</div>	
</div>
<!-- //Footer -->
<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>


<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

<script>
  $(function() {
    $("#myForm").validate({
      rules:{
        name:{
          required:true
        },
        email:{
          required:true
        },
         message:{
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
        url:'contact_request.php',
        method:'POST',
        data: formData,
        // contentType:false,
        // processData:false,
        success:function(data) {
          var data = $.parseJSON(data);
          if (data.success) {
            // window.location = data.location;
            alert(data.msg);
            // location.reload(true);
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
<!-- start-smoth-scrolling -->
<!-- //js-scripts -->
</body>
</html>