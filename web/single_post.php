
<?php include '../admin/includes/db.php'; 

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


<link rel="stylesheet" type="text/css" href="plugins/zebra-tooltip/zebra_tooltips.min.css">

<!-- Owl Carousel plugin css file. only used pages -->
<link rel="stylesheet" type="text/css" href="plugins/owl-carousel/assets/owl.carousel.min.css">

<!-- Ideabox main theme css file. you have to add all pages -->
<link rel="stylesheet" type="text/css" href="css/main-style.css">

<!-- Ideabox responsive css file -->
<link rel="stylesheet" type="text/css" href="css/responsive-style.css">
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
				<!-- <div class="swsls-social-icons">
					<a class="facebook" href="https://www.facebook.com/Chhattisgarh-Rajya-388929701920670/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				</div> -->
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

	<!--Main container start -->
	<main class="main-container">

		<!-- Detail extra post start -->
		<div class="extra-posts">
			<div class="extra-post-wrapper" >

			<?php 
	        $single_post = "SELECT * FROM news ORDER BY nid LIMIT 0,3";
	        $single_result = mysqli_query($con, $single_post);
	        $i=1;
	         while($sp = mysqli_fetch_assoc($single_result))
	        { ?>


				<div class="columns column-2" onclick="window.location='single_post.php?id=<?=$sp['nid']?>'">
					<article class="extra-post-box">
						<a href="#" class="extra-post-link">
							<div class="post-image">
								<span><img src="../admin/upload/news/<?=$sp['image']?>" width="80" height="80"></span>
							</div>
							<div class="post-title">
								<?=$sp['title']?>
								<span class="post-date"><?= $i?></span>
							</div>
						</a>
					</article>
				</div>

				<?php $i++;
				
			}

				 ?>

			</div>
		</div>
		<!-- Detail extra post start -->

		<section class="main-content sidebar-left">
			<div class="main-content-wrapper">
				<div class="content-body">
				<?php 
					$select_des = "SELECT * FROM news where nid='".$_REQUEST['id']."'";
					$select_result = mysqli_query($con, $select_des);
					$select_row = mysqli_fetch_assoc($select_result);

				 ?>

					<!-- article body start -->
					<article class="article-wrapper">
						<div class="article-header">
							<div class="breadcrumb">
								<ul>
									<li><span><a href="index.php">Home</a>/<a href="news.php">News</span></a> </li>
									<!-- <li><a href="#"><span><?=$select_row['']?></span></a> <i class="material-icons">&#xE315;</i></li> -->
									
								</ul>
							</div>

							<div class="article-header-title">
								<h1 class="article-title"><?=$select_row['title']?></h1>
							</div>

							<!-- <div class="article-meta-info">
								<a href="#" class="author-name"><?=$select_row['created_by']?></a> —
								<span class="article-post-date">49 minutes ago</span>
								<span class="article-reading-time">reading time 2 minute</span>
							</div> -->
							
						</div>
						<div class="article-content"> <!-- adbox120 or adbox160 -->
							<!-- <div class="article-left-box">
								<div class="article-left-box-inner">
									<div class="article-share">
										<a href="#" class="facebook"></a>
										<a href="#" class="twitter"></a>
										<a href="#" class="google-plus"></a>
									</div>
									<span class="add-to-favorite" data-zebra-tooltip title="Ad to favorite">
										<i class="material-icons"></i>
									</span>
									<ul class="article-emoticons">
										<li>
											<a href="#" class="popular happy"></a><span>13</span>
											<ul>
												<li><a href="#" class="love"></a><span>7</span></li>
												<li><a href="#" class="shocked"></a><span>5</span></li>
												<li><a href="#" class="angry"></a><span>4</span></li>
												<li><a href="#" class="crying"></a><span>1</span></li>
												<li><a href="#" class="sleepy"></a><span>0</span></li>
											</ul>
										</li>										
									</ul>
								</div>
							</div> -->
							<div class="article-inner">
								<?=$select_row['description']?>
								<!-- article tags area start -->
								<!-- article tags area end -->
							</div>

							<!--this is important for the left ad box or share box fixer -->
							<div id="endOfTheArticle"></div>

							<!-- More article unit start -->
							<div class="more-article">
								<div class="w-header">
									<!-- <div class="w-title">Continue Reading</div> -->
									<div class="w-seperator"></div>
								</div>
								<div class="more-posts">

								<?php 
			                    $con_post = "SELECT * FROM news ORDER BY nid DESC LIMIT 4,3";
			                    $con_result = mysqli_query($con, $con_post);
			                    $i=1;
			                     while($con_row = mysqli_fetch_assoc($con_result))
			                    { ?>
									<div class="columns column-2">

								    	<article class="post-box" style="background-image: url(../admin/upload/news/<?=$con_row['image']?>);">
								    		<div class="post-overlay">
								    			<a href="#" class="post-category" title="Title of blog post" rel="tag">Technology</a>
								    			<h3 class="post-title"><?=$con_row['title']?></h3>
								    			<div class="post-meta">
								    				<div class="post-meta-author-avatar">
								    					<img alt="avatar" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" class="avatar" height="24" width="24">
								    				</div>
								    				<div class="post-meta-author-info">
								    					<span class="post-meta-author-name">
								    						<a href="#" title="Posts by John Doe" rel="author"><?=$con_row['user_name']?></a>
								    					</span>
								    					<span class="middot">·</span>
								    					<span class="post-meta-date">
								    						<abbr class="published updated" title="December 4, 2017"><?=$con_row['created_at']?></abbr>
								    					</span>
								    				</div>
								    			</div>
								    		</div>
								    		<a href="#" class="post-overlayLink"></a>
								    	</article>

								    </div>
								    
								    <?php 
								}
								     ?>
								</div>
							</div>
							<!-- More article unit end -->
						</div>
					</article>
					<!-- article body end -->

				</div>
				<div class="content-sidebar">
					<div class="sidebar_inner">

						<div class="widget-item">
							<div class="w-header">
								<div class="w-title">Editor's Picks</div>
								<div class="w-seperator"></div>
							</div>
							<div class="w-boxed-post">
								<ul>
								<?php 
			                    $editors_post = "SELECT * FROM news ORDER BY nid DESC LIMIT 0,4";
			                    $editors_result = mysqli_query($con, $editors_post);
			                    $i=1;
			                     while($editors_row = mysqli_fetch_assoc($editors_result))
			                    { ?>
									<li class="active" onclick="window.location='single_post.php?id=<?=$editors_row['nid']?>'">
										<a href="#" style="background-image: url(../admin/upload/news/<?=$editors_row['image']?>);">
											<div class="box-wrapper">
												<div class="box-left">
													<span><?=$i?></span>
												</div>
												<div class="box-right">
													<h3 class="p-title"><?=$editors_row['title']?></h3>
													<div class="p-icons">
														213 likes . 124 comments
													</div>
												</div>
											</div>
										</a>
									</li>
									<?php $i++; }
									 ?>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
	</main>

	<br>

	
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