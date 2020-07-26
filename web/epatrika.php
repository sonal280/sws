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
<br/><br/>
<div class="epatrika_banner">
</div>
<!-- Slider -->
<!-- //Slider -->
	<!--about-->
	<?php 
		$month = "";
		if (isset($_POST['search'])) {
			$month = "WHERE magazine_month LIKE '%".$_POST['search']."%'";
		}
		else{
			$month = "WHERE magazine_month !=''";
		}
		$search_query = "select * from magazine ".$month;
		$result = mysqli_query($con, $search_query);

	 ?>

	<div class="team">
	<div class="swsagile-spldishes">
		<div class="container">
			
			<div class="sws-agileits-heading">
				<h3 class="title">Our Patrika</h3> 
				<br>
			</div>
			<form action="" method="post">
				<div class="row">
					<div class="col-md-2">
						<select name="search" id="" class="form-control">
							<?php if (isset($_POST['search']) && ($_POST['search'] == 'January')) {?>
							<option value="January" selected>January</option>
							<?php } else{?> 
							<option value="January">January</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'February')) {?>
							<option value="February" selected>February</option>
							<?php } else{?> 
							<option value="February">February</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'March')) {?>
							<option value="March" selected>March</option>
							<?php } else{?> 
							<option value="March">March</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'April')) {?>
							<option value="April" selected>April</option>
							<?php } else{?> 
							<option value="April">April</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'May')) {?>
							<option value="May" selected>May</option>
							<?php } else{?> 
							<option value="May">May</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'June')) {?>
							<option value="June" selected>June</option>
							<?php } else{?> 
							<option value="June">June</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'July')) {?>
							<option value="July" selected>July</option>
							<?php } else{?> 
							<option value="July">July</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'August')) {?>
							<option value="August" selected>August</option>
							<?php } else{?> 
							<option value="August">August</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'September')) {?>
							<option value="September" selected>September</option>
							<?php } else{?> 
							<option value="September">September</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'October')) {?>
							<option value="October" selected>October</option>
							<?php } else{?> 
							<option value="October">October</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'November')) {?>
							<option value="November" selected>November</option>
							<?php } else{?> 
							<option value="November">November</option> <?php } ?>

							<?php if (isset($_POST['search']) && ($_POST['search'] == 'December')) {?>
							<option value="December" selected>December</option>
							<?php } else{?> 
							<option value="December">December</option> <?php } ?>
	
						</select>
					</div>
					<div class="col-md-2">
						<input type="submit" name="submit" class="form-control btn-success" >
					</div>
				</div>
			</form>
			<div class="spldishes-agileinfo">
				<div class="spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
					<?php 
						if (mysqli_num_rows($result)<0) {?>
							<div class="item g1">
								<h3>No Magazine Available</h3>
							</div>
						<?php 
						}
						else{
						while ($row = mysqli_fetch_assoc($result)) { ?>
							<div class="item g1">
								<img class="lazyOwl" src="../admin/upload/cover_image/<?=$row['cover_image']?>" title="Chhattisgar rajya patrika August 2019" alt=""/>
								<div class="agile-dish-caption">
									<h4><?=$row['magazine_name']?></h4>
									<p><?=$row['magazine_month']?>&nbsp;&nbsp;&nbsp;<?=$row['magazine_year']?></p>
									<span>Patrika</span>
									<ul class="top-links">
										<li><a href="../admin/upload/pdf/<?=$row['magazine_pdf']?>" ><i class="fa ">SHOW</i></a></li>
									</ul>
								</div>
							</div>

							
						<?php 
						}
					}
					 ?>	
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
	<!-- //about -->
<!-- welcome -->

<!-- //news -->
<!-- Footer -->
<?php include_once("footer.php"); ?>
<!-- //Footer -->
<!-- js-scripts -->					
<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->	
<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager:false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
<!-- //Baneer-js --> 
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
<!-- //js-scripts -->
<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  

</body>
</html>












