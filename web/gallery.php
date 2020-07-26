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
<br>
<!-- Slider -->
<div class="gallery_banner">
</div>
<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">
			<div class="sws-agileits-heading">
				<h3 class="title">Gallery</h3> 
			</div>
	 <div class="swslayouts-grids gal-wthree-agileits">
			<div id="jzBox" class="jzBox">
				<div id="jzBoxNextBig"></div>
				<div id="jzBoxPrevBig"></div>
				<img src="#" id="jzBoxTargetImg" alt=""/>
				<div id="jzBoxBottom">
					<div id="jzBoxTitle"></div>
					<div id="jzBoxMoreItems">
						<div id="jzBoxCounter"></div>
						<i class="arrow-left" id="jzBoxPrev"></i> 
						<i class="arrow-right" id="jzBoxNext"></i> 
					</div>
					<i class="close" id="jzBoxClose"></i>
				</div>
			</div>
			<div class="gallery-grids-row">
				<?php 
					$select = "select * from gallery";
					$result = mysqli_query($con, $select);
					while ($row = mysqli_fetch_assoc($result)) {?>
						<div class="col-md-3 gallery-grid">
							<div class="wpf-demo-4">  
								<a href="../admin/upload/gallery/<?=$row['image']?>" class="jzBoxLink item-hover" title="financial Business">
									<img src="../admin/upload/gallery/<?=$row['image']?>" alt=" " class="img-responsive" />
									<div class="view-caption">
										<p>Full View</p>
									</div> 
								</a>    		
							</div>
						</div>  
					<?php 	
					}
				 ?>
				
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
	</div>
	<!-- //gallery --> 
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
<!-- start-smoth-scrolling -->
<script src="js/jzBox.js"></script>

</body>
</html>